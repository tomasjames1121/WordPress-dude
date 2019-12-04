<?php
/**
 * Template Name: Kyselyt (moderni)
 *
 * @package dude
 */

the_post();

$form_id = get_field( 'form_id' );
$form_title = get_field( 'form_title' );
$form_description = get_field( 'form_description' );
$hero_content = get_field( 'hero_content' );

?>
<!doctype html>
<html <?php language_attributes(); ?>><script>
/**
 *
 * 👋 Moi!
 *
 * Onpa mahtavaa, että sivustomme koodi on saanut sinut kiinnostumaan. Tuotannossa suurin osa on minifoituna,
 * mutta meidän kaikki tekeminen löytyy myös GitHubistamme: https://github.com/digitoimistodude
 *
 * Tämän sivuston anti löytyy osoitteesta https://github.com/digitoimistodude/dude - tutki rauhassa!
 *
 * Haluaisitko meille töihin? Lähetä sähköpostia osoitteeseen moro@dude.fi.
 * Avoimiin työpaikkoihimme voit tutustua osoitteessa https://www.dude.fi/tyopaikat
 *
 * Toivottavasti palaillaan!
 *
 *
 *                    `/shhyyyhhyy+:`
 *                 `+hh+.        `-+yds:
 *         :`  ./+omo`                -sdo`
 *         hd`dh/--.                    `+ms`
 *        ydsMN                           `om:
 *       +m` +m.                            -ms
 *       /N:`                                `dy
 *        -dNh+-..  :hyy+.                 -syyMs
 *       `dy.   sNhsN/ `/hh:                /M.-+.
 *       +N     mo -/     .sdo`             /M`
 *       om    +N`          `+dy:           `M:
 *       +m   -N:              -sds:`        +m.
 *       om  :N/````              -ohyo:`     om-
 *       ds +dhyysyyyyyyso/-.-:+oyyyyymNNmhs+:-/ms.
 *     .hd``.          `.-/oys+:.`     ``..:/ohNymNy:
 *     :/N+sN             :Nom+             /M.M: `.:/.
 *      `M/sM+           `ms /N`           `mM.yd
 *      /N`+MN:         -ms   sd-         -mdN .M-
 *      hy -M/dy/-..-:ohy-     :yhs+/::/ohh-yh  hy
 *     `M:  mo .:+ooo/-`         `.::///-` `N/  /N`
 *     +N   :N.    .:+sssso/-`-+syyyyyso:` yd   `M:
 *     mo    +m/-ohy+-.``.-/sho:.`    `-oddd`    mo
 *    -M.     .+y/`                       :      yh
 *    om                                         :M.
 *    hy                                          sm`
 *    N/.+                                       yyNd
 *   :MdMs                                       -Msys
 *   /-/N`                                        om-`
 *     mo `                                      dhdy:
 *    +Myhm                                      hy
 *    `.`/N                                 :s+:`/N`
 *       :M`-h                               +MoyhNo
 *       .MdNd  -h`                      :o` `M:  `.
 *       `y.my+hMo                        hNs:ds
 *         -so/:M./s              --     --hNyys
 *             -MdyM.   /:       ` ho`  .Mysyo.
 *              s- dy-odM- .    yh /Mmo./N
 *                 :Md::M+hM-  omsdyMs/ymy
 *                  y  sh+.om`+N.  .:/:  `
 *                          smN-
 *                           y:
 *
 */
</script>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body class="template-surveys-modern">

  <div id="page" class="site">
   <div class="site-content">

      <main role="main" id="main" class="site-main">

        <header class="survey-header">
          <div class="survey-header--text">
            <?php if ( ! empty( $form_title ) ) : ?>
              <h1><?php echo $form_title; ?></h1>
            <?php endif; ?>

            <?php if ( ! empty( $hero_content ) ) : ?>
              <p class="survey-header-description"><?php echo $hero_content; ?></p>
            <?php endif; ?>
          </div>

          <div class="survey-header--logo">
            <?php include get_theme_file_path( '/svg/logo.svg' ); ?>
            <p class="survey-header--logo-tagline"><a href="https://www.dude.fi">www.dude.fi</a></p>
          </div>
        </header>

        <?php if ( ! empty( $form_description ) ) : ?>
          <div class="container">
            <?php echo wpautop( $form_description ); // WPCS: XSS ok. ?>
          </div>
        <?php endif; ?>

        <?php
        $id_or_title = $form_id;
        $display_title = false;
        $display_description = false;
        $display_inactive = false;
        $field_values = null;
        $ajax = false;
        $tabindex = 1;
        $echo = true;

        gravity_form( $id_or_title, $display_title, $display_description, $display_inactive, $field_values, $ajax, $tabindex, $echo );
        ?>

      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- #page -->

<script src="//instant.page/1.2.2" type="module" integrity="sha384-2xV8M5griQmzyiY3CDqh1dn4z3llDVqZDqzjzcY+jCBCk/a5fXJmuZ/40JJAPeoU"></script>

<!-- Hotjar Tracking Code for www.dude.fi -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:8741,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</body>
</html>
