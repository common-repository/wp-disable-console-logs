<?php
/**
 * Plugin Name: WP Disable Console Logs
 * Plugin URI: https://eastsidecode.com
 * Description: This plugin prevents WordPress from logging and javascript to the console.
 * Version: 1.0
 * Author: EastSide Code
 * Author URI: http://eastsidecode.com
 * License: GPL12
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class esCodePreventConsoleLogs {

	function __construct() {
		
		
		add_action('wp_head', function() {

			if (!current_user_can('administrator')) {
				?>

				<script type="text/javascript">
					console.log = function(){};
				</script>

				<?php
			}

		}, 1);


	} // end construct

} // end class


// initialise the class with an object
$esCodePreventConsoleLogsInit = new esCodePreventConsoleLogs();