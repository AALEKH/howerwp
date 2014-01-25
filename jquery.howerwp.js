(function($) {

        $.fn.slideshoWp = function( options ) {

                // Establish our default settings
                var settings = $.extend({
                        size         : 'large',
                        color        : '#AADBA0'
                }, options);

                return this.each( function() {
                        
                        $('#fullscreenslider').css( 'border-color', settings.color );
                        if ( settings.size == 'small' ) {
                          $('#fullscreenslider').css( 'width', '400px' );
                          $('#fullscreenslider').css( 'height', '250px' );
                          $('#image-of-fullscreenslider').css( 'width', '400px' );
                          $('#image-of-fullscreenslider').css( 'height', '250px' );
                          $('#myFunctionbacksmaller').css( 'margin-top', '200px' );
                          $('#myFunctionbacksmaller').css( 'margin-left', '368px' );
                          $('#myFunction').css( 'margin-top', '220px' );
                        }
                  
                        var images = [];
var a=$('img#image-of-fullscreenslider').length;
var b=0;

while ( b < a ){
  images[b]=$('img#image-of-fullscreenslider').eq(b);
  b=b+1;
}
b=0;

function myFunction(){
 
 if( b == '0' ){
  images[b+1].css("visibility","visible");
  images[b].css("visibility","hidden");
  b=b+1; 
 }
 else if ( b == a-1){
  images[0].css("visibility","visible");
  images[b].css("visibility","hidden");
  b=0;  
 }
 else{
  images[b+1].css("visibility","visible");
  images[b].css("visibility","hidden");
  b=b+1;  
  }
  
}

function myFunctionback(){
 
 if( b == '0' ){
  images[a-1].css("visibility","visible");
  images[b].css("visibility","hidden");
  b=a-1; 
 }
 else if ( b == a-1){
  images[b-1].css("visibility","visible");
  images[b].css("visibility","hidden");
  b=b-1;  
 }
 else{
  images[b-1].css("visibility","visible");
  images[b].css("visibility","hidden");
  b=b-1;  
  }
  
}
                });

        };

}(jQuery));
