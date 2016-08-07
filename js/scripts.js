(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// testimonials slider
		var testimonials = $('#testimonials .wrapper');
		testimonials.owlCarousel({
			items:1,
			//loop:true,
			margin:10,
			autoplay:true,
			autoplayTimeout:7000,
			autoplayHoverPause:true
		});
		$('.play').on('click',function(){
			testimonials.trigger('autoplay.play.owl',[1000]);
		});
		$('.stop').on('click',function(){
			testimonials.trigger('autoplay.stop.owl');
		});

		// equal height
		$.fn.equalHeight = function(){
			var $element = $('#associations, #welcome');
			var height = 0;
			$element.each(function () {
				if ($(this).height() > height) {
					height = $(this).height();
				}
			});

			$element.height(height);
		};

		$.fn.equalHeightContent = function(){
			var $element = $('.sidebar, .main_content');
			var height = 0;
			$element.each(function () {
				if ($(this).height() > height) {
					height = $(this).height();
				}
			});

			$element.height(height);
		};

		$.fn.equalHeight();
		$.fn.equalHeightContent();

		//responsive youtube videos
		var allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com']");
		var	fluidEl = $(".wrapper p");

		allVideos.each(function() {
			$(this).data('aspectRatio', this.height / this.width).removeAttr('height').removeAttr('width');
		});

		$(window).resize(function() {
			var newWidth = fluidEl.width();
			allVideos.each(function() {
				$(this).width(newWidth).height(newWidth * $(this).data('aspectRatio'));
				});
		}).resize();
		
	});
	
})(jQuery, this);
