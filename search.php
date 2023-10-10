<?php
get_header();
global $wp_query;
?>
<div class="container">
  <div class="contentarea clearfix">

      <div class="row">
        <div class="col-md-9 col-md-push-3">
          <div class="content search-page">
            <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
              <?php _e( 'Kết quả tìm kiếm cho', 'locale' ); ?>: "<?php the_search_query(); ?>" </h1>

              <?php if ( have_posts() ) { ?>

              <div class="cat-list row">

                <?php while ( have_posts() ) { the_post(); ?>

                <div class="item col-xs-6 col-md-3">
                
                  <div class="item-img">
                    <a href="<?php the_permalink() ?>">
                      <?php the_post_thumbnail( 'medium',array( 'class' => 'img-responsive center-block' ) ); ?>
                    </a>
                  </div>
                  <?php the_terms( $post->ID, 'product-brand', '<div class="product__category">', '', '</div>' ); ?>
                  <a href="<?php the_permalink() ?>">
                    <a href="<?php the_permalink() ?>">
                      <h4 class="product_name"><?php the_title() ?></h4>
                    </a>
                  </a>
                  <?php echo $product->get_price_html(); ?>
                
                </div>

                <?php } ?>

              </div>

            <?php echo paginate_links(); ?>

            <?php } ?>
          </div>

        </div> <!-- cot phat -->
        
        <div class="col-md-3 col-md-pull-9">
          <?php get_sidebar(); ?>
        </div>

      </div>

  </div>


</div>
<?php get_footer(); ?>