<?php $this->load->view('admin/headerfile'); ?>

	<!--新闻列表页面-->	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a target="_top" href="<?php echo base_url('admin/index');?>"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><?php echo $name;?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <form role="search" class="my_search" action="<?php echo base_url('admin/subtitle/searchNews?pid='.$pid.'&tid='.$tid);?>" method="post">
                            <div class="form-group">
                                
                            </div>
                        </form>                        
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
                                    <td><?php echo date("Y-m-d",$singleNews['add_time']);?></td>
                                    <td><?php echo $singleNews['username']?></td>
                                    <td>
                                        <?php $aid = $singleNews['aid'];?>
                                        <div class="action-buttons">
                                            <a href="<?php echo base_url('admin/subtitle/editNews?aid='.$aid.'&pid='.$pid.'&tid='.$tid);?>" title="编辑" target="main"><span class="glyphicon glyphicon-pencil"></span></a>
                                            <a href="<?php echo base_url('navigcontrol/news?aid='.$aid.'&tid='.$tid);?>" class="flag" title="查看" target="_blank"><span class="glyphicon glyphicon-file"></span></a>
                                            
                                    	</div>
                                    </td>
                                </tr>
            				<?php endforeach;?>
                        </table>		
					</div>
					<div class="my_page"><?php echo $this->pagination->create_links()?></div>
				</div>
			</div>
		</div><!--/.row-->
    </div>	
</body>
<script type="text/javascript">
    function del_alert(){
    	return confirm('删除操作不可恢复，确定删除么？');
    }
</script>
</html>
