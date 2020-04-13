<?php get_header(); ?>

<section class="events">

    <?php $eventTypes = get_the_terms($post, 'event-type'); ?>

    <div class="event-card-wrapper">
        <div class="event-card">
            <div class="event-date">
                <p><?php if (get_field('date')) : ?>
                        <p><?php the_field('date'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('time')) : ?>
                        <p><?php the_field('time'); ?></p>
                    <?php endif; ?></p>
            </div>
            <div class="event-thumbnail">
                <?php
                $image = get_field('image');
                ?>
                <?php echo wp_get_attachment_image($image, "", "", ["class" => "thumbnail-image"]); ?>
            </div>
            <div class="event-short-info">
                <?php foreach ($eventTypes as $eventType) : ?>
                    <a class="event-type" href="<?php echo get_term_link($eventType) ?>"><?php echo $eventType->name ?></a>
                <?php endforeach; ?>
                <h1 class="event-name"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="event-card-expanded">
            <p>
                <?php foreach ($eventTypes as $eventType) : ?>
                    <a class="event-type" href="<?php echo get_term_link($eventType) ?>"><?php echo $eventType->name ?></a>
                <?php endforeach; ?>
            </p>
            <h1 class="event-name"><?php the_title(); ?></h1>
            <?php if (get_field('content')) : ?>
                <p class="event-content"><?php the_field('content') ?></p>
            <?php endif; ?>
            <div class="event-prices">
                <?php if (get_field('regular_price')) : ?>
                    <p>Entré: <?php the_field('regular_price'); ?>:- </p>
                <?php endif; ?>
                <?php if (get_field('special_price')) : ?>
                    <p>Student/Pensionär: <?php the_field('special_price'); ?>:- </p>
                <?php endif; ?>
            </div>
            <?php if (get_field('social_media')) : ?>
                <p><?php the_field('social_media'); ?></p>
            <?php endif; ?>
            <?php if (get_field('livestream')) : ?>
                <p>LIVESTREAM: </p>
                <a href="<?php the_field('livestream') ?>">Klicka här!</a>
            <?php endif; ?>

        </div>

        <div class="event-buttons">
            <button class="event-read-more">Läs mer</button>
            <button class="buy-ticket">Köp biljett</button>
        </div>

    </div>

</section>

<?php get_footer(); ?>