<?php $this->load->view('admin/headerfile'); ?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('admin/index');?>"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active"><?php echo $name;?></li>
			</ol>
		</div><!--/.row-->
									
		
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-pencil"></span> 编辑文章<button onclick="{location.href='index.php?d=admin&c=subtitle&m=listNews&pid='+<?php echo $pid;?>+'&tid='+<?php echo $tid;?>}" target="main" type="submit" class="btn btn-primary my_back">返回</button></div>
					<div class="panel-body">
						<form class="form-horizontal" action="<?php echo base_url('admin/subtitle/updateNews?aid='.$aid.'&pid='.$pid.'&tid='.$tid);?>" method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="title">文章标题</label>
									<div class="col-md-9">
									<input id="title" name="title" type="text" value = "<?php echo $article['title'];?>" placeholder="标题" class="form-control add-width">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="type">文章类别</label>
									<div class="col-md-9">
										<select id="type" name="type" class="form-control add-width">
										    <?php foreach ($types as $type): ?>
    											<?php if($type['level'] < 3): ?>
    											<option <?php if($tid == $type['tid']) echo 'selected="selected"';?> value="<?php echo $type['tid'];?>"><?php echo $type['name']?></option>
    											<?php endif; ?>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="ue_content">文章内容</label>
									<div class="col-md-9">
										<script id="ue_content" name="ue_content" type="text/plain"><?php echo $article['content'];?></script>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right admin-pull-center">
										<button onclick="return is_empty()" type="submit" class="btn btn-primary">提&nbsp;交</button>
										<button type="button" onclick="{location.href='index.php?d=admin&c=subtitle&m=editNews&aid='+<?php echo $aid;?>+'&pid='+<?php echo $pid;?>+'&tid='+<?php echo $tid;?>}" class="btn btn-primary">重&nbsp;置</button>
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

				function is_empty(){
					if ($("#title").val() == "") {
						alert("文章标题不能为空！");
						return false;
					}
				}
			</script>
		</div><!--/.row-->
	</div>	<!--/.main-->
</body>

</html>
