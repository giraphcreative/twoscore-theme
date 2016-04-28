
jQuery(document).ready(function( $ ) {

	var getAdminBarHeight = function() {
		return ( $( 'body' ).hasClass( 'admin-bar' ) ? $( '#wpadminbar' ).height() : 0 );
	};

	if ( $( 'body' ).hasClass( 'home' ) ) {

		// scroll handler
		var scrollToAnchor = function( id ) {

			// grab the element to scroll to based on the name
			var elem = $("a[name='"+ id +"']"),
				menu = $("nav ul");

			// if that didn't work, look for an element with our ID
			if ( typeof( elem.offset() ) === "undefined" ) {
				elem = $("#"+id);
			}

			// if the destination element exists
			if ( typeof( elem.offset() ) !== "undefined" ) {

				// do the scroll
				$('html, body').animate({
					scrollTop: elem.offset().top - menu.height() - getAdminBarHeight() - 10
				}, 1000 );

			}

		};

		// bind to click event
		$("a").click(function( event ) {

			// only do this if it's an anchor link
			if ( $(this).attr("href").match("#") ) {

				// prevent default propagation
				event.preventDefault();

				// scroll to the location
				var href = $(this).attr('href').replace('#', '');
				scrollToAnchor( href );

				// fallback to prevent jitter
				return false;

			}

		});

	}

});
