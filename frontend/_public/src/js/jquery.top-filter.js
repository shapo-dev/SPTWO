;(function($, window) {
var $html = $('html');
var topFilter = {
  isTopSelector: '.is--top',

  init: function() {
    var me = this;
    me.isTopSelector = $(me.isTopSelector);
    me.eventSubscriber(me.isTopSelector);
    me.overridePlugin();
  },

  eventSubscriber: function(selector) {
    var self = this;

    StateManager.addPlugin('.filter--trigger', 'swOffcanvasMenu', {
            leftMenuCls: 'is--top'
        }, ['xs', 's']);

  },
  overridePlugin: function() {
    var self = this;

    $.overridePlugin('swFilterComponent', {
      toggleCollapse: function() {
            var me = this,
                shouldOpen = !me.$el.hasClass(me.opts.collapseCls);

            if (me.$el.hasClass('is--disabled')) {
                me.close(false);
                return;
            }

            if (shouldOpen) {
                me.open(false);
            } else {
                me.close(true);
            }

            $.publish('plugin/swFilterComponent/onToggleCollapse', [ me, shouldOpen ]);
        },
        close: function(data) {
           var me = this;
           if(data){
             me.$el.removeClass(me.opts.collapseCls);
           }

           $.publish('plugin/swFilterComponent/onClose', [ me ]);
       },
       setDisabledClass: function($element, disabled) {
            $element.removeClass('is--disabled');
            if (disabled) {
                $element.addClass('is--disabled');
            }
        },
        getCheckedElements: function($elements) {
            var actives = [], me = this;

            $elements.each(function(index, $element) {
                $element.parent().next('label').removeClass('is--enabled');
                if (me.isChecked($element)) {
                    $element.parent().next('label').addClass('is--enabled');
                    actives.push($element);
                }
            });
            return actives;
        },
    });
    $.overridePlugin('swListingActions', {
      updateFilterCloseButton: function (totalCount) {
           var filterCount = Object.keys(this.activeFilterElements).length;

           if (totalCount > 0) {
               this.$closeFilterOffCanvasBtn.html(this.closeFilterOffCanvasBtnTextWithProducts.replace('%s', totalCount) + this.opts.closeFilterOffCanvasBtnIcon);

               $.publish('plugin/swListingActions/updateFilterCloseBtnWithProductsCount', [this, totalCount]);
           } else {
               this.$closeFilterOffCanvasBtn.html(this.closeFilterOffCanvasBtnText);

               $.publish('plugin/swListingActions/updateFilterCloseBtnDefault', [this]);
           }

             this.updateFilterTriggerButton(totalCount);

       },
       updateFilterTriggerButton: function (activeFilterCount) {
            this.$filterTriggerIcon.html(activeFilterCount);

            $.publish('plugin/swListingActions/onUpdateFilterTriggerButton', [this, activeFilterCount]);
        },

    });

  },


};

  topFilter.init();

})(jQuery, window);
