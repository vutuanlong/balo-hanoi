<?php
$image_default = ZW_URI."/assets/images/header-image-default.jpg";
$image_url = apply_filters( 'taxonomy-images-queried-term-image-url', '', array(
    'image_size' => 'full'
) );
if(is_single()): ?>
		<section class="intro-header header__image" style="background-image: url(<?php 
			if($image_url) echo $image_url;
			else echo $image_default;
		?>)">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                <div class="post__heading">
						<?php zw_breadcrumbs();

							$categories = get_the_category();
							if ( ! empty( $categories ) ) {
							    echo '<h3 class="page__title">'.esc_html( $categories[0]->name ).'</h3>';   
							}
						?>
	          		</div>
	            </div>
	        </div>
	    </div>
	</section>
<?php endif;

if(is_page()||is_404()||is_search()): ?>
	<section class="header__image" style="background-image: url(<?php 
		if(has_post_thumbnail()&&is_page()){
			echo the_post_thumbnail_url();
		}else{
			echo $image_default;
		}
	?>)">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                <div class="post__heading">
						<?php zw_breadcrumbs();?>
						
						<?php if(is_404()||is_search()){ ?>

							<?php if ( have_posts()||have_posts()) : ?>
								<h1 class="page__title"><?php printf( __( 'Kết quả tìm kiếm: %s', 'zoomworld' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							<?php else : ?>
								<h1 class="page__title"><?php _e( 'Nothing Found', 'zoomworld' ); ?></h1>
							<?php endif; ?>

						<?php }else{ ?>
						<?php the_title('<h1 class="page__title">', '</h1>' ); ?>
						<?php } ?>

	          		</div>
	            </div>
	        </div>
	    </div>
	</section>
<?php endif;

if(is_archive()): ?>
		<section class="intro-header header__image" style="background-image: url(<?php 
			if($image_url) echo $image_url;
			else echo $image_default;
		?>)">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		                <div class="post__heading">
							<?php zw_breadcrumbs(); ?>
							<?php if(is_archive()){
									the_archive_title( '<h1 class="page__title">', '</h1>' );
									the_archive_description( '<div class="taxonomy__description">', '</div>' );
								}
							?>
		          		</div>
		            </div>
		        </div>
		    </div>
		</section>
<?php endif; ?>


