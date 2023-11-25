<!-- featured product -->
<div class="f-product">
	<div class="container">
		<?php
		$groups = rwmb_meta( 'chon_danh_muc', [ 'object_type' => 'setting' ], 'themes-options-new' );
		foreach ( $groups as $group ) :
			// Field danh_muc_chinh:
			$main_term_id = $group['danh_muc_chinh'] ?? 0;
			$main_term    = get_term( $main_term_id );

			// Field danh_muc_phu:
			$sub_term_ids = $group['danh_muc_phu'] ?? [];
			?>

			<div class="f1-product home_filter danh-muc-nganh-hang">
				<div class="box_title box_filter">
					<h2 class="title">
						<a href="<?= esc_url( get_term_link( $main_term ) ) ?>" class="btn-xemthem"><?= esc_html( $main_term->name ) ?></a>
					</h2>
					<div class="filters-category">
						<ul>
							<?php foreach ( $sub_term_ids as $key => $term_id ) : ?>
								<?php $sub_term = get_term( $term_id ); ?>
								<li><a href="<?= esc_url( get_term_link( $sub_term ) ) ?>"><?= esc_html( $sub_term->name ) ?></a></li>
							<?php endforeach ?>
							<li>
								<a href="<?= esc_url( get_term_link( $main_term ) ) ?>">
									Xem tất cả
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="product-item">
					<div class="owl_product owl-carousel owl-theme">
						<?php
						$args = [
							'post_type' => 'product',
							'showposts' => '8',
							'order'     => 'DESC',
							'orderby'   => 'date',
							'tax_query' => [
								[
									'taxonomy' => 'product_cat',
									'field'    => 'term_id',
									'terms'    => $main_term_id,
								],
							],
						];
						$news = new WP_Query( $args );
						?>
						<?php if ( $news->have_posts() ) : ?>
							<?php
							while ( $news->have_posts() ) :
								$news->the_post();
								global $product;

								// $variations = $product->get_available_variations();
								// $variations_id = wp_list_pluck( $variations, 'variation_id' );
								// var_dump($variations);

								?>

								<div class="item">

									<div class="item-img">
										<a href="<?php the_permalink() ?>">
											<?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive center-block' ) ); ?>
										</a>
									</div>
									<?php the_terms( $post->ID, 'product-brand', '<div class="product__category">', '', '</div>' ); ?>
									<a href="<?php the_permalink() ?>">
										<a href="<?php the_permalink() ?>">
											<h4 class="product_name"><?php the_title() ?></h4>
										</a>
									</a>

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
									if ( $product->is_on_sale() ) {
										echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>', $post, $product );
									}


									// get_attributes_product();
									do_action( 'woocommerce_after_shop_loop_item' );

									?>
								</div>

							<?php endwhile; ?>
						<?php else : ?>
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
							<?php
						endif;
						wp_reset_query();
						?>
					</div>
				</div>
				<a href="<?= esc_url( get_term_link( $main_term ) ) ?>" class="view-more">Xem thêm</a>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- end product -->

<!-- Most search -->
<div class="most-search-box container">
	<div class="most-search-title">Tìm kiếm nhiều</div>
	<div class="most-search-main">
		<ul>
			<?php
			$groups = rwmb_meta( 'tu_khoa', [ 'object_type' => 'setting' ], 'themes-options-new' );
			foreach ( $groups as $group ) :
				?>
				<li>
					<a href="<?= esc_url( $group['link'] ?? '' ) ?>">
						<?= esc_html( $group['title'] ?? '' ) ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>
<!-- Most search -->
