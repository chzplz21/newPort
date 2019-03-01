var $ = jQuery;

$(document).ready(function($){

    var TrackHeight  = (function() {

        var VideoHeightInit = $("#mainVid").height();
      
        
            VideoHeightInit = VideoHeightInit - 60;
        var textBlock = $("#textBlock");

        
        function setHeightStatic() {
        
            if ($(textBlock).css("float") != "none" ) {
                $(textBlock).css("height", VideoHeightInit);
                
                }
                
            else {
                $(textBlock).css("height", "auto");
                $(textBlock).css("overflow", "hidden");
            }

        }
        
       function resize() {
        
        
            if ($("#textBlock").css("float") != "none" ) {
                    
                var VideoHeight = $("#mainVid").height();
                console.log(VideoHeight);
                $("#textBlock").css("height", VideoHeight);
                $("#textBlock").css("overflow", "scroll");
                //var textHeight = $(".").height();
            
            }
            
            else if ($("#textBlock").css("float") == "none" )  {
                
                $("#textBlock").css("height", "auto");
                
                $("#textBlock").css("overflow", "hidden");
                //var textHeight = $(".").height();
                
                
                    
            }
        }

       
        // main init method
        function init() {
            setHeightStatic();
            $(window).resize(function(){
                resize();
                 
             });


        }
      
     
        return {
          init: init
        };

    }());

   // TrackHeight.init();


});