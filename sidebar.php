<?php
/**
 * ThemeZW functions and definitions
 * @package    WordPress
 * @subpackage ZW
 * @author     Viet Loc
 * @version    1.0
 * @link       www.zoomworld.vn
 */

?>

<!--Menu-->
<div class="sidebar__section side-block">
	<h3 class="side-title">Danh mục sản phẩm</h3>
	<?php
	// Hàm show danh mục
	$args = [
		'show_option_all'    => '',
		'orderby'            => 'name',
		'order'              => 'ASC',
		'style'              => 'list',
		'show_count'         => 0,
		'hide_empty'         => 1,
		'use_desc_for_title' => 1,
		'hierarchical'       => 1,
		'title_li'           => '',
		'taxonomy'           => 'product_cat',
	];

	?>
	<ul id="accordion2" class="accordion2">
		<?php wp_list_categories( $args ); ?>
	</ul>
</div>

<!-- Bộ lọc -->
<form name="form_filter" id="form_filter" action="" method="GET">
	<div class="side-block">
		<h3 class="side-title">Lọc theo thương hiệu</h3>
		<div class="filter_group-content filter-brand">
			<ul class="checkbox-list">
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
				foreach ( $terms as $key => $term ) :
					$product_brand = isset( $_GET['product_brand'] ) ? $_GET['product_brand'] : [];
					$active        = in_array( $term->slug, $product_brand );
					?>
					<li class="item <?= $active ? 'active' : '' ?>">
						<input
							id="data-brand-p<?= esc_attr( $key ) ?>"
							type="checkbox"
							name="product_brand[]"
							value="<?= esc_attr( $term->slug ) ?>"
							<?= $active ? 'checked' : '' ?>
						>
						<label for="data-brand-p<?= esc_attr( $key ) ?>">
							<?php echo esc_html( $term->name ); ?>
						</label>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<div class="side-block">
		<h3 class="side-title">Lọc theo giá tiền</h3>
		<div class="filter_group-content filter-price-range">
			<ul class="checkbox-list">
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
				foreach ( $terms as $key => $term ) :
					$price_range = isset( $_GET['price_range'] ) ? $_GET['price_range'] : [];
					$active      = in_array( $term->slug, $price_range );
					?>
					<li class="item <?= $active ? 'active' : '' ?>">
						<input
							id="data-price-range-p<?= esc_attr( $key ) ?>"
							type="checkbox"
							name="price_range[]"
							value="<?= esc_attr( $term->slug ) ?>"
							<?= $active ? 'checked' : '' ?>
						>
						<label for="data-price-range-p<?= esc_attr( $key ) ?>">
							<?php echo esc_html( $term->name ); ?>
						</label>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<div class="side-block">
		<h3 class="side-title">Lọc theo màu sắc</h3>
		<div class="filter_group-content filter-color filter-list">
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
					<div class="color" style="background-color: <?= esc_attr( $term->slug ) ?>" title="<?= esc_attr( $term->name ) ?>" data-name="<?= esc_attr( $term->name ) ?>"></div>
					<input
						type="checkbox"
						name="balo_color[]"
						value="<?= esc_attr( $term->slug ) ?>"
						<?= $active ? 'checked' : '' ?>
					>
				</label>
			<?php endforeach; ?>
		</div>
	</div>

	<div class="side-block">
		<h3 class="side-title">Lọc theo kích thước</h3>
		<div class="filter_group-content filter-size">
			<ul class="checkbox-list">
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
				foreach ( $terms as $key => $term ) :
					$product_size = isset( $_GET['balo_size'] ) ? $_GET['balo_size'] : [];
					$active       = in_array( $term->slug, $product_size );
					?>
					<li class="item <?= $active ? 'active' : '' ?>">
						<input
							id="data-size-p<?= esc_attr( $key ) ?>"
							type="checkbox"
							name="balo_size[]"
							value="<?= esc_attr( $term->slug ) ?>"
							<?= $active ? 'checked' : '' ?>
						>
						<label for="data-size-p<?= esc_attr( $key ) ?>">
							<?php echo esc_html( $term->name ); ?>
						</label>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="filter-button">
		<span class="btn-filter-readmore">Xem kết quả</span>
	</div>
</form>
