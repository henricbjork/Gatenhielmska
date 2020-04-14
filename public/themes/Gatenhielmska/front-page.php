<?php get_header(); ?>

<section class="news-section">
    <div class="news">
        <p class="news-prompt">På gång i huset</p>
        <div class="news-items">
            <?php $news = get_posts(['post_type' => 'news']); ?>
            <?php if (count($news)) : ?>
                <?php foreach ($news as $post) : setup_postdata($post); ?>
                    <?php $postContent = get_the_content($post) ?>
                    <div class="news-card-start">
                        <div class="news-card-text">
                            <h1 class="news-card-header"><?php the_title(); ?></h1>
                            <?php if (get_field('date_news')) : ?>
                                <p class="news-card-date"><?php the_field('date_news'); ?></p>
                            <?php endif ?>
                            <?php if (get_field('content')) : ?>
                                <p class="news-card-paragraph"><?php the_field('content'); ?></p>
                            <?php endif ?>
                            <a href="#">LÄS MER</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <a href="http://localhost:8000/nyheter/"><button>Fler nyheter</button></a>
    </div>
</section>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <?php the_content(); ?>
        </article>
    <?php endwhile;
else : ?>
    <article>
        <p>Nothing to see.</p>
    </article>
<?php endif; ?>

<?php $events = get_posts(['post_type' => 'events', 'numberposts' => 3]); ?>

<?php if (count($events)) : ?>
    <h2 class="event-header">Evenemang & Utställningar</h2>
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
        <a href="/kalender"><button class="all-events-btn">Alla Evenmang</button></a>
    <?php endif; ?>
    </section>
    <section class="news-letter">
        <div class="news-letter-box">
            <h1>Nyhetsbrev</h1>
            <p>Vill du få information om Gathenhielmska rakt in i din brevlåda? Skriv då in din mailadress här nedan så hörs vi på mailen!</p>
            <form>
                <label for="name">För- och efternamn:</label>
                <input type="text" name="name" id="name">
                <label for="email">E-post:</label>
                <input type="email" name="email" id="email">
            </form>
            <button>Skicka</button>
        </div>
    </section>

    <?php get_footer();
