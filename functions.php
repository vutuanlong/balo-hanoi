<?php
/**
 * ThemeZW functions and definitions
 * @package    WordPress
 * @subpackage ZW
 * @author     Viet Loc
 * @version    1.0
 * @link       www.thietkewordpress.vn
 */
define( 'THEME_NAME', 'ZW' );
define( 'ZW_URI', get_template_directory_uri() );
define( 'ZW_DIR', get_template_directory() );
define( 'ZW_INC', ZW_DIR . '/inc' );
/*Khai bao theme option*/
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_stylesheet_directory_uri() . '/inc/admin/' );
require_once dirname( __FILE__ ) . '/inc/admin/options-framework.php';
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );
function ZW_setup() {
	load_theme_textdomain( 'zw' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'zw-news', 480, 340, true );
	register_nav_menus( array(
		'main'       => __( 'Main Menu', 'zw' ),
		'responsive' => __( 'Responsive Menu', 'zw' ),
		'top'        => __( 'Top Menu', 'zw' ),
		'brandmn'    => __( 'Thương hiệu menu', 'zw' ),
	) );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'ZW_setup' );
// Khai bao css, js
function ZW_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', ZW_URI . '/assets/js/jquery1.12.4.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'font-awesome', ZW_URI . '/libs/font-awesome/css/font-awesome.min.css', array(), '' );
	wp_enqueue_style( 'bootstrap-css', ZW_URI . '/libs/bootstrap/css/bootstrap.min.css', array(), '' );
	wp_enqueue_script( 'bootstrap-js', ZW_URI . '/libs/bootstrap/js/bootstrap.min.js', array(), '', true );
	// wp_enqueue_script('ajax-js', ZW_URI . '/assets/js/ajax.js', array(), '', true );
	/*
	wp_localize_script('ajax-js','frontend_ajax_object' ,
	array(
	  'ajaxurl' => admin_url('admin-ajax.php' ),
	  )
	);*/
	wp_enqueue_style( 'owl-css', ZW_URI . '/libs/owlcarousel/owl.carousel.min.css', array(), '' );
	wp_enqueue_style( 'owltheme-css', ZW_URI . '/libs/owlcarousel/owl.theme.default.css', array(), '' );
	wp_enqueue_script( 'owl-js', ZW_URI . '/libs/owlcarousel/owl.carousel.min.js', array(), '', true );
	// wp_enqueue_style('animate-css', ZW_URI . '/libs/owlcarousel/animate.css', array(), '' );
	wp_enqueue_script( 'cookie-js', ZW_URI . '/assets/js/jquery.cookie.js', array(), '', true );
	wp_enqueue_script( 'dcjqaccordion-js', ZW_URI . '/assets/js/jquery.dcjqaccordion.2.7.min.js', array(), '', true );
	wp_enqueue_style( 'ZW-style', get_stylesheet_uri() );
	wp_enqueue_style( 'editor-style', ZW_URI . '/assets/css/editor-style.css', array(), '' );
	wp_enqueue_script( 'main-jquery', ZW_URI . '/assets/js/custom.js', '', '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ZW_scripts' );
// Khai bao widget
function ZW_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Product', 'zw' ),
		'id'            => 'product',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'zw' ),
		'before_widget' => '<div class="product_cat">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="row_title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Thương hiệu 1', 'zw' ),
		'id'            => 'brand1',
		'before_widget' => '<div class="brand-div">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="hide">',
		'after_title'   => '</div>',
	) );register_sidebar( array(
		'name'          => __( 'Thương hiệu 2', 'zw' ),
		'id'            => 'brand2',
		'before_widget' => '<div class="brand-div">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="hide">',
		'after_title'   => '</div>',
	) );register_sidebar( array(
		'name'          => __( 'Thương hiệu 3', 'zw' ),
		'id'            => 'brand3',
		'before_widget' => '<div class="brand-div">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="hide">',
		'after_title'   => '</div>',
	) );register_sidebar( array(
		'name'          => __( 'Thương hiệu 4', 'zw' ),
		'id'            => 'brand4',
		'before_widget' => '<div class="brand-div">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="hide">',
		'after_title'   => '</div>',
	) );register_sidebar( array(
		'name'          => __( 'Thương hiệu 5', 'zw' ),
		'id'            => 'brand5',
		'before_widget' => '<div class="brand-div">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="hide">',
		'after_title'   => '</div>',
	) );register_sidebar( array(
		'name'          => __( 'Thương hiệu 6', 'zw' ),
		'id'            => 'brand6',
		'before_widget' => '<div class="brand-div">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="hide">',
		'after_title'   => '</div>',
	) );register_sidebar( array(
		'name'          => __( 'Thương hiệu 7', 'zw' ),
		'id'            => 'brand7',
		'before_widget' => '<div class="brand-div">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="hide">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'zw' ),
		'id'            => 'footer1',
		'before_widget' => '<div class="c-footer-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'zw' ),
		'id'            => 'footer2',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'zw' ),
		'before_widget' => '<div class="c-footer-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'zw' ),
		'id'            => 'footer3',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'zw' ),
		'before_widget' => '<div class="c-footer-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'zw' ),
		'id'            => 'footer4',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'zw' ),
		'before_widget' => '<div class="c-footer-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'category', 'zw' ),
		'id'            => 'category',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'zw' ),
		'before_widget' => '<div class="title_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="c-title1">',
		'after_title'   => '</p>',
	) );
}
add_action( 'widgets_init', 'ZW_widgets_init' );
/**
 * Handles JavaScript detection.
 *
 * Adds a js class to the root <html> element when JavaScript is detected.
 *
 * @since Themezw 1.0 ??
 */
