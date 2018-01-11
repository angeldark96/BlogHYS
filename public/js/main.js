 jQuery(document).ready(function($){
$(".all-portfolios").isotope({
itemSelector : '.single-portfolio',

layoutMode: 'fitRows',
});
$('ul.filter li').click(function(){
$("ul.filter li").removeClass("active");
$(this).addClass("active");
 
var selector = $(this).attr('data-filter');
$(".all-portfolios").isotope({
	
filter: selector,
animationOptions: {
duration: 750,
easing: 'linear',
queue: false,
}
});
return false;
});
});




jQuery(document).ready(function () {

	
/*----------------------------------------------------*/
/*  Animated Progress Bars
/*----------------------------------------------------*/

    jQuery('.skills li').each(function () {
        jQuery(this).appear(function() {
          jQuery(this).animate({opacity:1,left:"0px"},800);
          var b = jQuery(this).find(".progress-bar").attr("data-width");
          jQuery(this).find(".progress-bar").animate({
            width: b + "%"
          }, 1300, "linear");
        }); 
    });   

/*----------------------------------------------------*/
/* Crousel Team 
/*----------------------------------------------------*/
	$('.all_team').owlCarousel({
		items:4,
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		smartSpeed:3000,
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:4
			}
		}
	})
	
/*----------------------------------------------------*/
/* Testimonial crousel 
/*----------------------------------------------------*/
	$('.all_tstm').owlCarousel({
		items:1,
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		smartSpeed:3000,	
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
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
	})
	
/*----------------------------------------------------*/
/* Happy Client crousel 
/*----------------------------------------------------*/
	$('.al_clt').owlCarousel({
		items:6,
		loop:true,
		margin:30,
		nav:true,
		autoplay:true,
		smartSpeed:3000,	
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:6
			},
			1000:{
				items:6
			}
		}
	})

	
	
/*preloder*/
$(window).load(function() { // makes sure the whole site is loaded
	$('#status').fadeOut(); // will first fade out the loading animation
	$('#loader-wrapper').delay(200).fadeOut('slow'); // will fade out the white DIV that covers the website.
	$('body').delay(200).css({'overflow-x':'hidden'});
})	
	

});

 jQuery(document).ready(function($){
     //if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
     var MqL = 1170;
     //move nav element position according to window width
     moveNavigation();
     $(window).on('resize', function(){
         (!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
     });

     //mobile - open lateral menu clicking on the menu icon
     $('.cd-nav-trigger').on('click', function(event){
         event.preventDefault();
         if( $('.cd-main-content').hasClass('nav-is-visible') ) {
             closeNav();
             $('.cd-overlay').removeClass('is-visible');
         } else {
             $(this).addClass('nav-is-visible');
             $('.cd-primary-nav').addClass('nav-is-visible');
             $('.cd-main-header').addClass('nav-is-visible');
             $('.cd-main-content').addClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                 $('body').addClass('overflow-hidden');
             });
             toggleSearch('close');
             $('.cd-overlay').addClass('is-visible');
         }
     });

     //open search form
     $('.cd-search-trigger').on('click', function(event){
         event.preventDefault();
         toggleSearch();
         closeNav();
     });

     //close lateral menu on mobile
     $('.cd-overlay').on('swiperight', function(){
         if($('.cd-primary-nav').hasClass('nav-is-visible')) {
             closeNav();
             $('.cd-overlay').removeClass('is-visible');
         }
     });
     $('.nav-on-left .cd-overlay').on('swipeleft', function(){
         if($('.cd-primary-nav').hasClass('nav-is-visible')) {
             closeNav();
             $('.cd-overlay').removeClass('is-visible');
         }
     });
     $('.cd-overlay').on('click', function(){
         closeNav();
         toggleSearch('close')
         $('.cd-overlay').removeClass('is-visible');
     });


     //prevent default clicking on direct children of .cd-primary-nav
     $('.cd-primary-nav').children('.has-children').children('a').on('click', function(event){
         event.preventDefault();
     });
     //open submenu
     $('.has-children').children('a').on('click', function(event){
         if( !checkWindowWidth() ) event.preventDefault();
         var selected = $(this);
         if( selected.next('ul').hasClass('is-hidden') ) {
             //desktop version only
             selected.addClass('selected').next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('moves-out');
             selected.parent('.has-children').siblings('.has-children').children('ul').addClass('is-hidden').end().children('a').removeClass('selected');
             $('.cd-overlay').addClass('is-visible');
         } else {
             selected.removeClass('selected').next('ul').addClass('is-hidden').end().parent('.has-children').parent('ul').removeClass('moves-out');
             $('.cd-overlay').removeClass('is-visible');
         }
         toggleSearch('close');
     });

     //submenu items - go back link
     $('.go-back').on('click', function(){
         $(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');
     });

     function closeNav() {
         $('.cd-nav-trigger').removeClass('nav-is-visible');
         $('.cd-main-header').removeClass('nav-is-visible');
         $('.cd-primary-nav').removeClass('nav-is-visible');
         $('.has-children ul').addClass('is-hidden');
         $('.has-children a').removeClass('selected');
         $('.moves-out').removeClass('moves-out');
         $('.cd-main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
             $('body').removeClass('overflow-hidden');
         });
     }

     function toggleSearch(type) {
         if(type=="close") {
             //close serach
             $('.cd-search').removeClass('is-visible');
             $('.cd-search-trigger').removeClass('search-is-visible');
             $('.cd-overlay').removeClass('search-is-visible');
         } else {
             //toggle search visibility
             $('.cd-search').toggleClass('is-visible');
             $('.cd-search-trigger').toggleClass('search-is-visible');
             $('.cd-overlay').toggleClass('search-is-visible');
             if($(window).width() > MqL && $('.cd-search').hasClass('is-visible')) $('.cd-search').find('input[type="search"]').focus();
             ($('.cd-search').hasClass('is-visible')) ? $('.cd-overlay').addClass('is-visible') : $('.cd-overlay').removeClass('is-visible') ;
         }
     }

     function checkWindowWidth() {
         //check window width (scrollbar included)
         var e = window,
             a = 'inner';
         if (!('innerWidth' in window )) {
             a = 'client';
             e = document.documentElement || document.body;
         }
         if ( e[ a+'Width' ] >= MqL ) {
             return true;
         } else {
             return false;
         }
     }

     function moveNavigation(){
         var navigation = $('.cd-nav');
         var desktop = checkWindowWidth();
         if ( desktop ) {
             navigation.detach();
             navigation.insertBefore('.cd-header-buttons');
         } else {
             navigation.detach();
             navigation.insertAfter('.cd-main-content');
         }
     }
 });


