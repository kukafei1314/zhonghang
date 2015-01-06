<?php $this->load->view('admin/admin_header'); ?>
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
</body>

</html>
