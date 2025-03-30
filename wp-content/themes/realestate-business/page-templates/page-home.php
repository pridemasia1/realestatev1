<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<main class="container">
    <section class="hero-section text-center">
        <h1>Welcome to Real Estate Business</h1>
        <p>Find your dream property with us.</p>
        <a href="/contact" class="btn btn-primary">Contact Us</a>
    </section>

    <section class="featured-properties">
        <h2>Featured Properties</h2>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'property',
                'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="property-card">
                            <?php the_post_thumbnail('medium'); ?>
                            <h3><?php the_title(); ?></h3>
                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary">View Details</a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No properties found</p>';
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