function ZW_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'ZW_javascript_detection', 0 );
function ZW_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'ZW_pingback_header' );
function ZW_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template', 'ZW_front_page_template' );
/**
 * Kiểm tra bài viết có hình đại hiện hay không. nếu không có thì thay thế ảnh not found
 * @author Viet Loc
 */
add_filter( 'post_thumbnail_html', 'zw_thumbnail_html' );
function zw_thumbnail_html( $html ) {
	if ( ! is_admin() ) {
		if ( empty( $html ) ) {
			$html = '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . '/assets/images/image-not-found.jpg' . '" class="img-responsive center-block wp-post-image" alt="Image not found" />';
		}
	}
	return $html;
}
function zw_enqueue_comments_reply() {
	if ( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'comment_form_before', 'zw_enqueue_comments_reply' );
function zw_comment( $comment, $args, $depth ) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}
	?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body row">
	<?php endif; ?>
		<div class="comment-author vcard col-md-3">
			<?php
			if ( $args['avatar_size'] != 0 ) {
				echo get_avatar( $comment, $args['avatar_size'] );}
			?>
			<?php printf( __( '<h6 class="comment-name">%s</h6>' ), get_comment_author_link() ); ?>

			<?php if ( $comment->comment_approved == '0' ) : ?>
				 <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
			<?php endif; ?>
						  <?php
							comment_reply_link( array_merge( $args, array(
								'add_below' => $add_below,
								'depth'     => $depth,
								'max_depth' => $args['max_depth'],
							) ) );
							?>
			</div>
		</div>
		<div class="comment-meta col-md-9">
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>" class="comment-date">
				<?php
				  printf( __( '%1$s at %2$s' ), get_comment_date(), get_comment_time() );
				?>
			</a>
			  <?php edit_comment_link( __( 'Edit' ), '  ', '' ); ?>
			  <?php comment_text(); ?>
		</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	  </div>
	<?php endif; ?>
	<?php
}
function unlink_comment_author( $return ) {
	global $comment;
		$author = get_comment_author();
	if ( ( get_comment_type() == 'comment' ) ) {
		if ( $comment->user_id > 0 && $user = get_userdata( $comment->user_id ) ) {
			return $return;
		} else {
			return $author;
		}
	} else {
		return $return;
	}
}
add_filter( 'get_comment_author_link', 'unlink_comment_author' );
/**
 * Tự động load file trong thư mục inc
 */
foreach ( glob( ZW_INC . '/*.php' ) as $file ) {
	require_once $file;
}

/**
 * Remove Version WordPress
 */
add_filter( 'the_generator', 'zw_remove_version' );
function zw_remove_version() {
	return '';
}
/**
 * Add thông tin vào Footer Admin
 */
function remove_footer_admin() {
	echo 'Thiet ke web thietkewordpress';

}
add_filter( 'admin_footer_text', 'remove_footer_admin' );
function zw_limit_words( $string, $word_limit ) {
	$words = explode( ' ', $string, ( $word_limit + 1 ) );
	if ( count( $words ) > $word_limit ) {
		array_pop( $words );
		echo implode( ' ', $words ) . '...'; } else {
		  echo implode( ' ', $words ); }
}

/**
 * Tùy chỉnh vị trí hiển thị của Featured Image trong chỗ tạo bài viết
 */
