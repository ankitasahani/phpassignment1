<!DOCTYPE html>
<html>
<head>
	<title>submit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>
	<?php
	echo "FORM SUBMITED"."<br/>";
	echo "Your entries are "."<br/>";
	echo "Your name: ";
	echo $_POST["name"];
	echo "<br/>";
	echo "Your email: ";
	echo $_POST["email"]; 
	?>
	</h3>
</body>
</html>