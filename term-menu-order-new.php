<?php
/*
Plugin Name: Term Menu Order New
Plugin URI: https://btcny.com
Description: Creates a 'menu_order' column to specify term order, allowing theme and plugin developers to sort term by menu order.
Author: Fred Shequine
Version: 1.0
Author URI: https://btcny.com
License: GPL2
*/

/*  Copyright 2010  Fred Shequine  (email : fred@btcny.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Set up the autoloader.
 */

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(dirname(__FILE__) . '/lib/'));

spl_autoload_extensions('.class.php');

if (! function_exists('buffered_autoloader')) {
	
	function buffered_autoloader ($c) {

		try {
		
			spl_autoload($c);
			
		} catch (Exception $e) {
			
			$message = $e->getMessage();
			
			return $message;
			
		}
		

	}
	
}

spl_autoload_register('buffered_autoloader');

/**
 * Get the plugin object. All the bookkeeping and other setup stuff happens here.
 */

$ns_tmo_plugin = NS_TMO_Plugin::get_instance();
//declared the get_instance() method as static in /lib/ns_tmo_plugin.class.php, doubt this plugin will ever get updated.FGS
//$ns_tmo_plugin = new NS_TMO_Plugin(); didn't work, class may not be coded right.
//$ns_tmo_plugin->get_instance(); didn't work

?>
