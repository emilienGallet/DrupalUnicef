<?php

/**
 * @file
 * Contains \Drupal\u42p2\Controller\AnneesActionsSolidaires.
 */

namespace Drupal\u42p2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class AnneesActionsSolidaires.
 *
 * @package Drupal\u42p2\Controller
 */
class AnneesActionsSolidaires extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($actionSolidaire) {
    $service = \Drupal::service('unicef42.connection');
    $lactionSolidaire = $actionSolidaire;
    $liste = $service->listeAnneeActionsSolidaires($lactionSolidaire);
    return array(
              '#theme' => 'actions-solidaires-annee',
              '#liste' => $liste,
              '#actionSolidaire' => $actionSolidaire,
          );
  }

}
