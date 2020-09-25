<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dude
 */

?>

</div><!-- #content -->

<?php if ( 'merch' === get_post_type() ) : ?>
<?php echo do_shortcode( '[simpay id="4535"]' ); ?>

<div class="cart" id="cart" data-product-id="null">
  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
    <circle cx="9" cy="21" r="1" />
    <circle cx="20" cy="21" r="1" />
    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
  </svg>

  <div class="cart-body">
    <p class="full-cart"><span class="cart-text">Korissa </span><span class="cart-text">yhteensä</span> <span class="qty cart-text" id="totals">0</span> <span class="cart-text">kpl</span><span class="cart-text">, </span><span class="qty cart-text" id="price">0</span><span class="cart-text"> &euro; </span> <span class="cart-text">(</span><i class="products" id="products"></i><span class="cart-text">)</span></p>

    <p class="empty-cart-text">Ostoskori on tyhjä.</p>

    <div class="buttons">
      <button class="empty-cart" onClick="emptyCart()">Tyhjennä ostoskori</button>
      <button class="buy" id="buy">Maksa pois kuleksimasta</button>
    </div>
  </div>
</div>

<script>
  function emptyCart() {
    window.location.reload();
  }

</script>
<?php endif; ?>

<footer role="contentinfo" id="colophon" class="block block-footer site-footer">

  <p class="back-to-top"><a href="#page" class="js-trigger top no-text-link" data-mt-duration="300"><span class="screen-reader-text"><?php echo esc_html_e( 'Takaisin ylös', 'dude' ); ?></span><?php include get_theme_file_path( '/svg/chevron-up.svg' ); ?></a></p>

  <div class="shade" aria-hidden="true">
    <div aria-hidden="true" class="background-image preview lazyload" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/footer-20.jpg');" data-src="<?php echo get_template_directory_uri(); ?>/images/footer.jpg" data-src-mobile="<?php echo get_template_directory_uri(); ?>/images/footer.jpg"></div>
    <div aria-hidden="true" class="background-image full-image" <?php if ( preg_match( '/Windows Phone|Lumia|iPad|Safari/i', $_SERVER['HTTP_USER_AGENT'] ) ) :  // phpcs:ignore ?> style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/footer.jpg');" <?php endif; ?>></div>
    <noscript>
      <div aria-hidden="true" class="background-image full-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/footer.jpg');"></div>
    </noscript>
  </div>

  <div class="container">

    <p class="large-text">Dude, vuodesta 2013. Paljon on nähty ja tehty. Tuntuuko, että olisimme oikea tekijä sinulle ja sinä oikea asiakas meille? <a href="<?php echo get_the_permalink( 4487 ); ?>" class="no-text-link">Yhteystiedot</a>.</p>

    <div class="cols cols-four">

      <div class="col">
        <h3>Digitoimisto Dude Oy</h3>
        <p>Kauppakatu 14<br />
          40100 Jyväskylä<br />
          <a class="no-text-link" href="mailto:moro@dude.fi">moro@dude.fi</a><br />
          <button class="chat open-chat open-chat-contact" aria-label="Avaa chat" tabindex="0">Avaa chat!</button>
        </p>
      </div>

      <div class="col">
        <h3>Asiakkuudet</h3>
        <p>Kristian Hohkavaara<br />
          <a class="no-text-link" href="tel:0408351033">040 835 1033</a><br />
          <a class="no-text-link" href="mailto:kristian@dude.fi">kristian@dude.fi</a>
        </p>
      </div>

      <div class="col">
        <ul class="menu-items nav-menu">
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="<?php echo get_post_type_archive_link( 'post' ); ?>">Blogi</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="<?php echo get_the_permalink( 4489 ); ?>">Koodi & yhteisö</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="<?php echo get_the_permalink( 4449 ); ?>">Yritys & kulttuuri</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="<?php echo get_the_permalink( 4491 ); ?>">Työpaikat</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="<?php echo esc_url( get_the_permalink( 6704 ) ); ?>">UKK</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a data-no-swup class="no-text-link" href="<?php echo get_post_type_archive_link( 'merch' ); ?>">Merch</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="https://handbook.dude.fi">Handbook</a></li>
        </ul>
      </div>

      <div class="col">
        <ul class="menu-items nav-menu">
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="http://www.facebook.com/digitoimistodude" target="_blank">Facebook</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="https://twitter.com/dudetoimisto" target="_blank">Twitter</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="http://www.linkedin.com/company/digitoimisto-dude-oy" target="_blank">LinkedIn</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="https://www.instagram.com/digitoimistodude/" target="_blank">Instagram</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="https://github.com/digitoimistodude" target="_blank">Github</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="https://www.itewiki.fi/digitoimisto-dude" target="_blank">IteWiki</a></li>
        </ul>
      </div>

    </div>

    <div class="main-links">
      <ul class="menu-items nav-menu">
        <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="<?php echo get_the_permalink( 9 ); ?>">Verkkosivut</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="<?php echo get_the_permalink( 4485 ); ?>">Suunnittelu</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="<?php echo get_post_type_archive_link( 'reference' ); ?>">Töitämme</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom dude-menu-item"><a class="no-text-link" href="<?php echo get_the_permalink( 6357 ); ?>">Ota yhteyttä</a></li>
      </ul>
    </div>

    <div class="disclaimer">
      <p><a class="no-text-link no-external-link-indicator" href="https://www.asiakastieto.fi/yritykset/fi/digitoimisto-dude-oy/25480215/yleiskuva" aria-label="Ulospäin vievä linkki: Digitoimisto Duden Asiakastieto-profiili">Digitoimisto Dude Oy</a> - Digitaalinen mainostoimisto, Jyväskylä. Kaikki oikeudet pidätetään. <a class="no-text-link" href="<?php echo esc_url( get_page_link( 3 ) ); ?>">Lue tietosuojaseloste</a>.</p>
    </div>

  </div>

</footer><!-- #colophon -->

</div><!-- #page -->

<script data-swup-reload-script async src="//www.instagram.com/embed.js"></script>
<script data-swup-reload-script async src="//platform.twitter.com/widgets.js"></script>
<script data-swup-reload-script>CRISP_WEBSITE_ID = "-K90vfAnyk27kD-pZAep"</script>
<script data-swup-reload-script async src="https://client.crisp.chat/l.js"></script>
<script async>window.CRISP_READY_TRIGGER = function () {
  // Hide chat circle by default unless there is unread messages or session iongoing
  if ($crisp.get("chat:unread:count") > 0 || $crisp.is("session:ongoing")) {
    $crisp.push(["do", "chat:show"]);
  } else {
    $crisp.push(["do", "chat:hide"]);
  }
};</script>

<?php wp_footer(); ?>

</div><!-- .site -->

<!-- Hotjar Tracking Code for www.dude.fi -->
<script data-swup-reload-script>
  (function (h, o, t, j, a, r) {
    h.hj = h.hj || function () {
      (h.hj.q = h.hj.q || []).push(arguments)
    };
    h._hjSettings = {
      hjid: 8741,
      hjsv: 6
    };
    a = o.getElementsByTagName('head')[0];
    r = o.createElement('script');
    r.async = 1;
    r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
    a.appendChild(r);
  })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>

