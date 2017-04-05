<?php
Namespace DMG\WP_Custom_Menu_Widget;

/*
	Related pages widget class.

    Copyright (C) 2016  Dan Gifford

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


Use DMG\WP_Widget_Base\WP_Widget_Base;

class WP_Custom_Menu_Widget extends WP_Widget_Base
{
	public function __construct()
	{
		// Instantiate the parent object
		parent::__construct( 
			'dmg_custom_menu_widget',
			__('DMG Custom Menu'), 
			[
				'classname' => 'widget_custom_menu', 
				'description' => __( "Displays a custom menu created under Appearance->Menu" )
			] 
		);
	}



	public function widget( $args, $instance )
	{
		// Get menu
		if( empty( $instance['nav_menu'] ) or !($nav_menu =  wp_get_nav_menu_object( $instance['nav_menu'] )) )
		{
			return;
		}

		// Use widget_class
		$args['before_widget'] = $this->addWidgetClass( $args['before_widget'], $instance['widget_class'] );

		echo $args['before_widget'];

		echo $this->getTitle( $args, $instance, $this->id_base . '_title' );
		
		wp_nav_menu([
			'fallback_cb'	=> '',
			'menu' 			=> $nav_menu,
			'menu_class'    => $instance['menu_class'],
			'before'    	=> $instance['before'],
			'after'    		=> $instance['after'],
			'link_before'   => $instance['link_before'],
			'link_after'   	=> $instance['link_after'],
		]);
		
		echo $args['after_widget'];	
	}


	
	public function update( $new_instance, $old_instance )
	{
		$instance = $old_instance;

		$instance['title'] 			= $this->sanitizeTitle($new_instance['title']);
		$instance['title_url'] 		= esc_url($new_instance['title_url']);
		$instance['show_title'] 	= $this->sanitizeBoolean($new_instance['show_title']);
		$instance['widget_class'] 	= $this->sanitizeCSSClasses($new_instance['widget_class']);
		$instance['menu_class'] 	= $this->sanitizeCSSClasses($new_instance['menu_class']);
		$instance['nav_menu'] 		= $this->sanitizeInteger( $new_instance['nav_menu'] );

		if( current_user_can('unfiltered_html') )
		{
			$instance['before'] 		= $new_instance['before'];
			$instance['after'] 			= $new_instance['after'];
			$instance['link_before'] 	= $new_instance['link_before'];
			$instance['link_after'] 	= $new_instance['link_after'];
		}
		else
		{
			$instance['before'] 		= $this->sanitizeHTML( $new_instance['before'] );
			$instance['after'] 			= $this->sanitizeHTML( $new_instance['after'] );
			$instance['link_before'] 	= $this->sanitizeHTML( $new_instance['link_before'] );
			$instance['link_after'] 	= $this->sanitizeHTML( $new_instance['link_after']) ;
		}


		$this->deleteCacheOptions();

		return $instance;
	}



	public function form( $instance )
	{
		$instance = wp_parse_args( (array) $instance, ['title' => '', 'widget_class' => '', 'menu_class' => '', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'nav_menu' => null, 'title_url' => '', 'show_title' => 1,] );

		// Get menus
		$menus = wp_get_nav_menus();

		// If no menus exists, direct the user to go and create some.
		if( !$menus )
		{
			echo '<p>'. sprintf( __('No menus have been created yet. <a href="%s">Create some</a>.'), admin_url('nav-menus.php') ) .'</p>';
			return;
		}

		$options = [];
		foreach( $menus as $menu )
		{
			$options[ esc_html( $menu->name ) ] = $menu->term_id;
		}

		$this->textControl( 'title', 'Title:', $this->sanitizeTitle($instance['title']) );

		$this->selectControl( 'nav_menu', 'Select Menu:', $this->sanitizeBoolean( $instance['nav_menu'] ), $options );

		$this->openAdvancedSection();

			$this->textControl( 'widget_class', 'CSS class(es) applied to widget wrapper:', $this->sanitizeCSSClasses( $instance['widget_class'] ) );

			$this->textControl( 'menu_class', 'CSS class(es) applied to menu wrapper:', $this->sanitizeCSSClasses( $instance['menu_class'] ) );
			
			$this->textControl( 'before', 'HTML before each link tag:', esc_textarea( $instance['before'] ) );
			
			$this->textControl( 'after', 'HTML after each link tag:', esc_textarea( $instance['after'] ) );
			
			$this->textControl( 'link_before', 'HTML before each link\'s text:', esc_textarea( $instance['link_before'] ) );

			$this->textControl( 'link_after', 'HTML after each link\'s text:', esc_textarea( $instance['link_after'] ) );

			$this->textControl( 'title_url', 'URL for the title (make the title a link):', esc_url( $instance['title_url'] ) );

			$this->booleanControl( 'show_title', 'Show the Title', $instance['show_title'] );

		$this->closeAdvancedSection();
	}
}