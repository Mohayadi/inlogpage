<?php
session_start();
include 'DBconnection.php';
$register_id = $_GET['aanPassenKnop'];
if (isset($_GET['aanPassenKnop'])) {
	$register_id = $_GET['aanPassenKnop'];
	$stmt = $pdo->prepare("SELECT * FROM register WHERE register_id = $register_id");
	$stmt->execute();
	$info = $stmt->fetch();
	$stmt2 = $pdo->prepare("SELECT * FROM user_info WHERE register_id = $register_id");
	$stmt2->execute();
	$info_herhalen = $stmt2->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="Aanpassen_Pers_Info.css">
</head>
<body>
	<h1>Pas hier je persoonlijke gegevens aan.</h1>
	<form class="Update" action="Update_Fase.php" method="GET">
		<input type="hidden" name="register_id" value="<?php echo $info['register_id']?>">
		<label>Naam:</label> <br>
		<input type="text" name="first_name" value="<?php echo $info['first_name'] ?>"> <br>
		<label>Tussenvoegsel:</label> <br>
		<input type="text" name="tussenVoegsel" value="<?php echo $info['tussenVoegsel'] ?>"> <br>
		<label>Achternaam:</label> <br>
		<input type="text" name="last_name" value="<?php echo $info['last_name'] ?>"> <br>
		<label>Email:</label> <br>
		<input type="text" name="email"  value="<?php echo $info['email'] ?>"> <br>
		<label>Email herhalen:</label> <br>
		<input type="text" name="email"  value="<?php echo $info_herhalen['email'] ?>"> <br>
		<label>Wachtwoord:</label> <br>
		<input type="text" name="pass" value="<?php echo $info['pass'] ?>"> <br>
		<label>Wachtwoord herhalen:</label> <br>
		<input type="text" name="pass" value="<?php echo $info_herhalen['pass'] ?>"> <br>
		<button type="submit" name="PassAanVoorDB">Pas nu aan!</button>
	</form>
	<form action="Verwijder_Fase.php">
		<button style="background-color: red;" type="submit" name="Delete_info" value="<?php echo $register_id ?>">Verwijder je account</button>
	</form>
</body>
</html>

