<?php

/**
 * OceanWP Child Theme Functions
 *
 * Il file functions.php del tema child viene utilizzato per sovrascrivere
 * o aggiungere funzionalità al tema genitore.
 * 
 * Quando si utilizza un tema child (vedi http://codex.wordpress.org/Theme_Development
 * e http://codex.wordpress.org/Child_Themes), è possibile sovrascrivere alcune
 * funzioni (quelle racchiuse in una chiamata function_exists()) definendole prima
 * nel file functions.php del tema child. Il file functions.php del tema child
 * viene incluso **prima** del file del tema genitore, quindi verranno utilizzate le
 * funzioni del tema child.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style()
{

    // Ottieni dinamicamente il numero di versione del foglio di stile genitore (permette ai browser di ricaricare il foglio di stile quando aggiorni il tema).
    $theme   = wp_get_theme('OceanWP');
    $version = $theme->get('Version');

    // Carica il foglio di stile del tema genitore.
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('oceanwp-style'), $version);
}
add_action('wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style');
