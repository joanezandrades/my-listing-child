<?php
/**
 * Includes 
 */
include_once('inc/helper_functions.php');


/**
 * Add actions list
 */
add_action( 'wp_enqueue_scripts', 'unityCode_enqueue_styles_theme' );
add_action( 'init', 'unityCode_cpt_token' );

