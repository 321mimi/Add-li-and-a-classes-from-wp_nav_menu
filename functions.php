<?php
/**
 * Functions.php
 *
 *      Map: Register your menu
 *          Adds class to link automatically
 *          Adds class to li automatically
 */

/* Register your menu */
function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __('Header Menu')
     )
   );
}
add_action('init', 'register_my_menus');

/* Adds class to link automatically 
Adapted from: https://stackoverflow.com/questions/26180688/how-to-add-class-to-link-in-wp-nav-menu */
add_filter( 'nav_menu_link_attributes', function($atts, $item, $args) {
	if (property_exists($args, 'link_class')) {
    	$atts['class'] = $args->link_class;
  	}
  return $atts;
}, 1, 3 );

/* Adds class to li automatically */
add_filter( 'nav_menu_css_class', function($classes, $item, $args) {
	if (property_exists($args, 'li_class')) {
		$classes[] = $args->li_class;
	}
    return $classes;
}, 10, 4 );