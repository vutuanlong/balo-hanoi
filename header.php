<?php
/**
 * header file
 * @package    WordPress
 * @subpackage ZW
 * @author     Viet Loc
 * @version    1.0
 * @link       www.zoomworld.vn
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="tHFcvodHb_7YXQ-TlE1_Qs4QfOfxm6SepqmS99vwyOQ" />
		<link rel='icon' href='https://balohanoi.vn/wp-content/uploads/2018/06/favicon.ico'>
	    <link rel="profile" href="http://gmpg.org/xfn/11">
	    <?php wp_head(); ?>
		<meta name="google-site-verification" content="WjmcC9vvpyfrP7ems3_jLcBt2be9dEyD3uNHw4ejFdc" />
		<meta name="google-site-verification" content="U36GmvJuFpBgZlS_92yytAb1mMCu_xmUJRCupXomUFQ" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131260280-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-131260280-1');
		</script>
    </head>
	<body <?php body_class(); ?>>
	<div class="header">
		    <div class="header-top">
		    	<div class="container">
		    		<div class="row">
		    			<div class="hotline-top col-md-6">
		    				<i class="fa fa-phone" aria-hidden="true"></i> HOTLINE: <?php echo of_get_option('hotline', true); ?>
		    			</div>
		    			<div class="col-md-6">
		    				<?php wp_nav_menu(
					          	array(
					              'theme_location'  => 'top',
					              'container'       => 'nav',
					              'container_class' => 'top_menu hidden-sm visible-sm visible-md visible-lg',
					              'menu_class'      => 'menu',
					              'echo'            => true,
					              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					              'depth'           => 0,
					              // 'walker'          => new Menu_With_Icon(),
					          	));
		                	?>
		    			</div>

		    		</div>
		    	</div>
		    </div>

			<div class="header-bottom">
				<div class="container">
					<div class="header-logo hidden-xs hidden-sm">
						<?php $h1="h1"; $div="div";?>
						<<?php if (is_home()) {echo $h1;} else {echo $div;}?> class="logo">
							<?php $logo_options = of_get_option('logo', true); ?>
							<a href="<?php echo site_url(); ?>" title="<?php bloginfo("name"); ?>">
								<?php if ( $logo_options != '' ) { ?>
									<img src="<?php echo $logo_options; ?>" alt="<?php bloginfo("name"); ?>" class="img-responsive" width="auto" height="70"/>
								<?php } else { ?>
									<?php bloginfo("name"); ?>
								<?php } ?>
							</a>
						</<?php if (is_home()) { echo $h1; } else { echo $div; }?>>
					</div>
					<div class="header-menu stickymn hidden-xs hidden-sm">
						<div class="main-menu">
							<?php wp_nav_menu(
								array(
								'theme_location'  => 'main',
								'container'       => 'nav',
								'container_class' => 'main_menu hidden-sm visible-sm visible-md visible-lg',
								'menu_class'      => 'menu',
								'echo'            => true,
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								// 'walker'          => new Menu_With_Icon(),
								));
							?>
							<!-- <div class="menu-icon hidden-md hidden-lg no-gutters">
								<div class="menu-open menu-default-open text-center">
									<i class="fa fa-bars"></i>
								</div>
							</div> -->

							<div class="site-search">
								<?php echo get_search_form() ?>
								<div class="btn-group text-center">
									<a href="<?= esc_url( home_url() ) ?>/gio-hang/" class="nodeco" rel="nofollow">
										<span class="glyphicon glyphicon-shopping-cart  f20 gray-nm" aria-hidden="true"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="header-mobile hidden-md hidden-lg">
				<div class="container">
					<div class="row no-gutters">
						<div class="main-menu_moblie col-xs-2 col-sm-2 col-md-3">
							<?php wp_nav_menu(
					          	array(
					              'theme_location'  => 'main',
					              'container'       => 'nav',
					              'container_class' => 'main_menu hidden-sm visible-sm visible-md visible-lg',
					              'menu_class'      => 'menu',
					              'echo'            => true,
					              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					              'depth'           => 0,
					              // 'walker'          => new Menu_With_Icon(),
					          	));
		                	?>
		                	<div class="menu-icon hidden-md hidden-lg">
								<div class="menu-open menu-default-open text-center">
									<i class="fa fa-bars"></i>
								</div>
							</div>
						</div>
						<div class="header-logo col-xs-7 col-sm-7 col-md-9">
							<div class="header_logo_mobile">
								<?php $h1="h1"; $div="div";?>
								<<?php if (is_home()) {echo $h1;} else {echo $div;}?> class="logo">
									<?php $logo_options = of_get_option('logo', true); ?>
									<a href="<?php echo site_url(); ?>" title="<?php bloginfo("name"); ?>">
										<?php if ( $logo_options != '' ) { ?>
											<img src="<?php echo $logo_options; ?>" alt="<?php bloginfo("name"); ?>" class="img-responsive center-block" width="auto" height="70"/>
										<?php } else { ?>
											<?php bloginfo("name"); ?>
										<?php } ?>
									</a>
								</<?php if (is_home()) { echo $h1; } else { echo $div; }?>>
							</div>
						</div>
						<div class="site-search">
							<a class="site-search-toggler" href="#site-search">
								<i class="glyphicon glyphicon-search"></i>
							</a>
							<a href="<?= esc_url( home_url() ) ?>/gio-hang/" class="mobile-cart" rel="nofollow">
								<span class="glyphicon glyphicon-shopping-cart  f20 gray-nm" aria-hidden="true"></span>
							</a>

						</div>
					</div>
					<div id="site-search" style="display: none;">
						<?php echo get_search_form() ?>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-responsive menu-default hidden-md hidden-lg">
			<div class="sitenav-inner">
				<div class="menu-close">
					<span>Balotot.com</span><i class="fa fa-times"></i>
				</div>
				<?php wp_nav_menu(array(
					'theme_location'  => 'responsive',
					'container'=> '0',
					'container_class' => '0',
					'container_id'=> '0',
					'items_wrap' => '<ul id="accordion" class="accordion">%3$s</ul>',
					)
					);
				?>
				<div class="sitenav-footer">
					<div class="mobile-menu__section mobile-menu__section--loose">
						<p class="mobile-menu__section-title">Bạn cần hỗ trợ?</p>
						<div class="mobile-menu__help-wrapper">
							<svg class="icon icon--bi-phone" viewBox="0 0 24 24" role="presentation">
								<g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
									<path d="M17 15l-3 3-8-8 3-3-5-5-3 3c0 9.941 8.059 18 18 18l3-3-5-5z" stroke="#333333"></path>
									<path d="M14 1c4.971 0 9 4.029 9 9m-9-5c2.761 0 5 2.239 5 5" stroke="#333333"></path>
								</g>
							</svg>
							<a href="tel:0977.88.23.85" rel="nofollow">0977.88.23.85</a>
						</div>
						<div class="mobile-menu__help-wrapper">
							<svg class="icon icon--bi-email" viewBox="0 0 22 22" role="presentation">
								<g fill="none" fill-rule="evenodd">
									<path stroke="#333333" d="M.916667 10.08333367l3.66666667-2.65833334v4.65849997zm20.1666667 0L17.416667 7.42500033v4.65849997z"></path>
									<path stroke="#333333" stroke-width="2" d="M4.58333367 7.42500033L.916667 10.08333367V21.0833337h20.1666667V10.08333367L17.416667 7.42500033"></path>
									<path stroke="#333333" stroke-width="2" d="M4.58333367 12.1000003V.916667H17.416667v11.1833333m-16.5-2.01666663L21.0833337 21.0833337m0-11.00000003L11.0000003 15.5833337"></path>
									<path d="M8.25000033 5.50000033h5.49999997M8.25000033 9.166667h5.49999997" stroke="#333333" stroke-width="2" stroke-linecap="square"></path>
								</g>
							</svg>
							<a href="mailto:hotro@balotot.com" rel="nofollow">hotro@balotot.com</a>
						</div>
					</div>
				</div>
			</div>
		</div>