    <div class="sidemap">
      <div class="inner">
        <div class="item">
          <h3>Bánh Dừa Nướng Thanh Bình</h3>
          <div class="box_item"><span class="fa fa-map-marker"></span><span>Địa chỉ: <?php the_field('address', 27); ?></span></div>
          <div class="box_item"><span class="fa fa-phone"></span><span>Số điện thoại (Zalo): <?php the_field('phone', 27); ?></span></div>
          <div class="box_item"><span class="fa fa-paper-plane"></span><span>Fanpage: <a href="<?php the_field('fanpage', 27); ?>">Bánh dừa nướng Thanh Bình</a></span></div>
          <div class="box_item"><span class="fa fa-globe"></span><span>Website: <a href="<?php the_field('website', 27); ?>">Bánh dừa nướng Thanh Bình</a></span></div>
        </div>
        <div class="item">
          <ul>
            <li><a href="<?php echo get_page_link(92); ?>">Chính sách bảo mật</a></li>
            <li><a href="<?php echo get_page_link(128); ?>">Quy định và hình thức thanh toán</a></li>
            <li><a href="<?php echo get_page_link(130); ?>">Chính sách đổi/trả/hủy và hoàn tiền</a></li>
            <li><a href="<?php echo get_page_link(132); ?>">Chính sách giao nhận/vận chuyển</a></li>
          </ul>
        </div>
        <div class="item">
          <div class="facebook">
            <h3>FACEBOOK FANPAGE</h3>
            <a href="https://www.facebook.com/banhduanuongthanhbinh"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook.png" alt=""></a>
          </div>
          <div class="youtube">
            <h3>YOUTUTE</h3>
            <a href="https://youtube.com"><img src="<?php bloginfo('template_url'); ?>/assets/images/youtube.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
		<footer>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'main-nav',
            'menu' => 'ul',
            'menu_class' => 'footer_menu',
          )
        )
      ?>
      <p class="copyright">Copyright &copy; bánh dừa nướng Thanh Bình 2022</p>
    </footer>
    <div class="overlay"></div>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/lib/jquery-3.6.0.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
  </body>
</html>