add_action( 'do_meta_boxes', 'remove_thumbnail_box' );
function remove_thumbnail_box() {
	remove_meta_box( 'postimagediv', 'banner', 'side' );
	add_meta_box(
		'postimagediv',
		__( 'Banner' ),
		'post_thumbnail_meta_box',
		array( 'banner' ),
		'normal',
		'high'
	);
}

// support woo
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

// Pagination
function zw_numeric_posts_nav() {
	if ( is_singular() ) {
		return;
	}
	global $wp_query;
	/** Stop execution if there's only 1 page */
	if ( $wp_query->max_num_pages <= 1 ) {
		return;
	}
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
	/** Add current page to the array */
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}
	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	echo '<div class="navigation"><ul class="page-numbers">' . "\n";
	/** Previous Post Link */
	if ( get_previous_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_previous_posts_link( 'Trang trước' ) );
	}
	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) ) {
			echo '<li>…</li>';
		}
	}
	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}
	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) ) {
			echo '<li>…</li>' . "\n";
		}
		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}
	/** Next Post Link */
	if ( get_next_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_next_posts_link( 'Trang tiếp' ) );
	}
	echo '</ul></div>' . "\n";
}

function display_taxonomy_terms( $post_type, $display = false ) {
	global $post;
	$term_list = wp_get_post_terms( $post->ID, $post_type, array( 'fields' => 'names' ) );
	if ( $display == false ) {
		echo $term_list[0];
	} elseif ( $display == 'return' ) {
		return $term_list[0];
	}
}

// limit search default
function searchfilter( $query ) {

	if ( $query->is_search && ! is_admin() ) {
		$query->set( 'post_type', array( 'product' ) );
	}

	return $query;
}

add_filter( 'pre_get_posts', 'searchfilter' );

// remove field woocommerce
add_filter( 'woocommerce_checkout_fields', 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
	unset( $fields['billing']['billing_postcode'] );
	unset( $fields['billing']['billing_company'] );
	unset( $fields['billing']['billing_address_2'] );

	unset( $fields['shipping']['shipping_postcode'] );
	unset( $fields['shipping']['shipping_company'] );
	unset( $fields['shipping']['shipping_address_2'] );

	// Order notes -> billing field
	$fields['billing']['order_comments'] = $fields['order']['order_comments'];
	unset( $fields['order']['order_comments'] );
	return $fields;
}

add_filter( 'woocommerce_default_address_fields', 'override_default_address_checkout_fields', 20, 1 );
function override_default_address_checkout_fields( $address_fields ) {
	$address_fields['first_name']['placeholder'] = 'Tên *';
	$address_fields['last_name']['placeholder']  = 'Họ *';
	$address_fields['address_1']['placeholder']  = 'Địa chỉ nhận hàng *';
	return $address_fields;
}


add_filter( 'woocommerce_checkout_fields', 'override_billing_checkout_fields', 20, 1 );
function override_billing_checkout_fields( $fields ) {
	$fields['billing']['billing_phone']['placeholder'] = 'Số điện thoại liên lạc *';
	$fields['billing']['billing_city']['placeholder']  = 'Thành phố *';
	$fields['billing']['billing_email']['placeholder'] = 'Email *';
	return $fields;
}

