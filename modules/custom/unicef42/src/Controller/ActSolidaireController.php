<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\ActSolidaireController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ActSolidaireController.
 *
 * @package Drupal\unicef42\Controller
 */
class ActSolidaireController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    $service = \Drupal::service('unicef42.connection');
    $liste = $service->listeActionSolidaire();
    return array(
            '#theme' => 'actions-solidaires',
            '#liste' => $liste,
        );
  }

}
