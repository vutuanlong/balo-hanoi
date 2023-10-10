<?php
/**
 * ThemeZW functions and definitions
 * @package    WordPress
 * @subpackage ZW
 * @author     Viet Loc
 * @version    1.0
 * @link       www.zoomworld.vn
 */
get_header();?>

<section class="single__section">
	<div class="container">
		<div class="row">			
			<div class="col-md-8">
				<div class="pageright">
					<nav class="breadcrumbs ">
	                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
	        		</nav>
					<main id="main" class="single__content" role="main">
						<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content','single');
							endwhile; 
							
							
						?>
						<hr>
					</main>
					<?php related_category(); ?>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="news-side">
								<div class="sidebar_widget_content">
									<div class="side-block product-item">
										<h3 class="side-title-news">TIN TỨC NỔI BẬT</h3>
										<div class="fe-pro">
											<?php  $args = array(			
												'post_type' => 'post',					
												'showposts' => '5',					
												'order' => 'DESC', 					
												'orderby' => 'date',					
												                        				
											); 					
											$news = new WP_Query($args); ?>					
											<?php  if ($news->have_posts()) : ?>					
												<?php while ($news->have_posts()) : $news->the_post(); global $product;?>
													<div class="row no-gutters">																			
														<div class="col-md-3">
															<a href="<?php the_permalink() ?>">
																<?php the_post_thumbnail( 'zw-news',array( 'class' => 'img-responsive center-block' ) ); ?>
															</a>
														</div>														
														<div class="col-md-9">
															<div class="meta-text">
																<a href="<?php the_permalink() ?>">
																	<?php the_title( '<p class="entry-title">', '</p>' );?>
																</a>
																<?php
																echo 	'<div class="entry-meta">
																<p class="meta__date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> '.
																get_the_time("d/m/Y")
																.'</p>
																</div>';
																?>
															</div>
															
														</div>
													</div>						
												<?php endwhile; ?>					
											<?php else : ?>					
												<?php get_template_part( 'template-parts/content', 'none' ); ?>				
											<?php endif; wp_reset_query();?>
										</div>
									</div>
								</div>
								<div class="side-block product-item">
									<h3 class="side-title">SẢN PHẨM NỔI BẬT</h3>
									<div class="fe-pro">
										<?php  $args = array(			
											'post_type' => 'product',					
											'showposts' => '5',					
											'order' => 'DESC', 					
											'orderby' => 'date',					
											'tax_query' => array(					
												array(			
													'taxonomy' => 'product_cat',		
													'field'    => 'term_id',		
													'terms'    => 42,		
												),			
											),                          				
										); 					
										$news = new WP_Query($args); ?>					
										<?php  if ($news->have_posts()) : ?>					
											<?php while ($news->have_posts()) : $news->the_post(); global $product;?>	
												<div class="row no-gutters">		
													<div class="col-md-3">
														<a href="<?php the_permalink() ?>">
															<?php the_post_thumbnail( 'thumbnail',array( 'class' => 'img-responsive center-block' ) ); ?>
														</a>
													</div>
													<div class="col-md-9">
														<a href="<?php the_permalink() ?>">
															<p class="product_name"><?php the_title() ?></p>
														</a>
														<p class="side-price"><?php echo $product->get_price_html(); ?></p>
													</div>	
												</div>					
											<?php endwhile; ?>					
										<?php else : ?>					
											<?php get_template_part( 'template-parts/content', 'none' ); ?>				
										<?php endif; wp_reset_query();?>
									</div>
								</div>
							</div>
			</div>
		</div>
		
	</div>
</section>

<?php get_footer();?>