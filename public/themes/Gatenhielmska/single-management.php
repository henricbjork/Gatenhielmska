<?php get_header(); ?>

<section class="contact-page">

    <?php
    $image = get_field('image_management');
    $size = array('243', '243');
    ?>

    <div class="management-container">
        <div class="management">

            <?php echo wp_get_attachment_image($image, $size, "", ["class" => "management-image"]); ?>

            <?php if (get_field('full_name')) : ?>
                <h1><?php the_field('full_name'); ?></h1>
            <?php endif ?>

            <?php if (get_field('work_title')) : ?>
                <p><?php the_field('work_title'); ?></p>
            <?php endif ?>

            <?php if (get_field('email')) : ?>
                <p><?php the_field('email'); ?></p>
            <?php endif ?>
        </div>

</section>
<?php get_footer(); ?>