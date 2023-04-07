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

	// back to top on button click
	$('.back-to-top a').on('click', function (e) {
		e.preventDefault();
		$("html, body").animate({
			scrollTop: 0
		}, 800);
	});

	//form focus and blur 
	$('.ginput_container input').on('focus', function () {
		$(this).closest('.gfield').addClass('is-focused');
	});
	$('.ginput_container input').on('blur', function () {
		var value = $(this).val();
		console.log(value)
		// $(this).closest('.gfield').removeClass('is-focused');
		if (value.length) {
			$(this).closest('.gfield').addClass('is-focused');
		}else {
			$(this).closest('.gfield').removeClass('is-focused');
		}
	});
})(jQuery);
