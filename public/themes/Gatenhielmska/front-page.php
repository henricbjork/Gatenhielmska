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

            <?php $eventTypes = get_the_terms($post, 'events'); ?>

            <p>Event type:</p>
            <ul>
                <?php foreach ($eventTypes as $eventType) : ?>
                    <li>
                        <a href="<?php echo get_term_link($eventType) ?>"><?php echo $eventType->name ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>

    <?php endif; ?>

</main>

<?php get_footer();
