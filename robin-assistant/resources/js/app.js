require('./bootstrap');

//
//  Project: Robin Assistant
//  Created by: Matthijs Berghuis, Gijs Huitenga
//  Last Edited: 11.03.2021
//
//  Sections:
//  =============
//  1. Header onScroll
//  2.
//  =============
//

//
//  1. Header onScroll
//

$(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 50) {
            $(".navbar").addClass("navbar-scroll");
            $(".nav-link").addClass("nav-link-scroll");
            $(".nav-login-btn").addClass("nav-login-btn-scroll");
            $(".navbar-logo").addClass("navbar-logo-scroll");
        } else {
            $(".navbar").removeClass("navbar-scroll");
            $(".nav-link").removeClass("nav-link-scroll");
            $(".nav-login-btn").removeClass("nav-login-btn-scroll");
            $(".navbar-logo").removeClass("navbar-logo-scroll");
        }
    });
});


//
//  1. Smooth scroll anchor link
//

$('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {

        if (
            location.pathname.replace(/ˆ\//, '') == this.pathname.replace(/ˆ\//, '')
            &&
            location.hostname == this.hostname
        ) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) {
                        return false;
                    } else {
                        $target.attr('tabindex', '-1');
                        $target.focus();
                    }
                })
            }

        }

    });
