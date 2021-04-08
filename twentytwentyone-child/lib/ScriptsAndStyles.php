<?php

Class ScriptsAndStyles{

    static function addThemeScriptsAndStyles(){
        add_action( 'wp_enqueue_scripts', 'ScriptsAndStyles::addThemeScripts' );
    }

    static function addThemeScripts(){
        wp_enqueue_style('custom', get_stylesheet_directory_uri() .'/assets/css/custom.css', null, null);

        wp_enqueue_script( 'momentjs', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js', array(), null, true);
        wp_enqueue_script( 'global', get_stylesheet_directory_uri() . '/assets/js/global.js', array(), null, true);
    }

}

?>