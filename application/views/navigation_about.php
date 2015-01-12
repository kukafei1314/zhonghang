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
							<?php 
								switch($item_second){
									case "公司动态" : $link=8;break;
									case "图片新闻" : $link=9;break;
									case "媒体聚焦" : $link=10;break;
									case "业务领域" : $link=11;break;
									case "水务投资项目" : $link=12;break;
									case "行业动态" : $link=13;break;
									case "业务视野" : $link=14;break;
									case "公司简介" : $link=20;break;
									case "董事长致辞" : $link=21;break;
									case "管理团队" : $link=22;break;
									case "组织机构" : $link=23;break;
									case "公司战略" : $link=24;break;
									case "荣誉与奖励" : $link=25;break;
									case "企业文化" : $link=26;break;
									default:$link=2;break;
						          }
							?>
							<div class="naviMenuButton"><a href="<?php echo base_url('navigcontrol/?tid=').$link;?>">> <?=$item_second?></a></div>
					<?php endforeach; 
				}?>
			</div>
		</div>