=== DMG Custom Menu Widget ===
Contributors: dancoded
Tags: menu widget, menu, css, list pages
Donate link: http://dancoded.com/wordpress-plugins/
Requires at least: 3.1
Tested up to: 4.6
Stable tag: 1.0
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl.html

Display any Menu in your sidebar or widgetized area. With advanced options to add CSS classes, modify the title & add custom HTML/ Text.

== Description ==

Displays a menu created on the 'Appearance > Menus' page as a list of links.

Includes advanced options to add CSS styles, modify the title and add HTML/ Text before and after each link.

Replaces the built in Menus Widget (WP_Nav_Menu_Widget).

A hook is available to filter the title: `dmg_custom_menu_widget_title`.

For example, to change the title on a single page or post, you could add this to your functions.php file:


`function myTitleFilter( $title )
{
	if( is_singular() )
	{
		return "<strong>$title</strong>";
	}
	else
	{
		return $title;		
	}
}
add_filter( 'dmg_related_pages_widget_title' , 'myTitleFilter');`

More information about this plugin can be found at <http://dancoded.com/wordpress-plugins/custom-menu-widget/>.

== Installation ==
1. Upload the plugin files to the `/wp-content/plugins/dmg-custom-menu-widget` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' page in the WordPress admin area
1. Drag onto any active sidebar on the 'Appearance > Widgets' page

== Changelog ==
= 1.0 =
* Initial version