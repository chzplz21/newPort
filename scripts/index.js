var $ = jQuery;

$(document).ready(function($){

	var i = 0;
	var colors = ["teal", "red", "blue", "yellow", "green", "purple"];
	var textColors = ["tealText", "redText", "blueText", "yellowText", "greenText", "purpleText"];
	setInterval(change, 6000);
	

	function change() {
		console.log("hey");
		
		$(".topCircle").removeClass(colors[i]);
		
		
		
		$(".navBox").removeClass(textColors[i]);
	
		console.log(colors[i]);
		
		if (i + 1 < colors.length ) {
			i++;

		}
		
		else {
			i=0;
		}
	$(".topCircle").addClass(colors[i]);
	$(".navBox").addClass(textColors[i])
		
	
	$(".topCircle").addClass('rotateAnimation');
	$(".topCircle").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
     $(this).removeClass("rotateAnimation");
	});
		
	}
	
	if ($("#textBlock").css("float") != "none" ) {
		var VideoHeightInit = $(".video").height();
		$("#textBlock").css("height", VideoHeightInit);
		}
		
	else {
		$("#textBlock").css("height", "auto");
		 $("#textBlock").css("overflow", "hidden");
	}
	
	$(window).resize(function(){
	
	
	if ($("#textBlock").css("float") != "none" ) {
			 
		var VideoHeight = $(".video").height();
		 $("#textBlock").css("height", VideoHeight);
		 $("#textBlock").css("overflow", "scroll");
		//var textHeight = $(".").height();
	
	}
	
	else if ($("#textBlock").css("float") == "none" )  {
		
		$("#textBlock").css("height", "auto");
		
		 $("#textBlock").css("overflow", "hidden");
		//var textHeight = $(".").height();
		
		
			
	}
	
		});
	
});