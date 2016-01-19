<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\ActSolidaireController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ActSolidaireController.
 *
 * @package Drupal\unicef42\Controller
 */
class ActSolidaireController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Implement method: index with parameter(s): ok")
    ];
  }

}