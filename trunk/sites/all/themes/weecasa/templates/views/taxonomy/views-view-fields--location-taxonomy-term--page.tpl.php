<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<div class="item">
  <div class="anim-wrap">
    <div class="tilter__figure">
      <a href="<?php print  url('node/' . $fields['nid']->content); ?>">

        <?php print $fields['field_apartment_preview_image']->content; ?>
        <span class="tilter__deco--lines">
          <span class="title-wrap">
            <span class="sub-title">
              <?php print t('THE'); ?>
            </span>
            <span class="title"><?php print $fields['title']->content; ?></span>
          </span>
        </span>
        <span class="tilter__deco--overlay">
                </span>
        <span class="tilter__caption">
          <span class="info">
            <span class="inner-wrap">
              <?php if (!empty($fields['field_apartment_sleeps_txt']->content)): ?>
                <span class="sleeps">
                  <?php print t('SLEEPS'); ?>
                  <span class="amount"><?php print $fields['field_apartment_sleeps_txt']->content; ?></span>
                </span>
              <?php endif; ?>
              <span class="more">
                        MORE INFO
                      </span>
            </span>
          </span>
        </span>
      </a>
    </div>
  </div>
</div>
