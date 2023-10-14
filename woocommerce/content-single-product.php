<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>


	<div class="summary entry-summary">
		<?php
			/**
			 * Hook: Woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>
	</div>


	<div class="row sp-content">
		<div class="col-xs-12 col-sm-8 col-md-8">
			<?php
				/**
				 * Hook: woocommerce_after_single_product_summary.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action( 'woocommerce_after_single_product_summary' );
			?>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4">
			<div class="sp-box">
				<h2>Tại sao nên chọn Balotot.com</h2>
				<div class="sp-box-content">
					<div class="sp-item text-center">
						<i class="fa fa-reply-all" aria-hidden="true"></i>
						<p>DỄ DÀNG ĐỔI TRẢ</p>
						<p>Đổi trả 7 ngày nếu không hài lòng.<br>Hoàn tiền nếu không hài lòng sản phẩm.</p>
					</div>
					<div class="sp-item text-center">
						<i class="fa fa-users" aria-hidden="true"></i>
						<p>TƯ VẤN NHIỆT TÌNH</p>
						<p>Inbox trực tiếp cho page để được tư vấn ngay!<br>Hotline: 0912.85.2222</p>
					</div>
					<div class="sp-item text-center">
						<i class="fa fa-handshake-o" aria-hidden="true"></i>
						<p>CHÍNH SÁCH BẢO HÀNH</p>
						<p>Đại lý chính hãng hơn 50 hãng hàng đầu.<br>Bảo hành trọn đời sản phẩm TÚI - BALO</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php do_action( 'woocommerce_new_single_product_summary' ); ?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
