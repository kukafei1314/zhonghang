<?php $this->load->view('admin/headerfile'); ?>
	<!--主页图片-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">主页</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row_index">
			<div class="col-xs-12 col-md-6 col-lg-3 index_top">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							文章
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $article_num; ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3 index_top">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							共计访问
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $click_all; ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3 index_top">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							文件下载
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $upload_num; ?></div>
						</div>
					</div>
				</div>
			</div>
            <div class="cl"></div>
		</div><!--/.row-->
		<table data-toggle="table" class="my_table">
            <thead>
            <tr>
                <th>栏目名称</th>
                <th>标题</th>
                <th>作者</th>
                <th>发布时间</th>
                <th>阅读量</th>
            </tr>
            </thead>
            <?php foreach ($article as $row): ?>
                <tr>
                    <td><?php echo $row['type_name']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['add_date']; ?></td>
                    <td><?php echo $row['click_amount']; ?></td>
                </tr>
          <?php endforeach;?>
        </table>
        <table data-toggle="table" class="my_table">
            <thead>
            <tr>
                <th>文件类型</th>
                <th>文件标题</th>
                <th>作者</th>
                <th>发布时间</th>
                <th>下载量</th>
            </tr>
            </thead>
            <?php foreach ($upload as $row): ?>
                <tr>
                    <td><?php echo $row['type_name']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['add_date']; ?></td>
                    <td><?php echo $row['click_amount']; ?></td>
                </tr>
          <?php endforeach;?>
        </table>		
	</div>

</body>
</html>
