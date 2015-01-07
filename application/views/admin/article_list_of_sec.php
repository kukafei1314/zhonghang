<?php //$this->load->view('admin/admin_header'); ?>
<link href="<?php echo base_url('/static/admin/css/bootstrap-table.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/datepicker3.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/styles.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/static/admin/css/admin.css');?>" rel="stylesheet">
<script src="<?php echo base_url('/static/admin/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/chart.min.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/chart-data.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/easypiechart.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/easypiechart-data.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap-datepicker.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/bootstrap-table.js');?>"></script>
<script src="<?php echo base_url('/static/admin/js/admin.js');?>"></script>
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
                        <a href="<?php echo base_url('admin/subtitle/addNews?pid='.$pid.'&tid='.$tid);?>"><button type="submit" class="btn btn-primary my_botton">添加文章</button></a>
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
                                <a href="<?php echo base_url('admin/subtitle/editNews?aid='.$aid.'&pid='.$pid.'&tid='.$tid);?>" title="编辑"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="#" class="flag" title="查看"><span class="glyphicon glyphicon-file"></span></a>
                                <a href="<?php echo base_url('admin/subtitle/deleteNews?aid='.$aid.'&pid='.$pid.'&tid='.$tid);?>" title="删除" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
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
    	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
