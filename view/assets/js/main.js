(function ($)
  { "use strict"
  
/* 1. Preloader */
    $(window).on('load', function () {
      $('#preloader-active').delay(450).fadeOut('slow');
      $('body').delay(450).css({
        'overflow': 'visible'
      });
    });

/* 2. slick Nav */
// mobile_menu
    var menu = $('ul#navigation');
    if(menu.length){
      menu.slicknav({
        prependTo: ".mobile_menu",
        closedSymbol: '+',
        openedSymbol:'-'
      });
    };


/* 3. MainSlider-1 */
    function mainSlider() {
      var BasicSlider = $('.slider-active');
      BasicSlider.on('init', function (e, slick) {
        var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
      });
      BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
      });
     

      function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function () {
          var $this = $(this);
          var $animationDelay = $this.data('delay');
          var $animationType = 'animated ' + $this.data('animation');
          $this.css({
            'animation-delay': $animationDelay,
            '-webkit-animation-delay': $animationDelay
          });
          $this.addClass($animationType).one(animationEndEvents, function () {
            $this.removeClass($animationType);
          });
        });
      }
    }
    mainSlider();



/* 4. Testimonial Active*/
  var testimonial = $('.h1-testimonial-active');
    if(testimonial.length){
    testimonial.slick({
        dots: false,
        infinite: true,
        speed: 1000,
        autoplay:false,
        loop:true,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrow:false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:false
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:false,
            }
          }
        ]
      });
    }


/* 5. Gallery Active */
    var client_list = $('.completed-active');
    if(client_list.length){
      client_list.owlCarousel({
        slidesToShow: 2,
        slidesToScroll: 1,
        loop: true,
        autoplay:true,
        speed: 3000,
        smartSpeed:2000,
        nav: false,
        dots: false,
        margin: 15,

        autoplayHoverPause: true,
        responsive : {
          0 : {
            items: 1
          },
          768 : {
            items: 2
          },
          992 : {
            items: 2
          },
          1200:{
            items: 3
          }
        }
      });
    }


/* 6. Nice Selectorp  */
  var nice_Select = $('select');
    if(nice_Select.length){
      nice_Select.niceSelect();
    }

/* 7.  Custom Sticky Menu  */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {

function scrollFunction() {
    var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
} else {
    document.getElementById("navbar").style.top = "-150px";
}
prevScrollpos = currentScrollPos;
}
if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
  $(".header-sticky").addClass("sticky-bar");
} else {
  $(".header-sticky").removeClass("sticky-bar");
}
}





/* 8. sildeBar scroll */
    $.scrollUp({
      scrollName: 'scrollUp', // Element ID
      topDistance: '300', // Distance from top before showing element (px)
      topSpeed: 300, // Speed back to top (ms)
      animation: 'fade', // Fade, slide, none
      animationInSpeed: 200, // Animation in speed (ms)
      animationOutSpeed: 200, // Animation out speed (ms)
      scrollText: '<i class="fas fa-level-up-alt"></i>', // Text for element
      activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });


/* 9. data-background */
    $("[data-background]").each(function () {
      $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });




    
