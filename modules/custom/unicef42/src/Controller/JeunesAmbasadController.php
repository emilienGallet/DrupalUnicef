<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\JeunesAmbasadController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class JeunesAmbasadController.
 *
 * @package Drupal\unicef42\Controller
 */
class JeunesAmbasadController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Implement method: index with parameter(s): JEunes Ambassadeurs")
    ];
  }

}
