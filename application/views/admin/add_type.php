<?php $this->load->view('admin/admin_header'); ?>
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">类别管理</li>
			</ol>
		</div><!--/.row-->
		<?php echo form_open($form_url);?>				
		
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-pencil"></span> 添加类别</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label col-admin" for="email">父节点</label>
									<div class="col-md-9 col-admin-div">
										<select class="form-control add-width" name="pid">
											<option value="0">无父节点</option>
											<?php foreach ($types as $type): ?>
											<?php if($type['level'] < 3): ?>
											<option <?php if($pid == $type['tid']) echo 'selected="selected"';?> value="<?php echo $type['tid'];?>"><?php if($type['level'] == 2) echo '|--';?><?php echo $type['name']?></option>
											<?php endif; ?>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="cl"></div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label col-admin" for="name">类别名称</label>
									<div class="col-md-9 col-admin-div">
										<input id="name" name="name" type="text" class="form-control add-width" value="<?php echo $name;?>">
									</div>
									<div class="cl"></div>
								</div>
							
								
								<div class="form-group">
									<div class="col-md-12 widget-right admin-pull-center">
										<button type="submit" class="btn btn-primary">提&nbsp;交</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script>
		$('#calendar').datepicker({
		});

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
