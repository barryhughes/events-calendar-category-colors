=== The Events Calendar Category Colors ===
Contributors: afragen, WebsiteBakery
Tags: events, color, modern tribe, tribe
Requires at least: 3.1
Tested up to: 3.5.1
Stable tag: 1.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add background colors to month event view of The Events Calendar events.

== Description ==

Add background colors to event categories displayed in the month event view of The Events Calendar. This is inspired by [Coloring Your Category Events](http://tri.be/coloring-your-category-events).

Settings for The Events Calendar Category Colors plugin are located in their own tab on The Events Calendar Settings page.

== Installation ==

1. Upload the entire `/the-events-calendar-category-colors/` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin.
1. Go to the Category Colors tab of The Event Calendar Settings page.

== Frequently Asked Questions ==

= Does the plugin require The Events Calendar plugin? =

Yes. [The Events Calendar plugin](http://wordpress.org/extend/plugins/the-events-calendar/) is written by Modern Tribe, Inc. It requires at least The Events Calendar v3.0.

= What are Legend Superpowers? =

Legend Superpowers are an optional visual effect allowing visitors to focus only on those events that belong to categories of interest - without reloading the page and without eliminating other categories from view completely.

It needs to be enabled in the Category Colors settings page. The Category Legend must also be enabled and in use for it to function.

Click on the category of interest in the Legend to see the effect; click again to remove it.

= What if I use a version of The Events Calendar 2.x? =

The last compatible version of this plugin that works with TEC 2.x is [The Events Calendar Category Colors v1.6.3](http://downloads.wordpress.org/plugin/the-events-calendar-category-colors.1.6.3.zip).

= Filters and Hooks =

If you want to make additions to the default legend CSS you can use the action hook _'teccc_add_legend_css'_. Call it from your theme's functions.php in the following syntax.

`
add_action( 'teccc_add_legend_css', 'my_extra_legend_css' );
function my_extra_legend_css () {
	echo '/* my extra CSS goes here */';
}
`

= Where can I report bugs? =

Add a new topic on the [WordPress Support Forum](http://wordpress.org/tags/the-events-calendar-category-colors).

== Screenshots ==

1. The Events Calendar Category Colors Settings tab
2. The Events Calendar Category Colors in action
3. The Events Calendar Category Colors with Legend Superpowers in action

== Changelog ==

= 1.7 =
* updated for new TEC 3.0 code, will not work for TEC < 3.0
* new instant preview of Settings
* coloring in Month, List, Day and Photo views
* coloring of tooltips in Week view
* added action 'teccc_add_legend_css' to accommodate minor user changes to default legend css.

= 1.6.3 =
* add transition to Transparent/Color Picker option
* use wp_enqueue_script for legend-superpowers.js
* move most externally called javascript to load in footer
* fix for language translation in Legend _category_ link
* removed extraneous `name` attribute from legend.php

= 1.6.2 =
* changed to slideUp/slideDown transition when Add Category Legend checked/unchecked
* reorganized plugin specific javascript and CSS to load correctly via admin_enqueue_scripts, even to footer.
* removed extra closing td tag in admin section

= 1.6.1 =
* removed function remove_tribe_cat_once from merge
* respaced rendered CSS so it looks better in 'view source'
* added #legend_box.tribe-events-calendar to properly set category name text color
* included function for checking TEC plugin active, missing from merge - OOPS
* fixed PHP error in classes/categorycolors.php - TribeEvents not defined
* merge issue#3
* fix for CSS superpowers and Ajax
* updated for miniColors 2.0

= 1.6.0B =
* still experimental!
* refactoring work: changes under the hood for the benefit of mankind
* the category legend can now have super-powers added to it
* from Barry Hughes

= 1.5.6 =
* removed function remove_tribe_cat_once and put it into a gist to use as needed. Please refer to FAQ for details.

= 1.5.5 =
* added preference to remove coloring if calendar is styled like first event of the month.

= 1.5.4 =
* making remove_tribe_cat_once even more specific

= 1.5.3 =
* made fix to remove_tribe_cat_once a little safer

= 1.5.2 =
* fix to make function remove_tribe_cat_once selective only for default template (::fingers crossed::)

= 1.5.1 =
* code cleanup and switch to current version of jQuery-miniColors.
* added function to remove first instance of category class tag added to article tag - Thanks Barry!
* tested with WP 3.5

= 1.5 =
* abstracted main script using new TribeEventsCategoryColors class
* fail message to admin_notices

= 1.4.5 =
* load only with class TribeEvents
* Continuity with fail message

= 1.4.4 =
* simplify legend CSS some more
* Don't deactivate plugin if TEC deactivated, just show error.

= 1.4.3 =
* Removed text-transform:uppercase from legend, I don't want to make too many decisions. Easier to add than to remove.

= 1.4.1 =
* Abstracted legend code a bit

= 1.4 =
* jQuery color picker now default behaviour
* Added checkbox for _transparent_ value

= 1.3.6 =
* more legend CSS tweaks
* more code cleanup

= 1.3.5 =
* convert space to nbsp in legend
* legend CSS tweaks
* more code cleanup

= 1.3.4 =
* settings display changes
* change to tribe_settings_form_element_tab_{currentTab}, after all I did ask to have it put in. ;-)

= 1.3.3 =
* Prep for using jQuery color picker
* minor CSS tweaks
* major code cleanup

= 1.3.2 =
* Added brief instructions for legend to settings page.

= 1.3.1 =
* fix for legend links

= 1.3 =
* Added links to legend

= 1.2.6 =
* fixes for readme

= 1.2.5 =
* Added Category Color legend

= 1.2.4 =
* Fixed another tooltip bug

= 1.2.3 =
* Fixed tooltip bug

= 1.2.2 =
* Added option for colored left border, default is transparent.

= 1.2.1 =
* bump

= 1.2 =
* fix typos

= 1.1 =
* Cleaner check for TEC

= 1.0 =
* Added checks for TEC active
* Fixed Save settings notification
* Added option to bold/unbold text.

= 0.9 =
* Adjusted add_CSS function to query both post_type and eventDisplay.
* Converted text color options to an global array for greater ability to add more choices.

= 0.8 =
* CSS now only added to month view calendar page.
* Added option for gray text.

= 0.7 =
* Bugs fixed. Back to Category Colors settings tab.

= 0.6.1 =
* Reverted back to it's own settings page till I get a bug worked out.
* Added option for 'Default' text color

= 0.5 =
* Added Category Colors settings tab to The Events Calendar Settings page using TribeSettings API
* code cleanup

= 0.2 =
* Bug fixes
* default background color now transparent
* updated sanitizing

= 0.1 =
* Initial release.

== Attribution ==

This plugin uses <a href="https://github.com/claviska/jquery-miniColors">jQuery MiniColors</a> by Cory LaViska.

Some icons by <a href="http://p.yusukekamiyamane.com/">Yusuke Kamiyamane</a>. All rights reserved.

Thanks to jonahcoyote for some early help and direction.

Big thanks to Barry Hughes (WebsiteBakery) for refactoring code and Legend Superpowers.

== Upgrade Notice ==

= 0.5 =
This version integrates more tightly with The Events Calendar plugin putting settings on the same page.
