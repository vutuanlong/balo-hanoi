<?php 
/**
 * The template parts
 *
 * @package    WordPress
 * @subpackage zoomworld
 */
?>
<article class="page__item">
	<header class="entry-header">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
			echo 	'<div class="entry-meta">
						<p class="meta__date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> '.
							get_the_time("d/m/Y")
						.'</p>
					</div>';
		?>
	</header>
	<div class="entry-content">
		<?php
			the_content();
		?>
	</div>
</article>
