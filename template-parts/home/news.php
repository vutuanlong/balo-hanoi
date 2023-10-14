<!-- news -->
<div class="news">
	<div class="container">
		<div class="f1-product">

			<h2 class="tr-section-title h2-home text-left">
				Bài viết mới nhất
			</h2>

			<div class="news-item">
				<div class="owl_news owl-carousel owl-theme">
					<?php
					$args = array(
						'post_type' => 'post',
						'showposts' => '8',
						'order'     => 'DESC',
						'orderby'   => 'date',
					);
					$news = new WP_Query( $args );
					?>
					<?php if ( $news->have_posts() ) : ?>
						<?php
						while ( $news->have_posts() ) :
							$news->the_post();
							global $product;
							?>
							<div class="item">
								<div class="item-img">
									<a href="<?php the_permalink() ?>">
										<?php the_post_thumbnail( 'zw-news', array( 'class' => 'img-responsive center-block' ) ); ?>
									</a>
								</div>
								<div class="item-detail">
									<a href="<?php the_permalink() ?>">
										<h4 class="product_name"><?php echo get_the_title() ?></h4>
									</a>
									<p><?php echo zw_limit_words( get_the_excerpt(), 18 ); ?></p>
									<div class="item-detail__meta">
										<div class="item-date">
											<?php echo get_the_date() ?>
										</div>
										<a class="item-see-more" href="<?php the_permalink() ?>">
											Xem thêm
										</a>
									</div>
								</div>
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
		</div>
	</div>
</div>
<!-- end news -->
