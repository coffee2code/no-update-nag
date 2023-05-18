=== No Update Nag ===
Contributors: coffee2code
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6ARCFJ9TX3522
Tags: admin, updates, nag, notices, upgrade, coffee2code
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Requires at least: 2.5
Tested up to: 6.3
Stable tag: 1.4.11

Removes the WordPress update nag that appears at the top of all admin pages when a new version of WordPress is released.


== Description ==

This plugin removes the WordPress update nag that appears at the top of all admin pages when a new version of WordPress is released.

Tired of WordPress nagging you about a new release? Maybe you already know about it and want to hold off on an update and would rather not see the update nag on every admin page you visit. Activate this plugin and be bothered no more!

The status of your version of WordPress (be it current or out-of-date) is still reflected in the footer of your admin pages and in the update count link in the admin bar.

And certainly, of course, I don't advocate completely ignoring the fact that updates often contain fixes for critical bugs or exploits. However, there are various other means of learning about updates; and once known, not everyone is able or willing to update immediately.

Links: [Plugin Homepage](https://coffee2code.com/wp-plugins/no-update-nag) | [Plugin Directory Page](https://wordpress.org/plugins/no-update-nag/) | [GitHub](https://github.com/coffee2code/no-update-nag/) | [Author Homepage](https://coffee2code.com)


== Installation ==

1. Install via the built-in WordPress plugin installer. Or install the plugin code inside the plugins directory for your site (typically `/wp-content/plugins/`).
2. Activate the plugin through the 'Plugins' admin menu in WordPress


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

Most certainly not. The latest version of WordPress will contain the latest security and bug fixes, as well as new features. Backwards compatibility is of paramount importance to the project so in most cases you should be safe to upgrade (especially for minor releases). However, some people in special circumstances manage their sites in different ways for different reasons, which may include temporarily delaying an update to the latest version.

= Does this plugin include unit tests? =

Yes.


== Changelog ==

= 1.4.11 (2021-10-03) =
* Change: Note compatibility through WP 5.8+
* Change: Improve installation instruction in readme.txt
* Change: Minor text tweaks in readme.txt
* Unit tests:
    * Change: Restructure unit test directories
        * Change: Move `phpunit/` into `tests/phpunit/`
        * Change: Move `phpunit/bin/` into `tests/`
    * Change: Remove 'test-' prefix from unit test file
    * Change: In bootstrap, store path to plugin file constant
    * Change: In bootstrap, add backcompat for PHPUnit pre-v6.0

= 1.4.10 (2021-04-19) =
* Change: Note compatibility through WP 5.7+
* Change: Update copyright date (2021)

= 1.4.9 (2020-08-28) =
* Change: Restructure unit test file structure
    * New: Create new subdirectory `phpunit/` to house all files related to unit testing
    * Change: Move `bin/` to `phpunit/bin/`
    * Change: Move `tests/bootstrap.php` to `phpunit/`
    * Change: Move `tests/` to `phpunit/tests/`
    * Change: Rename `phpunit.xml` to `phpunit.xml.dist` per best practices
* Change: Note compatibility through WP 5.5+
* Change: Add an FAQ item

_Full changelog is available in [CHANGELOG.md](https://github.com/coffee2code/no-update-nag/blob/master/CHANGELOG.md)._


== Upgrade Notice ==

= 1.4.11 =
Trivial update: noted compatibility through WP 5.8+ and minor reorganization and tweaks to unit tests

= 1.4.10 =
Trivial update: noted compatibility through WP 5.7+ and updated copyright date (2021)

= 1.4.9 =
Trivial update: Restructured unit test file structure and noted compatibility through WP 5.5+.

= 1.4.8 =
Trivial update: Added TODO.md file, updated a few URLs to be HTTPS, and noted compatibility through WP 5.4+

= 1.4.7 =
Trivial update: modernized unit tests, noted compatibility through WP 5.3+, and updated copyright date (2020)

= 1.4.6 =
Trivial update: added unit tests, created CHANGELOG.md to store historical changelog outside of readme.txt, noted compatibility through WP 5.1+, and updated copyright date (2019)

= 1.4.5 =
Trivial update: added README.md, noted compatibility through WP 4.9+, and updated copyright date (2018)

= 1.4.4 =
Trivial update: verified compatibility through WP 4.7; updated copyright date (2017).

= 1.4.3 =
Trivial update: verified compatibility through WP 4.4; updated copyright date (2016).

= 1.4.2 =
Trivial update: noted compatibility through WP 4.3+

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
