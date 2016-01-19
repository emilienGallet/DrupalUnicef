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
    $laBdd = $service->connection();
    //$result = $connection->query("SELECT * FROM node")->fetchAll();

    if ($laBdd == TRUE) {
      return [
        '#type' => 'markup',
        '#markup' => $this->t("Connecter")
        ];
    }
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Implement method: index with parameter(s):test ok?")
    ];
  }

}
