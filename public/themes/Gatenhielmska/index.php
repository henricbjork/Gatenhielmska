<?php get_header(); ?>
<section class="calender-main">
    <div class="calender-forms">
        <button class="tour-button"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/cross.svg" alt=""> GUIDAD TUR</button>
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

    </section>
</section>
<?php get_footer();
