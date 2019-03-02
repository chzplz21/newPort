var $ = jQuery;

$(document).ready(function($){

    
    var ColorChanger  = (function() {
      
        var i = 0;
	    var colors = ["teal", "red", "blue", "yellow", "green", "purple"];
        var textColors = ["tealText", "redText", "blueText", "yellowText", "greenText", "purpleText"];
        var topCircle = $('.topCircle');
        var navBox =  $(".navBox");
       

        function change() {
	
            $(topCircle).removeClass(colors[i]);  
            $(navBox).removeClass(textColors[i]);
           
            if (i + 1 < colors.length ) {
                i++;
            }else {
                i=0;
            }
            $(topCircle).addClass(colors[i]);
            $(navBox).addClass(textColors[i]);
            
            $(topCircle).addClass('rotateAnimation');
            $(topCircle).bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
                $(this).removeClass("rotateAnimation");
            });
            
        }

   
      
        function init() {
            setInterval(change, 6000);
        }
      
        return {
          init: init
        };
      }());


      ColorChanger.init();


	
	
});