/**
 * Sticky header: toggles a solid backdrop on the header once the page
 * has scrolled past a small threshold, so nav text stays legible once
 * the content underneath it turns light. The header itself starts
 * transparent, sitting over the hero (see assets/css/header.css).
 *
 * Ported from the static site's js/main.js "Fixed header" behavior.
 */
( function () {
	'use strict';

	var header = document.querySelector( '.site-header' );
	if ( ! header ) {
		return;
	}

	var ticking = false;

	var paintHeader = function () {
		header.classList.toggle( 'is-scrolled', window.scrollY > 24 );
		ticking = false;
	};

	window.addEventListener(
		'scroll',
		function () {
			if ( ticking ) {
				return;
			}
			ticking = true;
			window.requestAnimationFrame( paintHeader );
		},
		{ passive: true }
	);

	paintHeader();
} )();
