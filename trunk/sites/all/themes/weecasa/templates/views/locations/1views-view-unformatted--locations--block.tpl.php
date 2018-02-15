<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div class="slide-item">
  <div class="location"><?php print t('Vast Locations') ?></div>
  <?php if (!empty($title)): ?>
    <h2><?php print $title; ?></h2>
  <?php endif; ?>

  <div class="items">
    <?php $slides = '';?>
    <?php foreach ($rows as $id => $row): ?>
      <?php $slides++;
//      show only 6 elements in slider
     if ($slides <= 6): ?>
        <?php print $row; ?>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>

  <a class="btn style-a" href="#">
    <?php print t('SEE ALL AUSTIN HOUSES') ?>
  </a>
</div>