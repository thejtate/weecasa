<?php

/**
 * @file
 * Default theme implementation for field collection items.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) field collection item label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-field-collection-item
 *   - field-collection-item-{field_name}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<?php  $parallax = !empty($content['field_basic_add_paralax']['#items'][0]['value']) ? $content['field_basic_add_paralax']['#items'][0]['value']: ''; ?>
<?php if (!empty($content['field_map_sections_anchor_text'])): ?>
  <a id="<?php print strtolower(str_replace(' ', '_', $content['field_map_sections_anchor_text']['#items'][0]['value'])); ?>"></a>
<?php endif;?>
<div class="section section-info <?php print $parallax ?>">
  <div class="bg-wrap">
    <div class="bg" style="background-image: url('<?php print file_create_url($content['field_map_sect_fc_img']['#items'][0]['uri']);?>')"></div>
  </div>
  <div class="container">
    <h2><?php print render($content['field_map_sect_fc_title_txt']); ?></h2>
    <div class="text">
      <?php print render($content['field_map_sect_fc_text']); ?>
    </div>
  </div>
</div>
