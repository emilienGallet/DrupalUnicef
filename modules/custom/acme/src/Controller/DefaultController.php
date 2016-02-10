<?php

/**
 * @file
 * Contains \Drupal\acme\Controller\DefaultController.
 */

namespace Drupal\acme\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\acme\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($name) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Implement method: index with parameter(s): $name")
    ];
  }

}
