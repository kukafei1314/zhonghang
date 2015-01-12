<?php $this->load->view('second_header');?>
	<div id="home_content">
		<div class="search_content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
            	<tr class="table_header">
            		<td width="40%" class="fist_td">标题</td>
            		<td width="30%">类别</td>
            		<td>发布时间</td>
            	</tr>
            	<?php foreach ($News as $row):?>
            	<tr>
            		<?php if (empty($keyword)):?>
            		<td class="fist_td"><a href="<?php echo base_url('navigcontrol/news?aid='. $row['aid'].'&tid='.$row['type']);?>"><?php echo $row['title'];?></a></td>
            		<?php else:?>
            		<td class="fist_td">
	            		<a href="<?php echo base_url('navigcontrol/news?aid='. $row['aid'].'&tid='.$row['type']);?>">
	            			<?php echo str_replace($keyword, '<font color="red">' . $keyword . '</font>', $row['title']);?>
	            		</a>
            		</td>
            		<?php endif;?>
            		<td><?php echo $row['type_name1'];?>/<?php echo $row['type_name2'];?></td>
            		<td><?php echo $row['add_time'];?></td>
            	</tr>
            	<?php endforeach;?>            
            </table>
            <div id="page" style="text-align:center; font-size:14px;";>
            	<?php echo $page_html;?>           
            </div>
        </div>
	</div>
<HR width="99%" color=#eaeaea SIZE=2>

     
    

<?php  $this->load->view('main_bottom'); $this->load->view('footer');?>
