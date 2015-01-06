<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>


<link href="<?php echo base_url('/static/admin/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/datepicker3.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/styles.css');?>" rel="stylesheet">

<script src="<?php echo base_url('/static/admin/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/chart.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/chart-data.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/easypiechart.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/easypiechart-data.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap-datepicker.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/check_login.js');?>"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default" >
				<div class="panel-heading" style = "text-align:center; font-family:微软雅黑; font-size:25px;">管理员登录</div>
				<div class="panel-body">
							
				    <?php echo form_open('d=admin&c=login&m=login_admin');?>
						<fieldset>
							<div class="form-group">
								<input class="form-control"  placeholder="请输入用户名" name="email" value = "" id="username">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="请输入密码" name="password" type="password" value="" id="password">
							</div>
							<div class="captchaDiv">
								<input name="usercheck" type="text" id="usercheck" placeholder="验证码" class = "form-control"
								size="7" style="width:30%;display:inline-block;"/> 
								<img class="captcha" style ="margin-left:20px;" src="index.php?d=admin&c=login&m=captcha"/>
								<!--<img class="captcha"src="login/captcha"/>-->
							</div>
							<div class="checkbox" style = "font-size:12px; line-height:20px; margin-left:10px; margin-top:20px;">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">一周内不再提示
								</label>
							</div>
							<!--<a href="index.html" class="btn btn-primary">Login</a> -->
                            <button onclick="return check_right()" type="submit" class="login_submit" value="" style="	background:#309cfe; border:none; border-radius:5px; color:#FFFFFF; width:20%; height:30px; font-family:微软雅黑;font-size:16px;margin-left:40%;" >登&nbsp录
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
