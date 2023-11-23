<?php
/**
 * ThemeZW index file
 * @package    WordPress
 * @subpackage ZW
 * @author     Johnny Dương
 * @version    1.0
 * @link       thietkewordpress.org
 */
get_header();?>
	<div class="page__section">
		<div class="container">
			<nav class="breadcrumbs ">
				<?php
				if ( function_exists( 'rank_math_the_breadcrumbs' ) ) {
					rank_math_the_breadcrumbs();}
				?>
			</nav>
			<div class="archive-content">
				<div class="news-main">
					<div class="row">
						<div class="col-md-9">
							<h1 class="title-cat">
								<?php single_cat_title(); ?>
							</h1>
							<div class="row blog-posts">
								<?php if ( have_posts() ) : ?>
									<?php
									while ( have_posts() ) :
										the_post();
										global $post;
										?>
										<?php get_template_part( 'template-parts/content', 'news' ); ?>
									<?php endwhile; ?>
								<?php else : ?>
									<?php get_template_part( 'template-parts/content', 'none' ); ?>
									<?php
								endif;
								wp_reset_query();
								?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="news-side">
								<div class="sidebar_widget_content">
									<div class="side-block product-item">
										<h3 class="side-title-news">TIN TỨC NỔI BẬT</h3>
										<div class="fe-pro">
											<?php
											$args = [
												'post_type' => 'post',
												'showposts' => '5',
												'order'   => 'DESC',
												'orderby' => 'date',
											];
											$news = new WP_Query( $args );
											?>
											<?php if ( $news->have_posts() ) : ?>
												<?php
												while ( $news->have_posts() ) :
													$news->the_post();
													global $product;
													?>
													<div class="row no-gutters">
														<div class="col-md-3">
															<a href="<?php the_permalink(); ?>">
																<?php the_post_thumbnail( 'zw-news', [ 'class' => 'img-responsive center-block' ] ); ?>
															</a>
														</div>
														<div class="col-md-9">
															<div class="meta-text">
																<a href="<?php the_permalink(); ?>">
																	<?php the_title( '<p class="entry-title">', '</p>' ); ?>
																</a>
																<div class="entry-meta">
																	<p class="meta__date">
																		<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
																		<?= get_the_time( 'd/m/Y' ) ?>
																	</p>
																</div>
															</div>
														</div>
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
								<div class="side-block product-item">
									<h3 class="side-title">SẢN PHẨM NỔI BẬT</h3>
									<div class="fe-pro">
										<?php
										$args = [
											'post_type' => 'product',
											'showposts' => '5',
											'order'     => 'DESC',
											'orderby'   => 'date',
											'tax_query' => [
												[
													'taxonomy' => 'product_cat',
													'field'    => 'term_id',
													'terms'    => 42,
												],
											],
										];
										$news = new WP_Query( $args );
										?>
										<?php if ( $news->have_posts() ) : ?>
											<?php
											while ( $news->have_posts() ) :
												$news->the_post();
												global $product;
												?>
												<div class="row no-gutters">
													<a href="<?php the_permalink() ?>">
														<div class="col-md-3">
															<?php the_post_thumbnail( 'thumbnail', [ 'class' => 'img-responsive center-block' ] ); ?>
														</div>
													</a>
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
											<?php
										endif;
										wp_reset_query();
										?>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="nav-page">
					<?php zw_numeric_posts_nav(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
