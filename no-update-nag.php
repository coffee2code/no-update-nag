<?php
/**
 * @package No_Update_Nag
 * @author Scott Reilly
 * @version 1.2
 */
/*
Plugin Name: No Update Nag
Version: 1.2
Plugin URI: http://coffee2code.com/wp-plugins/no-update-nag/
Author: Scott Reilly
Author URI: http://coffee2code.com
Description: Removes the WordPress update nag that appears at the top of all admin pages when a new version of WordPress is released

Compatible with WordPress 2.5+, 2.6+, 2.7+, 2.8+, 2.9+, 3.0+, 3.1+, 3.2+.

=>> Read the accompanying readme.txt file for instructions and documentation.
=>> Also, visit the plugin's homepage for additional information and updates.
=>> Or visit: http://coffee2code.com/wp-plugins/no-update-nag/

TODO:
	* Add filter to define capabilities for who can see update nag (or perhaps who can't see it)

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

if ( ! function_exists( 'c2c_no_update_nag' ) ) :
/**
 * Disable the WordPress update nag
 *
 * @since 1.2
 */
function c2c_no_update_nag() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}
endif;

add_action( 'admin_init', 'c2c_no_update_nag' );

?>