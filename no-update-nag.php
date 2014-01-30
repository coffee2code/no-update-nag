<?php
/**
 * @package No_Update_Nag
 * @author Scott Reilly
 * @version 1.4
 */
/*
Plugin Name: No Update Nag
Version: 1.4
Plugin URI: http://coffee2code.com/wp-plugins/no-update-nag/
Author: Scott Reilly
Author URI: http://coffee2code.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Description: Removes the WordPress update nag that appears at the top of all admin pages when a new version of WordPress is released

Compatible with WordPress 2.5+ through 3.8+.

=>> Read the accompanying readme.txt file for instructions and documentation.
=>> Also, visit the plugin's homepage for additional information and updates.
=>> Or visit: http://wordpress.org/plugins/no-update-nag/

TODO:
	* Add filter to define capabilities for who can see update nag (or perhaps who can't see it)
	* Ability to suppress notice in footer
*/

/*
	Copyright (c) 2008-2014 by Scott Reilly (aka coffee2code)

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

defined( 'ABSPATH' ) or die();

if ( ! function_exists( 'c2c_no_update_nag' ) ) :

	/**
	 * Disable the WordPress update nag
	 *
	 * @since 1.2
	 */
	function c2c_no_update_nag() {
		remove_action( 'admin_notices', 'update_nag', 3 );
		remove_action( 'network_admin_notices', 'update_nag', 3 );
	}

endif;

add_action( 'admin_init', 'c2c_no_update_nag' );
