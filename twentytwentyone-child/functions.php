<?php

include_once( get_stylesheet_directory() . '/lib/ScriptsAndStyles.php' );
include_once( get_stylesheet_directory() . '/inc/shortcodes.php' );

ScriptsAndStyles::addThemeScriptsAndStyles();

//is_page()

// Pages where need to show "Time Banner"

add_action( 'before_page_footer', 'show_banner' );

function show_banner() {
    echo do_shortcode( '[show_time_banner]' );
}
