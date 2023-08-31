<?php 
add_action( 'customize_register', 'cd_customizer_settings' ); 
function cd_customizer_settings( $wp_customize ) { 
    //section
    $wp_customize->add_section('about_sidebar', array(
        'title' => __('Sidebar','orcaonezero'),
        'priority' => 30
    ));
    $wp_customize->add_section('o_footer', array(
        'title' => __('Footer note','orcaonezero'),
        'priority' => 30
    ));
    //settings
    $wp_customize->add_setting('sidebar_image', array(
        'default' => 'https://yt3.googleusercontent.com/-CFTJHU7fEWb7BYEb6Jh9gm1EpetvVGQqtof0Rbh-VQRIznYYKJxCaqv_9HeBcmJmIsp2vOO9JU=s900-c-k-c0x00ffffff-no-rj',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_setting('sidebar_title', array(
        'capability' => 'edit_theme_options',
        'default' => 'Text Goes Here',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_setting('footer_note', array(
        'capability' => 'edit_theme_options',
        'default' => 'Footer Note Text Goes Here',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_setting('sidebar_subtitle', array(
        'default' => 'About',
        'transport'   => 'refresh',
       
        
    ));
    $wp_customize->add_setting('sidebar_text', array(
        'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        'transport'   => 'postMessage',
    ));
    //controls
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'sidebar_image',
    array(
        'label' => 'Sidebar Image',
        'section' => 'about_sidebar' ,
        'setting' => 'sidebar_image'
    )));

$wp_customize->add_control('sidebar_title',array(
    'label' => 'Sidebar title',
    'section' => 'about_sidebar',
    'type' => 'text',
    'setting' => 'sidebar_title'
));
$wp_customize->add_control('footer_note',array(
    'label' => 'Footer note',
    'section' => 'o_footer',
    'type' => 'text',
    'setting' => 'footer_note'
));
$wp_customize->add_control('sidebar_subtitle',array(
    'label' => 'Sidebar sub title',
    'section' => 'about_sidebar',
    'type' => 'text',
    'setting' => 'sidebar_subtitle'
));
$wp_customize->add_control('sidebar_text',array(
    'label' => 'Sidebar text',
    'section' => 'about_sidebar',
    'type' => 'text',
    'setting' => 'sidebar_text'
));


    //get settings
    $wp_customize->get_setting( 'sidebar_image' )->transport = 'postMessage';
    $wp_customize->get_setting( 'sidebar_title' )->transport = 'postMessage';
    $wp_customize->get_setting( 'sidebar_subtitle' )->transport = 'postMessage';
    $wp_customize->get_setting( 'sidebar_text' )->transport = 'postMessage';
    
    //Visible Edit Shortcuts
    $wp_customize->selective_refresh->add_partial( 'sidebar_title', array(
        'selector' => ' .post-title',
        'render_callback' => 'sidebar_title',
    ) );
    
    $wp_customize->selective_refresh->add_partial( 'sidebar_subtitle', array(
        'selector' => '.sidebar-block-title',
        'render_callback' => 'sidebar_subtitle',
    ) );
    $wp_customize->selective_refresh->add_partial( 'sidebar_text', array(
        'selector' => '.sidebar-block-text',
        'render_callback' => 'sidebar_text',
    ) );
    $wp_customize->selective_refresh->add_partial( 'sidebar_image', array(
        'selector' => '.sidebar-avatar',
        'render_callback' => 'sidebar_image',
    ) );
}
