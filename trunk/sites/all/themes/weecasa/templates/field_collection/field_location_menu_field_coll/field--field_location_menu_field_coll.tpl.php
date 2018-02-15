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
?>
<section class="section section-sub-nav">
  <div class="container">
    <div class="nav">
      <ul>
        <li>
          <?php $first_img = theme('image', array('path' => path_to_theme() . '/images/sub-nav-ico-1.png'));
          $second_img = theme('image', array('path' => path_to_theme() . '/images/sub-nav-ico-1-a.png'));
          $span_in_link = '<span class="inner-wrap"><span class="ico">' . $first_img . $second_img . '</span>' . t("THE HOUSES") . '</span>';
          ?>
          <?php print l($span_in_link, '#tab-the-houses', array('html' => TRUE)); ?>
        </li>
        <?php foreach ($items as $delta => $item): ?>

          <?php if (isset($item['entity'])): ?>

            <?php foreach ($item['entity']['field_collection_item'] as $key => $fields): ?>
              <?php reset($fields); ?>
              <li>
                <?php
                $title = !empty($fields['field_location_menu_fc_title_txt']) ? $fields['field_location_menu_fc_title_txt']['#items'][0]['value'] : $fields['field_location_node_entity_ref'][0]['#label'];
                $url = $fields['field_location_node_entity_ref'][0]['#item']['target_id'];
                $span_in_link = '<span class="inner-wrap"><span class="ico">' . render($fields['field_location_menu_fc_image']) . '</span>' . $title . '</span>';
                print l($span_in_link, 'node/' . $url, array('html' => TRUE)); ?>

              </li>
            <?php endforeach; ?>

          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>


<div class="sub-nav-content">
  <div class="nav-item">
    <?php if (!user_is_anonymous()): ?>
      <ul class="field-collection-view-links">
        <li class="edit"><?php print l('Edit', 'manage/order/location'); ?></li>
      </ul>
    <?php endif; ?>

    <?php
    $views_content = views_embed_view('location_taxonomy_term', 'page', arg(2));
    print render($views_content); ?>
  </div>
  <?php foreach ($items as $delta => $item): ?>

    <div class="nav-item">

      <?php if (isset($item['entity'])): ?>
        <?php foreach ($item['entity']['field_collection_item'] as $key => $fields): ?>
          <?php reset($fields);
          $content_nid = $fields['field_location_node_entity_ref'][0]['#item']['entity']->vid;
          ?>
          <?php if (!empty($item['links']['#links'])){
            $item['links']['#links']['edit']['href'] = $fields['field_location_node_entity_ref'][0]['#uri']['path'] . '/edit';
          }
          print render($item['links']) ?>
          <?php $rendered_teaser = node_view(node_load($content_nid), 'teaser');
          print render($rendered_teaser); ?>
        <?php endforeach; ?>

      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>