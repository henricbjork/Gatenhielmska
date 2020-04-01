<?php /* Template Name: News */ ?>


<?php get_header(); ?>



<section class="news-page">

    <h1 class="news-title"><?php the_title(); ?></h1>
    <div class="filter">
        <button class="news-filter">Filtrera</button>
    </div>

    <?php $news = get_posts(['post_type' => 'news']); ?>
    <?php if (count($news)) : ?>
        <?php foreach ($news as $post) : setup_postdata($post); ?>
            <?php $postContent = get_the_content($post) ?>

            <?php
            $image = get_field('image');
            $size = array('327', '264');
            ?>


            <div class="news-card">
                <?php echo wp_get_attachment_image($image, $size, "", ["class" => "news-card-image"]); ?>
                <div class="news-card-text">
                    <h1 class="news-card-header"><?php the_title(); ?></h1>

                    <?php if (get_field('content')) : ?>
                        <p class="news-card-paragraph"><?php the_field('content'); ?></p>
                    <?php endif ?>

                    <button class="news-read-more-button"><span class="read-more-span">Läs mer..</span></button>
                    <div class="read-less">
                        <button class="news-read-less-button hidden"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/arrow.svg" alt="">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</section>


<?php get_footer();
