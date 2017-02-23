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
		add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts_frontend' ) );

		//create shortcode
		add_shortcode( 'countdown', array( $this, 'countdown_timer_shortcode' ) );

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

	public static function load_scripts_frontend(){
		//add additional scripts/styles here if needed		
	}

	public static function countdown_timer_shortcode( $atts ){

		$yoohoo_atts = shortcode_atts(
			array(
				'date' => '',
				'time' => '00:00:00', //if left out of the shortcode it will default to this value otherwise it will be overwritten.
				'timezone' => '',
				'style' => '',
				'format' => '',
				), $atts
			);

		wp_enqueue_script( 'yct-main', YCT_URL . 'assets/js/yct-main.js', array( 'jquery' ) );
		wp_enqueue_script( 'yct-countdown', YCT_URL . 'assets/js/jquery.countdown.js', array( 'jquery' ) );
		//sanitize before passing var to the JS file & sanitize in the JS.

		wp_localize_script( 'yct-main', 'yct_timer_value', $yoohoo_atts );

		return '<div id="yct-timer"></div>';

	}

}

Yoohoo_Countdown_Timer::get_instance();