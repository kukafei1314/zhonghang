<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen and (min-width:900px)" href="<?php echo base_url('static/css/home.css'); ?>"/>
<link rel="stylesheet" media="screen and (min-width:900px)" href="<?php echo base_url('static/css/navigationCss.css'); ?>"/>
<link rel="stylesheet" media="screen and (min-width:900px)" href="<?php echo base_url('static/css/home_middle.css'); ?>"/>
<link rel="stylesheet" media="screen and (min-width:900px)" href="<?php echo base_url('static/css/nav_content.css'); ?>"/>
<link rel="stylesheet" media="screen and (max-width:900px)" href="<?php echo base_url('static/css/small_second.css'); ?>" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('static/js/respond.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/js/jquery-1.8.0.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/js/home.js'); ?>"></script>
<title>中航泰达</title>
</head>
<body>
	<div class="top_second">
		<div class="top_title">
			<a href="<?php echo base_url('index');?>" class="img_second_top">
				<img src="<?php echo base_url('/static/image/logo.png');?>" width="170" height="45" class="top_logo"/>
			</a>
            <a id="popmenu"><?php echo $title;?></a>
            <a id="top_nav_out"></a>
            <a id="top_home" href="<?php echo base_url("index");?>"></a>
            <div class="hide_div" id="top_nav">
            	<ul class="top_ul">
                    <li>
                     	<a href="<?php echo base_url('about?aid=1');?>">公司概况</a>
                    </li>
                    <li>
                    	<a href="<?php echo base_url('navigcontrol/?tid=8');?>">新闻动态</a>
                    </li>
                    <li>
                    	<a href="<?php echo base_url('navigcontrol/?tid=11');?>">业务介绍</a>
                    </li>
                    <li>
                    	<a  href="<?php echo base_url('navigcontrol/?tid=4');?>">专利技术</a>
                    </li>
                    <li>
                    	<a  href="<?php echo base_url('navigcontrol/?tid=15');?>">人力资源</a>
                    </li>
                    <li>
                    	<a  href="<?php echo base_url('navigcontrol/?tid=27');?>">下载中心</a>
                    </li>
                    <div class="cl"></div>
                </ul>
            </div>
            <div class="top_phone">
				<img src="<?php echo base_url('static/image/top_phone.png'); ?>" alt="" class ="top_phone_pic">
				<div class="top_phone_num">010-64689035</div>
            </div>
            <div class="cl"></div>
		</div>
        <div style="background:url(../../static/image/top_second.png) no-repeat center center; height:280px;"></div>
	</div>