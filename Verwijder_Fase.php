<?php

include 'DBconnection.php';
if (isset($_GET['Delete_info'])) {
    $register_id = $_GET['Delete_info'];
    $stmt = $pdo->prepare("DELETE FROM register WHERE register_id = :register_id");
    $exec = $stmt->execute([':register_id' => $register_id]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="Verwijder_Fase.css">
</head>
<body>
<?php
if ($exec) {
	echo '<div class="Overzicht">';
	echo '<h1>Deleted</h1>';
	echo '<a href="welkomPagina.php">UitLoggen</a>';
	echo '</div>';
} else {
	echo 'ERROR!!!';
}
?>
</body>
</html>