<script data-swup-reload-script>
  var motionQuery = matchMedia('(prefers-reduced-motion)');

  function reducedMotionCheck() {
    if (motionQuery.matches) {
      // Code to run if "reduced" is true
    } else {
      // Code to run if no preference is true
      var _gsScope = "undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window;
      (_gsScope._gsQueue || (_gsScope._gsQueue = [])).push(function () {
          "use strict";
          var t, e, i, s, r, n, a, o, l, h, _, u, f, c, p, d;
          _gsScope._gsDefine("TweenMax", ["core.Animation", "core.SimpleTimeline", "TweenLite"], function (t, e, i) {
              var s = function (t) {
                  var e, i = [],
                    s = t.length;
                  for (e = 0; e !== s; i.push(t[e++]));
                  return i
                },
                r = function (t, e, i) {
                  var s, r, n = t.cycle;
                  for (s in n) r = n[s], t[s] = "function" == typeof r ? r.call(e[i], i) : r[i % r.length];
                  delete t.cycle
                },
                n = function (t, e, s) {
                  i.call(this, t, e, s), this._cycle = 0, this._yoyo = !0 === this.vars.yoyo, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._dirty = !0, this.render = n.prototype.render
                },
                a = 1e-10,
                o = i._internals,
                l = o.isSelector,
                h = o.isArray,
                _ = n.prototype = i.to({}, .1, {}),
                u = [];
              n.version = "1.18.4", _.constructor = n, _.kill()._gc = !1, n.killTweensOf = n.killDelayedCallsTo = i.killTweensOf, n.getTweensOf = i.getTweensOf, n.lagSmoothing = i.lagSmoothing, n.ticker = i.ticker, n.render = i.render, _.invalidate = function () {
                return this._yoyo = !0 === this.vars.yoyo, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._uncache(!0), i.prototype.invalidate.call(this)
              }, _.updateTo = function (t, e) {
                var s, r = this.ratio,
                  n = this.vars.immediateRender || t.immediateRender;
                for (s in e && this._startTime < this._timeline._time && (this._startTime = this._timeline._time, this._uncache(!1), this._gc ? this._enabled(!0, !1) : this._timeline.insert(this, this._startTime - this._delay)), t) this.vars[s] = t[s];
                if (this._initted || n)
                  if (e) this._initted = !1, n && this.render(0, !0, !0);
                  else if (this._gc && this._enabled(!0, !1), this._notifyPluginsOfEnabled && this._firstPT && i._onPluginEvent("_onDisable", this), this._time / this._duration > .998) {
                  var a = this._totalTime;
                  this.render(0, !0, !1), this._initted = !1, this.render(a, !0, !1)
                } else if (this._initted = !1, this._init(), this._time > 0 || n)
                  for (var o, l = 1 / (1 - r), h = this._firstPT; h;) o = h.s + h.c, h.c *= l, h.s = o - h.c, h = h._next;
                return this
              }, _.render = function (t, e, i) {
                this._initted || 0 === this._duration && this.vars.repeat && this.invalidate();
                var s, r, n, l, h, _, u, f, c = this._dirty ? this.totalDuration() : this._totalDuration,
                  p = this._time,
                  d = this._totalTime,
                  m = this._cycle,
                  g = this._duration,
                  v = this._rawPrevTime;
                if (t >= c - 1e-7 ? (this._totalTime = c, this._cycle = this._repeat, this._yoyo && 0 != (1 & this._cycle) ? (this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0) : (this._time = g, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1), this._reversed || (s = !0, r = "onComplete", i = i || this._timeline.autoRemoveChildren), 0 === g && (this._initted || !this.vars.lazy || i) && (this._startTime === this._timeline._duration && (t = 0), (0 > v || 0 >= t && t >= -1e-7 || v === a && "isPause" !== this.data) && v !== t && (i = !0, v > a && (
                    r = "onReverseComplete")), this._rawPrevTime = f = !e || t || v === t ? t : a)) : 1e-7 > t ? (this._totalTime = this._time = this._cycle = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== d || 0 === g && v > 0) && (r = "onReverseComplete", s = this._reversed), 0 > t && (this._active = !1, 0 === g && (this._initted || !this.vars.lazy || i) && (v >= 0 && (i = !0), this._rawPrevTime = f = !e || t || v === t ? t : a)), this._initted || (i = !0)) : (this._totalTime = this._time = t, 0 !== this._repeat && (l = g + this._repeatDelay, this._cycle =
                    this._totalTime / l >> 0, 0 !== this._cycle && this._cycle === this._totalTime / l && t >= d && this._cycle--, this._time = this._totalTime - this._cycle * l, this._yoyo && 0 != (1 & this._cycle) && (this._time = g - this._time), this._time > g ? this._time = g : this._time < 0 && (this._time = 0)), this._easeType ? (h = this._time / g, (1 === (_ = this._easeType) || 3 === _ && h >= .5) && (h = 1 - h), 3 === _ && (h *= 2), 1 === (u = this._easePower) ? h *= h : 2 === u ? h *= h * h : 3 === u ? h *= h * h * h : 4 === u && (h *= h * h * h * h), 1 === _ ? this.ratio =
                    1 - h : 2 === _ ? this.ratio = h : this._time / g < .5 ? this.ratio = h / 2 : this.ratio = 1 - h / 2) : this.ratio = this._ease.getRatio(this._time / g)), p !== this._time || i || m !== this._cycle) {
                  if (!this._initted) {
                    if (this._init(), !this._initted || this._gc) return;
                    if (!i && this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration)) return this._time = p, this._totalTime = d, this._rawPrevTime = v, this._cycle = m, o.lazyTweens.push(this), void(this._lazy = [t, e]);
                    this._time && !s ? this.ratio = this._ease.getRatio(this._time / g) : s && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1))
                  }
                  for (!1 !== this._lazy && (this._lazy = !1), this._active || !this._paused && this._time !== p && t >= 0 && (this._active = !0), 0 === d && (2 === this._initted && t > 0 && this._init(), this._startAt && (t >= 0 ? this._startAt.render(t, e, i) : r || (r = "_dummyGS")), this.vars.onStart && (0 !== this._totalTime || 0 === g) && (e || this._callback("onStart"))), n = this._firstPT; n;) n.f ? n.t[n.p](n.c * this.ratio + n.s) : n.t[n.p] = n.c * this.ratio + n.s, n = n._next;
                  this._onUpdate && (0 > t && this._startAt && this._startTime && this._startAt.render(t, e, i), e || (this._totalTime !== d || r) && this._callback("onUpdate")), this._cycle !== m && (e || this._gc || this.vars.onRepeat && this._callback("onRepeat")), r && (!this._gc || i) && (0 > t && this._startAt && !this._onUpdate && this._startTime && this._startAt.render(t, e, i), s && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[r] && this._callback(r), 0 === g && this._rawPrevTime === a && f !== a && (this._rawPrevTime = 0))
                } else d !== this._totalTime && this._onUpdate && (e || this._callback("onUpdate"))
              }, n.to = function (t, e, i) {
                return new n(t, e, i)
              }, n.from = function (t, e, i) {
                return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new n(t, e, i)
              }, n.fromTo = function (t, e, i, s) {
                return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, new n(t, e, s)
              }, n.staggerTo = n.allTo = function (t, e, a, o, _, f, c) {
                o = o || 0;
                var p, d, m, g, v = 0,
                  y = [],
                  T = function () {
                    a.onComplete && a.onComplete.apply(a.onCompleteScope || this, arguments), _.apply(c || a.callbackScope || this, f || u)
                  },
                  x = a.cycle,
                  b = a.startAt && a.startAt.cycle;
                for (h(t) || ("string" == typeof t && (t = i.selector(t) || t), l(t) && (t = s(t))), t = t || [], 0 > o && ((t = s(t)).reverse(), o *= -1), p = t.length - 1, m = 0; p >= m; m++) {
                  for (g in d = {}, a) d[g] = a[g];
                  if (x && r(d, t, m), b) {
                    for (g in b = d.startAt = {}, a.startAt) b[g] = a.startAt[g];
                    r(d.startAt, t, m)
                  }
                  d.delay = v + (d.delay || 0), m === p && _ && (d.onComplete = T), y[m] = new n(t[m], e, d), v += o
                }
                return y
              }, n.staggerFrom = n.allFrom = function (t, e, i, s, r, a, o) {
                return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, n.staggerTo(t, e, i, s, r, a, o)
              }, n.staggerFromTo = n.allFromTo = function (t, e, i, s, r, a, o, l) {
                return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, n.staggerTo(t, e, s, r, a, o, l)
              }, n.delayedCall = function (t, e, i, s, r) {
                return new n(e, 0, {
                  delay: t,
                  onComplete: e,
                  onCompleteParams: i,
                  callbackScope: s,
                  onReverseComplete: e,
                  onReverseCompleteParams: i,
                  immediateRender: !1,
                  useFrames: r,
                  overwrite: 0
                })
              }, n.set = function (t, e) {
                return new n(t, 0, e)
              }, n.isTweening = function (t) {
                return i.getTweensOf(t, !0).length > 0
              };
              var f = function (t, e) {
                  for (var s = [], r = 0, n = t._first; n;) n instanceof i ? s[r++] = n : (e && (s[r++] = n), r = (s = s.concat(f(n, e))).length), n = n._next;
                  return s
                },
                c = n.getAllTweens = function (e) {
                  return f(t._rootTimeline, e).concat(f(t._rootFramesTimeline, e))
                };
              n.killAll = function (t, i, s, r) {
                null == i && (i = !0), null == s && (s = !0);
                var n, a, o, l = c(0 != r),
                  h = l.length,
                  _ = i && s && r;
                for (o = 0; h > o; o++) a = l[o], (_ || a instanceof e || (n = a.target === a.vars.onComplete) && s || i && !n) && (t ? a.totalTime(a._reversed ? 0 : a.totalDuration()) : a._enabled(!1, !1))
              }, n.killChildTweensOf = function (t, e) {
                if (null != t) {
                  var r, a, _, u, f, c = o.tweenLookup;
                  if ("string" == typeof t && (t = i.selector(t) || t), l(t) && (t = s(t)), h(t))
                    for (u = t.length; --u > -1;) n.killChildTweensOf(t[u], e);
                  else {
                    for (_ in r = [], c)
                      for (a = c[_].target.parentNode; a;) a === t && (r = r.concat(c[_].tweens)), a = a.parentNode;
                    for (f = r.length, u = 0; f > u; u++) e && r[u].totalTime(r[u].totalDuration()), r[u]._enabled(!1, !1)
                  }
                }
              };
              var p = function (t, i, s, r) {
                i = !1 !== i, s = !1 !== s;
                for (var n, a, o = c(r = !1 !== r), l = i && s && r, h = o.length; --h > -1;) a = o[h], (l || a instanceof e || (n = a.target === a.vars.onComplete) && s || i && !n) && a.paused(t)
              };
              return n.pauseAll = function (t, e, i) {
                p(!0, t, e, i)
              }, n.resumeAll = function (t, e, i) {
                p(!1, t, e, i)
              }, n.globalTimeScale = function (e) {
                var s = t._rootTimeline,
                  r = i.ticker.time;
                return arguments.length ? (e = e || a, s._startTime = r - (r - s._startTime) * s._timeScale / e, s = t._rootFramesTimeline, r = i.ticker.frame, s._startTime = r - (r - s._startTime) * s._timeScale / e, s._timeScale = t._rootTimeline._timeScale = e, e) : s._timeScale
              }, _.progress = function (t, e) {
                return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), e) : this._time / this.duration()
              }, _.totalProgress = function (t, e) {
                return arguments.length ? this.totalTime(this.totalDuration() * t, e) : this._totalTime / this.totalDuration()
              }, _.time = function (t, e) {
                return arguments.length ? (this._dirty && this.totalDuration(), t > this._duration && (t = this._duration), this._yoyo && 0 != (1 & this._cycle) ? t = this._duration - t + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(t, e)) : this._time
              }, _.duration = function (e) {
                return arguments.length ? t.prototype.duration.call(this, e) : this._duration
              }, _.totalDuration = function (t) {
                return arguments.length ? -1 === this._repeat ? this : this.duration((t - this._repeat * this._repeatDelay) / (this._repeat + 1)) : (this._dirty && (this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat, this._dirty = !1), this._totalDuration)
              }, _.repeat = function (t) {
                return arguments.length ? (this._repeat = t, this._uncache(!0)) : this._repeat
              }, _.repeatDelay = function (t) {
                return arguments.length ? (this._repeatDelay = t, this._uncache(!0)) : this._repeatDelay
              }, _.yoyo = function (t) {
                return arguments.length ? (this._yoyo = t, this) : this._yoyo
              }, n
            }, !0), _gsScope._gsDefine("TimelineLite", ["core.Animation", "core.SimpleTimeline", "TweenLite"], function (t, e, i) {
              var s = function (t) {
                  e.call(this, t), this._labels = {}, this.autoRemoveChildren = !0 === this.vars.autoRemoveChildren, this.smoothChildTiming = !0 === this.vars.smoothChildTiming, this._sortChildren = !0, this._onUpdate = this.vars.onUpdate;
                  var i, s, r = this.vars;
                  for (s in r) i = r[s], l(i) && -1 !== i.join("").indexOf("{self}") && (r[s] = this._swapSelfInParams(i));
                  l(r.tweens) && this.add(r.tweens, 0, r.align, r.stagger)
                },
                r = 1e-10,
                n = i._internals,
                a = s._internals = {},
                o = n.isSelector,
                l = n.isArray,
                h = n.lazyTweens,
                _ = n.lazyRender,
                u = _gsScope._gsDefine.globals,
                f = function (t) {
                  var e, i = {};
                  for (e in t) i[e] = t[e];
                  return i
                },
                c = function (t, e, i) {
                  var s, r, n = t.cycle;
                  for (s in n) r = n[s], t[s] = "function" == typeof r ? r.call(e[i], i) : r[i % r.length];
                  delete t.cycle
                },
                p = a.pauseCallback = function () {},
                d = function (t) {
                  var e, i = [],
                    s = t.length;
                  for (e = 0; e !== s; i.push(t[e++]));
                  return i
                },
                m = s.prototype = new e;
              return s.version = "1.18.4", m.constructor = s, m.kill()._gc = m._forcingPlayhead = m._hasPause = !1, m.to = function (t, e, s, r) {
                var n = s.repeat && u.TweenMax || i;
                return e ? this.add(new n(t, e, s), r) : this.set(t, s, r)
              }, m.from = function (t, e, s, r) {
                return this.add((s.repeat && u.TweenMax || i).from(t, e, s), r)
              }, m.fromTo = function (t, e, s, r, n) {
                var a = r.repeat && u.TweenMax || i;
                return e ? this.add(a.fromTo(t, e, s, r), n) : this.set(t, r, n)
              }, m.staggerTo = function (t, e, r, n, a, l, h, _) {
                var u, p, m = new s({
                    onComplete: l,
                    onCompleteParams: h,
                    callbackScope: _,
                    smoothChildTiming: this.smoothChildTiming
                  }),
                  g = r.cycle;
                for ("string" == typeof t && (t = i.selector(t) || t), o(t = t || []) && (t = d(t)), 0 > (n = n || 0) && ((t = d(t)).reverse(), n *= -1), p = 0; p < t.length; p++)(u = f(r)).startAt && (u.startAt = f(u.startAt), u.startAt.cycle && c(u.startAt, t, p)), g && c(u, t, p), m.to(t[p], e, u, p * n);
                return this.add(m, a)
              }, m.staggerFrom = function (t, e, i, s, r, n, a, o) {
                return i.immediateRender = 0 != i.immediateRender, i.runBackwards = !0, this.staggerTo(t, e, i, s, r, n, a, o)
              }, m.staggerFromTo = function (t, e, i, s, r, n, a, o, l) {
                return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, this.staggerTo(t, e, s, r, n, a, o, l)
              }, m.call = function (t, e, s, r) {
                return this.add(i.delayedCall(0, t, e, s), r)
              }, m.set = function (t, e, s) {
                return s = this._parseTimeOrLabel(s, 0, !0), null == e.immediateRender && (e.immediateRender = s === this._time && !this._paused), this.add(new i(t, 0, e), s)
              }, s.exportRoot = function (t, e) {
                null == (t = t || {}).smoothChildTiming && (t.smoothChildTiming = !0);
                var r, n, a = new s(t),
                  o = a._timeline;
                for (null == e && (e = !0), o._remove(a, !0), a._startTime = 0, a._rawPrevTime = a._time = a._totalTime = o._time, r = o._first; r;) n = r._next, e && r instanceof i && r.target === r.vars.onComplete || a.add(r, r._startTime - r._delay), r = n;
                return o.add(a, 0), a
              }, m.add = function (r, n, a, o) {
                var h, _, u, f, c, p;
                if ("number" != typeof n && (n = this._parseTimeOrLabel(n, 0, !0, r)), !(r instanceof t)) {
                  if (r instanceof Array || r && r.push && l(r)) {
                    for (a = a || "normal", o = o || 0, h = n, _ = r.length, u = 0; _ > u; u++) l(f = r[u]) && (f = new s({
                      tweens: f
                    })), this.add(f, h), "string" != typeof f && "function" != typeof f && ("sequence" === a ? h = f._startTime + f.totalDuration() / f._timeScale : "start" === a && (f._startTime -= f.delay())), h += o;
                    return this._uncache(!0)
                  }
                  if ("string" == typeof r) return this.addLabel(r, n);
                  if ("function" != typeof r) throw "Cannot add " + r + " into the timeline; it is not a tween, timeline, function, or string.";
                  r = i.delayedCall(0, r)
                }
                if (e.prototype.add.call(this, r, n), (this._gc || this._time === this._duration) && !this._paused && this._duration < this.duration())
                  for (p = (c = this).rawTime() > r._startTime; c._timeline;) p && c._timeline.smoothChildTiming ? c.totalTime(c._totalTime, !0) : c._gc && c._enabled(!0, !1), c = c._timeline;
                return this
              }, m.remove = function (e) {
                if (e instanceof t) {
                  this._remove(e, !1);
                  var i = e._timeline = e.vars.useFrames ? t._rootFramesTimeline : t._rootTimeline;
                  return e._startTime = (e._paused ? e._pauseTime : i._time) - (e._reversed ? e.totalDuration() - e._totalTime : e._totalTime) / e._timeScale, this
                }
                if (e instanceof Array || e && e.push && l(e)) {
                  for (var s = e.length; --s > -1;) this.remove(e[s]);
                  return this
                }
                return "string" == typeof e ? this.removeLabel(e) : this.kill(null, e)
              }, m._remove = function (t, i) {
                e.prototype._remove.call(this, t, i);
                var s = this._last;
                return s ? this._time > s._startTime + s._totalDuration / s._timeScale && (this._time = this.duration(), this._totalTime = this._totalDuration) : this._time = this._totalTime = this._duration = this._totalDuration = 0, this
              }, m.append = function (t, e) {
                return this.add(t, this._parseTimeOrLabel(null, e, !0, t))
              }, m.insert = m.insertMultiple = function (t, e, i, s) {
                return this.add(t, e || 0, i, s)
              }, m.appendMultiple = function (t, e, i, s) {
                return this.add(t, this._parseTimeOrLabel(null, e, !0, t), i, s)
              }, m.addLabel = function (t, e) {
                return this._labels[t] = this._parseTimeOrLabel(e), this
              }, m.addPause = function (t, e, s, r) {
                var n = i.delayedCall(0, p, s, r || this);
                return n.vars.onComplete = n.vars.onReverseComplete = e, n.data = "isPause", this._hasPause = !0, this.add(n, t)
              }, m.removeLabel = function (t) {
                return delete this._labels[t], this
              }, m.getLabelTime = function (t) {
                return null != this._labels[t] ? this._labels[t] : -1
              }, m._parseTimeOrLabel = function (e, i, s, r) {
                var n;
                if (r instanceof t && r.timeline === this) this.remove(r);
                else if (r && (r instanceof Array || r.push && l(r)))
                  for (n = r.length; --n > -1;) r[n] instanceof t && r[n].timeline === this && this.remove(r[n]);
                if ("string" == typeof i) return this._parseTimeOrLabel(i, s && "number" == typeof e && null == this._labels[i] ? e - this.duration() : 0, s);
                if (i = i || 0, "string" != typeof e || !isNaN(e) && null == this._labels[e]) null == e && (e = this.duration());
                else {
                  if (-1 === (n = e.indexOf("="))) return null == this._labels[e] ? s ? this._labels[e] = this.duration() + i : i : this._labels[e] + i;
                  i = parseInt(e.charAt(n - 1) + "1", 10) * Number(e.substr(n + 1)), e = n > 1 ? this._parseTimeOrLabel(e.substr(0, n - 1), 0, s) : this.duration()
                }
                return Number(e) + i
              }, m.seek = function (t, e) {
                return this.totalTime("number" == typeof t ? t : this._parseTimeOrLabel(t), !1 !== e)
              }, m.stop = function () {
                return this.paused(!0)
              }, m.gotoAndPlay = function (t, e) {
                return this.play(t, e)
              }, m.gotoAndStop = function (t, e) {
                return this.pause(t, e)
              }, m.render = function (t, e, i) {
                this._gc && this._enabled(!0, !1);
                var s, n, a, o, l, u, f, c = this._dirty ? this.totalDuration() : this._totalDuration,
                  p = this._time,
                  d = this._startTime,
                  m = this._timeScale,
                  g = this._paused;
                if (t >= c - 1e-7) this._totalTime = this._time = c, this._reversed || this._hasPausedChild() || (n = !0, o = "onComplete", l = !!this._timeline.autoRemoveChildren, 0 === this._duration && (0 >= t && t >= -1e-7 || this._rawPrevTime < 0 || this._rawPrevTime === r) && this._rawPrevTime !== t && this._first && (l = !0, this._rawPrevTime > r && (o = "onReverseComplete"))), this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : r, t = c + 1e-4;
                else if (1e-7 > t)
                  if (this._totalTime = this._time = 0, (0 !== p || 0 === this._duration && this._rawPrevTime !== r && (this._rawPrevTime > 0 || 0 > t && this._rawPrevTime >= 0)) && (o = "onReverseComplete", n = this._reversed), 0 > t) this._active = !1, this._timeline.autoRemoveChildren && this._reversed ? (l = n = !0, o = "onReverseComplete") : this._rawPrevTime >= 0 && this._first && (l = !0), this._rawPrevTime = t;
                  else {
                    if (this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : r, 0 === t && n)
                      for (s = this._first; s && 0 === s._startTime;) s._duration || (n = !1), s = s._next;
                    t = 0, this._initted || (l = !0)
                  }
                else {
                  if (this._hasPause && !this._forcingPlayhead && !e) {
                    if (t >= p)
                      for (s = this._first; s && s._startTime <= t && !u;) s._duration || "isPause" !== s.data || s.ratio || 0 === s._startTime && 0 === this._rawPrevTime || (u = s), s = s._next;
                    else
                      for (s = this._last; s && s._startTime >= t && !u;) s._duration || "isPause" === s.data && s._rawPrevTime > 0 && (u = s), s = s._prev;
                    u && (this._time = t = u._startTime, this._totalTime = t + this._cycle * (this._totalDuration + this._repeatDelay))
                  }
                  this._totalTime = this._time = this._rawPrevTime = t
                }
                if (this._time !== p && this._first || i || l || u) {
                  if (this._initted || (this._initted = !0), this._active || !this._paused && this._time !== p && t > 0 && (this._active = !0), 0 === p && this.vars.onStart && 0 !== this._time && (e || this._callback("onStart")), (f = this._time) >= p)
                    for (s = this._first; s && (a = s._next, f === this._time && (!this._paused || g));)(s._active || s._startTime <= f && !s._paused && !s._gc) && (u === s && this.pause(), s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = a;
                  else
                    for (s = this._last; s && (a = s._prev, f === this._time && (!this._paused || g));) {
                      if (s._active || s._startTime <= p && !s._paused && !s._gc) {
                        if (u === s) {
                          for (u = s._prev; u && u.endTime() > this._time;) u.render(u._reversed ? u.totalDuration() - (t - u._startTime) * u._timeScale : (t - u._startTime) * u._timeScale, e, i), u = u._prev;
                          u = null, this.pause()
                        }
                        s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)
                      }
                      s = a
                    }
                  this._onUpdate && (e || (h.length && _(), this._callback("onUpdate"))), o && (this._gc || (d === this._startTime || m !== this._timeScale) && (0 === this._time || c >= this.totalDuration()) && (n && (h.length && _(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[o] && this._callback(o)))
                }
              }, m._hasPausedChild = function () {
                for (var t = this._first; t;) {
                  if (t._paused || t instanceof s && t._hasPausedChild()) return !0;
                  t = t._next
                }
                return !1
              }, m.getChildren = function (t, e, s, r) {
                r = r || -9999999999;
                for (var n = [], a = this._first, o = 0; a;) a._startTime < r || (a instanceof i ? !1 !== e && (n[o++] = a) : (!1 !== s && (n[o++] = a), !1 !== t && (o = (n = n.concat(a.getChildren(!0, e, s))).length))), a = a._next;
                return n
              }, m.getTweensOf = function (t, e) {
                var s, r, n = this._gc,
                  a = [],
                  o = 0;
                for (n && this._enabled(!0, !0), r = (s = i.getTweensOf(t)).length; --r > -1;)(s[r].timeline === this || e && this._contains(s[r])) && (a[o++] = s[r]);
                return n && this._enabled(!1, !0), a
              }, m.recent = function () {
                return this._recent
              }, m._contains = function (t) {
                for (var e = t.timeline; e;) {
                  if (e === this) return !0;
                  e = e.timeline
                }
                return !1
              }, m.shiftChildren = function (t, e, i) {
                i = i || 0;
                for (var s, r = this._first, n = this._labels; r;) r._startTime >= i && (r._startTime += t), r = r._next;
                if (e)
                  for (s in n) n[s] >= i && (n[s] += t);
                return this._uncache(!0)
              }, m._kill = function (t, e) {
                if (!t && !e) return this._enabled(!1, !1);
                for (var i = e ? this.getTweensOf(e) : this.getChildren(!0, !0, !1), s = i.length, r = !1; --s > -1;) i[s]._kill(t, e) && (r = !0);
                return r
              }, m.clear = function (t) {
                var e = this.getChildren(!1, !0, !0),
                  i = e.length;
                for (this._time = this._totalTime = 0; --i > -1;) e[i]._enabled(!1, !1);
                return !1 !== t && (this._labels = {}), this._uncache(!0)
              }, m.invalidate = function () {
                for (var e = this._first; e;) e.invalidate(), e = e._next;
                return t.prototype.invalidate.call(this)
              }, m._enabled = function (t, i) {
                if (t === this._gc)
                  for (var s = this._first; s;) s._enabled(t, !0), s = s._next;
                return e.prototype._enabled.call(this, t, i)
              }, m.totalTime = function (e, i, s) {
                this._forcingPlayhead = !0;
                var r = t.prototype.totalTime.apply(this, arguments);
                return this._forcingPlayhead = !1, r
              }, m.duration = function (t) {
                return arguments.length ? (0 !== this.duration() && 0 !== t && this.timeScale(this._duration / t), this) : (this._dirty && this.totalDuration(), this._duration)
              }, m.totalDuration = function (t) {
                if (!arguments.length) {
                  if (this._dirty) {
                    for (var e, i, s = 0, r = this._last, n = 999999999999; r;) e = r._prev, r._dirty && r.totalDuration(), r._startTime > n && this._sortChildren && !r._paused ? this.add(r, r._startTime - r._delay) : n = r._startTime, r._startTime < 0 && !r._paused && (s -= r._startTime, this._timeline.smoothChildTiming && (this._startTime += r._startTime / this._timeScale), this.shiftChildren(-r._startTime, !1, -9999999999), n = 0), (i = r._startTime + r._totalDuration / r._timeScale) > s && (s = i), r = e;
                    this._duration = this._totalDuration = s, this._dirty = !1
                  }
                  return this._totalDuration
                }
                return t && this.totalDuration() ? this.timeScale(this._totalDuration / t) : this
              }, m.paused = function (e) {
                if (!e)
                  for (var i = this._first, s = this._time; i;) i._startTime === s && "isPause" === i.data && (i._rawPrevTime = 0), i = i._next;
                return t.prototype.paused.apply(this, arguments)
              }, m.usesFrames = function () {
                for (var e = this._timeline; e._timeline;) e = e._timeline;
                return e === t._rootFramesTimeline
              }, m.rawTime = function () {
                return this._paused ? this._totalTime : (this._timeline.rawTime() - this._startTime) * this._timeScale
              }, s
            }, !0), _gsScope._gsDefine("TimelineMax", ["TimelineLite", "TweenLite", "easing.Ease"], function (t, e, i) {
              var s = function (e) {
                  t.call(this, e), this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._cycle = 0, this._yoyo = !0 === this.vars.yoyo, this._dirty = !0
                },
                r = 1e-10,
                n = e._internals,
                a = n.lazyTweens,
                o = n.lazyRender,
                l = new i(null, null, 1, 0),
                h = s.prototype = new t;
              return h.constructor = s, h.kill()._gc = !1, s.version = "1.18.4", h.invalidate = function () {
                return this._yoyo = !0 === this.vars.yoyo, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._uncache(!0), t.prototype.invalidate.call(this)
              }, h.addCallback = function (t, i, s, r) {
                return this.add(e.delayedCall(0, t, s, r), i)
              }, h.removeCallback = function (t, e) {
                if (t)
                  if (null == e) this._kill(null, t);
                  else
                    for (var i = this.getTweensOf(t, !1), s = i.length, r = this._parseTimeOrLabel(e); --s > -1;) i[s]._startTime === r && i[s]._enabled(!1, !1);
                return this
              }, h.removePause = function (e) {
                return this.removeCallback(t._internals.pauseCallback, e)
              }, h.tweenTo = function (t, i) {
                i = i || {};
                var s, r, n, a = {
                  ease: l,
                  useFrames: this.usesFrames(),
                  immediateRender: !1
                };
                for (r in i) a[r] = i[r];
                return a.time = this._parseTimeOrLabel(t), s = Math.abs(Number(a.time) - this._time) / this._timeScale || .001, n = new e(this, s, a), a.onStart = function () {
                  n.target.paused(!0), n.vars.time !== n.target.time() && s === n.duration() && n.duration(Math.abs(n.vars.time - n.target.time()) / n.target._timeScale), i.onStart && n._callback("onStart")
                }, n
              }, h.tweenFromTo = function (t, e, i) {
                i = i || {}, t = this._parseTimeOrLabel(t), i.startAt = {
                  onComplete: this.seek,
                  onCompleteParams: [t],
                  callbackScope: this
                }, i.immediateRender = !1 !== i.immediateRender;
                var s = this.tweenTo(e, i);
                return s.duration(Math.abs(s.vars.time - t) / this._timeScale || .001)
              }, h.render = function (t, e, i) {
                this._gc && this._enabled(!0, !1);
                var s, n, l, h, _, u, f, c, p = this._dirty ? this.totalDuration() : this._totalDuration,
                  d = this._duration,
                  m = this._time,
                  g = this._totalTime,
                  v = this._startTime,
                  y = this._timeScale,
                  T = this._rawPrevTime,
                  x = this._paused,
                  b = this._cycle;
                if (t >= p - 1e-7) this._locked || (this._totalTime = p, this._cycle = this._repeat), this._reversed || this._hasPausedChild() || (n = !0, h = "onComplete", _ = !!this._timeline.autoRemoveChildren, 0 === this._duration && (0 >= t && t >= -1e-7 || 0 > T || T === r) && T !== t && this._first && (_ = !0, T > r && (h = "onReverseComplete"))), this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : r, this._yoyo && 0 != (1 & this._cycle) ? this._time = t = 0 : (this._time = d, t = d + 1e-4);
                else if (1e-7 > t)
                  if (this._locked || (this._totalTime = this._cycle = 0), this._time = 0, (0 !== m || 0 === d && T !== r && (T > 0 || 0 > t && T >= 0) && !this._locked) && (h = "onReverseComplete", n = this._reversed), 0 > t) this._active = !1, this._timeline.autoRemoveChildren && this._reversed ? (_ = n = !0, h = "onReverseComplete") : T >= 0 && this._first && (_ = !0), this._rawPrevTime = t;
                  else {
                    if (this._rawPrevTime = d || !e || t || this._rawPrevTime === t ? t : r, 0 === t && n)
                      for (s = this._first; s && 0 === s._startTime;) s._duration || (n = !1), s = s._next;
                    t = 0, this._initted || (_ = !0)
                  }
                else if (0 === d && 0 > T && (_ = !0), this._time = this._rawPrevTime = t, this._locked || (this._totalTime = t, 0 !== this._repeat && (u = d + this._repeatDelay, this._cycle = this._totalTime / u >> 0, 0 !== this._cycle && this._cycle === this._totalTime / u && t >= g && this._cycle--, this._time = this._totalTime - this._cycle * u, this._yoyo && 0 != (1 & this._cycle) && (this._time = d - this._time), this._time > d ? (this._time = d, t = d + 1e-4) : this._time < 0 ? this._time = t = 0 : t = this._time)), this._hasPause && !this._forcingPlayhead && !e) {
                  if ((t = this._time) >= m)
                    for (s = this._first; s && s._startTime <= t && !f;) s._duration || "isPause" !== s.data || s.ratio || 0 === s._startTime && 0 === this._rawPrevTime || (f = s), s = s._next;
                  else
                    for (s = this._last; s && s._startTime >= t && !f;) s._duration || "isPause" === s.data && s._rawPrevTime > 0 && (f = s), s = s._prev;
                  f && (this._time = t = f._startTime, this._totalTime = t + this._cycle * (this._totalDuration + this._repeatDelay))
                }
                if (this._cycle !== b && !this._locked) {
                  var w = this._yoyo && 0 != (1 & b),
                    P = w === (this._yoyo && 0 != (1 & this._cycle)),
                    O = this._totalTime,
                    S = this._cycle,
                    k = this._rawPrevTime,
                    R = this._time;
                  if (this._totalTime = b * d, this._cycle < b ? w = !w : this._totalTime += d, this._time = m, this._rawPrevTime = 0 === d ? T - 1e-4 : T, this._cycle = b, this._locked = !0, m = w ? 0 : d, this.render(m, e, 0 === d), e || this._gc || this.vars.onRepeat && this._callback("onRepeat"), m !== this._time) return;
                  if (P && (m = w ? d + 1e-4 : -1e-4, this.render(m, !0, !1)), this._locked = !1, this._paused && !x) return;
                  this._time = R, this._totalTime = O, this._cycle = S, this._rawPrevTime = k
                }
                if (this._time !== m && this._first || i || _ || f) {
                  if (this._initted || (this._initted = !0), this._active || !this._paused && this._totalTime !== g && t > 0 && (this._active = !0), 0 === g && this.vars.onStart && 0 !== this._totalTime && (e || this._callback("onStart")), (c = this._time) >= m)
                    for (s = this._first; s && (l = s._next, c === this._time && (!this._paused || x));)(s._active || s._startTime <= this._time && !s._paused && !s._gc) && (f === s && this.pause(), s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = l;
                  else
                    for (s = this._last; s && (l = s._prev, c === this._time && (!this._paused || x));) {
                      if (s._active || s._startTime <= m && !s._paused && !s._gc) {
                        if (f === s) {
                          for (f = s._prev; f && f.endTime() > this._time;) f.render(f._reversed ? f.totalDuration() - (t - f._startTime) * f._timeScale : (t - f._startTime) * f._timeScale, e, i), f = f._prev;
                          f = null, this.pause()
                        }
                        s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)
                      }
                      s = l
                    }
                  this._onUpdate && (e || (a.length && o(), this._callback("onUpdate"))), h && (this._locked || this._gc || (v === this._startTime || y !== this._timeScale) && (0 === this._time || p >= this.totalDuration()) && (n && (a.length && o(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[h] && this._callback(h)))
                } else g !== this._totalTime && this._onUpdate && (e || this._callback("onUpdate"))
              }, h.getActive = function (t, e, i) {
                null == t && (t = !0), null == e && (e = !0), null == i && (i = !1);
                var s, r, n = [],
                  a = this.getChildren(t, e, i),
                  o = 0,
                  l = a.length;
                for (s = 0; l > s; s++)(r = a[s]).isActive() && (n[o++] = r);
                return n
              }, h.getLabelAfter = function (t) {
                t || 0 !== t && (t = this._time);
                var e, i = this.getLabelsArray(),
                  s = i.length;
                for (e = 0; s > e; e++)
                  if (i[e].time > t) return i[e].name;
                return null
              }, h.getLabelBefore = function (t) {
                null == t && (t = this._time);
                for (var e = this.getLabelsArray(), i = e.length; --i > -1;)
                  if (e[i].time < t) return e[i].name;
                return null
              }, h.getLabelsArray = function () {
                var t, e = [],
                  i = 0;
                for (t in this._labels) e[i++] = {
                  time: this._labels[t],
                  name: t
                };
                return e.sort(function (t, e) {
                  return t.time - e.time
                }), e
              }, h.progress = function (t, e) {
                return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), e) : this._time / this.duration()
              }, h.totalProgress = function (t, e) {
                return arguments.length ? this.totalTime(this.totalDuration() * t, e) : this._totalTime / this.totalDuration()
              }, h.totalDuration = function (e) {
                return arguments.length ? -1 !== this._repeat && e ? this.timeScale(this.totalDuration() / e) : this : (this._dirty && (t.prototype.totalDuration.call(this), this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat), this._totalDuration)
              }, h.time = function (t, e) {
                return arguments.length ? (this._dirty && this.totalDuration(), t > this._duration && (t = this._duration), this._yoyo && 0 != (1 & this._cycle) ? t = this._duration - t + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(t, e)) : this._time
              }, h.repeat = function (t) {
                return arguments.length ? (this._repeat = t, this._uncache(!0)) : this._repeat
              }, h.repeatDelay = function (t) {
                return arguments.length ? (this._repeatDelay = t, this._uncache(!0)) : this._repeatDelay
              }, h.yoyo = function (t) {
                return arguments.length ? (this._yoyo = t, this) : this._yoyo
              }, h.currentLabel = function (t) {
                return arguments.length ? this.seek(t, !0) : this.getLabelBefore(this._time + 1e-8)
              }, s
            }, !0), t = 180 / Math.PI, e = [], i = [], s = [], r = {}, n = _gsScope._gsDefine.globals, a = function (t, e, i, s) {
              this.a = t, this.b = e, this.c = i, this.d = s, this.da = s - t, this.ca = i - t, this.ba = e - t
            }, o = function (t, e, i, s) {
              var r = {
                  a: t
                },
                n = {},
                a = {},
                o = {
                  c: s
                },
                l = (t + e) / 2,
                h = (e + i) / 2,
                _ = (i + s) / 2,
                u = (l + h) / 2,
                f = (h + _) / 2,
                c = (f - u) / 8;
              return r.b = l + (t - l) / 4, n.b = u + c, r.c = n.a = (r.b + n.b) / 2, n.c = a.a = (u + f) / 2, a.b = f - c, o.b = _ + (s - _) / 4, a.c = o.a = (a.b + o.b) / 2, [r, n, a, o]
            }, l = function (t, r, n, a, l) {
              var h, _, u, f, c, p, d, m, g, v, y, T, x, b = t.length - 1,
                w = 0,
                P = t[0].a;
              for (h = 0; b > h; h++) _ = (c = t[w]).a, u = c.d, f = t[w + 1].d, l ? (y = e[h], x = ((T = i[h]) + y) * r * .25 / (a ? .5 : s[h] || .5), m = u - ((p = u - (u - _) * (a ? .5 * r : 0 !== y ? x / y : 0)) + (((d = u + (f - u) * (a ? .5 * r : 0 !== T ? x / T : 0)) - p) * (3 * y / (y + T) + .5) / 4 || 0))) : m = u - ((p = u - (u - _) * r * .5) + (d = u + (f - u) * r * .5)) / 2, p += m, d += m, c.c = g = p, c.b = 0 !== h ? P : P = c.a + .6 * (c.c - c.a), c.da = u - _, c.ca = g - _, c.ba = P - _, n ? (v = o(_, P, g, u), t.splice(w, 1, v[0], v[1], v[2], v[3]), w += 4) : w++, P = d;
              (c = t[w]).b = P, c.c = P + .4 * (c.d - P), c.da = c.d - c.a, c.ca = c.c - c.a, c.ba = P - c.a, n && (v = o(c.a, P, c.c, c.d), t.splice(w, 1, v[0], v[1], v[2], v[3]))
            }, h = function (t, s, r, n) {
              var o, l, h, _, u, f, c = [];
              if (n)
                for (l = (t = [n].concat(t)).length; --l > -1;) "string" == typeof (f = t[l][s]) && "=" === f.charAt(1) && (t[l][s] = n[s] + Number(f.charAt(0) + f.substr(2)));
              if (0 > (o = t.length - 2)) return c[0] = new a(t[0][s], 0, 0, t[-1 > o ? 0 : 1][s]), c;
              for (l = 0; o > l; l++) h = t[l][s], _ = t[l + 1][s], c[l] = new a(h, 0, 0, _), r && (u = t[l + 2][s], e[l] = (e[l] || 0) + (_ - h) * (_ - h), i[l] = (i[l] || 0) + (u - _) * (u - _));
              return c[l] = new a(t[l][s], 0, 0, t[l + 1][s]), c
            }, _ = function (t, n, a, o, _, u) {
              var f, c, p, d, m, g, v, y, T = {},
                x = [],
                b = u || t[0];
              for (c in _ = "string" == typeof _ ? "," + _ + "," : ",x,y,z,left,top,right,bottom,marginTop,marginLeft,marginRight,marginBottom,paddingLeft,paddingTop,paddingRight,paddingBottom,backgroundPosition,backgroundPosition_y,", null == n && (n = 1), t[0]) x.push(c);
              if (t.length > 1) {
                for (y = t[t.length - 1], v = !0, f = x.length; --f > -1;)
                  if (c = x[f], Math.abs(b[c] - y[c]) > .05) {
                    v = !1;
                    break
                  } v && (t = t.concat(), u && t.unshift(u), t.push(t[1]), u = t[t.length - 3])
              }
              for (e.length = i.length = s.length = 0, f = x.length; --f > -1;) c = x[f], r[c] = -1 !== _.indexOf("," + c + ","), T[c] = h(t, c, r[c], u);
              for (f = e.length; --f > -1;) e[f] = Math.sqrt(e[f]), i[f] = Math.sqrt(i[f]);
              if (!o) {
                for (f = x.length; --f > -1;)
                  if (r[c])
                    for (g = (p = T[x[f]]).length - 1, d = 0; g > d; d++) m = p[d + 1].da / i[d] + p[d].da / e[d] || 0, s[d] = (s[d] || 0) + m * m;
                for (f = s.length; --f > -1;) s[f] = Math.sqrt(s[f])
              }
              for (f = x.length, d = a ? 4 : 1; --f > -1;) p = T[c = x[f]], l(p, n, a, o, r[c]), v && (p.splice(0, d), p.splice(p.length - d, d));
              return T
            }, u = function (t, e, i) {
              var s, r, n, o, l, h, _, u, f, c, p, d = {},
                m = "cubic" === (e = e || "soft") ? 3 : 2,
                g = "soft" === e,
                v = [];
              if (g && i && (t = [i].concat(t)), null == t || t.length < m + 1) throw "invalid Bezier data";
              for (f in t[0]) v.push(f);
              for (h = v.length; --h > -1;) {
                for (d[f = v[h]] = l = [], c = 0, u = t.length, _ = 0; u > _; _++) s = null == i ? t[_][f] : "string" == typeof (p = t[_][f]) && "=" === p.charAt(1) ? i[f] + Number(p.charAt(0) + p.substr(2)) : Number(p), g && _ > 1 && u - 1 > _ && (l[c++] = (s + l[c - 2]) / 2), l[c++] = s;
                for (u = c - m + 1, c = 0, _ = 0; u > _; _ += m) s = l[_], r = l[_ + 1], n = l[_ + 2], o = 2 === m ? 0 : l[_ + 3], l[c++] = p = 3 === m ? new a(s, r, n, o) : new a(s, (2 * r + s) / 3, (2 * r + n) / 3, n);
                l.length = c
              }
              return d
            }, f = function (t, e, i) {
              for (var s, r, n, a, o, l, h, _, u, f, c, p = 1 / i, d = t.length; --d > -1;)
                for (n = (f = t[d]).a, a = f.d - n, o = f.c - n, l = f.b - n, s = r = 0, _ = 1; i >= _; _++) s = r - (r = ((h = p * _) * h * a + 3 * (u = 1 - h) * (h * o + u * l)) * h), e[c = d * i + _ - 1] = (e[c] || 0) + s * s
            }, c = function (t, e) {
              var i, s, r, n, a = [],
                o = [],
                l = 0,
                h = 0,
                _ = (e = e >> 0 || 6) - 1,
                u = [],
                c = [];
              for (i in t) f(t[i], a, e);
              for (r = a.length, s = 0; r > s; s++) l += Math.sqrt(a[s]), c[n = s % e] = l, n === _ && (h += l, u[n = s / e >> 0] = c, o[n] = h, l = 0, c = []);
              return {
                length: h,
                lengths: o,
                segments: u
              }
            }, p = _gsScope._gsDefine.plugin({
              propName: "bezier",
              priority: -1,
              version: "1.3.5",
              API: 2,
              global: !0,
              init: function (t, e, i) {
                this._target = t, e instanceof Array && (e = {
                  values: e
                }), this._func = {}, this._round = {}, this._props = [], this._timeRes = null == e.timeResolution ? 6 : parseInt(e.timeResolution, 10);
                var s, r, n, a, o, l = e.values || [],
                  h = {},
                  f = l[0],
                  p = e.autoRotate || i.vars.orientToBezier;
                for (s in this._autoRotate = p ? p instanceof Array ? p : [
                    ["x", "y", "rotation", !0 === p ? 0 : Number(p) || 0]
                  ] : null, f) this._props.push(s);
                for (n = this._props.length; --n > -1;) s = this._props[n], this._overwriteProps.push(s), r = this._func[s] = "function" == typeof t[s], h[s] = r ? t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)]() : parseFloat(t[s]), o || h[s] !== l[0][s] && (o = h);
                if (this._beziers = "cubic" !== e.type && "quadratic" !== e.type && "soft" !== e.type ? _(l, isNaN(e.curviness) ? 1 : e.curviness, !1, "thruBasic" === e.type, e.correlate, o) : u(l, e.type, h), this._segCount = this._beziers[s].length, this._timeRes) {
                  var d = c(this._beziers, this._timeRes);
                  this._length = d.length, this._lengths = d.lengths, this._segments = d.segments, this._l1 = this._li = this._s1 = this._si = 0, this._l2 = this._lengths[0], this._curSeg = this._segments[0], this._s2 = this._curSeg[0], this._prec = 1 / this._curSeg.length
                }
                if (p = this._autoRotate)
                  for (this._initialRotations = [], p[0] instanceof Array || (this._autoRotate = p = [p]), n = p.length; --n > -1;) {
                    for (a = 0; 3 > a; a++) s = p[n][a], this._func[s] = "function" == typeof t[s] && t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)];
                    s = p[n][2], this._initialRotations[n] = (this._func[s] ? this._func[s].call(this._target) : this._target[s]) || 0
                  }
                return this._startRatio = i.vars.runBackwards ? 1 : 0, !0
              },
              set: function (e) {
                var i, s, r, n, a, o, l, h, _, u, f = this._segCount,
                  c = this._func,
                  p = this._target,
                  d = e !== this._startRatio;
                if (this._timeRes) {
                  if (_ = this._lengths, u = this._curSeg, e *= this._length, r = this._li, e > this._l2 && f - 1 > r) {
                    for (h = f - 1; h > r && (this._l2 = _[++r]) <= e;);
                    this._l1 = _[r - 1], this._li = r, this._curSeg = u = this._segments[r], this._s2 = u[this._s1 = this._si = 0]
                  } else if (e < this._l1 && r > 0) {
                    for (; r > 0 && (this._l1 = _[--r]) >= e;);
                    0 === r && e < this._l1 ? this._l1 = 0 : r++, this._l2 = _[r], this._li = r, this._curSeg = u = this._segments[r], this._s1 = u[(this._si = u.length - 1) - 1] || 0, this._s2 = u[this._si]
                  }
                  if (i = r, e -= this._l1, r = this._si, e > this._s2 && r < u.length - 1) {
                    for (h = u.length - 1; h > r && (this._s2 = u[++r]) <= e;);
                    this._s1 = u[r - 1], this._si = r
                  } else if (e < this._s1 && r > 0) {
                    for (; r > 0 && (this._s1 = u[--r]) >= e;);
                    0 === r && e < this._s1 ? this._s1 = 0 : r++, this._s2 = u[r], this._si = r
                  }
                  o = (r + (e - this._s1) / (this._s2 - this._s1)) * this._prec || 0
                } else o = (e - (i = 0 > e ? 0 : e >= 1 ? f - 1 : f * e >> 0) * (1 / f)) * f;
                for (s = 1 - o, r = this._props.length; --r > -1;) n = this._props[r], l = (o * o * (a = this._beziers[n][i]).da + 3 * s * (o * a.ca + s * a.ba)) * o + a.a, this._round[n] && (l = Math.round(l)), c[n] ? p[n](l) : p[n] = l;
                if (this._autoRotate) {
                  var m, g, v, y, T, x, b, w = this._autoRotate;
                  for (r = w.length; --r > -1;) n = w[r][2], x = w[r][3] || 0, b = !0 === w[r][4] ? 1 : t, a = this._beziers[w[r][0]], m = this._beziers[w[r][1]], a && m && (a = a[i], m = m[i], g = a.a + (a.b - a.a) * o, g += ((y = a.b + (a.c - a.b) * o) - g) * o, y += (a.c + (a.d - a.c) * o - y) * o, v = m.a + (m.b - m.a) * o, v += ((T = m.b + (m.c - m.b) * o) - v) * o, T += (m.c + (m.d - m.c) * o - T) * o, l = d ? Math.atan2(T - v, y - g) * b + x : this._initialRotations[r], c[n] ? p[n](l) : p[n] = l)
                }
              }
            }), d = p.prototype, p.bezierThrough = _, p.cubicToQuadratic = o, p._autoCSS = !0, p.quadraticToCubic = function (t, e, i) {
              return new a(t, (2 * e + t) / 3, (2 * e + i) / 3, i)
            }, p._cssRegister = function () {
              var t = n.CSSPlugin;
              if (t) {
                var e = t._internals,
                  i = e._parseToProxy,
                  s = e._setPluginRatio,
                  r = e.CSSPropTween;
                e._registerComplexSpecialProp("bezier", {
                  parser: function (t, e, n, a, o, l) {
                    e instanceof Array && (e = {
                      values: e
                    }), l = new p;
                    var h, _, u, f = e.values,
                      c = f.length - 1,
                      d = [],
                      m = {};
                    if (0 > c) return o;
                    for (h = 0; c >= h; h++) u = i(t, f[h], a, o, l, c !== h), d[h] = u.end;
                    for (_ in e) m[_] = e[_];
                    return m.values = d, (o = new r(t, "bezier", 0, 0, u.pt, 2)).data = u, o.plugin = l, o.setRatio = s, 0 === m.autoRotate && (m.autoRotate = !0), !m.autoRotate || m.autoRotate instanceof Array || (h = !0 === m.autoRotate ? 0 : Number(m.autoRotate), m.autoRotate = null != u.end.left ? [
                      ["left", "top", "rotation", h, !1]
                    ] : null != u.end.x && [
                      ["x", "y", "rotation", h, !1]
                    ]), m.autoRotate && (a._transform || a._enableTransforms(!1), u.autoRotate = a._target._gsTransform), l._onInitTween(u.proxy, m, a._tween), o
                  }
                })
              }
            }, d._roundProps = function (t, e) {
              for (var i = this._overwriteProps, s = i.length; --s > -1;)(t[i[s]] || t.bezier || t.bezierThrough) && (this._round[i[s]] = e)
            }, d._kill = function (t) {
              var e, i, s = this._props;
              for (e in this._beziers)
                if (e in t)
                  for (delete this._beziers[e], delete this._func[e], i = s.length; --i > -1;) s[i] === e && s.splice(i, 1);
              return this._super._kill.call(this, t)
            }, _gsScope._gsDefine("plugins.CSSPlugin", ["plugins.TweenPlugin", "TweenLite"], function (t, e) {
              var i, s, r, n, a = function () {
                  t.call(this, "css"), this._overwriteProps.length = 0, this.setRatio = a.prototype.setRatio
                },
                o = _gsScope._gsDefine.globals,
                l = {},
                h = a.prototype = new t("css");
              h.constructor = a, a.version = "1.18.4", a.API = 2, a.defaultTransformPerspective = 0, a.defaultSkewType = "compensated", a.defaultSmoothOrigin = !0, h = "px", a.suffixMap = {
                top: h,
                right: h,
                bottom: h,
                left: h,
                width: h,
                height: h,
                fontSize: h,
                padding: h,
                margin: h,
                perspective: h,
                lineHeight: ""
              };
              var _, u, f, c, p, d, m = /(?:\-|\.|\b)(\d|\.|e\-)+/g,
                g = /(?:\d|\-\d|\.\d|\-\.\d|\+=\d|\-=\d|\+=.\d|\-=\.\d)+/g,
                v = /(?:\+=|\-=|\-|\b)[\d\-\.]+[a-zA-Z0-9]*(?:%|\b)/gi,
                y = /(?![+-]?\d*\.?\d+|[+-]|e[+-]\d+)[^0-9]/g,
                T = /(?:\d|\-|\+|=|#|\.)*/g,
                x = /opacity *= *([^)]*)/i,
                b = /opacity:([^;]*)/i,
                w = /alpha\(opacity *=.+?\)/i,
                P = /^(rgb|hsl)/,
                O = /([A-Z])/g,
                S = /-([a-z])/gi,
                k = /(^(?:url\(\"|url\())|(?:(\"\))$|\)$)/gi,
                R = function (t, e) {
                  return e.toUpperCase()
                },
                A = /(?:Left|Right|Width)/i,
                C = /(M11|M12|M21|M22)=[\d\-\.e]+/gi,
                D = /progid\:DXImageTransform\.Microsoft\.Matrix\(.+?\)/i,
                M = /,(?=[^\)]*(?:\(|$))/gi,
                z = /[\s,\(]/i,
                F = Math.PI / 180,
                X = 180 / Math.PI,
                I = {},
                N = document,
                L = function (t) {
                  return N.createElementNS ? N.createElementNS("http://www.w3.org/1999/xhtml", t) : N.createElement(t)
                },
                E = L("div"),
                B = L("img"),
                Y = a._internals = {
                  _specialProps: l
                },
                j = navigator.userAgent,
                V = function () {
                  var t = j.indexOf("Android"),
                    e = L("a");
                  return f = -1 !== j.indexOf("Safari") && -1 === j.indexOf("Chrome") && (-1 === t || Number(j.substr(t + 8, 1)) > 3), p = f && Number(j.substr(j.indexOf("Version/") + 8, 1)) < 6, c = -1 !== j.indexOf("Firefox"), (/MSIE ([0-9]{1,}[\.0-9]{0,})/.exec(j) || /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/.exec(j)) && (d = parseFloat(RegExp.$1)), !!e && (e.style.cssText = "top:1px;opacity:.55;", /^0.55/.test(e.style.opacity))
                }(),
                U = function (t) {
                  return x.test("string" == typeof t ? t : (t.currentStyle ? t.currentStyle.filter : t.style.filter) || "") ? parseFloat(RegExp.$1) / 100 : 1
                },
                q = function (t) {
                  window.console && console.log(t)
                },
                W = "",
                Z = "",
                $ = function (t, e) {
                  var i, s, r = (e = e || E).style;
                  if (void 0 !== r[t]) return t;
                  for (t = t.charAt(0).toUpperCase() + t.substr(1), i = ["O", "Moz", "ms", "Ms", "Webkit"], s = 5; --s > -1 && void 0 === r[i[s] + t];);
                  return s >= 0 ? (W = "-" + (Z = 3 === s ? "ms" : i[s]).toLowerCase() + "-", Z + t) : null
                },
                G = N.defaultView ? N.defaultView.getComputedStyle : function () {},
                Q = a.getStyle = function (t, e, i, s, r) {
                  var n;
                  return V || "opacity" !== e ? (!s && t.style[e] ? n = t.style[e] : (i = i || G(t)) ? n = i[e] || i.getPropertyValue(e) || i.getPropertyValue(e.replace(O, "-$1").toLowerCase()) : t.currentStyle && (n = t.currentStyle[e]), null == r || n && "none" !== n && "auto" !== n && "auto auto" !== n ? n : r) : U(t)
                },
                H = Y.convertToPixels = function (t, i, s, r, n) {
                  if ("px" === r || !r) return s;
                  if ("auto" === r || !s) return 0;
                  var o, l, h, _ = A.test(i),
                    u = t,
                    f = E.style,
                    c = 0 > s;
                  if (c && (s = -s), "%" === r && -1 !== i.indexOf("border")) o = s / 100 * (_ ? t.clientWidth : t.clientHeight);
                  else {
                    if (f.cssText = "border:0 solid red;position:" + Q(t, "position") + ";line-height:0;", "%" !== r && u.appendChild && "v" !== r.charAt(0) && "rem" !== r) f[_ ? "borderLeftWidth" : "borderTopWidth"] = s + r;
                    else {
                      if (l = (u = t.parentNode || N.body)._gsCache, h = e.ticker.frame, l && _ && l.time === h) return l.width * s / 100;
                      f[_ ? "width" : "height"] = s + r
                    }
                    u.appendChild(E), o = parseFloat(E[_ ? "offsetWidth" : "offsetHeight"]), u.removeChild(E), _ && "%" === r && !1 !== a.cacheWidths && ((l = u._gsCache = u._gsCache || {}).time = h, l.width = o / s * 100), 0 !== o || n || (o = H(t, i, s, r, !0))
                  }
                  return c ? -o : o
                },
                K = Y.calculateOffset = function (t, e, i) {
                  if ("absolute" !== Q(t, "position", i)) return 0;
                  var s = "left" === e ? "Left" : "Top",
                    r = Q(t, "margin" + s, i);
                  return t["offset" + s] - (H(t, e, parseFloat(r), r.replace(T, "")) || 0)
                },
                J = function (t, e) {
                  var i, s, r, n = {};
                  if (e = e || G(t, null))
                    if (i = e.length)
                      for (; --i > -1;)(-1 === (r = e[i]).indexOf("-transform") || St === r) && (n[r.replace(S, R)] = e.getPropertyValue(r));
                    else
                      for (i in e)(-1 === i.indexOf("Transform") || Ot === i) && (n[i] = e[i]);
                  else if (e = t.currentStyle || t.style)
                    for (i in e) "string" == typeof i && void 0 === n[i] && (n[i.replace(S, R)] = e[i]);
                  return V || (n.opacity = U(t)), s = Lt(t, e, !1), n.rotation = s.rotation, n.skewX = s.skewX, n.scaleX = s.scaleX, n.scaleY = s.scaleY, n.x = s.x, n.y = s.y, Rt && (n.z = s.z, n.rotationX = s.rotationX, n.rotationY = s.rotationY, n.scaleZ = s.scaleZ), n.filters && delete n.filters, n
                },
                tt = function (t, e, i, s, r) {
                  var n, a, o, l = {},
                    h = t.style;
                  for (a in i) "cssText" !== a && "length" !== a && isNaN(a) && (e[a] !== (n = i[a]) || r && r[a]) && -1 === a.indexOf("Origin") && ("number" == typeof n || "string" == typeof n) && (l[a] = "auto" !== n || "left" !== a && "top" !== a ? "" !== n && "auto" !== n && "none" !== n || "string" != typeof e[a] || "" === e[a].replace(y, "") ? n : 0 : K(t, a), void 0 !== h[a] && (o = new dt(h, a, h[a], o)));
                  if (s)
                    for (a in s) "className" !== a && (l[a] = s[a]);
                  return {
                    difs: l,
                    firstMPT: o
                  }
                },
                et = {
                  width: ["Left", "Right"],
                  height: ["Top", "Bottom"]
                },
                it = ["marginLeft", "marginRight", "marginTop", "marginBottom"],
                st = function (t, e, i) {
                  if ("svg" === (t.nodeName + "").toLowerCase()) return (i || G(t))[e] || 0;
                  if (t.getBBox && Xt(t)) return t.getBBox()[e] || 0;
                  var s = parseFloat("width" === e ? t.offsetWidth : t.offsetHeight),
                    r = et[e],
                    n = r.length;
                  for (i = i || G(t, null); --n > -1;) s -= parseFloat(Q(t, "padding" + r[n], i, !0)) || 0, s -= parseFloat(Q(t, "border" + r[n] + "Width", i, !0)) || 0;
                  return s
                },
                rt = function (t, e) {
                  if ("contain" === t || "auto" === t || "auto auto" === t) return t + " ";
                  (null == t || "" === t) && (t = "0 0");
                  var i, s = t.split(" "),
                    r = -1 !== t.indexOf("left") ? "0%" : -1 !== t.indexOf("right") ? "100%" : s[0],
                    n = -1 !== t.indexOf("top") ? "0%" : -1 !== t.indexOf("bottom") ? "100%" : s[1];
                  if (s.length > 3 && !e) {
                    for (s = t.split(", ").join(",").split(","), t = [], i = 0; i < s.length; i++) t.push(rt(s[i]));
                    return t.join(",")
                  }
                  return null == n ? n = "center" === r ? "50%" : "0" : "center" === n && (n = "50%"), ("center" === r || isNaN(parseFloat(r)) && -1 === (r + "").indexOf("=")) && (r = "50%"), t = r + " " + n + (s.length > 2 ? " " + s[2] : ""), e && (e.oxp = -1 !== r.indexOf("%"), e.oyp = -1 !== n.indexOf("%"), e.oxr = "=" === r.charAt(1), e.oyr = "=" === n.charAt(1), e.ox = parseFloat(r.replace(y, "")), e.oy = parseFloat(n.replace(y, "")), e.v = t), e || t
                },
                nt = function (t, e) {
                  return "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) : parseFloat(t) - parseFloat(e) || 0
                },
                at = function (t, e) {
                  return null == t ? e : "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) + e : parseFloat(t) || 0
                },
                ot = function (t, e, i, s) {
                  var r, n, a, o, l;
                  return null == t ? o = e : "number" == typeof t ? o = t : (r = 360, n = t.split("_"), a = ((l = "=" === t.charAt(1)) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(n[0].substr(2)) : parseFloat(n[0])) * (-1 === t.indexOf("rad") ? 1 : X) - (l ? 0 : e), n.length && (s && (s[i] = e + a), -1 !== t.indexOf("short") && ((a %= r) !== a % 180 && (a = 0 > a ? a + r : a - r)), -1 !== t.indexOf("_cw") && 0 > a ? a = (a + 9999999999 * r) % r - (a / r | 0) * r : -1 !== t.indexOf("ccw") && a > 0 && (a = (a - 9999999999 * r) % r - (a / r | 0) * r)), o = e + a), 1e-6 > o && o > -1e-6 && (
                    o = 0), o
                },
                lt = {
                  aqua: [0, 255, 255],
                  lime: [0, 255, 0],
                  silver: [192, 192, 192],
                  black: [0, 0, 0],
                  maroon: [128, 0, 0],
                  teal: [0, 128, 128],
                  blue: [0, 0, 255],
                  navy: [0, 0, 128],
                  white: [255, 255, 255],
                  fuchsia: [255, 0, 255],
                  olive: [128, 128, 0],
                  yellow: [255, 255, 0],
                  orange: [255, 165, 0],
                  gray: [128, 128, 128],
                  purple: [128, 0, 128],
                  green: [0, 128, 0],
                  red: [255, 0, 0],
                  pink: [255, 192, 203],
                  cyan: [0, 255, 255],
                  transparent: [255, 255, 255, 0]
                },
                ht = function (t, e, i) {
                  return 255 * (1 > 6 * (t = 0 > t ? t + 1 : t > 1 ? t - 1 : t) ? e + (i - e) * t * 6 : .5 > t ? i : 2 > 3 * t ? e + (i - e) * (2 / 3 - t) * 6 : e) + .5 | 0
                },
                _t = a.parseColor = function (t, e) {
                  var i, s, r, n, a, o, l, h, _, u, f;
                  if (t)
                    if ("number" == typeof t) i = [t >> 16, t >> 8 & 255, 255 & t];
                    else {
                      if ("," === t.charAt(t.length - 1) && (t = t.substr(0, t.length - 1)), lt[t]) i = lt[t];
                      else if ("#" === t.charAt(0)) 4 === t.length && (s = t.charAt(1), r = t.charAt(2), n = t.charAt(3), t = "#" + s + s + r + r + n + n), i = [(t = parseInt(t.substr(1), 16)) >> 16, t >> 8 & 255, 255 & t];
                      else if ("hsl" === t.substr(0, 3))
                        if (i = f = t.match(m), e) {
                          if (-1 !== t.indexOf("=")) return t.match(g)
                        } else a = Number(i[0]) % 360 / 360, o = Number(i[1]) / 100, s = 2 * (l = Number(i[2]) / 100) - (r = .5 >= l ? l * (o + 1) : l + o - l * o), i.length > 3 && (i[3] = Number(t[3])), i[0] = ht(a + 1 / 3, s, r), i[1] = ht(a, s, r), i[2] = ht(a - 1 / 3, s, r);
                      else i = t.match(m) || lt.transparent;
                      i[0] = Number(i[0]), i[1] = Number(i[1]), i[2] = Number(i[2]), i.length > 3 && (i[3] = Number(i[3]))
                    }
                  else i = lt.black;
                  return e && !f && (s = i[0] / 255, r = i[1] / 255, n = i[2] / 255, l = ((h = Math.max(s, r, n)) + (_ = Math.min(s, r, n))) / 2, h === _ ? a = o = 0 : (u = h - _, o = l > .5 ? u / (2 - h - _) : u / (h + _), a = h === s ? (r - n) / u + (n > r ? 6 : 0) : h === r ? (n - s) / u + 2 : (s - r) / u + 4, a *= 60), i[0] = a + .5 | 0, i[1] = 100 * o + .5 | 0, i[2] = 100 * l + .5 | 0), i
                },
                ut = function (t, e) {
                  var i, s, r, n = t.match(ft) || [],
                    a = 0,
                    o = n.length ? "" : t;
                  for (i = 0; i < n.length; i++) s = n[i], a += (r = t.substr(a, t.indexOf(s, a) - a)).length + s.length, 3 === (s = _t(s, e)).length && s.push(1), o += r + (e ? "hsla(" + s[0] + "," + s[1] + "%," + s[2] + "%," + s[3] : "rgba(" + s.join(",")) + ")";
                  return o + t.substr(a)
                },
                ft = "(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#(?:[0-9a-f]{3}){1,2}\\b";
              for (h in lt) ft += "|" + h + "\\b";
              ft = new RegExp(ft + ")", "gi"), a.colorStringFilter = function (t) {
                var e, i = t[0] + t[1];
                ft.test(i) && (e = -1 !== i.indexOf("hsl(") || -1 !== i.indexOf("hsla("), t[0] = ut(t[0], e), t[1] = ut(t[1], e)), ft.lastIndex = 0
              }, e.defaultStringFilter || (e.defaultStringFilter = a.colorStringFilter);
              var ct = function (t, e, i, s) {
                  if (null == t) return function (t) {
                    return t
                  };
                  var r, n = e ? (t.match(ft) || [""])[0] : "",
                    a = t.split(n).join("").match(v) || [],
                    o = t.substr(0, t.indexOf(a[0])),
                    l = ")" === t.charAt(t.length - 1) ? ")" : "",
                    h = -1 !== t.indexOf(" ") ? " " : ",",
                    _ = a.length,
                    u = _ > 0 ? a[0].replace(m, "") : "";
                  return _ ? r = e ? function (t) {
                    var e, f, c, p;
                    if ("number" == typeof t) t += u;
                    else if (s && M.test(t)) {
                      for (p = t.replace(M, "|").split("|"), c = 0; c < p.length; c++) p[c] = r(p[c]);
                      return p.join(",")
                    }
                    if (e = (t.match(ft) || [n])[0], c = (f = t.split(e).join("").match(v) || []).length, _ > c--)
                      for (; ++c < _;) f[c] = i ? f[(c - 1) / 2 | 0] : a[c];
                    return o + f.join(h) + h + e + l + (-1 !== t.indexOf("inset") ? " inset" : "")
                  } : function (t) {
                    var e, n, f;
                    if ("number" == typeof t) t += u;
                    else if (s && M.test(t)) {
                      for (n = t.replace(M, "|").split("|"), f = 0; f < n.length; f++) n[f] = r(n[f]);
                      return n.join(",")
                    }
                    if (f = (e = t.match(v) || []).length, _ > f--)
                      for (; ++f < _;) e[f] = i ? e[(f - 1) / 2 | 0] : a[f];
                    return o + e.join(h) + l
                  } : function (t) {
                    return t
                  }
                },
                pt = function (t) {
                  return t = t.split(","),
                    function (e, i, s, r, n, a, o) {
                      var l, h = (i + "").split(" ");
                      for (o = {}, l = 0; 4 > l; l++) o[t[l]] = h[l] = h[l] || h[(l - 1) / 2 >> 0];
                      return r.parse(e, o, n, a)
                    }
                },
                dt = (Y._setPluginRatio = function (t) {
                  this.plugin.setRatio(t);
                  for (var e, i, s, r, n, a = this.data, o = a.proxy, l = a.firstMPT; l;) e = o[l.v], l.r ? e = Math.round(e) : 1e-6 > e && e > -1e-6 && (e = 0), l.t[l.p] = e, l = l._next;
                  if (a.autoRotate && (a.autoRotate.rotation = o.rotation), 1 === t || 0 === t)
                    for (l = a.firstMPT, n = 1 === t ? "e" : "b"; l;) {
                      if ((i = l.t).type) {
                        if (1 === i.type) {
                          for (r = i.xs0 + i.s + i.xs1, s = 1; s < i.l; s++) r += i["xn" + s] + i["xs" + (s + 1)];
                          i[n] = r
                        }
                      } else i[n] = i.s + i.xs0;
                      l = l._next
                    }
                }, function (t, e, i, s, r) {
                  this.t = t, this.p = e, this.v = i, this.r = r, s && (s._prev = this, this._next = s)
                }),
                mt = (Y._parseToProxy = function (t, e, i, s, r, n) {
                  var a, o, l, h, _, u = s,
                    f = {},
                    c = {},
                    p = i._transform,
                    d = I;
                  for (i._transform = null, I = e, s = _ = i.parse(t, e, s, r), I = d, n && (i._transform = p, u && (u._prev = null, u._prev && (u._prev._next = null))); s && s !== u;) {
                    if (s.type <= 1 && (c[o = s.p] = s.s + s.c, f[o] = s.s, n || (h = new dt(s, "s", o, h, s.r), s.c = 0), 1 === s.type))
                      for (a = s.l; --a > 0;) l = "xn" + a, c[o = s.p + "_" + l] = s.data[l], f[o] = s[l], n || (h = new dt(s, l, o, h, s.rxp[l]));
                    s = s._next
                  }
                  return {
                    proxy: f,
                    end: c,
                    firstMPT: h,
                    pt: _
                  }
                }, Y.CSSPropTween = function (t, e, s, r, a, o, l, h, _, u, f) {
                  this.t = t, this.p = e, this.s = s, this.c = r, this.n = l || e, t instanceof mt || n.push(this.n), this.r = h, this.type = o || 0, _ && (this.pr = _, i = !0), this.b = void 0 === u ? s : u, this.e = void 0 === f ? s + r : f, a && (this._next = a, a._prev = this)
                }),
                gt = function (t, e, i, s, r, n) {
                  var a = new mt(t, e, i, s - i, r, -1, n);
                  return a.b = i, a.e = a.xs0 = s, a
                },
                vt = a.parseComplex = function (t, e, i, s, r, n, o, l, h, u) {
                  o = new mt(t, e, 0, 0, o, u ? 2 : 1, null, !1, l, i = i || n || "", s), s += "", r && ft.test(s + i) && (s = [i, s], a.colorStringFilter(s), i = s[0], s = s[1]);
                  var f, c, p, d, v, y, T, x, b, w, P, O, S, k = i.split(", ").join(",").split(" "),
                    R = s.split(", ").join(",").split(" "),
                    A = k.length,
                    C = !1 !== _;
                  for ((-1 !== s.indexOf(",") || -1 !== i.indexOf(",")) && (k = k.join(" ").replace(M, ", ").split(" "), R = R.join(" ").replace(M, ", ").split(" "), A = k.length), A !== R.length && (A = (k = (n || "").split(" ")).length), o.plugin = h, o.setRatio = u, ft.lastIndex = 0, f = 0; A > f; f++)
                    if (d = k[f], v = R[f], (x = parseFloat(d)) || 0 === x) o.appendXtra("", x, nt(v, x), v.replace(g, ""), C && -1 !== v.indexOf("px"), !0);
                    else if (r && ft.test(d)) O = ")" + ((O = v.indexOf(")") + 1) ? v.substr(O) : ""), S = -1 !== v.indexOf("hsl") && V, d = _t(d, S), v = _t(v, S), (b = d.length + v.length > 6) && !V && 0 === v[3] ? (o["xs" + o.l] += o.l ? " transparent" : "transparent", o.e = o.e.split(R[f]).join("transparent")) : (V || (b = !1), S ? o.appendXtra(b ? "hsla(" : "hsl(", d[0], nt(v[0], d[0]), ",", !1, !0).appendXtra("", d[1], nt(v[1], d[1]), "%,", !1).appendXtra("", d[2], nt(v[2], d[2]), b ? "%," : "%" + O, !1) : o.appendXtra(b ? "rgba(" : "rgb(", d[0], v[0] - d[0], ",", !0, !0).appendXtra(
                    "", d[1], v[1] - d[1], ",", !0).appendXtra("", d[2], v[2] - d[2], b ? "," : O, !0), b && (d = d.length < 4 ? 1 : d[3], o.appendXtra("", d, (v.length < 4 ? 1 : v[3]) - d, O, !1))), ft.lastIndex = 0;
                  else if (y = d.match(m)) {
                    if (!(T = v.match(g)) || T.length !== y.length) return o;
                    for (p = 0, c = 0; c < y.length; c++) P = y[c], w = d.indexOf(P, p), o.appendXtra(d.substr(p, w - p), Number(P), nt(T[c], P), "", C && "px" === d.substr(w + P.length, 2), 0 === c), p = w + P.length;
                    o["xs" + o.l] += d.substr(p)
                  } else o["xs" + o.l] += o.l || o["xs" + o.l] ? " " + v : v;
                  if (-1 !== s.indexOf("=") && o.data) {
                    for (O = o.xs0 + o.data.s, f = 1; f < o.l; f++) O += o["xs" + f] + o.data["xn" + f];
                    o.e = O + o["xs" + f]
                  }
                  return o.l || (o.type = -1, o.xs0 = o.e), o.xfirst || o
                },
                yt = 9;
              for ((h = mt.prototype).l = h.pr = 0; --yt > 0;) h["xn" + yt] = 0, h["xs" + yt] = "";
              h.xs0 = "", h._next = h._prev = h.xfirst = h.data = h.plugin = h.setRatio = h.rxp = null, h.appendXtra = function (t, e, i, s, r, n) {
                var a = this,
                  o = a.l;
                return a["xs" + o] += n && (o || a["xs" + o]) ? " " + t : t || "", i || 0 === o || a.plugin ? (a.l++, a.type = a.setRatio ? 2 : 1, a["xs" + a.l] = s || "", o > 0 ? (a.data["xn" + o] = e + i, a.rxp["xn" + o] = r, a["xn" + o] = e, a.plugin || (a.xfirst = new mt(a, "xn" + o, e, i, a.xfirst || a, 0, a.n, r, a.pr), a.xfirst.xs0 = 0), a) : (a.data = {
                  s: e + i
                }, a.rxp = {}, a.s = e, a.c = i, a.r = r, a)) : (a["xs" + o] += e + (s || ""), a)
              };
              var Tt = function (t, e) {
                  e = e || {}, this.p = e.prefix && $(t) || t, l[t] = l[this.p] = this, this.format = e.formatter || ct(e.defaultValue, e.color, e.collapsible, e.multi), e.parser && (this.parse = e.parser), this.clrs = e.color, this.multi = e.multi, this.keyword = e.keyword, this.dflt = e.defaultValue, this.pr = e.priority || 0
                },
                xt = Y._registerComplexSpecialProp = function (t, e, i) {
                  "object" != typeof e && (e = {
                    parser: i
                  });
                  var s, r = t.split(","),
                    n = e.defaultValue;
                  for (i = i || [n], s = 0; s < r.length; s++) e.prefix = 0 === s && e.prefix, e.defaultValue = i[s] || n, new Tt(r[s], e)
                },
                bt = function (t) {
                  if (!l[t]) {
                    var e = t.charAt(0).toUpperCase() + t.substr(1) + "Plugin";
                    xt(t, {
                      parser: function (t, i, s, r, n, a, h) {
                        var _ = o.com.greensock.plugins[e];
                        return _ ? (_._cssRegister(), l[s].parse(t, i, s, r, n, a, h)) : (q("Error: " + e + " js file not loaded."), n)
                      }
                    })
                  }
                };
              (h = Tt.prototype).parseComplex = function (t, e, i, s, r, n) {
                var a, o, l, h, _, u, f = this.keyword;
                if (this.multi && (M.test(i) || M.test(e) ? (o = e.replace(M, "|").split("|"), l = i.replace(M, "|").split("|")) : f && (o = [e], l = [i])), l) {
                  for (h = l.length > o.length ? l.length : o.length, a = 0; h > a; a++) e = o[a] = o[a] || this.dflt, i = l[a] = l[a] || this.dflt, f && ((_ = e.indexOf(f)) !== (u = i.indexOf(f)) && (-1 === u ? o[a] = o[a].split(f).join("") : -1 === _ && (o[a] += " " + f)));
                  e = o.join(", "), i = l.join(", ")
                }
                return vt(t, this.p, e, i, this.clrs, this.dflt, s, this.pr, r, n)
              }, h.parse = function (t, e, i, s, n, a, o) {
                return this.parseComplex(t.style, this.format(Q(t, this.p, r, !1, this.dflt)), this.format(e), n, a)
              }, a.registerSpecialProp = function (t, e, i) {
                xt(t, {
                  parser: function (t, s, r, n, a, o, l) {
                    var h = new mt(t, r, 0, 0, a, 2, r, !1, i);
                    return h.plugin = o, h.setRatio = e(t, s, n._tween, r), h
                  },
                  priority: i
                })
              }, a.useSVGTransformAttr = f || c;
              var wt, Pt = "scaleX,scaleY,scaleZ,x,y,z,skewX,skewY,rotation,rotationX,rotationY,perspective,xPercent,yPercent".split(","),
                Ot = $("transform"),
                St = W + "transform",
                kt = $("transformOrigin"),
                Rt = null !== $("perspective"),
                At = Y.Transform = function () {
                  this.perspective = parseFloat(a.defaultTransformPerspective) || 0, this.force3D = !(!1 === a.defaultForce3D || !Rt) && (a.defaultForce3D || "auto")
                },
                Ct = window.SVGElement,
                Dt = function (t, e, i) {
                  var s, r = N.createElementNS("http://www.w3.org/2000/svg", t),
                    n = /([a-z])([A-Z])/g;
                  for (s in i) r.setAttributeNS(null, s.replace(n, "$1-$2").toLowerCase(), i[s]);
                  return e.appendChild(r), r
                },
                Mt = N.documentElement,
                zt = function () {
                  var t, e, i, s = d || /Android/i.test(j) && !window.chrome;
                  return N.createElementNS && !s && (t = Dt("svg", Mt), i = (e = Dt("rect", t, {
                    width: 100,
                    height: 50,
                    x: 100
                  })).getBoundingClientRect().width, e.style[kt] = "50% 50%", e.style[Ot] = "scaleX(0.5)", s = i === e.getBoundingClientRect().width && !(c && Rt), Mt.removeChild(t)), s
                }(),
                Ft = function (t, e, i, s, r, n) {
                  var o, l, h, _, u, f, c, p, d, m, g, v, y, T, x = t._gsTransform,
                    b = Nt(t, !0);
                  x && (y = x.xOrigin, T = x.yOrigin), (!s || (o = s.split(" ")).length < 2) && (c = t.getBBox(), o = [(-1 !== (e = rt(e).split(" "))[0].indexOf("%") ? parseFloat(e[0]) / 100 * c.width : parseFloat(e[0])) + c.x, (-1 !== e[1].indexOf("%") ? parseFloat(e[1]) / 100 * c.height : parseFloat(e[1])) + c.y]), i.xOrigin = _ = parseFloat(o[0]), i.yOrigin = u = parseFloat(o[1]), s && b !== It && (f = b[0], c = b[1], p = b[2], d = b[3], m = b[4], l = _ * (d / (v = f * d - c * p)) + u * (-p / v) + (p * (g = b[5]) - d * m) / v, h = _ * (-c / v) + u * (f / v) - (f * g - c * m) / v, _ = i
                    .xOrigin = o[0] = l, u = i.yOrigin = o[1] = h), x && (n && (i.xOffset = x.xOffset, i.yOffset = x.yOffset, x = i), r || !1 !== r && !1 !== a.defaultSmoothOrigin ? (l = _ - y, h = u - T, x.xOffset += l * b[0] + h * b[2] - l, x.yOffset += l * b[1] + h * b[3] - h) : x.xOffset = x.yOffset = 0), n || t.setAttribute("data-svg-origin", o.join(" "))
                },
                Xt = function (t) {
                  return !!(Ct && t.getBBox && t.getCTM && function (t) {
                    try {
                      return t.getBBox()
                    } catch (t) {}
                  }(t) && (!t.parentNode || t.parentNode.getBBox && t.parentNode.getCTM))
                },
                It = [1, 0, 0, 1, 0, 0],
                Nt = function (t, e) {
                  var i, s, r, n, a, o = t._gsTransform || new At;
                  if (Ot ? s = Q(t, St, null, !0) : t.currentStyle && (s = (s = t.currentStyle.filter.match(C)) && 4 === s.length ? [s[0].substr(4), Number(s[2].substr(4)), Number(s[1].substr(4)), s[3].substr(4), o.x || 0, o.y || 0].join(",") : ""), i = !s || "none" === s || "matrix(1, 0, 0, 1, 0, 0)" === s, (o.svg || t.getBBox && Xt(t)) && (i && -1 !== (t.style[Ot] + "").indexOf("matrix") && (s = t.style[Ot], i = 0), r = t.getAttribute("transform"), i && r && (-1 !== r.indexOf("matrix") ? (s = r, i = 0) : -1 !== r.indexOf("translate") && (s = "matrix(1,0,0,1," + r.match(
                      /(?:\-|\b)[\d\-\.e]+\b/gi).join(",") + ")", i = 0))), i) return It;
                  for (r = (s || "").match(m) || [], yt = r.length; --yt > -1;) n = Number(r[yt]), r[yt] = (a = n - (n |= 0)) ? (1e5 * a + (0 > a ? -.5 : .5) | 0) / 1e5 + n : n;
                  return e && r.length > 6 ? [r[0], r[1], r[4], r[5], r[12], r[13]] : r
                },
                Lt = Y.getTransform = function (t, i, s, n) {
                  if (t._gsTransform && s && !n) return t._gsTransform;
                  var o, l, h, _, u, f, c = s && t._gsTransform || new At,
                    p = c.scaleX < 0,
                    d = 1e5,
                    m = Rt && (parseFloat(Q(t, kt, i, !1, "0 0 0").split(" ")[2]) || c.zOrigin) || 0,
                    g = parseFloat(a.defaultTransformPerspective) || 0;
                  if (c.svg = !(!t.getBBox || !Xt(t)), c.svg && (Ft(t, Q(t, kt, r, !1, "50% 50%") + "", c, t.getAttribute("data-svg-origin")), wt = a.useSVGTransformAttr || zt), (o = Nt(t)) !== It) {
                    if (16 === o.length) {
                      var v, y, T, x, b, w = o[0],
                        P = o[1],
                        O = o[2],
                        S = o[3],
                        k = o[4],
                        R = o[5],
                        A = o[6],
                        C = o[7],
                        D = o[8],
                        M = o[9],
                        z = o[10],
                        F = o[12],
                        I = o[13],
                        N = o[14],
                        L = o[11],
                        E = Math.atan2(A, z);
                      c.zOrigin && (F = D * (N = -c.zOrigin) - o[12], I = M * N - o[13], N = z * N + c.zOrigin - o[14]), c.rotationX = E * X, E && (v = k * (x = Math.cos(-E)) + D * (b = Math.sin(-E)), y = R * x + M * b, T = A * x + z * b, D = k * -b + D * x, M = R * -b + M * x, z = A * -b + z * x, L = C * -b + L * x, k = v, R = y, A = T), E = Math.atan2(-O, z), c.rotationY = E * X, E && (y = P * (x = Math.cos(-E)) - M * (b = Math.sin(-E)), T = O * x - z * b, M = P * b + M * x, z = O * b + z * x, L = S * b + L * x, w = v = w * x - D * b, P = y, O = T), E = Math.atan2(P, w), c.rotation = E *
                        X, E && (w = w * (x = Math.cos(-E)) + k * (b = Math.sin(-E)), y = P * x + R * b, R = P * -b + R * x, A = O * -b + A * x, P = y), c.rotationX && Math.abs(c.rotationX) + Math.abs(c.rotation) > 359.9 && (c.rotationX = c.rotation = 0, c.rotationY = 180 - c.rotationY), c.scaleX = (Math.sqrt(w * w + P * P) * d + .5 | 0) / d, c.scaleY = (Math.sqrt(R * R + M * M) * d + .5 | 0) / d, c.scaleZ = (Math.sqrt(A * A + z * z) * d + .5 | 0) / d, c.skewX = k || R ? Math.atan2(k, R) * X + c.rotation : c.skewX || 0, Math.abs(c.skewX) > 90 && Math.abs(c.skewX) < 270 && (p ? (c.scaleX *=
                          -1, c.skewX += c.rotation <= 0 ? 180 : -180, c.rotation += c.rotation <= 0 ? 180 : -180) : (c.scaleY *= -1, c.skewX += c.skewX <= 0 ? 180 : -180)), c.perspective = L ? 1 / (0 > L ? -L : L) : 0, c.x = F, c.y = I, c.z = N, c.svg && (c.x -= c.xOrigin - (c.xOrigin * w - c.yOrigin * k), c.y -= c.yOrigin - (c.yOrigin * P - c.xOrigin * R))
                    } else if ((!Rt || n || !o.length || c.x !== o[4] || c.y !== o[5] || !c.rotationX && !c.rotationY) && (void 0 === c.x || "none" !== Q(t, "display", i))) {
                      var B = o.length >= 6,
                        Y = B ? o[0] : 1,
                        j = o[1] || 0,
                        V = o[2] || 0,
                        U = B ? o[3] : 1;
                      c.x = o[4] || 0, c.y = o[5] || 0, h = Math.sqrt(Y * Y + j * j), _ = Math.sqrt(U * U + V * V), u = Y || j ? Math.atan2(j, Y) * X : c.rotation || 0, f = V || U ? Math.atan2(V, U) * X + u : c.skewX || 0, Math.abs(f) > 90 && Math.abs(f) < 270 && (p ? (h *= -1, f += 0 >= u ? 180 : -180, u += 0 >= u ? 180 : -180) : (_ *= -1, f += 0 >= f ? 180 : -180)), c.scaleX = h, c.scaleY = _, c.rotation = u, c.skewX = f, Rt && (c.rotationX = c.rotationY = c.z = 0, c.perspective = g, c.scaleZ = 1), c.svg && (c.x -= c.xOrigin - (c.xOrigin * Y + c.yOrigin * V), c.y -= c.yOrigin - (c
                        .xOrigin * j + c.yOrigin * U))
                    }
                    for (l in c.zOrigin = m, c) c[l] < 2e-5 && c[l] > -2e-5 && (c[l] = 0)
                  }
                  return s && (t._gsTransform = c, c.svg && (wt && t.style[Ot] ? e.delayedCall(.001, function () {
                    jt(t.style, Ot)
                  }) : !wt && t.getAttribute("transform") && e.delayedCall(.001, function () {
                    t.removeAttribute("transform")
                  }))), c
                },
                Et = function (t) {
                  var e, i, s = this.data,
                    r = -s.rotation * F,
                    n = r + s.skewX * F,
                    a = 1e5,
                    o = (Math.cos(r) * s.scaleX * a | 0) / a,
                    l = (Math.sin(r) * s.scaleX * a | 0) / a,
                    h = (Math.sin(n) * -s.scaleY * a | 0) / a,
                    _ = (Math.cos(n) * s.scaleY * a | 0) / a,
                    u = this.t.style,
                    f = this.t.currentStyle;
                  if (f) {
                    i = l, l = -h, h = -i, e = f.filter, u.filter = "";
                    var c, p, m = this.t.offsetWidth,
                      g = this.t.offsetHeight,
                      v = "absolute" !== f.position,
                      y = "progid:DXImageTransform.Microsoft.Matrix(M11=" + o + ", M12=" + l + ", M21=" + h + ", M22=" + _,
                      b = s.x + m * s.xPercent / 100,
                      w = s.y + g * s.yPercent / 100;
                    if (null != s.ox && (b += (c = (s.oxp ? m * s.ox * .01 : s.ox) - m / 2) - (c * o + (p = (s.oyp ? g * s.oy * .01 : s.oy) - g / 2) * l), w += p - (c * h + p * _)), v ? y += ", Dx=" + ((c = m / 2) - (c * o + (p = g / 2) * l) + b) + ", Dy=" + (p - (c * h + p * _) + w) + ")" : y += ", sizingMethod='auto expand')", -1 !== e.indexOf("DXImageTransform.Microsoft.Matrix(") ? u.filter = e.replace(D, y) : u.filter = y + " " + e, (0 === t || 1 === t) && 1 === o && 0 === l && 0 === h && 1 === _ && (v && -1 === y.indexOf("Dx=0, Dy=0") || x.test(e) && 100 !== parseFloat(RegExp.$1) || -
                        1 === e.indexOf(e.indexOf("Alpha")) && u.removeAttribute("filter")), !v) {
                      var P, O, S, k = 8 > d ? 1 : -1;
                      for (c = s.ieOffsetX || 0, p = s.ieOffsetY || 0, s.ieOffsetX = Math.round((m - ((0 > o ? -o : o) * m + (0 > l ? -l : l) * g)) / 2 + b), s.ieOffsetY = Math.round((g - ((0 > _ ? -_ : _) * g + (0 > h ? -h : h) * m)) / 2 + w), yt = 0; 4 > yt; yt++) S = (i = -1 !== (P = f[O = it[yt]]).indexOf("px") ? parseFloat(P) : H(this.t, O, parseFloat(P), P.replace(T, "")) || 0) !== s[O] ? 2 > yt ? -s.ieOffsetX : -s.ieOffsetY : 2 > yt ? c - s.ieOffsetX : p - s.ieOffsetY, u[O] = (s[O] = Math.round(i - S * (0 === yt || 2 === yt ? 1 : k))) + "px"
                    }
                  }
                },
                Bt = Y.set3DTransformRatio = Y.setTransformRatio = function (t) {
                  var e, i, s, r, n, a, o, l, h, _, u, f, p, d, m, g, v, y, T, x, b, w, P, O = this.data,
                    S = this.t.style,
                    k = O.rotation,
                    R = O.rotationX,
                    A = O.rotationY,
                    C = O.scaleX,
                    D = O.scaleY,
                    M = O.scaleZ,
                    z = O.x,
                    X = O.y,
                    I = O.z,
                    N = O.svg,
                    L = O.perspective,
                    E = O.force3D;
                  if (!((1 !== t && 0 !== t || "auto" !== E || this.tween._totalTime !== this.tween._totalDuration && this.tween._totalTime) && E || I || L || A || R || 1 !== M) || wt && N || !Rt) k || O.skewX || N ? (k *= F, w = O.skewX * F, P = 1e5, e = Math.cos(k) * C, r = Math.sin(k) * C, i = Math.sin(k - w) * -D, n = Math.cos(k - w) * D, w && "simple" === O.skewType && (v = Math.tan(w), i *= v = Math.sqrt(1 + v * v), n *= v, O.skewY && (e *= v, r *= v)), N && (z += O.xOrigin - (O.xOrigin * e + O.yOrigin * i) + O.xOffset, X += O.yOrigin - (O.xOrigin * r + O.yOrigin * n) + O.yOffset,
                    wt && (O.xPercent || O.yPercent) && (d = this.t.getBBox(), z += .01 * O.xPercent * d.width, X += .01 * O.yPercent * d.height), (d = 1e-6) > z && z > -d && (z = 0), d > X && X > -d && (X = 0)), T = (e * P | 0) / P + "," + (r * P | 0) / P + "," + (i * P | 0) / P + "," + (n * P | 0) / P + "," + z + "," + X + ")", N && wt ? this.t.setAttribute("transform", "matrix(" + T) : S[Ot] = (O.xPercent || O.yPercent ? "translate(" + O.xPercent + "%," + O.yPercent + "%) matrix(" : "matrix(") + T) : S[Ot] = (O.xPercent || O.yPercent ? "translate(" + O.xPercent + "%," + O.yPercent +
                    "%) matrix(" : "matrix(") + C + ",0,0," + D + "," + z + "," + X + ")";
                  else {
                    if (c && ((d = 1e-4) > C && C > -d && (C = M = 2e-5), d > D && D > -d && (D = M = 2e-5), !L || O.z || O.rotationX || O.rotationY || (L = 0)), k || O.skewX) k *= F, m = e = Math.cos(k), g = r = Math.sin(k), O.skewX && (k -= O.skewX * F, m = Math.cos(k), g = Math.sin(k), "simple" === O.skewType && (v = Math.tan(O.skewX * F), m *= v = Math.sqrt(1 + v * v), g *= v, O.skewY && (e *= v, r *= v))), i = -g, n = m;
                    else {
                      if (!(A || R || 1 !== M || L || N)) return void(S[Ot] = (O.xPercent || O.yPercent ? "translate(" + O.xPercent + "%," + O.yPercent + "%) translate3d(" : "translate3d(") + z + "px," + X + "px," + I + "px)" + (1 !== C || 1 !== D ? " scale(" + C + "," + D + ")" : ""));
                      e = n = 1, i = r = 0
                    }
                    h = 1, s = a = o = l = _ = u = 0, f = L ? -1 / L : 0, p = O.zOrigin, d = 1e-6, x = ",", b = "0", (k = A * F) && (m = Math.cos(k), o = -(g = Math.sin(k)), _ = f * -g, s = e * g, a = r * g, h = m, f *= m, e *= m, r *= m), (k = R * F) && (v = i * (m = Math.cos(k)) + s * (g = Math.sin(k)), y = n * m + a * g, l = h * g, u = f * g, s = i * -g + s * m, a = n * -g + a * m, h *= m, f *= m, i = v, n = y), 1 !== M && (s *= M, a *= M, h *= M, f *= M), 1 !== D && (i *= D, n *= D, l *= D, u *= D), 1 !== C && (e *= C, r *= C, o *= C, _ *= C), (p || N) && (p && (z += s * -p, X += a * -
                      p, I += h * -p + p), N && (z += O.xOrigin - (O.xOrigin * e + O.yOrigin * i) + O.xOffset, X += O.yOrigin - (O.xOrigin * r + O.yOrigin * n) + O.yOffset), d > z && z > -d && (z = b), d > X && X > -d && (X = b), d > I && I > -d && (I = 0)), T = O.xPercent || O.yPercent ? "translate(" + O.xPercent + "%," + O.yPercent + "%) matrix3d(" : "matrix3d(", T += (d > e && e > -d ? b : e) + x + (d > r && r > -d ? b : r) + x + (d > o && o > -d ? b : o), T += x + (d > _ && _ > -d ? b : _) + x + (d > i && i > -d ? b : i) + x + (d > n && n > -d ? b : n), R || A || 1 !== M ? (T += x +
                      (d > l && l > -d ? b : l) + x + (d > u && u > -d ? b : u) + x + (d > s && s > -d ? b : s), T += x + (d > a && a > -d ? b : a) + x + (d > h && h > -d ? b : h) + x + (d > f && f > -d ? b : f) + x) : T += ",0,0,0,0,1,0,", T += z + x + X + x + I + x + (L ? 1 + -I / L : 1) + ")", S[Ot] = T
                  }
                };
              (h = At.prototype).x = h.y = h.z = h.skewX = h.skewY = h.rotation = h.rotationX = h.rotationY = h.zOrigin = h.xPercent = h.yPercent = h.xOffset = h.yOffset = 0, h.scaleX = h.scaleY = h.scaleZ = 1, xt("transform,scale,scaleX,scaleY,scaleZ,x,y,z,rotation,rotationX,rotationY,rotationZ,skewX,skewY,shortRotation,shortRotationX,shortRotationY,shortRotationZ,transformOrigin,svgOrigin,transformPerspective,directionalRotation,parseTransform,force3D,skewType,xPercent,yPercent,smoothOrigin", {
                parser: function (t, e, i, s, n, o, l) {
                  if (s._lastParsedTransform === l) return n;
                  s._lastParsedTransform = l;
                  var h, _, u, f, c, p, d, m, g, v, y = t._gsTransform,
                    T = t.style,
                    x = Pt.length,
                    b = l,
                    w = {},
                    P = "transformOrigin";
                  if (l.display ? (u = Q(t, "display"), T.display = "block", h = Lt(t, r, !0, l.parseTransform), T.display = u) : h = Lt(t, r, !0, l.parseTransform), s._transform = h, "string" == typeof b.transform && Ot)(u = E.style)[Ot] = b.transform, u.display = "block", u.position = "absolute", N.body.appendChild(E), _ = Lt(E, null, !1), h.svg && (m = h.xOrigin, g = h.yOrigin, _.x -= h.xOffset, _.y -= h.yOffset, (b.transformOrigin || b.svgOrigin) && (f = {}, Ft(t, rt(b.transformOrigin), f, b.svgOrigin, b.smoothOrigin, !0), m = f.xOrigin, g = f.yOrigin, _.x -= f.xOffset - h
                    .xOffset, _.y -= f.yOffset - h.yOffset), (m || g) && (v = Nt(E), _.x -= m - (m * v[0] + g * v[2]), _.y -= g - (m * v[1] + g * v[3]))), N.body.removeChild(E), _.perspective || (_.perspective = h.perspective), null != b.xPercent && (_.xPercent = at(b.xPercent, h.xPercent)), null != b.yPercent && (_.yPercent = at(b.yPercent, h.yPercent));
                  else if ("object" == typeof b) {
                    if (_ = {
                        scaleX: at(null != b.scaleX ? b.scaleX : b.scale, h.scaleX),
                        scaleY: at(null != b.scaleY ? b.scaleY : b.scale, h.scaleY),
                        scaleZ: at(b.scaleZ, h.scaleZ),
                        x: at(b.x, h.x),
                        y: at(b.y, h.y),
                        z: at(b.z, h.z),
                        xPercent: at(b.xPercent, h.xPercent),
                        yPercent: at(b.yPercent, h.yPercent),
                        perspective: at(b.transformPerspective, h.perspective)
                      }, null != (d = b.directionalRotation))
                      if ("object" == typeof d)
                        for (u in d) b[u] = d[u];
                      else b.rotation = d;
                    "string" == typeof b.x && -1 !== b.x.indexOf("%") && (_.x = 0, _.xPercent = at(b.x, h.xPercent)), "string" == typeof b.y && -1 !== b.y.indexOf("%") && (_.y = 0, _.yPercent = at(b.y, h.yPercent)), _.rotation = ot("rotation" in b ? b.rotation : "shortRotation" in b ? b.shortRotation + "_short" : "rotationZ" in b ? b.rotationZ : h.rotation - h.skewY, h.rotation - h.skewY, "rotation", w), Rt && (_.rotationX = ot("rotationX" in b ? b.rotationX : "shortRotationX" in b ? b.shortRotationX + "_short" : h.rotationX || 0, h.rotationX, "rotationX", w), _.rotationY = ot(
                      "rotationY" in b ? b.rotationY : "shortRotationY" in b ? b.shortRotationY + "_short" : h.rotationY || 0, h.rotationY, "rotationY", w)), _.skewX = ot(b.skewX, h.skewX - h.skewY), (_.skewY = ot(b.skewY, h.skewY)) && (_.skewX += _.skewY, _.rotation += _.skewY)
                  }
                  for (Rt && null != b.force3D && (h.force3D = b.force3D, p = !0), h.skewType = b.skewType || h.skewType || a.defaultSkewType, (c = h.force3D || h.z || h.rotationX || h.rotationY || _.z || _.rotationX || _.rotationY || _.perspective) || null == b.scale || (_.scaleZ = 1); --x > -1;)((f = _[i = Pt[x]] - h[i]) > 1e-6 || -1e-6 > f || null != b[i] || null != I[i]) && (p = !0, n = new mt(h, i, h[i], f, n), i in w && (n.e = w[i]), n.xs0 = 0, n.plugin = o, s._overwriteProps.push(n.n));
                  return f = b.transformOrigin, h.svg && (f || b.svgOrigin) && (m = h.xOffset, g = h.yOffset, Ft(t, rt(f), _, b.svgOrigin, b.smoothOrigin), n = gt(h, "xOrigin", (y ? h : _).xOrigin, _.xOrigin, n, P), n = gt(h, "yOrigin", (y ? h : _).yOrigin, _.yOrigin, n, P), (m !== h.xOffset || g !== h.yOffset) && (n = gt(h, "xOffset", y ? m : h.xOffset, h.xOffset, n, P), n = gt(h, "yOffset", y ? g : h.yOffset, h.yOffset, n, P)), f = wt ? null : "0px 0px"), (f || Rt && c && h.zOrigin) && (Ot ? (p = !0, i = kt, f = (f || Q(t, i, r, !1, "50% 50%")) + "", (n = new mt(T, i, 0, 0, n, -1,
                    P)).b = T[i], n.plugin = o, Rt ? (u = h.zOrigin, f = f.split(" "), h.zOrigin = (f.length > 2 && (0 === u || "0px" !== f[2]) ? parseFloat(f[2]) : u) || 0, n.xs0 = n.e = f[0] + " " + (f[1] || "50%") + " 0px", (n = new mt(h, "zOrigin", 0, 0, n, -1, n.n)).b = u, n.xs0 = n.e = h.zOrigin) : n.xs0 = n.e = f) : rt(f + "", h)), p && (s._transformType = h.svg && wt || !c && 3 !== this._transformType ? 2 : 3), n
                },
                prefix: !0
              }), xt("boxShadow", {
                defaultValue: "0px 0px 0px 0px #999",
                prefix: !0,
                color: !0,
                multi: !0,
                keyword: "inset"
              }), xt("borderRadius", {
                defaultValue: "0px",
                parser: function (t, e, i, n, a, o) {
                  e = this.format(e);
                  var l, h, _, u, f, c, p, d, m, g, v, y, T, x, b, w, P = ["borderTopLeftRadius", "borderTopRightRadius", "borderBottomRightRadius", "borderBottomLeftRadius"],
                    O = t.style;
                  for (m = parseFloat(t.offsetWidth), g = parseFloat(t.offsetHeight), l = e.split(" "), h = 0; h < P.length; h++) this.p.indexOf("border") && (P[h] = $(P[h])), -1 !== (f = u = Q(t, P[h], r, !1, "0px")).indexOf(" ") && (u = f.split(" "), f = u[0], u = u[1]), c = _ = l[h], p = parseFloat(f), y = f.substr((p + "").length), (T = "=" === c.charAt(1)) ? (d = parseInt(c.charAt(0) + "1", 10), c = c.substr(2), d *= parseFloat(c), v = c.substr((d + "").length - (0 > d ? 1 : 0)) || "") : (d = parseFloat(c), v = c.substr((d + "").length)), "" === v && (v = s[i] || y), v !== y &&
                    (x = H(t, "borderLeft", p, y), b = H(t, "borderTop", p, y), "%" === v ? (f = x / m * 100 + "%", u = b / g * 100 + "%") : "em" === v ? (f = x / (w = H(t, "borderLeft", 1, "em")) + "em", u = b / w + "em") : (f = x + "px", u = b + "px"), T && (c = parseFloat(f) + d + v, _ = parseFloat(u) + d + v)), a = vt(O, P[h], f + " " + u, c + " " + _, !1, "0px", a);
                  return a
                },
                prefix: !0,
                formatter: ct("0px 0px 0px 0px", !1, !0)
              }), xt("borderBottomLeftRadius,borderBottomRightRadius,borderTopLeftRadius,borderTopRightRadius", {
                defaultValue: "0px",
                parser: function (t, e, i, s, n, a) {
                  return vt(t.style, i, this.format(Q(t, i, r, !1, "0px 0px")), this.format(e), !1, "0px", n)
                },
                prefix: !0,
                formatter: ct("0px 0px", !1, !0)
              }), xt("backgroundPosition", {
                defaultValue: "0 0",
                parser: function (t, e, i, s, n, a) {
                  var o, l, h, _, u, f, c = "background-position",
                    p = r || G(t, null),
                    m = this.format((p ? d ? p.getPropertyValue(c + "-x") + " " + p.getPropertyValue(c + "-y") : p.getPropertyValue(c) : t.currentStyle.backgroundPositionX + " " + t.currentStyle.backgroundPositionY) || "0 0"),
                    g = this.format(e);
                  if (-1 !== m.indexOf("%") != (-1 !== g.indexOf("%")) && g.split(",").length < 2 && ((f = Q(t, "backgroundImage").replace(k, "")) && "none" !== f)) {
                    for (o = m.split(" "), l = g.split(" "), B.setAttribute("src", f), h = 2; --h > -1;)(_ = -1 !== (m = o[h]).indexOf("%")) !== (-1 !== l[h].indexOf("%")) && (u = 0 === h ? t.offsetWidth - B.width : t.offsetHeight - B.height, o[h] = _ ? parseFloat(m) / 100 * u + "px" : parseFloat(m) / u * 100 + "%");
                    m = o.join(" ")
                  }
                  return this.parseComplex(t.style, m, g, n, a)
                },
                formatter: rt
              }), xt("backgroundSize", {
                defaultValue: "0 0",
                formatter: rt
              }), xt("perspective", {
                defaultValue: "0px",
                prefix: !0
              }), xt("perspectiveOrigin", {
                defaultValue: "50% 50%",
                prefix: !0
              }), xt("transformStyle", {
                prefix: !0
              }), xt("backfaceVisibility", {
                prefix: !0
              }), xt("userSelect", {
                prefix: !0
              }), xt("margin", {
                parser: pt("marginTop,marginRight,marginBottom,marginLeft")
              }), xt("padding", {
                parser: pt("paddingTop,paddingRight,paddingBottom,paddingLeft")
              }), xt("clip", {
                defaultValue: "rect(0px,0px,0px,0px)",
                parser: function (t, e, i, s, n, a) {
                  var o, l, h;
                  return 9 > d ? (l = t.currentStyle, h = 8 > d ? " " : ",", o = "rect(" + l.clipTop + h + l.clipRight + h + l.clipBottom + h + l.clipLeft + ")", e = this.format(e).split(",").join(h)) : (o = this.format(Q(t, this.p, r, !1, this.dflt)), e = this.format(e)), this.parseComplex(t.style, o, e, n, a)
                }
              }), xt("textShadow", {
                defaultValue: "0px 0px 0px #999",
                color: !0,
                multi: !0
              }), xt("autoRound,strictUnits", {
                parser: function (t, e, i, s, r) {
                  return r
                }
              }), xt("border", {
                defaultValue: "0px solid #000",
                parser: function (t, e, i, s, n, a) {
                  return this.parseComplex(t.style, this.format(Q(t, "borderTopWidth", r, !1, "0px") + " " + Q(t, "borderTopStyle", r, !1, "solid") + " " + Q(t, "borderTopColor", r, !1, "#000")), this.format(e), n, a)
                },
                color: !0,
                formatter: function (t) {
                  var e = t.split(" ");
                  return e[0] + " " + (e[1] || "solid") + " " + (t.match(ft) || ["#000"])[0]
                }
              }), xt("borderWidth", {
                parser: pt("borderTopWidth,borderRightWidth,borderBottomWidth,borderLeftWidth")
              }), xt("float,cssFloat,styleFloat", {
                parser: function (t, e, i, s, r, n) {
                  var a = t.style,
                    o = "cssFloat" in a ? "cssFloat" : "styleFloat";
                  return new mt(a, o, 0, 0, r, -1, i, !1, 0, a[o], e)
                }
              });
              var Yt = function (t) {
                var e, i = this.t,
                  s = i.filter || Q(this.data, "filter") || "",
                  r = this.s + this.c * t | 0;
                100 === r && (-1 === s.indexOf("atrix(") && -1 === s.indexOf("radient(") && -1 === s.indexOf("oader(") ? (i.removeAttribute("filter"), e = !Q(this.data, "filter")) : (i.filter = s.replace(w, ""), e = !0)), e || (this.xn1 && (i.filter = s = s || "alpha(opacity=" + r + ")"), -1 === s.indexOf("pacity") ? 0 === r && this.xn1 || (i.filter = s + " alpha(opacity=" + r + ")") : i.filter = s.replace(x, "opacity=" + r))
              };
              xt("opacity,alpha,autoAlpha", {
                defaultValue: "1",
                parser: function (t, e, i, s, n, a) {
                  var o = parseFloat(Q(t, "opacity", r, !1, "1")),
                    l = t.style,
                    h = "autoAlpha" === i;
                  return "string" == typeof e && "=" === e.charAt(1) && (e = ("-" === e.charAt(0) ? -1 : 1) * parseFloat(e.substr(2)) + o), h && 1 === o && "hidden" === Q(t, "visibility", r) && 0 !== e && (o = 0), V ? n = new mt(l, "opacity", o, e - o, n) : ((n = new mt(l, "opacity", 100 * o, 100 * (e - o), n)).xn1 = h ? 1 : 0, l.zoom = 1, n.type = 2, n.b = "alpha(opacity=" + n.s + ")", n.e = "alpha(opacity=" + (n.s + n.c) + ")", n.data = t, n.plugin = a, n.setRatio = Yt), h && ((n = new mt(l, "visibility", 0, 0, n, -1, null, !1, 0, 0 !== o ? "inherit" : "hidden", 0 === e ?
                    "hidden" : "inherit")).xs0 = "inherit", s._overwriteProps.push(n.n), s._overwriteProps.push(i)), n
                }
              });
              var jt = function (t, e) {
                  e && (t.removeProperty ? (("ms" === e.substr(0, 2) || "webkit" === e.substr(0, 6)) && (e = "-" + e), t.removeProperty(e.replace(O, "-$1").toLowerCase())) : t.removeAttribute(e))
                },
                Vt = function (t) {
                  if (this.t._gsClassPT = this, 1 === t || 0 === t) {
                    this.t.setAttribute("class", 0 === t ? this.b : this.e);
                    for (var e = this.data, i = this.t.style; e;) e.v ? i[e.p] = e.v : jt(i, e.p), e = e._next;
                    1 === t && this.t._gsClassPT === this && (this.t._gsClassPT = null)
                  } else this.t.getAttribute("class") !== this.e && this.t.setAttribute("class", this.e)
                };
              xt("className", {
                parser: function (t, e, s, n, a, o, l) {
                  var h, _, u, f, c, p = t.getAttribute("class") || "",
                    d = t.style.cssText;
                  if ((a = n._classNamePT = new mt(t, s, 0, 0, a, 2)).setRatio = Vt, a.pr = -11, i = !0, a.b = p, _ = J(t, r), u = t._gsClassPT) {
                    for (f = {}, c = u.data; c;) f[c.p] = 1, c = c._next;
                    u.setRatio(1)
                  }
                  return t._gsClassPT = a, a.e = "=" !== e.charAt(1) ? e : p.replace(new RegExp("(?:\\s|^)" + e.substr(2) + "(?![\\w-])"), "") + ("+" === e.charAt(0) ? " " + e.substr(2) : ""), t.setAttribute("class", a.e), h = tt(t, _, J(t), l, f), t.setAttribute("class", p), a.data = h.firstMPT, t.style.cssText = d, a.xfirst = n.parse(t, h.difs, a, o)
                }
              });
              var Ut = function (t) {
                if ((1 === t || 0 === t) && this.data._totalTime === this.data._totalDuration && "isFromStart" !== this.data.data) {
                  var e, i, s, r, n, a = this.t.style,
                    o = l.transform.parse;
                  if ("all" === this.e) a.cssText = "", r = !0;
                  else
                    for (s = (e = this.e.split(" ").join("").split(",")).length; --s > -1;) i = e[s], l[i] && (l[i].parse === o ? r = !0 : i = "transformOrigin" === i ? kt : l[i].p), jt(a, i);
                  r && (jt(a, Ot), (n = this.t._gsTransform) && (n.svg && (this.t.removeAttribute("data-svg-origin"), this.t.removeAttribute("transform")), delete this.t._gsTransform))
                }
              };
              for (xt("clearProps", {
                  parser: function (t, e, s, r, n) {
                    return (n = new mt(t, s, 0, 0, n, 2)).setRatio = Ut, n.e = e, n.pr = -10, n.data = r._tween, i = !0, n
                  }
                }), h = "bezier,throwProps,physicsProps,physics2D".split(","), yt = h.length; yt--;) bt(h[yt]);
              (h = a.prototype)._firstPT = h._lastParsedTransform = h._transform = null, h._onInitTween = function (t, e, o) {
                if (!t.nodeType) return !1;
                this._target = t, this._tween = o, this._vars = e, _ = e.autoRound, i = !1, s = e.suffixMap || a.suffixMap, r = G(t, ""), n = this._overwriteProps;
                var h, c, d, m, g, v, y, T, x, w = t.style;
                if (u && "" === w.zIndex && (("auto" === (h = Q(t, "zIndex", r)) || "" === h) && this._addLazySet(w, "zIndex", 0)), "string" == typeof e && (m = w.cssText, h = J(t, r), w.cssText = m + ";" + e, h = tt(t, h, J(t)).difs, !V && b.test(e) && (h.opacity = parseFloat(RegExp.$1)), e = h, w.cssText = m), e.className ? this._firstPT = c = l.className.parse(t, e.className, "className", this, null, null, e) : this._firstPT = c = this.parse(t, e, null), this._transformType) {
                  for (x = 3 === this._transformType, Ot ? f && (u = !0, "" === w.zIndex && (("auto" === (y = Q(t, "zIndex", r)) || "" === y) && this._addLazySet(w, "zIndex", 0)), p && this._addLazySet(w, "WebkitBackfaceVisibility", this._vars.WebkitBackfaceVisibility || (x ? "visible" : "hidden"))) : w.zoom = 1, d = c; d && d._next;) d = d._next;
                  T = new mt(t, "transform", 0, 0, null, 2), this._linkCSSP(T, null, d), T.setRatio = Ot ? Bt : Et, T.data = this._transform || Lt(t, r, !0), T.tween = o, T.pr = -1, n.pop()
                }
                if (i) {
                  for (; c;) {
                    for (v = c._next, d = m; d && d.pr > c.pr;) d = d._next;
                    (c._prev = d ? d._prev : g) ? c._prev._next = c: m = c, (c._next = d) ? d._prev = c : g = c, c = v
                  }
                  this._firstPT = m
                }
                return !0
              }, h.parse = function (t, e, i, n) {
                var a, o, h, u, f, c, p, d, m, g, v = t.style;
                for (a in e) c = e[a], (o = l[a]) ? i = o.parse(t, c, a, this, i, n, e) : (f = Q(t, a, r) + "", m = "string" == typeof c, "color" === a || "fill" === a || "stroke" === a || -1 !== a.indexOf("Color") || m && P.test(c) ? (m || (c = ((c = _t(c)).length > 3 ? "rgba(" : "rgb(") + c.join(",") + ")"), i = vt(v, a, f, c, !0, "transparent", i, 0, n)) : m && z.test(c) ? i = vt(v, a, f, c, !0, null, i, 0, n) : (p = (h = parseFloat(f)) || 0 === h ? f.substr((h + "").length) : "", ("" === f || "auto" === f) && ("width" === a || "height" === a ? (h = st(t, a, r), p = "px") : "left" ===
                  a || "top" === a ? (h = K(t, a, r), p = "px") : (h = "opacity" !== a ? 0 : 1, p = "")), (g = m && "=" === c.charAt(1)) ? (u = parseInt(c.charAt(0) + "1", 10), c = c.substr(2), u *= parseFloat(c), d = c.replace(T, "")) : (u = parseFloat(c), d = m ? c.replace(T, "") : ""), "" === d && (d = a in s ? s[a] : p), c = u || 0 === u ? (g ? u + h : u) + d : e[a], p !== d && "" !== d && (u || 0 === u) && h && (h = H(t, a, h, p), "%" === d ? (h /= H(t, a, 100, "%") / 100, !0 !== e.strictUnits && (f = h + "%")) : "em" === d || "rem" === d || "vw" === d || "vh" === d ? h /= H(
                  t, a, 1, d) : "px" !== d && (u = H(t, a, u, d), d = "px"), g && (u || 0 === u) && (c = u + h + d)), g && (u += h), !h && 0 !== h || !u && 0 !== u ? void 0 !== v[a] && (c || c + "" != "NaN" && null != c) ? (i = new mt(v, a, u || h || 0, 0, i, -1, a, !1, 0, f, c)).xs0 = "none" !== c || "display" !== a && -1 === a.indexOf("Style") ? c : f : q("invalid " + a + " tween value: " + e[a]) : (i = new mt(v, a, h, u - h, i, 0, a, !1 !== _ && ("px" === d || "zIndex" === a), 0, f, c)).xs0 = d)), n && i && !i.plugin && (i.plugin = n);
                return i
              }, h.setRatio = function (t) {
                var e, i, s, r = this._firstPT;
                if (1 !== t || this._tween._time !== this._tween._duration && 0 !== this._tween._time)
                  if (t || this._tween._time !== this._tween._duration && 0 !== this._tween._time || -1e-6 === this._tween._rawPrevTime)
                    for (; r;) {
                      if (e = r.c * t + r.s, r.r ? e = Math.round(e) : 1e-6 > e && e > -1e-6 && (e = 0), r.type)
                        if (1 === r.type)
                          if (2 === (s = r.l)) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2;
                          else if (3 === s) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2 + r.xn2 + r.xs3;
                      else if (4 === s) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2 + r.xn2 + r.xs3 + r.xn3 + r.xs4;
                      else if (5 === s) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2 + r.xn2 + r.xs3 + r.xn3 + r.xs4 + r.xn4 + r.xs5;
                      else {
                        for (i = r.xs0 + e + r.xs1, s = 1; s < r.l; s++) i += r["xn" + s] + r["xs" + (s + 1)];
                        r.t[r.p] = i
                      } else -1 === r.type ? r.t[r.p] = r.xs0 : r.setRatio && r.setRatio(t);
                      else r.t[r.p] = e + r.xs0;
                      r = r._next
                    } else
                      for (; r;) 2 !== r.type ? r.t[r.p] = r.b : r.setRatio(t), r = r._next;
                  else
                    for (; r;) {
                      if (2 !== r.type)
                        if (r.r && -1 !== r.type)
                          if (e = Math.round(r.s + r.c), r.type) {
                            if (1 === r.type) {
                              for (s = r.l, i = r.xs0 + e + r.xs1, s = 1; s < r.l; s++) i += r["xn" + s] + r["xs" + (s + 1)];
                              r.t[r.p] = i
                            }
                          } else r.t[r.p] = e + r.xs0;
                      else r.t[r.p] = r.e;
                      else r.setRatio(t);
                      r = r._next
                    }
              }, h._enableTransforms = function (t) {
                this._transform = this._transform || Lt(this._target, r, !0), this._transformType = this._transform.svg && wt || !t && 3 !== this._transformType ? 2 : 3
              };
              var qt = function (t) {
                this.t[this.p] = this.e, this.data._linkCSSP(this, this._next, null, !0)
              };
              h._addLazySet = function (t, e, i) {
                var s = this._firstPT = new mt(t, e, 0, 0, this._firstPT, 2);
                s.e = i, s.setRatio = qt, s.data = this
              }, h._linkCSSP = function (t, e, i, s) {
                return t && (e && (e._prev = t), t._next && (t._next._prev = t._prev), t._prev ? t._prev._next = t._next : this._firstPT === t && (this._firstPT = t._next, s = !0), i ? i._next = t : s || null !== this._firstPT || (this._firstPT = t), t._next = e, t._prev = i), t
              }, h._kill = function (e) {
                var i, s, r, n = e;
                if (e.autoAlpha || e.alpha) {
                  for (s in n = {}, e) n[s] = e[s];
                  n.opacity = 1, n.autoAlpha && (n.visibility = 1)
                }
                return e.className && (i = this._classNamePT) && ((r = i.xfirst) && r._prev ? this._linkCSSP(r._prev, i._next, r._prev._prev) : r === this._firstPT && (this._firstPT = i._next), i._next && this._linkCSSP(i._next, i._next._next, r._prev), this._classNamePT = null), t.prototype._kill.call(this, n)
              };
              var Wt = function (t, e, i) {
                var s, r, n, a;
                if (t.slice)
                  for (r = t.length; --r > -1;) Wt(t[r], e, i);
                else
                  for (r = (s = t.childNodes).length; --r > -1;) a = (n = s[r]).type, n.style && (e.push(J(n)), i && i.push(n)), 1 !== a && 9 !== a && 11 !== a || !n.childNodes.length || Wt(n, e, i)
              };
              return a.cascadeTo = function (t, i, s) {
                var r, n, a, o, l = e.to(t, i, s),
                  h = [l],
                  _ = [],
                  u = [],
                  f = [],
                  c = e._internals.reservedProps;
                for (t = l._targets || l.target, Wt(t, _, f), l.render(i, !0, !0), Wt(t, u), l.render(0, !0, !0), l._enabled(!0), r = f.length; --r > -1;)
                  if ((n = tt(f[r], _[r], u[r])).firstMPT) {
                    for (a in n = n.difs, s) c[a] && (n[a] = s[a]);
                    for (a in o = {}, n) o[a] = _[r][a];
                    h.push(e.fromTo(f[r], i, o, n))
                  } return h
              }, t.activate([a]), a
            }, !0),
            function () {
              var t = _gsScope._gsDefine.plugin({
                  propName: "roundProps",
                  version: "1.5",
                  priority: -1,
                  API: 2,
                  init: function (t, e, i) {
                    return this._tween = i, !0
                  }
                }),
                e = function (t) {
                  for (; t;) t.f || t.blob || (t.r = 1), t = t._next
                },
                i = t.prototype;
              i._onInitAllProps = function () {
                for (var t, i, s, r = this._tween, n = r.vars.roundProps.join ? r.vars.roundProps : r.vars.roundProps.split(","), a = n.length, o = {}, l = r._propLookup.roundProps; --a > -1;) o[n[a]] = 1;
                for (a = n.length; --a > -1;)
                  for (t = n[a], i = r._firstPT; i;) s = i._next, i.pg ? i.t._roundProps(o, !0) : i.n === t && (2 === i.f && i.t ? e(i.t._firstPT) : (this._add(i.t, t, i.s, i.c), s && (s._prev = i._prev), i._prev ? i._prev._next = s : r._firstPT === i && (r._firstPT = s), i._next = i._prev = null, r._propLookup[t] = l)), i = s;
                return !1
              }, i._add = function (t, e, i, s) {
                this._addTween(t, e, i, i + s, e, !0), this._overwriteProps.push(e)
              }
            }(), _gsScope._gsDefine.plugin({
              propName: "attr",
              API: 2,
              version: "0.5.0",
              init: function (t, e, i) {
                var s;
                if ("function" != typeof t.setAttribute) return !1;
                for (s in e) this._addTween(t, "setAttribute", t.getAttribute(s) + "", e[s] + "", s, !1, s), this._overwriteProps.push(s);
                return !0
              }
            }), _gsScope._gsDefine.plugin({
              propName: "directionalRotation",
              version: "0.2.1",
              API: 2,
              init: function (t, e, i) {
                "object" != typeof e && (e = {
                  rotation: e
                }), this.finals = {};
                var s, r, n, a, o, l = !0 === e.useRadians ? 2 * Math.PI : 360;
                for (s in e) "useRadians" !== s && (r = (o = (e[s] + "").split("_"))[0], n = parseFloat("function" != typeof t[s] ? t[s] : t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)]()), a = (this.finals[s] = "string" == typeof r && "=" === r.charAt(1) ? n + parseInt(r.charAt(0) + "1", 10) * Number(r.substr(2)) : Number(r) || 0) - n, o.length && (-1 !== (r = o.join("_")).indexOf("short") && ((a %= l) !== a % (l / 2) && (a = 0 > a ? a + l : a - l)), -1 !== r.indexOf("_cw") && 0 > a ? a = (a + 9999999999 * l) % l - (a / l | 0) * l : -1 !== r
                  .indexOf("ccw") && a > 0 && (a = (a - 9999999999 * l) % l - (a / l | 0) * l)), (a > 1e-6 || -1e-6 > a) && (this._addTween(t, s, n, n + a, s), this._overwriteProps.push(s)));
                return !0
              },
              set: function (t) {
                var e;
                if (1 !== t) this._super.setRatio.call(this, t);
                else
                  for (e = this._firstPT; e;) e.f ? e.t[e.p](this.finals[e.p]) : e.t[e.p] = this.finals[e.p], e = e._next
              }
            })._autoCSS = !0, _gsScope._gsDefine("easing.Back", ["easing.Ease"], function (t) {
              var e, i, s, r = _gsScope.GreenSockGlobals || _gsScope,
                n = r.com.greensock,
                a = 2 * Math.PI,
                o = Math.PI / 2,
                l = n._class,
                h = function (e, i) {
                  var s = l("easing." + e, function () {}, !0),
                    r = s.prototype = new t;
                  return r.constructor = s, r.getRatio = i, s
                },
                _ = t.register || function () {},
                u = function (t, e, i, s, r) {
                  var n = l("easing." + t, {
                    easeOut: new e,
                    easeIn: new i,
                    easeInOut: new s
                  }, !0);
                  return _(n, t), n
                },
                f = function (t, e, i) {
                  this.t = t, this.v = e, i && (this.next = i, i.prev = this, this.c = i.v - e, this.gap = i.t - t)
                },
                c = function (e, i) {
                  var s = l("easing." + e, function (t) {
                      this._p1 = t || 0 === t ? t : 1.70158, this._p2 = 1.525 * this._p1
                    }, !0),
                    r = s.prototype = new t;
                  return r.constructor = s, r.getRatio = i, r.config = function (t) {
                    return new s(t)
                  }, s
                },
                p = u("Back", c("BackOut", function (t) {
                  return (t -= 1) * t * ((this._p1 + 1) * t + this._p1) + 1
                }), c("BackIn", function (t) {
                  return t * t * ((this._p1 + 1) * t - this._p1)
                }), c("BackInOut", function (t) {
                  return (t *= 2) < 1 ? .5 * t * t * ((this._p2 + 1) * t - this._p2) : .5 * ((t -= 2) * t * ((this._p2 + 1) * t + this._p2) + 2)
                })),
                d = l("easing.SlowMo", function (t, e, i) {
                  e = e || 0 === e ? e : .7, null == t ? t = .7 : t > 1 && (t = 1), this._p = 1 !== t ? e : 0, this._p1 = (1 - t) / 2, this._p2 = t, this._p3 = this._p1 + this._p2, this._calcEnd = !0 === i
                }, !0),
                m = d.prototype = new t;
              return m.constructor = d, m.getRatio = function (t) {
                var e = t + (.5 - t) * this._p;
                return t < this._p1 ? this._calcEnd ? 1 - (t = 1 - t / this._p1) * t : e - (t = 1 - t / this._p1) * t * t * t * e : t > this._p3 ? this._calcEnd ? 1 - (t = (t - this._p3) / this._p1) * t : e + (t - e) * (t = (t - this._p3) / this._p1) * t * t * t : this._calcEnd ? 1 : e
              }, d.ease = new d(.7, .7), m.config = d.config = function (t, e, i) {
                return new d(t, e, i)
              }, (m = (e = l("easing.SteppedEase", function (t) {
                t = t || 1, this._p1 = 1 / t, this._p2 = t + 1
              }, !0)).prototype = new t).constructor = e, m.getRatio = function (t) {
                return 0 > t ? t = 0 : t >= 1 && (t = .999999999), (this._p2 * t >> 0) * this._p1
              }, m.config = e.config = function (t) {
                return new e(t)
              }, i = l("easing.RoughEase", function (e) {
                for (var i, s, r, n, a, o, l = (e = e || {}).taper || "none", h = [], _ = 0, u = 0 | (e.points || 20), c = u, p = !1 !== e.randomize, d = !0 === e.clamp, m = e.template instanceof t ? e.template : null, g = "number" == typeof e.strength ? .4 * e.strength : .4; --c > -1;) i = p ? Math.random() : 1 / u * c, s = m ? m.getRatio(i) : i, "none" === l ? r = g : "out" === l ? r = (n = 1 - i) * n * g : "in" === l ? r = i * i * g : .5 > i ? r = (n = 2 * i) * n * .5 * g : r = (n = 2 * (1 - i)) * n * .5 * g, p ? s += Math.random() * r - .5 * r : c % 2 ? s += .5 * r : s -= .5 * r,
                  d && (s > 1 ? s = 1 : 0 > s && (s = 0)), h[_++] = {
                    x: i,
                    y: s
                  };
                for (h.sort(function (t, e) {
                    return t.x - e.x
                  }), o = new f(1, 1, null), c = u; --c > -1;) a = h[c], o = new f(a.x, a.y, o);
                this._prev = new f(0, 0, 0 !== o.t ? o : o.next)
              }, !0), (m = i.prototype = new t).constructor = i, m.getRatio = function (t) {
                var e = this._prev;
                if (t > e.t) {
                  for (; e.next && t >= e.t;) e = e.next;
                  e = e.prev
                } else
                  for (; e.prev && t <= e.t;) e = e.prev;
                return this._prev = e, e.v + (t - e.t) / e.gap * e.c
              }, m.config = function (t) {
                return new i(t)
              }, i.ease = new i, u("Bounce", h("BounceOut", function (t) {
                return 1 / 2.75 > t ? 7.5625 * t * t : 2 / 2.75 > t ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : 2.5 / 2.75 > t ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375
              }), h("BounceIn", function (t) {
                return (t = 1 - t) < 1 / 2.75 ? 1 - 7.5625 * t * t : 2 / 2.75 > t ? 1 - (7.5625 * (t -= 1.5 / 2.75) * t + .75) : 2.5 / 2.75 > t ? 1 - (7.5625 * (t -= 2.25 / 2.75) * t + .9375) : 1 - (7.5625 * (t -= 2.625 / 2.75) * t + .984375)
              }), h("BounceInOut", function (t) {
                var e = .5 > t;
                return t = 1 / 2.75 > (t = e ? 1 - 2 * t : 2 * t - 1) ? 7.5625 * t * t : 2 / 2.75 > t ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : 2.5 / 2.75 > t ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375, e ? .5 * (1 - t) : .5 * t + .5
              })), u("Circ", h("CircOut", function (t) {
                return Math.sqrt(1 - (t -= 1) * t)
              }), h("CircIn", function (t) {
                return -(Math.sqrt(1 - t * t) - 1)
              }), h("CircInOut", function (t) {
                return (t *= 2) < 1 ? -.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -= 2) * t) + 1)
              })), u("Elastic", (s = function (e, i, s) {
                var r = l("easing." + e, function (t, e) {
                    this._p1 = t >= 1 ? t : 1, this._p2 = (e || s) / (1 > t ? t : 1), this._p3 = this._p2 / a * (Math.asin(1 / this._p1) || 0), this._p2 = a / this._p2
                  }, !0),
                  n = r.prototype = new t;
                return n.constructor = r, n.getRatio = i, n.config = function (t, e) {
                  return new r(t, e)
                }, r
              })("ElasticOut", function (t) {
                return this._p1 * Math.pow(2, -10 * t) * Math.sin((t - this._p3) * this._p2) + 1
              }, .3), s("ElasticIn", function (t) {
                return -this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2)
              }, .3), s("ElasticInOut", function (t) {
                return (t *= 2) < 1 ? this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2) * -.5 : this._p1 * Math.pow(2, -10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2) * .5 + 1
              }, .45)), u("Expo", h("ExpoOut", function (t) {
                return 1 - Math.pow(2, -10 * t)
              }), h("ExpoIn", function (t) {
                return Math.pow(2, 10 * (t - 1)) - .001
              }), h("ExpoInOut", function (t) {
                return (t *= 2) < 1 ? .5 * Math.pow(2, 10 * (t - 1)) : .5 * (2 - Math.pow(2, -10 * (t - 1)))
              })), u("Sine", h("SineOut", function (t) {
                return Math.sin(t * o)
              }), h("SineIn", function (t) {
                return 1 - Math.cos(t * o)
              }), h("SineInOut", function (t) {
                return -.5 * (Math.cos(Math.PI * t) - 1)
              })), l("easing.EaseLookup", {
                find: function (e) {
                  return t.map[e]
                }
              }, !0), _(r.SlowMo, "SlowMo", "ease,"), _(i, "RoughEase", "ease,"), _(e, "SteppedEase", "ease,"), p
            }, !0)
        }), _gsScope._gsDefine && _gsScope._gsQueue.pop()(),
        function (t, e) {
          "use strict";
          var i = t.GreenSockGlobals = t.GreenSockGlobals || t;
          if (!i.TweenLite) {
            var s, r, n, a, o, l = function (t) {
                var e, s = t.split("."),
                  r = i;
                for (e = 0; e < s.length; e++) r[s[e]] = r = r[s[e]] || {};
                return r
              },
              h = l("com.greensock"),
              _ = 1e-10,
              u = function (t) {
                var e, i = [],
                  s = t.length;
                for (e = 0; e !== s; i.push(t[e++]));
                return i
              },
              f = function () {},
              c = function () {
                var t = Object.prototype.toString,
                  e = t.call([]);
                return function (i) {
                  return null != i && (i instanceof Array || "object" == typeof i && !!i.push && t.call(i) === e)
                }
              }(),
              p = {},
              d = function (e, s, r, n) {
                this.sc = p[e] ? p[e].sc : [], p[e] = this, this.gsClass = null, this.func = r;
                var a = [];
                this.check = function (o) {
                  for (var h, _, u, f, c, m = s.length, g = m; --m > -1;)(h = p[s[m]] || new d(s[m], [])).gsClass ? (a[m] = h.gsClass, g--) : o && h.sc.push(this);
                  if (0 === g && r)
                    for (u = (_ = ("com.greensock." + e).split(".")).pop(), f = l(_.join("."))[u] = this.gsClass = r.apply(r, a), n && (i[u] = f, !(c = "undefined" != typeof module && module.exports) && "function" == typeof define && define.amd ? define((t.GreenSockAMDPath ? t.GreenSockAMDPath + "/" : "") + e.split(".").pop(), [], function () {
                        return f
                      }) : "TweenMax" === e && c && (module.exports = f)), m = 0; m < this.sc.length; m++) this.sc[m].check()
                }, this.check(!0)
              },
              m = t._gsDefine = function (t, e, i, s) {
                return new d(t, e, i, s)
              },
              g = h._class = function (t, e, i) {
                return e = e || function () {}, m(t, [], function () {
                  return e
                }, i), e
              };
            m.globals = i;
            var v = [0, 0, 1, 1],
              y = [],
              T = g("easing.Ease", function (t, e, i, s) {
                this._func = t, this._type = i || 0, this._power = s || 0, this._params = e ? v.concat(e) : v
              }, !0),
              x = T.map = {},
              b = T.register = function (t, e, i, s) {
                for (var r, n, a, o, l = e.split(","), _ = l.length, u = (i || "easeIn,easeOut,easeInOut").split(","); --_ > -1;)
                  for (n = l[_], r = s ? g("easing." + n, null, !0) : h.easing[n] || {}, a = u.length; --a > -1;) o = u[a], x[n + "." + o] = x[o + n] = r[o] = t.getRatio ? t : t[o] || new t
              };
            for ((n = T.prototype)._calcEnd = !1, n.getRatio = function (t) {
                if (this._func) return this._params[0] = t, this._func.apply(null, this._params);
                var e = this._type,
                  i = this._power,
                  s = 1 === e ? 1 - t : 2 === e ? t : .5 > t ? 2 * t : 2 * (1 - t);
                return 1 === i ? s *= s : 2 === i ? s *= s * s : 3 === i ? s *= s * s * s : 4 === i && (s *= s * s * s * s), 1 === e ? 1 - s : 2 === e ? s : .5 > t ? s / 2 : 1 - s / 2
              }, r = (s = ["Linear", "Quad", "Cubic", "Quart", "Quint,Strong"]).length; --r > -1;) n = s[r] + ",Power" + r, b(new T(null, null, 1, r), n, "easeOut", !0), b(new T(null, null, 2, r), n, "easeIn" + (0 === r ? ",easeNone" : "")), b(new T(null, null, 3, r), n, "easeInOut");
            x.linear = h.easing.Linear.easeIn, x.swing = h.easing.Quad.easeInOut;
            var w = g("events.EventDispatcher", function (t) {
              this._listeners = {}, this._eventTarget = t || this
            });
            (n = w.prototype).addEventListener = function (t, e, i, s, r) {
              r = r || 0;
              var n, l, h = this._listeners[t],
                _ = 0;
              for (null == h && (this._listeners[t] = h = []), l = h.length; --l > -1;)(n = h[l]).c === e && n.s === i ? h.splice(l, 1) : 0 === _ && n.pr < r && (_ = l + 1);
              h.splice(_, 0, {
                c: e,
                s: i,
                up: s,
                pr: r
              }), this !== a || o || a.wake()
            }, n.removeEventListener = function (t, e) {
              var i, s = this._listeners[t];
              if (s)
                for (i = s.length; --i > -1;)
                  if (s[i].c === e) return void s.splice(i, 1)
            }, n.dispatchEvent = function (t) {
              var e, i, s, r = this._listeners[t];
              if (r)
                for (e = r.length, i = this._eventTarget; --e > -1;)(s = r[e]) && (s.up ? s.c.call(s.s || i, {
                  type: t,
                  target: i
                }) : s.c.call(s.s || i))
            };
            var P = t.requestAnimationFrame,
              O = t.cancelAnimationFrame,
              S = Date.now || function () {
                return (new Date).getTime()
              },
              k = S();
            for (r = (s = ["ms", "moz", "webkit", "o"]).length; --r > -1 && !P;) P = t[s[r] + "RequestAnimationFrame"], O = t[s[r] + "CancelAnimationFrame"] || t[s[r] + "CancelRequestAnimationFrame"];
            g("Ticker", function (t, e) {
              var i, s, r, n, l, h = this,
                u = S(),
                c = !(!1 === e || !P) && "auto",
                p = 500,
                d = 33,
                m = function (t) {
                  var e, a, o = S() - k;
                  o > p && (u += o - d), k += o, h.time = (k - u) / 1e3, e = h.time - l, (!i || e > 0 || !0 === t) && (h.frame++, l += e + (e >= n ? .004 : n - e), a = !0), !0 !== t && (r = s(m)), a && h.dispatchEvent("tick")
                };
              w.call(h), h.time = h.frame = 0, h.tick = function () {
                m(!0)
              }, h.lagSmoothing = function (t, e) {
                p = t || 1 / _, d = Math.min(e, p, 0)
              }, h.sleep = function () {
                null != r && (c && O ? O(r) : clearTimeout(r), s = f, r = null, h === a && (o = !1))
              }, h.wake = function (t) {
                null !== r ? h.sleep() : t ? u += -k + (k = S()) : h.frame > 10 && (k = S() - p + 5), s = 0 === i ? f : c && P ? P : function (t) {
                  return setTimeout(t, 1e3 * (l - h.time) + 1 | 0)
                }, h === a && (o = !0), m(2)
              }, h.fps = function (t) {
                return arguments.length ? (n = 1 / ((i = t) || 60), l = this.time + n, void h.wake()) : i
              }, h.useRAF = function (t) {
                return arguments.length ? (h.sleep(), c = t, void h.fps(i)) : c
              }, h.fps(t), setTimeout(function () {
                "auto" === c && h.frame < 5 && "hidden" !== document.visibilityState && h.useRAF(!1)
              }, 1500)
            }), (n = h.Ticker.prototype = new h.events.EventDispatcher).constructor = h.Ticker;
            var R = g("core.Animation", function (t, e) {
              if (this.vars = e = e || {}, this._duration = this._totalDuration = t || 0, this._delay = Number(e.delay) || 0, this._timeScale = 1, this._active = !0 === e.immediateRender, this.data = e.data, this._reversed = !0 === e.reversed, W) {
                o || a.wake();
                var i = this.vars.useFrames ? q : W;
                i.add(this, i._time), this.vars.paused && this.paused(!0)
              }
            });
            a = R.ticker = new h.Ticker, (n = R.prototype)._dirty = n._gc = n._initted = n._paused = !1, n._totalTime = n._time = 0, n._rawPrevTime = -1, n._next = n._last = n._onUpdate = n._timeline = n.timeline = null, n._paused = !1;
            var A = function () {
              o && S() - k > 2e3 && a.wake(), setTimeout(A, 2e3)
            };
            A(), n.play = function (t, e) {
              return null != t && this.seek(t, e), this.reversed(!1).paused(!1)
            }, n.pause = function (t, e) {
              return null != t && this.seek(t, e), this.paused(!0)
            }, n.resume = function (t, e) {
              return null != t && this.seek(t, e), this.paused(!1)
            }, n.seek = function (t, e) {
              return this.totalTime(Number(t), !1 !== e)
            }, n.restart = function (t, e) {
              return this.reversed(!1).paused(!1).totalTime(t ? -this._delay : 0, !1 !== e, !0)
            }, n.reverse = function (t, e) {
              return null != t && this.seek(t || this.totalDuration(), e), this.reversed(!0).paused(!1)
            }, n.render = function (t, e, i) {}, n.invalidate = function () {
              return this._time = this._totalTime = 0, this._initted = this._gc = !1, this._rawPrevTime = -1, (this._gc || !this.timeline) && this._enabled(!0), this
            }, n.isActive = function () {
              var t, e = this._timeline,
                i = this._startTime;
              return !e || !this._gc && !this._paused && e.isActive() && (t = e.rawTime()) >= i && t < i + this.totalDuration() / this._timeScale
            }, n._enabled = function (t, e) {
              return o || a.wake(), this._gc = !t, this._active = this.isActive(), !0 !== e && (t && !this.timeline ? this._timeline.add(this, this._startTime - this._delay) : !t && this.timeline && this._timeline._remove(this, !0)), !1
            }, n._kill = function (t, e) {
              return this._enabled(!1, !1)
            }, n.kill = function (t, e) {
              return this._kill(t, e), this
            }, n._uncache = function (t) {
              for (var e = t ? this : this.timeline; e;) e._dirty = !0, e = e.timeline;
              return this
            }, n._swapSelfInParams = function (t) {
              for (var e = t.length, i = t.concat(); --e > -1;) "{self}" === t[e] && (i[e] = this);
              return i
            }, n._callback = function (t) {
              var e = this.vars;
              e[t].apply(e[t + "Scope"] || e.callbackScope || this, e[t + "Params"] || y)
            }, n.eventCallback = function (t, e, i, s) {
              if ("on" === (t || "").substr(0, 2)) {
                var r = this.vars;
                if (1 === arguments.length) return r[t];
                null == e ? delete r[t] : (r[t] = e, r[t + "Params"] = c(i) && -1 !== i.join("").indexOf("{self}") ? this._swapSelfInParams(i) : i, r[t + "Scope"] = s), "onUpdate" === t && (this._onUpdate = e)
              }
              return this
            }, n.delay = function (t) {
              return arguments.length ? (this._timeline.smoothChildTiming && this.startTime(this._startTime + t - this._delay), this._delay = t, this) : this._delay
            }, n.duration = function (t) {
              return arguments.length ? (this._duration = this._totalDuration = t, this._uncache(!0), this._timeline.smoothChildTiming && this._time > 0 && this._time < this._duration && 0 !== t && this.totalTime(this._totalTime * (t / this._duration), !0), this) : (this._dirty = !1, this._duration)
            }, n.totalDuration = function (t) {
              return this._dirty = !1, arguments.length ? this.duration(t) : this._totalDuration
            }, n.time = function (t, e) {
              return arguments.length ? (this._dirty && this.totalDuration(), this.totalTime(t > this._duration ? this._duration : t, e)) : this._time
            }, n.totalTime = function (t, e, i) {
              if (o || a.wake(), !arguments.length) return this._totalTime;
              if (this._timeline) {
                if (0 > t && !i && (t += this.totalDuration()), this._timeline.smoothChildTiming) {
                  this._dirty && this.totalDuration();
                  var s = this._totalDuration,
                    r = this._timeline;
                  if (t > s && !i && (t = s), this._startTime = (this._paused ? this._pauseTime : r._time) - (this._reversed ? s - t : t) / this._timeScale, r._dirty || this._uncache(!1), r._timeline)
                    for (; r._timeline;) r._timeline._time !== (r._startTime + r._totalTime) / r._timeScale && r.totalTime(r._totalTime, !0), r = r._timeline
                }
                this._gc && this._enabled(!0, !1), (this._totalTime !== t || 0 === this._duration) && (z.length && $(), this.render(t, e, !1), z.length && $())
              }
              return this
            }, n.progress = n.totalProgress = function (t, e) {
              var i = this.duration();
              return arguments.length ? this.totalTime(i * t, e) : i ? this._time / i : this.ratio
            }, n.startTime = function (t) {
              return arguments.length ? (t !== this._startTime && (this._startTime = t, this.timeline && this.timeline._sortChildren && this.timeline.add(this, t - this._delay)), this) : this._startTime
            }, n.endTime = function (t) {
              return this._startTime + (0 != t ? this.totalDuration() : this.duration()) / this._timeScale
            }, n.timeScale = function (t) {
              if (!arguments.length) return this._timeScale;
              if (t = t || _, this._timeline && this._timeline.smoothChildTiming) {
                var e = this._pauseTime,
                  i = e || 0 === e ? e : this._timeline.totalTime();
                this._startTime = i - (i - this._startTime) * this._timeScale / t
              }
              return this._timeScale = t, this._uncache(!1)
            }, n.reversed = function (t) {
              return arguments.length ? (t != this._reversed && (this._reversed = t, this.totalTime(this._timeline && !this._timeline.smoothChildTiming ? this.totalDuration() - this._totalTime : this._totalTime, !0)), this) : this._reversed
            }, n.paused = function (t) {
              if (!arguments.length) return this._paused;
              var e, i, s = this._timeline;
              return t != this._paused && s && (o || t || a.wake(), i = (e = s.rawTime()) - this._pauseTime, !t && s.smoothChildTiming && (this._startTime += i, this._uncache(!1)), this._pauseTime = t ? e : null, this._paused = t, this._active = this.isActive(), !t && 0 !== i && this._initted && this.duration() && (e = s.smoothChildTiming ? this._totalTime : (e - this._startTime) / this._timeScale, this.render(e, e === this._totalTime, !0))), this._gc && !t && this._enabled(!0, !1), this
            };
            var C = g("core.SimpleTimeline", function (t) {
              R.call(this, 0, t), this.autoRemoveChildren = this.smoothChildTiming = !0
            });
            (n = C.prototype = new R).constructor = C, n.kill()._gc = !1, n._first = n._last = n._recent = null, n._sortChildren = !1, n.add = n.insert = function (t, e, i, s) {
              var r, n;
              if (t._startTime = Number(e || 0) + t._delay, t._paused && this !== t._timeline && (t._pauseTime = t._startTime + (this.rawTime() - t._startTime) / t._timeScale), t.timeline && t.timeline._remove(t, !0), t.timeline = t._timeline = this, t._gc && t._enabled(!0, !0), r = this._last, this._sortChildren)
                for (n = t._startTime; r && r._startTime > n;) r = r._prev;
              return r ? (t._next = r._next, r._next = t) : (t._next = this._first, this._first = t), t._next ? t._next._prev = t : this._last = t, t._prev = r, this._recent = t, this._timeline && this._uncache(!0), this
            }, n._remove = function (t, e) {
              return t.timeline === this && (e || t._enabled(!1, !0), t._prev ? t._prev._next = t._next : this._first === t && (this._first = t._next), t._next ? t._next._prev = t._prev : this._last === t && (this._last = t._prev), t._next = t._prev = t.timeline = null, t === this._recent && (this._recent = this._last), this._timeline && this._uncache(!0)), this
            }, n.render = function (t, e, i) {
              var s, r = this._first;
              for (this._totalTime = this._time = this._rawPrevTime = t; r;) s = r._next, (r._active || t >= r._startTime && !r._paused) && (r._reversed ? r.render((r._dirty ? r.totalDuration() : r._totalDuration) - (t - r._startTime) * r._timeScale, e, i) : r.render((t - r._startTime) * r._timeScale, e, i)), r = s
            }, n.rawTime = function () {
              return o || a.wake(), this._totalTime
            };
            var D = g("TweenLite", function (e, i, s) {
                if (R.call(this, i, s), this.render = D.prototype.render, null == e) throw "Cannot tween a null target.";
                this.target = e = "string" != typeof e ? e : D.selector(e) || e;
                var r, n, a, o = e.jquery || e.length && e !== t && e[0] && (e[0] === t || e[0].nodeType && e[0].style && !e.nodeType),
                  l = this.vars.overwrite;
                if (this._overwrite = l = null == l ? U[D.defaultOverwrite] : "number" == typeof l ? l >> 0 : U[l], (o || e instanceof Array || e.push && c(e)) && "number" != typeof e[0])
                  for (this._targets = a = u(e), this._propLookup = [], this._siblings = [], r = 0; r < a.length; r++)(n = a[r]) ? "string" != typeof n ? n.length && n !== t && n[0] && (n[0] === t || n[0].nodeType && n[0].style && !n.nodeType) ? (a.splice(r--, 1), this._targets = a = a.concat(u(n))) : (this._siblings[r] = G(n, this, !1), 1 === l && this._siblings[r].length > 1 && H(n, this, null, 1, this._siblings[r])) : "string" == typeof (n = a[r--] = D.selector(n)) && a.splice(r + 1, 1) : a.splice(r--, 1);
                else this._propLookup = {}, this._siblings = G(e, this, !1), 1 === l && this._siblings.length > 1 && H(e, this, null, 1, this._siblings);
                (this.vars.immediateRender || 0 === i && 0 === this._delay && !1 !== this.vars.immediateRender) && (this._time = -_, this.render(Math.min(0, -this._delay)))
              }, !0),
              M = function (e) {
                return e && e.length && e !== t && e[0] && (e[0] === t || e[0].nodeType && e[0].style && !e.nodeType)
              };
            (n = D.prototype = new R).constructor = D, n.kill()._gc = !1, n.ratio = 0, n._firstPT = n._targets = n._overwrittenProps = n._startAt = null, n._notifyPluginsOfEnabled = n._lazy = !1, D.version = "1.18.4", D.defaultEase = n._ease = new T(null, null, 1, 1), D.defaultOverwrite = "auto", D.ticker = a, D.autoSleep = 120, D.lagSmoothing = function (t, e) {
              a.lagSmoothing(t, e)
            }, D.selector = t.$ || t.jQuery || function (e) {
              var i = t.$ || t.jQuery;
              return i ? (D.selector = i, i(e)) : "undefined" == typeof document ? e : document.querySelectorAll ? document.querySelectorAll(e) : document.getElementById("#" === e.charAt(0) ? e.substr(1) : e)
            };
            var z = [],
              F = {},
              X = /(?:(-|-=|\+=)?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/gi,
              I = function (t) {
                for (var e, i = this._firstPT; i;) e = i.blob ? t ? this.join("") : this.start : i.c * t + i.s, i.r ? e = Math.round(e) : 1e-6 > e && e > -1e-6 && (e = 0), i.f ? i.fp ? i.t[i.p](i.fp, e) : i.t[i.p](e) : i.t[i.p] = e, i = i._next
              },
              N = function (t, e, i, s) {
                var r, n, a, o, l, h, _, u = [t, e],
                  f = 0,
                  c = "",
                  p = 0;
                for (u.start = t, i && (i(u), t = u[0], e = u[1]), u.length = 0, r = t.match(X) || [], n = e.match(X) || [], s && (s._next = null, s.blob = 1, u._firstPT = s), l = n.length, o = 0; l > o; o++) _ = n[o], c += (h = e.substr(f, e.indexOf(_, f) - f)) || !o ? h : ",", f += h.length, p ? p = (p + 1) % 5 : "rgba(" === h.substr(-5) && (p = 1), _ === r[o] || r.length <= o ? c += _ : (c && (u.push(c), c = ""), a = parseFloat(r[o]), u.push(a), u._firstPT = {
                  _next: u._firstPT,
                  t: u,
                  p: u.length - 1,
                  s: a,
                  c: ("=" === _.charAt(1) ? parseInt(_.charAt(0) + "1", 10) * parseFloat(_.substr(2)) : parseFloat(_) - a) || 0,
                  f: 0,
                  r: p && 4 > p
                }), f += _.length;
                return (c += e.substr(f)) && u.push(c), u.setRatio = I, u
              },
              L = function (t, e, i, s, r, n, a, o) {
                var l, h = "get" === i ? t[e] : i,
                  _ = typeof t[e],
                  u = "string" == typeof s && "=" === s.charAt(1),
                  f = {
                    t: t,
                    p: e,
                    s: h,
                    f: "function" === _,
                    pg: 0,
                    n: r || e,
                    r: n,
                    pr: 0,
                    c: u ? parseInt(s.charAt(0) + "1", 10) * parseFloat(s.substr(2)) : parseFloat(s) - h || 0
                  };
                return "number" !== _ && ("function" === _ && "get" === i && (l = e.indexOf("set") || "function" != typeof t["get" + e.substr(3)] ? e : "get" + e.substr(3), f.s = h = a ? t[l](a) : t[l]()), "string" == typeof h && (a || isNaN(h)) ? (f.fp = a, f = {
                  t: N(h, s, o || D.defaultStringFilter, f),
                  p: "setRatio",
                  s: 0,
                  c: 1,
                  f: 2,
                  pg: 0,
                  n: r || e,
                  pr: 0
                }) : u || (f.s = parseFloat(h), f.c = parseFloat(s) - f.s || 0)), f.c ? ((f._next = this._firstPT) && (f._next._prev = f), this._firstPT = f, f) : void 0
              },
              E = D._internals = {
                isArray: c,
                isSelector: M,
                lazyTweens: z,
                blobDif: N
              },
              B = D._plugins = {},
              Y = E.tweenLookup = {},
              j = 0,
              V = E.reservedProps = {
                ease: 1,
                delay: 1,
                overwrite: 1,
                onComplete: 1,
                onCompleteParams: 1,
                onCompleteScope: 1,
                useFrames: 1,
                runBackwards: 1,
                startAt: 1,
                onUpdate: 1,
                onUpdateParams: 1,
                onUpdateScope: 1,
                onStart: 1,
                onStartParams: 1,
                onStartScope: 1,
                onReverseComplete: 1,
                onReverseCompleteParams: 1,
                onReverseCompleteScope: 1,
                onRepeat: 1,
                onRepeatParams: 1,
                onRepeatScope: 1,
                easeParams: 1,
                yoyo: 1,
                immediateRender: 1,
                repeat: 1,
                repeatDelay: 1,
                data: 1,
                paused: 1,
                reversed: 1,
                autoCSS: 1,
                lazy: 1,
                onOverwrite: 1,
                callbackScope: 1,
                stringFilter: 1
              },
              U = {
                none: 0,
                all: 1,
                auto: 2,
                concurrent: 3,
                allOnStart: 4,
                preexisting: 5,
                true: 1,
                false: 0
              },
              q = R._rootFramesTimeline = new C,
              W = R._rootTimeline = new C,
              Z = 30,
              $ = E.lazyRender = function () {
                var t, e = z.length;
                for (F = {}; --e > -1;)(t = z[e]) && !1 !== t._lazy && (t.render(t._lazy[0], t._lazy[1], !0), t._lazy = !1);
                z.length = 0
              };
            W._startTime = a.time, q._startTime = a.frame, W._active = q._active = !0, setTimeout($, 1), R._updateRoot = D.render = function () {
              var t, e, i;
              if (z.length && $(), W.render((a.time - W._startTime) * W._timeScale, !1, !1), q.render((a.frame - q._startTime) * q._timeScale, !1, !1), z.length && $(), a.frame >= Z) {
                for (i in Z = a.frame + (parseInt(D.autoSleep, 10) || 120), Y) {
                  for (t = (e = Y[i].tweens).length; --t > -1;) e[t]._gc && e.splice(t, 1);
                  0 === e.length && delete Y[i]
                }
                if ((!(i = W._first) || i._paused) && D.autoSleep && !q._first && 1 === a._listeners.tick.length) {
                  for (; i && i._paused;) i = i._next;
                  i || a.sleep()
                }
              }
            }, a.addEventListener("tick", R._updateRoot);
            var G = function (t, e, i) {
                var s, r, n = t._gsTweenID;
                if (Y[n || (t._gsTweenID = n = "t" + j++)] || (Y[n] = {
                    target: t,
                    tweens: []
                  }), e && ((s = Y[n].tweens)[r = s.length] = e, i))
                  for (; --r > -1;) s[r] === e && s.splice(r, 1);
                return Y[n].tweens
              },
              Q = function (t, e, i, s) {
                var r, n, a = t.vars.onOverwrite;
                return a && (r = a(t, e, i, s)), (a = D.onOverwrite) && (n = a(t, e, i, s)), !1 !== r && !1 !== n
              },
              H = function (t, e, i, s, r) {
                var n, a, o, l;
                if (1 === s || s >= 4) {
                  for (l = r.length, n = 0; l > n; n++)
                    if ((o = r[n]) !== e) o._gc || o._kill(null, t, e) && (a = !0);
                    else if (5 === s) break;
                  return a
                }
                var h, u = e._startTime + _,
                  f = [],
                  c = 0,
                  p = 0 === e._duration;
                for (n = r.length; --n > -1;)(o = r[n]) === e || o._gc || o._paused || (o._timeline !== e._timeline ? (h = h || K(e, 0, p), 0 === K(o, h, p) && (f[c++] = o)) : o._startTime <= u && o._startTime + o.totalDuration() / o._timeScale > u && ((p || !o._initted) && u - o._startTime <= 2e-10 || (f[c++] = o)));
                for (n = c; --n > -1;)
                  if (o = f[n], 2 === s && o._kill(i, t, e) && (a = !0), 2 !== s || !o._firstPT && o._initted) {
                    if (2 !== s && !Q(o, e)) continue;
                    o._enabled(!1, !1) && (a = !0)
                  } return a
              },
              K = function (t, e, i) {
                for (var s = t._timeline, r = s._timeScale, n = t._startTime; s._timeline;) {
                  if (n += s._startTime, r *= s._timeScale, s._paused) return -100;
                  s = s._timeline
                }
                return (n /= r) > e ? n - e : i && n === e || !t._initted && 2 * _ > n - e ? _ : (n += t.totalDuration() / t._timeScale / r) > e + _ ? 0 : n - e - _
              };
            n._init = function () {
              var t, e, i, s, r, n = this.vars,
                a = this._overwrittenProps,
                o = this._duration,
                l = !!n.immediateRender,
                h = n.ease;
              if (n.startAt) {
                for (s in this._startAt && (this._startAt.render(-1, !0), this._startAt.kill()), r = {}, n.startAt) r[s] = n.startAt[s];
                if (r.overwrite = !1, r.immediateRender = !0, r.lazy = l && !1 !== n.lazy, r.startAt = r.delay = null, this._startAt = D.to(this.target, 0, r), l)
                  if (this._time > 0) this._startAt = null;
                  else if (0 !== o) return
              } else if (n.runBackwards && 0 !== o)
                if (this._startAt) this._startAt.render(-1, !0), this._startAt.kill(), this._startAt = null;
                else {
                  for (s in 0 !== this._time && (l = !1), i = {}, n) V[s] && "autoCSS" !== s || (i[s] = n[s]);
                  if (i.overwrite = 0, i.data = "isFromStart", i.lazy = l && !1 !== n.lazy, i.immediateRender = l, this._startAt = D.to(this.target, 0, i), l) {
                    if (0 === this._time) return
                  } else this._startAt._init(), this._startAt._enabled(!1), this.vars.immediateRender && (this._startAt = null)
                } if (this._ease = h = h ? h instanceof T ? h : "function" == typeof h ? new T(h, n.easeParams) : x[h] || D.defaultEase : D.defaultEase, n.easeParams instanceof Array && h.config && (this._ease = h.config.apply(h, n.easeParams)), this._easeType = this._ease._type, this._easePower = this._ease._power, this._firstPT = null, this._targets)
                for (t = this._targets.length; --t > -1;) this._initProps(this._targets[t], this._propLookup[t] = {}, this._siblings[t], a ? a[t] : null) && (e = !0);
              else e = this._initProps(this.target, this._propLookup, this._siblings, a);
              if (e && D._onPluginEvent("_onInitAllProps", this), a && (this._firstPT || "function" != typeof this.target && this._enabled(!1, !1)), n.runBackwards)
                for (i = this._firstPT; i;) i.s += i.c, i.c = -i.c, i = i._next;
              this._onUpdate = n.onUpdate, this._initted = !0
            }, n._initProps = function (e, i, s, r) {
              var n, a, o, l, h, _;
              if (null == e) return !1;
              for (n in F[e._gsTweenID] && $(), this.vars.css || e.style && e !== t && e.nodeType && B.css && !1 !== this.vars.autoCSS && function (t, e) {
                  var i, s = {};
                  for (i in t) V[i] || i in e && "transform" !== i && "x" !== i && "y" !== i && "width" !== i && "height" !== i && "className" !== i && "border" !== i || !(!B[i] || B[i] && B[i]._autoCSS) || (s[i] = t[i], delete t[i]);
                  t.css = s
                }(this.vars, e), this.vars)
                if (_ = this.vars[n], V[n]) _ && (_ instanceof Array || _.push && c(_)) && -1 !== _.join("").indexOf("{self}") && (this.vars[n] = _ = this._swapSelfInParams(_, this));
                else if (B[n] && (l = new B[n])._onInitTween(e, this.vars[n], this)) {
                for (this._firstPT = h = {
                    _next: this._firstPT,
                    t: l,
                    p: "setRatio",
                    s: 0,
                    c: 1,
                    f: 1,
                    n: n,
                    pg: 1,
                    pr: l._priority
                  }, a = l._overwriteProps.length; --a > -1;) i[l._overwriteProps[a]] = this._firstPT;
                (l._priority || l._onInitAllProps) && (o = !0), (l._onDisable || l._onEnable) && (this._notifyPluginsOfEnabled = !0), h._next && (h._next._prev = h)
              } else i[n] = L.call(this, e, n, "get", _, n, 0, null, this.vars.stringFilter);
              return r && this._kill(r, e) ? this._initProps(e, i, s, r) : this._overwrite > 1 && this._firstPT && s.length > 1 && H(e, this, i, this._overwrite, s) ? (this._kill(i, e), this._initProps(e, i, s, r)) : (this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration) && (F[e._gsTweenID] = !0), o)
            }, n.render = function (t, e, i) {
              var s, r, n, a, o = this._time,
                l = this._duration,
                h = this._rawPrevTime;
              if (t >= l - 1e-7) this._totalTime = this._time = l, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1, this._reversed || (s = !0, r = "onComplete", i = i || this._timeline.autoRemoveChildren), 0 === l && (this._initted || !this.vars.lazy || i) && (this._startTime === this._timeline._duration && (t = 0), (0 > h || 0 >= t && t >= -1e-7 || h === _ && "isPause" !== this.data) && h !== t && (i = !0, h > _ && (r = "onReverseComplete")), this._rawPrevTime = a = !e || t || h === t ? t : _);
              else if (1e-7 > t) this._totalTime = this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== o || 0 === l && h > 0) && (r = "onReverseComplete", s = this._reversed), 0 > t && (this._active = !1, 0 === l && (this._initted || !this.vars.lazy || i) && (h >= 0 && (h !== _ || "isPause" !== this.data) && (i = !0), this._rawPrevTime = a = !e || t || h === t ? t : _)), this._initted || (i = !0);
              else if (this._totalTime = this._time = t, this._easeType) {
                var u = t / l,
                  f = this._easeType,
                  c = this._easePower;
                (1 === f || 3 === f && u >= .5) && (u = 1 - u), 3 === f && (u *= 2), 1 === c ? u *= u : 2 === c ? u *= u * u : 3 === c ? u *= u * u * u : 4 === c && (u *= u * u * u * u), this.ratio = 1 === f ? 1 - u : 2 === f ? u : .5 > t / l ? u / 2 : 1 - u / 2
              } else this.ratio = this._ease.getRatio(t / l);
              if (this._time !== o || i) {
                if (!this._initted) {
                  if (this._init(), !this._initted || this._gc) return;
                  if (!i && this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration)) return this._time = this._totalTime = o, this._rawPrevTime = h, z.push(this), void(this._lazy = [t, e]);
                  this._time && !s ? this.ratio = this._ease.getRatio(this._time / l) : s && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1))
                }
                for (!1 !== this._lazy && (this._lazy = !1), this._active || !this._paused && this._time !== o && t >= 0 && (this._active = !0), 0 === o && (this._startAt && (t >= 0 ? this._startAt.render(t, e, i) : r || (r = "_dummyGS")), this.vars.onStart && (0 !== this._time || 0 === l) && (e || this._callback("onStart"))), n = this._firstPT; n;) n.f ? n.t[n.p](n.c * this.ratio + n.s) : n.t[n.p] = n.c * this.ratio + n.s, n = n._next;
                this._onUpdate && (0 > t && this._startAt && -1e-4 !== t && this._startAt.render(t, e, i), e || (this._time !== o || s || i) && this._callback("onUpdate")), r && (!this._gc || i) && (0 > t && this._startAt && !this._onUpdate && -1e-4 !== t && this._startAt.render(t, e, i), s && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[r] && this._callback(r), 0 === l && this._rawPrevTime === _ && a !== _ && (this._rawPrevTime = 0))
              }
            }, n._kill = function (t, e, i) {
              if ("all" === t && (t = null), null == t && (null == e || e === this.target)) return this._lazy = !1, this._enabled(!1, !1);
              e = "string" != typeof e ? e || this._targets || this.target : D.selector(e) || e;
              var s, r, n, a, o, l, h, _, u, f = i && this._time && i._startTime === this._startTime && this._timeline === i._timeline;
              if ((c(e) || M(e)) && "number" != typeof e[0])
                for (s = e.length; --s > -1;) this._kill(t, e[s], i) && (l = !0);
              else {
                if (this._targets) {
                  for (s = this._targets.length; --s > -1;)
                    if (e === this._targets[s]) {
                      o = this._propLookup[s] || {}, this._overwrittenProps = this._overwrittenProps || [], r = this._overwrittenProps[s] = t ? this._overwrittenProps[s] || {} : "all";
                      break
                    }
                } else {
                  if (e !== this.target) return !1;
                  o = this._propLookup, r = this._overwrittenProps = t ? this._overwrittenProps || {} : "all"
                }
                if (o) {
                  if (h = t || o, _ = t !== r && "all" !== r && t !== o && ("object" != typeof t || !t._tempKill), i && (D.onOverwrite || this.vars.onOverwrite)) {
                    for (n in h) o[n] && (u || (u = []), u.push(n));
                    if ((u || !t) && !Q(this, i, e, u)) return !1
                  }
                  for (n in h)(a = o[n]) && (f && (a.f ? a.t[a.p](a.s) : a.t[a.p] = a.s, l = !0), a.pg && a.t._kill(h) && (l = !0), a.pg && 0 !== a.t._overwriteProps.length || (a._prev ? a._prev._next = a._next : a === this._firstPT && (this._firstPT = a._next), a._next && (a._next._prev = a._prev), a._next = a._prev = null), delete o[n]), _ && (r[n] = 1);
                  !this._firstPT && this._initted && this._enabled(!1, !1)
                }
              }
              return l
            }, n.invalidate = function () {
              return this._notifyPluginsOfEnabled && D._onPluginEvent("_onDisable", this), this._firstPT = this._overwrittenProps = this._startAt = this._onUpdate = null, this._notifyPluginsOfEnabled = this._active = this._lazy = !1, this._propLookup = this._targets ? {} : [], R.prototype.invalidate.call(this), this.vars.immediateRender && (this._time = -_, this.render(Math.min(0, -this._delay))), this
            }, n._enabled = function (t, e) {
              if (o || a.wake(), t && this._gc) {
                var i, s = this._targets;
                if (s)
                  for (i = s.length; --i > -1;) this._siblings[i] = G(s[i], this, !0);
                else this._siblings = G(this.target, this, !0)
              }
              return R.prototype._enabled.call(this, t, e), !(!this._notifyPluginsOfEnabled || !this._firstPT) && D._onPluginEvent(t ? "_onEnable" : "_onDisable", this)
            }, D.to = function (t, e, i) {
              return new D(t, e, i)
            }, D.from = function (t, e, i) {
              return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new D(t, e, i)
            }, D.fromTo = function (t, e, i, s) {
              return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, new D(t, e, s)
            }, D.delayedCall = function (t, e, i, s, r) {
              return new D(e, 0, {
                delay: t,
                onComplete: e,
                onCompleteParams: i,
                callbackScope: s,
                onReverseComplete: e,
                onReverseCompleteParams: i,
                immediateRender: !1,
                lazy: !1,
                useFrames: r,
                overwrite: 0
              })
            }, D.set = function (t, e) {
              return new D(t, 0, e)
            }, D.getTweensOf = function (t, e) {
              if (null == t) return [];
              var i, s, r, n;
              if (t = "string" != typeof t ? t : D.selector(t) || t, (c(t) || M(t)) && "number" != typeof t[0]) {
                for (i = t.length, s = []; --i > -1;) s = s.concat(D.getTweensOf(t[i], e));
                for (i = s.length; --i > -1;)
                  for (n = s[i], r = i; --r > -1;) n === s[r] && s.splice(i, 1)
              } else
                for (i = (s = G(t).concat()).length; --i > -1;)(s[i]._gc || e && !s[i].isActive()) && s.splice(i, 1);
              return s
            }, D.killTweensOf = D.killDelayedCallsTo = function (t, e, i) {
              "object" == typeof e && (i = e, e = !1);
              for (var s = D.getTweensOf(t, e), r = s.length; --r > -1;) s[r]._kill(i, t)
            };
            var J = g("plugins.TweenPlugin", function (t, e) {
              this._overwriteProps = (t || "").split(","), this._propName = this._overwriteProps[0], this._priority = e || 0, this._super = J.prototype
            }, !0);
            if (n = J.prototype, J.version = "1.18.0", J.API = 2, n._firstPT = null, n._addTween = L, n.setRatio = I, n._kill = function (t) {
                var e, i = this._overwriteProps,
                  s = this._firstPT;
                if (null != t[this._propName]) this._overwriteProps = [];
                else
                  for (e = i.length; --e > -1;) null != t[i[e]] && i.splice(e, 1);
                for (; s;) null != t[s.n] && (s._next && (s._next._prev = s._prev), s._prev ? (s._prev._next = s._next, s._prev = null) : this._firstPT === s && (this._firstPT = s._next)), s = s._next;
                return !1
              }, n._roundProps = function (t, e) {
                for (var i = this._firstPT; i;)(t[this._propName] || null != i.n && t[i.n.split(this._propName + "_").join("")]) && (i.r = e), i = i._next
              }, D._onPluginEvent = function (t, e) {
                var i, s, r, n, a, o = e._firstPT;
                if ("_onInitAllProps" === t) {
                  for (; o;) {
                    for (a = o._next, s = r; s && s.pr > o.pr;) s = s._next;
                    (o._prev = s ? s._prev : n) ? o._prev._next = o: r = o, (o._next = s) ? s._prev = o : n = o, o = a
                  }
                  o = e._firstPT = r
                }
                for (; o;) o.pg && "function" == typeof o.t[t] && o.t[t]() && (i = !0), o = o._next;
                return i
              }, J.activate = function (t) {
                for (var e = t.length; --e > -1;) t[e].API === J.API && (B[(new t[e])._propName] = t[e]);
                return !0
              }, m.plugin = function (t) {
                if (!(t && t.propName && t.init && t.API)) throw "illegal plugin definition.";
                var e, i = t.propName,
                  s = t.priority || 0,
                  r = t.overwriteProps,
                  n = {
                    init: "_onInitTween",
                    set: "setRatio",
                    kill: "_kill",
                    round: "_roundProps",
                    initAll: "_onInitAllProps"
                  },
                  a = g("plugins." + i.charAt(0).toUpperCase() + i.substr(1) + "Plugin", function () {
                    J.call(this, i, s), this._overwriteProps = r || []
                  }, !0 === t.global),
                  o = a.prototype = new J(i);
                for (e in o.constructor = a, a.API = t.API, n) "function" == typeof t[e] && (o[n[e]] = t[e]);
                return a.version = t.version, J.activate([a]), a
              }, s = t._gsQueue) {
              for (r = 0; r < s.length; r++) s[r]();
              for (n in p) p[n].func || t.console.log("GSAP encountered missing dependency: com.greensock." + n)
            }
            o = !1
          }
        }("undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window);
      var $text = document.querySelector(".button-glitch-active"),
        $filter = document.querySelector(".svg-sprite"),
        $turb = $filter.querySelector("#filter feTurbulence"),
        turbVal = {
          val: 1e-6
        },
        turbValX = {
          val: 1e-6
        },
        glitchTimeline = function () {
          var t = new TimelineMax({
            repeat: -1,
            repeatDelay: 2,
            paused: !0,
            onUpdate: function () {
              $turb.setAttribute("baseFrequency", turbVal.val + " " + turbValX.val)
            }
          });
          return t.to(turbValX, .1, {
            val: .5
          }).to(turbVal, .1, {
            val: .02
          }), t.set(turbValX, {
            val: 1e-6
          }).set(turbVal, {
            val: 1e-6
          }), t.to(turbValX, .2, {
            val: .4
          }, .4).to(turbVal, .2, {
            val: .002
          }, .4), t.set(turbValX, {
            val: 1e-6
          }).set(turbVal, {
            val: 1e-6
          }), {
            start: function () {
              t.play(0)
            },
            stop: function () {
              t.pause()
            }
          }
        };
      btnGlitch = new glitchTimeline, jQuery(".button-glitch").on("mouseenter", function () {
        jQuery(this).addClass("button-glitch-active"), btnGlitch.start()
      }).on("mouseleave", function () {
        var t = jQuery(this);
        t.hasClass("button-glitch-active") && (t.removeClass("button-glitch-active"), btnGlitch.stop())
      });
    }
  }
  reducedMotionCheck();
  motionQuery.addListener(reducedMotionCheck);

</script>

</body>
</html>
