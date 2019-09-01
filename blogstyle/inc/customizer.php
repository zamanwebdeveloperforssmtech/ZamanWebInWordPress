<?php
/**
 * blogstyle Theme Customizer.
 *
 * @package blogstyle
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function blogstyle_customize_register( $wp_customize ) {  

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';   
 
//Header section
$wp_customize->add_section(
        'blogstyle_header_section',
        array(
            'title' => esc_html__( 'Search Section', 'blogstyle' ),
            'description' => esc_html__( 'Search section', 'blogstyle' ),
            'priority' => 33,
        )
    );
    
    // Search box
    $wp_customize->add_setting('blogstyle_search_box', array(
        'sanitize_callback' => 'blogstyle_sanitize_checkbox'
    ) );
    $wp_customize->add_control(
    'blogstyle_search_box',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Include search box', 'blogstyle' ),
        'section' => 'blogstyle_header_section',
    )
    );  

// Social icon section
$wp_customize->add_section(
        'blogstyle_social_section',
        array(
            'title' => esc_html__( 'Social icon section', 'blogstyle' ),
            'description' => esc_html__( 'Social section.', 'blogstyle' ),
            'priority' => 46,
        )
    );
    /* Facebook icon*/
    $wp_customize->add_setting('blogstyle_facebook_icon', array(
        'sanitize_callback' => 'blogstyle_sanitize_checkbox'
    ) );

    $wp_customize->add_control(
        'blogstyle_facebook_icon',
        array(
            'type' => 'checkbox',
            'label' => 'Include facebook icon',
            'section' => 'blogstyle_social_section',
        )
    );

     /* Facebook link setting */

    $wp_customize->add_setting( 'blogstyle_facebook_link', array(
        'sanitize_callback' => 'blogstyle_sanitize_url'
    ) );
    $wp_customize->add_control(

             'blogstyle_facebook_link', array(
                'label'    => esc_html__( 'Facebook Link:', 'blogstyle' ),
                'section'  => 'blogstyle_social_section',
                'settings' => 'blogstyle_facebook_link',
                'type' => 'text',

            )
    );
    
    /* Twitter icon */
    $wp_customize->add_setting('blogstyle_twitter_icon', array(
        'sanitize_callback' => 'blogstyle_sanitize_checkbox'
    ) );
    $wp_customize->add_control(
        'blogstyle_twitter_icon',
        array(
            'type' => 'checkbox',
            'label' => 'Include twitter icon',
            'section' => 'blogstyle_social_section',
        )
    );
   /* Twitter link setting */
    $wp_customize->add_setting( 'blogstyle_twitter_link', array(
        'sanitize_callback' => 'blogstyle_sanitize_url'
    ) );
    $wp_customize->add_control(

             'blogstyle_twitter_link', array(
                'label'    => esc_html__( 'Twitter Link:', 'blogstyle' ),
                'section'  => 'blogstyle_social_section',
                'settings' => 'blogstyle_twitter_link',
                'type' => 'text',
            )
    );

    /* Google plus */
    $wp_customize->add_setting('blogstyle_google_icon', array(
        'sanitize_callback' => 'blogstyle_sanitize_checkbox'
    ) );

    $wp_customize->add_control(
        'blogstyle_google_icon',
        array(
            'type' => 'checkbox',
            'label' => 'Include google plus icon',
            'section' => 'blogstyle_social_section',
        )
    );

    /* Google plus link setting */

    $wp_customize->add_setting( 'blogstyle_google_link', array(
        'sanitize_callback' => 'blogstyle_sanitize_url'
    ) );

    $wp_customize->add_control(
             'blogstyle_google_link', array(
                'label'    => esc_html__( 'Google Plus Link:', 'blogstyle' ),
                'section'  => 'blogstyle_social_section',
                'settings' => 'blogstyle_google_link',
                'type' => 'text',
            )
    );
    
    /* Instagram */
    $wp_customize->add_setting('blogstyle_instagram_icon', array(
        'sanitize_callback' => 'blogstyle_sanitize_checkbox'
    ) );

    $wp_customize->add_control(
        'blogstyle_instagram_icon',
        array(
            'type' => 'checkbox',
            'label' => 'Include instagram icon',
            'section' => 'blogstyle_social_section',
        )
    );

    /* Instagram setting */

    $wp_customize->add_setting( 'blogstyle_instagram_link', array(
        'sanitize_callback' => 'blogstyle_sanitize_url'
    ) );

    $wp_customize->add_control(

             'blogstyle_instagram_link', array(
                'label'    => esc_html__( 'Instagram Link:', 'blogstyle' ),
                'section'  => 'blogstyle_social_section',
                'settings' => 'blogstyle_instagram_link',
                'type' => 'text',
            )
    );
    
    /* Linkedin */
    $wp_customize->add_setting('blogstyle_linked_icon', array(
        'sanitize_callback' => 'blogstyle_sanitize_checkbox'
    ) );

    $wp_customize->add_control(
        'blogstyle_linked_icon',
        array(
            'type' => 'checkbox',
            'label' => 'Include linkedin icon',
            'section' => 'blogstyle_social_section',
        )
    );
    
    /* Linkedin link setting */
    $wp_customize->add_setting( 'blogstyle_linked_link', array(
        'sanitize_callback' => 'blogstyle_sanitize_url'
    ) );

    $wp_customize->add_control(

             'blogstyle_linked_link', array(
                'label'    => esc_html__( 'Linkedin Link:', 'blogstyle' ),
                'section'  => 'blogstyle_social_section',
                'settings' => 'blogstyle_linked_link',
                'type' => 'text',
            )
    );
    
    /* Youtube */
    $wp_customize->add_setting('blogstyle_youtube_icon', array(
        'sanitize_callback' => 'blogstyle_sanitize_checkbox'
    ) );

    $wp_customize->add_control(
        'blogstyle_youtube_icon',
        array(
            'type' => 'checkbox',
            'label' => 'Include youtube icon',
            'section' => 'blogstyle_social_section',
        )
    );
    
    /* Linkedin link setting */
    $wp_customize->add_setting( 'blogstyle_youtube_link', array(
        'sanitize_callback' => 'blogstyle_sanitize_url'
    ) );

    $wp_customize->add_control(

             'blogstyle_youtube_link', array(
                'label'    => esc_html__( 'Youtube Link:', 'blogstyle' ),
                'section'  => 'blogstyle_social_section',
                'settings' => 'blogstyle_youtube_link',
                'type' => 'text',
            )
    );   
    
}
add_action( 'customize_register', 'blogstyle_customize_register' );


function blogstyle_sanitize_html( $html ) {
    return wp_filter_post_kses( $html );
}
function blogstyle_sanitize_checkbox( $checked ) {
  
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
function blogstyle_sanitize_image( $image, $setting ) {
   
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
   
    $file = wp_check_filetype( $image, $mimes );
   
    return ( $file['ext'] ? $image : $setting->default );
}
function blogstyle_sanitize_url( $url ) {
    return esc_url_raw( $url );
}
function blogstyle_customize_preview_js() {
    wp_enqueue_script( 'blogstyle_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'blogstyle_customize_preview_js' );