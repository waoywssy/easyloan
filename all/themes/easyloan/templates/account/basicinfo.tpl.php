<?php
global $user;
global $base_url;

$theme_path = drupal_get_path('theme','easyloan');

$js_path = $base_url . '/' . $theme_path . '/js/';

drupal_add_css($theme_path . '/css/account.css');
drupal_add_css($theme_path . '/css/user.css');

drupal_add_js('var js_path=\'' . $js_path . '\'', 'inline');
drupal_add_js($theme_path . '/js/educations.js');
drupal_add_js($theme_path . '/js/provinces.js');
drupal_add_js($theme_path . '/js/marital_status.js');
drupal_add_js($theme_path . '/js/jquery.validate.min.js');
drupal_add_js($theme_path . '/js/account.js');
drupal_add_js($theme_path . '/js/userbasic.js');

$img_path = '../' . $theme_path . '/images/default-avatar-96.png';
// print $variables['age'];
?>
<div class="p20bs color-white-bg fn-clear" id="pg-account-user">
  <div class="fn-clear head"><div class="title fn-left">个人基础信息</div><div class="fn-right"><a id="modiForm" class="ui-button ui-button-mid ui-button-green">修改信息</a></div></div>
  <form enctype="multipart/form-data" class="ui-form" method="post" id="userInfoForm">
  <div class="userphoto" id="userphoto">
    <a id="modUserPhoto" class="photo">
      <img src="<?php print $img_path;?>">
    </a>
      <input name="avatar" id="modUserPhotoInput" type="hidden" value="">
  </div>
  <div class="inputs">
    <div class="ui-form-item">
      <label class="ui-label"><span class="ui-form-required">*</span>昵称</label>
        <?php print $user->name;?>
    </div>  
    <div class="ui-form-item">
      <label class="ui-label"><span class="ui-form-required">*</span>真实姓名</label>
      朱祖志
      <span class="icon-status pass">已认证</span>
    </div>
    <div class="ui-form-item">
      <label class="ui-label"><span class="ui-form-required">*</span>身份证号</label>
      44**** **** **** ****
      <span class="icon-status pass">已认证</span>
    </div>
    <div class="ui-form-item">
      <label class="ui-label"><span class="ui-form-required">*</span>手机号码</label>
      158 **** 6173
      <span class="icon-status pass">已绑定</span>
    </div>
    <div class="ui-form-item">
      <label class="ui-label"><span class="ui-form-required">*</span>邮箱地址</label>
      <span class="icon-status noauth"><a href="<?php print $base_url;?>/account_management/security">去绑定</a></span>
    </div>
    <div class="ui-form-item">
      <label class="ui-label"><span class="ui-form-required">*</span>性别</label>
      男
    </div>
    <div class="ui-form-item">
      <label class="ui-label"><span class="ui-form-required">*</span>出生日期</label>
      1975-12-08
    </div>
    <div class="ui-form-item">
      <label class="ui-label"><span class="ui-form-required">*</span>最高学历</label>
        <select name="education" id="education">
          <option value="">请选择</option>
        </select>
      </div>
      <div class="ui-form-item">
        <label class="ui-label"><span class="ui-form-required">*</span>婚姻状况</label>
          <em><input type="radio" value="MARRIED" name="marriage"> 已婚</em>
          <em><input type="radio" value="UNMARRIED" name="marriage" checked="checked"> 未婚</em>
          <em><input type="radio" value="DIVORCED" name="marriage"> 离异</em>
          <em><input type="radio" value="WIDOWED" name="marriage"> 丧偶</em>
      </div>
      <div class="ui-form-item">
        <label class="ui-label"><span class="ui-form-required">*</span>所在省份</label>
        <select name="province" id="province" class="valid">
          <option value="">请选择</option>
        </select>
      </div>
      <div class="ui-form-item">
        <label class="ui-label"><span class="ui-form-required">*</span>所在城市</label>
        <select name="city" id="city" class="valid">
          <option value="">请选择</option>
        </select>
      </div>
      <div class="ui-form-item">
        <label class="ui-label"><span class="ui-form-required">*</span>居住地址</label>
        <input class="ui-input w280" type="text" name="address" id="address" value="">
      </div>
      <div class="ui-form-item">
        <input id="savebt" type="submit" class="ui-button ui-button-green ui-button-mid" value="保 存">
      </div>
    </div>
   </form>
</div>