<?php

// SELECTIVE REFRESH FOR KIRKI

function customizer_customize_register( $wp_customize ) {
    // FOR KIRKI
    $wp_customize->selective_refresh->add_partial( 'partial_text', array(
        'selector'        => '.c-text',
        'settings'        => 'customize_setting',
        'render_callback' => function () {
            return get_theme_mod( 'customize_setting' );
        },
    ) );
    $wp_customize->selective_refresh->add_partial( 'partial_repeater', array(
        'selector'        => '.repeater',
        'settings'        => 'repeater_setting',
        'render_callback' => function () {
            return get_theme_mod( 'repeater_setting' );
        },
    ) );
    $wp_customize->selective_refresh->add_partial( 'partial_sortable', array(
        'selector'        => '.sort',
        'settings'        => 'sortable_setting',
        'render_callback' => function () {
            return get_theme_mod( 'sortable_setting' );
        },
    ) );
    $wp_customize->selective_refresh->add_partial( 'partial_sortable2', array(
        'selector'        => '.stable',
        'settings'        => 'sortable_setting',
        'render_callback' => function () {
            return get_theme_mod( 'sortable_setting' );
        },
    ) );
}
add_action( 'customize_register', 'customizer_customize_register' );

// ADD KIRKI PANEL

new \Kirki\Panel(
    'panel_customize',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'My Customize Panel', 'customizer' ),
        'description' => esc_html__( 'My Customize Panel Description.', 'customizer' ),
    ]
);

// ADD KIRKI SECTION

new \Kirki\Section(
    'section_customize',
    [
        'title'       => esc_html__( 'My Customize', 'customizer' ),
        'description' => esc_html__( 'My Customize Description.', 'customizer' ),
        'panel'       => 'panel_customize',
        'priority'    => 160,
    ]
);

// ADD KIRKI CONTROL [ FIELD TEXT ]

new \Kirki\Field\Text(
    [
        'settings'  => 'customize_setting',
        'label'     => esc_html__( 'Text Control', 'customizer' ),
        'section'   => 'section_customize',
        'default'   => esc_html__( 'This is a default value', 'customizer' ),
        'priority'  => 10,
        'transport' => 'postMessage',
    ]
);

// ADD KIRKI CONTROL [ FIELD REPEATER ]

new \Kirki\Field\Repeater(
    [
        'settings'     => 'repeater_setting',
        'label'        => esc_html__( 'Repeater Control', 'customizer' ),
        'section'      => 'section_customize',
        'priority'     => 10,
        'transport'    => 'postMessage',
        'fields'       => [
            'link_text' => [
                'type'    => 'text',
                'label'   => esc_html__( 'Repeater Text', 'customizer' ),
                'default' => '',
                'name'    => 'ctext',
                'class'   => 'ctext',
            ],
            'checkbox'  => [
                'type'    => 'checkbox',
                'label'   => esc_html__( 'Repeater Checkbox', 'customizer' ),
                'default' => false,
            ],
        ],
        'row_label'    => [
            'type'  => 'field',
            'value' => esc_html__( 'Repeater', 'customizer' ),
            'field' => 'link_text',
        ],
        'button_label' => esc_html__( '"Add Repeater"', 'customizer' ),
        'choices'      => [
            'limit' => 3,
        ],
        'transport'    => 'postMessage',
    ]
);

// ADD KIRKI CONTROL [ FIELD SORTABLE ]

new \Kirki\Field\Sortable(
    [
        'settings'  => 'sortable_setting',
        'label'     => __( 'Sortable', 'tex-d' ),
        'section'   => 'section_customize',
        'default'   => ['option6', 'option3', 'option1'],
        'priority'  => 10,
        'choices'   => [
            'option1' => esc_html__( 'Option 1', 'tex-d' ),
            'option2' => esc_html__( 'Option 2', 'tex-d' ),
            'option3' => esc_html__( 'Option 3', 'tex-d' ),
            'option4' => esc_html__( 'Option 4', 'tex-d' ),
            'option5' => esc_html__( 'Option 5', 'tex-d' ),
            'option6' => esc_html__( 'Option 6', 'tex-d' ),
        ],
        'transport' => 'postMessage',
    ]
);
