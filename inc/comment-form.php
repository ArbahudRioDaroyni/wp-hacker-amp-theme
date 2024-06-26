<?php

// buatkan dokumentasi dalam bahasa inggris
// display comment form
function the_comment_form( $args = array('format' => 'html5'), $post_id = null ) {
	// If no post ID is provided, retrieve the current post's ID
	if ( null === $post_id ) {
		$post_id = get_the_ID();
	}
 
	// Exit the function when comments for the post are closed.
	if ( ! comments_open( $post_id ) ) {
		/**
		 * Fires after the comment form if comments are closed.
		 *
		 * @since 3.0.0
		 */
		do_action( 'comment_form_comments_closed' );
		return;
	}
 
	// Retrieve current commenter and user information
	$commenter			= wp_get_current_commenter();
	$user						= wp_get_current_user();
	$user_identity	= $user->exists() ? $user->display_name : '';
	
	// Parse the arguments and set default format to HTML5 or XHTML if not specified
	$args = wp_parse_args( $args );
	if ( ! isset( $args['format'] ) ) {
			$args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
	}
	
	// Check if name and email are required and set HTML required attribute accordingly
	$req			= get_option( 'require_name_email' );
	$html_req	= ( $req ? " required='required'" : '' );
	$html5		= 'html5' === $args['format'];

	$fields = [
		'email'  => sprintf(
			'<div class="column col-md-6"><div class="form-group">%s</div></div>',
			sprintf(
				'<input id="email" class="form-control" name="email" %s value="%s" placeholder="Email *" size="30" maxlength="100" aria-describedby="email-notes"%s />',
				( $html5 ? 'type="email"' : 'type="text"' ),
				esc_attr( $commenter['comment_author_email'] ),
				$html_req
			)
		),
		'url'    => sprintf(
			'<div class="column col-md-6"><div class="form-group">%s</div></div>',
			sprintf(
				'<input id="url" class="form-control" name="url" %s value="%s" placeholder="Website diawali dengan https://" size="30" maxlength="200" />',
				( $html5 ? 'type="url"' : 'type="text"' ),
				esc_attr( $commenter['comment_author_url'] )
		)
		),
		'author' => sprintf(
			'<div class="column col-md-12"><div class="form-group">%s</div></div>',
			sprintf(
				'<input id="author" class="form-control" name="author" type="text" value="%s" placeholder="Nama *" size="30" maxlength="245"%s />',
				esc_attr( $commenter['comment_author'] ),
				$html_req
		)
		)
	];

	if ( has_action( 'set_comment_cookies', 'wp_set_comment_cookies' ) && get_option( 'show_comments_cookies_opt_in' ) ) {
			$consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

			$fields['cookies'] = sprintf(
					'<p class="comment-form-cookies-consent custom-control custom-checkbox col-md-12">%s %s</p>',
					sprintf(
							'<input id="wp-comment-cookies-consent" class="custom-control-input" name="wp-comment-cookies-consent" type="checkbox" value="yes"%s />',
							$consent
					),
					sprintf(
							'<label class="custom-control-label lead d-inline" for="wp-comment-cookies-consent">%s</label>',
							__( 'Save my name, email, and website in this browser for the next time I comment.' )
					)
			);

			// Ensure that the passed fields include cookies consent.
			if ( isset( $args['fields'] ) && ! isset( $args['fields']['cookies'] ) ) {
					$args['fields']['cookies'] = $fields['cookies'];
			}
	}

	$required_text = sprintf(
		/* translators: %s: Asterisk symbol (*). */
		' ' . __( 'Required fields are marked %s' ),
		'<span class="required">*</span>'
	);

    /**
     * Filters the default comment form fields.
     *
     * @since 3.0.0
     *
     * @param string[] $fields Array of the default comment fields.
     */
    $fields = apply_filters( 'comment_form_default_fields', $fields );
 
    $defaults = array(
        'fields'               => $fields,
        'comment_field'        => sprintf(
            '<div class="column col-md-12"><div class="form-group">%s</div></div>',
            '<textarea id="comment" class="form-control" name="comment" placeholder="Masukkan Komentar atau Masukan Anda, atau Bisa Request Artikel untuk Kami Terbitkan" cols="45" rows="8" maxlength="65525" required="required"></textarea>'
        ),
        'must_log_in'          => sprintf(
            '<p class="must-log-in">%s</p>',
            sprintf(
                /* translators: %s: Login URL. */
                __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                /** This filter is documented in wp-includes/link-template.php */
                wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
            )
        ),
        'logged_in_as'         => sprintf(
            '<p class="logged-in-as">%s</p>',
            sprintf(
                /* translators: 1: Edit user link, 2: Accessibility text, 3: User name, 4: Logout URL. */
                __( '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>' ),
                get_edit_user_link(),
                /* translators: %s: User name. */
                esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.' ), $user_identity ) ),
                $user_identity,
                /** This filter is documented in wp-includes/link-template.php */
                wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
            )
        ),
        'comment_notes_before' => sprintf(
					'<div class="col-md-12 comment-notes">%s%s</div>',
            sprintf(
							'<span id="email-notes">%s</span>',
							__( 'Your email address will not be published.' )
            ),
            ( $req ? $required_text : '' )
        ),
        'comment_notes_after'  => '',
        'action'               => site_url( '/wp-comments-post.php' ),
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'class_form'           => 'comment-form',
        'class_submit'         => 'btn btn-primary',
        'name_submit'          => 'submit',
        'title_reply'          => '<span><span class="text-main-1">'.__( 'Tinggalkan' ).'</span>'.__( ' Balasan' ).'</span>',
        /* translators: %s: Author of the comment being replied to. */
        'title_reply_to'       => __( 'Leave a Reply to %s' ) . ' ',
        'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title section-title mb-2">',
        'title_reply_after'    => '</h3>',
        'cancel_reply_before'  => '<small>',
        'cancel_reply_after'   => '</small>',
        'cancel_reply_link'    => __( 'Cancel reply' ),
        'label_submit'         => __( 'Post Comment' ),
        'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
        'submit_field'         => '<p class="form-submit col-md-12">%1$s %2$s</p>',
        'format'               => 'xhtml',
    );
 
    /**
     * Filters the comment form default arguments.
     *
     * Use {@see 'comment_form_default_fields'} to filter the comment fields.
     *
     * @since 3.0.0
     *
     * @param array $defaults The default comment form arguments.
     */
    $args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );
 
    // Ensure that the filtered args contain all required default values.
    $args = array_merge( $defaults, $args );
 
    // Remove aria-describedby from the email field if there's no associated description.
    if ( false === strpos( $args['comment_notes_before'], 'id="email-notes"' ) ) {
        $args['fields']['email'] = str_replace(
            ' aria-describedby="email-notes"',
            '',
            $args['fields']['email']
        );
    }
 
    /**
     * Fires before the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_before' );
    ?>
    <div id="respond" class="comment-respond commentsform-articles">
        <?php
        echo $args['title_reply_before'];
 
        comment_form_title( $args['title_reply'], $args['title_reply_to'] );
 
        echo $args['cancel_reply_before'];
 
        cancel_comment_reply_link( $args['cancel_reply_link'] );
 
        echo $args['cancel_reply_after'];
 
        echo $args['title_reply_after'];
 
        if ( get_option( 'comment_registration' ) && ! is_user_logged_in() ) :
 
            echo $args['must_log_in'];
            /**
             * Fires after the HTML-formatted 'must log in after' message in the comment form.
             *
             * @since 3.0.0
             */
            do_action( 'comment_form_must_log_in_after' );
 
        else :
 
            printf(
                '<div class="comment-form %s">
                <form action-xhr="'. admin_url('admin-ajax.php?action=amp_comment_submit') . '" method="post" id="%s" class="%s"%s>
                <div class="row">',
                esc_url( $args['action'] ),
                esc_attr( $args['id_form'] ),
                esc_attr( $args['class_form'] ),
                ( $html5 ? '' : '' )
            );
 
            /**
             * Fires at the top of the comment form, inside the form tag.
             *
             * @since 3.0.0
             */
            do_action( 'comment_form_top' );
 
            if ( is_user_logged_in() ) :
 
                /**
                 * Filters the 'logged in' message for the comment form for display.
                 *
                 * @since 3.0.0
                 *
                 * @param string $args_logged_in The logged-in-as HTML-formatted message.
                 * @param array  $commenter      An array containing the comment author's
                 *                               username, email, and URL.
                 * @param string $user_identity  If the commenter is a registered user,
                 *                               the display name, blank otherwise.
                 */
                echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity );
 
                /**
                 * Fires after the is_user_logged_in() check in the comment form.
                 *
                 * @since 3.0.0
                 *
                 * @param array  $commenter     An array containing the comment author's
                 *                              username, email, and URL.
                 * @param string $user_identity If the commenter is a registered user,
                 *                              the display name, blank otherwise.
                 */
                do_action( 'comment_form_logged_in_after', $commenter, $user_identity );
 
            else :
 
                echo $args['comment_notes_before'];
 
            endif;
 
            // Prepare an array of all fields, including the textarea.
            $comment_fields = array( 'comment' => $args['comment_field'] ) + (array) $args['fields'];
 
            /**
             * Filters the comment form fields, including the textarea.
             *
             * @since 4.4.0
             *
             * @param array $comment_fields The comment fields.
             */
            $comment_fields = apply_filters( 'comment_form_fields', $comment_fields );
 
            // Get an array of field names, excluding the textarea
            $comment_field_keys = array_diff( array_keys( $comment_fields ), array( 'comment' ) );
 
            // Get the first and the last field name, excluding the textarea
            $first_field = reset( $comment_field_keys );
            $last_field  = end( $comment_field_keys );
 
            foreach ( $comment_fields as $name => $field ) {
 
                if ( 'comment' === $name ) {
 
                    /**
                     * Filters the content of the comment textarea field for display.
                     *
                     * @since 3.0.0
                     *
                     * @param string $args_comment_field The content of the comment textarea field.
                     */
                    echo apply_filters( 'comment_form_field_comment', $field );
 
                    echo $args['comment_notes_after'];
 
                } elseif ( ! is_user_logged_in() ) {
 
                    if ( $first_field === $name ) {
                        /**
                         * Fires before the comment fields in the comment form, excluding the textarea.
                         *
                         * @since 3.0.0
                         */
                        do_action( 'comment_form_before_fields' );
                    }
 
                    /**
                     * Filters a comment form field for display.
                     *
                     * The dynamic portion of the filter hook, `$name`, refers to the name
                     * of the comment form field. Such as 'author', 'email', or 'url'.
                     *
                     * @since 3.0.0
                     *
                     * @param string $field The HTML-formatted output of the comment form field.
                     */
                    echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
 
                    if ( $last_field === $name ) {
                        /**
                         * Fires after the comment fields in the comment form, excluding the textarea.
                         *
                         * @since 3.0.0
                         */
                        do_action( 'comment_form_after_fields' );
                    }
                }
            }
 
            $submit_button = sprintf(
                $args['submit_button'],
                esc_attr( $args['name_submit'] ),
                esc_attr( $args['id_submit'] ),
                esc_attr( $args['class_submit'] ),
                esc_attr( $args['label_submit'] )
            );
 
            /**
             * Filters the submit button for the comment form to display.
             *
             * @since 4.2.0
             *
             * @param string $submit_button HTML markup for the submit button.
             * @param array  $args          Arguments passed to comment_form().
             */
            $submit_button = apply_filters( 'comment_form_submit_button', $submit_button, $args );
 
            $submit_field = sprintf(
                $args['submit_field'],
                $submit_button,
                get_comment_id_fields( $post_id )
            );
 
            /**
             * Filters the submit field for the comment form to display.
             *
             * The submit field includes the submit button, hidden fields for the
             * comment form, and any wrapper markup.
             *
             * @since 4.2.0
             *
             * @param string $submit_field HTML markup for the submit field.
             * @param array  $args         Arguments passed to comment_form().
             */
            echo apply_filters( 'comment_form_submit_field', $submit_field, $args );
 
            /**
             * Fires at the bottom of the comment form, inside the closing </form> tag.
             *
             * @since 1.5.0
             *
             * @param int $post_id The post ID.
             */
            do_action( 'comment_form', $post_id );
 
            echo '
              </div>
              <div submit-error>
                <template type="amp-mustache">{{msg}}</template>
              </div>
              <div submit-success>
                <template type="amp-mustache">
                  <p>{{msg}}</p>
                  <ul id="comments-list" class="comments-list comments p-0">
                    <li class="comment byuser comment-author-{{data.comment_author}} bypostauthor even thread-even depth-1 prompt children" id="comment-{{data.comment_ID}}">
                      <div class="header-comment">
                        <div id="img-comment-{{data.comment_ID}}" class="thumb-comment"><amp-img alt="{{data.comment_author}}" src="https://secure.gravatar.com/avatar/5c9f85585c5a4639cfa79daed4f7b8fc?s=96&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/5c9f85585c5a4639cfa79daed4f7b8fc?s=96&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo avatar-default photo-comment" height="35" width="35"></amp-img></div>
                        <div id="author-comment-{{data.comment_ID}}" class="author"><span class="vcard h6"><a rel="nofollow" href="{{data.comment_author}}" class="fn name">{{data.comment_author}}</a></span></div>
                        <div id="date-comment-{{data.comment_ID}}"><a rel="nofollow" href="https://jejakhacker.com/jasa-hack-back-akun-ml/#comment-{{data.comment_ID}}"><span class="date">{{data.comment_date}}</span></a></div>
                      </div>
                      <div class="body-comment-{{data.comment_ID}}"><p>{{data.comment_content}}</p></div>
                    </li>
                  </ul>
                  <p>Komentar Anda dalam moderasi</p>
                </template>
              </div>
            </form></div>';
 
        endif;
        ?>
    </div><!-- #respond -->
    <?php
 
    /**
     * Fires after the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_after' );
}
// /. display comment form