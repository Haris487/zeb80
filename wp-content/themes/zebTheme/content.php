<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div class="breadcrumbRow hidden-xs">
    <div class="container">
                <?php
                if ( is_single() ) :
                        the_title( '<h3 class="exo2 left">', '</h3>' );
                else :
                        the_title( sprintf( '<h3 class="exo2 left"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
                endif;
		?>
    </div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    
<!--    My Page Content-->

<div class="mainContent content internalPage">
    <div class="container">
        <?php the_title( '<h3 style="width:100%" class="exo2 left">', '</h3>' ); ?>
        <div class="imgCol left col-lg-5 col-md-5 col-sm-5 col-xs-12">
            	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
                ?>
        </div>
        <div class="imgContent right col-lg-7 col-md-7 col-sm-7 col-xs-12">

		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>

        </div>
    </div>
</div>
<!--        End Of Page Content-->
</article><!-- #post-## -->
