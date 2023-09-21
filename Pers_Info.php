<?php
include 'DBconnection.php';

if (isset($_GET['register_id']) || isset($_GET['Updated']) || isset($_GET['Pers_info'])) {
    $register_id = isset($_GET['register_id']) ? $_GET['register_id'] : (isset($_GET['Updated']) ? $_GET['Updated'] : $_GET['Pers_info']);

    $stmt = $pdo->prepare("SELECT * FROM register WHERE register_id = ?");
    $stmt->execute([$register_id]);
    $info = $stmt->fetch();

    function generateButton($name, $value) {
        echo '<form action="' . $name . '.php" method="GET">';
        echo '<button type="submit" name="' . $name . '" value="' . $value . '">' . $name . '</button>';
        echo '</form>';
    }

    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Document</title>';
	echo '<link rel="stylesheet" href="Pers_Info.css"';
    echo '</head>';
    echo '<body>';
	echo '<div class="Nav">';
    generateButton('Homepagina', $register_id);
    generateButton('Over_ons', $register_id);
    generateButton('Pers_info', $register_id);
	echo '</div>';
	echo '<div class="Overzicht">';
    echo '<h1>Persoonlijke informatie</h1>';
    echo '<h2>Naam:</h2><br>';
    echo "<p>  ". $info['first_name'] ."</p><br>";
    echo '<h2>Tussenvoegsel:</h2>';
    echo "<p> " . $info['tussenVoegsel'] . "</p><br>";
    echo '<h2>Achternaam:</h2><br>';
    echo "<p>" . $info ['last_name'] . "</p><br>";
    echo '<h2>Email:</h2>';
    echo "<p>" . $info['email'] . "</p><br>";
    echo '<h2>Wachtwoord</h2>';
    echo "<p>" . $info['pass'] . "</p>";
	echo '<form action="Aanpassen_Pers_Info.php" method="GET">';
	echo '<button type="submit" name="aanPassenKnop" value="'. $register_id .'">Bijwerken/Verwijdern</button>';
	echo '</form>';
	echo '</div>';
    echo '</body>';
    echo '</html>';
}
?>

