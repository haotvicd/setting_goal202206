<?php
get_header();
?>
<?php
  $news_args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'cat' => 5,
    'post_status' => 'publish',
    'orderby' => 'ID',
    'order' => 'DESC'
  );
  $news_query = new WP_Query($news_args);
?>
  <main>
    <div class="banner-detail">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/banner.jpg" class="pc" alt="">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/banner-sp.jpg" class="sp" alt="">
    </div>
    <div class="breadcrumb">
      <div class="inner">
        <ul>
          <li><a href="javascript:history.go(-1)"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a></li>
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
      <aside>
        <h3>Tin liên quan</h3>
        <ul>
          <?php if($news_query -> have_posts()) : ?>
						<?php while($news_query -> have_posts()) : $news_query -> the_post(); ?>
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
    </div>
  </main>

  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
<?php
get_footer();