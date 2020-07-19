

///////////////////// For Banner Slider //////////////////////////////////////
$('.banner-slider').owlCarousel({
    loop:true,
    margin:1,
    responsiveClass:true,
	autoplay:true,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    items:1
});
///////////////////// For Statistics Slider //////////////////////////////////////
$('.statistics-slider').owlCarousel({
    loop:true,
    margin:1,
    responsiveClass:true,
	autoplay:true,
	navText: false,
	items:1,
    animateIn: 'flipInX'
});

///////////////////// For About Video Slider //////////////////////////////////////
$('.about-video-slider').owlCarousel({
    loop: true,
    margin: 1,
    responsiveClass: !0,
    autoplay: true,
    navText: ['<i id="prevVedio"class="fa fa-angle-left" aria-hidden="true"></i>', '<i id="nextVedio"class="fa fa-angle-right" aria-hidden="true"></i>'],
	nav:true,
    items:1
});

///////////////////// For Testimonial Slider //////////////////////////////////////
$('.testimonial-slider').owlCarousel({
    loop:true,
    margin:1,
    responsiveClass:true,
	autoplay:true,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

///////////////////// For Menu Slider //////////////////////////////////////
$(function() {
	'use strict';
    var vs = $('#service-menu-slider');
    vs.owlCarousel({
        autoplay: true,
        loop: true,
        nav: true,
        dots: false,
        items: 1,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    });
});






















