<div class="second_content">
		<div class="leftNavi">
			<div class="leftNaviTitle">
				<div class="naviTitleCh"><?php echo $title; ?></div>
				<div class="naviTitleEn"><?php echo $en_title; ?></div>
			</div>
			
			<div class="leftNaviMenu">
				
				<?php foreach ($title_second as $title):?>
					<div class="naviMenuButton"><a href="<?php echo base_url('navigcontrol/?tid=').$title['tid'];?>"> <?php echo $title['title'];?></a></div>
				<?php endforeach;?>
			</div>
		</div>