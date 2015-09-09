$(function () {
	$('.popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
});
$(document).ready(function() {

	$(document).mousemove(function(e) {

		if(e.pageY <= 5)
		{
			$('.popup-modal').trigger('click');

		}

	});

});