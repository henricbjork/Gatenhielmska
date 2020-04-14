<?php /* Template Name: Gallery */ ?>

<?php get_header(); ?>

<section class="gallery-container">
    <div class="gallery-header">
        <p>BILDER</p>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/insta-black.svg" alt="">
    </div>
    <div class="gallery-images">
        <?php echo do_shortcode('[instagram-feed class=instagram-feed num=2 cols=1 customavatar="https://instagram.fgse1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/91925031_224891455588047_2279748338406391808_n.jpg?_nc_ht=instagram.fgse1-1.fna.fbcdn.net&_nc_ohc=h3-ubl9VfXsAX-MfLwJ&oh=523e33e9681342ce094d71ccf938a109&oe=5EB940F7" showheader=true showfollow=false showbutton=false disablemobile=true imagepadding=4 imagepaddingunit=px]'); ?>
        <a href="https://www.instagram.com/Gathenhielmska2/"><button class="instagram-btn">GÅ TILL INSTAGRAM</button></a>
        <button class="gallery-more-btn">MINIMERA<img class="shrink-btn" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/minimize-white.svg" alt=""></button>
    </div>
    <div class="video-header">
        <p>VIDEOS / LIVESTREAM</p>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/youtube-black.svg" alt="">
    </div>
    <div class="gallery-videos">
        <div class="videos-header">
            <img src="https://instagram.fgse1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/91925031_224891455588047_2279748338406391808_n.jpg?_nc_ht=instagram.fgse1-1.fna.fbcdn.net&_nc_ohc=h3-ubl9VfXsAX-MfLwJ&oh=523e33e9681342ce094d71ccf938a109&oe=5EB940F7" alt="youtube avatar">
            <p>Gatenhielmska</p>
        </div>
        <div class="videos">
            <iframe width="100%" height="215" src="https://www.youtube.com/embed/Jh5oX0VRnzk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="100%" height="215" src="https://www.youtube.com/embed/izTaPcZZAXs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <a href="#"><button class="youtube-btn">GÅ TILL YOUTUBE</button></a>
        </div>
        <button class="video-more-btn">MINIMERA<img class="video-shrink-btn" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/minimize-white.svg" alt=""><button>
    </div>
</section>
<?php get_footer();
