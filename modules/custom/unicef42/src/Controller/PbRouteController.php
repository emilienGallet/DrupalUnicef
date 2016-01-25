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
    //$laBdd = $service->__construct('localhost','moduleunicef','root','root');

    //$laBdd = new Bdd("localhost","moduleunicef","root","root");
    $laRequette = $service->annee();
    //$result = $connection->query("SELECT * FROM node")->fetchAll();
    $donnees = $laRequette->fetch();
    foreach ($donnees as $key => $values) {
      return array(
              '#theme' => 'pbroute',
              '#donnees' => $donnees,
              '#key' => $key,
              '#values' => $values,
          );
    }
  }
  public function autre() {
    return array(
            '#theme' => 'world',
            '#values' => $this->t('Temps periscolaire'),
        );
  }

}
