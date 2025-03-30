<?php
// Display the Property Search Form
function property_search_form() {
    ?>
    <div class="property-search-form">
        <form action="<?php echo esc_url( home_url( '/search-results/' ) ); ?>" method="get">
            <label for="location">Location</label>
            <select name="location" id="location">
                <option value="">Select Location</option>
                <?php
                // Get all property locations dynamically (replace with ACF locations if needed)
                $locations = get_posts( array(
                    'post_type' => 'property',
                    'posts_per_page' => -1,
                    'fields' => 'ids',
                ) );
                foreach ( $locations as $property_id ) {
                    $location = get_field( 'location', $property_id );
                    if ( $location ) {
                        echo '<option value="' . esc_attr( $location ) . '">' . esc_html( $location ) . '</option>';
                    }
                }
                ?>
            </select>

            <label for="property_type">Property Type</label>
            <select name="property_type" id="property_type">
                <option value="">Select Property Type</option>
                <option value="house">House</option>
                <option value="condo">Condo</option>
                <!-- Add more property types as needed -->
            </select>

            <label for="price_range">Price Range</label>
            <select name="price_range" id="price_range">
                <option value="">Select Price Range</option>
                <option value="0-100000">0 - 100,000</option>
                <option value="100000-500000">100,000 - 500,000</option>
                <option value="500000-1000000">500,000 - 1,000,000</option>
                <!-- Add more price ranges as needed -->
            </select>

            <label for="property_size">Property Size</label>
            <select name="property_size" id="property_size">
                <option value="">Select Size</option>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>

            <label for="build_year">Build Year</label>
            <select name="build_year" id="build_year">
                <option value="">Select Build Year</option>
                <option value="before-2000">Before 2000</option>
                <option value="2000-2010">2000 - 2010</option>
                <option value="after-2010">After 2010</option>
            </select>

            <button type="submit">Find Property</button>
        </form>
    </div>
    <?php
}

add_shortcode( 'property_search_form', 'property_search_form' );
