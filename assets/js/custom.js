/*
======================================
[ Owl js ]
======================================
*/
$('.owl__slider').owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    nav:true,
    navText:[
     "<i class='fa fa-angle-left' aria-hidden='true'></i>",
     "<i class='fa fa-angle-right' aria-hidden='true'></i>"
  ],
    dots: false,
});

$('.owl__slide').owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    animateOut: 'fadeOut',
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    nav:true,
    navText:[
     "<i class='fa fa-angle-left' aria-hidden='true'></i>",
     "<i class='fa fa-angle-right' aria-hidden='true'></i>"
  ],
    dots: false,
});

$('.owl__feedback').owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    dots: true,
    nav:false,
});
$('.owl_product').owlCarousel({
    items:5,
    loop:true,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    dots: false,
    nav:true,
    navText:[
     "<i class='fa fa-angle-left' aria-hidden='true'></i>",
     "<i class='fa fa-angle-right' aria-hidden='true'></i>"
    ],
    responsive:{
      0:{
          items:2,
      },
      600:{
          items:3,
      },
      1000:{
          items:5,
      }
  }
});
$('.owl__related').owlCarousel({
    items:5,
    loop:true,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    dots: false,
    nav:true,
    navText:[
     "<i class='fa fa-angle-left' aria-hidden='true'></i>",
     "<i class='fa fa-angle-right' aria-hidden='true'></i>"
    ],
    responsive:{
      0:{
          items:2,
      },
      600:{
          items:3,
      },
      1000:{
          items:5,
      }
  }
});
$('.owl_news').owlCarousel({
    items:4,
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    dots: true,
    nav:false,
    responsive:{
      0:{
          items:1,
      },
      600:{
          items:2,
      },
      1000:{
          items:4,
      }
  }
});
/*
======================================
[ Back to top ]
======================================
*/
jQuery(document).ready(function() {
  var offset = 220;
  var duration = 500;
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.back-to-top').fadeIn(duration);
    } else {
      jQuery('.back-to-top').fadeOut(duration);
    }
  });
  jQuery('.back-to-top').click(function(event) {
    event.preventDefault();
    jQuery('html, body').animate({
      scrollTop: 0
    }, duration);
    return false;
  })
});

/*
======================================
[ Effect Count ]
======================================
*/
$('.countNumbers__number').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
/*
======================================
[ Menu Mobile ]
======================================
*/
function menu () {
  $('.menu-default-open').click( function () {
    $(".menu-default").toggle();
  });
  $('.menu-close').click( function () {
    $('.menu-default').css("display","none");
  });
};  
$(document).ready(menu);

$(document).ready(function($){
  $('#accordion').dcAccordion({
    eventType: 'click',
    autoClose: true,
    saveState: true,
    disableLink: true,
    speed: 'slow',
    showCount: false,
    autoExpand: true,
    classExpand  : 'dcjq-current-parent'
  });
        
});

$(document).ready(function($){
  $('#menu-vertical').dcAccordion({
    eventType: 'click',
    autoClose: true,
    saveState: true,
    disableLink: true,
    speed: 'slow',
    showCount: false,
    autoExpand: false,
    classExpand  : 'dcjq-current-parent'
  });
        
});

// cat & child cat sidebar
$(document).ready(function($){
  $('#accordion2').dcAccordion({
    eventType: 'click',
    autoClose: true,
    saveState: true,
    disableLink: true,
    speed: 'slow',
    showCount: false,
    autoExpand: false,
    classExpand  : 'dcjq-current-parent'
  });
        
});

// Product Gallery

$(document).ready(function() {

  var sync1 = $("#gallery-full");
  var sync2 = $("#gallery-thumbnail");
   
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: true,
    autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate : 200,
    navText:[
     "<i class='fa fa-angle-left' aria-hidden='true'></i>",
     "<i class='fa fa-angle-right' aria-hidden='true'></i>"
    ],

  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : 3,
    dots: true,
    nav: true,
    smartSpeed: 200,
    slideSpeed : 500,
     
    responsiveRefreshRate : 100,
    navText:[
     "<i class='fa fa-angle-left' aria-hidden='true'></i>",
     "<i class='fa fa-angle-right' aria-hidden='true'></i>"
    ],
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {

    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});

// chia col sp chi tiet
// $( ".woocommerce-tabs.wc-tabs-wrapper" ).addClass( "col-md-9" );

// scroll to top //
$(document).ready(function () {
    $(window).scroll(function () {
        var cach_top = $(window).scrollTop();        

        // Scroll Top
        var scrollTop = $(".scrollTop");
        var topPos = $(this).scrollTop();
        // if user scrolls down - show scroll to top button
        if (topPos > 100) {
            $(scrollTop).css("opacity", "1");

        } else {
            $(scrollTop).css("opacity", "0");
        }
    });
    $('.scrollTop').click(function(){
        //window.scrollTo(0, 0);
        $('html').animate({scrollTop:0}, 'slow');//IE, FF
        $('body').animate({scrollTop:0}, 'slow');//chrome, don't know if Safari works
        // $('.scrollTop').fadeIn(1000, function(){
        //     setTimeout(function(){$('.scrollTop').fadeOut(2000);}, 3000);
        // });
    });
});

// remove Zoom mobile //
jQuery(document).ready(function() {
  var body = $(body).width();
  var zoom = $('.woocommerce-page .product .images .slick-slide');
  // var zoomimg = $('.woocommerce-page .product .images .slick-slide img');
  if(body <= 768){
      zoom.removeClass('zoom');
      $('.woocommerce-page .product .images .slick-slide img:last').removeClass('zoomImg');
      // console.log(zoomimg);
  } else {
    zoom.addClass('zoom');
    // zoomimg.attr("style").addClass('zoomImg');
  }
});
