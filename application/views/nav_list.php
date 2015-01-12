	<div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index');?>">首页</a>&nbsp;><a href=""><?php echo $title;?></a>&nbsp;><a href=""><?php echo $title2;?></a></p>
        </div>
        <div id="right_title">
        	<p><?php echo $title2;?></p>
        </div>
        <div id="right_content">
            <ul>
				<?php foreach ($News as $singleNews): ?>
					<li>
                		<span class="content2">
                    		>&nbsp <?php $aid = $singleNews['aid'];?>
                        		<a href="<?php echo base_url('navigcontrol/news?aid='.$aid.'&pid='.$pid.'&tid='.$tid);?>"><?php echo $singleNews['title']?></a>
						</span>
                		<span class="time"><?php echo $singleNews['add_time']?></span>                
					</li>
				<?php endforeach;?>  
            </ul>
            <div id="page" style="text-align:center; font-size:14px;";>
            	&nbsp;<strong>1</strong>&nbsp;<a href="">2</a>
                &nbsp;<a href="">3</a>
                &nbsp;<a href="">下一页</a>
                &nbsp;            
            </div>
        </div>
    </div>
	<div class="clear"></div>
</div>