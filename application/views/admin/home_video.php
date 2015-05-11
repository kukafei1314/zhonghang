<?php $this->load->view('admin/headerfile'); ?>

	<!--新闻列表页面-->	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a target="_top" href="<?php echo base_url('admin/index');?>"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">首页视频管理</li>
			</ol>
		</div><!--/.row-->
		<form class="form-horizontal" action="<?php echo base_url('admin/home_video/updateVideo');?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">	
                    	<table data-toggle="table" class="upload">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>视频</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <?php foreach ($upload as $singleNews): ?>
            				    <tr>
                                    <td><?php echo $singleNews['id'];?></td>
                                    <td><?php echo $singleNews['video_address'];?></td>
                                    <td>
                                        <div class="action-buttons">
                                  			<a class="trash" onclick="up_button(<?php echo $singleNews['id'];?>)"><span class="glyphicon glyphicon-pencil"></span></a>
                                    	</div>
                                    </td>
                                </tr>
            				<?php endforeach;?>
                        </table>		
					</div>
				</div>
			</div>
		</div><!--/.row-->
        <div id="file_up" style="display:none;">
                <div class="pic_div">
                	<span class="up_word">更改视频：</br><span style="color:red;font-size:6px;">(请填写优酷网站分享中的HTML代码段)</span></span>
                	<span class="up_input"><textarea name="address" rows="5" cols="30"></textarea></span>
                	<div class="cl"></div>
                </div>
                <input type="hidden" id="id" name="id" value="" />
                <div class="col-md-12 widget-right admin-pull-center">
                    <button onclick="return is_empty()" type="submit" class="btn btn-primary">提&nbsp;交</button>
                    <button onclick="return close_button()" class="btn btn-primary">关&nbsp;闭</button>
                </div>
         </div>
         </form>
    </div>	
</body>
<script type="text/javascript">
	function up_button(id) {
		$("#id").val(id);
		$("#file_up").show();
	}
	function close_button() {
		$("#file_up").hide();
		return false;
	}
</script>
</html>
