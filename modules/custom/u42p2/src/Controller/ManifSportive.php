<?php

/**
 * @file
 * Contains \Drupal\u42p2\Controller\ManifSportive.
 */

namespace Drupal\u42p2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ManifSportive.
 *
 * @package Drupal\u42p2\Controller
 */
class ManifSportive extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($sport) {
    $service = \Drupal::service('unicef42.connection');
    $lesport = $sport;
    $liste = $service->listeManifSport($lesport);
    return array(
              '#theme' => 'manifsport-sport',
              '#liste' => $liste,
              '#sport' => $sport,
          );

  }

}