/*
* Author: Le Van Toan - https://levantoan.com
* Đoạn code thu gọn nội dung bao gồm cả nút xem thêm và thu gọn lại sau khi đã click vào xem thêm
*/
add_action( 'wp_footer', 'devvn_readmore_flatsome' );
function devvn_readmore_flatsome() {
	?>
	<style>
		.single-product div#tab-description {
			overflow: hidden;
			position: relative;
			padding-bottom: 25px;
		}
		.single-product .tab-panels div#tab-description.panel:not(.active) {
			height: 0 !important;
		}
		.devvn_readmore_flatsome {
			text-align: center;
			cursor: pointer;
			position: absolute;
			z-index: 10;
			bottom: 0;
			width: 100%;
			background: #fff;
		}
		.devvn_readmore_flatsome:before {
			height: 55px;
			margin-top: -45px;
			content: "";
			background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
			background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%);
			background: linear-gradient(to bottom, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff00', endColorstr='#ffffff',GradientType=0 );
			display: block;
		}
		.devvn_readmore_flatsome a {
			display: block;
			height: 35px;
			line-height: 35px;
			display: inline-flex;
			align-items: center;
			padding: 0 40px;
			text-transform: uppercase;
			font-size: 116.7%;
			color: #fff;
			background-color: #e34444;
			font-weight: 700;
			cursor: pointer;
			border-radius: 5px;
		}
		.devvn_readmore_flatsome a:after {
			content: '';
			width: 0;
			right: 0;
			border-top: 6px solid #fff;
			border-left: 6px solid transparent;
			border-right: 6px solid transparent;
			display: inline-block;
			vertical-align: middle;
			margin: -2px 0 0 5px;
		}
		.devvn_readmore_flatsome_less a:after {
			border-top: 0;
			border-left: 6px solid transparent;
			border-right: 6px solid transparent;
			border-bottom: 6px solid #fff;
		}
		.devvn_readmore_flatsome_less:before {
			display: none;
		}
	</style>
	<script>
		(function($){
			$(document).ready(function(){
				$(window).load(function(){
					if($('.single-product div#tab-description').length > 0){
						var wrap = $('.single-product div#tab-description');
						var current_height = wrap.height();
						var your_height = 500;
						if(current_height > your_height){
							wrap.css('height', your_height+'px');
							wrap.append(function(){
								return '<div class="devvn_readmore_flatsome devvn_readmore_flatsome_more"><a title="Xem thêm " href="javascript:void(0);">Xem thêm hình ảnh</a></div>';
							});
							wrap.append(function(){
								return '<div class="devvn_readmore_flatsome devvn_readmore_flatsome_less" style="display: none;"><a title="Xem thêm" href="javascript:void(0);">Thu gọn</a></div>';
							});
							$('body').on('click','.devvn_readmore_flatsome_more', function(){
								wrap.removeAttr('style');
								$('body .devvn_readmore_flatsome_more').hide();
								$('body .devvn_readmore_flatsome_less').show();
							});
							$('body').on('click','.devvn_readmore_flatsome_less', function(){
								wrap.css('height', your_height+'px');
								$('body .devvn_readmore_flatsome_less').hide();
								$('body .devvn_readmore_flatsome_more').show();
							});
						}
					}
				});
			})
		})(jQuery)
	</script>
	<?php
}
// add_filter( 'woocommerce_after_single_product_summary', 'devvn_quickbuy_form_product', 12 );
// function devvn_quickbuy_form_product() {
// echo do_shortcode( '[devvn_quickbuy_form id="' . get_the_ID() . '"]' );
// }

function tdb_remove_output_structured_data() {
	remove_action( 'wp_footer', array( WC()->structured_data, 'output_structured_data' ), 10 );
	remove_action( 'woocommerce_email_order_details', array( WC()->structured_data, 'output_email_structured_data' ), 30 );
}
add_action( 'init', 'tdb_remove_output_structured_data' );

/*
 * Thay chữ Sale thành phần trăm (%) giảm giá
 * Author: levantoan.com
 */
add_filter( 'woocommerce_sale_flash', 'devvn_woocommerce_sale_flash', 10, 3 );
function devvn_woocommerce_sale_flash( $html, $post, $product ) {
	return '<span class="onsale"><span>' . devvn_presentage_bubble( $product ) . '</span></span>';
}

function devvn_presentage_bubble( $product ) {
	$post_id = $product->get_id();

	if ( $product->is_type( 'simple' ) || $product->is_type( 'external' ) ) {
		$regular_price  = $product->get_regular_price();
		$sale_price     = $product->get_sale_price();
		$bubble_content = round( ( ( floatval( $regular_price ) - floatval( $sale_price ) ) / floatval( $regular_price ) ) * 100 );
	} elseif ( $product->is_type( 'variable' ) ) {
		if ( $bubble_content = devvn_percentage_get_cache( $post_id ) ) {
			return devvn_percentage_format( $bubble_content );
		}

		$available_variations = $product->get_available_variations();
		$maximumper           = 0;

		for ( $i = 0; $i < count( $available_variations ); ++ $i ) {
			$variation_id     = $available_variations[ $i ]['variation_id'];
			$variable_product = new WC_Product_Variation( $variation_id );
			if ( ! $variable_product->is_on_sale() ) {
				continue;
			}
			$regular_price = $variable_product->get_regular_price();
			$sale_price    = $variable_product->get_sale_price();
			$percentage    = round( ( ( floatval( $regular_price ) - floatval( $sale_price ) ) / floatval( $regular_price ) ) * 100 );
			if ( $percentage > $maximumper ) {
				$maximumper = $percentage;
			}
		}

		$bubble_content = sprintf( __( '%s', 'woocommerce' ), $maximumper );

		devvn_percentage_set_cache( $post_id, $bubble_content );
	} else {
		$bubble_content = __( 'Sale!', 'woocommerce' );

		return $bubble_content;
	}

	return devvn_percentage_format( $bubble_content );
}

