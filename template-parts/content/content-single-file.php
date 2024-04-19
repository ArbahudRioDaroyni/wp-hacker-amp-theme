<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Jejak Hacker
 * @subpackage jejak_hacker
 * @since 1.01
 */

?>
<?php
/**
 * The template for displaying all page
 *
 * @link https://jejakhacker.com/
 * @package Jejak Hacker
 * @subpackage jejak_hacker
 * @since 1.01
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("is-single"); ?>>

	<nav>
		<ul class="breadcrumb">
			<li><a href="<?= home_url() ?>">Halaman Depan</a></li>
			<li><a href="<?= esc_url( get_category_link( get_the_category()[0]->term_id ) ) ?>" rel="category"><?= get_the_category()[0]->name; ?></a></li>
			<li class="active"><?php the_title(); ?></li>
		</ul>
	</nav>
			
	<header class="entry-header jumbotron">
		<span class=""><a href="<?= esc_url( get_category_link( get_the_category()[0]->term_id ) ) ?>" rel="category"><?= get_the_category()[0]->name; ?></a></span>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<ul class="entry-meta list-inline align-items-center">
			<li class="vcard">
				<img src="<?= get_avatar_url($comment, null) ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" class="" width="35" height="35">
				Diposting oleh <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="url fn" rel="author"><?php the_author(); ?></a>
			</li>
			<li class="">
				<time class="entry-date updated" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time( 'D, d F Y' ); ?></time>
			</li>
		</ul>
	</header><!-- .entry-header -->

	<?php get_template_part( 'template-parts/components', 'adsense-display' )?>

	<div class="entry-content" itemscope itemtype="https://schema.org/SoftwareApplication">
		<amp-script layout="flex-item" src="<?= get_template_directory_uri() . '/assets/js/page-file.js' ?>">
			<div id="download-area" class="download-area panel panel-primary">
				<div class="panel-body">

					<div class="row mb-1">
						<div class="col-md-2 col-sm-3 col-xs-4 d-flex align-items-center">
							<figure>
								<?php
								// check if the post or page has a Featured Image assigned to it.
								if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'thumbnail', ['class' => 'w-100'] );
								} else { ?>
									<img src="<?= get_first_image_in_post() ?>" class="w-100" loading="lazy" alt="<?= get_the_title() ?>" />
								<?php } ?>
							</figure>
						</div>
						<div class="col-md-10 col-sm-9">
							<h5 itemprop="name"><?= esc_attr( get_post_meta( get_the_ID(), 'name', true ) ); ?></h5>
							<p><?= esc_attr( get_post_meta( get_the_ID(), 'publisher', true ) ); ?></p>
							<p><small>v.<?= esc_attr( get_post_meta( get_the_ID(), 'version', true ) ); ?></small></p>
						</div>
					</div>

					<div class="d-flex justify-content-center">
						<a href="#check-area" id="download-button" class="btn btn-primary">
							Download (<?= esc_attr( get_post_meta( get_the_ID(), 'size', true ) ); ?>)
						</a>
					</div>

					<div class="d-flex justify-content-between align-items-center mt-1" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
						<div class="d-flex">
							<div class="download-area-history">
								<div class="d-flex">
									<span>⭐</span>
									<p class="m-0" itemprop="ratingValue">4.8</p>
									<meta itemprop="bestRating" content="5">
									<meta itemprop="worstRating" content="1">
								</div>
							</div>

							<a href="#comments" class="download-area-history" rel="nofollow">
								<div class="d-flex">
									<span>💬</span>
									<p class="m-0"><?= get_comments_number(); ?></p>
								</div>
							</a>

							<div class="download-area-history">
								<div class="d-flex">
									<span>📥</span>
									<p class="m-0" itemprop="ratingCount"><?= get_post_view() ?></p>
								</div>
							</div>
						</div>
						<div>
							<a href="<?= bloginfo('url') ?>" rel="nofollow">Versi Lainnya</a>
						</div>

					</div>
				</div>
			</div>

			<div id="check-area" class="check-area panel panel-primary d-none">
				<div class="panel-body">
					<div class="card-body">
						<p class="text-center">Mohon menunggu, sistem sedang memeriksa virus di aplikasi sebelum didownload.</p>
						<p class="text-center"><span id="waitingSeconds"></span> %</p>
						<div class="progress progress-striped active w-100">
							<div id="waitingProgress" class="progress-bar"></div>
						</div>
					</div>
				</div>
				<?php get_template_part( 'template-parts/components', 'adsense-display' )?>
			</div>

			<div id="checked-area" class="checked-area panel panel-primary d-none">
				<div class="panel-body">
					<div class="card-body">
						<p class="text-center">Aplikasi aman untuk didownload, tidak ditemukan adanya virus.</p>
						<div class="d-flex justify-content-center mt-1 <?= $x = (get_post_meta( get_the_ID(), 'dropbox', true ) == null) ? 'd-none' : '' ; ?>">
							<a href="<?= esc_attr( get_post_meta( get_the_ID(), 'dropbox', true ) ); ?>" id="download-button" class="btn btn-primary">
								📥&nbsp;&nbsp;Unduh Dropbox
							</a>
						</div>
						<div class="d-flex justify-content-center mt-1 <?= $x = (get_post_meta( get_the_ID(), 'googledrive', true ) == null) ? 'd-none' : '' ; ?>">
							<a href="<?= esc_attr( get_post_meta( get_the_ID(), 'googledrive', true ) ); ?>" id="download-button" class="btn btn-primary">
								📥&nbsp;&nbsp;Unduh Google Drive
							</a>
						</div>
					</div>
				</div>
				<?php get_template_part( 'template-parts/components', 'adsense-display' )?>
			</div>
		</amp-script>
	
		<div id="description-area" class="description-area"> 
			<div class="card card-simple">
				<div class="card-body py-3 px-4">
					<div class="description-text">
						<div class="row additional-detail">
							<div class="col-md-4 add-items mb-20">
								<h5 class="mb-2">Diupdate</h5>
								<p><time class="updated" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time( 'D, d F Y' ); ?></time></p>
							</div>

							<div class="col-md-4 add-items mb-20">
								<h5 class="mb-2">Ukuran</h5>
								<p><?= esc_attr( get_post_meta( get_the_ID(), 'size', true ) ); ?></p>
							</div>

							<div class="col-md-4 add-items mb-20">
								<h5 class="mb-2">Versi Saat Ini</h5>
								<p>v.<?= esc_attr( get_post_meta( get_the_ID(), 'version', true ) ); ?></p>
							</div>

							<div class="col-md-4 add-items mb-20">
								<h5 class="mb-2">Perlu Android versi</h5>
								<p>Minimal Android <span itemprop="operatingSystem"><?= esc_attr( get_post_meta( get_the_ID(), 'android-version', true ) ); ?></span> dan yang lebih tinggi</p>
								<meta itemprop="applicationCategory" content="MobileApplication">
							</div>

							<div class="col-md-4 add-items mb-20">
								<h5 class="mb-2">Rating Konten</h5>
								<p>Rating 3+</p>
							</div>

							<div class="col-md-4 add-items mb-20">
								<h5 class="mb-2">Ditawarkan Oleh</h5>
								<p><?= esc_attr( get_post_meta( get_the_ID(), 'publisher', true ) ); ?></p>
							</div>

							<div class="col-md-4 add-items mb-20">
								<h5 class="mb-2">Elemen Interaktif</h5>
								<p>Interaksi Pengguna, Pembelian Dalam Aplikasi</p>
							</div>

							<div class="col-md-4 add-items mb-20">
								<h5 class="mb-2">Developer</h5>
								<p>
									Kunjungi situs web <a class="fw-normal" rel="nofollow" href="<?= bloginfo('url') ?>">Jejak Hacker</a>
									<a class="fw-normal" rel="nofollow" href="<?= bloginfo('url') ?>">apps.support@bukalapak.com</a>
									<a class="fw-normal" rel="nofollow" href="<?= bloginfo('url') ?>/privacy-policy/">Kebijakan Privasi</a>
								</p>
							</div>

							<div class="col-md-4 add-items mb-20">
								<h5 class="mb-2">Laporan</h5>
								<a class="fw-normal" rel="nofollow" href="<?= bloginfo('url') ?>">Tandai sebagai tidak pantas</a>
								<p class="mb-5 d-none">Harga</p>
							</div>
							<div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
								<meta itemprop="price" content="0" />
								<meta itemprop="priceCurrency" content="USD" />
								<div itemprop="PriceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
									<meta itemprop="price" content="0" />
									<meta itemprop="priceCurrency" content="USD" />
								</div>
							</div>
						</div>
						<div id="deskripsi" class="mb-3">
							<h4>Deskripsi</h4>
							<div id="content-description">
								<?php the_content(); ?>
							</div>
							<button id="btn-description-hide" class="btn btn-primary" on="tap:content-description.hide,btn-description-hide.hide,btn-description-show.show">Sembunyikan deskripsi</button>
							<button id="btn-description-show" class="btn btn-primary" hidden on="tap:content-description.show,btn-description-show.hide,btn-description-hide.show">Tampilkan deskripsi</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="entry-footer post-bottom">
		<?php get_template_part( 'template-parts/elements/post-bottom' ); ?>
	</footer><!-- .entry-footer -->
</article>

<?php set_post_view() ?>