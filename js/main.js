	$(document).ready(function(){
		$('.carousel').carousel({
			interval: 2000,
			pause:hover
		});
	});



	$(document).ready(function(){
		var page_link = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
		$("nav .navbar-nav li a").each(function(){
			// console.log($(this).attr("href"));
			
			if($(this).attr("href") == page_link){
				// $(this).parent();
				// $(this).siblings().addClass()
				// $(this).parent().addClass()
				$(this).css("color", "red");
			}
				
		});
	});


	// =========== Mixitup ================




	$(document).ready(function(){

		$('[data-fancybox="gallery"]').fancybox({
			// Options will go here
			buttons : [ 
				"zoom",
				//"share",
				"slideShow",
				"fullScreen",
				//"download",
				"thumbs",
				"close"
			],
			loop:true,

			// protect pevents from downloading
			protect: true,

			// modal: true,

			// timer to hide options with an interval
			idleTime: 5,


			// Transition effect between slides
			//
			// Possible values:
			//   false            - disable
			//   "fade'
			//   "slide'
			//   "circular'
			//   "tube'
			//   "zoom-in-out'
			//   "rotate'
			//
			transitionEffect: "circular",
			
			// Custom CSS class for layout
			baseClass: "container-fluid",
			
		});
	});