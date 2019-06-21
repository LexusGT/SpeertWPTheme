$(function() {
 $('.slider').slick({
 	dots: true,
 	//adaptiveHeight: true
 });
});

$(document).ready(function() {
	// Start Mobile Menu
	$('.header-menu-btn').on('click', function() {
		var $btn = $(this);
		if(!$btn.hasClass('opened')) {
			$('.header-menu').addClass('active');
			$('body').addClass('no_scroll');
			$('.header-menu-btn').addClass('opened');
			$('.search-wrap').removeClass('active');
			$('.header-search').removeClass('opened');
		} else {
			$('.header-menu').removeClass('active');
			$('body').removeClass('no_scroll');
			$('.header-menu-btn').removeClass('opened');
		}
	});

	$('.menu-item-has-children').click(function() {
		if ($(this).children('.sub-menu').css("display")=="none") {
			$('.sub-menu').hide('normal');
			$(this).children('.sub-menu').show('normal');
			$(this).addClass('active');
		} else {
			$('.sub-menu').hide('normal');
			$(this).removeClass('active');
		}
	});
	// End Mobile Menu

	// Start Search
	$('.header-search').on('click', function() {
		var $btn2 = $(this);
		if(!$btn2.hasClass('opened')) {
			$('.search-wrap').addClass('active');
			$('.header-search').addClass('opened');
			$('.header-menu').removeClass('active');
			$('.header-menu-btn').removeClass('opened');
			$('body').removeClass('no_scroll');
		} else {
			$('.search-wrap').removeClass('active');
			$('.header-search').removeClass('opened');
		}
	});
	// End Search

	// Start Scroll Top
	var speed = 500,
		$scrollTop = $('<a href="#" class="scrollTop"></a>').appendTo('body');        

	$scrollTop.click(function(e){
		e.preventDefault();

		$( 'html:not(:animated),body:not(:animated)' ).animate({ scrollTop: 0}, speed );
	});

	//appearance
	function show_scrollTop(){
		( $(window).scrollTop() > 300 ) ? $scrollTop.stop().fadeIn(600) : $scrollTop.stop().fadeOut(600);
	}
	$(window).scroll( function(){ show_scrollTop(); } );
	show_scrollTop();
	// End Scroll Top
});



