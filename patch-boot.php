<?php
/**
 * Plugin Name: Patch wp-json/users Backdoor
 * Plugin URI: http://plife.se
 * Description: This plugin is patching for availability of users data by REST API  wp-json
 * Version: 1.0
 * Author: M.Sevimli
 * Author URI: http://plife.se
 * License: GPL2
 * https://github.com/msevimli/
 * https://www.linkedin.com/in/m-sevimli/
 */

/* wp-json/wp/v2/users */
// If you don't want to install this plugin, you can just include  following class directly into the your theme
// or your custom plugin

require_once("inc/patch-wp-json.php");
