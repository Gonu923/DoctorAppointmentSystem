$(function() {
    "use strict";
    var wind = $(window);
    $('#preloader').fadeOut('normall', function() {
        $(this).remove();
    });
    $.scrollIt({
        upKey: 38,
        downKey: 40,
        easing: 'swing',
        scrollTime: 600,
        activeClass: 'active',
        onPageChange: null,
        topOffset: -70
    });
    wind.on('scroll', function() {
        if (wind.width() > 600) {
            if (wind.scrollTop() > 600) {
                $('#back-to-top').addClass('reveal');
            } else {
                $('#back-to-top').removeClass('reveal');
            }
        }
    });
    $('#back-to-top').on('click', function() {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
    if ($("#sidebar_toggle").length) {
        $("body").addClass("sidebar-menu");
        $("#sidebar_toggle").on("click", function() {
            $(".sidebar-menu").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"), $("#close_sidebar").fadeIn(700)
        }), $("#close_sidebar").on("click", function() {
            $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".sidebar-menu").removeClass("active")
        }), $("#btn_sidebar_colse").on("click", function() {
            $(".side-menu").removeClass("side-menu-active"), $("#close_sidebar").fadeOut(200), $(".sidebar-menu").removeClass("active")
        });
    }
    wind.on("scroll", function() {
        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar"),
            navbloglogo = $(".blog-nav .logo> img"),
            darkbg = $(".bg-black .logo> img"),
            whitebg = $(".bg-white .logo> img"),
            lightbg = $(".bg-light-gray .logo> img"),
            scrollbg = $(".bg-black-scroll .logo> img"),
            logo = $(".navbar .logo> img");
        if (bodyScroll > 100) {
            navbar.addClass("nav-scroll");
            logo.attr('src', 'img/logo-dark.png');
            darkbg.attr('src', 'img/logo-light.png');
            whitebg.attr('src', 'img/logo-dark.png');
            scrollbg.attr('src', 'img/logo-light.png');
            lightbg.attr('src', 'img/logo-dark.png');
        } else {
            navbar.removeClass("nav-scroll");
            logo.attr('src', 'img/logo-light.png');
            lightbg.attr('src', 'img/logo-dark.png');
            navbloglogo.attr('src', 'img/logo-dark.png');
        }
    });
    var windowsize = wind.width();
    if (windowsize <= 991) {
        $('.navbar-nav .nav-link').on("click", function() {
            $('.navbar-collapse.show').removeClass('show');
        });
    }
    wind.on('scroll', function() {
        $(".skills-progress span").each(function() {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            var myVal = $(this).attr('data-value');
            if (bottom_of_window > bottom_of_object) {
                $(this).css({
                    width: myVal
                });
            }
        });
    });
    var pageSection = $(".bg-img, section");
    pageSection.each(function(indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });
    $('.testimonials .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 15,
        autoplay: true,
        smartSpeed: 500
    });
    $('.gallery').magnificPopup({
        delegate: '.popimg',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    if ($(".numbers").length !== 0) {
        $('.numbers').appear(function() {
            $('.count').countTo({
                speed: 4000,
                refreshInterval: 60,
                formatter: function(value, options) {
                    return value.toFixed(options.decimals);
                }
            });
        });
    }
    $(window).on("load", function() {
        var wind = $(window);
        wind.stellar();
        $('.gallery').isotope({
            itemSelector: '.items'
        });
        var $gallery = $('.gallery').isotope({});
        $('.filtering').on('click', 'span', function() {
            var filterValue = $(this).attr('data-filter');
            $gallery.isotope({
                filter: filterValue
            });
        });
        $('.filtering').on('click', 'span', function() {
            $(this).addClass('active').siblings().removeClass('active');
        });
    });
    $(window).resize(function(event) {
        setTimeout(function() {
            SetResizeContent();
        }, 500);
        event.preventDefault();
    });

    function fullScreenHeight() {
        var element = $(".full-screen");
        var $minheight = $(window).height();
        element.css('min-height', $minheight);
    }

    function SetResizeContent() {
        fullScreenHeight();
    }
    SetResizeContent();
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            smartSpeed: 500
        });
        //var form = $('.contact-form');
        //form.submit(function() {
          //  $.post(form.attr('action'), $('.contact-form').serialize(), function(data) {
            //    form.prev().text(data.message).fadeIn().delay(3000).fadeOut();
            //}, 'json');
            //return false;
        //});
        if ($(".countdown").length !== 0) {
            $(".countdown").countdown({
                date: "01 Jan 2021 00:01:00",
                format: "on"
            });
        }
    });
});