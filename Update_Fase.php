<?php

include 'DBconnection.php';
if (isset($_GET['PassAanVoorDB'])) {
	$register_id = $_GET['register_id'];
	$first_name = $_GET['first_name'];
	$tussenVoegsel = $_GET['tussenVoegsel'];
	$last_name = $_GET['last_name'];
	$email = $_GET['email'];
	$pass = $_GET['pass'];
	$updateQuery = "UPDATE  register
					SET     register_id = :register_id, first_name = :first_name, tussenVoegsel = :tussenVoegsel , last_name = :last_name, email = :email, pass = :pass
					WHERE register_id = :register_id";
	$runUpdate = $pdo->prepare($updateQuery);
	$dataRegister = [
		':register_id' => $register_id,
		':first_name' => $first_name,
		':tussenVoegsel' => $tussenVoegsel,
		':last_name' => $last_name,
		':email' => $email,
		':pass' => $pass
];
$dataRegister;
	$exec = $runUpdate->execute($dataRegister);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="Update_fase.css">
</head>
<body>
	<?php
	if ($exec) {
		echo '<div class="Overzicht">';
		echo '<h1 style="color:Green">Succesfully updated!</h1>';
		echo '<form action="Pers_info.php" method="GET">';
		echo '<button type="submit" name=Updated value="'.$register_id.'">Terug</button>';
		echo '</form>';
		echo '</div>';
	} else {
		echo '<h1 style="color:Red">Update failed!</h1>';
	}
	if (isset($_GET['Updated'])) {
		header('location: Pers_Info.php');
	}
	?>

</body>
</html>
