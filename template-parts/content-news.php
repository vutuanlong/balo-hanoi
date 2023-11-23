<?php
/**
 * The template parts
 *
 * @package    WordPress
 * @subpackage zoomworld
 */
?>
<article class="news__item col-lg-4 col-sm-6 col-12">
	<div class="news__thumb block__thumb--style transition--thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'zw-news', array( 'class' => 'img-responsive center-block' ) ); ?>
		</a>
	</div>

	<div class="news-detail">
		<h3 class="news-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<p class="news-excerpt hidden-xs"><?php echo zw_limit_words( get_the_excerpt(), '18' ); ?></p>
		<div class="news-meta">
			<span class="author">Đăng bởi: <?= get_the_author(); ?></span>
			<span class="date">
				<?= get_the_date( 'j M, Y' ); ?>
			</span>
		</div>
	</div>
</article>

