<?php

/*
  Plugin Name: MeliBu WP Sharing Social Safe
  Plugin URI:  http://samet-tarim.de/wordpress/melibu-plugins/sharing-social-safe
  Description: This Melibu WP Sharing Social Safe plugin was designed so that you can warrant the embedding in social media in a safer way for you and your users. The security of personal data is growing daily on priority and the laws are being adapted to prevent abuse of data. With this plugin, you and your users are on the safe side. Rate this plugin <a href="https://wordpress.org/support/view/plugin-reviews/download-counter-button">MeliBu WP Sharing Social Safe</a> we welcome any support.
  Version:     1.7.0.8
  Author:      Samet Tarim
  Author URI:  http://samet-tarim.de/
  Text Domain: sharing-social-safe
  Domain Path: /languages/
  License:     GPLv2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html

  MeliBu WP Sharing Social Safe is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 2 of the License, or
  any later version.

  MeliBu WP Sharing Social Safe is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with MeliBu WP Sharing Social Safe. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

// SECURE SCRIPT ///////////////////////////////////////////////////////////////

if (!defined('ABSPATH')) {
    exit;
}

// DEFINE FULLPATH /////////////////////////////////////////////////////////////

if (!defined('MELIBU_PLUGIN_PATH_02')) {
    define('MELIBU_PLUGIN_PATH_02', plugin_dir_path(__FILE__));
}

if (!defined('MELIBU_PLUGIN_URL_02')) {
    define('MELIBU_PLUGIN_URL_02', plugin_dir_url(__FILE__));
}

// DEFINE GLOBALS //////////////////////////////////////////////////////////////

global $MELIBU_PLUGIN_BACKEND_02;

// Require Classes
foreach (glob(MELIBU_PLUGIN_PATH_02 . "classes/*.php") as $mb_plugin_sss_classes) {
    require_once $mb_plugin_sss_classes;
}

// Check Admin
if (is_admin()) {

    // Require Backend Class
    require_once MELIBU_PLUGIN_PATH_02 . 'classes/pager/class.MelibuClicks.php';

    // Check if class
    if (class_exists('MELIBU_PLUGIN_BACKEND_02')) {

        $MELIBU_PLUGIN_BACKEND_02 = new MELIBU_PLUGIN_BACKEND_02(); // Instantiate the plugin class
        // Installation and uninstallation hooks
        register_activation_hook(__FILE__, array('MELIBU_PLUGIN_BACKEND_02', 'activate'));
        register_deactivation_hook(__FILE__, array('MELIBU_PLUGIN_BACKEND_02', 'deactivate'));
        register_uninstall_hook(__FILE__, array('MELIBU_PLUGIN_BACKEND_02', 'uninstall'));
    }

    // Add a link to the settings page onto the plugin page
    if (isset($MELIBU_PLUGIN_BACKEND_02)) {

        // Add the settings link to the plugins page
        function melibu_plugin_settings_02_link($links) {

            $settings_link = '<a href="admin.php?page=melibu-plugin-social-admin-control-menu-0">' . __('Options', 'sharing-social-safe') . '</a>';
            array_unshift($links, $settings_link);
            return $links;
        }

        $plugin = plugin_basename(__FILE__);
        add_filter("plugin_action_links_$plugin", 'melibu_plugin_settings_02_link');
    }
}