<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-10 16:14:20
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2020-07-13 16:46:24
 *
 * @package dude
 */

// Featured image
$bg_image_tiny_default = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tiny-preload-thumbnail' );
$bg_image_mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
$bg_image_tiny = $bg_image_tiny_default[0];
$bg_image = null;
if ( has_post_thumbnail() ) {
  $bg_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
}
?>

<section class="block block-hero block-hero-fp block-hero-enable-transition">
  <div class="container opacity-on-load-instant">

    <div class="content">
      <h1>Ole <span class="has-glitch" data-text="uskottava.">uskottava.</span></h1>
      <p class="content-sub-statement">Suunnittelemme visuaalisesti näyttäviä ja teknisesti laadukkaita <span class="capital-p-dangit">WordPress</span>-verkkosivuja.</p>
    </div>

  </div>
</section>
