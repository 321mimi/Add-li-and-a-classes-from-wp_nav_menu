# Add li and a classes from wp_nav_menu
Snippet that allows you to add classes to li and a tag from wp_nav_menu.

## Usage
1. Register your menu
2. Copy-paste "Adds class to link automatically" and "Adds class to li automatically" to functions.php
3. Insert and tweak the following:
`wp_nav_menu(array(
    "theme_location" => "header-menu",
    "menu_class" => "Insert ul classes here",
    "li_class" => "Insert li classes here",
    "link_class" => "Insert a classes here"
));`