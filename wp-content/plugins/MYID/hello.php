<?php
/**
 * @package MY_ID
 * @version 1.6
 */
/*
Plugin Name: MYID
Plugin URI: http://www.wanna.bi/
Description: Hecho con amor por Wanna.bi
Version: 1.6
Author URI: http://www.wanna.bi/
*/

 

add_shortcode( 'hwelost', 'show_gift_form' );

function show_gift_form()
{
include('lostfoundpage.php');


}

/** Amit  Create a New table */

add_action ('init', 'hwe_lost');
function hwe_lost(){
		global $wpdb;
		$prefix = $wpdb->prefix;
		$hwe_lost = $prefix."lostfound"; 
		
		$sql = 	"CREATE TABLE $hwe_lost (
id INT( 50 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
idnumber BIGINT( 200 ) NOT NULL ,
lostemailid VARCHAR( 255 ) NOT NULL ,
foundemailid VARCHAR( 255 ) NOT NULL
)";
			 		 			
mysql_query($sql);
}

?>