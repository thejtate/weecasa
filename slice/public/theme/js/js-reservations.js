'use strict';

(function ($) {

  if (typeof Drupal != 'undefined') {
    Drupal.behaviors.projectName = {
      attach: function attach(context, settings) {
        init();
      },

      completedCallback: function completedCallback() {
        // Do nothing. But it's here in case other modules/themes want to override it.
      }
    };
  }

  $(function () {
    if (typeof Drupal == 'undefined') {
      init();
    }
  });

  $(window).load(function () {
    //$('.front #site-header').sticky({
    //  stickyIfPosition: 'bottom'
    //});
    //$('body:not(.front) #site-header').sticky({
    //  stickyIfPosition: 'top'
    //});
    //initScroll();
    //initQutesSection();
  });

  function init() {
    //initShowModal();
    //initSlickSliderLocations();
    initSlickSlider();
    //initTabs();
    //initTabsLocation();
    //initColumnizer();
    //initMobileNav();
    //initElmsAnimation();
    //initTileAnimation();
    //initScrollMagic();
    //initSelect();
  }

  function initSelect() {
    $('select').select2({
      width: 'full',
      minimumResultsForSearch: Infinity
    });
  }

  function initScrollMagic() {
    if (document.documentElement.classList.contains('tablet') || document.documentElement.classList.contains('mobile') || document.documentElement.classList.contains('parallax-processed')) {

      return;
    }
    document.documentElement.classList.add('parallax-processed');

    var parallaxItems = document.querySelectorAll('.section-top, .section-newsletter, .section-weekend-stays, .section-provides, .section-info, .section-location');

    if (!parallaxItems.length) return;

    var divImg = [];
    var controller = new ScrollMagic.Controller({ globalSceneOptions: { triggerHook: "1" } });

    for (var i = 0; i < parallaxItems.length; i++) {
      var currentDivImg = parallaxItems[i].querySelectorAll(".bg");

      if (!currentDivImg.length) continue;

      for (var y = 0; y < currentDivImg.length; y++) {
        newScene(parallaxItems[i], currentDivImg[y]);
      }
    }

    window.addEventListener('resize', function () {
      for (var i = 0; i < divImg.length; i++) {
        divImg[i][1].duration(window.innerHeight + divImg[i][0].offsetHeight);
      }
    });

    function newScene(item, currentImage) {
      divImg.push([item, new ScrollMagic.Scene({ triggerElement: item, duration: window.innerHeight + item.offsetHeight }).setTween(currentImage, { y: "300", ease: Linear.easeNone }).addTo(controller)]);
    }
  }

  function initTileAnimation() {
    var $html = $('html');
    if (!$html.hasClass('desktop')) return;

    var $wrap = $('.section-locations');
    if (!$wrap.length) return;

    var options = {

      movement: {
        imgWrapper: {
          rotation: { x: -5, y: 10, z: 0 },
          reverseAnimation: { duration: 1200, easing: 'easeOutExpo' }
        },
        caption: {
          translation: { x: 20, y: 20, z: 0 },
          reverseAnimation: { duration: 200, easing: 'easeOutQuad' }
        },
        overlay: {
          translation: { x: 5, y: -5, z: 0 },
          rotation: { x: 0, y: 0, z: 6 },
          reverseAnimation: { duration: 1000, easing: 'easeOutQuad' }
        },
        lines: {
          translation: { x: 20, y: 20, z: 0 },
          reverseAnimation: { duration: 200, easing: 'easeOutQuad' }
        }
      }
    };

    var $items = document.querySelectorAll('.section-locations .items .item');

    for (var i = 0, len = $items.length; i < len; i++) {
      new TiltFx($items[i], options);
    }
  }

  function initElmsAnimation() {

    var $body = $('body');

    if ($body.hasClass('scrollRevealActive')) return;

    $body.addClass('scrollRevealActive');

    window.sr = ScrollReveal({
      duration: 1000,
      scale: 1,
      easing: 'ease',
      origin: 'left',
      mobile: true
    });

    sr.reveal('.section-book-now .inner-wrap', {
      duration: 0,
      distance: '0',
      opacity: 1,
      scale: 0,
      viewFactor: 0.8,
      afterReveal: function afterReveal() {
        document.querySelector('.section-book-now .btn.style-b').classList.add('active');
      }
    });

    sr.reveal('.front .section-book-now .inner-wrap', {
      duration: 0,
      distance: '0',
      opacity: 1,
      scale: 0,
      viewFactor: 1,
      afterReveal: function afterReveal() {
        document.querySelector('.section-book-now .btn.style-b').classList.add('active');
      }
    });

    sr.reveal('.section-book-now .info .items .item', {
      duration: 1300,
      distance: '0',
      origin: 'top',
      rotate: { x: 0, y: 100, z: 0 }
    }, 200);

    sr.reveal('.site-header .navigation .content>.menu>li, .site-header .btn, .site-header .link-inner', {
      duration: 1300,
      delay: 700,
      distance: '50px',
      container: document.querySelector('#site-header')
    }, 100);

    sr.reveal('.section-top .title .inner-wrap', {
      duration: 1300,
      distance: '50px',
      origin: 'top',
      scale: 0
    });

    sr.reveal('.front .section-top .title-a .img', {
      duration: 1700,
      distance: '0',
      origin: 'top',
      scale: 0,
      rotate: { x: 0, y: 100, z: 0 }
    });

    sr.reveal('.front .section-top .title .inner-wrap', {
      duration: 1700,
      distance: '0',
      origin: 'top',
      scale: 0,
      rotate: { x: 0, y: 100, z: 0 }
    });

    sr.reveal('.section-weekend-stays, .section-slider, .site-footer .container, .section-newsletter, .section-location .anim-wrap', {
      duration: 1300,
      distance: '30px',
      origin: 'bottom'
    });

    sr.reveal('.section-locations .items .item .anim-wrap', {
      duration: 1500,
      distance: '0',
      rotate: { x: 0, y: 100, z: 0 }
    }, 400);

    sr.reveal('.section-quotes .tabs-nav li', {
      duration: 1300,
      distance: '50px'
    }, 100);

    sr.reveal('.content-wrapper h2', {
      duration: 1500,
      distance: '0'
    });

    sr.reveal('.content-wrapper .btn.style-b, .section-middle .btn.style-b', {
      duration: 1300,
      distance: '0',
      rotate: { x: 0, y: 100, z: 0 },
      origin: 'bottom',
      viewFactor: 1
    });

    sr.reveal('.text-small, .text-large, .text-x-middle , .text-middle, .text-x-small, .section-provides .col, .section-directions .address, .section-directions .desc, .section-directions h4, .section-info', {
      duration: 1300,
      distance: '30px',
      origin: 'bottom',
      viewFactor: 0.1
    });

    sr.reveal('.section-need-to-bring .items .item .ico', {
      duration: 2000,
      distance: '0',
      rotate: { x: 0, y: 100, z: 0 }
    }, 500);

    sr.reveal('.camp .tabs-nav .item', {
      duration: 1300,
      distance: '0',
      rotate: { x: 0, y: 100, z: 0 },
      origin: 'bottom',
      viewFactor: 0.8
    }, 100);

    sr.reveal('.camp .tabs-content .col', {
      duration: 1300,
      distance: '30px',
      origin: 'bottom'
    }, 500);

    sr.reveal('.camp .tabs-content .ico', {
      duration: 1300,
      distance: '0',
      rotate: { x: 0, y: 100, z: 0 },
      origin: 'bottom',
      viewFactor: 1
    });

    sr.reveal('.section-top .btn', {
      duration: 1000,
      distance: '0',
      delay: 1300,
      opacity: 1,
      scale: 0,
      easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
      rotate: { x: 0, y: 720, z: 0 }
    });
  }

  function initMobileNav() {
    var $navWrapper = $('.navigation');

    if (!$navWrapper.length) return;

    var $btn = $navWrapper.find('.btn-nav');
    var $logoMobile = $navWrapper.find('.logo-top a').clone();

    if ($logoMobile.length) {
      $logoMobile.addClass('logo-mobile');
      $navWrapper.after($logoMobile);
    }

    $btn.on('click touch', checkNav);

    $('html').on('click touch', function (e) {
      if (!$(e.target).closest($navWrapper).length && $navWrapper.hasClass('nav-active')) {
        $navWrapper.removeClass('nav-active');
      }
    });

    function checkNav(e) {
      e.preventDefault();
      $navWrapper.toggleClass('nav-active');
    }
  }

  function initColumnizer() {
    var $el = $('.section-provides .columnizer');

    if (!$el.hasClass('processed')) {
      $el.addClass('processed');

      $el.columnize({
        columns: 2,
        lastNeverTallest: true
      });
    }
  }

  function initScroll() {
    var $wrap = $('.camp');

    if (!$wrap.length) return;

    var $btnNav = $wrap.find('.tabs-nav .item a');

    var $body = $('body, html');
    var prefix = 'block-';
    var prefixContent = 'item-';
    var speed = 600;

    $btnNav.on('click touch', function (e) {
      e.preventDefault();

      window.location.hash = $(this).attr('href').replace('#', '');
      animation();
    });

    if (window.location.hash && ~window.location.hash.indexOf('#' + prefix)) {

      if ($('body').hasClass('node-type-events')) {
        animation();
      }
    }

    function animation() {
      var val = window.location.hash.replace('#' + prefix, '');
      var $target = $('#' + prefixContent + val);

      if (!$target.length) return;

      $body.animate({ scrollTop: $target.offset().top }, speed);
      console.log($target.offset().top);
    }
  }

  function initTabsLocation() {
    var $wrapper = $('.section-sub-nav');

    if(!$wrapper.length) return;

    var $nav = $wrapper.find('.nav li');
    var $content = $('.sub-nav-content .nav-item');

    if(!$content.length) return;

    var prefixNav = 'tab-';
    var prefixEl = 'tab-c-';
    var current;

    for(var i = 0; i < $nav.length; i++) {
      var link = $nav.eq(i).find('a');
      var href = link.text().trim().replace(/\s/g, '-').toLocaleLowerCase();

      link.attr('href', '#' + prefixNav + href);
      $content.eq(i).attr('id', prefixEl + href);
    }

    if(window.location.hash && ~window.location.hash.indexOf(prefixNav)) {
      isHash();

      $(window).on('load', function() {
        $('html, body').animate({
          scrollTop: $wrapper.offset().top - 20
        }, 600);
      });
    } else {
      setActive(0);
    }

    $(window).on('hashchange', function() {
      isHash();
    });

    function isHash() {
      if(!~window.location.hash.indexOf(prefixNav)) return;

      var $el = $('#' + prefixEl + window.location.hash.replace('#' + prefixNav, ''));

      if($el.length) {
        setActive($el.index());
      }
    }

    function setActive(index) {
      if(index == current) return;

      current = index;

      $nav.removeClass('active').eq(current).addClass('active');
      $content.removeClass('active').eq(current).addClass('active');

      var currentPosition = $(window).scrollTop();
      var $htmlWrap = $('html, body');

      $htmlWrap.scrollTop(currentPosition + 1);
      $htmlWrap.scrollTop(currentPosition);
    }
  }

  function initQutesSection() {
    var $wrapper = $('.section-quotes');
    if (!$wrapper.length) return;

    $(window).on('resize', function () {
      setMargin();
    });

    setMargin();

    function setMargin() {
      var $navUl = $wrapper.find('.tabs-nav ul');
      var $navLiFirst = $wrapper.find('.tabs-nav li:first-child').innerWidth();
      $navUl.css('margin-left', -$navLiFirst/2);
    }
  }

  function initTabs() {
    var $body = $('body');

    if ($body.hasClass('slickSliderQuotesActive')) return;
    $body.addClass('slickSliderQuotesActive');

    var $wrapper = $('.section-quotes');
    if (!$wrapper.length) return;

    var $nav = $wrapper.find('.tabs-nav li');
    var $navArrow = $wrapper.find('.tabs-nav .arrow');
    var $content = $wrapper.find('.tabs-content .item');
    var current;

    $nav.find('a').on('click touchend', function (e) {
      e.preventDefault();

      setActive($(this).parent().index());
    });

    setActive(0);

    $(window).on('resize', function () {

      var $active = $wrapper.find('.tabs-nav li.active');
      setActive($active.index());
    });

    function setActive(index) {
      var navWith = $nav.outerWidth();
      $navArrow.css('left', navWith * index + navWith / 2 - 15);

      current = index;

      $nav.removeClass('active').eq(current).addClass('active');
      $content.removeClass('active').eq(current).addClass('active');
    }

    //var $mobileClone = $wrapper.find('.tabs-content').clone().addClass('mobile-only');
    //$wrapper.find('.container').append($mobileClone);
    //
    //$wrapper.find('.tabs-content.mobile-only').slick({
    //  dots: false,
    //  arrows: false,
    //  infinite: true,
    //  speed: 1000,
    //  slidesToShow: 1,
    //  slidesToScroll: 1,
    //  fade: true,
    //  adaptiveHeight: true,
    //  autoplay: true,
    //  autoplaySpeed: 3500,
    //});
  }

  function initSlickSliderLocations() {

    var $body = $('body');

    if ($body.hasClass('slickSliderLocationsActive')) return;
    $body.addClass('slickSliderLocationsActive');

    var $wrap = $('.front .section-locations');
    if (!$wrap.length) return;

    if($wrap.find('.slide-item').length > 1) {
      $wrap.addClass('add-dots');
    }

    $wrap.find('.slider').slick({
      dots: true,
      infinite: true,
      arrows: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      appendArrows: $('.slide-nav'),
      appendDots: $('.slide-nav'),
      adaptiveHeight: true,
      touchMove: false,
      swipe: false,
    });

    $(window).on('resize', function () {

      setTimeout(function() {
        var $currentSlide = $wrap.find('.slider > .slick-list > .slick-track > .slick-active').outerHeight();
        $wrap.find('.slider > .slick-list').height($currentSlide);
      }, 500);

    });

    $wrap.find('.items').slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: 500,
      slidesToShow: '#',
      slidesToScroll: '#',
      adaptiveHeight: true,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          variableWidth: true,
          dots: true,
          adaptiveHeight: true,
        }
      }]
    });
  }

  function initSlickSlider() {

    var $body = $('body');

    if ($body.hasClass('slickSliderActive')) return;
    $body.addClass('slickSliderActive');

    $('.section-slider .slider').slick({
      dots: false,
      infinite: true,
      arrows: true,
      centerMode: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<button type="button" class="slick-prev"><span>Previous</span></button>',
      nextArrow: '<button type="button" class="slick-next"><span>Next</span></button>',
      variableWidth: true,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      }]
    });
  }

  function initShowModal() {
    checkHash(window.location.hash);

    $(window).on('hashchange', function () {
      checkHash(window.location.hash);
    });

    $('.modal').on('hide.bs.modal', function () {
      var scrollTop = document.body.scrollTop;
      window.location.hash = '';
      document.body.scrollTop = scrollTop;
    });

    function checkHash(hash) {
      if (!hash) return;

      var $el = $(hash);

      if ($el.hasClass('b-modal')) {
        $el.modal('show');
      }
    }
  }

  window.removeMarketoDefaultStyles = function (form) {
    form.find('style').remove();
    form.removeAttr('style');
    form.find('.mktoFormRow').addClass('form-item');
    form.find('.mktoButtonRow').removeClass('mktoButtonRow').addClass('form-actions');
    form.find('button').addClass('form-submit');
    form.find('input, textarea, label, .mktoFormCol, .mktoButtonWrap, .mktoRequired').removeAttr('style');
    form.find('.mktoOffset, .mktoGutter, .mktoClear, .mktoLabel').remove();
    form.removeClass('mktoForm').addClass('mktoFormWithoutStyles');
  };

  window.changeMarketoDefaultBtnText = function (form, text) {
    form.find('button').text(text);
  };

  window.addTextBeforeBtn = function (form, text) {
    form.find('button').before('<div class="text-before-btn">' + text + '</div>');
  };

  window.successMessage = function (form, text) {
    form.hide();
    form.after('<div class="success-message">' + text + '</div>');
  };
})(jQuery);