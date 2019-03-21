;(function($, window) {

    var searchTrigger = {
        
      triggerSelector: '.entry--search .entry--trigger',
        
      searchIconClass: 'ti-search',
        
      crossIconClass: 'ti-close',
        
      init: function() {
          var me = this;
          
          me.$searchTrigger = $(me.triggerSelector);
          
          me.eventSubscriber();
      },
        
      eventSubscriber: function() {
          var me = this;
          
          $.subscribe('plugin/swSearch/onOpenMobileSearch', function(){
              me.$searchTrigger.find('i').removeClass(me.searchIconClass).addClass(me.crossIconClass);
          });
          
          $.subscribe('plugin/swSearch/onCloseMobileSearch', function(){
              me.$searchTrigger.find('i').removeClass(me.crossIconClass).addClass(me.searchIconClass);
          });
      },
        
      overridePlugins: function() {
          var self = this;
          
          $.overridePlugin('swSearch', {
                onClickSearchEntry: function (event) {
                    var me = this,
                        $el = me.$el,
                        opts = me.opts;

                    $.publish('plugin/swSearch/onClickSearchEntry', [ me, event ]);

                    if (StateManager.isCurrentState('l') || StateManager.isCurrentState('xl')) {
                        return;
                    }

                    event.preventDefault();
                    event.stopPropagation();

                    $el.hasClass(opts.activeCls) ? me.closeMobileSearch() : me.openMobileSearch();
                },
          });
      },

    };
    
    searchTrigger.overridePlugins();
    
    $(document).ready(function(){
        searchTrigger.init();
    });

})(jQuery, window);
