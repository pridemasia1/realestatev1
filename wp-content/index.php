<?php get_header(); ?>

<main class="container">
    <h1>Welcome to Real Estate Business</h1>
    <p>Discover Your Dream Property with Estatein.</p>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
