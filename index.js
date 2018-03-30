// document.write("write in doc."+"hmmmmmm"+"jsss")

// var div = document.getElementById('akar');
// div.getAttribute('id');

// div.setAttribute('id','masa');
// alert(div.getAttribute('id'));

function myClick()
{
	var div = document.createElement('h1');
	var text = 'haiii';
	var newH1 = document.body.appendChild(div);

	newH1.innerText = text;
}

// alert('hello');

//jquery
$(document).ready(function(){
	alert('hello there');
});

$(document).ready(function() {
	$('button').addClass('animated bounce'); // target element
	$('.btn-success').addClass('shake'); // target class
	// $('#target6').addClass('fadeOut'); // target id
	$('button').removeClass('btn-success');
	$('#target1').css({
		backgroundcolor: 'white',
		color: 'blue'
	});
	$('#target2').prop({
		disabled: 'true',
	});
	$('h1').html('learning <strong>JQuery</strong> so funny!!!');
	// $('#target1').remove();
	// $('#target4').append('proses');
	// $('#target4').appendTo('.left');
	// $('.left').clone().appendTo('.right');
	$('.heading2').parent().css({
		backgroundcolor: 'yellow'
	});
	$('.heading2right').children().css({
		backgroundcolor: 'blue'
	});

	$('.target:nth-child(1)').addClass('animated swing');
	//onClick
	$('.ask').on('click', function() {
		$('.answer').html('jquery is great things');
	});
});