<?php

/**
 * @file
 * Contains \Drupal\unicef42\Form\DefaultEntityForm.
 */

namespace Drupal\unicef42\Form;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DefaultEntityForm.
 *
 * @package Drupal\unicef42\Form
 */
class DefaultEntityForm extends EntityForm {
  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $default_entity = $this->entity;
    $form['label'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $default_entity->label(),
      '#description' => $this->t("Label for the Default entity."),
      '#required' => TRUE,
    );

    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $default_entity->id(),
      '#machine_name' => array(
        'exists' => '\Drupal\unicef42\Entity\DefaultEntity::load',
      ),
      '#disabled' => !$default_entity->isNew(),
    );

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $default_entity = $this->entity;
    $status = $default_entity->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Default entity.', [
          '%label' => $default_entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Default entity.', [
          '%label' => $default_entity->label(),
        ]));
    }
    $form_state->setRedirectUrl($default_entity->urlInfo('collection'));
  }

}
