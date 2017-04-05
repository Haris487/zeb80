<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php
/**
 * My Custom PHP Functions
 * 
 */

function dLog($log){
    echo("<!--".$log."-->");
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
                <!-- Their Header -->
                <header>
                    <div class="top-bar">
                        <div class="top-bar-container container fixed_height">
                            
<!--                            Social Media Icon Start-->
                            <div class="left topBarLeft left">
<!--                             TODO Widget Area-->
                                	<?php if(dynamic_sidebar('topleft-1')): else : endif; ?> 
                            </div>
<!--                            Social Media Icons End-->
<!--                            Adding Contact Widget-->
                            <?php if(dynamic_sidebar('header_top_contact')): else : endif; ?>
                           <!--                            Adding Contact Widget-->

                        </div>
                    </div>
                    <!-- Nav Menu Start -->
                    
<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
    <button onclick="menubar_toggle_listener()" id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentyfifteen' ); ?></button>

    <div id="site-header-menu" class="site-header-menu">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
        
        
    <nav id="nav" class="navbar navbar-default">
        <div class ='row'>
                        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-lg-2">
                    <?php 
                    dLog("custom logo Start");
                    twentyfifteen_the_custom_logo();
                    dLog("custom logo Start");
                    ?>
                </a>
<!--                <button id="menubar_toggle"  type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="top-navbar col-lg-10">
                <nav id="site-navigation" class="navigation top-navigation" role="navigation">							
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'top-nav-menu' ) ); ?>					
                </nav><!-- #site-navigation -->
            </div><!-- #navbar -->           
        </div>
    </nav>
                    
  <?php endif; ?>
<?php endif; ?>                  
                    
                    <!-- Nav Menu End -->
</header>
                
                <!-- Their Header End -->
                

<div id="content" class="">
