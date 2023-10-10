<?php 
/**
 * The template parts
 *
 * @package    WordPress
 * @subpackage zoomworld
 */
?>
<article class="news__item">
	<div class="row">
		<div class="col-md-4">
			<div class="news__thumb block__thumb--style transition--thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'zw-news',array( 'class' => 'img-responsive center-block' ) ); ?>
				</a>
			</div>
		</div>
		<div class="col-md-8">
			<div class="news-meta">
				<h3 class="news-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<?php the_date('d-m-Y', '<p>', '</p>'); ?>
				<p class="news-excerpt hidden-xs"><?php echo zw_limit_words(get_the_excerpt(), '45'); ?></p>
			</div>
		</div>
	</div>
</article>

