;(function($, window) {

    var listingNote = {
      wishlistSelector: '.apc--note-action',
      noteCheckedClass: 'ti ti-check',

      overridePlugin: function() {
          var self = this;

          $.overridePlugin('swAjaxWishlist', {
              animateElement: function ($target) {
                  var me = this,
                      $icon = $target.find('i'),
                      originalIcon = $icon[0].className,
                      $text = $target.find('.action--text'),
                      originalText = $text.html();

                  $target.addClass(me.opts.savedCls);
                  $icon.removeClass(originalIcon).addClass(self.noteCheckedClass);

                  window.setTimeout(function () {
                      $target.removeClass(me.opts.savedCls);
                      $icon.removeClass(self.noteCheckedClass).addClass(originalIcon);

                      $.publish('plugin/swAjaxWishlist/onAnimateElementFinished', [me, $target]);
                  }, me.opts.delay);

                  $.publish('plugin/swAjaxWishlist/onAnimateElement', [me, $target]);
              },
          });



      },

    };

    listingNote.overridePlugin();
})(jQuery, window);
