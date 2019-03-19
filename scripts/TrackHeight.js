var $ = jQuery;

$(document).ready(function($){

    
    var trackHeight  = (function() {
      
        var textBox = $("#textBlock");
        var dummy = $(".dummy");

        function setHeight() {
            if ($(textBox).css("float") != "none" ) {
                var dummyHeight = $(dummy).height();
                $(textBox).css("height", dummyHeight);
                }
                
            else {
                $(textBox).css("height", "auto");
                 $(textBox).css("overflow", "hidden");
            }
        }

        $(window).resize(function(){
	
	
            if ($(textBox).css("float") != "none" ) {
                     
                var dummyHeight = $(dummy).height();
                 $(textBox).css("height", dummyHeight);
                 $(textBox).css("overflow", "scroll");
                //var textHeight = $(".").height();
            
            }
            
            else if ($(textBox).css("float") == "none" )  {
                
                $(textBox).css("height", "auto");
                $(textBox).css("overflow", "hidden");
                //var textHeight = $(".").height();
                
                
                    
            }
            
        });


        function init() {
            setHeight();
        }
      
        return {
          init: init
        };
      }());


      trackHeight.init();


	
	
});