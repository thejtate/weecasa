<?php
/**
 * Created by PhpStorm.
 * User: taki
 * Date: 5/30/17
 * Time: 7:07 PM
 */
define('ALL_LOCATIONS_LINK', 'node/50');
define('WEECASA_RESERVATIONS_NID', 43);

/**
 * Implements template_preprocess_html().
 */
function weecasa_preprocess_html(&$vars) {
  $vars['enable_zendesk_widget'] = TRUE;

  if ($node = menu_get_object()) {

    if ($node->nid == WEECASA_RESERVATIONS_NID) {
      $vars['classes_array'][] = 'page-reservations';
    }

    switch ($node->type) {
      case 'page':
        $field = array('field_basic_page_type_list');
        $type = _weecasa_get_rows_from_node($node, $field);
        $type = !empty($type['field_basic_page_type_list']) ? $type['field_basic_page_type_list'] : '';

        if ($type == 'reservation') {
          $vars['classes_array'][] = 'page-reservation-house';
        }
        break;
      case 'partners':
        $vars['classes_array'][] = 'page-partners';
        break;
    }
  }

  $view = views_get_page_view();
  if (is_object($view)) {
    if ($view->name == 'reservation_iframe') {
      $vars['classes_array'][] = 'page-reservation-iframe';
      $vars['enable_zendesk_widget'] = FALSE;
    }
  }
}

/**
 * Implements hook_preprocess_page().
 */
function weecasa_preprocess_page(&$vars) {
  if (isset($vars['node'])) {
    $node = $vars['node'];
    if (!empty($node)) {

      if (!empty($node->field_basic_top_image)) {
        $vars['top_image'] = file_create_url($node->field_basic_top_image[LANGUAGE_NONE][0]['uri']);
      }
    }
  }

  $view = views_get_page_view();
  if (is_object($view)) {
    if ($view->name == 'reservation_iframe') {
      header_remove('X-Frame-Options');
      $vars['theme_hook_suggestions'][] = 'page__reservation';
      module_invoke('admin_menu', 'suppress');
    }
  }
}

/**
 * Implements hook_preprocess_node().
 */
function weecasa_preprocess_node(&$vars) {
  $node = $vars['node'];
  $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
  $vars['top_image'] = '';
  if (!empty($node->field_basic_top_image)) {
    $vars['top_image'] = file_create_url($node->field_basic_top_image[LANGUAGE_NONE][0]['uri']);
  }
  if (!empty($node->field_basic_text_size_list)) {
    $vars['text_size'] = '-' . $node->field_basic_text_size_list[LANGUAGE_NONE][0]['value'];
  }
  
  if (!empty($vars['content']['field_basic_top_image'])) {
    hide($vars['content']['field_basic_top_image']);
  }
  if (!empty($vars['content']['field_basic_text_size_list'])) {
    hide($vars['content']['field_basic_text_size_list']);
  }
  if (!empty($vars['content']['field_map_contacts_tour_sect_img'])) {
    hide($vars['content']['field_map_contacts_tour_sect_img']);
  }
  
  switch ($node->type) {
    case 'homepage':

      if (!empty($node->field_home_thrd_bg_image)) {
        $vars['third_section_image'] = file_create_url($node->field_home_thrd_bg_image[LANGUAGE_NONE][0]['uri']);
      }
      if (!empty($node->field_home_top_video_mp_file)) {
        $vars['mp_video'] = file_create_url($node->field_home_top_video_mp_file[LANGUAGE_NONE][0]['uri']);
      }
      if (!empty($node->field_home_top_video_webm_file)) {
        $vars['webm_video'] = file_create_url($node->field_home_top_video_webm_file[LANGUAGE_NONE][0]['uri']);
      }
      if (!empty($node->field_home_top_video_poster_img)) {
        $vars['poster_img'] = file_create_url($node->field_home_top_video_poster_img[LANGUAGE_NONE][0]['uri']);
      }
      $vars['content']['locations'] = array('#markup' => weecasa_get_rendered_block('views', 'locations-block'));
      break;
    case 'amentities':
      if (!empty($node->field_amentities_provides_img)) {
        $vars['bg_provides_img'] = file_create_url($node->field_amentities_provides_img[LANGUAGE_NONE][0]['uri']);
      }
      break;
    case 'map' :
      if (!empty($node->field_map_contacts_tour_sect_img)) {
        $vars['tour_bg_img'] = file_create_url($node->field_map_contacts_tour_sect_img[LANGUAGE_NONE][0]['uri']);
      }
      break;
    case 'apartment':
      if (!empty($node->field_location_term)){
        $term_data = taxonomy_term_load($node->field_location_term[LANGUAGE_NONE][0]['tid']);
        $back_button_title = !empty($term_data->field_taxonomy_loc_titie_txt[LANGUAGE_NONE][0]['value']) ? $term_data->field_taxonomy_loc_titie_txt[LANGUAGE_NONE][0]['value'] . ' ' : '';
        $vars['back_button'] = l('<span>' . $back_button_title . t('houses') . '</span>', 'taxonomy/term/' . $term_data->tid,array('attributes' => array('class' => 'btn btn-back style-a'), 'html' => TRUE));
      }
      break;
  }
}


