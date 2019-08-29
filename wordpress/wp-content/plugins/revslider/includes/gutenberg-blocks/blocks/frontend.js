// Tabs

( function( $ ) {
	$( document ).ready( function() {
		var titleWrap = '.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap';
		var contentWrap = '.wp-block-themepunchblocks-tpc-tabs-tab-content-wrap';
		$( document )
			.on( 'click', '.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap', function() {
				var parent = $(this)
					.closest('.wp-block-themepunchblocks-tpc-tabs');
				var contentWrapEl = parent
					.find('.wp-block-themepunchblocks-tpc-tabs-tab-content-wrap');
				var activeStyle = parent
					.find('.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap.active')
					.attr('style');
				var defaultStyle = parent
					.find('.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap:not(.active)')
					.attr('style');

				$(this).siblings(titleWrap).removeClass('active').attr('style', defaultStyle);
				$(this).addClass('active').attr('style', activeStyle);

				contentWrapEl.removeClass('active').addClass('tpc-hide');
				parent.find(contentWrap +':nth-of-type(' + ($(this).index() + 1) + ')')
					.addClass('active')
					.removeClass('tpc-hide');
			} );
	} );
}( jQuery ) );