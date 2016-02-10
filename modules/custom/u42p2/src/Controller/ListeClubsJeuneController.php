<?php

/**
 * @file
 * Contains \Drupal\u42p2\Controller\ListeClubsJeuneController.
 */

namespace Drupal\u42p2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ListeClubsJeuneController.
 *
 * @package Drupal\u42p2\Controller
 */
class ListeClubsJeuneController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($secteur) {
    $service = \Drupal::service('unicef42.connection');
    $lesecteur = $secteur;
    $liste = $service->listeClubsJeunes($lesecteur);
    return array(
              '#theme' => 'clubs-jeunes-secteur',
              '#liste' => $liste,
              '#secteur' => $secteur,
          );
  }

}
