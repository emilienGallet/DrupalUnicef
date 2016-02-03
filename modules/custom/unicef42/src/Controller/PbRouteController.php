<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\PbRouteController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class PbRouteController.
 *
 * @package Drupal\unicef42\Controller
 */
class PbRouteController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    
    $service = \Drupal::service('unicef42.connection');
    $listeAnnee = $service->annee();
    //$result = $connection->query("SELECT * FROM node")->fetchAll();

    
    return array(
              '#theme' => 'pbroute',
              '#liste' => $listeAnnee,
          );
  }
  public function autre() {
    $service = \Drupal::service('unicef42.connection');
    $parametre = 'nom';
    $liste = $service->listetestActionSolidaire($parametre);
    print_r($liste);
    return array(
            '#theme' => 'pbrouteautre',
            '#liste' => $liste,
        );
  }

}
