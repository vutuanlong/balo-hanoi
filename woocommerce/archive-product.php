<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' ); ?>
<div class="p-top">
	<nav class="breadcrumbs ">
		<div class="container l-container">
			<?php
			if ( function_exists( 'rank_math_the_breadcrumbs' ) ) {
				rank_math_the_breadcrumbs();}
			?>
		</div>
	</nav>
	<div class="container l-container">
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				<div class="filter-tag-product clear clearfix hidden-md hidden-lg" style="margin-bottom: 20px;">
					<?php
					$sub_terms = rwmb_meta( 'chon_danh_muc_con', [ 'object_type' => 'term' ], get_queried_object_id() );
					if ( ! $sub_terms ) :
						?>
						<a href="https://balotot.com/danh-muc/balo-dep/balo-nam/" title="balo Nam" class="filter-category "  rel="nofollow">Balo Nam </a>
						<a href="https://balotot.com/danh-muc/balo-dep/balo-nu/" title="balo Nữ" class="filter-category "  rel="nofollow">Balo Nữ </a>
						<a href="https://balotot.com/danh-muc/balo-dep/ba-lo-laptop/" title="balo laptop" class="filter-category "  rel="nofollow">Balo laptop </a>
						<a href="https://balotot.com/danh-muc/balo-dep/ba-lo-du-lich/" title="balo du lịch" class="filter-category "  rel="nofollow">Balo du lịch </a>
						<a href="https://balotot.com/danh-muc/balo-dep/balo-da/" rel="nofollow" title="BALO DA" class="filter-category ">Balo da </a>
						<a href="https://balotot.com/danh-muc/balo-dep/balo-keo/" rel="nofollow" title="BALO kéo" class="filter-category ">Balo kéo </a>
						<a href="https://balotot.com/danh-muc/balo-dep/ba-lo-hoc-sinh/" rel="nofollow" title="balo học sinh" class="filter-category ">Balo học sinh  </a>
						<a href="https://balotot.com/danh-muc/tui-xach-dep/tui-xach-laptop/" rel="nofollow" title="túi cặp laptop" class="filter-category ">CẶP - TÚI LAPTOP </a>
						<a href="https://balotot.com/danh-muc/tui-xach-dep/tui-du-lich/" rel="nofollow" class="filter-category " title="TÚI DU LỊCH">TÚI DU LỊCH</a>
						<a href="https://balotot.com/danh-muc/tui-xach-dep/tui-xach-the-thao/" rel="nofollow" class="filter-category " title="TÚI THỂ THAO">TÚI THỂ THAO</a>
						<a href="https://balotot.com/danh-muc/tui-xach-dep/tui-deo-cheo/" rel="nofollow" class="filter-category " title="TÚI ĐEO CHÉO">TÚI ĐEO CHÉO</a>
						<a href="https://balotot.com/danh-muc/tui-xach-dep/tui-xach-nam/" rel="nofollow" class="filter-category " title="Túi Nam">Túi Nam</a>
						<a href="https://balotot.com/danh-muc/tui-xach-dep/tui-xach-da/" rel="nofollow" class="filter-category " title="CẶP TÚI DA">CẶP TÚI DA</a>
						<a href="https://balotot.com/danh-muc/tui-xach-dep/tui-bao-tu-nho/" rel="nofollow" class="filter-category " title="TÚI ĐEO CHÉO">TÚI BAO TỬ NHỎ</a>
						<a href="https://balotot.com/danh-muc/vali-keo/vali-keo-chat-lieu-vai/" rel="nofollow" class="filter-category " title="vali vải">Vali vải</a>
						<a href="https://balotot.com/danh-muc/vali-keo/vali-keo-nhua-deo/" rel="nofollow" class="filter-category " title="vali nhựa">Vali Nhựa</a>
						<a href="https://balotot.com/danh-muc/vali-keo/vali-keo-loai-to/" rel="nofollow" class="filter-category " title="Vali loại to">Vali Loại To</a>
						<a href="https://balotot.com/danh-muc/vali-keo/vali-keo-loai-nho/" rel="nofollow" class="filter-category " title="Vali loại nhỏ">Vali Loại nhỏ</a>
						<a href="https://balotot.com/danh-muc/phu-kien/vi-da/" rel="nofollow" class="filter-category " title="Ví da nam nữ">Ví da nam nữ</a>
					<?php else : ?>
						<?php foreach ( $sub_terms as $sub_term ) : ?>
							<a class="filter-category" rel="nofollow" href="<?= esc_url( get_term_link( $sub_term ) ) ?>">
								<?= esc_html( $sub_term->name ) ?>
							</a>
						<?php endforeach ?>
					<?php endif; ?>
				</div>
				<div class="filter-tax page-product">
					<header class="woocommerce-products-header">
						<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
							<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
						<?php endif; ?>
					</header>
					<div class="product-filter-mb hidden-md hidden-lg">
						<p>Bộ lọc</p>
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 459 459"><g><g><g><path d="M178.5,382.5h102v-51h-102V382.5z M0,76.5v51h459v-51H0z M76.5,255h306v-51h-306V255z"></path></g></g></g></svg>
					</div>
					<form class="woocommerce-ordering" method="get">
						<select name="orderby" class="orderby">
							<option value="popularity" selected="selected">Sắp xếp</option>
							<option value="rating">Điểm đánh giá</option>
							<option value="date">Mới đến cũ</option>
							<option value="price">Giá tăng dần</option>
							<option value="price-desc">Giá giảm dần</option>
						</select>
						<input type="hidden" name="paged" value="1">
					</form>
				</div>

				<?php

				/**
				 * Hook: woocommerce_before_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 * @hooked WC_Structured_Data::generate_website_data() - 30
				 */
				// do_action( 'woocommerce_before_main_content' );
				?>

				<?php
				if ( have_posts() ) {

					/**
						* Hook: woocommerce_before_shop_loop.
						*
						* @hooked wc_print_notices - 10
						* @hooked woocommerce_result_count - 20
						* @hooked woocommerce_catalog_ordering - 30
						*/
					do_action( 'woocommerce_before_shop_loop' );

					woocommerce_product_loop_start();

					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();

							/**
							* Hook: woocommerce_shop_loop.
							*
							* @hooked WC_Structured_Data::generate_product_data() - 10
							*/
							do_action( 'woocommerce_shop_loop' );

							wc_get_template_part( 'content', 'product2' );
						}
					}

					woocommerce_product_loop_end();

					/**
						* Hook: woocommerce_after_shop_loop.
						*
						* @hooked woocommerce_pagination - 10
						*/
					do_action( 'woocommerce_after_shop_loop' );
				} else {
					/**
						* Hook: woocommerce_no_products_found.
						*
						* @hooked wc_no_products_found - 10
						*/
					do_action( 'woocommerce_no_products_found' );
				}

				/**
				* Hook: woocommerce_after_main_content.
				*
				* @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				*/
				do_action( 'woocommerce_after_main_content' );

				/**
				* Hook: woocommerce_sidebar.
				*
				* @hooked woocommerce_get_sidebar - 10
				*/
				// do_action( 'woocommerce_sidebar' );
				?>
				<!-- </div> -->

				<div class="col-md-3 col-md-pull-9 filter-sidebar">
					<div class="filter-inner">
						<div class="filter-menu-close hidden-md hidden-lg">
							<span>Balohanoi.com</span>
							<i class="fa fa-times"></i>
						</div>
						<?php get_sidebar(); ?>
						<div class="filter-footer hidden-md hidden-lg">
							<div class="filter-button">
								<span class="btn-filter-readmore">Xem kết quả</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 cat-description">
				<?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				do_action( 'woocommerce_archive_description' );
				$term_product     = get_queried_object();
				$term_description = apply_filters( 'woocommerce_taxonomy_archive_description_raw', $term_product->description, $term_product );
				if ( $term_description ) :
					?>
					<div class="arrow-box">Xem thêm <span class="arrow"></span></div>
					<div class="arrow-up-box">Thu gọn <span class="arrow"></span></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer( 'shop' );
