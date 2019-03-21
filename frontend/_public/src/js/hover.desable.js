;(function($, window, document) {

    var hoverDisable = {

        init: function() {
			var me = this;

			me.onTouch();

		},

		onTouch:function(){
            function hasTouch() {
            return 'ontouchstart' in document.documentElement
                   || navigator.maxTouchPoints > 0
                   || navigator.msMaxTouchPoints > 0;
            }

            if (hasTouch()) { // remove all :hover stylesheets
                try { // prevent exception on browsers not supporting DOM styleSheets properly
                    for (var si in document.styleSheets) {
                        var styleSheet = document.styleSheets[si];
                        if (!styleSheet.rules) continue;

                        for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                            if (!styleSheet.rules[ri].selectorText) continue;

                            if (styleSheet.rules[ri].selectorText.match(':hover')) {
                                styleSheet.deleteRule(ri);
                            }
                        }
                    }
                } catch (ex) {}
            }

        },


        };


    $(document).ready(function() {
        if(window.StateManager.isCurrentState('s') || window.StateManager.isCurrentState('xs')) {
            hoverDisable.init();
        }
    });

})(jQuery, window, document);
