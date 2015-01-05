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

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default" >
				<div class="panel-heading" style = "text-align:left; font-family:微软雅黑; font-size:25px;">管理员登录</div>
				<div class="panel-body">
							
				    <?php 
					
						echo form_open('d=admin&c=login&m=login_admin');
						//echo form_open('admin/login/login_admin');
					?>
				
					<!--<form role="form"> -->
						<fieldset>
							<div class="login_error" style = "color:red; font-size:12px; height:15px; margin-left:40px;"><?php echo $error;?></div>
							<div class="form-group">
								<input class="form-control"  placeholder="请输入用户名" name="email" type="email" autofocus="" value = ""> 
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="请输入密码" name="password" type="password" value="">
							</div>
							<div class="captchaDiv">
								<input name="usercheck" type="text" id="usercheck" placeholder="验证码" class = "form-control"
								size="7" style="width:20%; float:left;"/> 
								<img class="captcha" style ="clear:both; margin-left:50px; margin-top:4px;" src="index.php?d=admin&c=login&m=captcha"/>
								<!--<img class="captcha"src="login/captcha"/>-->
								
							</div>
							<div class="checkbox" style = " font-size:12px; line-height:20px;">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">一周内不再提示
								</label>
							</div>
							<!--<a href="index.html" class="btn btn-primary">Login</a> -->
							<button type="submit" class="login_submit" value="" style="background:#309cfe; border:none; border-radius:5px; color:#FFFFFF; width:25%; height:30px; float:left; font-family:微软雅黑; font-size:16px;">登&nbsp&nbsp录</button>

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
