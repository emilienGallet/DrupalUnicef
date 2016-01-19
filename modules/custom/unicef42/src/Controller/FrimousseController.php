<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\FrimousseController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class FrimousseController.
 *
 * @package Drupal\unicef42\Controller
 */
class FrimousseController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Implement method: index with parameter(s): Frimousse")
    ];
  }

}
