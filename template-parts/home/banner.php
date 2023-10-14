<div class="banner-section">
	<div class="banner-slide">
		<div class="owl__slider owl-carousel owl-theme">
			<?php
			$args = array(
				'post_type' => 'banner',
				'showposts' => '5',
				'order'     => 'DESC',
				'orderby'   => 'ID',
				);
			$news = new WP_Query( $args );
			if ( $news->have_posts() ) : ?>
				<?php
				while ( $news->have_posts() ) :
					$news->the_post();
					?>
					<div class="item">
						<?php the_post_thumbnail( '', array( 'class' => 'img-responsive center-block' ) ); ?>
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
