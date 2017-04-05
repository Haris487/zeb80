<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
?>
<script>
	function addSliderJ2(){
		alert("This is free version. For more adventures click to buy Pro version.");
	}
	function canselSliderJ2(){
		location.reload();
	}	
	function rich_web_Edit_Sl2(rich_web_Slider_ID)
	{
		jQuery('.Table_Data_rich_web1_2').css('display','none');
		jQuery('.Table_Data_rich_web2_2').css('display','block');
		jQuery('.JAddSlider2').addClass('JAddSlider2Anim');
		jQuery('.JCanselSlider2').addClass('JCanselSlider2Anim');
		jQuery('.Table_Data_rich_web2_2').css('display','block');
		jQuery('#Rich_Effect_'+rich_web_Slider_ID).css('display','block');
	}
</script>