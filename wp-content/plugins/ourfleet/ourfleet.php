<?php
/*
 * Plugin Name:OurFleet
 * Plugin Uri:https:github.com/haris487
 * Description:Handles Our Fleet Section In Footer Area
 * Version:1.0
 * Author:M.Haris
 * Author Uri:https:github.com/haris487
 * Licence : none
 */

class ourfleet extends WP_Widget{
    function __construct() {
        parent::__construct(false, $name = __('Our Fleet Input'));
    }
    
   public function form( $instance ) {
       
// ======================================== For Images ======================================================       
//                img 1
		$img1 = ! empty( $instance['img1'] ) ? $instance['img1'] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'img1' ) ); ?>">
                    <?php esc_attr_e( 'Image1 Url:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'img1' ) ); ?>" 
                       name="<?php echo esc_attr( $this->get_field_name( 'img1' ) ); ?>" type="text" value="<?php echo esc_attr( $img1); ?>">
		</p>
		<?php 
//                img1
                
                //                img 2
		$img2 = ! empty( $instance['img2'] ) ? $instance['img2'] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'img2' ) ); ?>">
                    <?php esc_attr_e( 'Image 2 Url:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'img2' ) ); ?>" 
                       name="<?php echo esc_attr( $this->get_field_name( 'img2' ) ); ?>" type="text" value="<?php echo esc_attr( $img2); ?>">
		</p>
		<?php 
//                img 2
                
                //                img 3
		$img3 = ! empty( $instance['img3'] ) ? $instance['img3'] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'img3' ) ); ?>">
                    <?php esc_attr_e( 'Image 3 Url:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'img3' ) ); ?>" 
                       name="<?php echo esc_attr( $this->get_field_name( 'img3' ) ); ?>" type="text" value="<?php echo esc_attr( $img3); ?>">
		</p>
		<?php 
//                img3
                
                //                img 4
		$img4 = ! empty( $instance['img4'] ) ? $instance['img4'] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'img4' ) ); ?>">
                    <?php esc_attr_e( 'Image 4 Url:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'img4' ) ); ?>" 
                       name="<?php echo esc_attr( $this->get_field_name( 'img4' ) ); ?>" type="text" value="<?php echo esc_attr( $img4); ?>">
		</p>
		<?php 
//                img4

                // ======================================== End Of Images ======================================================

                
                
                // ======================================== Titles ======================================================

//                title 1
                $name = 'title1';
		$title1 = ! empty( $instance[$name] ) ? $instance[$name] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>">
                    <?php esc_attr_e( 'Write Name Of Car 1:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>" 
                       name="<?php echo esc_attr( $this->get_field_name( $name ) ); ?>" type="text" value="<?php echo esc_attr( $title1); ?>">
		</p>
		<?php 
//                End of title1
                
                //                title 2
                $name = 'title2';
		$title2 = ! empty( $instance[$name] ) ? $instance[$name] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>">
                    <?php esc_attr_e( 'Write Name Of Car 2:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>" 
                       name="<?php echo esc_attr( $this->get_field_name( $name ) ); ?>" type="text" value="<?php echo esc_attr( $title2); ?>">
		</p>
		<?php 
//                End of title2
                
                //                title 3
                $name = 'title3';
		$title3 = ! empty( $instance[$name] ) ? $instance[$name] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>">
                    <?php esc_attr_e( 'Write Name Of Car 3:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>" 
                       name="<?php echo esc_attr( $this->get_field_name( $name ) ); ?>" type="text" value="<?php echo esc_attr( $title3); ?>">
		</p>
		<?php 
//                End of title3
                
                //                title 4
                $name = 'title4';
		$title4 = ! empty( $instance[$name] ) ? $instance[$name] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>">
                    <?php esc_attr_e( 'Write Name Of Car 4:', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>" 
                       name="<?php echo esc_attr( $this->get_field_name( $name ) ); ?>" type="text" value="<?php echo esc_attr( $title4); ?>">
		</p>
		<?php 
//                End of title4

                
//                ===============================  Cap =====================================================================
//                Cap1
                $name = 'cap1';
		$cap1 = ! empty( $instance[$name] ) ? $instance[$name] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>">
                    <?php esc_attr_e( 'Image URL for '.$name.':', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>"
                       name="<?php echo esc_attr( $this->get_field_name( $name ) ); ?>" type="text" value="<?php echo esc_attr( $cap1); ?>">
		</p>
		<?php 
//               End of cap1               
                
                //                Cap2
                $name = 'cap2';
		$cap2 = ! empty( $instance[$name] ) ? $instance[$name] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>">
                    <?php esc_attr_e( 'Image URL for '.$name.':', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>"
                       name="<?php echo esc_attr( $this->get_field_name( $name ) ); ?>" type="text" value="<?php echo esc_attr( $cap2); ?>">
		</p>
		<?php 
//               End of cap2
                
                //                Cap3
                $name = 'cap3';
		$cap3 = ! empty( $instance[$name] ) ? $instance[$name] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>">
                    <?php esc_attr_e( 'Image URL for '.$name.':', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>"
                       name="<?php echo esc_attr( $this->get_field_name( $name ) ); ?>" type="text" value="<?php echo esc_attr( $cap3); ?>">
		</p>
		<?php 
//               End of cap3
                
                //                Cap4
                $name = 'cap4';
		$cap4 = ! empty( $instance[$name] ) ? $instance[$name] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>">
                    <?php esc_attr_e( 'Image URL for '.$name.':', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $name ) ); ?>"
                       name="<?php echo esc_attr( $this->get_field_name( $name ) ); ?>" type="text" value="<?php echo esc_attr( $cap4); ?>">
		</p>
		<?php 
//               End of cap4
                
	}

    public function update( $new_instance, $old_instance ) {
                $instance = array();
                //                col-1
                $instance['img1'] = ( ! empty( $new_instance['img1'] ) ) ? strip_tags( $new_instance['img1'] ) : '';
                $instance['title1'] = ( ! empty( $new_instance['title1'] ) ) ? strip_tags( $new_instance['title1'] ) : '';
                $instance['cap1'] = ( ! empty( $new_instance['cap1'] ) ) ? strip_tags( $new_instance['cap1'] ) : '';
                
                //                col-2
                $instance['img2'] = ( ! empty( $new_instance['img2'] ) ) ? strip_tags( $new_instance['img2'] ) : '';
                $instance['title2'] = ( ! empty( $new_instance['title2'] ) ) ? strip_tags( $new_instance['title2'] ) : '';
                $instance['cap2'] = ( ! empty( $new_instance['cap2'] ) ) ? strip_tags( $new_instance['cap2'] ) : '';
                
                //                col-3
                $instance['img3'] = ( ! empty( $new_instance['img3'] ) ) ? strip_tags( $new_instance['img3'] ) : '';
                $instance['title3'] = ( ! empty( $new_instance['title3'] ) ) ? strip_tags( $new_instance['title3'] ) : '';
                $instance['cap3'] = ( ! empty( $new_instance['cap3'] ) ) ? strip_tags( $new_instance['cap3'] ) : '';
                
                //                col-4
                $instance['img4'] = ( ! empty( $new_instance['img4'] ) ) ? strip_tags( $new_instance['img4'] ) : '';
                $instance['title4'] = ( ! empty( $new_instance['title4'] ) ) ? strip_tags( $new_instance['title4'] ) : '';
                $instance['cap4'] = ( ! empty( $new_instance['cap4'] ) ) ? strip_tags( $new_instance['cap4'] ) : '';
                return $instance;
    }
    function widget($args, $instance) {
 
        ?>
<!--                Here Is our Fleet-->

<div class="ourFleet">
    <div class="container">
        <h3 class="exo2">Our Fleet</h3>

        <div class="car col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="fleetImg"><img src="<?=$instance['img1']?>" width="" height="" alt="Wessex Taxi Winchester Fleet images" /></div>
            <h4><?=$instance['title1']?></h4>
            <img src="<?=$instance['cap1']?>" width="" height="" alt="Winchester Taxis" />
        </div>
        <div class="car col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="fleetImg"><img src="<?=$instance['img2']?>" width="" height="" alt="Winchester Taxi Fleet images for Wessex Cars" /></div>
            <h4><?=$instance['title2']?></h4>
            <img src="<?=$instance['cap2']?>" width="" height="" alt="Winchester Taxis" />
        </div>
        <div class="car col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="fleetImg"><img src="<?=$instance['img3']?>" width="" height="" alt="Winchester Taxi Fleet images for Wessex Cars" /></div>
            <h4><?=$instance['title3']?></h4>
            <img src="<?=$instance['cap3']?>" width="" height="" alt="Winchester Taxi Wessex Cars" />
        </div>
        <div class="car col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="fleetImg"><img src="<?=$instance['img4']?>" width="" height="" alt="Winchester Taxis" /></div>
            <h4><?=$instance['title4']?></h4>
            <img src="<?=$instance['cap4']?>" width="" height="" alt="Winchester Taxis" />
        </div>

    </div>
</div>
<!--End Of Our Fleet-->
            <?php
    }
    

}

add_action('widgets_init' , function(){
register_widget('ourfleet');
});

