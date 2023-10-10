<?php
/**
 * ThemeZW Page Template
 * @package    WordPress
 * @subpackage ZW
 * @author     Viet Loc
 * @version    1.0
 * @link       www.zoomworld.vn
 */
get_header();?>

<section class="page__section">
	<div class="container">
		<!-- <div class="row">
			<div class="col-md-9 col-md-push-3"> -->
				<div class="pageright">
					<nav class="breadcrumbs ">
	               <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>

	        		</nav>

					<?php
						while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content','page');
					endwhile;?>
					
			<!-- 	</div>
			</div> -->

		</div>
	</div>
</section>

<?php get_footer();?>