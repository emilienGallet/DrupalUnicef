<?php

/**
 * @file
 * Contains \Drupal\unicef42\Entity\DefaultEntity.
 */

namespace Drupal\unicef42\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\unicef42\DefaultEntityInterface;

/**
 * Defines the Default entity entity.
 *
 * @ConfigEntityType(
 *   id = "default_entity",
 *   label = @Translation("Default entity"),
 *   handlers = {
 *     "list_builder" = "Drupal\unicef42\DefaultEntityListBuilder",
 *     "form" = {
 *       "add" = "Drupal\unicef42\Form\DefaultEntityForm",
 *       "edit" = "Drupal\unicef42\Form\DefaultEntityForm",
 *       "delete" = "Drupal\unicef42\Form\DefaultEntityDeleteForm"
 *     }
 *   },
 *   config_prefix = "default_entity",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/default_entity/{default_entity}",
 *     "edit-form" = "/admin/structure/default_entity/{default_entity}/edit",
 *     "delete-form" = "/admin/structure/default_entity/{default_entity}/delete",
 *     "collection" = "/admin/structure/visibility_group"
 *   }
 * )
 */
class DefaultEntity extends ConfigEntityBundleBase implements DefaultEntityInterface {
  /**
   * The Default entity ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Default entity label.
   *
   * @var string
   */
  protected $label;

}
