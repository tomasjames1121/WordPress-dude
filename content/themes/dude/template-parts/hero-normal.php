<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-10 16:14:20
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2019-05-30 15:26:39
 *
 * @package dude2019
 */

$title = get_the_title();
$content = get_post_meta( get_the_id(), 'hero_content', true );

if ( is_post_type_archive( 'reference' ) ) {
  $title = 'Työt';
  $content = 'Olemme tehneet paljon kaikenlaista ja suurimmasta osasta hommia olemme ylpeitä. Muutamiin niistä voit tutustua täällä tarkemmin.';
} ?>

<section class="block block-hero block-hero-side-columns block-hero-enable-transition">
  <div class="container opacity-on-load-instant">

    <div class="content">
      <div class="side-content-box contact-information">
        <h1><?php echo $title ?></h1>

        <?php if ( ! empty( $content ) ) {
          echo wpautop( $content );
        }

        if ( 4449 === get_the_id() ) : ?>
          <p class="cta-link"><a href="<?php echo get_post_type_archive_link( 'reference' ) ?>">Mitä helvettiä? Missä työnäytteet?</a></p>
        <?php endif; ?>
      </div>
    </div>

    <div class="featured-image featured-image-side">
      <div class="shade"></div>
      <div class="background-image preview lazyload" style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ) ?>" data-src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ) ?>"></div>
      <div class="background-image full-image"<?php if ( preg_match( '/Windows Phone|Lumia|iPad/i', $_SERVER['HTTP_USER_AGENT'] ) ) : ?> style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ) ?>');"<?php endif; ?>></div>
      <noscript><div class="background-image full-image" style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ) ?>');"></div></noscript>
    </div>

  </div>
</section>
