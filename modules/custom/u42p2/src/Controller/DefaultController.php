<?php

/**
 * @file
 * Contains \Drupal\u42p2\Controller\DefaultController.
 */

namespace Drupal\u42p2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\u42p2\Controller
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
  public function other($name) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Bonjour $name")
    ];
  }

}
