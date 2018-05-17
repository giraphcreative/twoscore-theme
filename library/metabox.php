<?php


// init cmb2
require_once( 'cmb2/init.php' );



// add metabox(es)
function page_metaboxes( $meta_boxes ) {


    // event metabox
    $event_metabox = new_cmb2_box( array(
        'id' => 'event_metabox',
        'title' => 'Event',
        'object_types' => array( 'event' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $event_metabox->add_field( array(
        'name' => 'Start Date',
        'id'   => CMB_PREFIX . 'event_start',
        'type' => 'text_datetime_timestamp'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Location Description',
        'id'   => CMB_PREFIX . 'event_location_text',
        'type' => 'text',
    ) );

    $event_metabox->add_field( array(
        'name' => 'Map Embed URL',
        'id'   => CMB_PREFIX . 'event_location_link',
        'type' => 'text',
    ) );

    $event_metabox->add_field( array(
        'name' => 'Event Website',
        'id'   => CMB_PREFIX . 'event_website',
        'type' => 'text'
    ) );


}
add_filter( 'cmb2_init', 'page_metaboxes' );



// get CMB value
function get_cmb_value( $field ) {
    return get_post_meta( get_the_ID(), CMB_PREFIX . $field, 1 );
}


// get CMB value
function has_cmb_value( $field ) {
    $cval = get_cmb_value( $field );
    return ( !empty( $cval ) ? true : false );
}


// get CMB value
function show_cmb_value( $field ) {
    print get_cmb_value( $field );
}


// get CMB value
function show_cmb_wysiwyg_value( $field ) {
    print apply_filters( 'the_content', get_cmb_value( $field ) );
}


function cmb2_metabox_show_on_template( $display, $meta_box ) {
    if ( isset( $meta_box['show_on']['key'] ) && isset( $meta_box['show_on']['value'] ) ) :
        if( 'template' !== $meta_box['show_on']['key'] )
            return $display;

        // Get the current ID
        if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
        elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];
        if( !isset( $post_id ) ) return false;

        $template_name = get_page_template_slug( $post_id );
        if ( !empty( $template_name ) ) $template_name = substr($template_name, 0, -4);

        // If value isn't an array, turn it into one
        $meta_box['show_on']['value'] = !is_array( $meta_box['show_on']['value'] ) ? array( $meta_box['show_on']['value'] ) : $meta_box['show_on']['value'];

        // See if there's a match
        return in_array( $template_name, $meta_box['show_on']['value'] );
    else:
        return $display;
    endif;
}
add_filter( 'cmb2_show_on', 'cmb2_metabox_show_on_template', 10, 2 );



?>