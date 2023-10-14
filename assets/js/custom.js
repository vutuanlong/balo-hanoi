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
    loop:false,
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
    loop:false,
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
    items:5,
    loop:true,
    autoplay:false,
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
          items:5,
      }
  }
});
$('.owl_trai-nghiem').owlCarousel({
    items:4,
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
	$('body').toggleClass('overflow-hidden');
  });
  $('.menu-close').click( function () {
    $('.menu-default').css("display","none");
	$('body').removeClass('overflow-hidden');
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


$(document).ready( function () {
	$( '.arrow-box' ).on( 'click', function () {
		$( this ).hide();
		$( '.arrow-up-box' ).show();
		$( '.cat-description' ).addClass( 'showed' );
	} );

	$( '.arrow-up-box' ).on( 'click', function () {
		$( this ).hide();
		$( '.arrow-box' ).show();
		$( '.cat-description' ).removeClass( 'showed' );
	} )


	$( '.site-search-toggler' ).on( 'click', function ( e ) {
		e.preventDefault();
		$( '#site-search' ).slideToggle().find( 'input' ).focus();
	} );

	// esc key close search field
	$( document ).on( "keyup", function ( e ) {
		if ( e.keyCode === 27 ) { // escape key maps to keycode `27`
			$( ".site-search input" ).blur();
			$( '#site-search' ).slideUp();
		}
	} );


	function filter_category_product() {

		var form_filter = '#form_filter';

		function filterSubmit() {
			if($(form_filter + ' select[name="filter_sort"]').val() == '') {
				$(form_filter + ' select[name="filter_sort"]').prop("disabled", true);
			}
			$(form_filter).submit();
		}

		$( '.filter-button .btn-filter-close' ).on( 'click', function() {
			// filterRemove($(this));
			hideFilterAll();
		} );
		$( '.filter-button .btn-filter-readmore, .all-button .btn-filter-readmore' ).on( 'click', function() {
			filterSubmit();
		} )
		function filterRemove(elm) {
			$(elm).parents('.content').find('input[type="checkbox"]').prop('checked', false);
			filterSubmit();
		}

		$( '.list-active a, .all-button .btn-filter-close' ).on( 'click', function() {
			filterRemoveAll($(this));
		} );
		function filterRemoveAll(elm) {
			$(elm).parents('.filter-other').find('input[type="checkbox"]').prop('checked', false);
			filterSubmit();
		}

		$(form_filter + ' .filter-all .filter-other .other .title').click(function() {
			if(!$('.filter-all').hasClass('active')) {
				$("html").animate({ scrollTop: $(form_filter + ' .filter-all').offset().top - 100}, 200);
				if(!$('body').find('.bg-filter').length) {
					$('body').append('<div class="bg-filter" style="background: none;" onclick="hideFilterAll()"></div>');
				}

				$('.filter-all').removeClass('active');
				$('.filter-all .all-other .other').removeClass('active');
				$(this).parent()[$(this).parent().hasClass('active') ? "removeClass" : "addClass"]("active");
				//$('body').append('<div class="bg-filter" onclick="hideFilterAll()"></div>');
				//$('.all-title').css('z-index', 1);
			}
		});

		$(form_filter + ' .filter-all .all-title').click(function() {
			$("html").animate({ scrollTop: $(form_filter + ' .filter-all').offset().top - 100}, 200);
			//$('.all-title').css('z-index', 99);
			$('.filter-all .all-other .other').removeClass('active');
			if($(this).parent().hasClass('active')) {
				hideFilterAll();
			} else {
				$(this).parent().addClass("active");
				if($('body').find('.bg-filter').length) {
					$('body').find('.bg-filter').remove();
				}
				$('body').append('<div class="bg-filter" onclick="hideFilterAll()"></div>');
			}
		});

		// function hideFilter(elm) {
		// 	$(elm).parents('.other').removeClass('active');
		// }
		function hideFilterAll() {
			$('.filter-all').removeClass('active');
			$('.filter-all .all-other .other').removeClass('active');
			$('body').find('.bg-filter').remove();
			$('.filter-all .other.list-active').removeAttr('style');
		}
		$(form_filter + ' .all-header .btn-close').click(function() {
			hideFilterAll()
		});
		$('body::before').click(function() {
			$('.filter-all').removeClass('active');
			$('body').removeClass('filter');
		});

		$(form_filter + ' .filter-list .item input[type="checkbox"]').change(function() {
			$(this).parent()[this.checked ? "addClass" : "removeClass"]("active");
			filterActive();
		});


		function filterActive() {
			var filter_active = '';
			$(form_filter +' input[type="checkbox"]').each(function() {
				input_type = $(this).attr('type');
				input_name = $(this).attr('name');
				input_value = $(this).val();
				if($(this).is(':checked')) {
					if($(this).attr('data-type') && $(this).attr('data-type') == 'color') {
						filter_active += '<div class="item"><span class="color" style="'+ $(this).parent().find('.color').attr('style') +'"></span><i class="fa-solid fa-xmark" data-name="'+ $(this).attr('name') +'" data-value="'+ $(this).attr('value') +'" onclick="remove_filter(this);"></i></div>';
					} else {
						filter_active += '<div class="item"><span class="text">'+ $('span', $(this).parent()).text() +'</span><i class="fa-solid fa-xmark" data-name="'+ $(this).attr('name') +'" data-value="'+ $(this).attr('value') +'" onclick="remove_filter(this);"></i></div>';
					}
				}
			});

			if($('#select-filter-product').val() != '') {
				filter_active += '<div class="item"><span class="text">'+ $('#select-filter-product option:selected').text() +'</span><i class="fa-solid fa-xmark" data-name="filter_sort" onclick="remove_filter(this);"></i></div>';
			}

			if(filter_active != '') {
				$('.all-active-list').html(filter_active);
				$('.filter-all.active .other.list-active').show();
				$('.all-title .total').html($('.all-active-list .item').length).show();
			} else {
				$('.all-active-list').html('');
				$('.filter-all.active .other.list-active').hide();
				$('.all-title .total').html('').hide();
			}

			$(form_filter +' .other').each(function() {
				let total_seleted = $(this).find('input:checked').length;
				if(total_seleted) {
					$(this).find('.title .text').hide();
					let text_selected = '';
					$(this).find('input:checked').each(function() {
						if($('.color', $(this).parent()).length) {
							text_selected = $(this).parent().find('.color').attr('data-name');
						} else {
							text_selected = $('span', $(this).parent()).text();
						}
					});
					if(total_seleted > 1) {
						text_selected += ',...';
					}
					$(this).find('.title .text-selected').html('').html(text_selected).show();
				} else {
					$(this).find('.title .text').show();
					$(this).find('.title .text-selected').hide();
				}
			});
		}
		filterActive();


		function remove_filter(elm) {
			let name = $(elm).attr('data-name');
			let value = $(elm).attr('data-value');
			if(name == 'filter_sort') {
				$('input[name="'+ name +'"]').val('');
			} else {
				$('input[name="'+ name +'"][value="'+ value +'"]').parent().removeClass('active');
				$('input[name="'+ name +'"][value="'+ value +'"]').prop('checked', false);
			}
			filterActive();
		}
	}

	filter_category_product();

	$( '.chat-icon' ).on( 'click', function() {
		$( '.cskh-online-box' ).toggleClass( 'active' );
	} );
	$( '.chat-info-box .btn-close' ).on( 'click', function() {
		$( '.cskh-online-box' ).removeClass( 'active' );
	} );


	$( '.variation_swatches-more' ).on( 'click', function() {
		$(this).prev().addClass( 'showed' );
		$(this).hide();
	} );


	let T = $(window).scrollTop();
	window.onscroll = function() {
    	overTop = $(".header").height(),
		scrollTop = $(window).scrollTop();

		if ( scrollTop >= overTop ) {
			$(".header").addClass("fixed-header");
			if ( T > scrollTop ) {
				$(".header").addClass("showed-header");
			} else {
				$(".header").removeClass("showed-header");
			}
			T = scrollTop;
		} else {
			$(".header").removeClass("showed-header");
			$(".header").removeClass("fixed-header");
		}
	}

} );