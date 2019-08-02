(function ($) {
  "use strict";

  // Preloader (if the #preloader div exists)
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  // Initiate the wowjs animation library
  new WOW().init();

  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Smooth scroll for the navigation and links with .scrollto classes
  $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (! $('#header').hasClass('header-scrolled')) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.main-nav, .mobile-nav').length) {
          $('.main-nav .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.main-nav, .mobile-nav');
  var main_nav_height = $('#header').outerHeight();

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();
  
    nav_sections.each(function() {
      var top = $(this).offset().top - main_nav_height,
          bottom = top + $(this).outerHeight();
  
      if (cur_pos >= top && cur_pos <= bottom) {
        console.log($(this).attr('id'));
        main_nav.find('li').removeClass('active');
        main_nav.find('a[data-target='+$(this).attr('id')+']').parent('li').addClass('active');
      }
    });
  });

  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Porfolio
  $(window).on('load', function () {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item'
    });
    $('#portfolio-flters li').on( 'click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');
  
      portfolioIsotope.isotope({ filter: $(this).data('filter') });
    });
  });

  // Testimonials carousel
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1,
    autoplayTimeout: 10000
  });

  // Cookie notification
  var cookieTitle;
  var cookieText;
  var cookieOk;
  var cookieMore;
  if (window.location.pathname.match(/^\/en\/?/)) {
    cookieTitle = "This website is using cockies";
    cookieText = "We use cockies to ensure that we offer you an erotic experience. If you continue without changing your preferences, we will assume that you agree to receive all cockies on this website.";
    cookieOk = "Understood";
    cookieMore = "More info";
  } else {
    cookieTitle = "Diese Seite verwendet Cockies";
    cookieText = "Wir verwenden Cockies, um sicherzustellen, dass wir Ihnen ein erotisches Erlebnis bieten. Wenn Sie fortfahren, ohne Ihre Einstellungen zu ändern, gehen wir davon aus, dass Sie mit dem Erhalt aller Cockies auf dieser Website einverstanden sind.";
    cookieOk = "Verstanden";
    cookieMore = "Mehr Infos";
  }

  $(document).euCookieLawPopup().init({
    cookiePolicyUrl : "https://www.bsfrs.de/datenschutz",
    popupPosition : "bottomleft",
    popupTitle : cookieTitle,
    popupText : cookieText,
    buttonContinueTitle : cookieOk,
    buttonLearnmoreTitle : cookieMore,
    buttonLearnmoreOpenInNewWindow : true,
    agreementExpiresInDays : 30,
    autoAcceptCookiePolicy : false,
  });

})(jQuery);

