<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-hacker-amp-theme
 * @package Hacker_AMP_Theme
 * @subpackage Hacker_AMP_Theme
 * @since 1.0.1
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('h-entry'); ?>>
			
	<header class="jumbotron">
		<a
			href="<?php echo esc_url( get_category_link( get_the_category()[0]->term_id ) ) ?>"
			class="p-category"
			rel="category"
		><?php echo get_the_category()[0]->name; ?></a>
		<h1 class="p-name"><?php the_title(); ?></h1>
		<p>
			<img
				src="<?php echo get_avatar_url($comment, null) ?>"
				alt="<?php echo esc_attr(get_the_author()); ?>"
				class="u-photo"
				width="35"
				height="35"
			>
			Diposting oleh
			<cite class="p-author h-card">
				<a
					href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>"
					title="<?php echo esc_attr(get_the_author()); ?>"
					class="u-url p-name"
					rel="author"
				><?php the_author(); ?></a>
			</cite>
			<time
				class="dt-published"
				datetime="<?php the_time('c'); ?>"
			><?php the_time('D, d F Y'); ?></time>
		</p>
	</header><!-- .entry-header -->

	<section class="e-ad">
		<amp-ad width="100vw" height="320"
			type="adsense"
			data-ad-client="ca-pub-3780041077137992"
			data-ad-slot="1782717232"
			data-auto-format="rspv"
			data-full-width="">
			<div overflow="Memuat iklan ..."></div>
			<div fallback>No ad for you</div>
		</amp-ad>
	</section>

	<section itemscope itemtype="https://schema.org/SoftwareApplication">
		<amp-script layout="flex-item" src="<?php echo get_template_directory_uri() . '/assets/js/page-file.js' ?>">
			<div id="download-area" class="card card-download">
				<div class="body">
					<div class="detail">
						<figure class="figure">
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail('thumbnail', [
									'class' => 'image u-photo'
								]);
							} else { ?>
								<img src="<?php echo get_first_image_in_post() ?>" class="image u-photo" loading="lazy" alt="<?php echo get_the_title() ?>" />
							<?php } ?>
						</figure>
						<div class="info">
							<h2 class="mt-0" itemprop="name"><?php echo esc_attr( get_post_meta( get_the_ID(), 'name', true ) ); ?></h2>
							<p class="m-0"><?php echo esc_attr( get_post_meta( get_the_ID(), 'publisher', true ) ); ?></p>
							<p class="m-0"><small>v.<?php echo esc_attr( get_post_meta( get_the_ID(), 'version', true ) ); ?></small></p>
						</div>
					</div>
					
					<div
						class="d-flex justify-content-center"
						itemprop="offers"
						itemscope
						itemtype="https://schema.org/Offer">
						<link itemprop="url" href="https://contoh.com/download/app" />
						<meta itemprop="price" content="0.00" />
						<meta itemprop="priceCurrency" content="USD" />
						<div
							itemprop="PriceSpecification"
							itemscope
							itemtype="https://schema.org/PriceSpecification">
							<meta itemprop="price" content="0" />
							<meta itemprop="priceCurrency" content="USD" />
						</div>
						<a
							id="download-button"
							href="#check-area"
							class="button"
							href="https://contoh.com/download/app"
						>Unduh (<?php echo esc_attr( get_post_meta( get_the_ID(), 'size', true ) ); ?>)</a>
					</div>

					<div
						class="meta mt-1"
						itemprop="aggregateRating"
						itemscope
						itemtype="https://schema.org/AggregateRating"
					>
						<div class="d-flex justify-content-between">
							<div class="d-flex">
								<span>⭐</span>
								<p class="m-0" itemprop="ratingValue">4.8</p>
								<meta itemprop="bestRating" content="5">
								<meta itemprop="worstRating" content="1">
							</div>

							<div class="d-flex">
								<span>💬</span>
								<a  href="#comments" class="m-0" rel="nofollow"><?php echo get_comments_number(); ?></p>
							</div>

							<div class="d-flex">
								<span>📥</span>
								<p class="m-0" itemprop="ratingCount"><?php echo get_post_view() ?></p>
							</div>
						</div>
						<div class="mt-1 align-self-end">
							<a href="<?php echo bloginfo('url') ?>" rel="nofollow">Versi Lainnya</a>
						</div>
					</div>

					<amp-ad width="100vw" height="320"
						type="adsense"
						data-ad-client="ca-pub-3780041077137992"
						data-ad-slot="1782717232"
						data-auto-format="rspv"
						data-full-width="">
						<div overflow="Memuat iklan ..."></div>
						<div fallback>No ad for you</div>
					</amp-ad>
				</div>
			</div>

			<div id="check-area" class="card card-download is-hidden">
				<div class="body">
					<div class="d-flex mb-1">
						<span class="icon icon-info"></span>
						<span class="title">Proses pemindaian</span>
					</div>
					<div class="description">
						<p class="m-0">
							Mohon menunggu<span class="loading-dots"><span>.</span><span>.</span><span>.</span></span>
						</p>
						<p class="m-0">
							<strong>Status:</strong> Memulai pemindaian<span class="loading-dots"><span>.</span><span>.</span><span>.</span></span>
						</p>
						<p class="m-0"><strong>Berkas:</strong> <?php echo strtolower( esc_attr( get_post_meta( get_the_ID(), 'name', true ) ) ); ?></p>
						<div class="loading-status">
							<p class="d-flex" style="justify-content: space-between;">
								<span>[<span class="text" id="loading-bar"></span></span>
								<span>]<span id="percentage">0%</span></span>
							</p>
						</div>
					</div>

					<amp-ad width="100vw" height="320"
						type="adsense"
						data-ad-client="ca-pub-3780041077137992"
						data-ad-slot="1782717232"
						data-auto-format="rspv"
						data-full-width="">
						<div overflow="Memuat iklan ..."></div>
						<div fallback>No ad for you</div>
					</amp-ad>
				</div>
			</div>

			<div id="checked-area" class="card card-download is-hidden">
				<div class="body">
					<div class="d-flex mb-1">
						<span class="icon icon-info"></span>
						<span class="title">Pemindaian sukses!</span>
					</div>
					<div class="description">Berkas siap untuk diunduh, tidak ditemukan adanya virus.</div> 
					<div class="actions">
						<div>
							<a
								href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'media-fire', true ) ); ?>"
								class="button <?php echo $x = (get_post_meta( get_the_ID(), 'media-fire', true ) == null) ? 'is-hidden' : '' ; ?>"
							>Media Fire</a>
						</div>
						<div>
							<a
								href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'dropbox', true ) ); ?>"
								class="button <?php echo $x = (get_post_meta( get_the_ID(), 'dropbox', true ) == null) ? 'is-hidden' : '' ; ?>"
							>Dropbox</a> 
						</div>
						<div>
							<a
								href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'url', true ) ); ?>"
								class="button <?php echo $x = (get_post_meta( get_the_ID(), 'googledrive', true ) == null) ? 'is-hidden' : '' ; ?>"
							>Google Drive</a> 
						</div>
					</div>
					
					<amp-ad width="100vw" height="320"
						type="adsense"
						data-ad-client="ca-pub-3780041077137992"
						data-ad-slot="1782717232"
						data-auto-format="rspv"
						data-full-width="">
						<div overflow="Memuat iklan ..."></div>
						<div fallback>No ad for you</div>
					</amp-ad>
				</div>
			</div>
		</amp-script>
	
		<div class="card">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<h4>Rilis:</h4>
					<time
						datetime="<?php the_time('c'); ?>"
						itemprop="datePublished"
					><?php the_time( 'D, d F Y' ); ?></time>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<h4 class="mb-2">Ukuran:</h4>
					<p
						itemprop="fileSize"
					><?php echo esc_attr( str_replace( ' ', '', get_post_meta(get_the_ID(), 'size', true) ) ); ?></p>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<h4 class="mb-2">Versi:</h4>
					<p>
						v.
						<span
							itemprop="softwareVersion"
						><?php echo esc_attr( get_post_meta( get_the_ID(), 'version', true ) ); ?></span>
					</p>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<h4 class="mb-2" itemprop="operatingSystem">Android</h4>
					<p>
						Minimal: 
						<span><?php echo esc_attr( get_post_meta( get_the_ID(), 'android-version', true ) ); ?></span></p>
					<meta
						itemprop="applicationCategory"
						content="MobileApplication"
					>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<h4 class="mb-2">Rating Konten</h4>
					<p itemprop="contentRating">Everyone</p>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<h4 class="mb-2">Pengembang</h4>
					<p
						itemprop="author"
						itemscope
						itemtype="https://schema.org/Person"
					>
						<a
							itemprop="url"
							href="<?php echo bloginfo('url'); ?>"
						><span itemprop="name"><?php echo esc_attr( get_post_meta( get_the_ID(), 'publisher', true ) ); ?></span></a>
					</p>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<h4 class="mb-2">Elemen Interaktif</h4>
					<p>Interaksi Pengguna, Pembelian Dalam Aplikasi</p>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<h4 class="mb-2">Laporan</h4>
					<a rel="nofollow" href="<?php echo bloginfo('url') ?>">Tandai sebagai tidak pantas</a>
				</div>
			</div>
			<h3>Deskripsi</h3>
			<div id="desc" class="mb-3 e-content" itemprop="description">
				<?php the_content(); ?>
			</div>
			<button
				id="btn-hide"
				class="button button-primary"
				on="tap:desc.hide,btn-hide.hide,btn-show.show">
				Sembunyikan deskripsi
			</button>
			<button
				id="btn-show"
				class="button button-primary"
				hidden
				on="tap:desc.show,btn-show.hide,btn-hide.show">
				Tampilkan deskripsi
			</button>
		</div>
	</section>

	<footer class="e-footer">
		<h6>Tags</h6>
		<ul class="list-unstyled">
			<?php if (has_tag()) {
				foreach (get_the_tags() as $value) { ?>
				<li>
					#<a href="<?php echo esc_url( get_tag_link($value) ) ?>" rel="tag" class="p-category"><?php echo $value->name ?>&nbsp;</a> 
				</li> 
				<?php } ?>
			<?php } else { ?>
				<li>
					#<a href="javascript:void(0)" rel="tag nofollow" class="">tanpa tag</a> 
				</li>
			<?php } ?>
		</ul>
	</footer><!-- .entry-footer -->

	<section class="e-ad">
		<amp-ad width="100vw" height="320"
			type="adsense"
			data-ad-client="ca-pub-3780041077137992"
			data-ad-slot="1782717232"
			data-auto-format="rspv"
			data-full-width="">
			<div overflow="Memuat iklan ..."></div>
			<div fallback>No ad for you</div>
		</amp-ad>
	</section>
			
</article><!-- #post-<?php the_ID(); ?> -->

<?php set_post_view() ?>