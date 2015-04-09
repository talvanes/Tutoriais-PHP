<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>PHP Action</title>
	<link rel="stylesheet" href="estilo.css" />;
</head>

<body>

<?php
	echo "<table class='output'>\n";
	echo "<tr>\n";
	echo "<th> Nome: </th>\n";
	echo "<td>" . $_POST["name"] . "</td>\n";
	echo "</tr>\n";
	echo "<tr>\n";
	echo "<th> E-mail: </th>\n";
	echo "<td>" . $_POST["email"] . "</td>\n";
	echo "</tr>\n";
	echo "<tr>\n";
	echo "<th> Data Nasc.: </th>\n";
	echo "<td>" . $_POST["nasc"] . "</td>\n";
	echo "</tr>\n";
	echo "</table>\n";
?>

</body>
</html>
