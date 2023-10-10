<?php 
/**
 * The template parts
 *
 * @package    WordPress
 * @subpackage zoomworld
 */
?>

<div class="product__item">
	<div class="transition--thumbnail">
		<?php the_post_thumbnail( '',array( 'class' => 'img-responsive center-block' ) ); ?>
	</div>
	
	<h3 class="product__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
	<p class="product__excerpt hidden-xs"><?php echo zw_limit_words(get_the_excerpt(), '25'); ?></p>
	<p class="news__date">
		<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
		<?php the_time('F j, Y'); ?>
	</p>
</div>