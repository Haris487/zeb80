=== Orbisius Quick Nav ===
Contributors: lordspace,orbisius
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7APYDVPBCSY9A
Tags: wp,orbisius, plugin, sidebar,widget,widgets,WooCommerce,ecommerce,widgets,quick nav,quicknav,quick-nav,quick page nav,quick post nav
Requires at least: 3.0.0
Tested up to: 4.5
Stable tag: 1.0.6
License: GPLv2 or later

This plugin allows you to quickly switch between pages, posts, or any other custom post types.

== Description ==
This plugin adds a select box to the post editor that allows you to quickly switch to another post of the same type without leaving the edit posts screen.
It works with post, page and custom post types and is aware of what type of post you're currently editing.
For example if you're editing a page it will list pages, if you're editing a WooCommerce product it will list all of the other WooCommerce products.

The dropdown menu will show up above the title of the edited content (WP > 3.7+).
For WordPress between 3.5-3.7 the dropdown will after the permalink and
for WordPress older than 3.5 the dropdown will appear after the editor.

= Features / Benefits =
* Allows you to quickly switch between pages, posts, products etc.
* Easy to use

= Usage =
Install the plugin.
That's it

= Demo =

How to Switch between WooCommerce Products
http://www.youtube.com/watch?v=49a2M15AAcc

= Author =
Svetoslav Marinov (Slavi) | <a href="http://orbisius.com" title="Custom Web Programming, Web Design, e-commerce, e-store, Wordpress Plugin Development, Facebook and Mobile App Development in Niagara Falls, St. Catharines, Ontario, Canada" target="_blank">Custom Web and Mobile Programming by Orbisius.com</a>

= Support =
> Support is handled on our site: <a href="http://club.orbisius.com/" target="_blank" title="[new window]">http://club.orbisius.com/</a>
> Please do NOT use the WordPress forums or other places to seek support.

Slavi is a [WordPress Consultant](http://orbisius.com/?utm_source=orbisius-quick-nav&utm_medium=plugin-readme&utm_campaign=product) available for hire.

== Upgrade Notice ==
n/a

== Screenshots ==
1. Plugin's Settings Page
2. The dropdown generated on edit page screen

== Installation ==

1. Unzip the package, and upload `orbisius-quick-nav` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How to use this plugin? =
Just install the plugin and activate it.

== Changelog ==

= 1.0.6 =
* Added try and catch when using chosen just in case of CDN is down or user's PC is not connected to the internet
* Fixed the noticed shown on $wpdb->escape

= 1.0.5 =
* Put a link to the review page.

= 1.0.4 =
* Fixed the dropdown was showing up in the plugins as well. Not cool.
* Fixed some warnings that were shown on post types different than page, post.
* Does not render the dropdown if there are no post types of the currently viewed type.
* Showing item id in the dropdown which can be used in the filtering process.
* Listing up to 2500 items

= 1.0.3 =
* Added the quick nav to show up in the manage pages/posts
* Tested with WP 4.5

= 1.0.2 =
* Added Chosen JS library ( loading from CDN thanks to http://cdnjs.com/libraries/chosen ) to manage long pages list. Suggested by Paal Joachim Romdahl.
* Outputting the code only on when required and not on all admin pages.
* Tested with WP 4.x

= 1.0.1 =
* Loading custom post types differently using an SQL as the other methods may cause crash

= 1.0.0 =
* Initial release
