<?php

/**
 * @file
 * Contains \Drupal\u42p2\Controller\ListeCentresSociauxController.
 */

namespace Drupal\u42p2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ListeCentresSociauxController.
 *
 * @package Drupal\u42p2\Controller
 */
class ListeCentresSociauxController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($secteur) {
    $service = \Drupal::service('unicef42.connection');
    $lesecteur = $secteur;
    $liste = $service->listeCentresSociaux($lesecteur);
    return array(
              '#theme' => 'centres-sociaux-secteur',
              '#liste' => $liste,
              '#secteur' => $secteur,
          );
  }

}
