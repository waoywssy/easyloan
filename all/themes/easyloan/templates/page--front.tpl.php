<?php
/**
 * @file
 * Returns the HTML for the front page.
 *  var_dump($page['slide']);
 */
drupal_add_css(drupal_get_path('theme','easyloan') . '/css/index.css');
drupal_add_js(drupal_get_path('theme','easyloan') . '/js/bjqs-1.3.js');
drupal_add_js(drupal_get_path('theme','easyloan') . '/js/slider.js');
drupal_add_css(drupal_get_path('theme','easyloan') . '/css/bjqs.css');
global $base_url;

?>
<div class="pg-container color-white-bg">
  <?php print render($page['header']); ?>
  <div class="pg-container-content">
  <div id="pg-index">
    <!-- Slide -->
    <?php
      print render($page['slide']);
    ?>
    <div class="container_12">
      <?php
        print render($page['content_top']);
      ?>
      <div class="bell"></div>
    </div>
  </div>
</div>

<div class="ui-footer" id="footer">
  <div class="container_12">
    <div class="grid_12">
      <div class="ui-footer-section ui-footer-narrow-hide">
        <ul class="ui-footer-links fn-clear">
          <li class="fn-left">
            <h4 class="color-gray-text text-big">友情链接</h4>
          </li>
          <?php print render($page['footer']); ?>
        </ul>
      </div>
  <?php print render($page['bottom']); ?>
  </div>
</div>
</div>
</div>
