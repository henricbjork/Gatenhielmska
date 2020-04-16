<?php /* Template Name: About*/ ?>

<?php get_header(); ?>

<section class="about-page">

    <div class="timeline">
        <div class="event-wrapper">
            <?php if (have_rows('slides')) : ?>
                <?php while (have_rows('slides')) : the_row(); ?>
                    <div class="events-timeline">
                        <div class="year"><span></span>
                            <h1><?php the_sub_field('year'); ?></h1>
                        </div>
                        <p><?php the_sub_field('content'); ?></p>
                    </div>

                <?php endwhile; ?>
        </div>
    <?php else : ?>
    <?php endif; ?>
    <button class="about-button-history">Hela historien</button>
    <div class="read-less">
        <button class="about-read-less-button hidden"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/arrow.svg" alt="">
    </div>
    </div>




    <h1 class="about-title">Hyresgäster</h1>
    <section class="tenants-wrapper">

        <?php $tenants = get_posts(['post_type' => 'tenants']); ?>
        <?php if (count($tenants)) : ?>
            <?php foreach ($tenants as $post) : setup_postdata($post); ?>
                <?php $postContent = get_the_content($post) ?>
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
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
</section>

<?php get_footer();
