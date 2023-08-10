"use strict";

var ScriptsBundle = ScriptsBundle || {};

$(function() {
    ScriptsBundle = {
        init: function() {
            ScriptsBundle.stickyHeader();
            ScriptsBundle.toggleMenu();
            ScriptsBundle.menutoggle();
            ScriptsBundle.gallerySlider();
            ScriptsBundle.panelheading();
            ScriptsBundle.jobSlider();
            ScriptsBundle.mapShowHide();  
            ScriptsBundle.tabNav();          
        },
    
    stickyHeader: function() {
      $("#header").toggleClass("fixed-header", $window.scrollTop() >= 50);  

    }, 

    toggleMenu: function() {
      $('.nav-has-children .sub-menu-toggle').on('click', function() {
        $(this).toggleClass('active');
        $(this).next().toggleClass('show');
      });
    },

    menutoggle: function() {
      $(".menu-toggle").click(function(){
        $(this).next().toggle();
        $(this).toggleClass("active");
      });
    },
    
    tabNav: function() {
      $(".tab-nav li a").click(function() {
            var ids = $(this).attr('href');
            console.log(ids);
            $(".tab-nav li a").removeClass('active')
            $(this).addClass('active');
            $('.visa__options__info').slideUp();
            $(ids).slideDown();
        });  
    },

    mapShowHide: function() {
      $('.clinic__address').click(function() {
        $(".map_block").slideUp();
        $('.clinic__address').removeClass('active');
        $(this).addClass('active');
        $("#" + $(this).attr('data-show')).slideDown();
      });
    },

    gallerySlider: function() {
      $('.gallery__slider').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        smartSpeed:1500,
        autoplay:true,
        center: true,
        responsiveClass:true,
        autoplayTimeout:5000,
        responsive:{
          1280:{
              items:3
          },
          768:{
              items:2
          },
           640:{
            items:2,
          },
          480:{
              items:1
          },
           360:{
              items:1
          },
           320:{
              items:1
          }
        },

     });

    },

    panelheading: function() {
       $(".panel__heading").click(function(){
        $(this).next().toggle();
        $(this).toggleClass("active");
      });

    },

    jobSlider: function() {
      $('.jobs__slider').owlCarousel({
        items:3,
        margin:30,
        loop:true,
        nav:true,
        dots:false,
        smartSpeed:1500,
        autoHeight:true,  
        autoplay:true,
        responsiveClass:true,
        autoplayTimeout:5000,
        responsive:{
        1280:{
            items:3
        },
        1024:{
            items:2
        },
        640:{
            items:2,
            margin:10,
        },
        480:{
            items:1
        },
        360:{
            items:1
        },
        320:{
            items:1
        }
     },

    });

    },
    
   
    };
    // mobile__slider

    if (jQuery(window).width() <= 639) {
  jQuery('.mobile__slider').owlCarousel({
    stagePadding: 0,
    loop: true,
    responsiveClass: true,
    dots: true,
    nav: false,
    autoHeight: true,
    items: 1
  });
}
    
     $('.testimonials__slider').owlCarousel({
      items:1,
       margin:20,
        loop:true,
        nav:true,
        dots:false,
        smartSpeed:2500,
        autoHeight:true,  
        autoplay:true,
        responsiveClass:true,
        autoplayTimeout:5000,
    
})
   $(".tab__block h4").click(function() {
        $(this).toggleClass('active');
        $('.tab__block__info').slideUp();
        $(this).next().toggle();
    })
     
// animation

  var $window = $(window);
  
  $window.on('scroll', ScriptsBundle.stickyHeader);    
  $(document).ready(ScriptsBundle.init);
  new WOW().init(); 
});

// scrool to top

$('#contact').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1000);
    return false;
});


 

   