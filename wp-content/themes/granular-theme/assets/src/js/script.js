(function($, window){
	"use strict";
	var wb = {
	    homeHover : {
	      test : function() {
	        return true;
	      },
	      run : function() {
	        $('.specials').hover(function() {
	          var i = $(this).data('bgurl');
	          $('.hero-left').css('background-image', 'url(' + i + ')');
	        }, function() {

	        });
	      }
	    },
	    weddingHover : {
	      test : function() {
	        return true;
	      },
	      run : function() {
	        setInterval(function() {
	          var active = $('.active'),
	              first = $('.image-rotater__image').first(),
	              last = $('.image-rotater__image').last();
	          
	          if(active.is(last)) {
	            first.addClass('active');
	            active.removeClass('active');
	          } else {
	            active.next().addClass('active');
	            active.removeClass('active');
	          }
	        }, 1500); 
	      }
	    },
	    positionFilter : {
	      test : function() {
	        return true;
	      },
	      run : function() {
	        $('.staff-filter').click(function() {
	          var n = $(this).data('position');
	          $(this).css('color', '#b4cd95');
	          $(this).siblings().css('color', 'white');

	          if(n == 'stylistspa') {
	            $('.staff-img').parent().show();
	          } else {
	            $('.'+n).siblings().hide();
	            $('.'+n).show();
	          }

	        });

	      }
	    },
	    staffFilter : {
	      test : function() {
	        return true;
	      },
	      run : function() {
	        $('.staff-wrap').click(function() {
	          var name, about, image, position;
	          name = $(this).data('name');
	          about = $(this).data('about');
	          image = $(this).data('image');
	          position = $(this).data('position');
	          $('.talent-info h3').html(name);
	          $('.talent-info h5').html(position);
	          $('.talent-info p').html(about);
	          $('.talent-info .image-src').css('background-image', 'url('+image+')');
	          $('.info-wrap').show();
	        });

	        $('.close-info').click(function() {
	          $('.info-wrap').hide();
	        });
	      }
	    },
	    mobileNav : {
	      test : function() {
	        return true;
	      },
	      run : function() {
	        $('.mobile-nav').click(function() {
	        	if($(this).hasClass('active-nav')) {
	        		$(this).removeClass('active-nav');
	        	} else {
	        		$(this).addClass('active-nav');
	        	}
	          $('.show-nav').toggle();
	        });
	      }
	    }
		};
	for (var key in wb){
		if (wb[key].test()){
			wb[key].run();
		}
	}
}(jQuery, window));
