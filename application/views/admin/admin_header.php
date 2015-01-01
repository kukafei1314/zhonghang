<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Tables</title>

<link href="<?php echo base_url('/static/admin/css/bootstrap-table.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/datepicker3.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/styles.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/admin.css');?>" rel="stylesheet">
<script src="<?php echo base_url('/static/admin/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/chart.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/chart-data.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/easypiechart.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/easypiechart-data.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap-datepicker.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap-table.js');?>"></script>
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
				<a class="navbar-brand" href="#"><span>中航泰达</span>后台管理</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> 用户 <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> 重置密码</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> 退出</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu" id="main_nav">
			<li class="parent">
				<a href="<?php echo base_url('admin/index');?>" id="index">
					<span class="glyphicon glyphicon-dashboard"></span> 公司概况
				</a>
			</li>
			<li class="parent"  id="widgets">
				<a href="<?php echo base_url('admin/widgets');?>">
					<span class="glyphicon glyphicon-list-alt"></span> 动态要闻
					<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right">
						<em class="glyphicon glyphicon-s glyphicon-plus"></em>
					</span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 公司动态
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 图片新闻
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 媒体聚焦
						</a>
					</li>
				</ul>
			</li>
			<li class="parent" id="charts">
				<a href="<?php echo base_url('admin/charts');?>">
					<span class="glyphicon glyphicon-stats"></span> 业务总览
					<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right">
						<em class="glyphicon glyphicon-s glyphicon-plus"></em>
					</span> 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 业务领域
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 水务投资项目
						</a>
					</li>
				</ul>
			</li>
			<li class="parent" id="tables">
				<a href="<?php echo base_url('admin/tables');?>">
					<span class="glyphicon glyphicon-eye-close"></span> 业界观察
					<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right">
						<em class="glyphicon glyphicon-s glyphicon-plus"></em>
					</span> 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 业内动态
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 业务视野
						</a>
					</li>
				</ul>
			</li>
			<li class="parent" id="forms">
				<a href="<?php echo base_url('admin/forms');?>">
					<span class="glyphicon glyphicon-globe"></span> 人力资源
					<span data-toggle="collapse" href="#sub-item-4" class="icon pull-right">
						<em class="glyphicon glyphicon-s glyphicon-plus"></em>
					</span> 
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 人才理念
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 人才现状
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 人才政策
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 招聘信息
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-tree-conifer"></span> 澄清公告
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
		</ul>
	</div><!--/.sidebar-->