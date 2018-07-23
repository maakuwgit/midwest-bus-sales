/**
* logo-grid JS
* -----------------------------------------------------------------------------
*
* All the JS for the logo-grid component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'll-logo-grid',


    selector : function() {
      return '.' + this.className;
    },


    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;
      var gallery = $("."+_this.className);

        gallery.each(function(){

          $(this).find('.logo-grid__logos').slick({
            infinite: true,
            arrows: false,
            rows: 3,
            slidesPerRow: 5,
            dots: true
          });

        });
    },


    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'logo-grid', COMPONENT );
} )( app );