// 11. ---- Mailchimp js --------//  
    function mailChimp() {
      $('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();


// 12 Pop Up Img
    var popUp = $('.single_gallery_part, .img-pop-up');
      if(popUp.length){
        popUp.magnificPopup({
          type: 'image',
          gallery:{
            enabled:true
          }
        });
      }


// 13 Pop Up img Video
    var popUp = $('.popup-video');
      if(popUp.length){
        popUp.magnificPopup({
          type: 'iframe',
        });
      }



/* ----------------- Other Inner page Start ------------------ */


        // niceSelect js code
        $(document).ready(function () {
          $('select').niceSelect();
        });

        // menu fixed js code
        $(window).scroll(function () {
          var window_top = $(window).scrollTop() + 1;
          if (window_top > 50) {
            $('.main_menu').addClass('menu_fixed animated fadeInDown');
          } else {
            $('.main_menu').removeClass('menu_fixed animated fadeInDown');
          }
        });

        // $('.counter').counterUp({
        //   time: 2000
        // });

       
        
        // Search Toggle
        $("#search_input_box").hide();
        $("#search_1").on("click", function () {
          $("#search_input_box").slideToggle();
          $("#search_input").focus();
        });
        $("#close_search").on("click", function () {
          $('#search_input_box').slideUp(500);
        });

        //------- Mailchimp js --------//  
        function mailChimp() {
          $('#mc_embed_signup').find('form').ajaxChimp();
        }
        mailChimp();

        //------- makeTimer js --------//  
        function makeTimer() {

          //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
          var endTime = new Date("27 Sep 2019 12:56:00 GMT+01:00");
          endTime = (Date.parse(endTime) / 1000);
          var now = new Date();
          now = (Date.parse(now) / 1000);

          var timeLeft = endTime - now;

          var days = Math.floor(timeLeft / 86400);
          var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
          var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
          var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

          if (hours < "10") {
            hours = "0" + hours;
          }
          if (minutes < "10") {
            minutes = "0" + minutes;
          }
          if (seconds < "10") {
            seconds = "0" + seconds;
          }

          $("#days").html("<span>Days</span>" + days);
          $("#hours").html("<span>Hours</span>" + hours);
          $("#minutes").html("<span>Minutes</span>" + minutes);
          $("#seconds").html("<span>Seconds</span>" + seconds);

        }
      // click counter js
      (function() {
        window.inputNumber = function(el) {

          var min = el.attr('min') || false;
          var max = el.attr('max') || false;

          var els = {};

          els.dec = el.prev();
          els.inc = el.next();

          el.each(function() {
            init($(this));
          });

          function init(el) {

            els.dec.on('click', decrement);
            els.inc.on('click', increment);

            function decrement() {
              var value = el[0].value;
              value--;
              if(!min || value >= min) {
                el[0].value = value;
              }
            }

            function increment() {
              var value = el[0].value;
              value++;
              if(!max || value <= max) {
                el[0].value = value++;
              }
            }
          }
        }
      })();

      inputNumber($('.input-number'));
        setInterval(function () {
          makeTimer();
        }, 1000);
      

      $('.select_option_dropdown').hide();
      $(".select_option_list").click(function () {
        $(this).parent(".select_option").children(".select_option_dropdown").slideToggle('100');
        $(this).find(".right").toggleClass("fas fa-caret-down, fas fa-caret-up");
      });

      if ($('.new_arrival_iner').length > 0) {
        var containerEl = document.querySelector('.new_arrival_iner');
        var mixer = mixitup(containerEl);
      }


      $('.controls').on('click', function(){
        $(this).addClass('active').siblings().removeClass('active');
      }); 


/* ----------------- Other Inner page End ------------------ */



// Modal Activation
    $('.search-switch').on('click', function () {
      $('.search-model-box').fadeIn(400);
    });

    $('.search-close-btn').on('click', function () {
      $('.search-model-box').fadeOut(400, function () {
          $('#search-input').val('');
      });
    });
    
// Grid view and list View

    // $(document).ready(function() {
    //   $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    //   $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
    // });
//flashSale product
      // let product = $('.product-img');
      // let type = $('.product-img .type').val();
      // if(type==='flashSale'){
      //   console.log(type);
      //   $(product).addClass('flashSale')
      //   $(product).append('<style>.product-wrapper .single-product-items .product-img.flashSale::before{display:block !important;}</style>');
      // } 
      // if(type==='new'){
      //   console.log('2')
      //   $(product).addClass('new')
      //   $(product).append('<style>.product-wrapper .single-product-items .product-img.new::after{display:block !important;}</style>');
      // }
// checkbox for filter shop

    $('aside#filter  .filter__tree-content li label').click(function (){
      $('label').removeClass('checkbox-checked');
      $(this).toggleClass('checkbox-checked');
    })
  
    // //Top
    // $('aside#filter .filter__tree-content li label').click(function (){
    //   if($('#filterTop').parent('label').hasClass('checkbox-checked')){
    //      $('#categoryTop').css("opacity","1")
    //   }else {
    //     $('#categoryTop').css("opacity","0")

    //   }
    // })
    // //Bottom
    // $('aside#filter .filter__tree-content li label').click(function (){
    //   if($('#filterBottom').parent('label').hasClass('checkbox-checked')){
    //      $('#categoryBottom').css("opacity","1")
    //   }else {
    //     $('#categoryBottom').css("opacity","0")

    //   }
    // })
    // //Shoes
    // $('aside#filter .filter__tree-content li label').click(function (){
    //   if($('#filterShoes').parent('label').hasClass('checkbox-checked')){
    //      $('#categoryShoes').css("opacity","1")
    //   }else {
    //     $('#categoryShoes').css("opacity","0")

    //   }
    // })
    // //Accessories
    // $('aside#filter .filter__tree-content li label').click(function (){
    //   if($('#filterAccessories').parent('label').hasClass('checkbox-checked')){
    //      $('#categoryAccessories').css("opacity","1")
    //   }else {
    //     $('#categoryAccessories').css("opacity","0")

    //   }
    // })
    // //Watch
    // $('aside#filter .filter__tree-content li label').click(function (){
    //   if($('#filterWatch').parent('label').hasClass('checkbox-checked')){
    //      $('#categoryWatch').css("opacity","1")
    //   }else {
    //     $('#categoryWatch').css("opacity","0")

    //   }
    // })

    //filter xs
    $('#custom').click(function (){
      $('#filter').toggleClass('hidden-xs');
      $('#productWrapper').toggleClass('hidden-xs');
      $('footer').toggleClass('hidden-xs');
      $('#scrollUp').toggleClass('hidden-xs');
    })
    //sm
    $('#custom').click(function (){
      $('#filter').toggleClass('hidden-sm');
      $('#productWrapper').toggleClass('hidden-sm');
      $('footer').toggleClass('hidden-sm');
      $('#scrollUp').toggleClass('hidden-sm');
    })
  
    




    
    
    
  
 
 

//
})(jQuery);

