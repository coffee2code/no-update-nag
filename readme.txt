=== No Update Nag ===
Contributors: coffee2code
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6ARCFJ9TX3522
Tags: admin, updates, nag, notices, upgrade, coffee2code
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Requires at least: 2.5
Tested up to: 4.1
Stable tag: 1.4.1

Removes the WordPress update nag that appears at the top of all admin pages when a new version of WordPress is released


== Description ==

This plugin removes the WordPress update nag that appears at the top of all admin pages when a new version of WordPress is released

Tired of WordPress nagging you about a new release?  Maybe you already know about it and want to hold off on an update and would rather not see the update nag on every admin page you visit. Activate this plugin and be bothered no more!

Of course, the status of your version of WordPress (be it current or out-of-date) is still reflected in the footer of your admin pages and in the update count link in the admin bar.

And certainly, of course, I don't advocate completely ignoring the fact that updates often contain fixes for critical bugs or exploits. However, there are various other means of learning about updates; and once known, not everyone is able or willing to update immediately.

Links: [Plugin Homepage](http://coffee2code.com/wp-plugins/no-update-nag) | [Plugin Directory Page](https://wordpress.org/plugins/no-update-nag/) | [Author Homepage](http://coffee2code.com)


== Installation ==

1. Unzip `no-update-nag.zip` inside the `/wp-content/plugins/` directory (or install via the built-in WordPress plugin installer)
1. Activate the plugin through the 'Plugins' admin menu in WordPress


== Screenshots ==

1. A screenshot of an admin page showing the update nag for a new version of WordPress.


== Frequently Asked Questions ==

= What is this update nag? =

In versions 2.5 and later of WordPress, your WordPress will alert you to the release of a newer version of WordPress via an update notice at the top of every admin page. WordPress 2.5 and later reports "WordPress X.X is available!  Please update now!" or "WordPress X.X is available!  Please notify the site administrator." See the screenshot for an example.

= Why would I want to remove the update nag about new releases of WordPress? =

Maybe you know about the newer WordPress release (either from the nag, news, etc) and don't want to be constantly reminded by your current WordPress install (not everyone can or wants to upgrade to the newest version immediately). Also, you'd like to recover that much real estate on the page for something of more interest to you.

= How will I know WordPress has been updated if the nag doesn't appear? =

Within the context of your WordPress admin, the footer of your admin pages will reflect that status of your version of WordPress (be it current or out-of-date). And if you are tracking WordPress progress at all (i.e. blogs, forums, your WordPress dashboard) then you likely don't need to be made aware of new releases anyhow since you'll likely already know about them.

= So I should ignore the update nag and continue using my older version of WordPress? =

Most certainly not. The latest version of WordPress will contain the latest security and bug fixes, as well as new features. Backwards compatibility is of paramount importance to the project so in most cases you should be safe to upgrade (especially for minor releases). However, some people in special circumstances manage their sites in different ways for different reasons, which may preclude delaying an update to the latest version.


== Changelog ==

= 1.4.1 (2015-02-25) =
* Reformat plugin header
* Change documentation links to wp.org to be https
* Note compatibility through WP 4.1+
* Update copyright date (2015)
* Add plugin icon

= 1.4 (2014-01-30) =
* Remove nag from network_admin_notices
* Minor documentation improvements
* Note compatibility through WP 3.8+
* Update copyright date (2014)
* Change donate link
* Add assets directory to plugin repository checkout
* Add screenshot
* Add banner

= 1.3 =
* Add check to prevent execution of code if file is directly accessed
* Re-license as GPLv2 or later (from X11)
* Add 'License' and 'License URI' header tags to readme.txt and plugin file
* Remove ending PHP close tag
* Minor code reformatting (spacing)
* Note compatibility through WP 3.5+
* Update copyright date (2013)

= 1.2.1 =
* Note compatibility through WP 3.3+
* Add link to plugin directory page to readme.txt
* Update copyright date (2012)

= 1.2 =
* Add function c2c_no_update_nag()
* Hook c2c_no_update_nag() into 'admin_init' action rather than use create_function() (as was done prior to v1.1)
* Note compatibility through WP 3.2+
* Minor code formatting changes (spacing)
* Fix plugin homepage and author links in description in readme.txt

= 1.1.3 =
* Remove header documentation from plugin file (all that info and more are in the readme.txt)
* Add package info to top of plugin file
* Add link to plugin homepage to description in readme.txt

= 1.1.2 =
* Note compatibility through WP 3.1+
* Add Upgrade Notice section to readme.txt
* Update copyright date (2011)

= 1.1.1 =
* Update readme.txt, including adding Changelog section
* Note compatibility through WP 2.9+, 3.0+
* Update copyright date

= 1.1 =
* Remove the sole function no_update_nag() and embed its functionality directly in add_action() call via create_function()
* Hook 'admin_init' instead of 'admin_head', which causes a drop in support for WP2.3
* Note compatibility with WP 2.8+
* Tweak readme.txt

= 1.0.1 =
* Note compatibility with WP 2.6+ and 2.7+
* Update copyright date
* Minor tweaks to readme.txt;

= 1.0 =
* Initial release


== Upgrade Notice ==

= 1.4.1 =
Trivial update: noted compatibility through WP 4.1+ and updated copyright date (2015)

= 1.4 =
Minor update: removed nag from network admin as well; noted compatibility through WP 3.8+

= 1.3 =
Trivial update: noted compatibility through WP 3.5+; explicitly stated license

= 1.2.1 =
Trivial update: noted compatibility through WP 3.3+

= 1.2 =
Minor release: noted compatibility through WP 3.2+ and changed how action is hooked

= 1.1.3 =
Trivial update: documentation tweaks

= 1.1.2 =
Trivial update: noted compatibility through WP 3.1+ and updated copyright date
