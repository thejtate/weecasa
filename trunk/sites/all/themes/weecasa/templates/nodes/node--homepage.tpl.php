<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div id="node-<?php print $node->nid; ?>"
     class="<?php print $classes; ?> "<?php print $attributes; ?>>
  
  <section class="section section-top">
    <div class="video" >
      <video loop="loop" autoplay="autoplay" width="100%" muted="muted" preload="auto" poster="<?php print $poster_img?>" >
        <source src="<?php print $mp_video?>" type="video/mp4">
        <source src="<?php print $webm_video?>" type="video/webm">
        <img src="<?php print $poster_img?>" alt=""/>
      </video>
    </div>
    <div class="container">
      <div class="title-a">
        <div class="img">
          <?php print render($content['field_home_frst_center_image']); ?>
        </div>
        <?php print render($title_prefix); ?>
        <h1><?php print filter_xss(html_entity_decode($title), array('br', 'span')) ?></h1>
        <?php print render($title_suffix); ?>
      </div>
    </div>
  </section>

  <section class="section section-book-now">
    <div class="container">
      <div class="inner-wrap">
        <div class="parts-wrap">

          <div class="left-part">
            <?php print render($content['field_triptych_title_field_coll']); ?>
            <?php print render($content['field_home_left_part_sect_image']); ?>
          </div>
          <div class="right-part">
            <?php print render($content['body']); ?>
          </div>
        </div>
        <div class="mobile-only">
          <?php print render($content['field_home_mobile_only_text']); ?>
        </div>
        <?php print render($content['field_home_top_button_link']); ?>
      </div>
    </div>
  </section>

  <section class="section section-weekend-stays">
    <div class="bg-wrap">
      <div class="bg" style="background-image: url('<?php print $third_section_image; ?>')">
      </div>
    </div>
    <div class="container">
      <div class="discount">
        <?php if (!empty($content['field_home_thrd_first_row_txt'])): ?>
          <div class="amount">
            <?php print render($content['field_home_thrd_apostrophe_txt']); ?><?php print render($content['field_home_thrd_first_row_txt']); ?>
          </div>
        <?php endif; ?>
        <?php print render($content['field_home_thrd_second_row_txt']); ?>
      </div>
      <div class="desc">
        <?php print render($content['field_home_thrd_section_text']); ?>
      </div>
      <?php print render($content['field_home_thrd_section_link']); ?>

      <div class="discount-code">
        <?php print render($content['field_home_thrd_link_desc_txt']); ?>
      </div>
    </div>
  </section>

  <?php print render($content['locations']); ?>

  <section class="section section-slider">
    <div class="b-slider">
      <?php print render($content['field_home_slider_image']); ?>
    </div>
  </section>

  <section class="section section-quotes">
    <div class="container">
      <?php print render($content['field_home_section_quotes_fc']); ?>
    </div>
  </section>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_home_thrd_bg_image']);
    hide($content['field_basic_top_image']);
    hide($content['field_home_newsletter_sect_img']);
    hide($content['field_home_top_video_mp_file']);
    hide($content['field_home_top_video_webm_file']);
    hide($content['field_home_top_video_poster_img']);
    print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
