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
				<div class="filter-tax page-product">
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
				<header class="woocommerce-products-header">
					<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
						<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
					<?php endif; ?>


				</header>
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

				<div class="col-md-3 col-md-pull-9">
					<?php get_sidebar(); ?>
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
