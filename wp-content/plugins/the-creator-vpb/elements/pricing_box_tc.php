<?php

/*********** Shortcode: Price Box ************************************************************/

$tcvpb_elements['pricing_box_tc'] = array(
	'name' => esc_html__('Pricing box', 'the-creator-vpb' ),
	'type' => 'block',
	'icon' => 'pi-pricing-box',
	'category' =>  esc_html__('Content', 'the-creator-vpb'),
	'child' => 'pricing_feature_tc',
	'child_title' => esc_html__('Pricing Feature', 'the-creator-vpb'),
	'child_button' => esc_html__('Add Pricing Feature', 'the-creator-vpb'),
	'attributes' => array(
		'icon' => array(
			'description' => esc_html__('Icon', 'tcvpb-shortcodes'),
			'type' => 'icon',
		),
		'name' => array(
			'description' => esc_html__('Name', 'tcvpb-shortcodes'),
			'divider' => 'true',
		),
		'price' => array(
			'description' => esc_html__('Price', 'tcvpb-shortcodes'),
		),
		'currency' => array(
			'description' => esc_html__('Currency Sign', 'tcvpb-shortcodes'),
		),
		'monthly' => array(
			'description' => esc_html__('Monthly Text', 'tcvpb-shortcodes'),
			'divider' => 'true',
		),
		'decsription' => array(
			'description' => esc_html__('Decsription', 'tcvpb-shortcodes'),
		),
		'style' => array(
			'default' => '1',
			'type' => 'select',
			'values' => array(
				'1' => esc_html__('Style 1', 'tcvpb-shortcodes'),
				'2' => esc_html__('Style 2', 'tcvpb-shortcodes'),
				'3' => esc_html__('Style 3', 'tcvpb-shortcodes'),
				'4' => esc_html__('Style 4', 'tcvpb-shortcodes'),
				'5' => esc_html__('Style 5', 'tcvpb-shortcodes'),
			),
			'description' => esc_html__('Style', 'tcvpb-shortcodes'),
			'tab' => esc_html__('Style', 'the-creator-vpb'),
		),
		'header_background' => array(
			'description' => esc_html__( 'Header Background Color', 'tcvpb-shortcodes' ),
			'type' => 'coloralpha',
			'tab' => esc_html__('Style', 'the-creator-vpb'),
		),
		'header_color' => array(
			'description' => esc_html__( 'Header Text Color', 'tcvpb-shortcodes' ),
			'type' => 'color',
			'tab' => esc_html__('Style', 'the-creator-vpb'),
		),
		'info_background' => array(
			'description' => esc_html__( 'Info Box Background Color', 'tcvpb-shortcodes' ),
			'type' => 'coloralpha',
			'tab' => esc_html__('Style', 'the-creator-vpb'),
		),
		'info_color' => array(
			'description' => esc_html__( 'Info Box Text Color', 'tcvpb-shortcodes' ),
			'type' => 'color',
			'tab' => esc_html__('Style', 'the-creator-vpb'),
		),
		'featured' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__('Is Featured?', 'tcvpb-shortcodes'),
			'tab' => esc_html__('Featured', 'the-creator-vpb'),
		),
		'featured_text' => array(
			'description' => esc_html__('Featured Info', 'tcvpb-shortcodes'),
			'tab' => esc_html__('Featured', 'the-creator-vpb'),
		),
		'button_text' => array(
			'description' => esc_html__( 'Button Text', 'tcvpb-shortcodes' ),
			'tab' => esc_html__('Button', 'the-creator-vpb'),
		),
		'button_size' => array(
			'description' => esc_html__( 'Size', 'tcvpb-shortcodes' ),
			'default' => 'medium',
			'type' => 'select',
			'values' => array(
				'small' =>  esc_html__( 'Small', 'tcvpb-shortcodes' ),
				'medium' => esc_html__( 'Medium', 'tcvpb-shortcodes' ),
				'large' => esc_html__( 'Large', 'tcvpb-shortcodes' ),
				'xlarge' => esc_html__( 'Extra Large', 'tcvpb-shortcodes' ),
			),
			'tab' => esc_html__('Button', 'the-creator-vpb'),
		),
		'button_color' => array(
			'description' => esc_html__( 'Button Text Color', 'tcvpb-shortcodes' ),
			'type' => 'color',
			'tab' => esc_html__('Button', 'the-creator-vpb'),
		),
		'button_background' => array(
			'description' => esc_html__( 'Button Background Color', 'tcvpb-shortcodes' ),
			'type' => 'coloralpha',
			'tab' => esc_html__('Button', 'the-creator-vpb'),
		),
		'button_style' => array(
			'description' => esc_html__( 'Style', 'tcvpb-shortcodes' ),
			'default' => 'normal',
			'type' => 'select',
			'values' => array(
				'normal' =>  esc_html__( 'Normal', 'tcvpb-shortcodes' ),
				'rounded' =>  esc_html__( 'Rounded', 'tcvpb-shortcodes' ),
			),
			'tab' => esc_html__('Button', 'the-creator-vpb'),
		),
		'button_url' => array(
			'description' => esc_html__( 'URL', 'tcvpb-shortcodes' ),
			'tab' => esc_html__('Button', 'the-creator-vpb'),
		),
		'button_target' => array(
			'description' => esc_html__( 'Target', 'tcvpb-shortcodes' ),
			'default' => '_self',
			'type' => 'select',
			'values' => array(
				'_self' =>  esc_html__( 'Self', 'tcvpb-shortcodes' ),
				'_blank' => esc_html__( 'Blank', 'tcvpb-shortcodes' ),
			),
			'tab' => esc_html__('Button', 'the-creator-vpb'),
		),
		'button_icon' => array(
			'description' => esc_html__('Button Icon', 'tcvpb-shortcodes'),
			'info' => esc_html__('Optional icon after button text', 'tcvpb-shortcodes'),
			'type' => 'icon',
			'tab' => esc_html__('Button', 'the-creator-vpb'),
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
function tcvpb_pricing_box_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('pricing_box_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$featured_output=($featured=='1')?' tcvpb_popular-plan':'';
	$icon_output=($icon!='')?'<div class="tcvpb_pricebox_icon"><i class="'.esc_attr($icon).'"></i></div>':'';
	$decsription_output=($decsription!='')?'<span class="tcvpb_pricebox_decsription">'.wp_kses($decsription, ABdev_allowed_tags()).'</span>':'';
	$featured_text_output=($featured_text!='')?'<div class="tcvpb_pricebox_featured_text">'.wp_kses($featured_text, ABdev_allowed_tags()).'</div>':'';
	$header_background = ($header_background!='') ? 'background:'.$header_background.';' : '';
	$header_color = ($header_color!='') ? 'color: '.$header_color.';' : '';
	$info_background = ($info_background!='') ? 'background:'.$info_background.';' : '';
	$info_color = ($info_color!='') ? 'color: '.$info_color.';' : '';

	$button_out='';
	if($button_text != ''){
		$class_out = 'tcvpb-button';
		$class_out .= ' tcvpb-button_'.$button_style;
		$class_out .= ' tcvpb-button_'.$button_size;
		$button_color = ($button_color!='') ? 'color: '.$button_color.';' : '';
		$button_background = ($button_background!='') ? 'background:'.$button_background.';' : '';
		$icon_out = ($button_icon!='') ? '<i class="'.esc_attr($button_icon).'"></i>' : '';
		$button_out = '<div class="tcvpb_pricebox_feature tcvpb_pricebox_feature_button"><a href="'. esc_url($button_url) .'" target="' . esc_attr($button_target) . '" class="'.esc_attr($class_out).'" style="'.esc_attr($button_color.$button_background).'">' . $button_text . $icon_out . '</a></div>';
	}

	static $count_priceboxes;
	$count_priceboxes++;
	return '
	<div '.esc_attr($id_out).' class="tcvpb_pricing-table-'.esc_attr($style).' '.esc_attr($featured_output).' '.esc_attr($class).'">
		<div class="tcvpb_plan tcvpb_plan'.esc_attr($count_priceboxes.$featured_output).'">
			'.$featured_text_output.'
			<div class="tcvpb_pricebox_header" style="'.esc_attr($header_background).'">
				'.$icon_output.'
				<span class="tcvpb_pricebox_name" style="'.esc_attr($header_color).'">'.esc_attr($name).'</span>
				<div class="tcvpb_pricebox_info" style="'.esc_attr($info_color.$info_background).'">
					<span class="tcvpb_pricebox_currency">'.esc_attr($currency).'</span>
					<span class="tcvpb_pricebox_price">'.esc_attr($price).'</span>
					<span class="tcvpb_pricebox_monthly">'.esc_attr($monthly).'</span>
				</div>
				'.$decsription_output.'
			</div>
			'.do_shortcode($content).' 
			'.$button_out.'          
		</div>
	</div>';
}

$tcvpb_elements['pricing_feature_tc'] = array(
	'name' => esc_html__('Pricing feature', 'the-creator-vpb' ),
	'type' => 'child',
	'attributes' => array(
		'name' => array(
			'description' => esc_html__('Feature Name', 'tcvpb-shortcodes'),
		),
		'value' => array(
			'description' => esc_html__('Value', 'tcvpb-shortcodes'),
		),
		'yes' => array(
			'type' => 'icon',
			'description' => esc_html__('Avaliable Icon', 'tcvpb-shortcodes'),
		),
		'no' => array(
			'type' => 'icon',
			'description' => esc_html__('Not Avaliable Icon', 'tcvpb-shortcodes'),
		),
	),
);
function tcvpb_pricing_feature_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('pricing_feature_tc'), $attributes));
	$yes_output = ($yes!='')?'<i class="'.esc_attr($yes).'"></i>':'';
	$no_output = ($no!='')?'<i class="'.esc_attr($no).'"></i>':'';
	return '<span class="tcvpb_pricebox_feature">'.$yes_output.$no_output.'<strong>'.esc_attr($value).'</strong> '.esc_attr($name).'</span>';
}