(function ($) {
    "use strict";
    // Mobile Menu
    jQuery('header nav').meanmenu({
        meanMenuContainer: '.mobile-menu',
        meanScreenWidth: "991",
        meanMenuOpen: "<span></span><span></span><span></span>",
        meanShowChildren: true,
    });
    /* ---------------------------------------------
         portfolio filtering
    --------------------------------------------- */

    var $portfolio = $('.portfolio-wrapper');
    if ($.fn.imagesLoaded && $portfolio.length > 0) {
        imagesLoaded($portfolio, function () {
            $portfolio.isotope({
                itemSelector: '.portfolio-single-item',
                filter: '*'
            });
            $(window).trigger("resize");
        });
    }

    $('.portfolio-menu').on('click', 'li', function (e) {
        e.preventDefault();
        $('.portfolio-menu li.active').removeClass('active');
        $(this).addClass('active');
        var filterValue = $(this).attr('data-filter');
        $portfolio.isotope({
            filter: filterValue
        });
    });

    /*---------------------------------------------
         Portfolio popup
    ---------------------------------------------*/

    $(".portfolio-wrapper").each(function () {
        $(this).find(".popup-gallery").magnificPopup({
            type: "image",
            gallery: {
                enabled: true
            }
        });
    });


    /* ---------------------------------------------
         owl-carousel
    --------------------------------------------- */

    $('.home-hero-slider').each(function () {
        var a = $(this),
            margin = a.data('margin'),
            loop = a.data('loop'),
            nav = a.data('nav'),
            dots = a.data('dots'),
            center = a.data('center'),
            autoplay = a.data('autoplay'),
            autoplaySpeed = a.data('autoplay-speed'),
            rtl = a.data('rtl'),
            autoheight = a.data('autoheight');

        var options = {
            nav: nav || true,
            loop: loop || true,
            dots: dots || true,
            center: center || false,
            autoplay: autoplay || true,
            autoHeight: autoheight || false,
            rtl: rtl || false,
            margin: margin || 0,
            autoplayTimeout: autoplaySpeed || 5000,
            autoplaySpeed: 400,
            autoplayHoverPause: true,
            navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    nav: nav || false,
                },
                767: { items: 1, nav: nav || false, },
                1200: { items: 1 }
            }
        };

        a.owlCarousel(options);
    });
    $('.partner-wrapper').each(function () {
        var a = $(this),
            margin = a.data('margin'),
            loop = a.data('loop'),
            nav = a.data('nav'),
            dots = a.data('dots'),
            center = a.data('center'),
            autoplay = a.data('autoplay'),
            autoplaySpeed = a.data('autoplay-speed'),
            rtl = a.data('rtl'),
            autoheight = a.data('autoheight');

        var options = {
            nav: nav || true,
            loop: loop || true,
            dots: dots || false,
            center: center || false,
            autoplay: autoplay || true,
            autoHeight: autoheight || false,
            rtl: rtl || false,
            margin: margin || 30,
            autoplayTimeout: autoplaySpeed || 5000,
            autoplaySpeed: 400,
            autoplayHoverPause: true,
            navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    nav: nav || false,
                },
                480: { items: 2, nav: nav || false, },
                767: { items: 3 },
                991: { items: 4 },
                1200: { items: 5 }
            }
        };

        a.owlCarousel(options);
    });

    $('.testimonial-wrapper').each(function () {
        var a = $(this),
            margin = a.data('margin'),
            loop = a.data('loop'),
            nav = a.data('nav'),
            dots = a.data('dots'),
            center = a.data('center'),
            autoplay = a.data('autoplay'),
            autoplaySpeed = a.data('autoplay-speed'),
            rtl = a.data('rtl'),
            autoheight = a.data('autoheight');

        var options = {
            nav: nav || false,
            loop: loop || true,
            dots: dots || true,
            center: center || false,
            autoplay: autoplay || true,
            autoHeight: autoheight || false,
            rtl: rtl || false,
            margin: margin || 5,
            autoplayTimeout: autoplaySpeed || 5000,
            autoplaySpeed: 400,
            autoplayHoverPause: true,
            navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
            responsive: {
                0: { items: 1 },
                480: { items: 1 },
                1200: { items: 1 }
            }
        };

        a.owlCarousel(options);
    });




})(jQuery);