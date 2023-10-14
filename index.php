<?php
/**
 * ThemeZW index file
 * @package    WordPress
 * @subpackage ZW
 * @author     Viet Loc
 * @version    1.0
 * @link       www.zoomworld.vn
 */
get_header();?>

<?php

get_template_part('template-parts/home/banner');
get_template_part('template-parts/home/category-product');
get_template_part('template-parts/home/news');
// get_template_part( 'template-parts/home/intro' );
// get_template_part( 'template-parts/home/cta' );

?>

<?php get_footer(); ?>