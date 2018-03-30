$(document).ready(function() {
	$('.ask').on('click', function() {
		$('.answer').html('jquery is great things');
		$('.answer').css({
			color: 'blue',
		});
		$('.ask').addClass('btn-success');
		$('.ask').addClass('animated bounce');
		
	});
});