function devvn_percentage_get_cache( $post_id ) {
	return get_post_meta( $post_id, '_devvn_product_percentage', true );
}

function devvn_percentage_set_cache( $post_id, $bubble_content ) {
	update_post_meta( $post_id, '_devvn_product_percentage', $bubble_content );
}

// Định dạng kết quả dạng -{value}%. Ví dụ -20%
function devvn_percentage_format( $value ) {
	return str_replace( '{value}', $value, '-{value}%' );
}

// Xóa cache khi sản phẩm hoặc biến thể thay đổi
function devvn_percentage_clear( $object ) {
	$post_id = 'variation' === $object->get_type()
		? $object->get_parent_id()
		: $object->get_id();

	delete_post_meta( $post_id, '_devvn_product_percentage' );
}
add_action( 'woocommerce_before_product_object_save', 'devvn_percentage_clear' );

add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );                                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +

function woo_custom_cart_button_text() {

	return __( 'Thêm Vào Giỏ Hàng', 'woocommerce' );

}


// Add short description to a custom product tab
add_filter( 'woocommerce_product_tabs', 'add_custom_product_tab', 10, 1 );
function add_custom_product_tab( $tabs ) {

	$custom_tab = [
		'custom_tab' => [
			'title'    => __( 'Thông số sản phấm', 'woocommerce' ),
			'priority' => 12,
			'callback' => 'short_description_tab_content',
		],
	];
	return array_merge( $custom_tab, $tabs );
}

function short_description_tab_content() {
	global $post, $product;

	$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

	if ( ! $short_description ) {
		return;
	}

	echo '<div class="woocommerce-product-details__short-description">' . $short_description . '</div>'; // WPCS: XSS ok.
}

// Add variation to category product home page
function get_attributes_product() {
	global $product;

	$html = '';
	if ( $product->is_type( 'variable' ) ) {

		$get_variations = count( $product->get_children() ) <= apply_filters( 'woocommerce_ajax_variation_threshold', 30, $product );

		ob_start();
		wc_get_template(
			'single-product/add-to-cart/variable.php',
			[
				'available_variations' => $get_variations ? $product->get_available_variations() : false,
				'attributes'           => $product->get_variation_attributes(),
				'selected_attributes'  => $product->get_default_attributes(),
			]
		);
		$html = ob_get_clean();

	}
	echo $html;
}

add_filter( 'woocommerce_loop_add_to_cart_link', function( $html, $product ) {

	if ( $product->is_type( 'variable' ) ) {

		$get_variations = count( $product->get_children() ) <= apply_filters( 'woocommerce_ajax_variation_threshold', 30, $product );

		ob_start();
		wc_get_template(
			'single-product/add-to-cart/variable.php',
			[
				'available_variations' => $get_variations ? $product->get_available_variations() : false,
				'attributes'           => $product->get_variation_attributes(),
				'selected_attributes'  => $product->get_default_attributes(),
			]
		);
		$html = ob_get_clean();

	}

	return $html;

}, 10, 2 );


// add_action( 'woocommerce_single_variation', 'balo_add_introduce_single_product', 15 );
add_action( 'woocommerce_single_product_summary', 'balo_add_introduce_single_product', 35 );
function balo_add_introduce_single_product() {
	if ( ! is_singular( 'product' ) ) {
		return;
	}
	?>
	<div class="introduce">
		<?php
		$value = rwmb_meta( 'introduce', [ 'object_type' => 'setting' ], 'themes-options-new' );
		echo do_shortcode( wpautop( $value ) );
		?>
	</div>
	<?php
}


// Add custom quà tặng cho single product
add_action( 'woocommerce_single_product_summary', 'balo_add_gift_single_product', 6 );
function balo_add_gift_single_product() {
	if ( ! is_singular( 'product' ) ) {
		return;
	}

	$gift = rwmb_meta( 'qua_tang' );
	if ( ! $gift ) {
		return;
	}

	?>
	<div class="woocommerce-product-details__gift">
		<img class="alignleft" src="https://balotot.com/wp-content/uploads/2023/09/qua-tang.png" alt="icon Quà tặng" width="29" height="30">
		<div class="abd">
			<?php echo do_shortcode( wpautop( $gift ) ); ?>
		</div>
	</div>
	<?php
}


remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_action( 'woocommerce_new_single_product_summary', 'woocommerce_output_related_products', 9 );


