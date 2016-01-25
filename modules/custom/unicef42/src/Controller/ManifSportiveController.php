<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\ManifSportiveController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ManifSportiveController.
 *
 * @package Drupal\unicef42\Controller
 */
class ManifSportiveController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return array(
            '#theme' => 'manif-sportive',
            '#texte' => $this->t('Manifestations sportive'),
        );
  }

}
