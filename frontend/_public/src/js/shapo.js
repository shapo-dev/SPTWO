(function($, window) {
// LANGUAGE
var lang = $('html').attr('lang');
var langcode = [];
console.log("LANGUAGE: " +  lang);


window.StateManager //Führt JS aus, wenn Viewport wechselt von xs, s, m, l oder xl (Mobile - Desktop)

        // OffCanvas menu
        .addPlugin('*[data-offcanvas="true"]', 'swOffcanvasMenu', {
            fullscreen: true,//kann man auch auf false setzen
        },['xs', 's', 'm', 'l', 'xl'])
        .addPlugin('*[data-subcategory-nav="true"]', 'swSubCategoryNav', ['xs', 's', 'm', 'l', 'xl'])
;
jQuery( window ).load(function( $ ) {
  
});


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
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(1)" ).addClass( "is--collapsed js-added" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(2)" ).addClass( "is--collapsed js-added" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(3)" ).addClass( "is--collapsed js-added" );

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