// Related product get by product brand
add_filter( 'woocommerce_related_products', 'related_products_by_attribute', 10, 3 );
function related_products_by_attribute( $related_posts, $product_id, $args ) {
	$taxonomy = 'product-brand'; // HERE define the targeted product attribute taxonomy

	$term_slugs = wp_get_post_terms( $product_id, $taxonomy, [ 'fields' => 'slugs' ] ); // Get terms for the product

	if ( empty( $term_slugs ) ) {
		return $related_posts;
	}

	$posts_ids = get_posts( array(
		'post_type'           => 'product',
		'ignore_sticky_posts' => 1,
		'posts_per_page'      => 5,
		'post__not_in'        => array( $product_id ),
		'tax_query'           => array(
			array(
				'taxonomy' => $taxonomy,
				'field'    => 'slug',
				'terms'    => $term_slugs,
			),
		),
		'fields'              => 'ids',
		'orderby'             => 'rand',
	) );

	return count( $posts_ids ) > 0 ? $posts_ids : $related_posts;
}


// Cookie for visited tour
function add_cookie_single_tour() {
	if ( ! is_singular( 'product' ) ) {
		return;
	}
	if ( ! isset( $_COOKIE['visited'] ) ) {
		setcookie( 'visited', get_the_ID(), time() + ( DAY_IN_SECONDS * 1 ), COOKIEPATH, COOKIE_DOMAIN, false );
	} else {
		$current_cookie = $_COOKIE['visited'];
		if ( in_array( get_the_ID(), explode( ',', $current_cookie ) ) ) {
			return;
		}
		$visited         = [
			$current_cookie,
			get_the_ID(),
		];
		$visited_implode = implode( ',', $visited );
		setcookie( 'visited', $visited_implode, time() + ( DAY_IN_SECONDS * 1 ), COOKIEPATH, COOKIE_DOMAIN, false );
	}
}
add_action( 'template_redirect', 'add_cookie_single_tour' );

// San pham da xem
add_action( 'woocommerce_new_single_product_summary', 'woocommerce_output_visited_products', 10 );
function woocommerce_output_visited_products() {
	$cookie = explode( ',', $_COOKIE['visited'] );
	if ( empty( $cookie ) ) {
		return;
	}

	?>
	<section class="related products">
		<h2><?php esc_html_e( 'Sản phẩm đã xem', 'woocommerce' ); ?></h2>
		<div class=" owl__related owl-carousel owl-theme">
			<?php
			$related_products = get_posts( [
				'post_type'      => 'product',
				'posts_per_page' => 5,
				'post__in'       => $cookie,
			] );
			foreach ( $related_products as $related_product ) :
				?>
				<?php
					$post_object = get_post( $related_product->ID );
					setup_postdata( $GLOBALS['post'] =& $post_object );
					wc_get_template_part( 'content', 'product2' );
				?>
			<?php endforeach; ?>
		</div>
	</section>
	<?php
}


// Customize checkout field.
add_action( 'woocommerce_checkout_order_review', 'reordering_checkout_order_review', 1 );
function reordering_checkout_order_review() {
	remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
	add_action( 'woocommerce_checkout_order_review', 'custom_checkout_payment', 15 );
	add_action( 'woocommerce_checkout_order_review', 'custom_checkout_place_order', 20 );
}


function custom_checkout_payment() {
	$checkout = WC()->checkout();
	if ( WC()->cart->needs_payment() ) {
		$available_gateways = WC()->payment_gateways()->get_available_payment_gateways();
		WC()->payment_gateways()->set_current_gateway( $available_gateways );
	} else {
		$available_gateways = array();
	}

	if ( ! is_ajax() ) {
		// do_action( 'woocommerce_review_order_before_payment' );
	}
	?>
	<div id="payment" class="woocommerce-checkout-payment">
		<?php if ( WC()->cart->needs_payment() ) : ?>
			<ul class="wc_payment_methods payment_methods methods">
				<?php
				if ( ! empty( $available_gateways ) ) {
					foreach ( $available_gateways as $gateway ) {
						wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
					}
				} else {
					echo '<li>';
					echo apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) : esc_html__( 'Please fill in your details above to see available payment methods.', 'woocommerce' ) ) . '</li>'; // @codingStandardsIgnoreLine
				}
				?>
			</ul>
		<?php endif; ?>
	</div>
	<?php
}


