<?php
get_header();
?>

	<main>
		<div class="banner-detail">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/banner.jpg" class="pc" alt="">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/banner-sp.jpg" class="sp" alt="">
    </div>
		<div class="breadcrumb">
      <div class="inner">
        <ul>
          <li><a href="/">Trang chủ</a></li>
          <li><span><?php the_title(); ?></span></li>
        </ul>
      </div>
    </div>
		<div class="page_default">
			<div class="inner">
				<h2 class="page_default-title"><?php the_title(); ?></h2>
				<div class="page_default-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
