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
		</div>