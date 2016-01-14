<?php

/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloController.
 *
 * @package Drupal\hello_world\Controller
 */
class HelloController extends ControllerBase {
  /**
   * World.
   *
   * @return string
   *   Return Hello string.
   */
  public function world() {
    return [
        '#theme' => 'world',
        '#markup' => $this->t('Hello world ! ')
    ];
  }

}
