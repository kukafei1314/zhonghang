	<div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index');?>">首页</a>&nbsp;><a href=""><?php echo $title;?></a>&nbsp;><a href=""><?php echo $title2;?></a></p>
        </div>
        <div id="right_content_detail">
           <div class="article_title"><?php echo $article['title'];?></div> 
		   <div class="job_content_time">工作地点：<?php echo $article['number'];?></div>
		   <div class="job_content_time">招聘人数：<?php echo $article['address'];?></div>
		   <div class="job_content_time">发布时间：<?php echo date("Y-m-d",$article['add_time']);?></div>
           <div class="article_content"><?php echo $article['content'];?></div>
        </div>
    </div>
	<div class="clear"></div>
</div>

