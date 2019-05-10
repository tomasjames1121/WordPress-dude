<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-10 16:05:23
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2019-05-10 16:05:31
 *
 * @package dude2019
 */

// define what modules se should NOT cache.
$exclude_template_part_from_cache = array(
  'contact-form'  => true,
);

// normally we want to use current page id
$have_rows_id = get_the_id();

/**
 *  ... but there is some expectations, like:
 *  - blog archive page
 *  - custom post type archive pages
 *
 *  NOTE! these cheks assumes you use air-helper, polylang and
 *  page for post type (humanmade/page-for-post-type) plugins.
 */
if ( is_home() ) {
  $have_rows_id = pll_get_post( get_option( 'page_for_posts' ) );
} elseif ( is_post_type_archive() ) {
  $post_type = get_post_type();
  $have_rows_id = pll_get_post( get_option( "page_for_{$post_type}" ) );
}

// check if there is modules.
if ( have_rows( 'modular', $have_rows_id ) ) :

  // loop modules.
  while ( have_rows( 'modular', $have_rows_id ) ) : the_row();

    // defaults
    $template_part_output = null;

    // make template part name.
    $template_part_name = str_replace( '_', '-', get_row_layout() );
    $template_row_index = get_row_index();
    $template_part_path = get_theme_file_path( "template-parts/modules/{$template_part_name}.php" );

    /**
     *  Make cache key.
     *  Key contains $have_rows_id to differiate modules if same module is used on multiple pages
     */
    $template_part_cache_key = "siteprefix_modular_{$have_rows_id}_{$template_part_name}|{$template_row_index}";

    /**
     *  Check if module needs to bypass cache or we are in development envarioment.
     *  If it in cache, we get content to variable. If not in cache, put it in there and to variable.
     *  In both cases, variable is returned in the end of this functon.
     */
    if ( ! array_key_exists( $template_part_name, $exclude_template_part_from_cache ) && getenv( 'WP_ENV' ) !== 'development' ) {

      // module can be cached, try to find it is already in cache.
      if ( ! $template_part_output = wp_cache_get( $template_part_cache_key, 'theme' ) ) {

        // module is not in cache.
        // validate that file actually exists.
        if ( file_exists( $template_part_path ) ) {

          // get module content.
          ob_start( 'ob_gzhandler' );
          include $template_part_path;
          $template_part_output = ob_get_clean();

          // save module to cache.
          wp_cache_set( $template_part_cache_key, $template_part_output, 'theme', HOUR_IN_SECONDS );

          // add log message in development and staging
          do_action( 'qm/debug', "Module cached: {$template_part_name} ({$template_part_cache_key})" );
        }
      } else {
        // add log message in development and staging
        do_action( 'qm/debug', "Module served from cache: {$template_part_name} ({$template_part_cache_key})" );
      }
    } else {
      // module is exluded from cache or we are in development envarioment

      // add log message in development and staging
      do_action( 'qm/debug', "Module bypassed cache: {$template_part_name} ({$template_part_cache_key})" );

      // validate that file actually exists.
      if ( file_exists( $template_part_path ) ) {

        // get module content.
        ob_start();
        include $template_part_path;
        $template_part_output = ob_get_clean();
      }
    }

    if ( empty( $template_part_output ) ) {
      do_action( 'qm/error', "Module {$template_part_name} output is empty" );
    }

    // finally output module content.
    echo $template_part_output;
  endwhile;
endif;
