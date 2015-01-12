<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>中航泰达后台管理</title>

<link href="<?php echo base_url('/static/admin/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/styles.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/admin.css');?>" rel="stylesheet">
<script src="<?php echo base_url('/static/admin/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/admin.js');?>"></script>

<!--[if lt IE 9]>
<script src="<?php echo base_url('/static/admin/js/html5shiv.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/respond.min.js');?>"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href=""><span>中航泰达</span>后台管理</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> <?php echo $username;?> 
                            <span class="caret"></span>
                        </a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="index.php?d=admin&c=login&m=login_change_password"><span class="glyphicon glyphicon-cog"></span> 重置密码</a></li>
							<li><a href="index.php?d=admin&c=login&m=logout"><span class="loginOut"></span> 退出</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu" id="main_nav">
			<li class="parent">
				<a href="<?php echo base_url('admin/about');?>" id="parent_1" onclick="parent_hold(1)" target="main">
					<span class="glyphicon glyphicon-dashboard"></span> 公司概况
				</a>
			</li>
			<li class="parent"  id="widgets">
				<a href="">
					<span class="glyphicon glyphicon-list-alt"></span> 新闻动态
					<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right">
						<em class="glyphicon glyphicon-s glyphicon-plus parent_none"></em>
					</span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a id = "child_1" onclick="child_hold(1)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=2&tid=8');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 公司动态
						</a>
					</li>
					<li>
						<a id = "child_2" onclick="child_hold(2)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=2&tid=9');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 图片新闻
						</a>
					</li>
					<li>
						<a id = "child_3" onclick="child_hold(3)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=2&tid=10');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 媒体聚焦
						</a>
					</li>
				</ul>
			</li>
			<li class="parent" id="charts">
				<a href="">
					<span class="glyphicon glyphicon-stats"></span> 业绩案例
					<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right">
						<em class="glyphicon glyphicon-s glyphicon-plus parent_none"></em>
					</span> 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a id = "child_4" onclick="child_hold(4)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=3&tid=11');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 业务领域
						</a>
					</li>
					<li>
						<a id = "child_5" onclick="child_hold(5)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=3&tid=12');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 水务投资项目
						</a>
					</li>
					<li>
						<a id = "child_6" onclick="child_hold(6)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=3&tid=13');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 行业动态
						</a>
					</li>
					<li>
						<a id = "child_7" onclick="child_hold(7)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=3&tid=14');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 业务视野
						</a>
					</li>
				</ul>
			</li>
			<li class="parent" id="tables">
				<a id="parent_2" onclick="parent_hold(2)" href="<?php echo base_url('admin/subtitle/listNews?pid=0&tid=4');?>" target="main">
					<span class="glyphicon glyphicon-eye-close"></span> 研发中心
				</a>
			</li>
			<li class="parent" id="forms">
				<a>
					<span class="glyphicon glyphicon-globe"></span> 人力资源
					<span data-toggle="collapse" href="#sub-item-4" class="icon pull-right">
						<em class="glyphicon glyphicon-s glyphicon-plus parent_none"></em>
					</span> 
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li>
						<a id = "child_8" onclick="child_hold(8)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=5&tid=15');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 人才理念
						</a>
					</li>
					<li>
						<a id = "child_9" onclick="child_hold(9)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=5&tid=16');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 人才现状
						</a>
					</li>
					<li>
						<a id = "child_10" onclick="child_hold(10)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=5&tid=17');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 人才政策
						</a>
					</li>
					<li>
						<a id = "child_11" onclick="child_hold(11)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=5&tid=18');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 招聘信息
						</a>
					</li>
					<li>
						<a id = "child_12" onclick="child_hold(12)" class="" href="<?php echo base_url('admin/subtitle/listNews?pid=5&tid=19');?>" target="main">
							<span class="glyphicon glyphicon-tree-conifer"></span> 澄清公告
						</a>
					</li>
				</ul>
			</li>
			<li class="parent" id="tables">
				<a id="parent_3" onclick="parent_hold(3)" href="<?php echo base_url('admin/subtitle/listNews?pid=0&tid=6');?>" target="main">
					<span class="glyphicon glyphicon-download-alt"></span> 下载中心
				</a>
			</li>
			<li class="parent" id="tables">
				<a id="parent_4" onclick="parent_hold(4)" href="<?php echo base_url('admin/subtitle/listNews?pid=0&tid=7');?>" target="main">
					<span class="glyphicon glyphicon-comment"></span> 公司公告
				</a>
			</li>
			<li role="presentation" class="divider"></li>
<!--		
            <li>
				<a href="<?php echo base_url('admin/article_type');?>" id="index" target="main">
					<span class="glyphicon glyphicon-th-large"></span> 类别管理
				</a>
			</li>
-->
		</ul>
	</div><!--/.sidebar-->
    <div id="mainframe">
		<iframe frameborder="0" id="main" name="main" style="HEIGHT:100%;VISIBILITY: inherit; WIDTH: 83%; Z-INDEX: 1;" target="main"></iframe>
	</div>
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