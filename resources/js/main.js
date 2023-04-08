(function ($) {
    "use strict";


    /*--
		Header Sticky
    -----------------------------------*/
    $(window).on('scroll', function(event) {    
        var scroll = $(window).scrollTop();
        if (scroll <= 1) {
            $(".header-sticky").removeClass("sticky");
        } else{
            $(".header-sticky").addClass("sticky");
        }
	});


    /*--
		Menu Active
    -----------------------------------*/
    $(function () {
    var url = window.location.pathname; 
    var activePage = url.substring(url.lastIndexOf('/') + 1); 
        $('.nav-menu li a').each(function () { 
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); 
    
            if (activePage == linkPage) { 
                $(this).closest("li").addClass("active"); 
            }
        });
    })



    /*--
        Bootstrap dropdown
    -----------------------------------*/
    // Add slideDown animation to Bootstrap dropdown when expanding.
    $('.dropdown').on('show.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideUp animation to Bootstrap dropdown when collapsing.
    $('.dropdown').on('hide.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });


    /*--
        Off Canvas Menu
    -----------------------------------*/
	
  	$('.mobile-menu-open').on('click', function(){
        $('.off-canvas-box').addClass('open')
        $('.menu-overlay').addClass('open')
    });
    
    $('.menu-close').on('click', function(){
        $('.off-canvas-box').removeClass('open')
        $('.menu-overlay').removeClass('open')
    });
    
    $('.menu-overlay').on('click', function(){
        $('.off-canvas-box').removeClass('open')
        $('.menu-overlay').removeClass('open')
    });

    /*Variables*/
    var $offCanvasNav = $('.canvas-menu'),
    $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu, .mega-sub-menu, .menu-item ');

    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="mobile-menu-expand"></span>');

    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .mobile-menu-expand, li .menu-title', function(e) {
        var $this = $(this);
        if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('mobile-menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.parent('li').removeClass('active-expand');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active-expand');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.closest('li').siblings('li').removeClass('active-expand');
                $this.siblings('ul').slideDown();
            }
        }
    });

    $( ".sub-menu, .mega-sub-menu, .menu-item" ).parent( "li" ).addClass( "menu-item-has-children" );
    $( ".mega-sub-menu" ).parent( "li" ).css( "position", "static" );


    /*--
        Slider
    -----------------------------------*/
    var slider = new Swiper('.slider-active .swiper-container', {
        speed: 600,
        effect: "fade",
        loop: true,
        pagination: {
            el: '.slider-active .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.slider-active .swiper-button-next',
            prevEl: '.slider-active .swiper-button-prev',
        },
        // autoplay: {
        //     delay: 8000,
        // },
    }); 


    /*--
        Product
    -----------------------------------*/
    var product = new Swiper('.product-active .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.product-active .swiper-button-next',
            prevEl: '.product-active .swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        }
    });


    /*--
        Product 02
    -----------------------------------*/
    var product = new Swiper('.product-active-02 .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.product-active-02 .swiper-button-next',
            prevEl: '.product-active-02 .swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 4,
            }
        }
    });


    /*--
        products Banner
    -----------------------------------*/
    var product = new Swiper('.products-banner-active .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 0,
        loop: true,        
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });


    /*--
        Blog
    -----------------------------------*/
    var product = new Swiper('.blog-active .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.blog-active .swiper-button-next',
            prevEl: '.blog-active .swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        }
    });


    /*--
        Testimonial
    -----------------------------------*/
    var slider = new Swiper('.testimonial-active .swiper-container', {
        speed: 600,
        loop: true,
        pagination: {
            el: '.testimonial-active .swiper-pagination',
            clickable: true,
        },
        // autoplay: {
        //     delay: 8000,
        // },
    }); 


    /*--
        Blog Gallery Active
    -----------------------------------*/
    var blog = new Swiper('.gallery-active .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        navigation: {
            nextEl: '.gallery-active .swiper-button-next',
            prevEl: '.gallery-active .swiper-button-prev',
        },        
    });


    /*--
        Countdown
    -----------------------------------*/
    function makeTimer($endDate, $this, $format) {
        var today = new Date();
        var BigDay = new Date($endDate),
          msPerDay = 24 * 60 * 60 * 1000,
          timeLeft = (BigDay.getTime() - today.getTime()),
          e_daysLeft = timeLeft / msPerDay,
          daysLeft = Math.floor(e_daysLeft),
          e_hrsLeft = (e_daysLeft - daysLeft) * 24,
          hrsLeft = Math.floor(e_hrsLeft),
          e_minsLeft = (e_hrsLeft - hrsLeft) * 60,
          minsLeft = Math.floor((e_hrsLeft - hrsLeft) * 60),
          e_secsLeft = (e_minsLeft - minsLeft) * 60,
          secsLeft = Math.floor((e_minsLeft - minsLeft) * 60);
    
        var yearsLeft = 0;
        var monthsLeft = 0
        var weeksLeft = 0;
    
        if ($format != 'short') {
          if (daysLeft > 365) {
            yearsLeft = Math.floor(daysLeft / 365);
            daysLeft = daysLeft % 365;
          }
    
          if (daysLeft > 30) {
            monthsLeft = Math.floor(daysLeft / 30);
            daysLeft = daysLeft % 30;
          }
          if (daysLeft > 7) {
            weeksLeft = Math.floor(daysLeft / 7);
            daysLeft = daysLeft % 7;
          }
        }
    
        var yearsLeft = yearsLeft < 10 ? "0" + yearsLeft : yearsLeft,
          monthsLeft = monthsLeft < 10 ? "0" + monthsLeft : monthsLeft,
          weeksLeft = weeksLeft < 10 ? "0" + weeksLeft : weeksLeft,
          daysLeft = daysLeft < 10 ? "0" + daysLeft : daysLeft,
          hrsLeft = hrsLeft < 10 ? "0" + hrsLeft : hrsLeft,
          minsLeft = minsLeft < 10 ? "0" + minsLeft : minsLeft,
          secsLeft = secsLeft < 10 ? "0" + secsLeft : secsLeft,
          yearsText = yearsLeft > 1 ? 'Years' : 'year',
          monthsText = monthsLeft > 1 ? 'Months' : 'month',
          weeksText = weeksLeft > 1 ? 'Weeks' : 'week',
          daysText = daysLeft > 1 ? 'Days' : 'day',
          hourText = hrsLeft > 1 ? 'Hours' : 'hr',
          minsText = minsLeft > 1 ? 'Mints' : 'min',
          secText = secsLeft > 1 ? 'Secs' : 'sec';
    
        var $markup = {
          wrapper: $this.find('.countdown__item'),
          year: $this.find('.yearsLeft'),
          month: $this.find('.monthsLeft'),
          week: $this.find('.weeksLeft'),
          day: $this.find('.daysLeft'),
          hour: $this.find('.hoursLeft'),
          minute: $this.find('.minsLeft'),
          second: $this.find('.secsLeft'),
          yearTxt: $this.find('.yearsText'),
          monthTxt: $this.find('.monthsText'),
          weekTxt: $this.find('.weeksText'),
          dayTxt: $this.find('.daysText'),
          hourTxt: $this.find('.hoursText'),
          minTxt: $this.find('.minsText'),
          secTxt: $this.find('.secsText')
        }
    
        var elNumber = $markup.wrapper.length;
        $this.addClass('item-' + elNumber);
        $($markup.year).html(yearsLeft);
        $($markup.yearTxt).html(yearsText);
        $($markup.month).html(monthsLeft);
        $($markup.monthTxt).html(monthsText);
        $($markup.week).html(weeksLeft);
        $($markup.weekTxt).html(weeksText);
        $($markup.day).html(daysLeft);
        $($markup.dayTxt).html(daysText);
        $($markup.hour).html(hrsLeft);
        $($markup.hourTxt).html(hourText);
        $($markup.minute).html(minsLeft);
        $($markup.minTxt).html(minsText);
        $($markup.second).html(secsLeft);
        $($markup.secTxt).html(secText);
    }
    
    $('.countdown').each(function () {
        var $this = $(this);
        var $endDate = $(this).data('countdown');
        var $format = $(this).data('format');
        setInterval(function () {
          makeTimer($endDate, $this, $format);
        }, 0);
    });


    /*--
		Back to top Script
	-----------------------------------*/
    // Show or hide the sticky footer button
    $(window).on('scroll', function (event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });

    //Animate the scroll to yop
    $('.back-to-top').on('click', function (event) {
    event.preventDefault();

        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });


    /*--
        Nice Select Activation 
    -----------------------------------*/
    $('.nice_select').niceSelect();    


    /*--
        select2
    -----------------------------------*/
    $(".select2").select2({
        tags: true
    });


    /*--
        ionRangeSlider Activation 
    -----------------------------------*/
    $("#price-range").ionRangeSlider({
        type: "double",
        grid: false,
        min: 16,
        max: 500,
        from: 16,
        to: 300,
        prefix: "$",
    });


    /*--
        Product Details Zoom Activation
    -----------------------------------*/
    $('.zoom').zoom();


    /*--
        Product Details
    -----------------------------------*/
    var galleryThumbs = new Swiper('.details-gallery-thumbs .swiper-container', {
        spaceBetween: 20,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
          nextEl: '.details-gallery-thumbs .swiper-button-next',
          prevEl: '.details-gallery-thumbs .swiper-button-prev',
        },
        breakpoints: {          
            0: {
                spaceBetween: 10,
                slidesPerView: 3,
            },
            576: {
                slidesPerView: 4,
            },
        }
      });
      var galleryTop = new Swiper('.details-gallery-images .swiper-container', {
        spaceBetween: 10,     
        thumbs: {
          swiper: galleryThumbs
        }
    });


    /*--
        Quick View
    -----------------------------------*/
    var galleryThumbs = new Swiper('.quick-gallery-thumbs .swiper-container', {
        spaceBetween: 20,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
          nextEl: '.quick-gallery-thumbs .swiper-button-next',
          prevEl: '.quick-gallery-thumbs .swiper-button-prev',
        },
        breakpoints: {          
            0: {
                spaceBetween: 10,
                slidesPerView: 3,
            },
            576: {
                slidesPerView: 4,
            },
        }
      });
      var galleryTop = new Swiper('.quick-gallery-images .swiper-container', {
        spaceBetween: 10,     
        thumbs: {
          swiper: galleryThumbs
        }
    });


    /*--
        Product Quantity Activation
    -----------------------------------*/
    $('.add').on('click', function () {
        if ($(this).prev().val()) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.sub').on('click', function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });


    /*--
		Rating Script
	-----------------------------------*/

	$("#rating li").on('mouseover', function(){
		var onStar = parseInt($(this).data('value'), 10);
		var siblings = $(this).parent().children('li.star');
		Array.from(siblings, function(item){
			var value = item.dataset.value;
			var child = item.firstChild;
			if(value <= onStar){
				child.classList.add('hover')
			} else {
				child.classList.remove('hover')
			}
		})
	})

	$("#rating").on('mouseleave', function(){
		var child = $(this).find('li.star i');
		Array.from(child, function(item){
			item.classList.remove('hover');
		})
	})

	
	$('#rating li').on('click', function(e) {
		var onStar = parseInt($(this).data('value'), 10);
		var siblings = $(this).parent().children('li.star');
		Array.from(siblings, function(item){
			var value = item.dataset.value;
			var child = item.firstChild;
			if(value <= onStar){
				child.classList.remove('hover', 'fa-star-o');
				child.classList.add('fa-star')
			} else {
				child.classList.remove('fa-star');
				child.classList.add('fa-star-o')
			}
		})
	}) 


    /*--
        Odometer Activation 
    -----------------------------------*/
    if( $('.odometer').length ){

		var elemOffset = $('.odometer').offset().top;
		var winHeight = $(window).height();
		if(elemOffset < winHeight){
			$('.odometer').each(function(){
				$(this).html($(this).data('count-to'));
			});
		}
		$(window).on('scroll', function(){
			var elemOffset = $('.odometer').offset().top;
			function winScrollPosition() {
				var scrollPos = $(window).scrollTop(),
					winHeight = $(window).height();
				var scrollPosition = Math.round(scrollPos + (winHeight / 1.2));
				return scrollPosition;
			}
			if ( elemOffset < winScrollPosition()) {
				$('.odometer').each(function(){
					$(this).html($(this).data('count-to'));
				});
			}	
		});
    };


    /*--
        Checkout Account Active
    -----------------------------------*/
    $('#account').on('click', function () {
        if ($('#account:checked').length > 0) {
          $('.checkout-account').slideDown();
        } else {
          $('.checkout-account').slideUp();
        }
    });
      
  
    /*--
        Checkout Shipping Active
    -----------------------------------*/
    $('#shipping').on('click', function () {
        if ($('#shipping:checked').length > 0) {
          $('.checkout-shipping').slideDown();
        } else {
          $('.checkout-shipping').slideUp();
        }
    });
      
  
    /*--
        Checkout Payment Active
    -----------------------------------*/
    var checked = $('.payment-radio input:checked')
    if (checked) {
        $(checked).siblings('.payment-details').slideDown(500);
    };
    $('.payment-radio input').on('change', function() {
        $('.payment-details').slideUp(500);
        $(this).siblings('.payment-details').slideToggle(500);
    });
  

    

    
})(jQuery);

