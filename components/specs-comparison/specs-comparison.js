/**
* specs-comparison JS
* -----------------------------------------------------------------------------
*
* All the JS for the specs-comparison component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'll-specs-comparison',


    selector : function() {
      return '.' + this.className;
    },


    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;

    },


    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'specs-comparison', COMPONENT );
} )( app );
