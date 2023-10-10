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

<div class="banner-section">
	<div class="container">
		<div class="banner-slide">
			<div class="owl__slider owl-carousel owl-theme">
				<?php  $args = array(
					'post_type' => 'banner',
					'showposts' => '5',
					'order' => 'DESC', 
					'orderby' => 'ID',                          
				); 
				$news = new WP_Query($args); ?>
				<?php  if ($news->have_posts()) : ?>
					<?php while ($news->have_posts()) : $news->the_post();?>
						<div class="item">
							<?php the_post_thumbnail( '',array( 'class' => 'img-responsive center-block' ) ); ?>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; wp_reset_query();?>
			</div>
		</div>
	</div>
</div>
<div class="ads">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="ads-item">
					<img src="<?php echo of_get_option('banner1') ?>" alt="<?php bloginfo() ?>" class="img-responsive center-block">
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="ads-item">
					<img src="<?php echo of_get_option('banner2') ?>" alt="<?php bloginfo() ?>" class="img-responsive center-block">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- featured product -->
<div class="f-product">
	<div class="container">
		<div class="f1-product">
			<div class="div-title">
				<h2 class="h2-home text-center">BALO NỔI BẬT
					<a href="https://balohanoi.vn/danh-muc/balo-noi-bat/" class="view-more-product" rel="nofollow">Xem tất cả</a>
					</h2>
			</div>			
			<div class="product-item">
				<div class="owl_product owl-carousel owl-theme">
					<?php  $args = array(
						'post_type' => 'product',
						'showposts' => '8',
						'order' => 'DESC', 
						'orderby' => 'date',
						'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field'    => 'term_id',
								'terms'    => 49,
							),
						),                          
					); 
					$news = new WP_Query($args); ?>
					<?php  if ($news->have_posts()) : ?>
						<?php while ($news->have_posts()) : $news->the_post(); global $product;?>

							<div class="item">
								
									<div class="item-img">
										<a href="<?php the_permalink() ?>">
											<?php the_post_thumbnail( 'medium',array( 'class' => 'img-responsive center-block' ) ); ?>
										</a>
									</div>
									<?php the_terms( $post->ID, 'product-brand', '<div class="product__category">', '', '</div>' ); ?>
									<a href="<?php the_permalink() ?>">
										<a href="<?php the_permalink() ?>">
											<h4 class="product_name"><?php the_title() ?></h4>
										</a>
									</a>
									<span class="price">
										<?php echo $product->get_price_html(); ?>
									</span>
								
							</div>

						<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; wp_reset_query();?>
				</div>
			</div>
		</div>

		<div class="f1-product">
			<div class="div-title">
				<h2 class="h2-home text-center">
					TÚI XÁCH NỔI BẬT 	
					<a href="https://balohanoi.vn/danh-muc/tui-xach-noi-bat/" class="view-more-product" rel="nofollow">Xem tất cả</a>
			</h2>
			</div>			
			<div class="product-item">
				<div class="owl_product owl-carousel owl-theme">
					<?php  $args = array(
						'post_type' => 'product',
						'showposts' => '8',
						'order' => 'DESC', 
						'orderby' => 'date',
						'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field'    => 'term_id',
								'terms'    => 50,
							),
						),                          
					); 
					$news = new WP_Query($args); ?>
					<?php  if ($news->have_posts()) : ?>
						<?php while ($news->have_posts()) : $news->the_post(); global $product;?>
							
								<div class="item">
									<div class="item-img">
										<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium',array( 'class' => 'img-responsive center-block' ) ); ?></a>
									</div>
									<?php the_terms( $post->ID, 'product-brand', '<div class="product__category">', '', '</div>' ); ?>
									<a href="<?php the_permalink() ?>"><h4 class="product_name"><?php the_title() ?></h4></a>
									<?php echo $product->get_price_html(); ?>
								</div>

						<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; wp_reset_query();?>
				</div>
			</div>
		</div>
		<div class="f1-product">
			<div class="div-title">
				<h2 class="h2-home text-center">
					VALI NỔI BẬT 
					<a href="https://balohanoi.vn/danh-muc/vali-noi-bat/" class="view-more-product" rel="nofollow">Xem tất cả</a>
				</h2>
			</div>			
			<div class="product-item">
				<div class="owl_product owl-carousel owl-theme">
					<?php  $args = array(
						'post_type' => 'product',
						'showposts' => '8',
						'order' => 'DESC', 
						'orderby' => 'date',
						'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field'    => 'term_id',
								'terms'    => 51,
							),
						),                          
					); 
					$news = new WP_Query($args); ?>
					<?php  if ($news->have_posts()) : ?>
						<?php while ($news->have_posts()) : $news->the_post(); global $product;?>
							<div class="item">
								<div class="item-img">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium',array( 'class' => 'img-responsive center-block' ) ); ?></a>
								</div>
								<?php the_terms( $post->ID, 'product-brand', '<div class="product__category">', '', '</div>' ); ?>
									<a href="<?php the_permalink() ?>"><h4 class="product_name"><?php the_title() ?></h4></a>
								<?php echo $product->get_price_html(); ?>
							</div>
						<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; wp_reset_query();?>
				</div>
			</div>
		</div>

		<div class="f1-product">
			<div class="div-title">
				<h2 class="h2-home text-center"> Phụ Kiện 
					<a href="https://balohanoi.vn/danh-muc/phu-kien/" class="view-more-product" rel="nofollow">Xem tất cả</a>
				</h2>
			</div>			
			<div class="product-item">
				<div class="owl_product owl-carousel owl-theme">
					<?php  $args = array(
						'post_type' => 'product',
						'showposts' => '8',
						'order' => 'DESC', 
						'orderby' => 'date',
						'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field'    => 'term_id',
								'terms'    => 389,
							),
						),                          
					); 
					$news = new WP_Query($args); ?>
					<?php  if ($news->have_posts()) : ?>
						<?php while ($news->have_posts()) : $news->the_post(); global $product;?>
							<div class="item">
								<div class="item-img">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium',array( 'class' => 'img-responsive center-block' ) ); ?></a>
								</div>
								<?php the_terms( $post->ID, 'product-brand', '<div class="product__category">', '', '</div>' ); ?>
									<a href="<?php the_permalink() ?>"><h4 class="product_name"><?php the_title() ?></h4></a>
								<?php echo $product->get_price_html(); ?>
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
<!-- end product -->

