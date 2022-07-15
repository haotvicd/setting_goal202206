<?php
get_header();
?>
  <main>
    <section id="contact">
      <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/banner.jpg" class="pc" alt="">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/banner-sp.jpg" class="sp" alt="">
      </div>
      <div class="content">
        <div class="inner">
          <div class="box">
            <div class="left">
              <div class="box_item">
                <h2>Bánh Dừa Nướng Thanh Bình</h2>
              </div>
              <div class="box_item"><span class="fa fa-map-marker"></span><span>Địa chỉ: <?php the_field('address', 27); ?></span></div>
              <div class="box_item"><span class="fa fa-phone"></span><span>Số điện thoại (Zalo): <?php the_field('phone', 27); ?></span></div>
              <div class="box_item"><span class="fa fa-paper-plane"></span><span>Fanpage: <a href="<?php the_field('fanpage', 27); ?>">Bánh dừa nướng Thanh Bình</a></span></div>
              <div class="box_item"><span class="fa fa-globe"></span><span>Website: <a href="<?php the_field('website', 27); ?>">Bánh dừa nướng Thanh Bình</a></span></div>
            </div>
            <div class="right">
              <!-- <form action="">
                <label for="name">Họ Tên</label>
                <input id="name" type="text" name="">
                <label for="phone">Số điện thoại</label>
                <input id="phone" type="number" name="">
                <label for="description">Lời nhắn</label>
                <textarea id="description" name="" cols="30" rows="10"></textarea>
                <button class="btn" type="submit">Gửi</button>
              </form> -->
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
get_footer();