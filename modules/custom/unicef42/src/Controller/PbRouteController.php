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
    $laRequette = $service->annee();
    //$result = $connection->query("SELECT * FROM node")->fetchAll();
    $donnees = $laRequette->fetch();
    
    return array(
              '#theme' => 'pbroute',
              '#values' => $donnees['Annee'],
          );
  }
  public function autre() {
    return array(
            '#theme' => 'world',
            '#values' => $this->t('Temps periscolaire'),
        );
  }

}
