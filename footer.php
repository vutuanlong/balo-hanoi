<?php
/**
 * footer file
 * @package    WordPress
 * @subpackage ZW
 * @author     Viet Loc
 * @version    1.0
 * @link       www.zoomworld.vn
 */?>

<div class="trai-nghiem">
	<div class="container">
		<div class="tr-section-title">Trải nghiệm mua sắm tại Balohanoi.vn</div>
		<div class="trai-nghiem__wrapper">
			<div class="owl_trai-nghiem owl-carousel owl-theme">
				<?php
				$groups = rwmb_meta( 'trai_nghiem', [ 'object_type' => 'setting' ], 'themes-options-new' );
				foreach ( $groups as $group ) :
					// Field anh:
					$image_id = $group['anh'] ?? 0;
					$image    = RWMB_Image_Field::file_info( $image_id, [ 'size' => 'full' ] );
					?>
					<div class="trai-nghiem__item">
						<img width="300" height="450" src="<?= $image['url']; ?>" loading="lazy">
						<span class="slider-title"><?= $group['text'] ?? '' ?></span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/home/cta' ); ?>

<div class="tHieu">
	<div class="container">
		<div class="tHieu-content">
			<div class="c-titles2">
				<p class="c-title1">THƯƠNG HIỆU</p>
			</div>
			<div class="row seven-cols">
				<div class="col-xs-12 col-sm-3 col-md-1"><?php dynamic_sidebar( 'brand1' ) ?></div>
				<div class="col-xs-12 col-sm-3 col-md-1"><?php dynamic_sidebar( 'brand2' ) ?></div>
				<div class="col-xs-12 col-sm-3 col-md-1"><?php dynamic_sidebar( 'brand3' ) ?></div>
				<div class="col-xs-12 col-sm-3 col-md-1"><?php dynamic_sidebar( 'brand4' ) ?></div>
				<div class="col-xs-12 col-sm-3 col-md-1"><?php dynamic_sidebar( 'brand5' ) ?></div>
				<div class="col-xs-12 col-sm-3 col-md-1"><?php dynamic_sidebar( 'brand6' ) ?></div>
				<div class="col-xs-12 col-sm-3 col-md-1"><?php dynamic_sidebar( 'brand7' ) ?></div>
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="c-footer">
		<div class="c-footer1">
			<div class="container l-container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<?php dynamic_sidebar( 'footer1' ) ?>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<?php dynamic_sidebar( 'footer2' ) ?>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							<?php dynamic_sidebar( 'footer3' ) ?>
							</div>
							<div class="col-xs-6 col-sm-5 col-md-5 col-lg-5">
							<?php dynamic_sidebar( 'footer4' ) ?>
							</div>
						</div>

					</div>
				</div>
				<div class="copywrite">
					<p>@ Copyright 2011 <a href="https://balohanoi.vn">Balohanoi.vn</a>. All Rights Reserved</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:void(0)" class="scrollTop" rel="Nofollow">
	<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/totop.png">
</a>

<a target="_blank" class="fixed__call hidden-sm hidden-md hidden-lg" href="https://www.messenger.com/t/balotot" style="left:1px;" rel="Nofollow">Gửi tin nhắn</a>
<a class="fixed__call hidden-sm hidden-md hidden-lg" href="tel://0912.85.2222"  rel="Nofollow">Hotline: 0912.85.2222</a>

 <?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33284952-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-33284952-7');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '941296542584324');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=941296542584324&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</body>
</html>
