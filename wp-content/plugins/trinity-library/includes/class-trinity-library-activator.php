<?php

/**
 * Fired during plugin activation
 *
 * @link       https://wordpress.org
 * @since      1.0.0
 *
 * @package    Trinity_Library
 * @subpackage Trinity_Library/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Trinity_Library
 * @subpackage Trinity_Library/includes
 * @author     Jaydeep Rajgor <jaydeep.rajgor5@gmail.com>
 */
class Trinity_Library_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;

		$table_name = $wpdb->prefix . "tl_book_log";
		$book_log_table_query = "CREATE TABLE IF NOT EXISTS " . $table_name . "(
						`id` bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
						`user_id` bigint(20) NOT NULL,
						`book_id` bigint(20) NOT NULL,
						`date_taken` date NOT NULL,
						`date_returned` date
					);";
		$wpdb->query( $book_log_table_query );
	}

}
