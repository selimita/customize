<?php

function customizer_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'services_section', array(
        'title'           => __( 'Our Services', 'customizer' ),
        'priority'        => 120,
        'active_callback' => function () {
            return is_page_template( 'page-templates/landing.php' );
        },
    ) );
    $wp_customize->add_setting( 'services_settings', array(
        'default'   => 'Our Service 24',
        'transport' => 'postMessage', //postMessage
        // 'type' => 'option', //theme_mod

    ) );
    $wp_customize->add_control( 'services_settings', array(
        'label'    => __( 'Services Text', 'customizer' ),
        'section'  => 'services_section',
        'settings' => 'services_settings',
        'type'     => 'text',
    ) );
    $wp_customize->selective_refresh->add_partial( 'partial_text', array(
        'selector'        => '.title',
        'settings'        => 'services_settings',
        'render_callback' => function () {
            return get_theme_mod( 'services_settings' );
        },
    ) );
    $wp_customize->add_setting( 'services_settings_textarea', array(
        // 'default'   => 'Our Service 24',
        'transport' => 'postMessage', //postMessage
        // 'type' => 'option', //theme_mod

    ) );
    $wp_customize->add_control( 'services_control_textarea', array(
        'label'    => __( 'Services Textarea', 'customizer' ),
        'section'  => 'services_section',
        'settings' => 'services_settings_textarea',
        'type'     => 'textarea',
    ) );
    $wp_customize->add_setting( 'services_settings_checkbox', array(
        'default'   => 1,
        'transport' => 'refresh', //postMessage
        // 'type' => 'option', //theme_mod

    ) );
    $wp_customize->add_control( 'services_control_checkbox', array(
        'label'    => __( 'Services Checkbox', 'customizer' ),
        'section'  => 'services_section',
        'settings' => 'services_settings_checkbox',
        'type'     => 'checkbox',
    ) );
    $wp_customize->add_setting( 'services_settings_link', array(
        'default'   => 'https://learnwith.hasinhayder.com/',
        'transport' => 'postMessage', //postMessage
        // 'type' => 'option', //theme_mod

    ) );
    $wp_customize->add_control( 'services_control_link', array(
        'label'           => __( 'Services Link', 'customizer' ),
        'section'         => 'services_section',
        'settings'        => 'services_settings_link',
        'type'            => 'text',
        'active_callback' => 'services_control_link_active',
    ) );
    /**
     * All Types Control
     */
    $wp_customize->add_section( 'all_types_control', array(
        'title'           => __( 'All Types Control', 'customizer' ),
        'priority'        => 120,
        'active_callback' => function () {
            return is_page_template( 'page-templates/about.php' );
        },
    ) );
    /**
     * Radio Control
     */
    $wp_customize->add_setting( 'settings_radio', array(
        'default'   => 'selimita',
        'transport' => 'refresh', //postMessage
    ) );
    $wp_customize->add_control( 'control_radio', array(
        'label'    => __( 'Radio Control', 'customizer' ),
        'section'  => 'all_types_control',
        'settings' => 'settings_radio',
        'type'     => 'radio',
        'choices'  => array(
            'mita'     => __( 'Mita', 'customizer' ),
            'selimita' => __( 'Selimita', 'customizer' ),
            'arafa'    => __( 'Arafa', 'customizer' ),
            'babu'     => __( 'Babu', 'customizer' ),
        ),
    ) );
    /**
     * Select Control
     */
    $wp_customize->add_setting( 'settings_select', array(
        'default'   => 'arafa',
        'transport' => 'refresh', //postMessage
    ) );
    $wp_customize->add_control( 'control_select', array(
        'label'    => __( 'Select Control', 'customizer' ),
        'section'  => 'all_types_control',
        'settings' => 'settings_select',
        'type'     => 'select',
        'choices'  => array(
            'mita'     => __( 'Mita', 'customizer' ),
            'selimita' => __( 'Selimita', 'customizer' ),
            'arafa'    => __( 'Arafa', 'customizer' ),
            'babu'     => __( 'Babu', 'customizer' ),
        ),
    ) );
    /**
     * Dropdown Pages Control
     */
    $wp_customize->add_setting( 'settings_dropdown_pages', array(
        'default'   => 'arafa',
        'transport' => 'refresh', //postMessage
    ) );
    $wp_customize->add_control( 'control_dropdown_pages', array(
        'label'          => __( 'Dropdown Pages Control', 'customizer' ),
        'section'        => 'all_types_control',
        'settings'       => 'settings_dropdown_pages',
        'type'           => 'dropdown-pages',
        'allow_addition' => true,
    ) );
    /**
     * HTML5 Control
     */
    $wp_customize->add_section( 'all_html5_control', array(
        'title'    => __( 'All HTML5 Control', 'customizer' ),
        'priority' => 120,
    ) );
    /**
     * Number Control
     */
    $wp_customize->add_setting( 'settings_number', array(
        'default'   => 100,
        'transport' => 'refresh', //postMessage
    ) );
    $wp_customize->add_control( 'number_control_html5', array(
        'label'       => __( 'HTML5 Number', 'customizer' ),
        'section'     => 'all_html5_control',
        'settings'    => 'settings_number',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 90,
            'max'  => 100,
            'step' => 2,
        ),
    ) );
    /**
     * Range Control
     */
    $wp_customize->add_setting( 'settings_range', array(
        'default'   => 50,
        'transport' => 'refresh', //postMessage
    ) );
    $wp_customize->add_control( 'range_control_html5', array(
        'label'       => __( 'HTML5 Range', 'customizer' ),
        'section'     => 'all_html5_control',
        'settings'    => 'settings_range',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 30,
            'max'  => 100,
            'step' => 2,
        ),
    ) );
    $wp_customize->add_setting( 'settings_date', array(
        'transport' => 'refresh', //postMessage
    ) );
    $wp_customize->add_control( 'date_control_html5', array(
        'label'    => __( 'HTML5 Date', 'customizer' ),
        'section'  => 'all_html5_control',
        'settings' => 'settings_date',
        'type'     => 'date',
    ) );
