function openWindow(name){
	$('.overlay-container').fadeIn(function() {
		window.setTimeout(function(){
			$('.window-container.'+name).addClass('window-container-visible');
		}, 100);
	});
}

$(document).ready(function() {
	
	$('.button').click(function() {
		type = $(this).attr('data-type');
		openWindow(type)		
	});
	
	$('.close').click(function() {
		$('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible');
	});
	
});