<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( ! $product->is_type( 'variable' ) ) : ?>
	<span class="price">
		<?php echo $product->get_price_html(); ?>
	</span>
<?php else : ?>
	<span class="price">
		<span class="woocommerce-Price-amount amount">
			<bdi>
				<?php echo number_format( $product->get_variation_price(), 0, '', '.' ); ?>
				<span class="woocommerce-Price-currencySymbol"><?php echo get_woocommerce_currency_symbol(); ?></span>
			</bdi>
		</span>
	</span>
<?php endif; ?>

<?php
// get_attributes_product();
?>
