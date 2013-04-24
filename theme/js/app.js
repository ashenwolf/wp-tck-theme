var stop_animation = false;
var current_frame = 0;

(function( $ ){
	$.fn.makeHotspot = function(options) {
		var settings = $.extend({}, options);

		//var insertItem = $("<div class=\"hs-wrap hs-loading\"></div>");
	 	//insertItem.append($("<img />").attr("src", settings["src"]));
		var insertItem = $(this);

		$(settings["hotspots"]).each(function(i, spot) {
			var holder = $("<div></div>")
					.addClass("hs-spot-object")
					.data("type", "spot")
					.data("x", spot.x)
					.data("y", spot.y)
					.data("width", 30)
					.data("height", 30)
					.data("popup-position", spot.popup)
					.data("visible", "visible")
					.data("tooltip-auto-width", "true");

			holder.append(
				$("<div data-frames='" + spot.frames + "'></div>")
					.addClass("animation-holder")
					.css("background", "url(" + spot.src + ") no-repeat left top")
					.css("width", spot.width)
					.css("height", spot.height)
				);

			insertItem.append(holder);
		});

		//this.html(insertItem);
		this.hotspot({ "show_on" : "mouseover" });

		$('.hs-spot-object').on('tooltip-show', function() {
			var holder = $(this).find('.animation-holder');
			$(this).find('.animation-holder').jani({ frameWidth: holder.width(), frameHeight: holder.height(), speed: 900, totalFrames: holder.data("frames"), loop: false, delay: 1000 });
			$(this).find('.animation-holder').jani.play();
			stop_animation = true;
		});

		$('.hs-spot-object').on('tooltip-hide', function() {
			stop_animation = false;
		})

		$("#title-box").text(settings.title);
		current_frame = 46;
	};
})(jQuery);


function initialize() {
  	var myLatlng = new google.maps.LatLng(50.4383, 30.357714);

    var mapOptions = {
      	center: myLatlng,
      	zoom: 16,
      	mapTypeId: google.maps.MapTypeId.ROADMAP,
      	disableDefaultUI: true,
	  	zoomControl: true,
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

	var marker = new google.maps.Marker({
	    position: myLatlng,
	    map: map,
	    title:"Наш отдел в ТЦ 4ROOM"
	});	        
}


function animateSpots() {
/*    var spots = {};
    $.each($(".hs-spot-object"), function (index, slide) {
      spots[index] = $(slide).find('.hs-spot-hot');
    });*/
	current_frame = 0;
    setInterval(function () {
      if (stop_animation && current_frame == 0) {
        return false;
      } // if

      if (current_frame < 10) {
        //spots[current_slide].css('background-position', 'center -' + (current_frame * 56) + 'px');
        $('.hs-spot-hot').css('background-position', 'center -' + (current_frame * 56) + 'px');
      } // if

      current_frame++;
      if (current_frame >= 50) {
        current_frame = 0;
      } // if
    }, 75);
}
