var getVideoHeightFlag = !1;
var getVideoHeight = jQuery(".home-video-section").height();
jQuery(".home-video-float-section").height(getVideoHeight);
jQuery(".home-video-float-section").hide();
jQuery(document).ready(function ($) {
  jQuery(".our-services-slider-owl").owlCarousel({
    loop: !0,
    dots: !1,
    smartSpeed: 600,
    margin: 0,
    items: 4,
    autoplay:true,
    // autoplayHoverPause:false,
    responsive: {
      0: { items: 1.1, autoWidth: !1 },
      768: { items: 2.1, autoWidth: !1 },
      1024: { items: 2.8 },
      1280: { items: 3.2 },
      1440: { items: 4.1 },
      1650: { items: 4.5 },
      1900: { items: 4.8 },
    },
  });
  jQuery(".clients-vedio-slider").owlCarousel({
    loop: !0,
    dots: !1,
    smartSpeed: 600,
    autoplay: true,
    autoplaySpeed: 1000,
    items: 3,
    autoWidth: !0,
    center: !0,
    margin: 20,
    responsive: {
        768: { items: 1 },
        1024: { items: 1 },
        1280: { items: 3 },
        1440: { items: 3 },
        1650: { items: 3 },
        1900: { items: 3 },
    },
  });
  jQuery(document).on("click", ".scroll-video-btn", function () {
    if ($(".homepage_video").length > 0) {
      $(".homepage_video").get(0).pause();
      $(".homepage_video").attr("paused", !0);
      $(".home-video-section").removeClass("video-scroll");
      $(".home-video-box .video-btn-play").removeClass("video-btn-pause");
      $(".home-video-box .video-btn-play").show();
      $(".home-video-float-section").height(0);
      getVideoHeightFlag = !1;
    }
  });
  jQuery(document).on("click", ".video-btn-play", function () {
    jQuery(".tglclass").toggleClass("icon-video-pause icon-video-play");
    jQuery(".testimonial-video source").each(function () {
      let $this = this;
      let dataSrc = jQuery($this).attr("data-src");
      if (jQuery(".testimonial-video").attr("paused") == undefined) {
        jQuery($this).attr("src", dataSrc);
      }
    });
    if (!jQuery(this).hasClass("video-btn-pause")) {
      jQuery(".testimonial-video").each(function () {
        jQuery(this).get(0).pause();
        jQuery(".video-btn-play").removeClass("video-btn-pause");
      });
      if (!jQuery(this).hasClass("video-btn-pause")) {
        if (jQuery(".testimonial-video").attr("paused") == undefined) {
          jQuery(this).siblings(".testimonial-video")[0].load();
        }
        jQuery(this).siblings(".testimonial-video")[0].play();
        jQuery(this).addClass("video-btn-pause");
        getVideoHeightFlag = !0;
      } else {
        jQuery(this).removeClass("video-btn-pause");
        jQuery(this).siblings(".testimonial-video")[0].pause();
      }
    } else {
      jQuery(this).removeClass("video-btn-pause");
      jQuery(this).siblings(".testimonial-video")[0].pause();
    }
  });
  jQuery(document).on("click", ".video-btn-pause", function () {
    getVideoHeightFlag = !1;
  });
  jQuery(document).on("click", ".jugaad-video-btn-play", function () {
    jQuery("#jugaad-modal").on("hidden.bs.modal", function () {
      var div = document.getElementById("elementremove2");
      div.innerHTML = "";
    });
    jQuery(this).hide();
    jQuery(".jugaad-video-img-play").hide();
    jQuery("iframe#ytplayer").attr(
      "src",
      jQuery("iframe#ytplayer").attr("src").replace("autoplay=0", "autoplay=1")
    );
  });
  var load_data = 1;
  convertAnyImgToSVG();
});
function isOutOfViewport(elem) {
  const $window = jQuery(window);
  const windowScrollTop = $window.scrollTop();
  const videoBottom =
    jQuery(elem).offset().top + jQuery(elem).outerHeight() - getVideoHeight;
  return windowScrollTop > videoBottom;
}
function convertAnyImgToSVG() {
  jQuery("img.svg-convert").each(function () {
    var $img = jQuery(this);
    var imgURL = $img.attr("src");
    var attributes = $img.prop("attributes");
    jQuery.get(
      imgURL,
      function (data) {
        var $svg = jQuery(data).find("svg");
        $svg = $svg.removeAttr("xmlns:a");
        jQuery.each(attributes, function () {
          $svg.attr(this.name, this.value);
        });
        $img.replaceWith($svg);
        jQuery(".svg-convert title").remove();
      },
      "xml"
    );
  });
}
jQuery(function () {
  jQuery(window).scroll(function () {
    const $video = jQuery(".home-video-section");
    if (jQuery(".growth-detail").length > 0) {
      if (isOutOfViewport(".growth-detail") && getVideoHeightFlag) {
        $video.addClass("video-scroll");
        jQuery(".home-video-float-section").show();
      } else {
        $video.removeClass("video-scroll");
        jQuery(".home-video-float-section").hide();
      }
    }
  });
});
