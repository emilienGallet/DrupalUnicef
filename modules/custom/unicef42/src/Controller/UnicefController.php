<?php

/**
 * @file
 * Contains \Drupal\unicef42\Controller\UnicefController.
 */

/* 
 * return $this->redirectToRoute('unicef42.temps_peri_controller_index');
 * UrlGeneratorTrait::redirect (https://api.drupal.org/api/drupal/core!lib!Drupal!Core!Controller!ControllerBase.php/class/ControllerBase/8)
 */
namespace Drupal\unicef42\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class UnicefController.
 *
 * @package Drupal\unicef42\Controller
 */
class UnicefController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function world() {
    /*
     * A en faire un lien ^^
     */

    /*$name = 'non';
    return [
        '#type' => 'markup',
        '#markup' => $this->redirect('unicef42.temps_peri_controller_index',$arrayName = array('name' => $name))
    ];*/
    return array(
            '#theme' => 'world',
            '#texte' => $this->t('Hello world !'),
        );
  }

}
