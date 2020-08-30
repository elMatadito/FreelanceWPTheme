<?php
/**
* Template Name: Home Page
*
* @package _ks
*/

get_header();
?>

	<?php
		while ( have_posts() ) :
			the_post();
			the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_ks' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		endwhile; // End of the loop.
		?>

<?php
get_sidebar();
get_footer();