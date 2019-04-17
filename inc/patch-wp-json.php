<?php
if( ! defined("ABSPATH") ) {
    exit;
}
if(class_exists("patchWPJson")) {
    die;
} else {
    class patchWPJson
    {
        public function __construct()
        {
            /*
                *  Thanks to lowtechsun and stackoverflow from M for following filters and actions
                *  I am extending them to computable security 
            */
            remove_action('wp_head', 'rest_output_link_wp_head', 10);
            // You can require authentication for all REST API requests by adding an is_user_logged_in
            // check to the rest_authentication_errors filter.
            add_filter('rest_authentication_errors', function ($result) {
                if (!empty($result)) {
                    return $result;
                }
                // Extended by M
                if (!is_user_logged_in()) {
                    // Deeply Security
                    global $wp;
                    $route = explode("/", $wp->request) ;
                    if(array_search('contact-form-7',$route) || array_search('wpstatistics',$route) ) {
                        return $result;
                    } else {
                        return new WP_Error('rest_not_logged_in', 'Only authenticated users can access the REST API.', array('status' => 401));
                    }
                    // Little Soft Security
                    /*
                    if( array_search('users',$route)) {
                        return new WP_Error('rest_not_logged_in', 'Only authenticated users can access the REST API.', array('status' => 401));
                    } else {
                        return $result;
                    }
                    */
                }
                return $result;
            });
            if (!is_admin()) {
                // default URL format
                if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
                add_filter('redirect_canonical', array($this, 'shapeSpace_check_enum'), 10, 2);
            }
        }
        function shapeSpace_check_enum($redirect, $request)
        {
            // permalink URL format
            if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
            else return $redirect;
        }
    }
    new patchWPJson();
}
