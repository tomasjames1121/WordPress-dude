<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-10 16:49:22
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2020-10-12 21:21:52
 *
 * @package dude
 */

$image_big = get_sub_field( 'image_big' );
$image_small_left = get_sub_field( 'image_small_left' );
$image_small_right = get_sub_field( 'image_small_right' );
$style = get_sub_field( 'style' );

// Bail if no content
if ( empty( $image_big ) ) {
  return;
}
?>

<section class="block has-dark-bg block-images has-style-<?php echo $style; ?>" aria-hidden="true">
  <div class="container">
  <h2 class="screen-reader-text">Kuvia toimistolta</h2>
    <?php if ( ! empty( $image_big ) ) : ?>
      <div class="image image-big">
        <?php image_lazyload_div( $image_big['id'] ); ?>
      </div>
    <?php endif; ?>

    <?php if ( ! empty( $image_small_left ) ) : ?>
      <div class="image image-small-left">
        <?php image_lazyload_div( $image_small_left['id'] ); ?>
      </div>
    <?php endif; ?>

    <?php if ( ! empty( $image_small_right ) ) : ?>
      <div class="image image-small-right">
        <?php image_lazyload_div( $image_small_right['id'] ); ?>
      </div>
    <?php endif; ?>
  </div>
</section>
