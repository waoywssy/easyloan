(function ($) {
  // All your code here
  $("#user-register-form").validate({
		rules: {
			phone:"required"/*{
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
			phone:{
				required: "Hello",
				minlength: "Name"
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
})(jQuery);