<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _ks
 */

?>
<div class="container">
  <article id="post-<?php the_ID(); ?>" <?php post_class('content-page'); ?>>
    
    <?php _ks_post_thumbnail(); ?>

    <div class="entry-content">
      <?php
      if ( get_the_content() ) {
        the_content();

        wp_link_pages(
          array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_ks' ),
            'after'  => '</div>',
          )
        );
      } else {
        echo 'UNDER CONSTRUCTION';
      }
      ?>
    </div><!-- .entry-content -->

  </article><!-- #post-<?php the_ID(); ?> -->
</div>