/* global jQuery */
/* global window */
(($) => {
	const COMMON = {
		init() {
			this.cacheDOM();

			$(window).on('resize', this.reCalcOnResize.bind(this));
		},
		cacheDOM() {
			this.$body = $('body');
			this.windowWidth = $(window).width();
		},
		reCalcOnResize() {
			this.windowWidth = $(window).width();
		},
	};

	const mainNavigation = {
		init() {
			this.$mainNavContainer = $('#site-navigation');
			this.$menuToggler = this.$mainNavContainer.find('.menu-toggle');
			this.$mainMenuContainer = this.$mainNavContainer.find('.menu-primary-container');
			this.$mainMenu = this.$mainNavContainer.find('#primary-menu');
			this.$menuToggler.on('click', this.toggleMenu.bind(this));
		},
		toggleMenu(e) {
			e.preventDefault();
			this.$mainMenuContainer.toggleClass('shown');
		},
	};

	$(() => {
		COMMON.init();
		mainNavigation.init();
	});

	// animation initialization
	var wow = new WOW(
	{
		boxClass: 'anim-cln',
		animateClass: 'animated',
		offset: 50,
		mobile: false,
		scrollContainer: null,    // optional scroll container selector, otherwise use window,
		resetAnimation: true,
	}
	);
	wow.init();

	// Append plus and minus buttons
	$('.quantity').prepend('<span class="minus">-</span>');
	$('.quantity').append('<span class="plus">+</span>');

	// Handle plus button click
	$(document).on('click', '.plus', function () {
		var input = $(this).prev('input');
		var currentVal = parseFloat(input.val());
		if (!isNaN(currentVal)) {
			input.val(currentVal + 1);
			input.trigger('change');
		}
	});

	// Handle minus button click
	$(document).on('click', '.minus', function () {
		var input = $(this).siblings('input[type="number"]');
		var currentVal = parseFloat(input.val());
		if (!isNaN(currentVal) && currentVal > 1) {
			input.val(currentVal - 1);
			input.trigger('change');
		}
	});

	// Re-add plus and minus buttons when cart is updated
	$(document).on('updated_cart_totals', function () {
		$('.quantity:not(:has(.plus))').prepend('<span class="minus">-</span>');
		$('.quantity:not(:has(.plus))').append('<span class="plus">+</span>');
	});

	// Trigger cart recalculation when quantity is changed
	$(document).on('change', '.quantity input[type="number"]', function () {
		$(document.body).trigger('woocommerce-cart-calculate-fees');
	});

	// back to top on button click
	$('.back-to-top a').on('click', function (e) {
		e.preventDefault();
		$("html, body").animate({
			scrollTop: 0
		}, 800);
	});

	//form focus and blur 
	$(window).on("load", function () {
		$('.gfield input:not(.gform_hidden)').each(function () {
			if ($(this).val().length) {
				$(this).parents('.gfield').addClass('is-focused');
			}
			else {
				$(this).parents('.gfield').removeClass('is-focused');
			}
		});
	});
	$('.ginput_container input').on('focus', function () {
		$(this).closest('.gfield').addClass('is-focused');
	});
	$('.ginput_container input').on('blur', function () {
		var value = $(this).val();
		if (value.length === 0) {
			$(this).closest('.gfield').removeClass('is-focused');
		} else {
			$(this).closest('.gfield').addClass('is-focused');
		}
	});

	//accordion faq init
	$('.accordion-list .title').on('click', function () {
		$('.accordion-list .content').slideUp().removeClass('content-open');
		$('.accordion-list .title h4').removeClass('icon-open');
		if ($(this).next().is(':hidden')) {
			$(this).next().slideDown().addClass('content-open');
			$(this).find('h4').addClass('icon-open');
		}
		else {
			$(this).next().slideUp().removeClass('content-open');
			$(this).find('h4').removeClass('icon-open');
		}
	});

	// class toggled in body on ham menu clicked 
	$('.menu-toggle').on('click', function () {
		$('body').toggleClass('shown');
		if ($('body').hasClass('shown')) {
			$('.menu-item-has-children').removeClass('menu-opened');
		}
	});

	// sub-menu open
	$('.dropdown').on('click', function () {
		$(this).parent().toggleClass('menu-opened');
	});

	$(document).ready(function () {
		$('.flex-viewport .woocommerce-product-gallery__image').each(function (i) {
			var $this = $(this);
			if (!$this.hasClass('video')) return;
			var galleryIndex = i;
			var imageSrc = $this.children('video').attr('data-src');
			$('.flex-control-thumbs li img')[galleryIndex].setAttribute('src', imageSrc);
		});
	})
})(jQuery);
