<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _ks
 */

get_header();
?>

	<main id="primary" class="site-main">

    <div class="container">
      <section class="error-404 not-found card">
        <div>
          <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', '_ks' ); ?></h1>
          </header><!-- .page-header -->

          <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_ks' ); ?></p>
            <?php get_search_form(); ?>
          </div><!-- .page-content -->
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt="404" />
      </section><!-- .error-404 -->
    </div><!-- .container -->
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
