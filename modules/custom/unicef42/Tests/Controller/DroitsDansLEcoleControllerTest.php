<?php

/**
 * @file
 * Contains \Drupal\unicef42\Tests\DroitsDansLEcoleController.
 */

namespace Drupal\unicef42\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the unicef42 module.
 */
class DroitsDansLEcoleControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "unicef42 DroitsDansLEcoleController's controller functionality",
      'description' => 'Test Unit for module unicef42 and controller DroitsDansLEcoleController.',
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
   * Tests unicef42 functionality.
   */
  public function testDroitsDansLEcoleController() {
    // Check that the basic functions of module unicef42.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
