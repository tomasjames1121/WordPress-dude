<?php
/**
 * Template part for displaying posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dude
 */

?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <?php
      if ( is_single() ) {
        the_title( '<h1 class="entry-title">', '</h1>' );
      } else {
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      }

      if ( 'post' === get_post_type() ) :
      ?>
      <div class="entry-meta">
        <p class="entry-time">
          <time datetime="<?php the_time( 'c' ); ?>"><?php echo get_the_date( get_option( 'date_format' ) ); ?></time>
        </p>
      </div><!-- .entry-meta -->
      <?php
      endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php
      the_content( sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dude' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dude' ),
        'after'  => '</div>',
      ) );
      ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
      <?php dude_entry_footer(); ?>
    </footer><!-- .entry-footer -->
  </article><!-- #post-## -->
