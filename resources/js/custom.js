$(function(){
	$(document).one('onclick', '.like-review', function(e) {
		$(this).html('<i class="fas fa-thumbs-up fa-2x" aria-hidden="true"></i>');
		$(this).children('.fas fa-thumbs-up fa-2x').addClass('animate-like');
	});
});
