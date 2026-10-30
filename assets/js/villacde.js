/**
 * Villa CDE theme behaviour: sticky header, mobile nav, photo lightbox.
 *
 * Ported from the static site's js/main.js (the "Mobile nav", "Fixed
 * header" and "Lightbox" sections). No dependencies.
 *
 * The mobile nav panel and the lightbox are built here rather than kept
 * in template markup: the panel is cloned from the header's navigation
 * block, so the links are edited in one place, and the lightbox reads its
 * titles/descriptions from the room cards' headings and image captions.
 */
( function () {
	'use strict';

	var $ = function ( s, r ) { return ( r || document ).querySelector( s ); };
	var $$ = function ( s, r ) { return Array.prototype.slice.call( ( r || document ).querySelectorAll( s ) ); };
	var reduced = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	var FOCUSABLE = 'a[href], button:not([disabled]), input:not([disabled]), select, textarea, [tabindex]:not([tabindex="-1"])';

	function esc( s ) {
		return String( s == null ? '' : s )
			.replace( /&/g, '&amp;' ).replace( /</g, '&lt;' ).replace( />/g, '&gt;' ).replace( /"/g, '&quot;' );
	}
	function text( el ) { return el ? el.textContent.replace( /\s+/g, ' ' ).trim() : ''; }

	var CLOSE_ICON = '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 6l12 12"></path><path d="M18 6L6 18"></path></svg>';
	var PREV_ICON = '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"></path></svg>';
	var NEXT_ICON = '<svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"></path></svg>';

	/* ---------- Fixed header: solid backdrop once scrolled off the hero ---------- */
	var siteHeader = $( '.site-header' );
	if ( siteHeader ) {
		var headerTicking = false;
		var paintHeader = function () {
			siteHeader.classList.toggle( 'is-scrolled', window.scrollY > 24 );
			headerTicking = false;
		};
		window.addEventListener( 'scroll', function () {
			if ( headerTicking ) { return; }
			headerTicking = true;
			requestAnimationFrame( paintHeader );
		}, { passive: true } );
		paintHeader();
	}

	/* ---------- Mobile nav ----------
	   The hamburger and the slide-in panel are generated from the header's
	   navigation block: every nav link becomes a panel link, and the item
	   carrying the nav-cta class becomes the panel's "Book now" button. */
	var navMain = siteHeader && $( '.nav-main', siteHeader );
	var navBlock = navMain && $( '.nav-links', navMain );
	if ( navMain && navBlock ) {
		var items = $$( '.wp-block-navigation-item', navBlock ).map( function ( li ) {
			var a = $( 'a[href]', li );
			if ( ! a ) { return null; }
			return { href: a.getAttribute( 'href' ), label: text( a ), cta: li.classList.contains( 'nav-cta' ) };
		} ).filter( Boolean );

		var navToggle = document.createElement( 'button' );
		navToggle.type = 'button';
		navToggle.id = 'nav-toggle';
		navToggle.className = 'nav-toggle';
		navToggle.setAttribute( 'aria-label', 'Open menu' );
		navToggle.setAttribute( 'aria-expanded', 'false' );
		navToggle.setAttribute( 'aria-controls', 'mobile-menu' );
		navToggle.innerHTML = '<span class="nav-toggle-bars" aria-hidden="true"><span></span><span></span><span></span></span>';
		navMain.appendChild( navToggle );

		var mnav = document.createElement( 'div' );
		mnav.id = 'mobile-menu';
		mnav.className = 'mnav';
		mnav.hidden = true;
		var panelHTML =
			'<button type="button" class="mnav-backdrop" data-mnav="close" tabindex="-1" aria-hidden="true"></button>' +
			'<div class="mnav-panel" role="dialog" aria-modal="true" aria-label="Menu">' +
				'<div class="mnav-head"><span>Menu</span>' +
				'<button type="button" class="mnav-close" data-mnav="close" aria-label="Close menu">' + CLOSE_ICON + '</button></div>';
		items.forEach( function ( it ) {
			panelHTML += '<a class="' + ( it.cta ? 'mnav-cta' : 'mnav-link' ) + '" href="' + esc( it.href ) + '">' + esc( it.label ) + '</a>';
		} );
		panelHTML += '</div>';
		mnav.innerHTML = panelHTML;
		siteHeader.appendChild( mnav );

		var mnavPanel = $( '.mnav-panel', mnav );
		var navTimer = null;

		var navIsOpen = function () { return ! mnav.hidden; };
		var navItems = function () {
			return $$( FOCUSABLE, mnavPanel ).filter( function ( el ) { return el.offsetWidth > 0 || el.offsetHeight > 0; } );
		};
		var openNav = function () {
			clearTimeout( navTimer );
			mnav.hidden = false;
			document.body.classList.add( 'lb-open' );
			navToggle.setAttribute( 'aria-expanded', 'true' );
			navToggle.setAttribute( 'aria-label', 'Close menu' );
			var reveal = function () { mnav.classList.add( 'is-open' ); };
			if ( reduced ) { reveal(); } else { requestAnimationFrame( reveal ); }
			var list = navItems();
			if ( list.length ) { list[ 0 ].focus(); }
		};
		var closeNav = function ( keepFocus ) {
			if ( ! navIsOpen() ) { return; }
			mnav.classList.remove( 'is-open' );
			document.body.classList.remove( 'lb-open' );
			navToggle.setAttribute( 'aria-expanded', 'false' );
			navToggle.setAttribute( 'aria-label', 'Open menu' );
			if ( ! keepFocus ) { navToggle.focus(); }
			clearTimeout( navTimer );
			navTimer = setTimeout( function () { mnav.hidden = true; }, reduced ? 0 : 320 );
		};

		navToggle.addEventListener( 'click', function () { if ( navIsOpen() ) { closeNav(); } else { openNav(); } } );
		mnav.addEventListener( 'click', function ( e ) {
			/* backdrop / close button, then any link in the panel */
			if ( e.target.closest( '[data-mnav="close"]' ) || e.target.closest( 'a[href]' ) ) { closeNav(); }
		} );
		document.addEventListener( 'keydown', function ( e ) {
			if ( ! navIsOpen() ) { return; }
			if ( e.key === 'Escape' ) { e.preventDefault(); closeNav(); return; }
			if ( e.key !== 'Tab' ) { return; }
			var list = navItems();
			if ( ! list.length ) { return; }
			var first = list[ 0 ], last = list[ list.length - 1 ], on = document.activeElement;
			if ( e.shiftKey && ( on === first || ! mnavPanel.contains( on ) ) ) { e.preventDefault(); last.focus(); }
			else if ( ! e.shiftKey && on === last ) { e.preventDefault(); first.focus(); }
		} );
		var wide = window.matchMedia( '(min-width: 900px)' );
		var onWide = function ( m ) { if ( m.matches ) { closeNav( true ); } };
		if ( wide.addEventListener ) { wide.addEventListener( 'change', onWide ); }
		else if ( wide.addListener ) { wide.addListener( onWide ); }
	}

	/* ---------- Lightbox (gallery + rooms) ----------
	   Triggers are the room-card / room-detail photos (group "rooms": the
	   six rooms then the four en-suite shots, with a caption built from the
	   card's heading and the image block's caption) and the gallery tiles
	   (group "gallery", no caption). Opening a room steps through the
	   rooms only, never into the gallery. */
	var triggers = $$( 'figure.room-card-media, figure.room-detail-media, figure.gallery-item' );
	if ( triggers.length ) {
		var lb = document.createElement( 'div' );
		lb.id = 'lightbox';
		lb.hidden = true;
		lb.setAttribute( 'role', 'dialog' );
		lb.setAttribute( 'aria-modal', 'true' );
		lb.setAttribute( 'aria-label', 'Photo viewer' );
		lb.innerHTML =
			'<button type="button" class="lb-backdrop" data-lb="close" aria-label="Close photo viewer"></button>' +
			'<figure id="lightbox-figure">' +
				'<img id="lightbox-img" src="" alt="">' +
				'<figcaption id="lightbox-cap" hidden><p id="lightbox-title"></p><p id="lightbox-desc"></p></figcaption>' +
			'</figure>' +
			'<button type="button" class="lb-close" data-lb="close" aria-label="Close">' + CLOSE_ICON + '</button>' +
			'<button type="button" class="lb-prev" data-lb="prev" aria-label="Previous photo">' + PREV_ICON + '</button>' +
			'<button type="button" class="lb-next" data-lb="next" aria-label="Next photo">' + NEXT_ICON + '</button>' +
			'<p id="lightbox-count"></p>';
		document.body.appendChild( lb );

		var lbImg = $( '#lightbox-img', lb ), lbCount = $( '#lightbox-count', lb );
		var lbCap = $( '#lightbox-cap', lb ), lbTitle = $( '#lightbox-title', lb ), lbDesc = $( '#lightbox-desc', lb );
		var lbFig = $( '#lightbox-figure', lb );
		var photos = [], current = -1, lastFocus = null;

		function describe( fig ) {
			var img = $( 'img', fig );
			if ( ! img ) { return null; }
			var card = fig.closest( '.room-card' );
			var detail = fig.closest( '.room-detail' );
			var group = 'gallery', title = '', desc = '';
			if ( card ) {
				group = 'rooms';
				title = text( $( '.room-card-name', card ) );
				desc = text( $( 'figcaption', fig ) );
			} else if ( detail ) {
				group = 'rooms';
				title = text( $( '.room-detail-name', detail ) );
				desc = text( $( 'figcaption', fig ) );
			}
			return {
				src: img.getAttribute( 'src' ),
				alt: img.getAttribute( 'alt' ) || '',
				title: title,
				desc: desc,
				group: group
			};
		}

		var entries = triggers.map( function ( fig ) {
			var d = describe( fig );
			return d ? { el: fig, data: d } : null;
		} ).filter( Boolean );

		function membersOf( g ) { return entries.filter( function ( e ) { return e.data.group === g; } ); }

		function show( i ) {
			if ( ! photos.length ) { return; }
			current = ( i + photos.length ) % photos.length;
			var p = photos[ current ];
			lbImg.src = p.src;
			lbImg.alt = p.alt;
			if ( p.title ) {
				lbTitle.textContent = p.title;
				lbDesc.textContent = p.desc;
				lbDesc.hidden = ! p.desc;
				lbCap.hidden = false;
				lbFig.classList.add( 'has-cap' );
			} else {
				lbCap.hidden = true;
				lbFig.classList.remove( 'has-cap' );
			}
			lbCount.textContent = ( current + 1 ) + ' / ' + photos.length;
		}
		function openLb( group, i, trigger ) {
			/* Remember the trigger itself rather than document.activeElement: clicking
			   does not focus it in every browser (Safari), and focus must come back. */
			lastFocus = trigger || document.activeElement;
			photos = membersOf( group ).map( function ( e ) { return e.data; } );
			show( i );
			lb.hidden = false;
			document.body.classList.add( 'lb-open' );
			$( '.lb-close', lb ).focus();
		}
		function closeLb() {
			lb.hidden = true;
			document.body.classList.remove( 'lb-open' );
			if ( lastFocus ) { lastFocus.focus(); }
		}

		entries.forEach( function ( e ) {
			var fig = e.el, d = e.data;
			fig.setAttribute( 'role', 'button' );
			fig.setAttribute( 'tabindex', '0' );
			fig.setAttribute( 'aria-label', 'View larger: ' + ( d.title || d.alt ) );
			var open = function () {
				var g = d.group;
				openLb( g, membersOf( g ).indexOf( e ), fig );
			};
			fig.addEventListener( 'click', function ( ev ) { ev.preventDefault(); open(); } );
			fig.addEventListener( 'keydown', function ( ev ) {
				if ( ev.key === 'Enter' || ev.key === ' ' ) { ev.preventDefault(); open(); }
			} );
		} );
		lb.addEventListener( 'click', function ( e ) {
			var a = e.target.closest( '[data-lb]' );
			if ( ! a ) { return; }
			var act = a.getAttribute( 'data-lb' );
			if ( act === 'close' ) { closeLb(); }
			if ( act === 'prev' ) { show( current - 1 ); }
			if ( act === 'next' ) { show( current + 1 ); }
		} );
		document.addEventListener( 'keydown', function ( e ) {
			if ( lb.hidden ) { return; }
			if ( e.key === 'Escape' ) { closeLb(); }
			if ( e.key === 'ArrowLeft' ) { show( current - 1 ); }
			if ( e.key === 'ArrowRight' ) { show( current + 1 ); }
		} );
	}
} )();
