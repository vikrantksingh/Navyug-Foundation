(function ($) {
    "use strict";

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 10) { $('.navbar-area').addClass("is-sticky"); }
        else { $('.navbar-area').removeClass("is-sticky"); }
    });

    $(function () {
        $(window).on('scroll', function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $('.go-top').addClass('active'); if (scrolled < 600) $('.go-top').removeClass('active');
        });

        $('.go-top').on('click', function () { $("html, body").animate({ scrollTop: "0" }, 500); });
    });

    jQuery('.mean-menu').meanmenu({
        meanScreenWidth: "1199"
    });

    $(".others-option-for-responsive .dot-menu").on("click", function () { $(".others-option-for-responsive .container .container").toggleClass("active"); });
    $(".others-options .search-box").on("click", function () { $(".search-overlay").toggleClass("search-overlay-active"); });
    $(".search-overlay-close").on("click", function () { $(".search-overlay").removeClass("search-overlay-active"); });


    // Service Slider
    $('.partner_slider_wrapper').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 3,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 7
            }
        }
    });
    // Testimonials Slider
    $('.testimonial_slider_wrapper').owlCarousel({
        loop: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4
            }
        }
    });
    // Gallery Slider
    $('.gallery_slider_area').owlCarousel({
        loop: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3
            }
        }
    });
    // counter
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });

}(jQuery));


jQuery(window).on('load', function () { jQuery(".preloader").fadeOut(500); });