<?php /* Template Name: Gallery */ ?>

<?php get_header(); ?>

<section class="gallery-container">
    <div class="gallery-header">
        <p>BILDER</p>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/instagram.svg" alt="">
    </div>
    <div class="gallery-images">
        <?php echo do_shortcode('[instagram-feed class=instagram-feed num=2 cols=1 showheader=false showfollow=false showbutton=false disablemobile=true imagepadding=4 imagepaddingunit=px]'); ?>
        <a href="https://www.instagram.com/gathenheim/" <button class="instagram-btn">GÅ TILL INSTAGRAM</button></a>
        <button class="gallery-more-btn">VISA FLER INLÄGG<img class="shrink-btn" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/arrow.svg" alt=""><button>
    </div>
    <a href="#">
        <div class="video-header">
            <p>VIDEOS / LIVESTREAM</p>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/instagram.svg" alt="">
        </div>
    </a>
</section>

<?php get_footer();
