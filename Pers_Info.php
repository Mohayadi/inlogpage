<?php

include 'DBconnection.php';
$email = 'SELECT email  FROM  user_info';
$pass = 'SELECT pass FROM user_info';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

	if (isset($_GET['register_id'])) {
			$register_id = $_GET['register_id'];
			$stmt = $pdo->prepare("SELECT * FROM register WHERE register_id = $register_id");
			$stmt->execute();
			$info = $stmt->fetch();
			echo '<h1>Persoonlijke informatie</h1>';
			echo '<h2>Naam:</h2><br>';
			echo "<p>  ". $info['first_name'] ."</p><br>";
			echo '<h2>Tussenvoegsel:';
			echo "<p> " . $info['tussenVoegsel'] . "</p><br>";
			echo '<h2>Achternaam:</h2><br>';
			echo "<p>" . $info ['last_name'] . "</p><br>";
			echo '<h2>Email:</h2>';
			echo "<p>" . $info['email'] . "</p><br>";
			echo '<h2>Wachtwoord</h2>';
			echo "<p>" . $info['pass'] . "</p>";
		} else {
			echo '<h1 style="color:red"> ERROR!!!</h1>';
		}
	?>
	<form action="Aanpassen_Pers_Info.php" method="GET">
		<button type="submit" name="aanPassenKnop" value="<?php echo $register_id ?>">Pas aan!</button>
	</form>
</body>
</html>

