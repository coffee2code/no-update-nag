=== No Update Nag ===
Contributors: coffee2code
Donate link: http://coffee2code.com/donate
Tags: admin, updates, nag, notices, wordpress, upgrade, coffee2code
Requires at least: 2.5
Tested up to: 3.2
Stable tag: 1.2
Version: 1.2

Removes the WordPress update nag that appears at the top of all admin pages when a new version of WordPress is released


== Description ==

Removes the WordPress update nag that appears at the top of all admin pages when a new version of WordPress is released

Tired of WordPress nagging you about a new release?  Maybe you already know about it and want to hold off on an update and would rather not see the update nag on every admin page you visit.  Activate this plugin and be bothered no more!

Of course, the status of your version of WordPress (be it current or out-of-date) is still reflected in the footer of your admin pages.

And certainly of course I don't advocate completely ignoring the fact that updates often contain fixes for critical bugs or exploits.  However, there are various other means of learning about updates; and once known, not everyone is able or willing to update immediately.

One way to make use of the plugin is deactivate it once you upgrade WordPress.  Once you've been alerted to a new release of WordPress, activate the plugin to prevent the constant reminder.  Deactivate once you do update.  Otherwise, leave it activated.

Links: [Plugin Homepage](http://coffee2code.com/wp-plugins/no-update-nag) | [Author Homepage](http://coffee2code.com)


== Installation ==

1. Unzip `no-update-nag.zip` inside the `/wp-content/plugins/` directory (or install via the built-in WordPress plugin installer)
1. Activate the plugin through the 'Plugins' admin menu in WordPress


== Frequently Asked Questions ==

= What is this update nag you mention? =

In versions 2.5 and later of WordPress, your WordPress will alert you to the release of a newer version of WordPress via a yellow-background update notice at the top of every admin page.  WordPress 2.5 and later reports "WordPress X.X is available!  Please update now!" or "WordPress X.X is available!  Please notify the site administrator."

= Why would I want to remove the update nag about new releases of WordPress? =

Maybe you know about the newer WordPress release (either from the nag, news, etc) and don't want to be constantly reminded by your current WordPress install (not everyone can or wants to upgrade to the newest version immediately).  Also, you'd like to recover that much real estate on the page for something of more interest to you.

= How will I know WordPress has been updated if the nag doesn't appear? =

Within the context of your WordPress admin, the footer of your admin pages will reflect that status of your version of WordPress (be it current or out-of-date).  And if you are tracking WordPress progress at all (i.e. blogs, forums, your WordPress dashboard) then you likely don't need to be made aware of new releases anyhow since you'll likely already know about them. 


== Changelog ==

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

= 1.2 =
Minor release: noted compatibility through WP 3.2+ and changed how action is hooked

= 1.1.3 =
Trivial update: documentation tweaks

= 1.1.2 =
Trivial update: noted compatibility through WP 3.1+ and updated copyright date
