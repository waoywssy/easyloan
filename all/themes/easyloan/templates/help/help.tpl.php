<?php
/**
 * @file
 * Forget password
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
/*
$options = array(
    'group'  => CSS_SYSTEM - 1,
    'weight' => -10,
  );
*/
drupal_add_js(drupal_get_path('theme','easyloan') . '/js/help.js');
drupal_add_css(drupal_get_path('theme','easyloan') . '/css/help.css');
?>

<div id="pg-help-terms" class="pg-help-main rrdcolor-dimgray-text pg-help-terms p20bs">
  <h1 class="h3">名词解释</h1>
  <?php
    // print views_embed_view('newslist');
    print views_embed_view('explanationlist', "block", "");
  ?>
</div>