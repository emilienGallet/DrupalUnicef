<?php

/**
 * @file
 * Contains \Drupal\hello\Controller\HelloWorldConroller.
 */

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloWorldConroller.
 *
 * @package Drupal\hello\Controller
 */
class HelloWorldConroller extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($name) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("bonjour $name")
    ];
  }

}
