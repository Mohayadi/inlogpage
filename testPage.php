<?php

include 'DBconnection.php';
$_GET['login'];
if (isset($_GET['login'])) {
    $_GET["name"];
    $_GET['pwd'];
    $test = 'succesfully';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1><?php echo $test?></h1>
</body>
</html>
