<?php

/**
 * @file
 * Contains \Drupal\unicef42\Tests\ManifSportiveController.
 */

namespace Drupal\unicef42\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the unicef42 module.
 */
class ManifSportiveControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "unicef42 ManifSportiveController's controller functionality",
      'description' => 'Test Unit for module unicef42 and controller ManifSportiveController.',
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
  public function testManifSportiveController() {
    // Check that the basic functions of module unicef42.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
