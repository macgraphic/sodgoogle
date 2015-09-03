<?php
/**
 * @package SodGoogle
 */
/*
Plugin Name: SodGoogle
Plugin URI: .
Description: A fix for the WordPress admin menu issue, caused by Google Chome version 45
Version: 0.0.1
Author: Mark Smallman
Author URI: http://macgraphic.co.uk
License: GPLv2 or later
Text Domain: sodgoogle
*/

if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome/45' ) !== false ) add_action('admin_head', create_function('', "echo \"<script type='text/javascript'>jQuery(window).load(function(){jQuery('#adminmenuwrap').hide().show(0);});</script>\";") );

?>
