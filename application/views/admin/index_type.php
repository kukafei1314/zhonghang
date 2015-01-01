<?php $this->load->view('admin/admin_header'); ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">类别管理</li>
			</ol>
		</div><!--/.row-->
						
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading left">类别管理</div>
					<div class="add_a">
						<a href="<?php echo base_url('/admin/article_type/add_v');?>">添加类别</a>
					</div>
					<div class="cl"></div>
					<div class="panel-body">
						<table data-toggle="table">
						    <thead>
						    <tr>
						        <th>类型ID</th>
						        <th>类型名称</th>
						        <th>操作</th>
						    </tr>
						    </thead>
						    <?php foreach ($types as $type): ?>
						    <tr>
						    	<td><?php echo $type['tid']?></td>
						    	<td><?php if($type['level'] == 2) echo '|——';if($type['level']==3) echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|——'?><?php echo $type['name']?></td>
						    	<td class="edit_type">
						    		<a href="<?php echo base_url('/admin/article_type/edit_v?tid='.$type['tid']);?>" class="glyphicon glyphicon-pencil"></a>
						    		<a href="<?php echo base_url('/admin/article_type/del?tid='.$type['tid']);?>" class="glyphicon glyphicon-trash"></a>
						    	</td>
						    </tr>
						    <?php endforeach;?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
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
