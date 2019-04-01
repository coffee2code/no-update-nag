<?php

defined( 'ABSPATH' ) or die();

class No_Update_Nag_Test extends WP_UnitTestCase {

	//
	//
	// DATA PROVIDERS
	//
	//


	//
	//
	// HELPER FUNCTIONS
	//
	//


	//
	//
	// TESTS
	//
	//


	public function test_function_exists() {
		$this->assertTrue( function_exists( 'c2c_no_update_nag' ) );
	}

	public function test_hooks_admin_init() {
		$this->assertEquals( 10, has_filter( 'admin_init', 'c2c_no_update_nag' ) );
	}

	public function test_unhooks_update_nag() {
		require_once( ABSPATH . '/wp-admin/includes/admin-filters.php' );
		require_once( ABSPATH . '/wp-admin/includes/ms-admin-filters.php' );

		// Verify that update nag is potentially shown.
		$this->assertEquals( 3, has_filter( 'admin_notices', 'update_nag' ) );
		$this->assertEquals( 3, has_filter( 'network_admin_notices', 'update_nag' ) );

		// Trigger plugin (as would be done via admin_init).
		c2c_no_update_nag();

		// Verify update nag will not be potentially shown.
		$this->assertFalse( has_filter( 'admin_notices', 'update_nag' ) );
		$this->assertFalse( has_filter( 'network_admin_notices', 'update_nag' ) );
	}

}
