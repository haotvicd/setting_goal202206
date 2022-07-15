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
          <li><a href="javascript:history.go(-1)">Product</a></li>
          <li><span><?php the_title(); ?></span></li>
        </ul>
      </div>
    </div>
    <div id="detail">
      <article>
        <h2><?php the_title(); ?></h2>
        <div class="content">
          <?php the_content(); ?>
        </div>
      </article>
      <?php
        $product_args = array(
          'post_type' => 'product',
          'posts_per_page' => 4,
          'post_status' => 'publish',
          'orderby' => 'ID',
          'order' => 'DESC'
        );
        $product_query = new WP_Query($product_args);
      ?>
      <aside>
        <h3>Tin liên quan</h3>
        <ul>

          <?php if($product_query -> have_posts()) : ?>
						<?php while($product_query -> have_posts()) : $product_query -> the_post(); ?>
              <li class="item">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?>
                  <p><?php the_title(); ?></p>
                </a>
              </li>
						<?php endwhile; ?>
					<?php endif; ?>
        </ul>
      </aside>
      <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    </div>
  </main>
<?php
get_footer();