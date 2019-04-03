(function($, window) {
// LANGUAGE
var lang = $('html').attr('lang');
var langcode = [];
console.log("LANGUAGE: " +  lang);

// ADD SALE CLASS
$("[title|='SALE']").addClass('sale');

// OPEN FIRST 3 FILTERS
if ( $('body').is('.pretty.awesome') ) {
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel" ).removeClass( "is--collapsed" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(1)" ).addClass( "is--collapsed js-added" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(2)" ).addClass( "is--collapsed js-added" );
  $( ".listing--sidebar .sidebar-filter .filter--container .filter-panel:nth-child(3)" ).addClass( "is--collapsed js-added" );
    //do something it does have the protected class!
    alert("i have the protected class");
}


console.log('SHAPO ' + 'init')
})(jQuery, window);