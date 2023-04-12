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
	$(window).on("load", function () {
		$('.gfield').each(function () {
			if ($(this).find('input').val().length) {
				$(this).find('.ginput_container input').closest('.gfield').addClass('is-focused');
			} else {
				$(this).find('.ginput_container input').closest('.gfield').removeClass('is-focused');
			}
		});
	});
	$('.ginput_container input, .ginput_container select').on('focus', function () {
		$(this).closest('.gfield').addClass('is-focused');
	});
	$('.ginput_container input, .ginput_container select').on('blur', function () {
		var value = $(this).val();
		console.log(value)
		// $(this).closest('.gfield').removeClass('is-focused');
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

	var wow = new WOW(
		{
			boxClass: 'anim-cln',
			animateClass: 'animated',
			offset: 50,
		}
	);
	wow.init();

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
})(jQuery);
