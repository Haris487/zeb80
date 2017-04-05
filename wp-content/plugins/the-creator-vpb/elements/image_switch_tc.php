<?php

/*********** Shortcode: Image Switch ************************************************************/

$tcvpb_elements['image_switch_tc'] = array(
	'name' => esc_html__('Image Switch', 'the-creator-vpb' ),
	'type' =>  'block',
	'icon' => 'pi-image-swich',
	'category' =>  esc_html__('Media', 'the-creator-vpb'),
	'attributes' => array(
		'url' => array(
			'type' => 'image',
			'description' => esc_html__('First Image', 'the-creator-vpb'),
			'divider' => 'true',
		),
		'url_second' => array(
			'type' => 'image',
			'description' => esc_html__('Second Image', 'the-creator-vpb'),
		),
		'animation' => array(
			'default' => 'none',
			'description' => esc_html__('Entrance Animation', 'the-creator-vpb'),
			'type' => 'select',
			'values' => array(
				'flip' => esc_html__('Flip', 'the-creator-vpb'),
				'flipInX' => esc_html__('Flip In X', 'the-creator-vpb'),
				'flipInY' => esc_html__('Flip In Y', 'the-creator-vpb'),
				'fadeIn' => esc_html__('Fade In', 'the-creator-vpb'),
				'fadeInUp' => esc_html__('Fade In Up', 'the-creator-vpb'),
				'fadeInDown' => esc_html__('Fade In Down', 'the-creator-vpb'),
				'fadeInLeft' => esc_html__('Fade In Left', 'the-creator-vpb'),
				'fadeInRight' => esc_html__('Fade In Right', 'the-creator-vpb'),
				'fadeInUpBig' => esc_html__('Fade In Up Big', 'the-creator-vpb'),
				'fadeInDownBig' => esc_html__('Fade In Down Big', 'the-creator-vpb'),
				'fadeInLeftBig' => esc_html__('Fade In Left Big', 'the-creator-vpb'),
				'fadeInRightBig' => esc_html__('Fade In Right Big', 'the-creator-vpb'),
				'slideInLeft' => esc_html__('Slide In Left', 'the-creator-vpb'),
				'slideInRight' => esc_html__('Slide In Right', 'the-creator-vpb'),
				'bounceIn' => esc_html__('Bounce In', 'the-creator-vpb'),
				'bounceInDown' => esc_html__('Bounce In Down', 'the-creator-vpb'),
				'bounceInUp' => esc_html__('Bounce In Up', 'the-creator-vpb'),
				'bounceInLeft' => esc_html__('Bounce In Left', 'the-creator-vpb'),
				'bounceInRight' => esc_html__('Bounce In Right', 'the-creator-vpb'),
				'rotateIn' => esc_html__('Rotate In', 'the-creator-vpb'),
				'rotateInDownLeft' => esc_html__('Rotate In Down Left', 'the-creator-vpb'),
				'rotateInDownRight' => esc_html__('Rotate In Down Right', 'the-creator-vpb'),
				'rotateInUpLeft' => esc_html__('Rotate In Up Left', 'the-creator-vpb'),
				'rotateInUpRight' => esc_html__('Rotate In Up Right', 'the-creator-vpb'),
				'lightSpeedIn' => esc_html__('Light Speed In', 'the-creator-vpb'),
				'rollIn' => esc_html__('Roll In', 'the-creator-vpb'),
				'flash' => esc_html__('Flash', 'the-creator-vpb'),
				'bounce' => esc_html__('Bounce', 'the-creator-vpb'),
				'shake' => esc_html__('Shake', 'the-creator-vpb'),
				'tada' => esc_html__('Tada', 'the-creator-vpb'),
				'swing' => esc_html__('Swing', 'the-creator-vpb'),
				'wobble' => esc_html__('Wobble', 'the-creator-vpb'),
				'pulse' => esc_html__('Pulse', 'the-creator-vpb'),
			),
			'tab' => esc_html__('Animation', 'the-creator-vpb'),
		),
		'duration' => array(
			'description' => esc_html__('Animation Duration (in ms)', 'the-creator-vpb'),
			'default' => '1000',
			'tab' => esc_html__('Animation', 'the-creator-vpb'),
		),		
		'delay' => array(
			'description' => esc_html__('Animation Delay (in ms)', 'the-creator-vpb'),
			'default' => '0',
			'tab' => esc_html__('Animation', 'the-creator-vpb'),
		),
		'link' => array(
			'description' => esc_html__('Link', 'the-creator-vpb'),
			'type' => 'url',
			'tab' => esc_html__('Link', 'the-creator-vpb'),
		),
		'target' => array(
			'description' => esc_html__('Target', 'the-creator-vpb'),
			'default' => '_self',
			'type' => 'select',
			'values' => array(
				'_self' =>  esc_html__('Self', 'the-creator-vpb'),
				'_blank' => esc_html__('Blank', 'the-creator-vpb'),
			),
			'tab' => esc_html__('Link', 'the-creator-vpb'),
		),			
		'id' => array(
			'description' => esc_html__('ID', 'the-creator-vpb'),
			'info' => esc_html__('Additional custom ID', 'the-creator-vpb'),
			'tab' => esc_html__('Advanced', 'the-creator-vpb'),
		),	
		'class' => array(
			'description' => esc_html__('Class', 'the-creator-vpb'),
			'info' => esc_html__('Additional custom classes for custom styling', 'the-creator-vpb'),
			'tab' => esc_html__('Advanced', 'the-creator-vpb'),
		),
	),
);
function tcvpb_image_switch_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('image_switch_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$animation = ($animation!='') ? $animation  : 'fadeIn';
	$duration = ($duration!='') ? $duration : '1000';
              
	$return = '<div '.esc_attr($id_out).' class="tcvpb-animo tcvpb-image-combo '.esc_attr($class).'" data-animation="'.esc_attr($animation).'" data-duration="'.esc_attr($duration).'" data-delay="'.esc_attr($delay).'">';

	if($link != '') {
		$return .= '<a href="'.esc_url($link).'" target="'.esc_attr($target).'">
			<img class="tcvpb_image_first_image" src="'.esc_url($url).'">
			<img class="tcvpb_image_second_image" src="'.esc_url($url_second).'">
		</a>';
	}
	else{
		$return .= '<img class="tcvpb_image_first_image" src="'.esc_url($url).'">';
		$return .= '<img class="tcvpb_image_second_image" src="'.esc_url($url_second).'">';
	}

	$return .= '</div>';

	return $return;
}