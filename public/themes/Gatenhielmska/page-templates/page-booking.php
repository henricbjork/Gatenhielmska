<?php /* Template Name: Booking*/ ?>

<?php get_header(); ?>

<section class="booking-page">
    <h1 class="booking-title">Boka Lokal</h1>
    <section class="booking-form">
        <div class="booking-form-container">
            <h1>Boka Gathenhielmska</h1>
            <p>Önskar du att genomföra en Konsert, Workshop, kurs eller något annat i någon av våra lokaler? Vänligen fyll i formuläret nedan så återkommer vi.</p>
            <form>
                <label for="name">För- och efternamn:</label>
                <input type="text" name="name" id="name">
                <label for="email">E-post:</label>
                <input type="email" name="email" id="email">
                <label for="phone">Telefonnummer:</label>
                <input type="phone" name="phone" id="phone">
                <label for="information">Information om önskat evenemang:</label>
                <textarea name="information" id="information"></textarea>
            </form>
            <button>Skicka</button>
        </div>
    </section>
    <h1 class="booking-title">Internbokning</h1>
    <a href="https://boka.se/"><button>Till Boka.se</button></a>
</section>

<?php get_footer();
