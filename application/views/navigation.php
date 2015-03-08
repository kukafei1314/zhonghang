<div class="second_content">
		<div class="leftNavi">
			<div class="leftNaviTitle">
				<div class="naviTitleCh">人力资源</div>
				<div class="naviTitleEn">Corporate Culture</div>
			</div>
			<div class="leftNaviMenu">
				<div class="naviMenuButton"><a href="<?php echo base_url('navigcontrol/?tid=15');?>"> 人才理念</a></div>
				<div class="naviMenuButton"><a href="<?php echo base_url('navigcontrol/?tid=16');?>"> 人才现状</a></div>
				<div class="naviMenuButton"><a href="<?php echo base_url('navigcontrol/?tid=17');?>"> 人才政策</a></div>
				<div class="naviMenuButton"><a href="<?php echo base_url('navigcontrol/?tid=18');?>"> 招聘信息</a></div>
				<!-- <div class="naviMenuButton"><a href="<?php echo base_url('navigcontrol/?tid=19');?>"> 澄清公告</a></div> -->
			</div>
			<div class="leftNaviSearch">
				<div class="naviSearchTitle">职位搜索</div>
				<div class="naviSearchForm">
					<form action="" name="searchWork" method="post">
						<select name="workPosition" id="workPosition">
							<option value="">职位搜索</option>
						</select>
						<select name="workPlace" id="workPlace">
							<option value="">选择工作地点</option>
						</select>
						<input type="text" name="workKeyWord" placeholder="请输入关键字"/>
						<input class="searchNav" type="submit" name="searchSubmit" value ="搜&nbsp;索"/>
					</form>
				</div>
			</div>
		</div>