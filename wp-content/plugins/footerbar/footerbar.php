<?php
/*
 * Plugin Name:Footer Bar
 * Plugin Uri:https:github.com/haris487
 * Description:Change Footer Bar Information
 * Version:1.0
 * Author:M.Haris
 * Author Uri:https:github.com/haris487
 * Licence : none
 */

class footerbar extends WP_Widget{
    private $fieldNames = array("contact","tagline","label","heading","contactUsLink");
    function __construct() {
        parent::__construct(false, $name = __('Footer Bar'));
    }
    
   public function form( $instance ) {
            
       
            foreach ($this->fieldNames as $fieldName){
//              Field Element
		$field = ! empty( $instance[$fieldName] ) ? $instance[$fieldName] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( $fieldName ) ); ?>">
                    <?php esc_attr_e( 'Enter '.$fieldName.' :', 'text_domain' ); ?>
                </label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $fieldName ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( $fieldName ) ); ?>" type="text" value="<?php echo esc_attr( $field); ?>">
		</p>
		<?php 
//                End Of Field Element
            } 
    }

    public function update( $new_instance, $old_instance ) {
                $instance = array();
                ?><div style = 'position:fixed'>
                <?="Field Names".$this->fieldNames?>    
                </div> <?php

                foreach ($this->fieldNames as $fieldName){
                   $instance[$fieldName] = ( ! empty( $new_instance[$fieldName] ) ) ? strip_tags( $new_instance[$fieldName] ) : ''; 
                }
                return $instance;
    }
    function widget($args, $instance) {
        ?>
                <div class="footerBar">
                    <div class="container">
                        <div class="devloppment-by-col col-lg-3 col-md-4 col-sm-5 col-xs-12">
                                    </div>
                        <div class="footerBarContact col-lg-5 col-md-5 col-sm-7 col-xs-12">
                            <div class="footerBarContactNum">
                                <a href="<?=$instance['contactUsLink']?>" class="footerBarContactBtn" >Contact Us</a>
                                <label><?=$instance['contact']?></label>
                            </div>
                        </div>
                        <div class="copyright col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <p><?=$instance['tagline']?> </p>
                        </div>
                    </div>
                </div>
            <?php
    }
    

}

add_action('widgets_init' , function(){
register_widget('footerbar');
});

