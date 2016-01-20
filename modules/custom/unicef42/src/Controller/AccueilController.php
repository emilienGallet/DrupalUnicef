<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\AccueilController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class AccueilController.
 *
 * @package Drupal\unicef42\Controller
 */
class AccueilController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return array(
            '#theme' => 'world',
            '#texte' => $this->t('Jeunes Ambasadeurs'),
        );
  }

}
