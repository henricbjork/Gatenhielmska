<?php /* Template Name: Gallery */ ?>

<?php get_header(); ?>

<section class="instagram" style="border: 1px solid black;">
    <?php echo do_shortcode('[instagram-feed class=instagram-feed num=2 cols=1 showheader=false showfollow=false showbutton=false disablemobile=true]'); ?>
</section>

<?php get_footer();
