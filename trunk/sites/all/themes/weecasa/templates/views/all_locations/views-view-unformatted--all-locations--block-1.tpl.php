<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php $theme_path = base_path() . path_to_theme(); ?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) {
    print ' class="' . $classes_array[$id] . '"';
  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
<section class="section section-location">
  <div class="bg-wrap">
    <div class="bg"
         style="background-image: url('<?php print $theme_path . '/images/section-location-img-3.jpg'; ?>')"></div>
  </div>
  <div class="container">
    <div class="inner-wrap">
      <div class="anim-wrap">
        <div class="sub-title">
          <?php print t('MORE LOCATIONS'); ?>
        </div>
        <h3>
          <?php print t('Coming Soon'); ?>
        </h3>
      </div>
    </div>
  </div>
</section>