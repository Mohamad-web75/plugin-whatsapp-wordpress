<?php

// add scripts to website
add_action('wp_footer' , 'add_jqscript');
function add_jqscript(){
	?>
	<script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
  <script src="<?php echo PLUGIN_URLJS . '/master.js' ?>" ></script>
  <?php
}


add_action( 'wp_enqueue_scripts' , 'add_script_func' );
function add_script_func(){
	wp_register_style('dw-chat-css' , PLUGIN_URLCSS . '/style.css' );
	wp_enqueue_style('dw-chat-css');

}