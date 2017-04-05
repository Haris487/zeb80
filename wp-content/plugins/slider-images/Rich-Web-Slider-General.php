<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}

	global $wpdb;
	$table_name2 = $wpdb->prefix . "rich_web_slider_effects_data";
	$Rich_WebSliderCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id>%d",0));
?>
<form method="POST">
	<?php require_once( 'Rich-Web-Slider-Header.php' ); ?>
	<div class='rich_web_Content_Div' style="position: relative; width: 100%; right: 1%; height: 50px;">
		<input type='button' class='JAddSlider2' value='Add Option (Pro)' onclick='addSliderJ2()' />
		<input type='button' class='JCanselSlider2' value='Cancel' onclick='canselSliderJ2()' />
	</div>
	<div class='Table_Data_rich_web_Content_2' >
		<div class='Table_Data_rich_web1_2'>
			<table class='rich_web_Tit_Table_2'>
				<tr class='rich_web_Tit_Table_2_Tr'>
					<td>No</td>
					<td>Option Name</td>
					<td>Slider Type</td>
					<td>Actions</td>
				</tr>
			</table>
			<table class='rich_web_Tit_Table2_2'>
				<?php for($i=0;$i<count($Rich_WebSliderCount);$i++){ ?>
					<tr class='rich_web_Tit_Table2_2_Tr2'>
						<td><?php echo $i+1;?></td>
						<td><?php echo $Rich_WebSliderCount[$i]->slider_name;?></td>
						<td><?php echo $Rich_WebSliderCount[$i]->slider_type;?></td>
						<td onclick="rich_web_Edit_Sl2('<?php echo $i+1;?>')"><i class='jIcPencil rich_web rich_web-pencil'></i></td>
						<td><i class='jIcDel rich_web rich_web-trash'></i></td>
					</tr>
				<?php }?>
			</table>
		</div>
		<div class='Table_Data_rich_web2_2'>
			<img class="Rich_Effect" id="Rich_Effect_1"  onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect1.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_2"  onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect1_1.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_3"  onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect2.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_4"  onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect2_2.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_5"  onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect3.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_6"  onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect3_3.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_7"  onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect4.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_8"  onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect4_4.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_9"  onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect5.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_10" onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect5_5.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_11" onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect6.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_12" onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect6_6.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_13" onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect7.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_14" onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect7_7.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_15" onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect8.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_16" onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect8_8.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_17" onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect9.png',__FILE__);?>">
			<img class="Rich_Effect" id="Rich_Effect_18" onclick='addSliderJ2()' src="<?php echo plugins_url('/Images/effect9_9.png',__FILE__);?>">
		</div>
	</div>
</form>