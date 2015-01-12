	<div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index');?>">首页</a>&nbsp;><a href=""><?php echo $title;?></a>&nbsp;><a href=""><?php echo $title2;?></a></p>
        </div>
        <div id="right_title">
        	<p><?php echo $title2;?></p>
        </div>
        <div id="right_content">
            <ul>
				<?php foreach ($News as $news): ?>
					<li>
                		<span class="content2">
                    		>&nbsp
                        	<a href="<?php echo base_url('navigcontrol/news?aid='. $news['aid'].'&tid='.$tid);?>"><?php echo $news['title']?></a>
						</span>
                		<span class="time"><?php echo date('Y-m-d',$news['add_time']);?></span>                
					</li>
				<?php endforeach;?>  
            </ul>
            <div id="page" style="text-align:center; font-size:14px;";>
            	<?php echo $page_html;?>             
            </div>
        </div>
    </div>
	<div class="clear"></div>
</div>