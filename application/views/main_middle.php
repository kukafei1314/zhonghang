	<div id="home_content">
		<div class="content_left">
			<div class="content_title">
				<div class="title_left">
					<div class="title_img"><img src="<?php echo base_url('static/image/title1.jpg')?>"></img></div>
					<div class="title_font">图片新闻</div>
					<div class="cl"></div>
				</div>
				<div class="title_right">
					<a href="<?php echo base_url('navigcontrol/?tid=9');?>">查看更多></a>
				</div>
				<div class="cl"></div>
			</div>
			<div class="focus">
				<div id="pic_news">
					<ul>
					<?php foreach ($pic_news as $row):?>
						<li><a href="<?php echo base_url('navigcontrol/news?aid='. $row['aid'].'&tid=9');?>"><img width="250" height="180" src="<?php echo base_url($row['path'])?>" /></a></li>
					<?php endforeach;?>
					</ul>
				</div>
				<div id="word">
					<ul>
					<?php foreach ($pic_news as $row):?>
						<li><?php echo $row['title'];?></li>
					<?php endforeach;?>
					</ul>
				</div>
				<div id="tip">
					<ul>
						<li id="smallimg_1" onclick="change(1)" class="current"></li>
						<li id="smallimg_2" onclick="change(2)"></li>
						<li id="smallimg_3" onclick="change(3)"></li>
						<li id="smallimg_4" onclick="change(4)"></li>
					</ul>
				</div>
			</div>
			<div class="cl"></div>
			
		</div>
		<div class="content_middle">
			<div class="content_title">
				<div class="title_left" style="padding-left:5%;">
					<div class="title_img"><img src="<?php echo base_url('static/image/title1.jpg')?>"></img></div>
					<div class="title_font">行业动态</div>
					<div class="cl"></div>
				</div>
				<div class="title_right" style="padding-right:5%;">
					<a href="<?php echo base_url('navigcontrol/?tid=11');?>">查看更多></a>
				</div>
				<div class="cl"></div>
			</div>
            <div class="middle_border">
			<div class="middle_list">
				<ul>
				<?php foreach ($active_news as $news): ?>
					<li class="news_list">
						<div class="news_middle_title">
                        	<a href="<?php echo base_url('navigcontrol/news?aid='. $news['aid'].'&tid=13');?>"><?php echo $news['title'];?></a>
                        </div>
						<div class="news_time"><?php echo date('Y-m-d',$news['add_time']);?></div>
						<div class="cl"></div>
					</li>
				<?php endforeach;?>
				</ul>
			</div>
            </div>
		</div>
        
		<div class="content_right">
			<div class="content_title">
				<div class="title_left">
					<div class="title_img"><img src="<?php echo base_url('static/image/title1.jpg')?>"></img></div>
					<div class="title_font">公司告示</div>
					<div class="cl"></div>
				</div>
				<div class="title_right">
					<a href="<?php echo base_url('navigcontrol/?tid=1');?>">查看更多></a>
				</div>
				<div class="cl"></div>
			</div>
			<div class="middle_list">
				<ul>
				<?php foreach ($notice as $row):?>
					<li class="news_list">
						<div class="news_right_title">
                        	<a href="<?php echo base_url('navigcontrol/news?aid='. $row['aid'].'&tid=7');?>"><?php echo $row['title'];?></a>
                        </div>
					</li>
				<?php endforeach;?>
				</ul>
			</div>
		</div>
		<div class="cl"></div>
	</div>
<HR width="99%" color=#eaeaea SIZE=2>

     
    