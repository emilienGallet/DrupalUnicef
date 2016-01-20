<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\FestivalsController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class FestivalsController.
 *
 * @package Drupal\unicef42\Controller
 */
class FestivalsController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return array(
            '#theme' => 'world',
            '#texte' => $this->t('Festivals'),
        );
  }

}
