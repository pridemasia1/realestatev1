<?php
// Function to handle property search query based on form input
function handle_property_search_query( $query ) {
    // Check if we are on the search results page and it's the main query
    if ( !is_admin() && $query->is_main_query() && is_page( 'search-results' ) ) {

        // Retrieve search parameters from the URL
        $location = isset( $_GET['location'] ) ? sanitize_text_field( $_GET['location'] ) : '';
        $property_type = isset( $_GET['property_type'] ) ? sanitize_text_field( $_GET['property_type'] ) : '';
        $price_range = isset( $_GET['price_range'] ) ? sanitize_text_field( $_GET['price_range'] ) : '';
        $property_size = isset( $_GET['property_size'] ) ? sanitize_text_field( $_GET['property_size'] ) : '';
        $build_year = isset( $_GET['build_year'] ) ? sanitize_text_field( $_GET['build_year'] ) : '';

        // Modify the query based on search parameters
        if ( $location ) {
            $query->set( 'meta_query', array(
                array(
                    'key' => 'location',
                    'value' => $location,
                    'compare' => 'LIKE'
                )
            ));
        }

        if ( $property_type ) {
            $query->set( 'meta_query', array(
                array(
                    'key' => 'property_type',
                    'value' => $property_type,
                    'compare' => 'LIKE'
                )
            ));
        }

        // Additional filters for price range, property size, and build year
        if ( $price_range ) {
            $price_range_values = explode( '-', $price_range );
            if ( count( $price_range_values ) == 2 ) {
                $query->set( 'meta_query', array(
                    array(
                        'key' => 'price',
                        'value' => $price_range_values,
                        'compare' => 'BETWEEN',
                        'type' => 'NUMERIC'
                    )
                ));
            }
        }

        if ( $property_size ) {
            $query->set( 'meta_query', array(
                array(
                    'key' => 'property_size',
                    'value' => $property_size,
                    'compare' => 'LIKE'
                )
            ));
        }

        if ( $build_year ) {
            $query->set( 'meta_query', array(
                array(
                    'key' => 'build_year',
                    'value' => $build_year,
                    'compare' => 'LIKE'
                )
            ));
        }
    }
}
add_action( 'pre_get_posts', 'handle_property_search_query' );
