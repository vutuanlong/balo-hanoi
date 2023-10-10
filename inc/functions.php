<?php
/**
 * ThemeZW functions and definitions
 * @package    WordPress
 * @subpackage ZW
 * @author     Viet Loc
 * @version    1.0
 * @link       www.zoomworld.vn
 */

/**
 * Register Custom Post Type Partners
 */
function banner_post_type() {

    $labels = array(
        'name'                  => _x( 'Banner', 'Post Type General Name', 'zw' ),
        'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'zw' ),
        'menu_name'             => __( 'Banner', 'zw' ),
        'name_admin_bar'        => __( 'Banner', 'zw' ),
        'add_new_item'          => __( 'Add new', 'zw' ),
        'add_new'               => __( 'Add new', 'zw' ),
        'new_item'              => __( 'Add new', 'zw' ),
    );
    $args = array(
        'label'                 => __( 'Banner', 'zw' ),
        'description'           => __( 'Banner Description', 'zw' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', ),
        'public'                => true,
        'menu_position'         => 3,
        'can_export'            => true,
        'has_archive'           => true,
        'menu_icon' => 'dashicons-images-alt2',
    );
    register_post_type( 'banner', $args );

}
add_action( 'init', 'banner_post_type', 0 );

register_taxonomy( 'product-brand', 'product', array( 'hierarchical' => true, 'label' => __('Thương hiệu'), 'rewrite' => array( 'slug' => __('thuong-hieu') ) ) );
flush_rewrite_rules();

register_taxonomy( 'price-range', 'product', array( 'hierarchical' => true, 'label' => __('Mức giá'), 'rewrite' => array( 'slug' => __('khoang-gia') ) ) );
flush_rewrite_rules();

//Related products limit
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 10; // 4 related products
	$args['columns'] = 2; // arranged in 2 columns
	return $args;
}

//Related Post
function related_category($showposts = 10) {
  global $post;
    $categories = get_the_category($post->ID);
    if ($categories):
        $category_ids = array();
        foreach($categories as $individual_category):
          $category_ids[] = $individual_category->term_id;
          $related_args=array(
                'post_type'         =>'post',
                'showposts'         =>$showposts,
                'category__in'      => $category_ids,
                'post__not_in'      => array($post->ID),
                'order'             =>'DESC',
                'orderby'           =>'date',
                );
          $related_query = new wp_query($related_args);
        endforeach;
        if( $related_query->have_posts() ):?>
            <div class="related__post">
                <div class="related__header">
                  <h3 class="related__heading">CÁC TIN KHÁC</h3>
                </div>
                <div class="related__list">
                    <ul class="related-news">
                    <?php while ($related_query->have_posts()):$related_query->the_post();?>
                        <li>
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                </div>
            </div>
    <?php
        else: 
            echo get_template_part( 'template-parts/content', 'none' );
        endif; 
    endif; 
  wp_reset_postdata(); 
}