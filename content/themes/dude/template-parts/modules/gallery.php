<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-25 14:37:31
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2019-05-25 20:03:05
 *
 * @package dude2019
 */

// try to get images from ccahe
$images = wp_cache_get( get_the_id() . '_gallery_images', 'theme' );

// no images on cache, get fresh
if ( ! $images ) {
  $images = get_sub_field( 'images' );

  if ( empty( $images ) ) {
    return;
  }

  shuffle( $images ); // set to random order

  foreach ( $images as $key => $image ) {
    $images[ $key ] = array(
      'url' => $image['url'],
      'alt' => get_post_meta( $image['ID'], '_wp_attachment_image_alt', true ),
    );
  }

  // save to cache
  wp_cache_set( get_the_id() . '_gallery_images', $images, 'theme', DAY_IN_SECONDS );
}

if ( empty( $images ) ) {
  return;
}

// get images for the grid
$visible_images = array_slice( $images, 0, 7 ); ?>

<section class="block block-gallery">
  <div class="container">

    <div class="cols">
      <?php foreach ( $visible_images as $image ) : ?>
        <div class="col" style="background-image: url('<?php echo esc_url( $image['url'] ) ?>');">
          <a class="global-link gallery-item" href="<?php echo esc_url( $image['url'] ) ?>"><span class="screen-reader-text">Avaa galleria kuvaan "<?php echo esc_html( $image['alt'] ) ?>"</span></a>
        </div>
      <?php endforeach; ?>
    </div>

    <?php
    // This is for JS gallery use
    foreach ( $images as $image ) : ?>
      <figure class="image hidden">
        <a href="<?php echo esc_url( $image['url'] ) ?>" class="gallery-item"><?php echo $image['alt'] ?></a>
      </figure>
    <?php endforeach; ?>

  </div>
</section>
