<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-10 16:14:20
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2020-07-16 16:13:52
 *
 * @package dude
 */

$title = get_the_title();
$title_alt = get_post_meta( get_the_id(), 'title_alt', true );
$content = get_post_meta( get_the_id(), 'hero_content', true );

if ( ! empty( $title_alt ) ) {
  $title = $title_alt;
}

// Featured image
$bg_image_tiny_default = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tiny-preload-thumbnail' );
$bg_image_mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
$bg_image_tiny = $bg_image_tiny_default[0];
$bg_image = null;
if ( has_post_thumbnail() ) {
  $bg_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
}

if ( is_post_type_archive( 'reference' ) ) {
  $title = 'Työt';
  $content = 'Olemme tehneet paljon kaikenlaista ja suurimmasta osasta hommia olemme ylpeitä. Muutamiin niistä voit tutustua täällä tarkemmin.';
} ?>

<section class="block block-hero-jobs block-hero">
  <div class="container">

    <div class="content">
      <div class="contact-information">
        <h1><?php echo $title ?></h1>

        <div class="hero-description">
          <?php if ( ! empty( $content ) ) {
            echo wpautop( $content ); // phpcs:ignore
          } ?>
        </div>

        <ul class="jobs">
          <li class="animate animate-3"><a href="<?php echo get_page_link( 6117 ); ?>">WordPress-kehittäjää <span class="label">Haku päällä nyt!</span></a></li>
        </ul>
      </div>
    </div>

  </div>
</section>
