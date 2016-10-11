var counter = 20;
var questionInterval = 2000;
var askRandomForm = false;

function getWords() {
	line = Math.floor(Math.random() * verbs.length);
	return verbs[line];	
}

function fillArea(first, second, third) {
	$('#col_1').text(first);
	$('#col_2').text(second);
	$('#col_3').text(third);
}

function ask() {
	words = getWords();
	if (askRandomForm) {
		var i = Math.floor(Math.random() * 3);
	}else {
		var i = 0;
	}
	fillArea('', words[i], '');
	setTimeout(answer, questionInterval, words);
}

function answer(words) {
	fillArea(words[0], words[1], words[2]);
	if (counter > 0) {
		counter--;
		setTimeout(ask, 1500);
	}else{
		setTimeout(finish, 1500);
	}
}

function finish() {
	$('#test_area').hide();
	$('#form').show();
}

$(document).ready(function(){
	$('#start_button').click(function() {
		$('#form').hide();
		$('#test_area').show();
		questionInterval = parseInt($('#questionTimeField').val());
		counter = parseInt($('#countField').val());
		askRandomForm = $('#randomFormField').is(':checked');

		ask();
	});
});

