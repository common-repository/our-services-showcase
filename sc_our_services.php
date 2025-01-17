<?php
/*
  Plugin Name: Our Services Showcase
  Plugin URI: https://smartcatdesign.net/downloads/our-services-showcase-pro/
  Description: Display your services on your site in a professional and appealing way. Over 600 icons to choose from.
  Version: 2.0
  Author: Smartcat
  Author URI: https://smartcatdesign.net
  License: GPL v2
  Text Domain: smartcat-services
 * 
 * @author          Bilal Hassan <bilal@smartcat.ca>
 * @copyright       Smartcat Design <http://smartcatdesign.net>
 */


// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    die;
}
if (!defined('SC_SERVICES_PATH'))
    define('SC_SERVICES_PATH', plugin_dir_path(__FILE__));
if (!defined('SC_SERVICES_URL'))
    define('SC_SERVICES_URL', plugin_dir_url(__FILE__));
    define('SMARTCAT_STORE_URL', 'http://smartcatdesign.net');


require_once ( plugin_dir_path( __FILE__ ) . 'inc/class/class.smartcat-services.php' );

// activation and de-activation hooks
register_activation_hook( __FILE__, array( 'SmartcatServicesPlugin', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'SmartcatServicesPlugin', 'deactivate' ) );

SmartcatServicesPlugin::instance();
