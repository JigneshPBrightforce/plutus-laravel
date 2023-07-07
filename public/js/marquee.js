(function (a) {
  a.fn.marquee = function (b) {
    return this.each(function () {
      var Z = a.extend({}, a.fn.marquee.defaults, b),
        Y = a(this),
        X,
        S,
        O,
        M,
        T,
        R = 3,
        j = "animation-play-state",
        W = !1,
        L = function (g, f, l) {
          for (
            var k = ["webkit", "moz", "MS", "o", ""], h = 0;
            h < k.length;
            h++
          ) {
            k[h] || (f = f.toLowerCase()), g.addEventListener(k[h] + f, l, !1);
          }
        },
        G = function (f) {
          var e = [],
            g;
          for (g in f) {
            f.hasOwnProperty(g) && e.push(g + ":" + f[g]);
          }
          e.push();
          return "{" + e.join(",") + "}";
        },
        U = {
          pause: function () {
            W && Z.allowCss3Support
              ? X.css(j, "paused")
              : a.fn.pause && X.pause();
            Y.data("runningStatus", "paused");
            Y.trigger("paused");
          },
          resume: function () {
            W && Z.allowCss3Support
              ? X.css(j, "running")
              : a.fn.resume && X.resume();
            Y.data("runningStatus", "resumed");
            Y.trigger("resumed");
          },
          toggle: function () {
            U["resumed" == Y.data("runningStatus") ? "pause" : "resume"]();
          },
          destroy: function () {
            clearTimeout(Y.timer);
            Y.css("visibility", "hidden").html(Y.find(".js-marquee:first"));
            setTimeout(function () {
              Y.css("visibility", "visible");
            }, 0);
          },
        };
      if ("string" === typeof b) {
        a.isFunction(U[b]) &&
          (X || (X = Y.find(".js-marquee-wrapper")),
          !0 === Y.data("css3AnimationIsSupported") && (W = !0),
          U[b]());
      } else {
        var K;
        a.each(Z, function (f, e) {
          K = Y.attr("data-" + f);
          if ("undefined" !== typeof K) {
            switch (K) {
              case "true":
                K = !0;
                break;
              case "false":
                K = !1;
            }
            Z[f] = K;
          }
        });
        Z.duration = Z.speed || Z.duration;
        M = "up" == Z.direction || "down" == Z.direction;
        Z.gap = Z.duplicated ? Z.gap : 0;
        Y.wrapInner('<div class="js-marquee"></div>');
        var V = Y.find(".js-marquee").css({
          "margin-right": Z.gap,
          float: "left",
        });
        Z.duplicated && V.clone(!0).appendTo(Y);
        Y.wrapInner(
          '<div style="width:100000px" class="js-marquee-wrapper"></div>'
        );
        X = Y.find(".js-marquee-wrapper");
        if (M) {
          var Q = Y.height();
          X.removeAttr("style");
          Y.height(Q);
          Y.find(".js-marquee").css({
            float: "none",
            "margin-bottom": Z.gap,
            "margin-right": 0,
          });
          Z.duplicated &&
            Y.find(".js-marquee:last").css({ "margin-bottom": 0 });
          var I = Y.find(".js-marquee:first").height() + Z.gap;
          Z.duration *= (parseInt(I, 10) + parseInt(Q, 10)) / parseInt(Q, 10);
        } else {
          (T = Y.find(".js-marquee:first").width() + Z.gap),
            (S = Y.width()),
            (Z.duration *=
              (parseInt(T, 10) + parseInt(S, 10)) / parseInt(S, 10));
        }
        Z.duplicated && (Z.duration /= 2);
        if (Z.allowCss3Support) {
          var V = document.body || document.createElement("div"),
            P = "marqueeAnimation-" + Math.floor(10000000 * Math.random()),
            d = ["Webkit", "Moz", "O", "ms", "Khtml"],
            N = "animation",
            F = "",
            w = "";
          V.style.animation && ((w = "@keyframes " + P + " "), (W = !0));
          if (!1 === W) {
            for (var i = 0; i < d.length; i++) {
              if (void 0 !== V.style[d[i] + "AnimationName"]) {
                V = "-" + d[i].toLowerCase() + "-";
                N = V + N;
                j = V + j;
                w = "@" + V + "keyframes " + P + " ";
                W = !0;
                break;
              }
            }
          }
          W &&
            ((F =
              P +
              " " +
              Z.duration / 1000 +
              "s " +
              Z.delayBeforeStart / 1000 +
              "s infinite " +
              Z.css3easing),
            Y.data("css3AnimationIsSupported", !0));
        }
        var J = function () {
            X.css(
              "margin-top",
              "up" == Z.direction ? Q + "px" : "-" + I + "px"
            );
          },
          H = function () {
            X.css(
              "margin-left",
              "left" == Z.direction ? S + "px" : "-" + T + "px"
            );
          };
        Z.duplicated
          ? (M
              ? X.css(
                  "margin-top",
                  "up" == Z.direction ? Q : "-" + (2 * I - Z.gap) + "px"
                )
              : X.css(
                  "margin-left",
                  "left" == Z.direction
                    ? S + "px"
                    : "-" + (2 * T - Z.gap) + "px"
                ),
            (R = 1))
          : M
          ? J()
          : H();
        var o = function () {
          Z.duplicated &&
            (1 === R
              ? ((Z._originalDuration = Z.duration),
                (Z.duration = M
                  ? "up" == Z.direction
                    ? Z.duration + Q / (I / Z.duration)
                    : 2 * Z.duration
                  : "left" == Z.direction
                  ? Z.duration + S / (T / Z.duration)
                  : 2 * Z.duration),
                F &&
                  (F =
                    P +
                    " " +
                    Z.duration / 1000 +
                    "s " +
                    Z.delayBeforeStart / 1000 +
                    "s " +
                    Z.css3easing),
                R++)
              : 2 === R &&
                ((Z.duration = Z._originalDuration),
                F &&
                  ((P += "0"),
                  (w = a.trim(w) + "0 "),
                  (F =
                    P +
                    " " +
                    Z.duration / 1000 +
                    "s 0s infinite " +
                    Z.css3easing)),
                R++));
          M
            ? Z.duplicated
              ? (2 < R &&
                  X.css("margin-top", "up" == Z.direction ? 0 : "-" + I + "px"),
                (O = {
                  "margin-top": "up" == Z.direction ? "-" + I + "px" : 0,
                }))
              : (J(),
                (O = {
                  "margin-top":
                    "up" == Z.direction ? "-" + X.height() + "px" : Q + "px",
                }))
            : Z.duplicated
            ? (2 < R &&
                X.css(
                  "margin-left",
                  "left" == Z.direction ? 0 : "-" + T + "px"
                ),
              (O = {
                "margin-left": "left" == Z.direction ? "-" + T + "px" : 0,
              }))
            : (H(),
              (O = {
                "margin-left":
                  "left" == Z.direction ? "-" + T + "px" : S + "px",
              }));
          Y.trigger("beforeStarting");
          if (W) {
            X.css(N, F);
            var e = w + " { 100%  " + G(O) + "}",
              c = a("style");
            0 !== c.length
              ? c.filter(":last").append(e)
              : a("head").append("<style>" + e + "</style>");
            L(X[0], "AnimationIteration", function () {
              Y.trigger("finished");
            });
            L(X[0], "AnimationEnd", function () {
              o();
              Y.trigger("finished");
            });
          } else {
            X.animate(O, Z.duration, Z.easing, function () {
              Y.trigger("finished");
              Z.pauseOnCycle
                ? (Y.timer = setTimeout(o, Z.delayBeforeStart))
                : o();
            });
          }
          Y.data("runningStatus", "resumed");
        };
        Y.bind("pause", U.pause);
        Y.bind("resume", U.resume);
        Z.pauseOnHover && Y.bind("mouseenter mouseleave", U.toggle);
        W && Z.allowCss3Support
          ? o()
          : (Y.timer = setTimeout(o, Z.delayBeforeStart));
      }
    });
  };
  a.fn.marquee.defaults = {
    allowCss3Support: !0,
    css3easing: "linear",
    easing: "linear",
    delayBeforeStart: 1000,
    direction: "left",
    duplicated: !1,
    duration: 5000,
    gap: 20,
    pauseOnCycle: !1,
    pauseOnHover: !1,
  };
})(jQuery);
jQuery(document).ready(function (a) {
  a(".brands-marquee").marquee({
    duration: 40000,
    duplicated: !0,
    gap: 0,
    direction: "left",
    pauseOnHover: !0,
    delayBeforeStart: 0,
  });
  a(".brands-marquee .js-marquee-wrapper").css("margin-left", "0");
});
