var $content = $('#content');
var counter;

function getWords() {
	line = Math.floor(Math.random * verbs.length);
	return verbs[line];	
}

function fillArea(first, second, third) {
	$('#col_1').text(first);
	$('#col_2').text(second);
	$('#col_3').text(third);
}

function ask() {
	words = getWords();
	fillArea('', words[0], '');
	setTimeout(answer, 2000, words);
}

function answer(words) {
	fillArea(words[0], words[1], words[2]);
	if (counter > 0) {
		counter--;
		setTimeout(ask, 1000);
	}else{
		setTimeout(finish, 1000);
	}
}

function finish() {
	$('#test_area').hide();
	$('#form').show();
}

$('#start_button', $content).click(function() {
  $('#form').hide();
  $('#test_area').show();
  var counter = 20;
  ask();
});

