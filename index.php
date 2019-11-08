<?php
/*
Plugin Name: fields
Plugin URI: https://github.com/antibrand/fields
Description: User inteface and frontend API for custom fields.
Version: 1.0.0
Text Domain: acf
Domain Path: /lang
*/

/**
 * Credits
 *
 * This fields plugin was forked from Advanced Custom Fields.
 * Original author: Elliot Condon
 *
 * @see https://www.advancedcustomfields.com
 */

// Stop here if this file is called directly.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * If ACF is active
 *
 * Stop here if Advanced Custom Fields is active.
 *
 * @todo Perhaps fire an admin notice with link to
 *       an exlpanation page.
 */
if ( class_exists( 'ACF' ) ) {
	return;
}

/**
 * Plugin version
 *
 * Keeping the version at 1.0.0 as this is a starter plugin but
 * you may want to start counting as you develop for your use case.
 *
 * @since  1.0.0
 * @return string Returns the latest plugin version.
 */
if ( ! defined( 'FIELDS_VERSION' ) ) {
	define( 'FIELDS_VERSION', '1.0.0' );
}

/**
 * Text domain
 *
 * @since  1.0.0
 * @return string Returns the text domain of the plugin.
 *
 * @todo   Replace all strings with constant.
 */
if ( ! defined( 'FIELDS_DOMAIN' ) ) {
	define( 'FIELDS_DOMAIN', 'fields' );
}

/**
 * Plugin folder path
 *
 * @since  1.0.0
 * @return string Returns the filesystem directory path (with trailing slash)
 *                for the plugin __FILE__ passed in.
 */
if ( ! defined( 'FIELDS_PATH' ) ) {
	define( 'FIELDS_PATH', plugin_dir_path( __FILE__ ) );
}

/**
 * Plugin folder URL
 *
 * @since  1.0.0
 * @return string Returns the URL directory path (with trailing slash)
 *                for the plugin __FILE__ passed in.
 */
if ( ! defined( 'FIELDS_URL' ) ) {
	define( 'FIELDS_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * Universal slug
 *
 * This URL slug is used for various plugin admin & settings pages.
 *
 * The prefix will change in your search & replace in renaming the plugin.
 * Change the second part of the define(), here as 'controlled-chaos-plugin',
 * to your preferred page slug.
 *
 * @since  1.0.0
 * @return string Returns the URL slug of the admin pages.
 */
if ( ! defined( 'FIELDS_ADMIN_SLUG' ) ) {
	define( 'FIELDS_ADMIN_SLUG', 'controlled-chaos-plugin' );
}

/**
 * Get the core plugin class
 *
 * @since   1.0.0
 */
require_once FIELDS_PATH . 'class-fields.php';