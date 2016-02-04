<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\ClubJeunesController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ClubJeunesController.
 *
 * @package Drupal\unicef42\Controller
 */
class ClubJeunesController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    $service = \Drupal::service('unicef42.connection');
    $liste = $service->listeSecteur();
    return array(
            '#theme' => 'clubs-jeunes',
            '#liste' => $liste,
        );

  }

}
