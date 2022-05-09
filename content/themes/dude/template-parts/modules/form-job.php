<?php
/**
 * @Author:             Roni Laukkarinen
 * @Date:               2021-10-11 16:08:55
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-05-09 15:02:57
 *
 * @package dude
 */

$filled_position = get_field( 'filled_position' );
?>

<section class="block block-form-job has-light-bg" id="hae">
  <div class="container">

    <?php if ( $filled_position ) : ?>
      <h2>Lähetä hakemus</h2>
      <p><b>Tähän työpaikkaan liittyvä positio on täytetty.</b> Kiitos kaikille hakeneille! Voit aina lähettää <a data-no-swup href="<?php echo esc_url( get_page_link( 10160 ) ); ?>">avoimen hakemuksen</a> tai katsoa <a href="<?php echo esc_url( get_page_link( 4491 ) ); ?>">muut työpaikat.</a></p>
    <?php else : ?>
      <h2>Lähetä meille hakemus</h2>

      <div class="description">
        <?php
        // If designer position
        if ( 10510 === get_the_ID() || 10687 === get_the_ID() ) { ?>
          <p>Voit lähettää hakemuksesi myös suoraan sähköpostitse <a href="https://www.dude.fi/dudet/kristian">Kristianille</a> osoitteeseen <a href="mailto:kristian@dude.fi">kristian@dude.fi</a> tai soitella paikasta puhelimitse numeroon <a href="tel:0408351033">040 835 1033</a>.</p>

          <p>Huomaathan, että kokemus + referenssit ovat tärkeässä roolissa hakemuksessasi, joten laitathan tekemiäsi töitä meille näytille samalla.
        <?php } else { ?>
          <p>Voit lähettää hakemuksesi myös suoraan sähköpostitse <a href="https://www.dude.fi/dudet/roni">Ronille</a> osoitteeseen <a href="mailto:roni@dude.fi">roni@dude.fi</a> tai soitella paikasta puhelimitse <a href="https://www.dude.fi/dudet/kristian">Kristianille</a> numeroon <a href="tel:0408351033">040 835 1033</a>.
        <?php } ?>
      </div>

      <?php
      // If designer position, show different form
      if ( 10510 === get_the_ID() || 10687 === get_the_ID() ) {
        $form_id = 12;
      } else {
        $form_id = 10;
      }
      ?>

      <?php gravity_form(
        $id = $form_id,
        $display_title = false,
        $display_description = false,
        $display_inactive = false,
        $field_values = null,
        $ajax = true,
        $echo = true
      ); ?>
    <?php endif; ?>

  </div>
 </section>
