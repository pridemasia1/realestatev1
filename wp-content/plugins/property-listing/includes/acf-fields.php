<?php
// Register ACF fields for properties
if ( function_exists( 'acf_add_local_field_group' ) ) {
    function register_property_acf_fields() {
        acf_add_local_field_group(array(
            'key'                   => 'group_property_details',
            'title'                 => 'Property Details',
            'fields'                => array(
                array(
                    'key'               => 'field_property_price',
                    'label'             => 'Price',
                    'name'              => 'price',
                    'type'              => 'number',
                    'instructions'      => 'Enter the property price',
                ),
                array(
                    'key'               => 'field_property_location',
                    'label'             => 'Location',
                    'name'              => 'location',
                    'type'              => 'text',
                    'instructions'      => 'Enter the property location',
                ),
                array(
                    'key'               => 'field_property_amenities',
                    'label'             => 'Key Features',
                    'name'              => 'key_features',
                    'type'              => 'textarea',
                    'instructions'      => 'Enter key features of the property',
                ),
                array(
                    'key'               => 'field_property_amenities_short',
                    'label'             => 'Amenities Short',
                    'name'              => 'amenities_short',
                    'type'              => 'repeater',
                    'instructions'      => 'Add short amenities with icons',
                    'sub_fields'        => array(
                        array(
                            'key'           => 'field_amenity_icon',
                            'label'         => 'Icon',
                            'name'          => 'icon',
                            'type'          => 'text',
                            'instructions'  => 'Enter icon class (e.g., parking, bathroom)',
                        ),
                        array(
                            'key'           => 'field_amenity_name',
                            'label'         => 'Amenity Name',
                            'name'          => 'name',
                            'type'          => 'text',
                            'instructions'  => 'Enter the name of the amenity',
                        ),
                    ),
                ),
                array(
                    'key'               => 'field_property_gallery',
                    'label'             => 'Gallery',
                    'name'              => 'gallery',
                    'type'              => 'gallery',
                    'instructions'      => 'Add images to the gallery',
                ),
            ),
            'location'              => array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'property',
                ),
            ),
        ));
    }

    add_action( 'acf/init', 'register_property_acf_fields' );
}
