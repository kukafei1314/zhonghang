<?php $this->load->view('admin/headerfile'); ?>
	<!--新闻列表页面-->	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('admin/index');?>"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">公司概况</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <button onclick="{location.href='index.php?d=admin&c=about&m=add_new'}" target="main" type="submit" class="btn btn-primary my_botton">添加文章</button>

                    </div>
					<div class="panel-body">	
        	
        	<table data-toggle="table" class="my_table">
                <thead>
                <tr>
                    <th>标题</th>
                    <th>发布时间</th>
                    <th>发布人</th>
                    <th>操作</th>
                </tr>
                </thead>
				<?php foreach ($about as $about): ?>
					<tr>
						<td><?php echo $about['title']; ?></td>
						<td><?php echo $about['add_date']; ?></td>
						<td><?php echo $about['add_user']; ?></td>
						<td>
						    <a href="<?php echo base_url('admin/about/edit_new?aid='.$about['aid']);?>"  title="编辑" target="main"><span class="glyphicon glyphicon-pencil"></span></a>
							<a href="<?php echo base_url('about/?aid=' . $about['aid']); ?>"  title="查看" target="_blank"><span class="glyphicon glyphicon-file"></span></a>
							<a onclick="return del_alert()" href="index.php?d=admin&c=about&m=del&aid=<?php echo $about['aid']; ?>" title="删除" ><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
			  <?php endforeach;?>
            </table>		
					</div>
				</div>
			</div>
		</div><!--/.row-->
    </div>	
	</div>
</body>
<script>
    function del_alert(){
    	return confirm('删除操作不可恢复，确定删除么？');
    }
</script>
</html>
