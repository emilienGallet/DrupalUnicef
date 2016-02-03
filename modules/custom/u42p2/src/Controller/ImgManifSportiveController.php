<?php

/**
 * @file
 * Contains \Drupal\u42p2\Controller\ImgManifSportiveController.
 */

namespace Drupal\u42p2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ImgManifSportiveController.
 *
 * @package Drupal\u42p2\Controller
 */
class ImgManifSportiveController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($sport, $lamanif) {
    $service = \Drupal::service('unicef42.connection');
    $laManif = $lamanif;
    $liste = $service->listeImgManifSport($laManif);
    return array(
              '#theme' => 'manifsport-images',
              '#liste' => $liste,
              '#lamanif' => $lamanif,
          );
  }

}
