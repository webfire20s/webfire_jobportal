<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/css/aos.css" rel="stylesheet" />
    <link
      href="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/css/glightbox.min.css"
      rel="stylesheet"
    />
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- Template Main CSS File -->
    <link href="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/css/style.css" rel="stylesheet" />

    <!--<script src="https://kit.fontawesome.com/23ba61ec1e.js" crossorigin="anonymous"></script>-->
    <link
      rel="stylesheet"
      href="../y3uQHg8V8vsy.com/ajax/libs/OwlCarousel2/39LePtfN87IV.4/assets/dXKCIwbmAORM.css"
    />
    <link
      rel="stylesheet"
      href="../y3uQHg8V8vsy.com/ajax/libs/OwlCarousel2/39LePtfN87IV.4/assets/tFQrSPfmAvlY.css"
    />

    <script src="wp-content/themes/egov/assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $(".my-news-ticker").AcmeTicker({
          type: "marquee",
          direction: "left",
          speed: 0.05,
          controls: {
            toggle: $(".acme-news-ticker-pause"),
          },
        });
      });
    </script>

    <script src="wp-content/themes/egov/js/citylist.js"></script>

    <meta
      name="robots"
      content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"
    />

    <!-- This site is optimized with the Yoast SEO plugin v20.9 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>@yield('title', 'JobPortal')</title>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />

    <script>
      window._wpemojiSettings = {
        baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
        ext: ".png",
        svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
        svgExt: ".svg",
        source: {
          concatemoji:
            "https:\/\/aRregqpH93uL.in\/wp-includes\/js\/wp-emoji-release.min.js",
        },
      };
      /*! This file is auto-generated */
      !(function (i, n) {
        var o, s, e;
        function c(e) {
          try {
            var t = { supportTests: e, timestamp: new Date().valueOf() };
            sessionStorage.setItem(o, JSON.stringify(t));
          } catch (e) {}
        }
        function p(e, t, n) {
          e.clearRect(0, 0, e.canvas.width, e.canvas.height),
            e.fillText(t, 0, 0);
          var t = new Uint32Array(
              e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
            ),
            r =
              (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
              e.fillText(n, 0, 0),
              new Uint32Array(
                e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
              ));
          return t.every(function (e, t) {
            return e === r[t];
          });
        }
        function u(e, t, n) {
          switch (t) {
            case "flag":
              return n(
                e,
                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
              )
                ? !1
                : !n(
                    e,
                    "\ud83c\uddfa\ud83c\uddf3",
                    "\ud83c\uddfa\u200b\ud83c\uddf3"
                  ) &&
                    !n(
                      e,
                      "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                      "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                    );
            case "emoji":
              return !n(
                e,
                "\ud83d\udc26\u200d\u2b1b",
                "\ud83d\udc26\u200b\u2b1b"
              );
          }
          return !1;
        }
        function f(e, t, n) {
          var r =
              "undefined" != typeof WorkerGlobalScope &&
              self instanceof WorkerGlobalScope
                ? new OffscreenCanvas(300, 150)
                : i.createElement("canvas"),
            a = r.getContext("2d", { willReadFrequently: !0 }),
            o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
          return (
            e.forEach(function (e) {
              o[e] = t(a, e, n);
            }),
            o
          );
        }
        function t(e) {
          var t = i.createElement("script");
          (t.src = e), (t.defer = !0), i.head.appendChild(t);
        }
        "undefined" != typeof Promise &&
          ((o = "wpEmojiSettingsSupports"),
          (s = ["flag", "emoji"]),
          (n.supports = { everything: !0, everythingExceptFlag: !0 }),
          (e = new Promise(function (e) {
            i.addEventListener("DOMContentLoaded", e, { once: !0 });
          })),
          new Promise(function (t) {
            var n = (function () {
              try {
                var e = JSON.parse(sessionStorage.getItem(o));
                if (
                  "object" == typeof e &&
                  "number" == typeof e.timestamp &&
                  new Date().valueOf() < e.timestamp + 604800 &&
                  "object" == typeof e.supportTests
                )
                  return e.supportTests;
              } catch (e) {}
              return null;
            })();
            if (!n) {
              if (
                "undefined" != typeof Worker &&
                "undefined" != typeof OffscreenCanvas &&
                "undefined" != typeof URL &&
                URL.createObjectURL &&
                "undefined" != typeof Blob
              )
                try {
                  var e =
                      "postMessage(" +
                      f.toString() +
                      "(" +
                      [JSON.stringify(s), u.toString(), p.toString()].join(
                        ","
                      ) +
                      "));",
                    r = new Blob([e], { type: "text/javascript" }),
                    a = new Worker(URL.createObjectURL(r), {
                      name: "wpTestEmojiSupports",
                    });
                  return void (a.onmessage = function (e) {
                    c((n = e.data)), a.terminate(), t(n);
                  });
                } catch (e) {}
              c((n = f(s, u, p)));
            }
            t(n);
          })
            .then(function (e) {
              for (var t in e)
                (n.supports[t] = e[t]),
                  (n.supports.everything =
                    n.supports.everything && n.supports[t]),
                  "flag" !== t &&
                    (n.supports.everythingExceptFlag =
                      n.supports.everythingExceptFlag && n.supports[t]);
              (n.supports.everythingExceptFlag =
                n.supports.everythingExceptFlag && !n.supports.flag),
                (n.DOMReady = !1),
                (n.readyCallback = function () {
                  n.DOMReady = !0;
                });
            })
            .then(function () {
              return e;
            })
            .then(function () {
              var e;
              n.supports.everything ||
                (n.readyCallback(),
                (e = n.source || {}).concatemoji
                  ? t(e.concatemoji)
                  : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
            }));
      })((window, document), window._wpemojiSettings);
    </script>
    <style id="wp-emoji-styles-inline-css">
      img.wp-smiley,
      img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>
    <link
      rel="stylesheet"
      id="wp-block-library-css"
      href="wp-includes/css/dist/block-library/style.min.css"
      media="all"
    />
    <style id="classic-theme-styles-inline-css">
      /*! This file is auto-generated */
      .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em;
      }
      .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none;
      }
    </style>
    <style id="global-styles-inline-css">
      body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
          135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%
        );
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
          135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%
        );
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
          135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%
        );
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
          135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%
        );
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
          135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%
        );
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
          135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%
        );
        --wp--preset--gradient--blush-light-purple: linear-gradient(
          135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%
        );
        --wp--preset--gradient--blush-bordeaux: linear-gradient(
          135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%
        );
        --wp--preset--gradient--luminous-dusk: linear-gradient(
          135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%
        );
        --wp--preset--gradient--pale-ocean: linear-gradient(
          135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%
        );
        --wp--preset--gradient--electric-grass: linear-gradient(
          135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%
        );
        --wp--preset--gradient--midnight: linear-gradient(
          135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%
        );
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
          6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
      }
      :where(.is-layout-flex) {
        gap: 0.5em;
      }
      :where(.is-layout-grid) {
        gap: 0.5em;
      }
      body .is-layout-flex {
        display: flex;
      }
      body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
      }
      body .is-layout-flex > * {
        margin: 0;
      }
      body .is-layout-grid {
        display: grid;
      }
      body .is-layout-grid > * {
        margin: 0;
      }
      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }
      :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
      }
      :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
      }
      :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
      }
      .has-black-color {
        color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-color {
        color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }
      .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }
      .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-amber-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-amber
        ) !important;
      }
      .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-border-color {
        border-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }
      .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(
          --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
        ) !important;
      }
      .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(
          --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
        ) !important;
      }
      .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-orange-to-vivid-red
        ) !important;
      }
      .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(
          --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
        ) !important;
      }
      .has-cool-to-warm-spectrum-gradient-background {
        background: var(
          --wp--preset--gradient--cool-to-warm-spectrum
        ) !important;
      }
      .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
      }
      .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
      }
      .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
      }
      .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
      }
      .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
      }
      .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
      }
      .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
      }
      .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
      }
      .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
      }
      .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
      }
      .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
      }
      :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
      }
      :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
      }
      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }
      :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
      }
      .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
      }
    </style>
    <link
      rel="stylesheet"
      id="egov-style-css"
      href="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/style.css"
      media="all"
    />
    <script
      src="wp-includes/js/jquery/jquery.min.js"
      id="jquery-core-js"
    ></script>
    <script
      src="wp-includes/js/jquery/jquery-migrate.min.js"
      id="jquery-migrate-js"
    ></script>
    <script id="site24x7_rum_js-js-extra">
      var phpParams = {
        rumMOKey: "b75ac0fa43147b2ccae1b8121f73c6ec",
        dataCentreExt: "in",
      };
    </script>
    <script
      src="wp-content/plugins/site24x7-rum/js/site24x7-rum.js"
      id="site24x7_rum_js-js"
    ></script>
    <style id="wp-custom-css">
      #login .form-control,
      select.form-select .ms-options-wrap > button:focus,
      .ms-options-wrap > button {
        background: #fff !important;
      }

      .col-lg-5.col-md-12.col-sm-12.align-items-stretch.order-1.order-lg-2.img.formSec.p-0 {
        padding: 0px 30px !important;
      }

      select.form-select {
        background: #fff !important;
      }
    </style>

    <link
      href="../9YW0NaHu0HcO.net/npm/select2%404.0.13/dist/css/select2.min.css"
      rel="stylesheet"
    />
    <script src="../9YW0NaHu0HcO.net/npm/select2%404.0.13/dist/js/select2.min.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <style>
      .contact-info i span {
        font-family: "Poppins";
      }
    </style>
    <meta
      name="description"
      content="@yield('meta_description', 'JobPortal')"
    />
    <meta name="keywords" content="@yield('keywords', 'JobPortal')" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="@yield('meta_title', 'JobPortal')" />
    <meta
      property="og:description"
      content="@yield('meta_description', 'JobPortal')"
    />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta
      property="og:image"
      content="@yield('meta_image', asset('public/logo1.png') )"
    />
    <meta property="og:type" content="article" />

    <!-- Twitter -->
    <meta
      name="twitter:card"
      content="@yield('meta_image', asset('public/logo1.png') )"
    />
    <meta name="twitter:title" content="@yield('meta_title', 'JobPortal')" />
    <meta
      name="twitter:description"
      content="@yield('meta_description', 'JobPortal')"
    />
    <meta
      name="twitter:image"
      content="@yield('meta_image', asset('public/logo1.png') )"
    />

    <!-- Structured Data -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "@yield('meta_title', 'JobPortal')",
        "image": "@yield('meta_image', asset('public/logo1.png') )",
        "author": {
          "@type": "Person",
          "name": "@yield('author', 'Adarsh')"
        },
        "publisher": {
          "@type": "Organization",
          "name": "@yield('meta_title', 'JobPortal')",
          "logo": {
            "@type": "ImageObject",
            "url": "@yield('meta_image', asset('public/logo1.png') )"
          }
        },
        "datePublished": "2024-11-10T08:00:00+00:00",
        "description": "@yield('meta_description', 'JobPortal')"
      }
    </script>
  </head>

  <body
    class="home page-template page-template-home page-template-home-php page page-id-5 no-sidebar"
  >
    <!-- Google Tag Manager (noscript) -->
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-M5TJNQ44 "
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="topNav">
      <div class="container">
        <div class="contact-info">
          <i class="bi bi-envelope email"
            ><a href="mailto:egov.support@religare.com"
              >egov.support@religare.com</a
            ></i
          >
          <i class="fa-solid fa-phone d-flex align-items-center ms-4"
            ><a href="#"><span>08068713333</span></a></i
          >
        </div>
        <!-- <div class="lang">
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>Select Language</span></i>   
      </div>-->
      </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <span class="logo me-auto"
          ><a href="/"
            ><img
              src="wp-content/themes/egov/assets/images/logo_rbl.png"
              class="img-fluid animated"
              alt="Religare Digital" /></a
        ></span>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="https://aRregqpH93uL.in/wp-content/themes/egov/assets/images/y1B4hY5tpDwI.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active_1" href="/">Home</a></li>

            <li>
              <a class="nav-link scrollto active_2" href="/products-services"
                >Products & Services</a
              >
            </li>

            <li>
              <a class="nav-link scrollto active_3" href="/training-videos"
                ><span>Training Videos </span></a
              >
            </li>
            <li>
              <a class="nav-link scrollto" href="https://aRregqpH93uL.in/#about"
                >About us</a
              >
            </li>
            <li>
              <a class="nav-link scrollto" href="https://aRregqpH93uL.in/blog"
                >Blog</a
              >
            </li>
            <li class="dropdown">
              <a href="#" class="active_4"
                ><span>More</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li><a href="/income-calculator">Income Calculator</a></li>
                <li><a href="/contact-us">Contact Us</a></li>
                <li><a href="/career">Career</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="active_4"
                ><span>Login</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li>
                  <a
                    href="https://aRregqpH93uL.in/login/"
                    target="_blank"
                    rel="noopener noreferrer"
                    >PAN</a
                  >
                </li>
                <li>
                  <a
                    href="https://digipay.religareonline.com/auth/login/"
                    target="_blank"
                    rel="noopener noreferrer"
                    >Digipay</a
                  >
                </li>
              </ul>
            </li>

            <!-- <li><a class="nav-link scrollto active_5" href="/religaredigital/login"><strong>Login</strong></a></li>-->
            <li><a class="getstarted scrollto" href="/signup">Join Now</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
    <script src="../y3uQHg8V8vsy.com/ajax/libs/jquery/UB30JucjoGhG.0/0AgY9Xqsmuyu.js"></script>

    <script>
      $(document).ready(function () {
        $(".portfolio-item").css("display", "none");
        $(".filter-banking").css("display", "block");
        $(".fp").addClass("filter-active");
        $("#portfolio-flters li").click(function () {
          $(".portfolio-container").on("click", "li", function () {
            var filterValue = $(this).attr("data-filter");
            // use filterFn if matches value
            filterValue = filterFns[filterValue] || filterValue;
            $grid.isotope({ filter: filterValue });
          });
        });
        $(".viewAll").click(function () {
          $(".portfolio-item").css("display", "block");
        });
      });
    </script>

    <style>
      .active_1 {
        color: #000 !important;
        border-bottom: 2px solid #00a536;
        font-weight: 600 !important;
      }

      section#new-banner {
        padding: 0;
      }
      a.apply-pan1 {
        float: left;
        font-weight: 500;
        text-align: center;
        background: #00a536;
        color: #fff;
        display: inline-block;
        border-radius: 5px;
        border: #707070;
        position: fixed;
        right: -67px;
        top: 45%;
        z-index: 9999999;
        margin: 0;
        font-size: 18px;
        padding: 6px 14px;
        background-size: contain;
        transform: rotate(270deg);
        cursor: pointer;
      }

      .modal {
        display: block;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 200px;
      }
      .download-app-qr {
        width: 128px;
        background-color: #fff;
        padding: 12px 8px;
        border-radius: 8px;
        position: fixed;
        bottom: 0px;
        left: 10px;
        box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.25);
        z-index: 9;
      }
      .download-app-qr h3 {
        font-size: 11px;
        font-weight: 700;
        line-height: 16px;
        margin: 0 0 8px;
      }
      .download-app-qr .image-content {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        text-align: center;
      }
      .download-app-qr .image-content .image {
        width: 88px;
        padding: 4px;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
      }

      @media only screen and (min-width: 1440px) {
      }
    </style>

    <div class="container-fluid ticker p-0">
      <div class="acme-news-ticker">
        <div class="acme-news-ticker-label">What's New</div>
        <div class="acme-news-ticker-box">
          <ul class="my-news-ticker">
            <li>
              <a href="#"
                ><strong style="font-size: 30px; line-height: 20px">.</strong>
                <strong style="font-size: 14px; line-height: 14px"
                  >asdf
                </strong></a
              >
            </li>

            <li>
              <a href="#"
                ><strong style="font-size: 30px; line-height: 20px">.</strong>
                <strong style="font-size: 14px; line-height: 14px"
                  >Buy Mantra & Morpho L1 Biometric devices at best price. To
                  order, call</strong
                ></a
              >
            </li>

            <li>
              <a href="#"
                ><strong style="font-size: 30px; line-height: 20px">.</strong>
                <strong style="font-size: 14px; line-height: 14px"
                  >Support available on Sundays & Holidays too.
                </strong></a
              >
            </li>
            <li>
              <a href="#"
                ><strong style="font-size: 30px; line-height: 20px"></strong
              ></a>
            </li>
            <strong style="font-size: 30px; line-height: 20px"> </strong>
          </ul>
          <strong style="font-size: 30px; line-height: 20px"> </strong>
        </div>
        <strong style="font-size: 30px; line-height: 20px">
          <div
            class="acme-news-ticker-controls acme-news-ticker-horizontal-controls"
          >
            <button class="acme-news-ticker-pause"></button>
          </div>
        </strong>
      </div>
      <strong style="font-size: 30px; line-height: 20px"> </strong>
    </div>
    <strong style="font-size: 30px; line-height: 20px">
      <div id="myModal" class="modal">
        <div class="modal-content">
          <div class="download-app-qr">
            <div class="image-content">
              <h3>Download DigiPay Mobile App</h3>
              <div class="image">
                <picture>
                  <a
                    class="qrcode"
                    href="https://play.google.com/store/apps/details?id=com.religare_digipay&hl=en_IN&gl=US"
                    target="_blank"
                    ><img
                      src="wp-content/uploads/2024/07/DigiPay-Android-App-QR.png"
                      alt="upstox-qr-code"
                      width="78"
                      height="78"
                  /></a>
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ======= Hero Section ======= -->
      <section class="p-0" id="hero" style="margin-top: 0">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="/signup" target="_blank">
                <img
                  src="wp-content/uploads/2023/06/main-banner.webp"
                  alt="Banner-1"
                  class="d-block"
                  style="width: 100%"
                />
              </a>
            </div>

            <div class="carousel-item">
              <a
                href="https://www.religareonline.com/campaigns/demataccount-rdl/"
                target="_blank"
              >
                <img
                  src="../xL4fqpyWJVnd.in/wp-content/uploads/2025/01/FEnIbbdfEl7L.webp"
                  alt="demat-egov-banner"
                  class="d-block"
                  style="width: 100%"
                />
              </a>
            </div>

            <div class="carousel-item">
              <a
                href="https://aRregqpH93uL.in/buy-digital-signature-online/"
                target="_blank"
              >
                <img
                  src="wp-content/uploads/2025/05/DSCHomepageBanne.jpeg"
                  alt="dsc-egov-banner"
                  class="d-block"
                  style="width: 100%"
                />
              </a>
            </div>

            <div class="carousel-item">
              <a
                href="https://aRregqpH93uL.in/biometric-device/?utm_source=Organic-BiometricDevice"
                target="_blank"
              >
                <img
                  src="wp-content/uploads/2025/09/Product-Banner-updated-on-26-Sep-2025.jpg"
                  alt="Banner-02"
                  class="d-block"
                  style="width: 100%"
                />
              </a>
            </div>

            <div class="carousel-item">
              <a href="https://aRregqpH93uL.in/pan-service/" target="_blank"
                ><img
                  src="wp-content/uploads/2024/10/E-PAN-Banner_Artboard.jpg"
                  alt="Banner-02"
                  class="d-block"
                  style="width: 100%"
              /></a>
            </div>

            <div class="carousel-item">
              <a
                href="https://aRregqpH93uL.in/become-nps-agent/?utm_source=Organic-NPS"
                target="_blank"
              >
                <img
                  src="wp-content/uploads/2024/07/NPS-Banner-2.webp"
                  alt="Banner-5"
                  class="d-block"
                  style="width: 100%"
                />
              </a>
            </div>

            <div class="carousel-item">
              <a
                href="https://aRregqpH93uL.in/biometric-device/?utm_source=Organic-BiometricDevice"
                target="_blank"
              >
                <img
                  src="wp-content/uploads/2025/04/Thermal-Printer-updated-on-30Apr.jpg"
                  alt="Banner-7"
                  class="d-block"
                  style="width: 100%"
                />
              </a>
            </div>

            <!-- Left and right controls/icons -->
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#demo"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#demo"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </section>

      <!-- ======= Hero Section ======= -->
      <!--<section id="hero" class="d-flex align-items-center mt-0 d-none">
