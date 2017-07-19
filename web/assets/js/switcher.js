/*-----------------------------------------------------------------------------------
/* Styles Switcher
-----------------------------------------------------------------------------------*/

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();


jQuery(document).ready(function($) {
	

		$("ul.colors .color1" ).click(function(){
			$("#color" ).attr("href", "assets/css/colors/default.css" );
			return false;
		});
		
		$("ul.colors .color2" ).click(function(){
			$("#color" ).attr("href", "assets/css/colors/orange.css" );
			return false;
		});
		
		$("ul.colors .color3" ).click(function(){
			$("#color" ).attr("href", "assets/css/colors/alizarin.css" );
			return false;
		});

		$("ul.colors .color4" ).click(function(){
			$("#color" ).attr("href", "assets/css/colors/emerald.css" );
			return false;
		});

		$("ul.colors .color5" ).click(function(){
			$("#color" ).attr("href", "assets/css/colors/green-see.css" );
			return false;
		});
		
		$("ul.colors .color6" ).click(function(){
			$("#color" ).attr("href", "assets/css/colors/peter-river.css" );
			return false;
		});

		$("ul.colors .color7" ).click(function(){
			$("#color" ).attr("href", "assets/css/colors/turquoise.css" );
			return false;
		});
		$("ul.colors .color8" ).click(function(){
			$("#color" ).attr("href", "assets/css/colors/sun-flower.css" );
			return false;
		});

		/*switcher color select placement et mouvement*/
		$("#color-style-switcher .bottom a.settings").click(function(e){
			e.preventDefault();
			var div = $("#color-style-switcher");
			if (div.css("right") === "-189px") {
				$("#color-style-switcher").animate({
					right: "0px"
				}); 
			} else {
				$("#color-style-switcher").animate({
					right: "-189px"
				});
			}
		})
                /*switcher login select placement et mouvement*/
                $("#conexion .bottom a.settings").click(function(e){
			e.preventDefault();
			var div = $("#conexion");
			if (div.css("right") === "-189px") {
				$("#conexion").animate({
					right: "0px"
				}); 
			} else {
				$("#conexion").animate({
					right: "-189px"
				});
			}
		})
		
		$("ul.colors li a").click(function(e){
			e.preventDefault();
			$(this).parent().parent().find("a").removeClass("active");
			$(this).addClass("active");
		})
				
	});