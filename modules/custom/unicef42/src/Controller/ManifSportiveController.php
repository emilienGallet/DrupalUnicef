<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\ManifSportiveController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ManifSportiveController.
 *
 * @package Drupal\unicef42\Controller
 */
class ManifSportiveController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    $service = \Drupal::service('unicef42.connection');
    $listeSport = $service->listeSport();

    //$result = $connection->query("SELECT * FROM node")->fetchAll();

    print_r($listeSport);
    return array(
              '#theme' => 'manifsportive',
              '#sports' => $listeSport,
          );  
  }

}
