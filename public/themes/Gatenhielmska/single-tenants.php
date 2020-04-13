<?php get_header(); ?>

<section class="about-page">

    <?php
    $image = get_field('image_tenant');
    $size = array('243', '243');
    ?>
    <div class="tenants">
        <div class="tenant">

            <?php echo wp_get_attachment_image($image, $size, "", ["class" => "tentants-image"]); ?>

            <?php if (get_field('company')) : ?>
                <h1><?php the_field('company'); ?></h1>
            <?php endif ?>

            <?php if (get_field('contact')) : ?>
                <p><?php the_field('contact'); ?></p>
            <?php endif ?>

            <?php if (get_field('email')) : ?>
                <p><?php the_field('email'); ?></p>
            <?php endif ?>
        </div>

    </div>

</section>


<?php get_footer(); ?>