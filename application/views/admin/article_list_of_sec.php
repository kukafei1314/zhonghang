<?php $this->load->view('admin/headerfile'); ?>

	<!--新闻列表页面-->	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('admin/index');?>"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><?php echo $name;?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <form role="search" class="my_search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="请输入关键字搜索">
                            </div>
                        </form>
                         <button onclick="{location.href='index.php?d=admin&c=subtitle&m=addNews&pid='+<?php echo $pid;?>+'&tid='+<?php echo $tid;?>}" target="main" type="submit" class="btn btn-primary my_botton">添加文章</button>
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
                <?php foreach ($News as $singleNews): ?>
				    <tr>
                        <td><?php echo $singleNews['title']?></td>
                        <td><?php echo $singleNews['add_time']?></td>
                        <td><?php echo $singleNews['username']?></td>
                        <td>
                            <?php $aid = $singleNews['aid'];?>
                            <div class="action-buttons">
                                <a href="<?php echo base_url('admin/subtitle/editNews?aid='.$aid.'&pid='.$pid.'&tid='.$tid);?>" title="编辑" target="main"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="#" class="flag" title="查看"><span class="glyphicon glyphicon-file"></span></a>
                                <a onclick="return del_alert()" href="<?php echo base_url('admin/subtitle/deleteNews?aid='.$aid.'&pid='.$pid.'&tid='.$tid);?>" title="删除" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                        	</div>
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
