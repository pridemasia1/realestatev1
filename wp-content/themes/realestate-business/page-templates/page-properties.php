<?php
/*
Template Name: Properties
*/
get_header(); ?>

<main class="container">
    <h1>Available Properties</h1>
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'property',
            'posts_per_page' => 6
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-4">
                    <div class="property-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'property_price', true); ?></p>
                        </a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No properties available</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
