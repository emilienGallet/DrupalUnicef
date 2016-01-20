<?php

/**
 * @file
 * Contains \Drupal\unicef42\Tests\FestivalsController.
 */

namespace Drupal\unicef42\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the unicef42 module.
 */
class FestivalsControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "unicef42 FestivalsController's controller functionality",
      'description' => 'Test Unit for module unicef42 and controller FestivalsController.',
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
  public function testFestivalsController() {
    // Check that the basic functions of module unicef42.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