function custom_checkout_place_order() {
	$checkout          = WC()->checkout();
	$order_button_text = apply_filters( 'woocommerce_order_button_text', __( 'Place order', 'woocommerce' ) );
	?>
	<div id="payment-place-order">
		<noscript>
			<?php esc_html_e( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce' ); ?>
			<br/><button type="submit" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e( 'Update totals', 'woocommerce' ); ?>"><?php esc_html_e( 'Update totals', 'woocommerce' ); ?></button>
		</noscript>

		<?php do_action( 'woocommerce_review_order_before_submit' ); ?>
		<?php echo apply_filters( 'woocommerce_order_button_html', '<button type="submit" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '">' . esc_html( $order_button_text ) . '</button>' ); // @codingStandardsIgnoreLine ?>

		<?php do_action( 'woocommerce_review_order_after_submit' ); ?>
		<?php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ); ?>
	</div>

	<?php
	if ( ! is_ajax() ) {
		do_action( 'woocommerce_review_order_after_payment' );
	}
}


// Short code loc cho trang category product
function filter_category_product() {
	ob_start();
	?>

	<form name="form_filter" id="form_filter" action="" method="GET">
		<div class="filter-all">
			<div class="all-title">Bộ lọc
				<span class="total" style="display: none;"></span>
				<div class="arrow-filter"></div>
			</div>
			<div class="filter-other">
				<div class="all-header"><button type="button" class="btn btn-close">Đóng</button></div>
				<div class="all-other">
					<div class="other list-active">
						<div class="title">
							<span>Đã chọn</span>
							<a href="#">Xóa tất cả</a>
						</div>
						<div class="content">
							<div class="filter-list all-active-list"></div>
						</div>
					</div>
					<div class="other">
						<div class="title">
							<div class="arrow-filter"></div><span class="text">Giá tiền</span><span class="text-selected"
								style="display: none;"></span>
						</div>
						<div class="content">
							<!-- <div class="arrow-close" onclick="hideFilter(this)"></div> -->
							<div class="filter-list">
								<?php
								$terms = get_terms( [
									'taxonomy'   => 'price-range',
									'hide_empty' => false,
								] );
								if ( empty( $terms ) || ! is_array( $terms ) ) {
									return;
								}
								?>

								<?php
								foreach ( $terms as $term ) :
									$price_range = isset( $_GET['price_range'] ) ? $_GET['price_range'] : [];
									$active      = in_array( $term->slug, $price_range );
									?>
								<label class="item <?= $active ? 'active' : '' ?>">
									<input type="checkbox" name="price_range[]" value="<?= esc_attr( $term->slug ) ?>">
									<span class=""><?php echo esc_html( $term->name ); ?></span>
								</label>
								<?php endforeach; ?>
							</div>
							<div class="filter-button">
								<a href="#" class="btn-filter-close">Đóng</a>
								<a href="#" class="btn-filter-readmore">Xem kết quả</a>
							</div>
						</div>
					</div>
					<div class="other">
						<div class="title">
							<div class="arrow-filter"></div><span class="text">Thương hiệu</span><span class="text-selected"
								style="display: none;"></span>
						</div>
						<div class="content">
							<!-- <div class="arrow-close" onclick="hideFilter(this)"></div> -->
							<div class="filter-list">
								<?php
								$terms = get_terms( [
									'taxonomy'   => 'product-brand',
									'hide_empty' => false,
								] );
								if ( empty( $terms ) || ! is_array( $terms ) ) {
									return;
								}
								?>

								<?php
								foreach ( $terms as $term ) :
									$product_brand = isset( $_GET['product_brand'] ) ? $_GET['product_brand'] : [];
									$active        = in_array( $term->slug, $product_brand );
									?>
								<label class="item <?= $active ? 'active' : '' ?>">
									<input type="checkbox" name="product_brand[]" value="<?= esc_attr( $term->slug ) ?>">
									<span class=""><?php echo esc_html( $term->name ); ?></span>
								</label>
								<?php endforeach; ?>
							</div>
							<div class="filter-button">
								<a href="#" class="btn-filter-close">Đóng</a>
								<a href="#" class="btn-filter-readmore">Xem kết quả</a>
							</div>
						</div>
					</div>
					<div class="other">
						<div class="title">
							<div class="arrow-filter"></div><span class="text">Kích thước</span><span
								class="text-selected" style="display: none;"></span>
						</div>
						<div class="content">
							<!-- <div class="arrow-close" onclick="hideFilter(this)"></div> -->
							<div class="filter-list">
								<?php
								$terms = get_terms( [
									'taxonomy'   => 'pa_size',
									'hide_empty' => false,
								] );
								if ( empty( $terms ) || ! is_array( $terms ) ) {
									return;
								}
								?>

								<?php
								foreach ( $terms as $term ) :
									$product_size = isset( $_GET['balo_size'] ) ? $_GET['balo_size'] : [];
									$active       = in_array( $term->slug, $product_size );
									?>
								<label class="item <?= $active ? 'active' : '' ?>">
									<input type="checkbox" name="balo_size[]" value="<?= esc_attr( $term->slug ) ?>">
									<span class=""><?php echo esc_html( $term->name ); ?></span>
								</label>
								<?php endforeach; ?>
							</div>
							<div class="filter-button">
								<a href="#" class="btn-filter-close">Đóng</a>
								<a href="#" class="btn-filter-readmore">Xem kết quả</a>
							</div>
						</div>
					</div>
					<div class="other">
						<div class="title">
							<div class="arrow-filter"></div><span class="text">Màu sắc</span><span class="text-selected"
								style="display: none;"></span>
						</div>
						<div class="content color">
							<!-- <div class="arrow-close" onclick="hideFilter(this)"></div> -->
							<div class="filter-list">
								<?php
								$terms = get_terms( [
									'taxonomy'   => 'pa_color',
									'hide_empty' => false,
								] );
								if ( empty( $terms ) || ! is_array( $terms ) ) {
									return;
								}
								?>

								<?php
								foreach ( $terms as $term ) :
									$product_color = isset( $_GET['balo_color'] ) ? $_GET['balo_color'] : [];
									$active        = in_array( $term->slug, $product_color );
									?>
								<label class="item <?= $active ? 'active' : '' ?>">
									<div class="color" style="background-color: <?= esc_attr( $term->slug ) ?>" data-name="<?= $term->name ?>"></div>
									<input type="checkbox" name="balo_color[]" value="<?= esc_attr( $term->slug ) ?>">
								</label>
								<?php endforeach; ?>
							</div>
							<div class="filter-button">
								<a href="#" class="btn-filter-close">Đóng</a>
								<a href="#" class="btn-filter-readmore">Xem kết quả</a>
							</div>
						</div>
					</div>
				</div>
				<div class="all-button">
					<a href="#"  class="btn-filter-close">Bỏ chọn</a>
					<a href="#" class="btn-filter-readmore">Xem kết quả</a>
				</div>
			</div>
		</div>
	</form>


	<?php
	return ob_get_clean();
}
add_shortcode( 'filter_category_product', 'filter_category_product' );

add_action( 'pre_get_posts', 'balo_filter_product_archive' );
function balo_filter_product_archive( $query ) {
	// Chỉ lọc ở trang archive product.
	if ( is_admin() || ! $query->is_main_query() || ! is_tax( 'product_cat' ) ) {
		return;
	}

	$tax_query = [
		'relation' => 'AND',
	];
	// Lọc theo khoang gia.
	$price_range = isset( $_GET['price_range'] ) ? $_GET['price_range'] : '';
	if ( $price_range ) {
		$tax_query[] = [
			'taxonomy' => 'price-range',
			'field'    => 'slug',
			'terms'    => $price_range,
		];
	}
	// Lọc theo hãng
	$hang = isset( $_GET['product_brand'] ) ? $_GET['product_brand'] : '';
	if ( $hang ) {
		$tax_query[] = [
			'taxonomy' => 'product-brand',
			'field'    => 'slug',
			'terms'    => $hang,
		];
	}

	// Lọc theo kích cỡ
	$size = isset( $_GET['balo_size'] ) ? $_GET['balo_size'] : '';
	if ( $size ) {
		$tax_query[] = [
			'taxonomy' => 'pa_size',
			'field'    => 'slug',
			'terms'    => $size,
		];
	}

	// Lọc theo màu sắc
	$color = isset( $_GET['balo_color'] ) ? $_GET['balo_color'] : '';
	if ( $color ) {
		$tax_query[] = [
			'taxonomy' => 'pa_color',
			'field'    => 'slug',
			'terms'    => $color,
		];
	}

	$query->set( 'tax_query', $tax_query );
}


add_filter( 'woo_variation_swatches_html', 'balo_variation_swatches_html', 10, 3 );
function balo_variation_swatches_html( $html, $args, $swatches_data ) {
	if ( count( $swatches_data ) >= 4 || is_singular( 'product' ) ) {
		foreach ( $swatches_data as $data ) {
			if ( $data['item']->taxonomy == 'pa_color' ) {
				$html .= '<span class="variation_swatches-more">More</span>';
				break;
			}
		}
	}
	return $html;
}

// you have all variations same price. That's why it's not showing,
add_filter( 'woocommerce_show_variation_price', function() {
	return true;
} );
