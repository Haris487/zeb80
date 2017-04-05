<?php
/*
 * Plugin Name:ContactNo
 * Plugin Uri:https:github.com/haris487
 * Description:Allows you to change contact number at any point
 * Version:1.0
 * Author:M.Haris
 * Author Uri:https:github.com/haris487
 * Licence : none
 */

class contactno extends WP_Widget{
    function __construct() {
        parent::__construct(false, $name = __('Contact No'));
    }
    
   public function form( $instance ) {
       
       
//                Contant 1
		$contact1 = ! empty( $instance['contact1'] ) ? $instance['contact1'] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'contact1' ) ); ?>">
                    <?php esc_attr_e( 'Contact1:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'contact1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'contact1' ) ); ?>" type="text" value="<?php echo esc_attr( $contact1); ?>">
		</p>
		<?php 
//                End Of Contact1
 
//                Contant 2
		$contact2 = ! empty( $instance['contact2'] ) ? $instance['contact2'] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'contact2' ) ); ?>">
                    <?php esc_attr_e( 'Contact2:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'contact2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'contact2' ) ); ?>" type="text" value="<?php echo esc_attr( $contact2); ?>">
		</p>
		<?php 
//                End Of Contact2
                
//                Link To Button
		$linkButton = ! empty( $instance['linkButton'] ) ? $instance['linkButton'] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'linkButton' ) ); ?>">
                    <?php esc_attr_e( 'Custom Link to Contact Page:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkButton' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkButton' ) ); ?>" type="text" value="<?php echo esc_attr( $linkButton); ?>">
		</p>
		<?php 
//               End Link To Button               
	}

    public function update( $new_instance, $old_instance ) {
                $instance = array();
                $instance['contact1'] = ( ! empty( $new_instance['contact1'] ) ) ? strip_tags( $new_instance['contact1'] ) : '';
                $instance['contact2'] = ( ! empty( $new_instance['contact2'] ) ) ? strip_tags( $new_instance['contact2'] ) : '';
                $instance['linkButton'] = ( ! empty( $new_instance['linkButton'] ) ) ? strip_tags( $new_instance['linkButton'] ) : '';
                return $instance;
    }
    function widget($args, $instance) {
 
        ?>
             <div class="topBarRight right">
                                <div class="contacts">
<!--                                    TODO Adding Wiget For Contact-->
                                    <label class="first col-lg-6 col-md-6 col-sm-6 col-xs-12"><?=$instance['contact1']?></label>
                                    <label class="right col-lg-6 col-md-6 col-sm-6 col-xs-12"><?=$instance['contact2']?></label>
                                </div>
<!--                                Todo Adding  Widget Button-->
                                <a class="contact-btn" href="<?=$instance['linkButton']?>">Contact Us</a>
                            </div>
            <?php
    }
    

}

add_action('widgets_init' , function(){
register_widget('contactno');
});

