<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div class="pg-container  ">
  <?php print render($page['header']); ?>
  <?php print $messages; ?>
  <div class="pg-container-content">
    <?php print render($page['content']); ?>
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