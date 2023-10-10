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
			<div class="menu-responsive menu-default hidden-md hidden-lg">
		      	<div class="menu-close">
		        	<span>Menu</span><i class="fa fa-times"></i>
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
		        
		    </div>
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
			<div class="header-logo hidden-xs hidden-sm">
				<div class="container">
					<div class="header-logo-container">
						<div class="row">
							<div class="col-md-3">
								<div class="header_logo">
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
							</div>
							<div class="col-md-3">
								
							</div>
							<div class="search-form col-md-6">
								<?php echo get_search_form() ?>
							</div>
							<!-- <div class="social col-md-3">
								<span class="facebook"><a href="#"><i class="fa fa-facebook-official"></i></a></span>
								<span class="google"><a href="#"><i class="fa fa-google-plus-square"></i></a></span>
								<span class="twitter"><a href="#"><i class="fa fa-twitter-square"></i></a></span>
								<span class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></span>
							</div> -->
						</div>
					</div>
				</div>
			</div>
					
			<div class="header-menu stickymn hidden-xs hidden-sm">
				<div class="container">
					<div class="row">
						<div class="main-menu col-md-10">
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
		                	<div class="menu-icon hidden-md hidden-lg no-gutters">
								<div class="menu-open menu-default-open text-center">
									<i class="fa fa-bars"></i>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="right-menu">
								<?php wp_nav_menu(
					          	array(
					              'theme_location'  => 'brandmn',
					              'container'       => 'nav',
					              'container_class' => 'brand-menu hidden-sm visible-sm visible-md visible-lg',
					              'menu_class'      => 'menu',
					              'echo'            => true,
					              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					              'depth'           => 0,
					          	));
		                		?>
							</div>							
						</div>				
					</div>
				</div>
			</div>
			<div class="header-mobile hidden-md hidden-lg">
				<div class="container">
					<div class="row no-gutters">
						<div class="header-logo col-xs-9 col-sm-9 col-md-9">
							<div class="container">
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
						</div>
						<div class="main-menu_moblie col-xs-3 col-sm-3 col-md-3">
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

					</div>
				</div>
			</div>
			<div class="search-mobile">
				<div class="container">
					<div class="col-sm-12 hidden-md hidden-lg">
						<?php echo get_search_form() ?>
					</div>
				</div>
			</div>
			
		</div>
<!-- 	</div> -->
		<div class="policy">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-6 col-md-3">
						<div class="policy-item">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/policy/doi-tra-365.png" alt="" class="img-responsive center-block">
							<p><span>ĐỔI TRẢ</span> 30 NGÀY</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="policy-item">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/policy/gear.png" alt="" class="img-responsive center-block">
							<p>MIỄN PHÍ BẢO HÀNH<span> ĐẾN 10 NĂM</span></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="policy-item">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/policy/shipped.png" alt="" class="img-responsive center-block">
							<p>MIỄN PHÍ<span> ĐƠN HÀNG TỪ 499K</span></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="policy-item">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/policy/badge.png" alt="" class="img-responsive center-block">
							<p><span>SẢN PHẨM</span> CHÍNH HÃNG</p>
						</div>
					</div>
				</div>
			</div>
		</div>			