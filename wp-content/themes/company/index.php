<?php
get_header();
?>
<?php
	$product_args = array(
		'post_type' => 'product',
		'posts_per_page' => 4,
		'post_status' => 'publish',
		'orderby' => 'ID',
		'order' => 'ASC'
	);
	$news_args = array(
		'post_type' => 'post',
		'posts_per_page' => 4,
		'cat' => 5,
		'post_status' => 'publish',
		'orderby' => 'ID',
		'order' => 'DESC'
	);
	$product_query = new WP_Query($product_args);
	$news_query = new WP_Query($news_args);
?>
	<main>
		<section class="about flex-center">

			<div class="about_inner">
				<h2>BÁNH DỪA NƯỚNG</h2>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<ul>
					<li><a class="btn" href="<?php echo get_permalink('5') ?>">Đọc thêm</a></li>
					<li><a class="btn" href="#products">Xem sản phẫm</a></li>
				</ul>
			</div>
			<img src="<?php bloginfo('template_url'); ?>/assets/images/bg-caydua.jpg" class="about_bg" alt="">
		</section>
		<section class="flex-center" id="products">
			<div class="inner">
				<h2>Sản phẫm nổi bật</h2>
				<ul class="cake_list">
					<?php if($product_query -> have_posts()) : ?>
						<?php while($product_query -> have_posts()) : $product_query -> the_post(); ?>
							<li>
								<div class="thumb"><?php the_post_thumbnail(); ?></div>
								<div class="text">
									<p><?php the_title(); ?></p>
									<span class="price"><?php $number = get_field('price'); echo number_format($number); ?> VNĐ</span>
									<a class="btn" href="<?php the_permalink(); ?>">Xem chi tiết</a>
								</div>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</section>
		<section class="news flex-center">
			<div class="inner">
				<h2>Tin tức bánh dừa</h2>
				<p class="intro">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<ul class="news_list">
					<?php if($news_query -> have_posts()) : ?>
						<?php while($news_query -> have_posts()) : $news_query -> the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<div class="thumb"><?php the_post_thumbnail(); ?></div>
									<div class="text">
										<p><?php the_field('intro_text'); ?></p>
									</div>
								</a>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
				<a class="btn" href="<?php echo get_permalink('25') ?>">Xem thêm</a>
			</div>
		</section>
	</main>
	<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
<?php
get_footer();