<?php get_header(); ?>

<section class="search-page">

    <?php
    $s = get_search_query();
    $args = array(
        's' => $s
    );
    // The Query
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        _e("<h1>Resultat av sökning: " . get_query_var('s') . "</h1>");
        while ($the_query->have_posts()) {
            $the_query->the_post();
    ?>
            <li>
                <a href="<?php wp_redirect(the_permalink()); ?>"><?php the_title(); ?></a>
            </li>
        <?php
        }
    } else {
        ?>
        <h1>Här var det tomt!</h1>
        <div class="alert alert-info">
            <p>Tyvärr, vi hittade ingenting som matchar din sökning.</p>
        </div>
    <?php } ?>
</section>


<?php get_footer(); ?>