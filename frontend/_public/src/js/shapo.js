(function($, window) {
// LANGUAGE
var lang = $('html').attr('lang');
var langcode = [];
console.log("LANGUAGE: " +  lang);

// ADD SALE CLASS
$("[title|='SALE']").addClass('sale');

// OPEN FIRST 3 FILTERS
if ( $('body').is('.is--ctl-listing.is--act-index') ) {
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel" ).removeClass( "is--collapsed" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(1)" ).addClass( "is--collapsed js-added" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(2)" ).addClass( "is--collapsed js-added" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(3)" ).addClass( "is--collapsed js-added" );
    //do something it does have the protected class!
    console.log('is--ctl-listing:' + true);
}

// STICKY .shop--navigation
if ($('body.is--ctl-listing.is--act-index').length > 0) { 
var stickyOffset = $('nav.navigation-main').offset().top + 50;
$(window).scroll(function(){
  var sticky = $('nav.navigation-main'),
      scroll = $(window).scrollTop();
    
  if (scroll >= stickyOffset) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
  });
}

// STICKY .filter--navigation
if ($('body.is--ctl-listing.is--act-index').length > 0) { 
    // it listing exists 
  var stickyOffset = $('.listing--sidebar').offset().top + 50;
  $(window).scroll(function(){
    var sticky = $('.listing--sidebar'),
        scroll = $(window).scrollTop();
      
    if (scroll >= stickyOffset) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });
}



// BACK TO TOP
$(window).scroll(function() {
    $(this).scrollTop() >= 200 ? $(".backToTop").fadeIn() : $(".backToTop").fadeOut()
    }),
$(".backToTop").click(function() {
    $("body,html").animate({
            scrollTop: 0
    }, 400)
});  

console.log('SHAPO ' + 'init')
})(jQuery, window);