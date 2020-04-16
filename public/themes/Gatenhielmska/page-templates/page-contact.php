<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<section class="contact-page">

    <h1 class="contact-title">Kontaktuppgifter</h1>

    <div class="contact-information">
        <h1>Öppettider</h1>
        <p><?php the_field('opening_hours') ?></p>
        <h1>Biljetter</h1>
        <p><?php the_field('tickets') ?></p>
        <h1>Boka våra lokaler</h1>
        <p><?php the_field('booking') ?></p>
        <h1>Press</h1>
        <p><?php the_field('press') ?></p>
        <h1>Adress</h1>
        <p><?php the_field('address') ?></p>
        <h1>Kontakt</h1>
        <p>Telefon: <?php the_field('phone') ?></br>E-post: <?php the_field('email') ?></p>

    </div>

    <h1 class="contact-title">Ledningsgruppen</h1>
    <section class="management-wrapper">

        <?php $management = get_posts(['post_type' => 'management']); ?>
        <?php if (count($management)) : ?>
            <?php foreach ($management as $post) : setup_postdata($post); ?>
                <?php $postContent = get_the_content($post) ?>
                <?php
                $image = get_field('image_management');
                $size = array('243', '243');
                ?>
                <div class="management-container">
                    <div class="management">

                        <?php echo wp_get_attachment_image($image, $size, "", ["class" => "management-image"]); ?>

                        <?php if (get_field('full_name')) : ?>
                            <h1><?php the_field('full_name'); ?></h1>
                        <?php endif ?>

                        <?php if (get_field('work_title')) : ?>
                            <p><?php the_field('work_title'); ?></p>
                        <?php endif ?>

                        <?php if (get_field('email')) : ?>
                            <p><?php the_field('email'); ?></p>
                        <?php endif ?>
                    </div>

                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>

    <section class="contact-form">
        <div class="contact-form-container">
            <h1>Vill du bli en av oss?</h1>
            <p>Vi söker ständigt volontärer att arbeta på våra olika evenemang. Brinner du för konst och kultur? skicka då in en spontanansökan så kanske vi hör av oss!</p>
            <form class="contact-form-flex">
                <label for="name">För- och efternamn:</label>
                <input type="text" name="name" id="name">
                <label for="email">E-post:</label>
                <input type="email" name="email" id="email">
                <label for="phone">Telefonnummer:</label>
                <input type="phone" name="phone" id="phone">
            </form>
            <button>Skicka</button>
        </div>
    </section>

</section>

<?php get_footer();
