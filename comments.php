<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-hacker-amp-theme
 * @package Hacker_AMP_Theme
 * @subpackage Hacker_AMP_Theme
 * @since 1.0.1
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<section class="col-lg-12 mt-2">
	<div id="comments" class="card-terminal">
		<div class="toolbar">
			<div class="action">
				<button class="button red"></button>
				<button class="button yellow"></button>
				<button class="button green"></button>
			</div>
			<p class="title">
				<span>komentar</span><!-- 
				--><span><?= strtolower( str_replace( " ", "", get_bloginfo('name') ) ) ?>.com</span>
			</p>
			<div class="new-tab">+</div>
		</div><!-- .toolbar -->

		<div class="body">

			<?php if ( have_comments() ) : ?>
				<h3 class="output">Komentar Terbaru</h3>

				<ul>
					<?php display_comments_list(); ?>
				</ul><!-- .comment-list -->
				
				<?php display_comments_pagination(); ?>

				<div class="input">
					<input placeholder="Type a command..." class="text" type="text" />
				</div>

			<?php else : // Check for have_comments(). ?>
				<h3 class="output no-comments">Belum ada komentar</h3>
			<?php endif; ?>

			<?php
				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>
				<h3 class="output no-comments">Komentar Ditutup</h3>
			<?php endif; ?>

		</div><!-- .body -->
	</div><!-- .comments-area -->
</section>

<section id="respond" class="col-lg-12 mt-2">
	<div class="card-terminal">
		<div class="toolbar">
			<div class="action">
				<button class="button red"></button>
				<button class="button yellow"></button>
				<button class="button green"></button>
			</div>
			<p class="title">
				<span>balas</span><!-- 
				--><span><?= strtolower( str_replace( " ", "", get_bloginfo('name') ) ) ?>.com</span>
			</p>
			<div class="new-tab">+</div>
		</div><!-- .toolbar -->
		<div class="body">
			<h3 id="reply-title" class="output">
				Tinggalkan Balasan
				<small>
					<a rel="nofollow" id="cancel-comment-reply-link" href="/wordpress/kode-rahasia-game-slot-online/comment-page-1/#respond" style="display:none;">
						Batalkan balasan
					</a>
				</small>
			</h3>
			<form
				method="post"
				action-xhr="<?= admin_url('admin-ajax.php?action=ajax_comment_submit'); ?>"
				custom-validation-reporting="show-all-on-submit"
				target="_blank"
				id="%s"
				class="form">
				<fieldset>
					<p id="email-notes">Alamat email Anda tidak akan dipublikasikan.</p> 
					<p class="required-field-message">Ruas yang wajib ditandai <span class="required">*</span></p>
					<div class="form-item">
						<label class="promt" for="comment"><span class="author">promt</span>komentar:</label>
						<div class="input-group">
							<span class="char">$</span>
							<textarea
								name="comment"
								id="comment"
								class="input"
								placeholder="keren!"
								required
								cols="45"
								rows="8"
							></textarea>
						</div>
						<span visible-when-invalid="valueMissing" validation-for="comment">Komentar tidak boleh kosong</span>
					</div>
					<div class="form-item">
						<label class="promt" for="author"><span class="author">promt</span>nama:</label>
						<div class="input-group">
							<span class="char">$</span>
							<input
								type="text"
								name="author"
								id="author"
								class="input"
								placeholder="john"
								required
								value=""
								size="30"
							>
						</div>
						<span visible-when-invalid="valueMissing" validation-for="author">Nama tidak boleh kosong</span>
					</div>
					<div class="form-item">
						<label class="promt" for="email"><span class="author">promt</span>email:</label>
						<div class="input-group">
							<span class="char">$</span>
							<input
								type="email"
								name="email"
								id="email"
								class="input"
								placeholder="example@gmail.com"
								required
								value=""
								size="30"
							>
						</div>
						<span visible-when-invalid="valueMissing" validation-for="email">Email tidak boleh kosong</span>
						<span visible-when-invalid="typeMismatch" validation-for="email">(e.g. example@gmail.com).</span>
					</div>
					<div class="form-item">
						<label class="promt" for="url"><span class="author">promt</span>website:</label>
						<div class="input-group">
							<span class="char">$</span>
							<input
								type="url"
								name="url"
								id="url"
								class="input"
								placeholder="https://jejakcyber.com"
								required
								value=""
								size="30"
							>
						</div>
						<span visible-when-invalid="typeMismatch" validation-for="url">(e.g. https://jejakcyber.com).</span>
					</div>
					<p class="comment-form-cookies-consent">
						<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> 
						<label for="wp-comment-cookies-consent">
								Ingat saya
						</label>
					</p>
					<p class="form-submit">
						<input name="submit" type="submit" id="submit" class="amp-form-submit user-valid valid" value="Kirim Komentar"> 
						<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_ID">
						<?php wp_nonce_field( 'comment_post' ); ?>
						<input type="hidden" name="comment_parent" id="comment_parent" [value]="textValue">
					</p>
				</fieldset>

				<div submitting="">
					<template type="amp-mustache">
						Mengirim komentar...
					</template>
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
				
			</form>
	</div>
</section>