/**
 * About Page Section
 */
    $wp_customize->add_section( 'section_about_page', array(
        'title'           => __( 'About Page Section', 'customizer' ),
        'priority'        => 30,
        'active_callback' => function () {
            return is_page_template( 'page-templates/about.php' );
        },
    ) );
    $wp_customize->add_setting( 'settings_about_title', array(
        'transport' => 'postMessage', //postMessage
    ) );
    $wp_customize->add_control( 'control_title', array(
        'label'    => __( 'About Title', 'customizer' ),
        'section'  => 'section_about_page',
        'settings' => 'settings_about_title',
        'type'     => 'text',
    ) );
    $wp_customize->add_setting( 'settings_about_description', array(
        'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo voluptatem porro odit voluptatibus officia, maxime dolores aut, neque magnam ipsum modi, ratione voluptates soluta',
        'transport' => 'postMessage', //postMessage
    ) );
    $wp_customize->add_control( 'control_des', array(
        'label'    => __( 'About Description', 'customizer' ),
        'section'  => 'section_about_page',
        'settings' => 'settings_about_description',
        'type'     => 'textarea',
    ) );
    $wp_customize->add_setting( 'setting_about_page', array(
        'default'   => '#dd2d6a',
        'transport' => 'postMessage', //postMessage
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'control_about_page', array(
        'label'    => __( 'Pick About Color', 'customizer' ),
        'section'  => 'section_about_page',
        'settings' => 'setting_about_page',
    ) ) );
    /**
     * ADD Panel
     * add_panel in your add_section
     */
    $wp_customize->add_panel( 'customize_panel', array(
        'title'       => __( 'Theme Options' ),
        'description' => 'panel des',
        'priority'    => 10,
    ) );
    /**
     * Column Section
     * Number of Column Control HTML5
     */
    $wp_customize->add_section( 'column_control', array(
        'title'           => __( 'Column Control', 'customizer' ),
        'priority'        => 120,
        'panel'           => 'customize_panel',
        'active_callback' => function () {
            return is_page_template( 'page-templates/landing.php' );
        },
    ) );
    $wp_customize->add_setting( 'settings_column', array(
        'default'   => 4,
        'transport' => 'refresh', //postMessage
    ) );
    $wp_customize->add_control( 'control_column', array(
        'label'    => __( 'Select Column', 'customizer' ),
        'section'  => 'column_control',
        'settings' => 'settings_column',
        'type'     => 'radio',
        'choices'  => array(
            '3' => '3 Column',
            '4' => '4 Column',
            '6' => '6 Column',
        ),
    ) );
    $wp_customize->selective_refresh->add_partial( 'partial_column', array(
        'selector'        => '.selective-refresh',
        'settings'        => 'settings_column',
        'render_callback' => function () {
            return get_theme_mod( 'settings_column' );
        },
    ) );
    /**
     * Image Section
     */
    $wp_customize->add_section( 'control_image', array(
        'title'           => __( 'Upload Image', 'customizer' ),
        'priority'        => 120,
        'panel'           => 'customize_panel',
        'active_callback' => function () {
            return is_page_template( 'page-templates/landing.php' );
        },
    ) );
    $wp_customize->add_setting( 'setting_image', array(
        'transport' => 'postMessage', //postMessage
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'setting_image', array(
        'label'    => __( 'Add Image', 'customizer' ),
        'section'  => 'control_image',
        'settings' => 'setting_image',
    ) ) );
    $wp_customize->selective_refresh->add_partial( 'partial_image', array(
        'selector'        => '.selective-image',
        'settings'        => 'setting_image',
        'render_callback' => function () {
            return get_theme_mod( 'setting_image' );
        },
    ) );
    /**
     * Upload File/Cropped Image Section
     */
    $wp_customize->add_section( 'control_file', array(
        'title'           => __( 'Upload File/Cropped Image', 'customizer' ),
        'priority'        => 120,
        'panel'           => 'customize_panel',
        'active_callback' => function () {
            return is_page_template( 'page-templates/landing.php' );
        },
    ) );
    $wp_customize->add_setting( 'bio_image', array(
        'default'   => get_template_directory_uri() . '/inc/cake.jpg',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'bio_image', array(
        'label'       => __( 'bio_image', 'myTheme' ),
        'flex_width'  => false,
        'flex_height' => false,
        'width'       => 200,
        'height'      => 200,
        'section'     => 'control_file',
        'settings'    => 'bio_image',
    ) ) );
    // $wp_customize->add_setting( 'setting_file', array(
    //     'transport' => 'postMessage', //postMessage
    // ) );
    // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'setting_file', array(
    //     'label'   => __( 'Croped Image', 'customizer' ),
    //     'section' => 'control_file',
    //     'width'   => 700,
    //     'height'  => 500,
    // ) ) );
    $wp_customize->selective_refresh->add_partial( 'partial_file', array(
        'selector'        => '.selective-file',
        'settings'        => 'bio_image',
        'render_callback' => function () {
            return get_theme_mod( 'bio_image' );
        },
    ) );
    /**
     * Media Section
     */
    $wp_customize->add_section( 'control_media', array(
        'title'           => __( 'Upload Media', 'customizer' ),
        'priority'        => 120,
        'panel'           => 'customize_panel',
        'active_callback' => function () {
            return is_page_template( 'page-templates/landing.php' );
        },
    ) );
    $wp_customize->add_setting( 'setting_media', array(
        'transport' => 'postMessage', //postMessage
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'setting_media', array(
        'label'    => __( 'Add Media', 'customizer' ),
        'section'  => 'control_media',
        'settings' => 'setting_media',
    ) ) );
    $wp_customize->selective_refresh->add_partial( 'partial_media', array(
        'selector'        => '.selective-media',
        'settings'        => 'setting_media',
        'render_callback' => function () {
            return get_theme_mod( 'setting_media' );
        },
    ) );

    /**
     * Color Section
     */
    $wp_customize->add_section( 'color_control', array(
        'title'           => __( 'Color Control', 'customizer' ),
        'priority'        => 120,
        'panel'           => 'customize_panel',
        'active_callback' => function () {
            if ( is_page_template( 'page-templates/landing.php' ) ) {
                return true;
            }
            return false;
        },
    ) );
    $wp_customize->add_setting( 'settings_color', array(
        'default'   => '#dd2d6a',
        'transport' => 'postMessage', //postMessage
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'settings_color', array(
        'label'   => __( 'Pick Color', 'customizer' ),
        'section' => 'color_control',
    ) ) );
    $wp_customize->selective_refresh->add_partial( 'partial_color', array(
        'selector'        => '.service',
        'settings'        => 'settings_color',
        'render_callback' => function () {
            return get_theme_mod( 'settings_color' );
        },
    ) );
}
add_action( 'customize_register', 'customizer_customize_register' );

// Active Callback Function
function services_control_link_active() {
    if ( get_theme_mod( 'services_settings_checkbox' ) == 1 ) {
        return true;
    }
    return false;
}