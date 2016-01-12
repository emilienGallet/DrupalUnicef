<?php

/**
 * @file
 * Contains \Drupal\hello\Tests\HelloWorldConroller.
 */

namespace Drupal\hello\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the hello module.
 */
class HelloWorldConrollerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "hello HelloWorldConroller's controller functionality",
      'description' => 'Test Unit for module hello and controller HelloWorldConroller.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests hello functionality.
   */
  public function testHelloWorldConroller() {
    // Check that the basic functions of module hello.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
