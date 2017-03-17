<?php
/*
Plugin Name:    Plugins and themes auto update
Plugin URI:     https://codex.wordpress.org/Configuring_Automatic_Background_Updates#Configuration_via_Filters
Description:    Automatically update plugins and themes
Version:        20150421
Author:         Michal Stanke
Author URI:     http://www.mikk.cz/
*/
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
