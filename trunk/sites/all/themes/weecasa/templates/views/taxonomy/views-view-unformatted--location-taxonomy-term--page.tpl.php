<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php
if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<section class="section section-locations">
  <div class="container">
    <div class="btn-link-wrap">
      <?php
      $term = taxonomy_term_load(arg(2));
      if (!empty($term->field_taxonomy_property_map_file)) {
        $file = file_create_url($term->field_taxonomy_property_map_file[LANGUAGE_NONE][0]['uri']);
        $title = $term->field_taxonomy_property_map_file[LANGUAGE_NONE][0]['description'];
        print l('<span class="ico ss-icon ss-glyphish-filled ss-map"></span><span>' . $title . '</span>', $file, array(
          'attributes' => array(
            'class' => 'btn style-a',
            'target' => '_blank'
          ),
          'html' => TRUE
        ));
      }
      ?>
    </div>
    <div class="items">
      <?php foreach ($rows as $id => $row): ?>
        <?php print $row; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>