<?php
/**
 * ThemeZW functions and definitions
 * @package    WordPress
 * @subpackage ZW
 * @author     Viet Loc
 * @version    1.0
 * @link       www.thietkewordpress.vn
 */
define('THEME_NAME', "ZW");
define ('ZW_URI' , get_template_directory_uri());
define ('ZW_DIR' , get_template_directory());
define ('ZW_INC', ZW_DIR . '/inc');
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
    'main' => __( 'Main Menu', 'zw' ),
    'responsive' => __( 'Responsive Menu', 'zw' ),
    'top' => __( 'Top Menu', 'zw' ),
    'brandmn' => __( 'Thương hiệu menu', 'zw' ),
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
  wp_deregister_script('jquery');
  wp_register_script('jquery', ZW_URI . '/assets/js/jquery1.12.4.min.js');
  wp_enqueue_script('jquery');
  wp_enqueue_style('font-awesome', ZW_URI . '/libs/font-awesome/css/font-awesome.min.css', array(), '' );
  wp_enqueue_style('bootstrap-css', ZW_URI . '/libs/bootstrap/css/bootstrap.min.css', array(), '' );
  wp_enqueue_script('bootstrap-js', ZW_URI . '/libs/bootstrap/js/bootstrap.min.js', array(), '', true );
    //wp_enqueue_script('ajax-js', ZW_URI . '/assets/js/ajax.js', array(), '', true );
    /*wp_localize_script('ajax-js','frontend_ajax_object' ,
    array(
      'ajaxurl' => admin_url('admin-ajax.php' ),
      )
    );*/
  wp_enqueue_style('owl-css', ZW_URI . '/libs/owlcarousel/owl.carousel.min.css', array(), '' );
  wp_enqueue_style('owltheme-css', ZW_URI . '/libs/owlcarousel/owl.theme.default.css', array(), '' );
  wp_enqueue_script('owl-js', ZW_URI . '/libs/owlcarousel/owl.carousel.min.js', array(), '', true );
    //wp_enqueue_style('animate-css', ZW_URI . '/libs/owlcarousel/animate.css', array(), '' );
  wp_enqueue_script('cookie-js', ZW_URI . '/assets/js/jquery.cookie.js', array(), '', true );
  wp_enqueue_script('dcjqaccordion-js', ZW_URI . '/assets/js/jquery.dcjqaccordion.2.7.min.js', array(), '', true );
  wp_enqueue_style( 'ZW-style', get_stylesheet_uri() );
  wp_enqueue_style('editor-style', ZW_URI . '/assets/css/editor-style.css', array(), '' );
  wp_enqueue_script( 'main-jquery', ZW_URI . '/assets/js/custom.js', '', '', true);
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
  ) )
  ;register_sidebar( array(
    'name'          => __( 'Thương hiệu 2', 'zw' ),
    'id'            => 'brand2',
    'before_widget' => '<div class="brand-div">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="hide">',
    'after_title'   => '</div>',
  ) );
  ;register_sidebar( array(
    'name'          => __( 'Thương hiệu 3', 'zw' ),
    'id'            => 'brand3',
    'before_widget' => '<div class="brand-div">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="hide">',
    'after_title'   => '</div>',
  ) );
  ;register_sidebar( array(
    'name'          => __( 'Thương hiệu 4', 'zw' ),
    'id'            => 'brand4',
    'before_widget' => '<div class="brand-div">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="hide">',
    'after_title'   => '</div>',
  ) );
  ;register_sidebar( array(
    'name'          => __( 'Thương hiệu 5', 'zw' ),
    'id'            => 'brand5',
    'before_widget' => '<div class="brand-div">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="hide">',
    'after_title'   => '</div>',
  ) );
  ;register_sidebar( array(
    'name'          => __( 'Thương hiệu 6', 'zw' ),
    'id'            => 'brand6',
    'before_widget' => '<div class="brand-div">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="hide">',
    'after_title'   => '</div>',
  ) );
  ;register_sidebar( array(
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
add_filter( 'frontpage_template',  'ZW_front_page_template' );
/**
 * Kiểm tra bài viết có hình đại hiện hay không. nếu không có thì thay thế ảnh not found
 * @author Viet Loc
 */
add_filter( 'post_thumbnail_html', 'zw_thumbnail_html' );
function zw_thumbnail_html( $html ) {
  if(!is_admin()){
      if ( empty( $html ) )
          $html = '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . '/assets/images/image-not-found.jpg' . '" class="img-responsive center-block wp-post-image" alt="Image not found" />';
    }
    return $html;
}
function zw_enqueue_comments_reply() {
  if( get_option( 'thread_comments' ) )  {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'comment_form_before', 'zw_enqueue_comments_reply' );
function zw_comment($comment, $args, $depth) {
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
            <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
            <?php printf( __( '<h6 class="comment-name">%s</h6>' ), get_comment_author_link() ); ?>
            
            <?php if ( $comment->comment_approved == '0' ) : ?>
                 <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
            <?php endif; ?>
            <div class="reply">
              <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
        </div>
        <div class="comment-meta col-md-9">
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>" class="comment-date">
				<?php
				  printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?>
			</a>
              <?php edit_comment_link( __( 'Edit' ), '  ', '' ); ?>
              <?php comment_text(); ?>
        </div>
    <?php if ( 'div' != $args['style'] ) : ?>
      </div>
    <?php endif; ?>
<?php
}
function unlink_comment_author($return) {
    global $comment;
        $author = get_comment_author();
    if ((get_comment_type() == 'comment')) {
        if ($comment->user_id > 0 && $user = get_userdata($comment->user_id))
            return $return;
        else
            return $author;
    } else {
        return $return;
    }
}
add_filter('get_comment_author_link', 'unlink_comment_author');
/**
 * Tự động load file trong thư mục inc
 */
foreach ( glob( ZW_INC . '/*.php' ) as $file )
{
  require_once $file;
}

/**
 * Remove Version wordpress
 */
add_filter('the_generator', 'zw_remove_version');
function zw_remove_version() {
return '';
}
/**
 * Add thông tin vào Footer Admin
 */
function remove_footer_admin () {
    echo 'Thiet ke web thietkewordpress';;
}
add_filter('admin_footer_text', 'remove_footer_admin');
function zw_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit) {
  array_pop($words);
  echo implode(' ', $words)."..."; } else {
  echo implode(' ', $words); }
}

/**
 * Tùy chỉnh vị trí hiển thị của Featured Image trong chỗ tạo bài viết
 */
add_action('do_meta_boxes', 'remove_thumbnail_box');
function remove_thumbnail_box() {
    remove_meta_box( 'postimagediv','banner','side' );
    add_meta_box(
       'postimagediv',
       __('Banner'),
       'post_thumbnail_meta_box',
       array('banner'),
       'normal',
       'high'
   );
}

// support woo
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

//Pagination
function zw_numeric_posts_nav() {
  if( is_singular() )
    return;
  global $wp_query;
  /** Stop execution if there's only 1 page */
  if( $wp_query->max_num_pages <= 1 )
    return;
  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );
  /** Add current page to the array */
  if ( $paged >= 1 )
    $links[] = $paged;
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
  if ( get_previous_posts_link() )
    printf( '<li>%s</li>' . "\n", get_previous_posts_link('Trang trước') );
  /** Link to first page, plus ellipses if necessary */
  if ( ! in_array( 1, $links ) ) {
    $class = 1 == $paged ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
    if ( ! in_array( 2, $links ) )
      echo '<li>…</li>';
  }
  /** Link to current page, plus 2 pages in either direction if necessary */
  sort( $links );
  foreach ( (array) $links as $link ) {
    $class = $paged == $link ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  }
  /** Link to last page, plus ellipses if necessary */
  if ( ! in_array( $max, $links ) ) {
    if ( ! in_array( $max - 1, $links ) )
      echo '<li>…</li>' . "\n";
    $class = $paged == $max ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  }
  /** Next Post Link */
  if ( get_next_posts_link() )
    printf( '<li>%s</li>' . "\n", get_next_posts_link('Trang tiếp') );
  echo '</ul></div>' . "\n";
}

 function display_taxonomy_terms($post_type, $display = false) {
global $post;
$term_list = wp_get_post_terms($post->ID, $post_type, array('fields' => 'names'));
if($display == false) {
echo $term_list[0];
}elseif($display == 'return') {
return  $term_list[0];
}
}

// limit search default
function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('product'));
    }
 
return $query;
}
 
add_filter('pre_get_posts','searchfilter');

// remove field woocommerce
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_postcode']);
     unset($fields['billing']['billing_company']);
     return $fields;
}
/*
* Author: Le Van Toan - https://levantoan.com
* Đoạn code thu gọn nội dung bao gồm cả nút xem thêm và thu gọn lại sau khi đã click vào xem thêm
*/
add_action('wp_footer','devvn_readmore_flatsome');
function devvn_readmore_flatsome(){
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
add_filter('woocommerce_after_single_product_summary','devvn_quickbuy_form_product', 12);
function devvn_quickbuy_form_product(){
    echo do_shortcode('[devvn_quickbuy_form id="'.get_the_ID().'"]');
}

function tdb_remove_output_structured_data() {
  remove_action( 'wp_footer', array( WC()->structured_data, 'output_structured_data' ), 10 ); 
  remove_action( 'woocommerce_email_order_details', array( WC()->structured_data, 'output_email_structured_data' ), 30 );
}
add_action( 'init', 'tdb_remove_output_structured_data' );

