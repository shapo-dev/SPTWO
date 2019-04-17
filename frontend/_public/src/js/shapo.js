/*!
 * Custom Config v1.0.1
 * Developer 2018 SHAPO, Amir Fayaz.
 * Licensed under http://www.apache.org/licenses/LICENSE-2.0
 */



(function($, window) {
// LANGUAGE
var lang = $('html').attr('lang');
var langcode = [];
console.log("LANGUAGE: " +  lang);

// MASTER



 // OFFERS TIMER
    var $clock = $('#clock'),
        eventTime = moment('22-04-2019 23:59:59', 'DD-MM-YYYY HH:mm:ss').unix(),
        currentTime = moment().unix(),
        diffTime = eventTime - currentTime,
        duration = moment.duration(diffTime * 1000, 'milliseconds'),
        interval = 1000;

    // if time to countdown
    if(diffTime > 0) {

        // Show clock
        $clock.show();

        var $d = $('<div class="days" ><span></span></div>').appendTo($clock),
            $h = $('<div class="hours" ><span></span></div>').appendTo($clock),
            $m = $('<div class="minutes" ><span></span></div>').appendTo($clock),
            $s = $('<div class="seconds" ><span></span></div>').appendTo($clock);

        setInterval(function(){

            duration = moment.duration(duration.asMilliseconds() - interval, 'milliseconds');
            var d = moment.duration(duration).days(),
                h = moment.duration(duration).hours(),
                m = moment.duration(duration).minutes(),
                s = moment.duration(duration).seconds();

            d = $.trim(d).length === 1 ? '0' + d : d;
            h = $.trim(h).length === 1 ? '0' + h : h;
            m = $.trim(m).length === 1 ? '0' + m : m;
            s = $.trim(s).length === 1 ? '0' + s : s;

            // show how many hours, minutes and seconds are left
            $d.text(d + ' Tage');
            $h.text(h + ' Std.');
            $m.text(m + ' Min.');
            $s.text(s + ' Sek.');

        }, interval);

    }




// ADD SALE CLASS
$("[title|='SALE']").addClass('sale');

// EXIT INTENT
var bodyClass = '.is--ctl-index.is--act-index' ;
if ( $('body').is(bodyClass) ) {
  $.stickToMe({
    layer: '#stickLayer',      
    fadespeed: 400,
    trigger: ['top'],
    maxtime : 0,
    mintime : 0,
    delay: 0,
    interval: 0,
    maxamount : 1,
    cookie : true,
    bgclickclose : true,
    escclose : true,
    onleave : function (e) {},
    disableleftscroll : true  // chrome disable   
  });
}



// OPEN FIRST 3 FILTERS
var bodyClass = '.is--ctl-listing.is--act-index' ;
if ( $('body').is(bodyClass) ) {
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel" ).removeClass( "is--collapsed" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(1)" ).addClass( "is--collapsed" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(2)" ).addClass( "is--collapsed" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(3)" ).addClass( "is--collapsed" );



// STICKY .shop--navigation
var stickyOffset = $('nav.navigation-main').offset().top + 50;
$(window).scroll(function(){
  var sticky = $('nav.navigation-main'),
      scroll = $(window).scrollTop();
    
  if (scroll >= stickyOffset) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
  });


// STICKY .filter--navigation
  var stickyOffset = $('.listing--sidebar').offset().top + 50;
  $(window).scroll(function(){
    var sticky = $('.listing--sidebar'),
        scroll = $(window).scrollTop();
      
    if (scroll >= stickyOffset) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });
console.log(bodyClass);
}


// FEAT SLIDER
$('.slick--content-detail').slick({
  dots: false,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 3000,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 478,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});






// BACK TO TOP
$(window).scroll(function() {
    $(this).scrollTop() >= 200 ? $(".backToTop").fadeIn() : $(".backToTop").fadeOut()
    }),
$(".backToTop").click(function() {
    $("body,html").animate({
            scrollTop: 0
    }, 400)
});  





        //FOCUS INPUT FIELD -- TODO
        var mailField = document.getElementById('FormField_EmailAddress');
        $(mailField).attr('autofocus', 'true');
        $(mailField).focus();
        //console.log(mailField);

        // var firstname = document.getElementById('firstname');
        // $(firstname).attr('autofocus', 'true');
        // $(firstname).focus();
        // console.log(firstname);



console.log('SHAPO ' + 'init')
})(jQuery, window);