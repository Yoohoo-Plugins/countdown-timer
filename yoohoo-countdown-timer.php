<?php
/*
* Plugin Name: YooHoo Countdown Timer
* Plugin URI: #
* Description: Countdown timer *** UPDATE *****
* Version: .1
* Author: YooHoo Plugins
* Author URI: http://www.yoohooplugins.com
* Text Domain: yoohoo-countdown-timer
*
* YooHoo Countdown Timer is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 2 of the License, or
* any later version.
*
* YooHoo Countdown Timer is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with YooHoo Countdown Timer. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

defined( 'ABSPATH' ) or exit;

define( 'YCT_DIR', plugin_dir_path( __FILE__ ) );
define( 'YCT_URL', plugin_dir_url( __FILE__ ) );
define( 'YCT_BASENAME', plugin_basename( __FILE__ ) );
define( 'YCT_VER', '.1' );

class Yoohoo_Countdown_Timer{

	private static $instance = null;

	public function __construct(){

		// hooks go here - i.e. add_action( 'wp_head', array( $this, 'function_name' ) );

	}

	public static function get_instance() {

		if ( null == self::$instance ) {
		    self::$instance = new self;
		}

	return self::$instance;

	}

	/**
	* General functions go below
	*/

}

Yoohoo_Countdown_Timer::get_instance();

