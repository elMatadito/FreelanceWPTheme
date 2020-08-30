<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _ks
 */

?>

<aside class="widget-area">
  <div class="container">
    <div class="row">
      <section class="col-sm-12 col-md-3">
        <?php the_custom_logo(); ?>
        <p><?php bloginfo('description'); ?></p>
      </section>
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
  </div>
</aside><!-- #secondary -->
