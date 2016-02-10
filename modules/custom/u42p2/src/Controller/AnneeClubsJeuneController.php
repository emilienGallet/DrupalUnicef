<?php

/**
 * @file
 * Contains \Drupal\u42p2\Controller\AnneeClubsJeuneController.
 */

namespace Drupal\u42p2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class AnneeClubsJeuneController.
 *
 * @package Drupal\u42p2\Controller
 */
class AnneeClubsJeuneController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($secteur, $nom) {
    $service = \Drupal::service('unicef42.connection');
    $lenom = $nom;
    $liste = $service->listeAnneeClubsJeunes($nom);
    return array(
              '#theme' => 'clubs-jeunes-annee',
              '#liste' => $liste,
              '#nom' => $nom
          );
  }

}
