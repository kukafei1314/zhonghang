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
        url: "/admin/login/ajax_check",      
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
var username_empty = "<div style='width:80%;height:100px;background:url(../../../static/image/error.png) no-repeat;position:absolute;top:115px;left:58%;padding:23px 10px 0 45px;'>请输入用户名</div>";
var username_error = "<div style='width:80%;height:100px;background:url(../../../static/image/error.png) no-repeat;position:absolute;top:115px;left:58%;padding:23px 10px 0 45px;'>用户名不存在</div>";
var pass_empty = "<div style='width:80%;height:100px;background:url(../../../static/image/error.png) no-repeat;position:absolute;top:165px;left:58%;padding:23px 10px 0 45px;'>请输入密码</div>";
var pass_error = "<div style='width:80%;height:100px;background:url(../../../static/image/error.png) no-repeat;position:absolute;top:165px;left:58%;padding:23px 10px 0 45px;'>用户名或密码错误</div>";
var check_empty = "<div style='width:80%;height:100px;background:url(../../../static/image/error.png) no-repeat;position:absolute;top:215px;left:9%;padding:23px 10px 0 45px;z-index:10;'>请输入验证码</div>";
var check_error = "<div style='width:80%;height:100px;background:url(../../../static/image/error.png) no-repeat;position:absolute;top:215px;left:9%;padding:23px 10px 0 45px;z-index:10;'>验证码输入错误</div>";