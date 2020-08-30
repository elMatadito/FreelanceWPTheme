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

	<footer>
		<div class="container">
      <div class="row justify-content-between">
        <div class="col-md-4 col-sm-6">
          &copy; <?php echo bloginfo( 'name' ); ?> <?php echo date("Y"); ?>
        </div>
        <div class="col-md-4 col-sm-6 powered">
          <a href="<?php echo esc_url( __( 'https://kuallisoft.com', '_ks' ) ); ?>" rel="noopener" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/kuallisoft_logo.png" alt="Powered by KualliSoft" />
          </a>
        </div>
      </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
