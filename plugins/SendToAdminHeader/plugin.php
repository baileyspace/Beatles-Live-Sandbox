<?php
require_once HELPERS;

add_plugin_hook('admin_theme_header', 'stah_admin_theme_header');
add_plugin_hook('admin_theme_footer', 'stah_admin_theme_footer');
add_filter('admin_items_form_tabs','stah_admin_theme_tabs');

require_once dirname(__FILE__) . '/functions.php';

?>