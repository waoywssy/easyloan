<?php
/**
 * @file
 * Returns the HTML for a the user-register form.
 *
 */

drupal_add_js(drupal_get_path('theme','easyloan') . '/js/jquery.validate.min.js');
drupal_add_js(drupal_get_path('theme','easyloan') . '/js/reg.js');
drupal_add_css(drupal_get_path('theme','easyloan') . '/css/reg.css');

$form['captcha']['captcha_widgets']['captcha_response']['#title']='';
$form['captcha']['captcha_widgets']['captcha_response']['#weight']=-10;
$form['captcha']['captcha_widgets']['captcha_response']['#description']='';
$form['captcha']['captcha_widgets']['captcha_response']['#required']=false;
$form['captcha']['captcha_widgets']['captcha_refresh']['#theme_wrappers']=NULL;
$form['captcha']['captcha_widgets']['captcha_response']['#attributes']['class']=array('ui-input','input-icon','code');
?>

<div id="pg-reg"> 
  <div class="container_12"> 
    <div class="p20bs color-white-bg regbox"> 
      <div data-name="register" class="ui-form" id="reg"> 
        <fieldset> 
          <?php 
            print render($form['form_build_id']);
            print render($form['form_id']);
          ?>
          <legend>注册</legend>
          <div class="ui-form-item">
            <label class="ui-label">昵称</label>
            <?php print render($form['account']['name']); ?>
            <span class="icon input-icon-user"></span>
          </div>
          
          <div class="ui-form-item">
            <label class="ui-label">手机号</label>
            <?php print render($form['account']['phone']); ?>
            <span class="icon input-icon-mobile"></span>
            <input type="hidden" name="mail" id="edit-mail" value="@">
          </div>

          <div class="ui-form-item">
            <label class="ui-label">密码</label>
            <input class="ui-input input-icon" type="password" 
              name="<?php print $form['account']['pass']['pass1']['#name']; ?>" id="<?php print $form['account']['pass']['pass1']['#id'];?>">
            <span class="icon input-icon-key"></span>
          </div>

          <div class="ui-form-item">
            <label class="ui-label">重复密码</label>
            <input class="ui-input input-icon" type="password" 
              name="<?php print $form['account']['pass']['pass2']['#name']; ?>" id="<?php print $form['account']['pass']['pass2']['#id'];?>">
            <span class="icon input-icon-key"></span>
          </div>
          <?php 
            if($form['captcha']['#captcha_type']){
              print render($form['captcha']['captcha_sid']);
              print render($form['captcha']['captcha_token']);
          ?>
          <div class="ui-form-item">
            <label class="ui-label">验证码</label>
            <?php print render($form['captcha']); ?>
            <span class="icon input-icon-lock"></span>
          </div>
          
          <?php } ?>
          <div class="ui-form-item ui-form-item-check">
            <?php print render($form['account']['agree']); ?>
            <a href="/agreement/rv_webservice.html" target="_blank">《好易贷网站服务协议》</a>
          </div>
          <div class="ui-form-item">
            <?php 
              print render($form['account']['timezone']);
              print render($form['actions']['submit']); 
            ?>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</div>