/**
 * Implements hook_form_alter().
 */
function weecasa_form_alter(&$form, &$form_state, $form_id) {
//  kpr($form_id);
  if (strpos($form_id, 'webform_client_form_') !== FALSE) {
    $node = $form['#node'];
    switch ($node->type) {
      case 'subscribe':
        $form['#validate'][] = 'check_email_custom_validate';

        if ($form_id == 'webform_client_form_48') {

          custom_wrap_item($form['submitted']['first_row'], 'row');
          custom_wrap_item($form['submitted']['second_row'], 'row');
          $form['actions']['submit']['#prefix'] = '<div class="form-submit-wrap">';
          $form['actions']['submit']['#suffix'] = '</div>';
        }
        if ($form_id == 'webform_client_form_2') {
          custom_wrap_item($form['submitted']['right']['first_row']['first_name'], 'form-type-text col-sm-6');
          custom_wrap_item($form['submitted']['right']['first_row']['last_name'], 'form-type-text col-sm-6');
          custom_wrap_item($form['submitted']['right']['second_row']['email'], 'form-type-text col-sm-6');
          custom_wrap_item($form['submitted']['right']['second_row']['confirm_email'], 'form-type-text col-sm-6');
          custom_wrap_item($form['submitted']['right']['first_row'], 'row');
          custom_wrap_item($form['submitted']['right']['second_row'], 'row');
          custom_wrap_item($form['submitted']['text'], 'left-part');

          custom_wrap_item($form['submitted']['right'], 'form form-sign-up');
          custom_wrap_item($form['submitted']['right'], 'right-part');

        $form['submitted']['right']['submit'] = $form['actions']['submit'];
        $form['submitted']['right']['submit']['#weight'] = 999;
        unset($form['actions']['submit']);
          $form['submitted']['right']['submit']['#prefix'] = '<div class="form-actions"><div class="form-submit-wrap">';
          $form['submitted']['right']['submit']['#suffix'] = '</div></div>';
        }

        break;
    }
  }

}

/**
 * @param $element
 * @param $classes
 * @param string $tag
 *
 * funnel function for theme elements
 */
function custom_wrap_item(&$element, $classes, $tag = 'div') {
  if (!empty($element)) {
    $element['#prefix'] = '<' . $tag . (!empty($classes) ? ' class="' . $classes . '">' : '>') . (array_key_exists('#prefix', $element) ? $element['#prefix'] : '');
    $element['#suffix'] = (array_key_exists('#suffix', $element) ? $element['#suffix'] : '') . '</' . $tag . '>';
  }
}

