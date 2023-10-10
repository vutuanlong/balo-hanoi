<?php 
/**
 * The template parts
 *
 * @package    WordPress
 * @subpackage zoomworld
 */
?>
<article class="class__item effect--scale">
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail( 'zw-news',array( 'class' => 'img-responsive center-block' ) ); ?>
	</a>
	<div class="class__meta">
		<h3 class="class__title"><?php the_title(); ?></h3>
		<p class="class__excerpt hidden-xs"><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>" class="btn btn--read">Xem thêm</a>
	</div>
</article>