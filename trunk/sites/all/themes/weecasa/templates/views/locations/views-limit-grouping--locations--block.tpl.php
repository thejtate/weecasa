<?php

/**
 * @file views-limit-grouping.tpl.php
 * Basically, just a copy of views-view-unformatted.tpl.php.
 */
?>
<div class="slide-item">
  <div class="location"><?php print t('Vast Locations') ?></div>
  <?php if (!empty($title)): ?>
    <h2><?php print $title; ?></h2>
  <?php endif; ?>

  <div class="items">
    <?php foreach ($rows as $id => $row): ?>
      <?php print $row; ?>
    <?php endforeach; ?>
  </div>
  <?php
  $link_text = !empty($view->result[$id]->field_field_location_ter_alias_txt[0]['raw']['value']) ? $view->result[$id]->field_field_location_ter_alias_txt[0]['raw']['value'] :'';
  $link_url = $view->result[$id]->taxonomy_term_data_node_tid;
  print l('SEE ALL ' . $link_text . ' HOUSES','taxonomy/term/' . $link_url,
    array(
      'attributes' => array(
        'class' => array('btn style-a')
      )
    )) ?>
</div>  