( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'sidebar_title', function( value ) {
		value.bind( function( newval ) {
			$( 'h1 .post-title' ).html( newval );
		} );
	} );
	
	//Update the site description in real time...
	wp.customize( 'sidebar_subtitle', function( value ) {
		value.bind( function( newval ) {
			$( 'p .sidebar-block-title' ).html( newval );
		} );
	} );
	//Update the site description in real time...
	wp.customize( 'sidebar_text', function( value ) {
		value.bind( function( newval ) {
			$( 'p .sidebar-block-text' ).html( newval );
		} );
	} );

	
} )( jQuery );


//