<div class="container">
<div class="row" style="position:relative;">
<div class="col-lg-6 pt-4 pt-lg-0 order-lg-1 bannerCont" data-aos="fade-up" data-aos-delay="200">
<h3 class="banner_heading">अपनी  <span class="greenHeading">Digital</span> दुकान खोलें  सिर्फ <span class="greenHeading">Zero</span> लागत से!</h3>
<h2>पूरे भारत में कहीं भी हमारी सर्विस प्राप्त करें और कमाएं अधिकतम कमीशन </h2>
<div class="d-flex justify-content-center justify-content-lg-start">
<a href="/Signup" class="btn-get-started scrollto">Join Religare Now</a>
<a href="/income-calculator" class="btn-get-started bgless">Income Calculator</a>
</div>
</div>
<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
<img src="https://aRregqpH93uL.in/wp-content/themes/egov/assets/images/hero-img.png" class="img-fluid animated" alt="Become an Agent">
</div>
		
<span class="banner-btn1"><img src="https://aRregqpH93uL.in/wp-content/themes/egov/assets/images/banner-btn1.png" class="img-fluid animated" alt="Become an Agent"></span>
<span class="banner-btn2"><img src="https://aRregqpH93uL.in/wp-content/themes/egov/assets/images/banner-btn2.png" class="img-fluid animated" alt="Become an Agent"></span>
</div>
</div>
</section>  --><!-- End Hero -->
      @yield('content')
      <!-- End #main -->

      <link
        href="../y3uQHg8V8vsy.com/ajax/libs/font-awesome/VN41y4ZJPw9D.0-beta3/css/rDWRcFL1twpG.css"
        rel="stylesheet"
      />

      <footer class="footer text-white pt-5 pb-4" style="background: #081d2c">
        <a
          class="apply-pan1"
          href="/pan-service/"
          target="_blank"
          rel="noopener noreferrer"
          >Apply PAN Online</a
        >

        <div class="container">
          <div class="row">
            <!-- Logo and About Section -->
            <div class="col-lg-3 col-md-6 mb-2">
              <h6 class="footer-title mb-3">
                <img
                  src="wp-content/themes/egov/campaigns/degital-footer/religare-digital-white-logo.png"
                  alt="Religare Degital Logo"
                  class="img-fluid"
                />
              </h6>
              <p class="footer-text" style="text-align: left">
                Become a Religare Agent & Start Your Digital Shop - Join
                Religare Digital, the most trusted eGovernance platform for
                starting your business. Get free marketing and training support.
              </p>

              <!-- Play Store Icon -->
              <h6 class="download-title mt-4">Download the App Now :</h6>
              <div class="mt-2">
                <a
                  href="https://play.google.com/store/search?q=religare%20digipay&c=apps"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <img
                    src="wp-content/themes/egov/campaigns/degital-footer/play_store.webp"
                    alt="Get it on Google Play"
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>
            <!-- Our Services Section - Split into Two Columns -->
            <div class="col-lg-4 col-md-6 mb-2">
              <h6 class="footer-title mb-3">Our Services</h6>
              <div class="row">
                <ul class="col-6 list-unstyled footer-links">
                  <li>
                    <a
                      href="/biometric-device/?utm_source=Organic-BiometricDevice"
                      >Biometric Devices</a
                    >
                  </li>
                  <li>
                    <a href="/dsc-token/?utm_source=Organic-DSC">
                      Digital Signature Certificate</a
                    >
                  </li>
                  <li>
                    <a href="/pmsvanidhi/?utm_source=Organic-pmsvanidhi">
                      PM Svanidhi Scheme</a
                    >
                  </li>
                  <li>
                    <a href="/dmt/?utm_source=Organic-DMT">
                      DMT-Money Transfer</a
                    >
                  </li>
                  <li>
                    <a href="/micro-atm/?utm_source=Organic-micro-atm">
                      Micro ATM</a
                    >
                  </li>
                  <li>
                    <a href="/fixed-deposit-fd/?utm_source=Organic-FD">
                      Fixed Deposits</a
                    >
                  </li>
                  <li>
                    <a href="/sovereign-gold-bonds-sgb/?utm_source=Organic-SGB"
                      >Sovereign Gold Bonds</a
                    >
                  </li>
                </ul>
                <ul class="col-6 list-unstyled footer-links">
                  <li>
                    <a href="/bus-ticketing/?utm_source=Organic-Bus-Ticket"
                      >Book Bus Tickets</a
                    >
                  </li>
                  <li>
                    <a href="/air-ticketing/?utm_source=Organic-Air-Ticket"
                      >Book Air Tickets</a
                    >
                  </li>
                  <li>
                    <a href="/home-loan/?utm_source=Organic-HomeLoan">
                      Home Loan</a
                    >
                  </li>
                  <li>
                    <a href="/msme-loan/?utm_source=Organic-MSMELoan">
                      MSME Loan</a
                    >
                  </li>
                  <li><a href="/auto-loan/">Auto Loan</a></li>
                  <li>
                    <a
                      href="/loan-against-property/?utm_source=Organic-LonaAgainstPropertyLoan"
                      >Loan Against Property</a
                    >
                  </li>
                  <li>
                    <a
                      href="/two-wheeler-loan/?utm_source=Organic-two-wheeler-loan"
                    >
                      Two Wheeler Loan</a
                    >
                  </li>
                  <li>
                    <a href="/agri-and-rural/?utm_source=Organic-AgriRuralLoan"
                      >Agri & Rural Loan</a
                    >
                  </li>
                  <li>
                    <a href="/rail-e-ticketing/?utm_source=Organic-Rail-Ticket"
                      >Book Train Tickets</a
                    >
                  </li>
                  <li>
                    <a
                      href="/aadhaar-enabled-payment-system/?utm_source=Organic-AePS"
                      >AePS</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <!-- Quick Links Section -->
            <div class="col-lg-2 col-md-6 mb-2">
              <h6 class="footer-title mb-3">Quick Links</h6>
              <ul class="list-unstyled footer-links">
                <li><a href="/signup/"> Become an Agent</a></li>
                <li><a href="/apply-new-pan-card/"> Apply PAN Online</a></li>
                <li class="smart-bullet">
                  <a href="/income-calculator/"> Calculate Income</a>
                </li>
                <li class="smart-bullet">
                  <a href="/become-a-ticketing-agent/">
                    Become a Ticketing Agent</a
                  >
                </li>
                <li class="smart-bullet">
                  <a href="/become-an-insurance-agent/">
                    Become an Insurance Agent</a
                  >
                </li>
                <li class="smart-bullet">
                  <a href="/become-mutual-fund-agent/">
                    Become a Mutual Fund Agent</a
                  >
                </li>
                <li class="smart-bullet">
                  <a href="/become-nps-agent/"> Become NPS Agent</a>
                </li>
                <li class="smart-bullet"><a href="/blog/"> Blog</a></li>
                <li class="smart-bullet">
                  <a href="/corporate-information/"> Corporate Information</a>
                </li>
              </ul>
            </div>
            <!-- Address Section with Social Media Icons and Join Us Button -->
            <div class="col-lg-3 col-md-6 mb-4">
              <h6 class="footer-title mb-3">Address</h6>
              <p class="footer-text">
                Prius Height,<br />
                2nd Floor, Plot No 10/11,<br />
                Sector 125,<br />
                Noida - 201301, Uttar Pradesh
              </p>
              <p class="footer-text">
                <i
                  class="fas fa-phone-alt me-2"
                  style="transform: rotate(90deg)"
                ></i
                ><a href="#">08068713333</a>
              </p>
              <p class="footer-text d-flex align-items-center">
                <i class="fas fa-envelope me-2"></i>
                <span
                  ><a href="mailto:egov.support@religare.com"
                    >egov.support@religare.com</a
                  ></span
                >
              </p>
              <!-- Social Media Icons -->
              <div class="footer-social-links mt-3">
                <a
                  href="https://www.facebook.com/profile.php?id=100086340519649"
                  class="facebook"
                >
                  <i class="fab fa-facebook-f"></i
                ></a>
                <a
                  href="https://www.instagram.com/religaredigitalsolutions/"
                  class="instagram"
                >
                  <i class="fab fa-instagram"></i
                ></a>
                <a
                  href="https://www.linkedin.com/company/religare-digital-solutions/"
                  class="linkedin"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a
                  href="https://www.youtube.com/@religaredigital"
                  class="youtube"
                >
                  <i class="fab fa-youtube"></i
                ></a>
                <a href="https://twitter.com/ReligareDigital" class="twitter">
                  <!--<i class="fab fa-twitter"></i>  -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="21"
                    fill="currentColor"
                    class="bi bi-twitter-x"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"
                    ></path>
                  </svg>
                </a>
              </div>
              <!-- Join Us Button with new class -->
              <!-- Join Us Button with new class and target="_blank" -->
              <div class="mt-3">
                <a
                  href="/signup/"
                  class="btn-join-us"
                  target="_blank"
                  rel="noopener noreferrer"
                  >Join Us</a
                >
                ���
                <a
                  href="/career/"
                  class="btn-join-us"
                  target="_blank"
                  rel="noopener noreferrer"
                  >Career</a
                >
              </div>
            </div>
            <div>
              <!-- Disclaimer Section -->
              <p class="footer-disclaimer mt-0">
                Copyright 2010 Religare. Trademarks are the property of their
                respective owners. All rights reserved. Please note that by
                submitting the above mentioned details, you are authorizing us
                to Call/SMS you even though you may be registered under DNC. We
                shall Call/SMS you for a period of 12 months. Brokerage will not
                exceed the SEBI prescribed limit. Religare Broking Limited
                (RBL): Registered Office: 802 -815B, 8th Floor, Gopal Das
                Bhawan, 28-Barakhamba Road, Connaught Place, New Delhi - 110001.
                Board line number: +91-011-49871213. Fax No.: +91-011-49871189.
              </p>
              <p class="footer-disclaimer">
                Disclaimer: Investment in securities market are subject to
                market risks, read all the related documents carefully before
                investing. RBL is a distributor of Mutual Funds | IPOs |
                Insurance | Bonds & NCDs |
                <a
                  href="https://www.religareonline.com/disclaimer/"
                  target="_blank"
                  rel="noopener noreferrer"
                  >Disclaimer</a
                >
                |
                <a href="/sitemap/" target="_blank" rel="noopener noreferrer"
                  >Sitemap</a
                >.
              </p>
            </div>
            <!--Footer End-->

            <!-- Multi Select Files -->
            <link
              rel="stylesheet"
              href="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/css/multiselect.css"
              media="all"
            />

            <link
              rel="stylesheet"
              href="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/css/footer.css"
              media="all"
            />

            <link
              rel="stylesheet"
              href="{{ asset('public/theme/web-new') }}/wp-content/themes/egov/assets/css/new-footer.css"
              media="all"
            />

            <!-- Multi Select Files -->
          </div>
        </div>
      </footer>
      <!-- End Footer -->

      <!--<div id="preloader"></div>-->
      <a
        href="#"
        class="back-to-top d-flex align-items-center justify-content-center"
        ><i class="bi bi-arrow-up-short"></i
      ></a>

      <!-- Vendor JS Files -->
      <script src="wp-content/themes/egov/assets/js/aos.js"></script>
      <script src="wp-content/themes/egov/assets/js/bootstrap.bundle.min.js"></script>
      <script src="wp-content/themes/egov/assets/js/glightbox.min.js"></script>
      <script src="wp-content/themes/egov/assets/js/swiper-bundle.min.js"></script>
      <script src="wp-content/themes/egov/assets/js/isotope.pkgd.min.js"></script>
      <!-- Template Main JS File -->
      <script src="wp-content/themes/egov/assets/js/main.js"></script>

      <script
        type="text/javascript"
        src="wp-content/themes/egov/assets/js/acmeticker.js"
      ></script>
      <!--<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>-->

      <script src="../y3uQHg8V8vsy.com/ajax/libs/OwlCarousel2/X5urfY66eECp.1/xYKW4l9lNdTm.js"></script>
      <!--<script src="https://aRregqpH93uL.in/wp-content/themes/egov/assets/js/custom-form-script.js"></script>-->

      <script>
        $(document).ready(function () {
          var silder = $(".owl-carousel1");
          silder.owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            items: 1,
            center: false,
            nav: false,
            margin: 30,
            dots: false,
            loop: true,
            goToFirst: true,
            goToFirstSpeed: 1000,
            navText: [
              "<i class='fa fa-arrow-left' aria-hidden='true'></i>",
              "<i class='fa fa-arrow-right' aria-hidden='true'></i>",
            ],
            responsive: {
              0: {
                items: 1,
              },
              575: { items: 1 },
              768: { items: 3 },
              991: { items: 3 },
              1200: { items: 6 },
            },
          });
        });
      </script>

      <script>
        $(document).ready(function () {
          var silder = $(".owl-carousel");
          silder.owlCarousel({
            autoPlay: true,
            goToFirst: true,
            goToFirstSpeed: 1000,
            items: 1,
            center: false,
            nav: true,
            margin: 40,
            dots: false,
            loop: true,
            navText: [
              "<i class='fa fa-arrow-left' aria-hidden='true'></i>",
              "<i class='fa fa-arrow-right' aria-hidden='true'></i>",
            ],
            responsive: {
              0: {
                items: 1,
              },
              575: { items: 1 },
              768: { items: 1 },
              991: { items: 3 },
              1400: { items: 2 },
            },
          });
        });
      </script>

      <!-- Multi Select Files -->

      <!--<script type="text/javascript" src="https://aRregqpH93uL.in/wp-content/themes/egov/assets/js/custom-form-script.js"></script>-->

      <script
        type="text/javascript"
        src="wp-content/themes/egov/assets/js/multiselect.js"
      ></script>

      <!--<script type="text/javascript" src="https://aRregqpH93uL.in/wp-content/themes/egov/assets/js/custom-form-data-api_BecomeAnAssociate.js"></script>-->

      <script>
        $("#multiSelect").multiselect({
          placeholder: "Select All Products",
          selectAll: true,
        });
      </script>
      <!-- Multi Select Files -->

      <script>
        jQuery(function ($) {
          $("#navbar li a")
            .filter(function () {
              var locationUrl = window.location.href;
              var currentItemUrl = $(this).prop("href");
              return currentItemUrl === locationUrl;
            })
            .parent("a")
            .addClass("active");
        });
      </script>

      <style>
        a.apply-pan1 {
          float: left;
          font-weight: 500;
          text-align: center;
          background: #00a536;
          color: #fff;
          display: inline-block;
          border-radius: 5px;
          border: #707070;
          position: fixed;
          right: -67px;
          top: 45%;
          z-index: 9999999;
          margin: 0;
          font-size: 18px;
          padding: 6px 14px;
          background-size: contain;
          transform: rotate(270deg);
          cursor: pointer;
        }
      </style>

      <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        };
      </script>

      <script>
        $(document).ready(function () {
          $("li.viewAll").on("click", function () {
            $(this).hide();
          });

          $(".rbp").on("click", function () {
            $(".filter-recharge").css("display", "block");
            $("li.viewAll").show();
          });

          $(".tt").on("click", function () {
            $(".filter-tour").css("display", "block");
            $("li.viewAll").show();
          });

          $(".investments").on("click", function () {
            $(".filter-Investments").css("display", "block");
            $("li.viewAll").show();
          });

          $(".insurance").on("click", function () {
            $(".filter-payment").css("display", "block");
            $("li.viewAll").show();
          });

          $(".e-service").on("click", function () {
            $(".filter-egov").css("display", "block");
            $("li.viewAll").show();
          });

          $(".loan-services").on("click", function () {
            $(".filter-loan").css("display", "block");
            $("li.viewAll").show();
          });

          $(".customer-services").on("click", function () {
            $(".filter-indi").css("display", "block");
            $("li.viewAll").show();
          });
        });
      </script>

      <script type="text/javascript">
        jQuery(document).ready(function ($) {
          $(".my-news-ticker").AcmeTicker({
            type: "marquee",
            direction: "left",
            speed: 0.05,
            controls: {
              toggle: $(".acme-news-ticker-pause"),
            },
          });
        });
      </script></strong
    >
  </body>
  <!-- Footer Section -->
</html>
