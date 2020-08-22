<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _ks
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
      <span>&copy; <?php echo bloginfo( 'name' ); ?> <?php echo date("Y"); ?></span>
      <a href="<?php echo esc_url( __( 'https://kuallisoft.com', '_ks' ) ); ?>" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/kuallisoft_logo.png" alt="Powered by KualliSoft" />
      </a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
