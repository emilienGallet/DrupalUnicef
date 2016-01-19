<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\TempsPeriController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class TempsPeriController.
 *
 * @package Drupal\unicef42\Controller
 */
class TempsPeriController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return array(
            '#theme' => 'world',
            '#texte' => $this->t('Temps periscolaire'),
        );
  }

}
