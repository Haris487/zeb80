<?php /* Template Name: ContactUS */ ?>

<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
        
	<!-- Google Code for Contact Form Conversion Page --> <script type="text/javascript">

    /* <![CDATA[ */

    var google_conversion_id = 975970288;

    var google_conversion_language = "en";

    var google_conversion_format = "3";

    var google_conversion_color = "ffffff";

    var google_conversion_label = "9SmJCNnLqFkQ8L-w0QM"; var google_remarketing_only = false;

    /* ]]> */

</script>

<script type="text/javascript"

        src="//www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

    <div style="display:inline;">

        <img height="1" width="1" style="border-style:none;" alt="line"

             src="//www.googleadservices.com/pagead/conversion/975970288/?label=9SmJCNnLqFkQ8L-w0QM&amp;guid=ON&amp;script=0"/>

    </div>

</noscript>

<div class="breadcrumbRow hidden-xs">
    <div class="container">
        <h3 class="exo2 left">Contact Us</h3>
        <ul class="right">
            <li><a href="index.php">Home</a> </li>
            <em>-> </em>
            <li>Contact us</li>
        </ul>
    </div>
</div>

<div class="mainContent contactPage">
    <div class="container">
        <div class="contactFormRow left col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="contactHead">
                <h4 class="exo2">Enquiry form</h4>
            </div>
            <?php if(dynamic_sidebar('contact_us')): else : endif; ?>
        </div>
        <div class="contactColRight right col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="rowOne">
                <div class="contactHead">
                    <h4 class="exo2">Contact Info</h4>
                </div>
                
                <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

		// End the loop.
		endwhile;
		?>
            <div class="clearfix"></div>
            <div class="rowTwo">
                <div class="contactHead">
                    <h4 class="exo2">Get Social</h4>
                    <div class="socialIconsContact">
                        <?php if(dynamic_sidebar('topleft-1')): else : endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
