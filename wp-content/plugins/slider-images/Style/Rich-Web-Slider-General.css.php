<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
?>
<style type='text/css'>
	.jIcPencil { color:#ff0000; cursor:pointer; }
	.jIcDel { color:#00a0d2; cursor:pointer; }
	.Table_Data_rich_web_Content_2 { position:relative;	width:99%; }
	.Table_Data_rich_web1_2 { position:absolute; top:0%; left:0%; width:100% !important; margin-top:10px; z-index:1; }	
	.rich_web_Tit_Table_2 { width: 100%; background-color: #fff; text-align: center; text-shadow:1px 1px 1px #000000; padding: 1px; color: #fff; }
	.rich_web_Tit_Table_2_Tr { background:#30a9d1; }
	.rich_web_Tit_Table_2 td:nth-child(1) { width:10%; }
	.rich_web_Tit_Table_2 td:nth-child(2) { width:35%; }
	.rich_web_Tit_Table_2 td:nth-child(3) { width:35%; }
	.rich_web_Tit_Table_2 td:nth-child(4) {	width:20%; }
	.rich_web_Tit_Table2_2 { width: 100%; background-color: #fff; margin-top:10px; text-align: center; text-shadow:0px 0px 0px #000000; padding: 1px; color: #34383c;	}
	.rich_web_Tit_Table2_2_Tr2 { background:#f1f1f1; }
	.rich_web_Tit_Table2_2_Tr2:nth-child(even) { background:#ffffff; }
	.rich_web_Tit_Table2_2_Tr2:hover { background:#e9e9e9; }
	.rich_web_Tit_Table2_2 td:nth-child(1) { width:10%; }
	.rich_web_Tit_Table2_2 td:nth-child(2) { width:35%; }
	.rich_web_Tit_Table2_2 td:nth-child(3) { width:35%; }
	.rich_web_Tit_Table2_2 td:nth-child(4) { width:10%; cursor:pointer; }
	.rich_web_Tit_Table2_2 td:nth-child(5) { width:10%; cursor:pointer;	}
	.JAddSlider2 { position: absolute; right: 10px; bottom: 10px; padding: 5px 10px; background: #47bde5; cursor: pointer; border: none; box-shadow: 0px 0px 2px #47bde5; color: #fff; text-shadow:1px 1px 1px #000000; width:125px; height:30px; transition:all 0.3s linear; }
	.JAddSlider2Anim { width:0px !important; padding:0px !important; transition:all 0s linear; }
	.JSaveSlider2, .JCanselSlider2, .JUpdateSlider2 { position: absolute; right: 10px; bottom: 10px; padding: 0px; background: #47bde5; cursor: pointer; border: none; box-shadow: 0px 0px 2px #47bde5; color: #fff; text-shadow:1px 1px 1px #000000; width:0px; height:30px; transition:all 0.3s linear; }
	.JSaveSlider2Anim { padding: 5px 10px !important; width:100px !important; right:120px !important; transition:all 0s linear; }
	.JAddSlider2:hover, .JSaveSlider2:hover, .JCanselSlider2:hover, .JUpdateSlider2:hover { color: #fff; background:#30a9d1; box-shadow: 0px 0px 2px #30a9d1; }
	.JCanselSlider2Anim { padding: 5px 10px !important; width:100px !important; transition:all 0s linear; }	
	.Table_Data_rich_web2_2 { position:absolute; top:0%; left:0%; width:100% !important; margin-top:10px; z-index:1; display:none; }
	.Rich_Effect { width:100%; display:none; margin-bottom: 50px; }	
</style>