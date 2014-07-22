<?php
/**
 * Tests for MslsBlogCollection
 *
 * @author Dennis Ploetner <re@lloc.de>
 * @package Msls
 */

/**
 * WP_Test_MslsBlogCollection
 */
class WP_Test_MslsBlogCollection extends WP_UnitTestCase {

	/**
	 * SetUp initial settings
	 */
	function setUp() {
		parent::setUp();
		wp_cache_flush();
	}

	/**
	 * Break down for next test
	 */
	function tearDown() {
		parent::tearDown();
	}

	/**
	 * Verify the instance-method
	 */
	function test_instance_method() {
		$obj =  MslsBlogCollection::instance();
		$this->assertInstanceOf( 'MslsBlogCollection', $obj );
		return $obj;
	}

	/**
	 * Verify the get_configured_blog_description-method
	 * @depends test_instance_method
	 */
	function test_get_description_method( $obj ) {
		$this->assertEquals( 'Test', $obj->get_configured_blog_description( 0, 'Test' ) );
		$this->assertEquals( false, $obj->get_configured_blog_description( 0, false ) );
	}

	/**
	 * Verify the test_get_blogs_of_reference_user-method
	 * @depends test_instance_method
	 */
	function test_get_blogs_of_reference_user( $obj ) {
		$options = $this->getMock( 'MslsOptions' );
		$this->assertInternalType( 'array', $obj->get_blogs_of_reference_user( $options ) );
	}

	/**
	 * Verify the get_current_blog_id-method
	 * @depends test_instance_method
	 */
	function test_get_current_blog_id( $obj ) {
		$this->assertInternalType( 'integer', $obj->get_current_blog_id() );
	}

	/**
	 * Verify the has_current_blog-method
	 * @depends test_instance_method
	 */
	function test_has_current_blog( $obj ) {
		$this->assertInternalType( 'boolean', $obj->has_current_blog() );
	}

	/**
	 * Verify the get_current_blog-method
	 * @depends test_instance_method
	 */
	function test_get_current_blog( $obj ) {
		// return MslsBlog|null
	}

	/**
	 * Verify the get_objects-method
	 * @depends test_instance_method
	 */
	function test_get_objects( $obj ) {
		$this->assertInternalType( 'array', $obj->get_objects() );
	}

	/**
	 * Verify the is_plugin_active-method
	 * @depends test_instance_method
	 */
	function test_is_plugin_active( $obj ) {
		$this->assertInternalType( 'boolean', $obj->is_plugin_active( 0 ) );
	}

	/**
	 * Verify the get_plugin_active_blogs-method
	 * @depends test_instance_method
	 */
	function test_get_plugin_active_blogs( $obj ) {
		$this->assertInternalType( 'array', $obj->get_plugin_active_blogs() );
	}

	/**
	 * Verify the get-method
	 * @depends test_instance_method
	 */
	function test_get( $obj ) {
		$this->assertInternalType( 'array', $obj->get() );
	}

	/**
	 * Verify the get_filtered-method
	 * @depends test_instance_method
	 */
	function test_get_filtered( $obj ) {
		$this->assertInternalType( 'array', $obj->get_filtered() );
	}

	/**
	 * Verify the get_users-method
	 * @depends test_instance_method
	 */
	function test_get_users( $obj ) {
		$this->assertInternalType( 'array', $obj->get_users() );
	}

}
