<?php

/**
 * @file
 * Contains \Drupal\u42p2\Controller\AnneeCentresSociauxController.
 */

namespace Drupal\u42p2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class AnneeCentresSociauxController.
 *
 * @package Drupal\u42p2\Controller
 */
class AnneeCentresSociauxController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($secteur, $nom) {
    $service = \Drupal::service('unicef42.connection');
    $lenom = $nom;
    $liste = $service->listeAnneeCentresSociaux($lenom);
    return array(
              '#theme' => 'centres-sociaux-annee',
              '#liste' => $liste,
              '#nom' => $nom,
          );
  }

}
