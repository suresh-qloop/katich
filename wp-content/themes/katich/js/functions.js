$(document).ready(function () {
	//start menu toggle
	// $('.menu-toggle, .menu-close').click(function(){
	//     $('nav').toggleClass('open');
	// });
	//end menu toggle
	//animations
	// $(".yellow-item, .sign-info-btn, .about-page-gallery").addClass("hidden").viewportChecker({
	// 	classToAdd: "visible animated fadeInRight",
	// 	offset: 250
	// });
	//end animations
	//start gallery
	// Fancybox.bind('[data-fancybox="gallery"]', {
	// Image: {
	// 	zoom: false,
	// 	thumbs:false,
	// 	slideshow:  false,
	// 	Toolbar: {
	// 	autoEnable: false,
	// 	},
	// },
	// });
	//end gallery
	//start intro slider
	// $('.intro-slider').slick({
	// 	infinite: true,
	// 	speed: 1300,
	// 	slidesToShow: 1,
	// 	adaptiveHeight: false,
	// 	dots:false,
	// 	arrows:true,
	// 	autoplay:true,
	// 	fade:false,
	// 	prevArrow: $('.prev'),
	// nextArrow: $('.next'),
	//   });
	var $slider = $('.intro-slider');

	if ($slider.length) {
		var currentSlide;
		var slidesCount;
		var sliderCounter = document.getElementById('slider__counter');

		var updateSliderCounter = function (slick, currentIndex) {
			currentSlide = slick.slickCurrentSlide() + 1;
			slidesCount = slick.slideCount;
			$(sliderCounter).text(currentSlide + '/' + slidesCount)
		};

		$slider.on('init', function (event, slick) {

			updateSliderCounter(slick);
		});

		$slider.on('afterChange', function (event, slick, currentSlide) {
			updateSliderCounter(slick, currentSlide);
		});

		$slider.slick({
			infinite: true,
			speed: 100,
			slidesToShow: 1,
			adaptiveHeight: false,
			// autoplayTimeout: 75000,
			dots: false,
			arrows: true,
			autoplay: true,
			fade: false,
			prevArrow: $('.prev'),
			nextArrow: $('.next'),
		});
	}
	//end intro slider
	//start image slider
	$('.image-slider').slick({
		infinite: true,
		speed: 100,
		slidesToShow: 2,
		adaptiveHeight: false,
		dots: false,
		arrows: true,
		autoplay: true,
		fade: false,
	});
	//end image slider

	//load more
	//   $(function () {
	//     $(".bottom-box").slice(0,4).addClass("show");
	//     $("#load").click(function (e) {
	//       e.preventDefault();
	//       $(".bottom-box:hidden").slice(0, 4).addClass("show");
	//       if ($(".bottom-box:hidden").length == 0) {
	//         $("#load").attr("disabled", true).addClass("disabled");
	//       }
	//     });
	//     if ($(".bottom-box").length == 0) {
	//       $("#load").attr("disabled", true).addClass("disabled");
	//     }
	//   });
	//   //end load more
	//   //start header scrolled
	$(window).scroll(function () {
		if ($(document).scrollTop() > 100) {
			$("header").addClass("scrolled");
		} else {
			$("header").removeClass("scrolled");
		}
	});

	//end header scrolled
}); //end document ready

jQuery(document).ready(function ($) {
	$('.add_to_cart_button').on('click', function (e) {
		e.preventDefault();
		var productName = $(this).closest('.product').find('.woocommerce-loop-product__title').text();
		var messageWrapper = $('.woocommerce-message');
		var message = messageWrapper.text().replace('“Kujundžuša (vrhunsko vino)”', productName);
		$('#added-product-name').text(productName);
		messageWrapper.html(message).show();
		$(this).trigger('woocommerce_added_to_cart');
	});
});
