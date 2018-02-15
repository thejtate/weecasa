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
<div class="left-part">
  <div class="b-tripadvisor">
    <div class="logo">
      <div class="img">
        <?php print $fields['field_reviews_image_logo_img']->content; ?>
      </div>
      <div class="count">
              <span class="rating-wrap">
                <span class="rating rating-<?php print $fields['field_reviews_rating_integer']->content; ?>">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </span>
              <span class="count-wrap">
              <span><?php print $fields['field_reviews_amount_integer']->content; ?></span>
        Reviews
              </span>
        </span>
      </div>
    </div>

    <div class="content-wrap">
      <div class="inner-wrap scrollbar-macosx">
        <div class="previews-wrap">
          <?php print $fields['field_reviews_review_field_coll']->content; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="right-part">
  <div class="bg">
    <?php $image = $fields['field_reviews_seal_image']->content ?>
    <?php $url = $fields['field_reviews_seal_link']->content; ?>
    <?php print l($image, $url, array(
      'attributes' => array('target' => '_blank'),
      'html' => TRUE
    )); ?>
  </div>
</div>
