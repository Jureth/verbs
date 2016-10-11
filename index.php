<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="keywords" content="">
<meta name="robots" content="all">
<title>Тест по неправильным глаголам</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

<script>
verbs = <?= json_encode(file_exists('verbs.csv') ? array_map('str_getcsv', file('verbs.csv')): []); ?>
</script>
<script src="main.js"></script>
</head> 
<body>
<div class="row">
	<div class="col-md-12" id="content">
		<div class="row" id="form">
			<div class="col-md-12"><button class="btn btn-primary" id="start_button" type="submit">Start</button></div>
		</div>
		<div class="row" id="test_area" style="display: none">
			<div class="col-md-3"></div>
			<div class="col-md-2" id="col_1"></div>
			<div class="col-md-2" id="col_2"></div>
			<div class="col-md-2" id="col_3"></div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>
</body>
</html>