<!-- news -->
<div class="news">
	<div class="container">
		<div class="f1-product">
			<div class="div-title">
				<h2 class="h2-home text-center">
					THÔNG TIN HỮU ÍCH
				</h2>
			</div>			
			<div class="news-item">
				<div class="owl_news owl-carousel owl-theme">
					<?php  $args = array(
						'post_type' => 'post',
						'showposts' => '8',
						'order' => 'DESC', 
						'orderby' => 'date',			                                       
					); 
					$news = new WP_Query($args); ?>
					<?php  if ($news->have_posts()) : ?>
						<?php while ($news->have_posts()) : $news->the_post(); global $product;?>
							<div class="item">
								<div class="item-img">
									<a href="<?php the_permalink() ?>">
										<?php the_post_thumbnail( 'zw-news',array( 'class' => 'img-responsive center-block' ) ); ?>
									</a>
								</div>
								<a href="<?php the_permalink() ?>">
									<h4 class="product_name"><?php echo zw_limit_words(get_the_title(),10)  ?></h4>
								</a>
								<p><?php echo zw_limit_words(get_the_excerpt(),21); ?></p>
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
<!-- end news -->

<div class="intro">
	<div class="container">
		<div class="intro-content">
			<div class="row no-gutters">
				<div class="col-sm-9 col-md-9">
					<div class="intro-left">
						<?php echo of_get_option('home-des') ?>
						
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="intro-right">
						<h4>Tại sao chọn chúng tôi</h4>
						<div class="intro_content item1">
							<p>CHỈ BÁN Hàng CHÍNH HÃNG
</p>
							<p>Giá rẻ bất ngờ</p>
						</div>
						<div class="intro_content item2">
							<p>Dịch Vụ Trước Và Sau Bán Hàng</p>
							<p>Tận tình và chu đáo</p>
						</div>
						<div class="intro_content item3">
							<p>ĐẶT HÀNG & MUA HÀNG ONLINE</p>
							<p>Tiện Lợi - Nhanh Chóng</p>
						</div>
						<div class="intro_content item4">
							<p>THAM GIA CÁC CHƯƠNG TRÌNH</p>
							<p>Khuyến mãi giảm giá quanh năm</p>
						</div>
						<div class="intro_content item5">
							<p>ĐỔI TRẢ THOẢI MÁI</p>
							<p>Đổi Trả Thoải Mái Trong Vòng 7 Ngày</p>
						</div>
						<div class="intro_content item6">
							<p>Hàng Trăm Mẫu Mã Balo, Túi xách </p>
							<p>Hàng Đầu Tại Việt Nam</p>
						</div>
						<!-- <div class="right-item">
							<div class="i-icon">
								<i class="fa fa-handshake-o" aria-hidden="true"></i>
							</div>
							<div class="i-text">
								<p>ĐẠI LÝ CHÍNH HÃNG</p>
								<p>Giá rẻ bất ngờ</p>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>