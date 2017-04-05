<?php	
	add_action( 'wp_ajax_rich_web_Edit', 'rich_web_Edit_Callback' );
	add_action( 'wp_ajax_nopriv_rich_web_Edit', 'rich_web_Edit_Callback' );

	function rich_web_Edit_Callback()
	{
		$number = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name = $wpdb->prefix . "rich_web_photo_slider_manager";
		
		$Rich_Web_Manager=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id=%s", $number));

		print_r($Rich_Web_Manager);
		die();
	}
	
	add_action( 'wp_ajax_rich_web_Edit_ImDescTit', 'rich_web_Edit_ImDescTit_Callback' );
	add_action( 'wp_ajax_nopriv_rich_web_Edit_ImDescTit', 'rich_web_Edit_ImDescTit_Callback' );

	function rich_web_Edit_ImDescTit_Callback()
	{
		$number = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name1 = $wpdb->prefix . "rich_web_photo_slider_instal";

		$Rich_Web_Instal=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE Sl_Number=%d order by id", $number));
		print_r($Rich_Web_Instal);
		die();
	}
	
	add_action( 'wp_ajax_rich_web_Del', 'rich_web_Del_Callback' );
	add_action( 'wp_ajax_nopriv_rich_web_Del', 'rich_web_Del_Callback' );

	function rich_web_Del_Callback()
	{
		$number = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name  = $wpdb->prefix . "rich_web_photo_slider_manager";
		$table_name1 = $wpdb->prefix . "rich_web_photo_slider_instal";

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name WHERE id=%d", $number));
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name1 WHERE Sl_Number=%d", $number));
		die();
	}
?>