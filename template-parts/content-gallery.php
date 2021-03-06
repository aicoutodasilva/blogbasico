<?php
/**
 * Template part for displaying posts
 *
 * @package blogbasico
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if (has_post_thumbnail()) {?> 
  <div class="post-media">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_post_thumbnail();?></a>
  </div>
  <?php }?>

  <div class="post-content">
    <?php blogbasico_entry_header(); ?>

    <div class="entry-content clearfix">
      <?php
      if ( get_post_gallery() ) {
        echo '<div class="entry-gallery">';
          echo get_post_gallery();
        echo '</div>';
      };

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogbasico' ),
        'after'  => '</div>',
      ) );
      ?>
    </div><!-- .entry-content -->
      
    <?php blogbasico_entry_footer(); ?>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
