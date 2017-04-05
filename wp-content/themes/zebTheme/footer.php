<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
    <?php if(dynamic_sidebar('above_footer')): else : endif; ?>

	</div><!-- .site-content -->

	<footer id="colophon" class="" role="contentinfo">
            
            <div class="footer-main">
                <div class="row container">
                    <div class="col-sm-3">
                        <h4>About Us</h4>
                        <div class="footerContent">
                            <p>
                                Although Wessex cars (the Winchester taxi service) headquarters are based in Winchester, we have several satellite
                                hubs for our fleets which allows us to provide extensive coverage within the Hampshire region as well as more distant 
                                and national commitments. Call us now for a quote on all taxi services in Winchester, Hants and UK.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h4>About Us</h4>
                        <div class="footerContent">
                            <p>
                                Although Wessex cars (the Winchester taxi service) headquarters are based in Winchester, we have several satellite
                                hubs for our fleets which allows us to provide extensive coverage within the Hampshire region as well as more distant 
                                and national commitments. Call us now for a quote on all taxi services in Winchester, Hants and UK.
                            </p>
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <h4>Contact Details</h4>
                        <div class="footerContent">
                            <p>
                                Unit 3, Scylla Industrial Estate, Winnall Valley Rd,
                                Winchester,
                                Hampshire SO23 0LD<br>

                                Phone: +44(0) 1962 877749<br>

                                Mobile: +44(0) 1962 626262<br>
                            </p>
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <h4>About Us</h4>
                        <div class="footerContent">
                            <p>
                                Although Wessex cars (the Winchester taxi service) headquarters are based in Winchester, we have several satellite
                                hubs for our fleets which allows us to provide extensive coverage within the Hampshire region as well as more distant 
                                and national commitments. Call us now for a quote on all taxi services in Winchester, Hants and UK.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
            
                <?php if(dynamic_sidebar('fixed_bar_down')): else : endif; ?>

	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
