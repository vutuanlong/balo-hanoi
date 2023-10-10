<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<?php global $post; the_terms( $post->ID, 'product-brand', '<div class="product__category">', '', '</div>' ); ?>
<p class="price"><?php echo $product->get_price_html(); ?></p>
<div class="introduce">
	<p class="title" style="font-size:18px">CHÍNH SÁCH GIAO NHẬN - ĐỔI TRẢ HÀNG !</p>
	<ul>
		<li><i class="fa fa-check"></i><strong>FREE SHIP</strong> cho đơn hàng trên 399,000đ.</li>
		<li><i class="fa fa-check"></i><strong>Đổi / Trả </strong>trong vòng 7 ngày kể từ khi nhận hàng</li>
		<li><i class="fa fa-check"></i>Không áp dụng đổi/trả sản phẩm trong CTKM</li>
		<li><i class="fa fa-check"></i>BẢO HÀNH trọn đời MIỄN PHÍ TÚI - BALO</li>
		<p style="color: #1e73be;text-align: center;font-size: 14px;font-weight: light;margin-top: 14px">Tips: Bạn có thể "<span style="color: #ff0000;font-size: 110%"><b><a style="color: #ff0000" title="Click để chat trực tiếp với shop" href="https://m.me/balotot" target="_blank" rel="nofollow noopener">Chát với shop</a></b></span>" để hỏi về size và màu sắc trước khi đặt hàng! (9h-22h)</p>
	</ul>
</div>