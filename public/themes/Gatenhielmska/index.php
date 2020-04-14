<?php get_header(); ?>
<section class="calender-main">
    <div class="calender-page-name"><?php echo $pagename ?></div>
    <div class="calender-forms">
        <button class="tour-button">GUIDAD TUR</button>
        <div class="tour-form">
            <p>Är du intresserad av att boka en guidad tur i våra lokaler? Fyll i dina kontaktuppgifter nedan så återkommer vi med lediga tider inom kort.</p>
            <form>
                <label for="name">För- och efternamn</label>
                <input type="text" name="name" id="name">
                <label for="email">E-post</label>
                <input type="email" name="email" id="email">
                <label for="phone">Telefonnummer:</label>
                <input type="phone" name="phone" id="phone">
            </form>
            <button>Skicka</button>
        </div>
        <div class="filter">
            <button class="news-filter">Filtrera</button>
            <form class="filter-content">

                <div class="checkboxes">
                    <input class="checkbox" type="checkbox" value="workshop">
                    <label class="checkbox-label" for="workshop">Workshop</label>
                </div>
                <div class="checkboxes">
                    <input class="checkbox" type="checkbox" value="dance">
                    <label class="checkbox-label" for="dance">Dansuppvisning</label>
                </div>
                <div class="checkboxes">
                    <input class="checkbox" type="checkbox" value="concert">
                    <label class="checkbox-label" for="concert">Workshop</label>
                </div>
                <div class="checkboxes">
                    <input class="checkbox" type="checkbox" value="exhibition">
                    <label class="checkbox-label" for="exhibition">Utställning</label>
                </div>
                <div class="checkboxes">
                    <input class="checkbox" type="checkbox" value="theater">
                    <label class="checkbox-label" for="theater">Teater</label>
                </div>
                <div class="checkboxes">
                    <input class="checkbox" type="checkbox" value="other">
                    <label class="checkbox-label" for="other">Övrigt</label>
                </div>

                <input class="filter-search-field" type="text" placeholder="Sök">
                <button class="news-filter-show">Visa</button>
            </form>
        </div>
    </div>
    <section class="all-events">
        <?php $events = get_posts(['post_type' => 'events']); ?>

        <?php if (count($events)) : ?>
            <section class="events">

                <?php foreach ($events as $post) : setup_postdata($post); ?>
                    <?php $eventTypes = get_the_terms($post, 'event-type'); ?>

                    <div class="event-card-wrapper">
                        <div class="event-card">
                            <div class="event-date">
                                <?php if (get_field('date')) : ?>
                                    <h1><?php the_field('date'); ?></h1>
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
                                <?php else : ?>
                                    <p>Entré: Fri entré</p>
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
                            <?php if (get_field('regular_price') === '' || get_field('regular_price') === '0') :  ?>
                                <button data-status="disabled" class="buy-ticket">Fri Entré!</button>
                            <?php else : ?>
                                <button data-status="enabled" class="buy-ticket">Köp biljett</button>
                            <?php endif; ?>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            </section>
            <div class="past-events-container">
                <a href="#" class="past-events-link">SE TIDIGARE EVENEMANG</a>
            </div>
    </section>

    <?php get_footer(); ?>