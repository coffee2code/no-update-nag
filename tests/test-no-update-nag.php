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

}
