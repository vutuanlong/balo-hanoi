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
								<a href="<?php the_permalink() ?>">
									<h4 class="product_name"><?php echo zw_limit_words( get_the_title(), 8 ) ?></h4>
								</a>
								<!-- <p><?php echo zw_limit_words( get_the_excerpt(), 21 ); ?></p> -->
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
