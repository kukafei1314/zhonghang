<?php $this->load->view('admin/headerfile'); ?>

	<!--新闻列表页面-->	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a target="_top" href="<?php echo base_url('admin/index');?>"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">下载中心</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                         <button onclick="up_button()" class="btn btn-primary my_botton">添加附件</button>
                    </div>
					<div class="panel-body">	
                    	<table data-toggle="table" class="upload">
                            <thead>
                            <tr>
                                <th>文件名</th>
                                <th>发布时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <?php foreach ($upload as $singleNews): ?>
            				    <tr>
                                    <td><a href="<?php echo base_url($singleNews['url']);?>" target="_self">
										<?php echo $singleNews['title'];?></a>
                                    </td>
                                    <td><?php echo date("Y-m-d",$singleNews['add_time']);?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a onclick="return del_alert()" href="<?php echo base_url('admin/upload_file/deleteFile?uid='.$singleNews['uid']);?>" title="删除" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                                    	</div>
                                    </td>
                                </tr>
            				<?php endforeach;?>
                        </table>		
					</div>
					<div class="my_page"><?php echo $page_html;?></div>
				</div>
			</div>
		</div><!--/.row-->
        
        <div id="file_up" style="display:none;">
        	<form class="form-horizontal" action="<?php echo base_url('admin/upload_file/insertFiles');?>" method="post" enctype="multipart/form-data">						
                <span class="up_word">上传附件</span>
                <span class="up_input"><input id="pic1" name="pic" type="file" value="" size="5" /></span>
                <span class="up_word">上传类别</span>
                <span class="up_input">
                	<select name="type_id" id="type">
                    	<option value="27" <?php if($tid==27): echo 'selected=selected'; endif;?>>工作通知</option>
                        <option value="28" <?php if($tid==28): echo 'selected=selected'; endif;?>>说明材料</option>
                        <option value="29" <?php if($tid==29): echo 'selected=selected'; endif;?>>合同文件</option>
                    </select>
                </span>
                <div class="cl"></div>
                <div class="col-md-12 widget-right admin-pull-center">
                    <button onclick="return is_empty()" type="submit" class="btn btn-primary">提&nbsp;交</button>
                    <button onclick="return close_button()" class="btn btn-primary">关&nbsp;闭</button>
                </div>
            </form>
         </div>
    </div>	
</body>
<script type="text/javascript">
    function del_alert(){
    	return confirm('删除操作不可恢复，确定删除么？');
    }
	function up_button(tid) {
		$("#file_up").show();
	}
	function close_button() {
		$("#file_up").hide();
		return false;
	}
</script>
</html>