/**
 * @param $form
 * @param $form_state
 *
 * custom validate function for webform email field
 */
function check_email_custom_validate($form, &$form_state) {
  if ($form_state['values']['submitted']['second_row']['email'] != $form_state['values']['submitted']['second_row']['confirm_email']) {
    form_set_error('confirm_email', t('Please enter correct email.'));
  }
}

function weecasa_menu_tree__main_menu($vars) {
  return '<ul class="menu">' . $vars['tree'] . '</ul>';
}

function weecasa_menu_link__main_menu(&$vars) {
  $element = $vars['element'];
  $sub_menu = '';
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  if (strtolower($element['#title']) == 'weecasa') {
    $path_to_file = base_path() . drupal_get_path('theme', 'weecasa');
    $output = l('<span class="logo-wrapper"><img src="' . $path_to_file . '/images/logo.png"></span>', $element['#href'], array(

      'html' => TRUE
    ));
    return '<li class="logo-top"' . drupal_attributes($element['#attributes']) . '>' . $output . "</li>\n";
  }
  else {
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
  }
}

function weecasa_menu_link__menu_footer_menu(&$vars){
  $element = $vars['element'];

  if (strtolower($element['#href']) == 'newsletter signup') {

    $output = "<a data-toggle=\"modal\" data-target=\"#popup-sign-up\" href='#'>" . $element['#title'] . "</a>";
    return '<li class="mobile-only"' . drupal_attributes($element['#attributes']) . '>' . $output . "</li>\n";
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);

  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output  . "</li>\n";
}

/**
 * Get full block html with contextual links.
 *
 * @param $module
 *   Name of the module that implements the block to load.
 * @param $delta
 *   Unique ID of the block within the context of $module. Pass NULL to return
 *   an empty block object for $module.
 *
 * @return string Block html
 */
function weecasa_get_rendered_block($module, $delta) {
  $block = block_load($module, $delta);
  $render_block = _block_render_blocks(array($block));
  $render_block_array = _block_get_renderable_array($render_block);

  return !empty($block) ? drupal_render($render_block_array) : '';
}

/**
 * Implements template_preprocess_views_view().
 * @param $vars
 */
function weecasa_preprocess_views_view(&$vars) {
  $vars['all_locations_link'] = ALL_LOCATIONS_LINK;
}

function weecasa_preprocess_taxonomy_term(&$vars){
  $vars['top_image'] = '';

  if (!empty($vars['field_basic_top_image'])) {
    $vars['top_image'] = file_create_url($vars['field_basic_top_image'][0]['uri']);
  }
}

/**
 * Implements hook_js_alter().
 */
function weecasa_js_alter(&$js) {
  $view = views_get_page_view();
  if (is_object($view)) {
    if (($view->name == 'reservation_iframe') && (array_key_exists('sites/all/themes/weecasa/js/js.js', $js))) {
      $js['sites/all/themes/weecasa/js/js.js']['data'] = drupal_get_path('theme', 'weecasa') . '/js/js-reservations.js';
    }
  }
}

/**
 * Get rows from node.
 *
 * @param $node
 * @param $field_array
 * @return array|void
 */
function _weecasa_get_rows_from_node($node, $field_array) {

  if (!is_object($node)) {
    return;
  }

  try {
    $node_wrapper = entity_metadata_wrapper('node', $node);
    $properties = $node_wrapper->getPropertyInfo();
    $rows = array();

    foreach ($field_array as $field) {
      if (array_key_exists($field, $properties)) {
        $rows[$field] = $node_wrapper->$field->value();
      }
    }
  }
  catch (EntityMetadataWrapperException $exc) {
    watchdog('weecasa', 'See ' . __FUNCTION__ . '() <pre>' . $exc->getTraceAsString() . '</pre>', NULL, WATCHDOG_ERROR);
  }

  return $rows;
}