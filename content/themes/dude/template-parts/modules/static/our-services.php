<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-10 16:49:22
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2019-05-30 15:10:32
 *
 * @package dude2019
 */

?>

<section class="block block-our-services">
  <div class="container">

    <header class="block-head">
      <p class="block-title-pre" aria-describedby="block-title-our-services">Mitä me teemme?</p>
      <h2 class="block-title" id="block-title-our-services">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
    </header>

    <div class="cols">
      <div class="col col-text">
        <h3>Verkkosivut ja -palvelut</h3>
        <p class="col-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut ex consequat, facilisis.</p>

        <p class="cta-link"><a href="#">Tutustu</a></p>
      </div>

      <div class="col col-text">
        <h3>Visuaalinen suunnittelu</h3>
        <p class="col-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut ex consequat, facilisis.</p>

        <p class="cta-link"><a href="#">Tutustu</a></p>
      </div>

      <div class="col col-featured-image">
      </div>
    </div>

    <div class="image">
      <div class="background-image preview lazyload" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/placeholder-2-tiny.png');" data-src="<?php echo get_template_directory_uri(); ?>/images/placeholder-2.png"></div>
      <div class="background-image full-image"<?php if ( preg_match( '/Windows Phone|Lumia|iPad/i', $_SERVER['HTTP_USER_AGENT'] ) ) : ?> style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/placeholder-2.png');"<?php endif; ?>></div>
      <noscript><div class="background-image full-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/placeholder-2.png');"></div></noscript>
    </div>

  </div>
</section>
