field_collection_flexi
======================

This Drupal module provides a field formatter and hook to programmatically switch View Mode of each item in a Field Collection. It also allows classes to be added to each field item, or theme wrappers to be added.

This is inspired by functionality provided in Display Suite (hook_ds_views_view_mode_alter), which allows view mode of an entity to be changed per row of a view.

Usage Instructions
------------------

The module provides a formatter for *Field collection* fields called **Field collection flexi**.

When using this formatter, a hook is called just before rendering each item in the field collection, allowing your theme or module to alter:

* The display mode used for the item (Full, Teaser etc)
* Classes for the item
* Theme wrappers for the item

`hook_field_collection_flexi_view_mode_alter($view_mode, $classes, $context);`

See **field_collection_flexi.api.php** for detailed example.

Example uses include:

* Switching entity view mode based the delta of the item
* Adding classes or switching view mode based on a field value (either in the item itself, or the parent entity)
