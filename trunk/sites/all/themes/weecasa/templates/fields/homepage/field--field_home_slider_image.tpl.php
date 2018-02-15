<?php

/**
 * @file field.tpl.php
 * Default template implementation to display the value of a field.
 *
 * This file is not used and is here as a starting point for customization only.
 * @see theme_field()
 *
 * Available variables:
 * - $items: An array of field values. Use render() to output them.
 * - $label: The item label.
 * - $label_hidden: Whether the label display is set to 'hidden'.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - field: The current template type, i.e., "theming hook".
 *   - field-name-[field_name]: The current field name. For example, if the
 *     field name is "field_description" it would result in
 *     "field-name-field-description".
 *   - field-type-[field_type]: The current field type. For example, if the
 *     field type is "text" it would result in "field-type-text".
 *   - field-label-[label_display]: The current label position. For example, if
 *     the label position is "above" it would result in "field-label-above".
 *
 * Other variables:
 * - $element['#object']: The entity to which the field is attached.
 * - $element['#view_mode']: View mode, e.g. 'full', 'teaser'...
 * - $element['#field_name']: The field name.
 * - $element['#field_type']: The field type.
 * - $element['#field_language']: The field language.
 * - $element['#field_translatable']: Whether the field is translatable or not.
 * - $element['#label_display']: Position of label display, inline, above, or
 *   hidden.
 * - $field_name_css: The css-compatible field name.
 * - $field_type_css: The css-compatible field type.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess_field()
 * @see theme_field()
 *
 * @ingroup themeable
 */
global $base_url;
$is_iframe = ($element['#view_mode'] == 'reservation_iframe');
?>
<div class="slider">
  <?php foreach ($items as $delta => $item): ?>
    <div class="item">
      <?php print render($item); ?>
      <?php if ((!empty($item['#item']['uri']) || !empty($item['file']['#item']['uri'])) && !$is_iframe):?>
        <?php
        $shared_image_url = file_create_url(!empty($item['#item']['uri']) ? $item['#item']['uri'] : $item['file']['#item']['uri']); ?>
        <div class="pin">
          <div class="inner">
            <a data-pin-do="buttonBookmark" data-pin-tall="true" data-pin-save="true" href="https://www.pinterest.com/pin/create/button/?url=<?php print ($base_url . '/' . current_path()) ?>&media=<?php print $shared_image_url; ?>" data-pin-height="28"></a>
          </div>
        </div>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>

<?php if (!$is_iframe):?>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
<?php endif; ?>