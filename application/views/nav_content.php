	<div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index');?>">首页</a>&nbsp;><a href=""><?php echo $title;?></a>&nbsp;><a href=""><?php echo $title2;?></a></p>
        </div>
        <div id="right_content_detail">
           <h2 align="center"><?php echo $article['title'];?></h2> 
		   <p align="center">发布时间：<?php echo $article['add_time'];?></p> 
           <p><?php echo $article['content'];?></p>
        </div>
    </div>
	<div class="clear"></div>
</div>

