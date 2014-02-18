<?php

/**
 * Alter the view mode, classes, or theme wrappers just before
 * a Field Collection Item is rendered by the "Field collection flexi" formatter.
 *
 * @param $view_mode
 *   The name of the view mode.
 * @param $classes
 *   An array of classes to add to the item.
 * @param $context
 *   A collection of items which can be used to identify in what
 *   context an entity is being rendered. The variable contains 1 alterable item:
 *     - theme_wrapper: The theme wrapper to be used for the field item
 *   and 4 additional keys useful when determining context:
 *     - host_entity: The entity that the field collection field belongs to.
 *     - field_collection: The field collection item.
 *     - field_name: the name of the field collection field.
 *     - delta: the delta of the field collection item.
 */
function hook_field_collection_flexi_view_mode_alter(&$view_mode, &$classes, $context) {

  switch ($context['field_name']) {
    case 'my_example_field':

      // Add striping classes
      $classes[] = $context['delta'] % 2 ? 'even' : 'odd';

      // Change the view mode for the first item in the collection only
      if ($context['delta'] == 0) {
        $view_mode = 'aweseome_view_mode';
      }
      break;
  }
}

