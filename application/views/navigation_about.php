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
									case "��˾��̬" : $link=8;break;
									case "ͼƬ����" : $link=9;break;
									case "ý��۽�" : $link=10;break;
									case "ҵ������" : $link=11;break;
									case "ˮ��Ͷ����Ŀ" : $link=12;break;
									case "��ҵ��̬" : $link=13;break;
									case "ҵ����Ұ" : $link=14;break;
									case "��˾���" : $link=20;break;
									case "���³��´�" : $link=21;break;
									case "�����Ŷ�" : $link=22;break;
									case "��֯����" : $link=23;break;
									case "��˾ս��" : $link=24;break;
									case "�����뽱��" : $link=25;break;
									case "��ҵ�Ļ�" : $link=26;break;
									default:$link=2;break;
						          }
							?>
							<div class="naviMenuButton"><a href="<?php echo base_url('navigcontrol/?tid=').$link;?>">> <?=$item_second?></a></div>
					<?php endforeach; 
				}?>
			</div>
		</div>