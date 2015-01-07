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
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
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
                        <button onclick="{location.href='index.php?d=admin&c=about&m=add_new'}" type="submit" class="btn btn-primary my_botton">添加文章</button>

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
							<a href="<?php echo base_url('about/?aid=' . $about['aid']); ?>" target="_blank">查看</a>
							<a href="index.php?d=admin&c=about&m=edit_new&aid=<?php echo $about['aid']; ?>">编辑</a>
							<a onclick="return del_alert()" href="index.php?d=admin&c=about&m=del&aid=<?php echo $about['aid']; ?>">删除</a>
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
