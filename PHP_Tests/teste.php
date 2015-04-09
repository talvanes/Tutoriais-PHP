<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<title>Teste</title>
</head>
<style>
	html, head {
		width:100%; height:100%;
		margin:0px;
		padding:0px;
	}
</style>
<body>
	<?php
	for ($i = 0; $i < 100; $i++) {
		echo "<div style='border:1px solid black;text-align:center'>" . $i . "<//div><br //>";
	}
	?>
</body>
</html>