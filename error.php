<?php 

$error = $_SERVER['REDIRECKT_STATUS'];

$error_title = '';
$error_massage = '';
if ($error == 404) {

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ERROR</title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: #58379F;
		}
		.textt {
			text-align: center;
			margin-top: 100px;
			font-size: 50px;
			color: white;
		}
		.dop-text__ {
			margin-top: -61px;
			font-size: 50px;
			color: white;
		}
		.btn{
			margin-top: 50px;
			margin-left: -91px;
			width: 50px;
			height: 50px;
		}
		.btn-o{
			width: 150px;
			height: 35px;
			font-size: 23px;
			border-radius: 5px;
			border: white;
			transition: opacity 0.2s linear, background 0.2s linear;
		}
		.btn-o:hover{
			background: grey;
		   	color: white;
		}
	</style>
	<div class="textt">
		<h1>404</h1>
	</div>
	<center><h1 class="dop-text__">Страница не найдена</h1></center>
	<form action="/Go-to.php">
		<center><div class="btn"><input type="submit" class="btn-o" value="На главную"></div></center>
	</form>
</body>
</html>