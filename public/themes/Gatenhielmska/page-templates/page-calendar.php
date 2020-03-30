<?php /* Template Name: Calendar */ ?>

<?php get_header(); ?>

<main role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <header>

                </header>

                <?php the_content(); ?>
            </article>
        <?php endwhile;
    else : ?>
        <article>
            <p>Nothing to see.</p>
        </article>
    <?php endif; ?>

    <?php $events = get_posts(['post_type' => 'events']); ?>

    <?php if (count($events)) : ?>

        <h2>Events</h2>

        <?php foreach ($events as $post) : setup_postdata($post); ?>

            <h1><?php the_title(); ?></h1>

            <?php $postContent = get_the_content($post) ?>

            <p><?php echo $postContent ?></p>

            <?php $eventTypes = get_the_terms($post, 'event-type'); ?>


            <p>Event type:

                <?php foreach ($eventTypes as $eventType) : ?>

                    <a href="<?php echo get_term_link($eventType) ?>"><?php echo $eventType->name ?></a>

                <?php endforeach; ?>
            </p>

            <?php if (get_field('date')) : ?>
                <p>Datum: <?php the_field('date'); ?></p>
            <?php endif; ?>
            <?php if (get_field('time')) : ?>
                <p>Starttid: <?php the_field('time'); ?></p>
            <?php endif; ?>
            <?php if (get_field('price_regular')) : ?>
                <p>Pris: <?php the_field('price_regular'); ?></p>
            <?php endif; ?>
            <?php if (get_field('price_special')) : ?>
                <p>Pris student/pensionär: <?php the_field('price_special'); ?></p>
            <?php endif; ?>
            <?php if (get_field('social_media')) : ?>
                <p>Sociala medier: <a href="<?php the_field('social_media'); ?>"><?php the_field('social_media'); ?></a></p>
            <?php endif; ?>


        <?php endforeach; ?>

    <?php endif; ?>

</main>

<?php get_footer();
