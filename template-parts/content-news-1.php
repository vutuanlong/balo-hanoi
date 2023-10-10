<?php 
/**
 * The template parts
 *
 * @package    WordPress
 * @subpackage zoomworld
 */
?>
<article class="news__item ">
	<div class="news__thumb block__thumb--style transition--thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'zw-news',array( 'class' => 'img-responsive center-block' ) ); ?>
		</a>
	</div>
	<div class="news__meta">
		<h3 class="news__title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<p class="news__excerpt hidden-xs"><?php echo zw_limit_words(get_the_excerpt(), '35'); ?></p>
		<p class="news__date">
			<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
			<?php the_time('F j, Y'); ?>
		</p>
	</div>
</article>

