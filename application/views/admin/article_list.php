<?php $this->load->view('admin/headerfile'); ?>
	<!--新闻列表页面-->	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('admin/index');?>" target="_top"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">公司概况</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<form role="search" class="my_search" action="#" method="post">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="请输入关键字搜索">
                            </div>
                        </form>
                        <button onclick="{location.href=''}" target="main" type="submit" class="btn btn-primary my_botton">搜索文章</button>

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
							<a href="<?php
							            $aid=$about['aid'];
										switch($aid){
											case 1:echo base_url('navigcontrol/?tid=21');break;
                                            case 2:echo base_url('navigcontrol/?tid=22');break;
											case 3:echo base_url('navigcontrol/?tid=20');break;
											case 4:echo base_url('navigcontrol/?tid=23');break;
											case 5:echo base_url('navigcontrol/?tid=24');break;
											case 6:echo base_url('navigcontrol/?tid=25');break;
											case 7:echo base_url('navigcontrol/?tid=26');break;
											default:;
											}
							 ?>" target="_blank">
							
								查看
							</a>
							<a href="<?php echo base_url('admin/about/edit_new?aid='.$about['aid']);?>" target="main">编辑</a>
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
