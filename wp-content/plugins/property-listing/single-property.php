<?php
// Single Property Template (single-property.php)
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        $price = get_field( 'price' );
        $location = get_field( 'location' );
        $key_features = get_field( 'key_features' );
        $amenities = get_field( 'amenities_short' );
        $gallery = get_field( 'gallery' );
        ?>
        <div class="property-details">
            <h1><?php the_title(); ?></h1>
            <div class="property-price">Price: $<?php echo $price; ?></div>
            <div class="property-location">Location: <?php echo $location; ?></div>
            <div class="property-description"><?php the_content(); ?></div>
            <div class="property-key-features">
                <h2>Key Features:</h2>
                <p><?php echo nl2br($key_features); ?></p>
            </div>
            <div class="property-amenities">
                <h2>Amenities:</h2>
                <?php if ( $amenities ) : ?>
                    <ul>
                        <?php foreach ( $amenities as $amenity ) : ?>
                            <li><i class="<?php echo esc_attr( $amenity['icon'] ); ?>"></i> <?php echo esc_html( $amenity['name'] ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="property-gallery">
                <h2>Gallery:</h2>
                <?php if ( $gallery ) : ?>
                    <div class="gallery-images">
                        <?php foreach ( $gallery as $image ) : ?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
    endwhile;
endif;

get_footer();
