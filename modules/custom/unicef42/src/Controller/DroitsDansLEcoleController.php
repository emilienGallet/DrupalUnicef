<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\DroitsDansLEcoleController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DroitsDansLEcoleController.
 *
 * @package Drupal\unicef42\Controller
 */
class DroitsDansLEcoleController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return array(
            '#theme' => 'world',
            '#texte' => $this->t('Droits dans l`école'),
        );
  }

}
