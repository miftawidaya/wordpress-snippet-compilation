<?php
/**
 * Theme functions and definitions
 *
 * @package wp-spppets
 */

add_action( 'wp_body_open', 'body_open_print' );
function body_open_print() {
	
	$cars = array (
		array("Volvo",22,18),
		array("BMW",15,13),
		array("Saab",5,2),
		array("Land Rover",17,15)
	);

	echo '<div style="display:block; width:100%; padding: 36px; z-index: 999;">mantap</div>';
	
	highlight_string("<?php\n" . var_export($data, true) . ";\n?>");
	
	echo '</div>';
}
