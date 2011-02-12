<?php
/*
Plugin Name: No Update Nag
Version: 1.1.2
Plugin URI: http://coffee2code.com/wp-plugins/no-update-nag
Author: Scott Reilly
Author URI: http://coffee2code.com
Description: Removes the WordPress update nag that appears at the top of all admin pages when a new version of WordPress is released

Tired of WordPress nagging you about a new release?  Maybe you already know about it and want to hold
off on an update and would rather not see the update nag on every admin page you visit.  Activate this
plugin and be bothered no more!

Of course, the status of your version of WordPress (be it current or out of date) is still reflected in
the footer of your admin pages.

And certainly of course I don't advocate completely ignoring the fact that updates often contain fixes
for critical bugs or exploits.  However, there are various other means of learning about updates; and
once known, not everyone is able or willing to update immediately.

Tips:

There are probably two primary ways in which I foresee this plugin being used.

1. Simply activate it and leave it active.  You can still check the footer of your WordPress admin pages
to see if your version is out-of-date (if you dont' already discover that fact via your WordPress
dashboard, blog, news sites, WP involvement, etc).

2. Leave the plugin deactivated.  Once you've learned about an update to WordPress, activate the plugin to
remove the nag until such time as you do the update, then deactivate the plugin once again.

Compatible with WordPress 2.5+, 2.6+, 2.7+, 2.8+, 2.9+, 3.0+, 3.1+.

=>> Read the accompanying readme.txt file for more information.  Also, visit the plugin's homepage
=>> for more information and the latest updates

Installation:

1. Download the file http://coffee2code.com/wp-plugins/no-update-nag.zip and unzip it into your
/wp-content/plugins/ directory (or install via the built-in WordPress plugin installer).
2. Activate the plugin through the 'Plugins' admin menu in WordPress

*/

/*
Copyright (c) 2008-2011 by Scott Reilly (aka coffee2code)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy,
modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR
IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

add_action( 'admin_init', create_function('', 'remove_action( \'admin_notices\', \'update_nag\', 3 );') );
?>