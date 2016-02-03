<?php

/**
 * @file
 * Contains \Drupal\u42p2\Tests\ImgManifSportiveController.
 */

namespace Drupal\u42p2\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the u42p2 module.
 */
class ImgManifSportiveControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "u42p2 ImgManifSportiveController's controller functionality",
      'description' => 'Test Unit for module u42p2 and controller ImgManifSportiveController.',
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
   * Tests u42p2 functionality.
   */
  public function testImgManifSportiveController() {
    // Check that the basic functions of module u42p2.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
