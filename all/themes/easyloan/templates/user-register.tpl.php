<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */

drupal_add_js(drupal_get_path('theme','easyloan') . '/js/jquery.validate.min.js');
drupal_add_js(drupal_get_path('theme','easyloan') . '/js/reg.js');
drupal_add_css(drupal_get_path('theme','easyloan') . '/css/reg.css');
/*
print render($form['account']['name']);
print render($form['account']['pass']);
print render($form['account']['mail']);
print render($form['captcha']);
//print drupal_render($form['actions']);
*/
//var_dump($form);
?>
<div id="pg-reg">
  <div class="container_12">
    <div class="p20bs color-white-bg regbox">
      <div data-name="register" data-showtip="false" class="ui-form" method="post" id="reg">
        <fieldset>
          <legend>注册</legend>
          <div class="ui-form-item">
            <label class="ui-label">昵称</label>
            <input class="ui-input input-icon" type="text" name="name" id="edit-name">
            <span class="icon input-icon-user"></span>
          </div>
          <div class="ui-form-item">
            <label class="ui-label">手机号</label>
            <input class="ui-input input-icon" type="text" name="phone" id="phone">
            <span class="icon input-icon-mobile"></span>
          </div>
          <div class="ui-form-item">
            <label class="ui-label">密码</label>
            <input class="ui-input input-icon" type="password" name="password" id="password">
            <span class="icon input-icon-key"></span>
          </div>
          <div class="ui-form-item">
            <label class="ui-label">重复密码</label>
            <input class="ui-input input-icon" type="password" name="confirm_password" onpaste="return false">
            <span class="icon input-icon-key"></span>
          </div>
          <div class="ui-form-item">
            <label class="ui-label">验证码</label>
            <input class="ui-input input-icon code" type="text" name="randCode" id="randCode">
            <span class="icon input-icon-lock"></span>
            <img id="randImage" border="0" align="absmiddle" src="https://www.renrendai.com/image.jsp" name="randImage" alt="验证码">
          </div>
          <div class="ui-form-item ui-form-item-check">
            <input id="agree" name="agree" checked="checked" type="checkbox"> <label id="labelagree" for="agree">我已阅读并同意  <a href="/agreement/rv_webservice.html" target="_blank">《好易贷网站服务协议》</a> </label>
          </div>
          <div class="ui-form-item">
            <input type="submit" id="edit-submit" name="op" class="ui-button ui-button-blue ui-button-mid" value="注册">
          </div>
              <?php 
                print drupal_render($form['form_build_id']);
                print drupal_render($form['form_id']);
              ?>
        </fieldset>
      </div>
    </div>
  </div>
</div>
