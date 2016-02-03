<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\EcolesController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class EcolesController.
 *
 * @package Drupal\unicef42\Controller
 */
class EcolesController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return array(
            '#theme' => 'ecoles',
        );
  }

}
