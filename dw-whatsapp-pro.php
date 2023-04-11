<?php
/*
Plugin Name: چت واتساپ پیشرفته 
Description: افزونه کاربردی برای گفتگوی آنلاین در واتساپ و نمایش آیکون آن در صفحه سایت شما
Author: mohammad darvish
Author URI: https://darvishweb.com
Version: 1.0.0
License: GPLv2 or later
*/

if( !defined( 'ABSPATH' ) ) {
	exit;
}


define('PLUGIN_PATH' , plugin_dir_path( __FILE__ ));
define('PLUGIN_INCLUDES' , PLUGIN_PATH . 'includes');
define('PLUGIN_URL' , plugin_dir_url( __FILE__ ));
define('PLUGIN_URLCSS' , PLUGIN_URL . 'assets/css');
define('PLUGIN_URLJS' , PLUGIN_URL . 'assets/js');
define('PLUGIN_URLFONTS' , PLUGIN_URL . 'assets/fonts');
define('PLUGIN_URLIMG' , PLUGIN_URL . 'assets/images');


require PLUGIN_INCLUDES . '/dw_add_scripts.php' ;
require PLUGIN_PATH . '/dw_main_template.php' ;


