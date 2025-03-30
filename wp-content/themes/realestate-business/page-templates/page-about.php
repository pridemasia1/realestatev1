<?php
/*
Template Name: About Us
*/
get_header(); ?>

<main class="container">
    <section class="about-section">
        <h1>About Our Company</h1>
        <p>We are dedicated to helping you find the perfect home.</p>
    </section>

    <section class="team-section">
        <h2>Meet Our Team</h2>
        <div class="row">
            <?php
            $team_members = new WP_Query(array(
                'post_type' => 'team',
                'posts_per_page' => 4
            ));
            if ($team_members->have_posts()) :
                while ($team_members->have_posts()) : $team_members->the_post(); ?>
                    <div class="col-md-3">
                        <div class="team-card">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
