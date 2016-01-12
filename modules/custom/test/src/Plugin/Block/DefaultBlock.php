<?php

/**
 * @file
 * Contains \Drupal\test\Plugin\Block\DefaultBlock.
 */

namespace Drupal\test\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
	  $account = \Drupal::currentUser();
	  return [
	    '#markup' => t('@welcome @username',
	      array(
	        '@welcome' => $this->configuration['welcome_text'],
	        '@username' => user_format_name($account)
	      )
	    ),
	  ];
  }

   /**
   * Overrides \Drupal\block\BlockBase::blockForm().
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['welcome_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Welcome text'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['welcome_text']) ? $this->configuration['welcome_text'] : '',
    ];
    return $form;
  }
 
  /**
   * Overrides \Drupal\block\BlockBase::blockSubmit().
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['welcome_text'] = $form_state->getValue('welcome_text');
  }

}
