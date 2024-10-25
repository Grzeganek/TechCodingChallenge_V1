<?php
/**
 * Plugin Name: My React Plugin
 * Description: Ein Plugin, das eine React-App mit Gutenberg-Kompatibilität integriert.
 * Version: 1.0.0
 * Author: Dein Name
 */

if (!defined('ABSPATH')) exit;

// Die Scripts der React-App und den Gutenberg-Block registrieren
function my_react_plugin_register_block() {
    // Laden der gebündelten JavaScript-Datei der React-App
    wp_register_script(
        'my-react-app',
        plugins_url('build/index.js', __FILE__),
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components'),
        filemtime(plugin_dir_path(__FILE__) . 'build/index.js')
    );

    // Registriere den Gutenberg-Block
    register_block_type(__DIR__, array(
        'editor_script' => 'my-react-app'
    ));
}
add_action('init', 'my_react_plugin_register_block');
