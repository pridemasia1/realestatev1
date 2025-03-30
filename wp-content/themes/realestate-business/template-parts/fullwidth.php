<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<main class="container">
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
