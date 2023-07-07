// $(document).ready(function () {
//     $(".navbar-toggler-icon").click(function () {
//         $(".collapse").toggleClass("d-block");
//     });
// });  
// Case Study Slider

$("#headerDiv").load("header.php");
$("#includedContent").load("inquiryform.html");
$("#footerDiv").load("footer.html");
$("#careerFormDiv").load("career-form.html");
$('.case-study-slider').slick({
    dots: false,
    arrow: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});

//clock js 
$(document).ready(function () {
    $('.counter').countUp();
    $("#apply_now").click(function () {
        $(".careers-details-bottom-form").addClass("d-block");
    });
    $('#clock_hou').jClocksGMT(
        {

            offset: '+5.5'
        });
    $('#clock_dub').jClocksGMT(
        {

            offset: '+4'
        });
});


(function ($) {
    $(document).ready(function () {
        $("#cssmenu").menumaker({
            format: "multitoggle"
        });
    });
})(jQuery);

(function ($) {
    $.fn.menumaker = function (options) {
        var cssmenu = $(this), settings = $.extend({
            format: "dropdown",
            sticky: false
        }, options);        
        return this.each(function () {
            cssmenu.find('li ul').parent().addClass('has-sub');
            $(this).find(".button").on('click', function () {
                $(this).toggleClass('menu-opened');
                var mainmenu = $(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.slideToggle().removeClass('open');
                }
                else {
                    mainmenu.slideToggle().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });
            multiTg = function () {
                cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                cssmenu.find('.submenu-button').on('click', function () {
                    $(this).toggleClass('submenu-opened');
                    if ($(this).siblings('ul').hasClass('open')) {
                        $(this).siblings('ul').removeClass('open').slideToggle();
                    }
                    else {
                        $(this).siblings('ul').addClass('open').slideToggle();
                    }
                });
            };
            if (settings.format === 'multitoggle') multiTg();
            else cssmenu.addClass('dropdown');
            if (settings.sticky === true) cssmenu.css('position', 'fixed');
            resizeFix = function () {
                var mediasize = 1024;
                if ($(window).width() > mediasize) {
                    cssmenu.find('ul').show();
                }
                if ($(window).width() <= mediasize) {
                    cssmenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);
        });
    };
})(jQuery);




AOS.init({
    duration: 1200,
});

// Client Logo Slider
function initSlider() {
    $('#client-logo-slide').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
}

$(document).on('ready', function () {
    initSlider();
});

// Services Slider
function initSlider() {
    $('#service-slider').slick({
        slidesToShow: 4.5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
}

// Mobile select tab
$(function () {
    $('.content').hide();
    $("#option1").show();
    $('#selectField').change(function () {
        $('.content').hide();
        $('#' + $(this).val()).show();
    });
});
$(function () {
    $('.excontent').hide();
    $("#exoption1").show();
    $('#exselectField').change(function () {
        $('.excontent').hide();
        $('#' + $(this).val()).show();
    });
});

/* AUTHOR LINK */
$('.about-me-img').hover(function () {
    $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
}, function () {
    $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
});



// Hide body scroll when menu open
var showModal = function () {
    const modal = document.querySelector("#modal");
    const body = document.querySelector("body");
    
    modal.classList.toggle("hidden");

    if (!modal.classList.contains("hidden")) {
        // Disable scroll
        body.style.overflow = "hidden";
    } else {
        // Enable scroll
        body.style.overflow = "auto";
    }
};


// Hover Custom Tab
$(document).ready(function () {

    $('[data-toggle="popover"]').popover({ trigger: 'hover' });

    $('.v-tab-head .v-tab-link').mouseover(tabHandler);
    $('.v-tab-head.v-tab-link').click(tabHandler);

});

var tabHandler = function (e) {
    e.preventDefault();

    var target = $($(this).data('target')),
        tabLink = $('.v-tab-link[data-target="' + $(this).data('target') + '"]');

    tabPanelToShow(tabLink);
    tabLinkToActivate(target);

};

var tabPanelToShow = function (elem) {
    $('.v-tab-link').removeClass('active').parent().find(elem).addClass('active');
};

var tabLinkToActivate = function (elem) {
    $('.v-tab-pane').children('div').removeClass('in').parent().find(elem).addClass('in');


};



 // $(function ($) {
        //     var options = {
        //         utc: true,
        //         utcOffset: -5,
        //         // seedTime must be a number representing time in milliseconds
        //         seedTime: 1242801804000
        //     }
        //     $('.jclock').jclock(options);
        // });