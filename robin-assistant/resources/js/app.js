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
        } else {
            $(".navbar").removeClass("navbar-scroll");
            $(".nav-link").removeClass("nav-link-scroll");
            $(".nav-login-btn").removeClass("nav-login-btn-scroll");
        }
    });
});
