<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<div class="input-group">
			<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Tìm kiếm sản phẩm', 'placeholder', 'zw' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
			<div class="input-group-btn">
				<!-- <button class="btn btn-primary buttom-search" type="submit"><i class="glyphicon glyphicon-search"></i> <?php echo _x( 'Search', 'submit button', 'zw' ); ?></button> -->
				<button class="btn buttom-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
		</div>
	</div>
</form>
