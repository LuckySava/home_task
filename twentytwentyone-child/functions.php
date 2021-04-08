<?php

include_once( get_stylesheet_directory() . '/lib/ScriptsAndStyles.php' );
include_once( get_stylesheet_directory() . '/inc/shortcodes.php' );

ScriptsAndStyles::addThemeScriptsAndStyles();



//get_footer
//wp_footer
//wp_print_footer_scripts

// Pages where need to show "Time Banner"

add_action( 'wp_footer', 'show_banner');

function show_banner(){

    if(is_page()){
        echo do_shortcode('[show_time_banner]');
    }

}