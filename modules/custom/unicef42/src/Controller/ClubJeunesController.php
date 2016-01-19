<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\ClubJeunesController.
 */

namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ClubJeunesController.
 *
 * @package Drupal\unicef42\Controller
 */
class ClubJeunesController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Implement method: index with parameter(s): Club Jeune")
    ];
  }

}