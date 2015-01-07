<?php $this->load->view('admin/headerfile'); ?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">新闻</li>
			</ol>
		</div><!--/.row-->
									
		
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-pencil"></span> 添加文章</div>
					<div class="panel-body">
						<form class="form-horizontal" action="<?php echo base_url('admin/subtitle/insertNews?pid='.$pid.'&tid='.$tid);?>" method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="title">文章标题</label>
									<div class="col-md-9">
									<input id="title" name="title" type="text" placeholder="标题" class="form-control add-width">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="type">文章类别</label>
									<div class="col-md-9">
										<select id="type" name="type" class="form-control add-width">
											<option value = "<?php echo $tid;?>"><?php echo $name;?></option>
										</select>
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="ue_content">文章内容</label>
									<div class="col-md-9">
										<script id="ue_content" name="ue_content" type="text/plain"></script>
									</div>
								</div>
								
								<!-- Form actions -->
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
			<script type=text/javascript src="/static/ueditor/ueditor.config.js"></script>
			<script type=text/javascript src="/static/ueditor/ueditor.all.min.js"></script>
			<script type="text/javascript">
				var ue = UE.getEditor('ue_content');
			</script>
		</div><!--/.row-->
	</div>	<!--/.main-->
</body>

</html>
