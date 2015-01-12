<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>


<link href="<?php echo base_url('/static/admin/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/styles.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/login.css');?>" rel="stylesheet">
<script src="<?php //echo base_url('/static/admin/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?php //echo base_url('/static/admin/js/check_login.js');?>"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default my_login" >
				<div class="panel-heading" style = "text-align:center; font-family:微软雅黑; font-size:25px;">更改密码</div>
				<div class="panel-body">
					<div class="login_error" style="color:red; font-size:8px;"><?php echo $error;?></div>		
				    <?php echo form_open('d=admin&c=login&m=change_password');?>
						<fieldset>
				
							<div class="form-group">
								<input class="form-control" placeholder="更改后密码" name="re_password" type="password" value="" id="password">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="确认更改后密码" name="re_con_password" type="password" value="" id="password">
							</div>
							
							
							<div class="captchaDiv">
								<input name="usercheck" type="text" id="usercheck" placeholder="验证码" class = "form-control"
								size="7" style="width:30%;display:inline-block;"/> 
								<img class="captcha" style ="margin-left:20px;" src="index.php?d=admin&c=login&m=captcha"/>
								<!--<img class="captcha"src="login/captcha"/>-->
							</div>

							<!--<a href="index.html" class="btn btn-primary">Login</a> -->
                            <button onclick="return check_right()" type="submit" class="login_submit" value="" style="	background:#309cfe; border:none; border-radius:5px; color:#FFFFFF; width:20%; height:30px; font-family:微软雅黑;font-size:16px;margin-left:40%;" >确&nbsp认
                            </button>
                            <div id="div" style="display:none;"></div>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
