	<div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index');?>">首页</a>&nbsp;><a href=""><?php echo $title;?></a>&nbsp;><a href=""><?php echo $title2;?></a></p>
        </div>
        <div id="right_title">
        	<p><?php echo $title2;?></p>
        </div>
        <div id="right_content">
            <ul>
            	<li class="joblist_top" style="background:#99D1FF; ">
            		<span class="title_job" style="padding-left: 5%; width:30%;">职位名称</span>
            		<span class="address_job">工作地点</span>
            		<span class="number_job">招聘人数</span>
                	<span class="time_job" style="color:#000;">发布时间</span>
            	</li>
				<?php foreach ($News as $news): ?>
					<li>
                		<span class="title_job">
                    		>&nbsp
                    		<a href="<?php echo base_url('navigcontrol/news?aid='. $news['aid'].'&tid='.$tid);?>"><?php echo $news['title']?></a>
						</span>
						<span class="address_job"><?php echo $news['address'];?></span>
						<span class="number_job"><?php echo $news['number'];?></span>  
                		<span class="time_job"><?php echo date('Y-m-d',$news['add_time']);?></span>                
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