<div class="second_content">
		<div class="leftNavi">
			<div class="leftNaviTitle">
				<div class="naviTitleCh"><?php echo $title; ?></div>
				<div class="naviTitleEn"><?php echo $en_title; ?></div>
			</div>
			<div class="leftNaviMenu">
				<?php 
					if(!empty($title_second)){
						foreach($title_second as $item_second):?>
							<div class="naviMenuButton"><a href="">> <?=$item_second?></a></div>
					<?php endforeach; 
				}?>
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