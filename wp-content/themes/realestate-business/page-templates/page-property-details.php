<?php get_header(); ?>

<main class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="property-details">
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('large'); ?>
            
            <p><strong>Price:</strong> <?php echo get_post_meta(get_the_ID(), 'property_price', true); ?></p>
            <p><strong>Location:</strong> <?php echo get_post_meta(get_the_ID(), 'property_location', true); ?></p>
            <p><strong>Description:</strong></p>
            <?php the_content(); ?>
            
            <a href="/contact" class="btn btn-primary">Schedule a Visit</a>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
