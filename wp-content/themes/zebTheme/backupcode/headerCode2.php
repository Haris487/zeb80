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
                        <div class="top-bar-container container">
                            
<!--                            Social Media Icon Start-->
                            <div class="left topBarLeft left">
<!--                             TODO Widget Area-->
                                	<?php if(dynamic_sidebar('topleft-1')): else : endif; ?> 
                            </div>
<!--                            Social Media Icons End-->
                            
                            <div class="topBarRight right">
                                <div class="contacts">
<!--                                    TODO Adding Wiget For Contact-->
                                    <label class="first col-lg-6 col-md-6 col-sm-6 col-xs-12">0123456789</label>
                                    <label class="right col-lg-6 col-md-6 col-sm-6 col-xs-12">0123456789</label>
                                </div>
<!--                                Todo Adding  Widget Button-->
                                <a class="contact-btn" href="">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav Menu Start -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-sm-2">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php 
                    dLog("custom logo Start");
                    twentyfifteen_the_custom_logo();
                    dLog("custom logo Start");
                    ?>
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse col-sm-12">
                    
            </div>
    </nav>
                    
                    
<!--                    NAV TEM-->
                                    <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentyfifteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>
                                            <?php endif; ?>
<!--                                                        Nav Tem-->
                    
                    
                    <!-- Nav Menu End -->
            </header>
                
                <!-- Their Header End -->
                

	<div id="content" class="site-content">
