	<div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index');?>">首页</a>&nbsp;><a href=""><?php echo $title;?></a>&nbsp;><a href=""><?php echo $title2;?></a></p>
        </div>
        <div id="right_content_detail">
           <div class="article_title"><?php echo $article['title'];?></div> 
		   <div class="article_time">发布时间：<?php echo date("Y-m-d",$article['add_time']);?></div> 
           <p><?php echo $article['content'];?></p>
        </div>
    </div>
	<div class="clear"></div>
</div>

