( function( $ ) {
$( document ).ready(function() {
	$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
		$('#cssmenu #menu-button').on('click', function(){
			var menu = $(this).next('ul');
			if (menu.hasClass('open')) {
				menu.removeClass('open');
			}
			else {
				menu.addClass('open');
			}
		});
	});
} )( jQuery );

$( document ).ready(function() {
	$(".fancybox li a").fancybox({
		wrapCSS    : 'fancybox-custom',
		closeClick : true,
		openEffect : 'none',
		helpers : {
			title : {
				type : 'inside'
			}
		}
	});
});
