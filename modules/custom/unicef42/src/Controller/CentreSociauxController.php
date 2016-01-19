<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\CentreSociauxController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class CentreSociauxController.
 *
 * @package Drupal\unicef42\Controller
 */
class CentreSociauxController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return array(
            '#theme' => 'world',
            '#texte' => $this->t('CentreSociaux'),
        );
  }

}
