<footer class="footer">
  <div class="container">
    <div class="footer-top">

      <!-- Company Section -->
      <div class="footer-section">
        <h4><?php esc_html_e('Company', 'yourthemename'); ?></h4>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer_company',
          'menu_class'     => '',
          'container'      => false,
          'fallback_cb'    => false
        ));
        ?>
      </div>

      <!-- Service Section -->
      <div class="footer-section">
        <h4><?php esc_html_e('Service', 'yourthemename'); ?></h4>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer_service',
          'menu_class'     => '',
          'container'      => false,
          'fallback_cb'    => false
        ));
        ?>
      </div>

      <!-- Resources Section -->
      <div class="footer-section">
        <h4><?php esc_html_e('Resources', 'yourthemename'); ?></h4>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer_resources',
          'menu_class'     => '',
          'container'      => false,
          'fallback_cb'    => false
        ));
        ?>
      </div>

      <!-- Newsletter -->
      <div class="footer-section newsletter">
        <h4><?php esc_html_e('Subscribe to our newsletter', 'yourthemename'); ?></h4>
        <div class="subscribe-form">
          <?php
          echo do_shortcode('[contact-form-7 id="7c09f48" title="Contact form 1"]');
          ?>
        </div>
      </div>


    </div>

  </div>

  <div class="footer-bottom">
    <p>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All Rights Reserved.', 'yourthemename'); ?></p>

    <div class="social-icons">
      <a href="<?php echo esc_url(get_theme_mod('twitter_link')); ?>"><img src="" alt=""></a>
      <a href="<?php echo esc_url(get_theme_mod('facebook_link')); ?>"><img src="" alt=""></i></a>
      <a href="<?php echo esc_url(get_theme_mod('github_link')); ?>"><img src="" alt=""></i></a>
      <a href="<?php echo esc_url(get_theme_mod('linkedin_link')); ?>"><img src="" alt=""></i></a>
    </div>
  </div>
  </div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<?php wp_footer(); ?>
</body>

</html>