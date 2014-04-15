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
Drupal.behaviors.reg = {
  attach: function(context, settings) {

		  // All your code here
		  $("#user-register-form").validate({
				rules: {
					edit-phone:"required"/*{
						required: true,
						minlength: 2,
					},
					phone: {
						required: true,
						minlength: 11,
						maxlength: 11
					},
					password: {
						required: true,
						minlength: 6
					},
					confirm_password: {
						required: true,
						minlength: 6,
						equalTo: "#password"
					},
					agree: "required"*/
				},
				messages:{
					edit-phone:{
						required: "Hello",
						minlength: "Name",
					},
				}
				/*
				messages: {
					nickName: {
						required: "2-20位字符，可包含中文，英文，数字和字符\"-\"与\"_\"。注册完成后不可修改",
						minlength: "注册名需包含至少两个字符"
					},
					phone: {
						required: "请填入11位数字",
						minlength: "请正确填入手机号码",
						minlength: "请正确填入手机号码",
					},
					password: {
						required: "密码须为6-16位英文字母、数字和符号(不包括空格)",
						minlength: "密码至少为6个字符",
					},
					confirm_password: {
						required: "请重复输入密码",
						minlength: "密码至少为6个字符",
						equalTo: "请重复输入密码"
					},
					agree: "请同意我们的条款"
				}*/
			});
  }
};
})(jQuery, Drupal, this, this.document);