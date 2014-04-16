/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {
// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.vali = {
  attach: function(context, settings) {

  	$.validator.addMethod("isMobile", function(value, element) {  
		var length = value.length;
		var mobile = /^1[3458]\d{9}$/;     
		return length == 11 && mobile.exec(value);
 	}, "请正确填写您的手机号码");

	$("#user-register-form").validate({
		rules: {
			name:{
				required: true,
				minlength: 2,
				maxlength: 20,
			},
			phone: {
				required: true,
				isMobile: true,
			},
			"pass[pass1]": {
				required: true,
				minlength: 6
			},
			"pass[pass2]": {
				required: true,
				minlength: 6,
				equalTo: "#edit-pass-pass1"
			},
			captcha_response: {
				required: true,
				minlength: 4,
				maxlength: 4,
			},
			"agree[0]": "required"
		},
		messages: {
			name:{
				required: "2-20位字符，可包含中文，英文，数字和字符\"-\"与\"_\"。注册完成后不可修改",
				minlength: "注册名需包含至少两个字符"
			},
			phone: {
				required: "请填入11位手机号",
				minlength: "手机号太短",
				maxlength: "手机号太长",
				isMobile: "请输入正确的手机号"
			},
			"pass[pass1]": {
				required: "密码须为6-16位英文字母、数字和符号(不包括空格)",
				minlength: "密码至少为6个字符",
			},
			"pass[pass2]": {
				required: "请重复输入密码",
				minlength: "密码至少为6个字符",
				equalTo: "请输入相同的密码"
			},
			captcha_response: {
				required: "请输入4位验证码",
				minlength: "请输入4位验证码",
				maxlength: "请输入4位验证码",
			},
			"agree[0]": "请同意我们的条款"
		}
	});
  }
};
})(jQuery, Drupal, this, this.document);