jQuery(document).ready(function($){
  
  var urlBase = templateDir + '/images/'
  var isRetina = window.devicePixelRatio >= 1.2;
  var isMobile = false;
  var fixedElement;
  var imgPlaceholders;
  var fixedImgs;
  var $donate = $('#donate');
  var $donateBtn = $('#donate-btn');

  var checkMobile = function(){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      isMobile = true;
    }

    if( /iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
      $('*').each(function(){
        if ($(this).css('background-size') === 'cover') {
          $(this).addClass('no-cover');
        }
      });
    }

    // Debug
    // isMobile = true;
  }

  var retinafy = function(){
    $('*').each(function(){
      var bgImg = $(this).css('background-image');
      if (bgImg !== 'none') {
        $(this).css('background-image', bgImg.replace('.jpg', '@2x.jpg'))
      }
    })
  }

  var setupImages = function(){
    imgPlaceholders = $('.img-placeholder');
    if (isMobile) {
      imgPlaceholders.each(function(i,el){
        var imgName = 'url("' + urlBase + page + '-' + $(this).attr('id') + '.jpg")';
        $(el).css('background-image',imgName);
      })
    }
    else {
      imgPlaceholders.each(function(i,el){
        var $imgEl = $(document.createElement('div'));
        $imgEl.addClass('fixed-img');
        var imgName = 'url("' + urlBase + page + '-' + $(this).attr('id') + '.jpg")';
        $imgEl.css({'background-image':imgName, 
                    '-webkit-transform':'translate3d( 0, ' + $(this).offset().top - 100 + 'px, 0)',
                    '-ms-transform':'translate3d( 0, ' + $(this).offset().top - 100 + 'px, 0)',
                    'transform':'translate3d( 0, ' + $(this).offset().top - 100 + 'px, 0)'});
        $(el).html($imgEl);
      });
      fixedImgs = $('.fixed-img');
    }
  }

  var coverEffect = function(){
    var $cover = $('.cover');
    var $next = $cover.next();

    if (page === 'expeditions') {
      var $cover = $('#cover');
      var $h1 = $('h1');
      var range = 200;
      var newY = $(document).scrollTop() / $cover.outerHeight() * -range;
      $h1.css({'-webkit-transform':'translate3d( 0,' + newY + 'px, 0 )',
                 '-ms-transform':'translate3d( 0,' + newY + 'px, 0 )',
                 'transform':'translate3d( 0,' + newY + 'px, 0 )'});
    }
    else {
      if ($(document).scrollTop() <= $next.outerHeight()) {
        var newY = $(document).scrollTop() - $next.innerHeight();
        $next.css({'-webkit-transform':'translate3d( 0,' + newY + 'px, 0 )',
                 '-ms-transform':'translate3d( 0,' + newY + 'px, 0 )',
                 'transform':'translate3d( 0,' + newY + 'px, 0 )'});
      }
      else {
        $next.css({'-webkit-transform':'translate3d(0,0,0)',
                 '-ms-transform':'translate3d(0,0,0)',
                 'transform':'translate3d(0,0,0)'});
      }

      var $grid = $cover.find('.grid');
      var range = 200;
      var newY = $(document).scrollTop() / $cover.outerHeight() * -range;
      $grid.css({'-webkit-transform':'translate3d( 0,' + newY + 'px, 0 )',
                 '-ms-transform':'translate3d( 0,' + newY + 'px, 0 )',
                 'transform':'translate3d( 0,' + newY + 'px, 0 )'});
    }
  }

  var parallax = function(){
    imgPlaceholders.each(function(i,el){
      var $fixedImg = $($(el).children()[0]);

      var diff = $(document).scrollTop() + $(window).innerHeight() - $(el).offset().top;
      if (diff >= 0 && diff <= $fixedImg.outerHeight() + $(window).innerHeight()) {
        var ratio = diff / ($fixedImg.outerHeight() + $(window).innerHeight());
        var range = -80
        var newY = diff - $(window).innerHeight() + ratio * range - range/2
        $fixedImg.css({'visibility':'visible',
                       '-webkit-transform':'translate3d( 0, ' + newY + 'px, 0 )',
                       '-ms-transform':'translate3d( 0, ' + newY + 'px, 0 )',
                       'transform':'translate3d( 0, ' + newY + 'px, 0 )'});
      }
      else {
        $fixedImg.css('visibility','hidden');
      }
    });
  }

  var moveDonate = function(){
    var y = $(document).scrollTop();
    if ( ! $donate.hasClass('hidden') ) {
      $donate.css({ '-webkit-transform':'translate3d( 0, ' + y + 'px, 0 )',
                      '-ms-transform':'translate3d( 0, ' + y + 'px, 0 )',
                      'transform':'translate3d( 0, ' + y + 'px, 0 )'});
    }
  }

  var onScroll = function(e){
    if (!isMobile) {
      moveDonate();
      parallax();
      coverEffect();
    }
  }

  var onResize = function(e){
    onScroll();
  }

  var setupClicks = function(){
    $('#hide-donate').click(hideDonate);
    $('#donate-btn').click(showDonate);
    $('.cover').click(function(){
      $('html, body').animate({ scrollTop : $('.cover').outerHeight() - 20 }, 1000, 'easeOutExpo');
    });
  }

  var showDonate = function(e){
    $('#donate').removeClass('display-none')
    setTimeout(function(){
      $('#donate').removeClass('hidden')
      moveDonate();
    }, 10)
    $('.the-page').css('-webkit-filter','blur(0)');
    $('.the-page').css('-webkit-filter','blur(16px)');
  }
  var hideDonate = function(e){
    $('.the-page').css('-webkit-filter','blur(0)');
    $('#donate').addClass('hidden')
    setTimeout(function(){
      $('.the-page').css('-webkit-filter','');
      $('#donate').addClass('display-none')
    }, 1000)
  }

  checkMobile();
  setupImages();
  retinafy();  
  setupClicks();

  if(!isMobile)
    coverEffect();
  $(document).scroll(onScroll)
  $(window).resize(onResize)

});