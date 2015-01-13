function check_right() {
	var username  = $('#username').val();
	var password  = $('#password').val();
	var usercheck = $('#usercheck').val();
	var error = 0;
	if(username == '') {
		$("#div").empty();
		$("#div").append(username_empty);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 1000);
		return false;
	}
	if(password == '') {
		$("#div").empty();
		$("#div").append(pass_empty);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 1000);
		return false;
	}
	if(usercheck == '') {
		$("#div").empty();
		$("#div").append(check_empty);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 1000);
		return false;
	}
	$.ajax({  
        type: "POST", 
		async: false,     
        url: "admin/login/ajax_check",      
        data: {username:username,password:password,usercheck:usercheck},
        success: function(data){
			if(data == "1") {
				$("#div").empty();
				$("#div").append(check_error);
				$("#div").show()
				 setTimeout(function () {
        		$("#div").hide();}, 1000);
				error = 1;
			} else if(data == "2") {
				$("#div").empty();
				$("#div").append(username_error);
				$("#div").show()
				 setTimeout(function () {
        		$("#div").hide();}, 1000);
				error = 1;
			} else if(data == "3") {
				$("#div").empty();
				$("#div").append(pass_error);
				$("#div").show()
				 setTimeout(function () {
        		$("#div").hide();}, 1000);
				error = 1;
			}
        }            
    }); 
	if(error == 1) {
		return false;
	}
}

function check_repw_right() {
	var old_password  = $('#old_password').val();
	var new_password  = $('#new_password').val();
	var re_new_password = $('#re_new_password').val();
	var error = 0;
	if(old_password == '') {
		$("#div").empty();
		$("#div").append(oldpass_empty);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 100000);
		return false;
	}
	if(new_password == '') {
		$("#div").empty();
		$("#div").append(newpass_empty);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 100000);
		return false;
	}
	if(re_new_password == '') {
		$("#div").empty();
		$("#div").append(renewpass_empty);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 100000);
		return false;
	}
	
	if(re_new_password != new_password) {
		$("#div").empty();
		$("#div").append(newpass_error);
		$("#div").show()
		 setTimeout(function () {
        	$("#div").hide();}, 100000);
		return false;
	}
	$.ajax({  
        type: "POST", 
		async: false,     
        url: "login/change_password",      
        data: {old_password:old_password,new_password:new_password},
        success: function(data){
			if(data == "false") {
				$("#div").empty();
				$("#div").append(oldpass_error);
				$("#div").show()
				 setTimeout(function () {
        		$("#div").hide();}, 100000);
				error = 1;
			} else if(data == "true") {
				$("#div").empty();
				$("#div").append(repass_right);
				$("#div").show()
				 setTimeout(function () {
        		$("#div").hide();}, 1000);
			}
        }            
    }); 
	if(error == 1) {
		return false;
	}
}

var username_empty = "<div class='check_all user'>请输入用户名</div>";
var username_error = "<div class='check_all user'>用户名不存在</div>";
var pass_empty = "<div class='check_all pass'>请输入密码</div>";
var pass_error = "<div class='check_all pass'>用户名或密码错误</div>";
var check_empty = "<div class='check_all check'>请输入验证码</div>";
var check_error = "<div class='check_all check'>验证码输入错误</div>";
var oldpass_empty = "<div class='check_all check2'>请输入原始密码</div>";
var newpass_empty = "<div class='check_all check3'>请输入新密码</div>";
var renewpass_empty = "<div class='check_all check4'>请输入确认的新密码</div>";
var newpass_error = "<div class='check_all check4'>两次输入的新密码不一致</div>";
var oldpass_error = "<div class='check_all check2'>原始密码错误</div>";
var repass_right = "<div class='check_all check2'>重置密码成功</div>";

