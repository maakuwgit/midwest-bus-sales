/**
* customizables JS
* -----------------------------------------------------------------------------
*
* All the JS for the customizables component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'll-customizables',


    selector : function() {
      return '.' + this.className;
    },

    activateFeature: function(e) {
      var customizables = $(this).parents('.ll-customizables');

      $(this).addClass('active').siblings().removeClass('active');
      $(customizables).find('.customizables__block').removeClass('active');
      $(customizables).find('[data-trigger="'+$(this).attr('data-feature')+'"]').addClass('active');

    },

    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;

      $(this.selector).find('.customizables__feature_title').each(function(){

        $(this).on('click.activateFeature', _this.activateFeature);

      });

    },

    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'customizables', COMPONENT );
} )( app );
