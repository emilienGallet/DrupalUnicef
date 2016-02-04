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
    $service = \Drupal::service('unicef42.connection');
    $liste = $service->listeSecteur();
    return array(
            '#theme' => 'centres-sociaux',
            '#liste' => $liste,
        );
  }

}
