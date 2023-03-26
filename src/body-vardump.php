<?php
/**
 * Easy var_dump in wordpress
 *
 * @package wp-spppets
 */

add_action( 'wp_body_open', 'body_open_print' );
function body_open_print() {
	
	//put your data here
	$var = array ( array("Volvo",22,18), array("BMW",15,13), array("Saab",5,2), array("Land Rover",17,15));
	
	$dump = $var;

	echo '<div style="display:block; width:100%; padding: 36px; z-index: 999;">mantap</div>';
	
	highlight_string("<?php\n" . var_export($dump, true) . ";\n?>");
	
	echo '</div>';
}
