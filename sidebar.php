<?php
/**
 * ThemeZW functions and definitions
 * @package    WordPress
 * @subpackage ZW
 * @author     Viet Loc
 * @version    1.0
 * @link       www.zoomworld.vn
 */
?>

<!--Menu-->
<div class="sidebar__section">
	<?php
		//Hàm show danh mục
	$args = array(
		'show_option_all'    => '',
		'orderby'            => 'name',
		'order'              => 'ASC',
		'style'              => 'list',
		'show_count'         => 0,
		'hide_empty'         => 1,
		'use_desc_for_title' => 1,
		'hierarchical'       => 1,
		'title_li'           => '',
		'taxonomy'           => 'product_cat',
	);

	?>
	<ul id="accordion2" class="accordion2">
		<?php wp_list_categories( $args ); ?>
	</ul>
</div>

<!-- sản phẩm bán chạy -->
<div class="side-block product-item">
	<h3 class="side-title">SẢN PHẨM BÁN CHẠY</h3>
	<div class="row no-gutters">
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
				<div class="col-sm-6 col-md-12">
					<div class="product-item text-center">
						<div class="row no-gutter-s">
							<a href="<?php the_permalink() ?>">			
								<div class="col-sm-4 col-md-3">
									<?php the_post_thumbnail( 'thumbnail',array( 'class' => 'img-responsive center-block' ) ); ?>
								</div>
							</a>
							<div class="col-sm-8 col-md-9">
								<a href="<?php the_permalink() ?>">
									<p class="product_name"><?php the_title() ?></p>
								</a>
								<p class="side-price"><?php echo $product->get_price_html(); ?></p>
							</div>	
						</div>
					</div>
				</div>
			<?php endwhile; ?>					
		<?php else : ?>					
			<?php get_template_part( 'template-parts/content', 'none' ); ?>				
		<?php endif; wp_reset_query();?>
	</div>
</div>
