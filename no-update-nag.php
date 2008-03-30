<?php
/*
Plugin Name: No Update Nag
Version: 1.0
Plugin URI: http://coffee2code.com/wp-plugins/no-update-nag
Author: Scott Reilly
Author URI: http://coffee2code.com
Description: Removes the WordPress update nag that appears at the top of all admin pages when a new version of WordPress is released

The status of your version of WordPress (be it current or out of date) is still reflected in the footer of your admin pages.

Compatible with WordPress 2.3+, and 2.5+.

=>> Read the accompanying readme.txt file for more information.  Also, visit the plugin's homepage
=>> for more information and the latest updates

Installation:

1. Download the file http://coffee2code.com/wp-plugins/no-update-nag.zip and unzip it into your 
/wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' admin menu in WordPress

*/

/*
Copyright (c) 2008 by Scott Reilly (aka coffee2code)

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

function no_update_nag() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_head', 'no_update_nag'); // When 2.3 support is dropped, use 'admin_init' action instead
?>