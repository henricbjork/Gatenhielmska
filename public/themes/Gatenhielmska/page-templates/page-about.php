<?php /* Template Name: About*/ ?>

<?php get_header(); ?>

<section class="about-page">

    <div class="timeline">
        <div class="event-wrapper">
            <?php if (have_rows('slides')) : ?>
                <?php while (have_rows('slides')) : the_row(); ?>
                    <div class="events-timeline">
                        <h1><?php the_sub_field('year'); ?></h1>
                        <p><?php the_sub_field('content'); ?></p>
                    </div>

                <?php endwhile; ?>
        </div>
    <?php else : ?>
    <?php endif; ?>
    <button>Hela historien</button>
    </div>

    <?php $tenants = get_posts(['post_type' => 'tenants']); ?>
    <?php if (count($tenants)) : ?>
        <?php foreach ($tenants as $post) : setup_postdata($post); ?>
            <?php $postContent = get_the_content($post) ?>
            <?php
            $image = get_field('image');
            $size = array('327', '264');
            ?>

            <div class="tenants">
                <h1 class="about-title">Hyresgäster</h1>
                <div class="tenant">

                    <?php echo wp_get_attachment_image($image, $size, "", ["class" => "news-card-image"]); ?>

                    <?php if (get_field('company')) : ?>
                        <p><?php the_field('company'); ?></p>
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

<?php get_footer();
