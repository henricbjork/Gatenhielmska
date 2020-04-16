  <?php wp_footer(); ?>
  <?php if ($pagename === 'kalender') : ?>
    <div class="footer-top" style="background: #ebc8bf;">
      <img class="footer-image" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/wave.svg" />
      <img class="footer-bird" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/bird.svg" />
    </div>
  <?php else : ?>
    <div class="footer-top">
      <img class="footer-image" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/wave.svg" />
      <img class="footer-bird" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/bird.svg" />
    </div>
    <?php endif; ?>
    <footer>
      <div class="contact-info">
      <p>Kontakta oss!</p>
      <p>Stigbergstorget 7, 414 63 Göteborg</p>
      <a href="mailto: kontakt@gathenhielmska.se">kontakt@gathenhielmska.se</a>
      <div class="social-media">
        <p>Följ oss!</p>
        <div class="media-icons">
          <a><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/instagram.svg" alt=""></a>
          <a><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/facebok.svg" alt=""></a>
          <a><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/youtube.svg" alt=""></a>
        </div>
      </div>
    </div>
    <div class="partners">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/sfr.svg" alt="">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gbgstad-logo.svg" alt="">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/higab-logo.svg" alt="">
    </div>
  </footer>
  </body>

  </html>