<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\FetesController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class FetesController.
 *
 * @package Drupal\unicef42\Controller
 */
class FetesController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return array(
            '#theme' => 'world',
            '#texte' => $this->t('Fêtes'),
        );
  }

}
