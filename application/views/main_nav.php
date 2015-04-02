<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  media="screen and (min-device-width:900px)" href="<?php echo base_url('static/css/home.css'); ?>"/>
<link rel="stylesheet"  media="screen and (min-device-width:900px)" href="<?php echo base_url('static/css/home_middle.css'); ?>"/>
<link rel="stylesheet" media="screen and (max-device-width:900px)" href="<?php echo base_url('static/css/small.css'); ?>" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('static/js/jquery-1.8.0.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/js/pic.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/js/home.js'); ?>"></script>
<title>中航泰达</title>
</head>
<body>
<div id="pic">
	<?php $pic_num = count($pic); ?>
    <?php for ($i = 1; $i <= $pic_num; ++$i): ?>
	<div id="pic<?php echo $i;?>" style="background: #FFF url(<?php echo base_url($pic[$i-1]['url']);?>) no-repeat center center;"></div>
    <?php endfor; ?>
    <div id="tip_top">
		<ul>
    		<?php for ($i = 1; $i <= $pic_num; ++$i): ?>
			<li id="fading_<?php echo $i;?>" onclick="fadetop(<?php echo $i;?>)" <?php if ($i == 1) :?> class="fading_top" <?php endif; ?>></li>
			<?php endfor; ?>
		</ul>
	</div>
</div>
	<div class="top">
		<div class="top_title">
		    <a href="<?php echo base_url('index');?>">
				<img src="<?php echo base_url('static/image/logo.png'); ?>" width="170" height="45" class="top_logo" />
			</a>
            <div class="top_nav">
            	<ul>
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
        <div class="top_small_nav" style="margin-top:250px;">
            <a href="<?php echo base_url('about?aid=1');?>">公司概况</a>
            <a href="<?php echo base_url('navigcontrol/?tid=8');?>">新闻动态</a>
            <a href="<?php echo base_url('navigcontrol/?tid=11');?>">业务介绍</a>  	
            <div class="cl"></div>
        </div>
        <div class="top_bottom">
        	<a class="top_bottom1" href="<?php echo base_url('about?aid=7');?>">
            	<div class="top_word1">企业文化</div>
                <div class="top_word2">Corporate Culture</div>
            </a>
            <a class="top_bottom2" href="<?php echo base_url('navigcontrol/?tid=12');?>">
            	<div class="top_word1">典型案例</div>
                <div class="top_word2">Typical Case</div>
            </a>
            <div class="cl"></div>
        </div>
        <div class="top_small_nav">
        	<a href="<?php echo base_url('navigcontrol/?tid=4');?>">专利技术</a>
            <a href="<?php echo base_url('navigcontrol/?tid=15');?>">人力资源</a>
            <a href="<?php echo base_url('navigcontrol/?tid=27');?>">下载中心</a>
            <div class="cl"></div>
        </div>
	</div>