<?php

/**
 * @file
 * Contains \Drupal\u42p2\Controller\ImgActionsSolidairesController.
 */

namespace Drupal\u42p2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ImgActionsSolidairesController.
 *
 * @package Drupal\u42p2\Controller
 */
class ImgActionsSolidairesController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($actionSolidaire,$annee) {
    $service = \Drupal::service('unicef42.connection');
    $lactionSolidaire = $actionSolidaire;
    $liste = $service->listeImagesActionsSolidaires($lactionSolidaire, $annee);
    return array(
              '#theme' => 'actions-solidaires-images',
              '#liste' => $liste,
              '#lamanif' => $actionSolidaire,
          );
  }

}
