<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-18 19:18:00
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2019-05-18 19:28:37
 *
 * @package dude2019
 */

$query = new WP_Query( array(
  'post_type'               => 'person',
  'post_status'             => 'publish',
  'order'                   => 'ASC',
  'orderby'                 => 'menu_order',
  'posts_per_page'          => 50,
  'no_found_rows'           => true,
  'cache_results'           => true,
  'update_post_term_cache'  => false,
  'update_post_meta_cache'  => false,
) );

if ( ! $query->have_posts() ) {
  return;
} ?>

<section class="block block-dudes">
  <div class="container">

    <?php while ( $query->have_posts() ) : $query->the_post();
      $image = get_post_meta( get_the_id(), 'image_square', true );
      $title = get_post_meta( get_the_id(), 'title', true );

      if ( empty( $image ) ) {
        continue;
      } ?>

      <div class="col" style="background-image:url('<?php echo wp_get_attachment_url( $image ) ?>')">
        <div class="content">
          <h2><?php the_title() ?></h2>
          <?php if ( ! empty( $title ) ) : ?>
            <p><?php echo esc_html( $title ) ?></p>
          <?php endif; ?>
        </div>
        <a href="<?php the_permalink() ?>" class="global-link"></a>
      </div>

    <?php endwhile; wp_reset_postdata(); ?>

  </div>
</section>
