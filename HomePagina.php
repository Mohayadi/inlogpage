<?php
session_start();
include 'DBconnection.php';

if (isset($_GET['login'])) {
    $email = $_GET['email'];
    $password = $_GET['pass'];
    $_SESSION['Save_email'] = $email;
    $_SESSION['Save_password'] = $password;

    $stmt = $pdo->prepare("SELECT * FROM user_info WHERE email=:email AND pass=:pass");
    $stmt->execute(['email' => $email, 'pass' => $password]);
    $info = $stmt->fetch();

    if ($info && $info['email'] == $_SESSION['Save_email'] && $info['pass'] == $_SESSION['Save_password']) {
        $register_id = $info['register_id'];
    } else {
        header('location: singup.php');
        exit();
    }
} elseif (isset($_GET['Homepagina'])) {
    $register_id = $_GET['Homepagina'];
    $stmt = $pdo->prepare("SELECT * FROM user_info WHERE register_id = :register_id");
    $stmt->execute(['register_id' => $register_id]);
    $info = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="navigatie">
        <form method="GET">
            <button type="submit" name="Homepagina" value="<?php echo $register_id; ?>">Home</button>
        </form>
        <nav>
            <a href="OverOns.php?register_id=<?php echo $register_id; ?>">Over Ons</a>
            <a href="Pers_Info.php?register_id=<?php echo $register_id; ?>">Persoonlijke Instellingen</a>
        </nav>
    </div>
    <h3>
        <h1>Marhaban</h1>
    </h3>
    <h1>Welkom op ons platform!</h1>
    <h2>Hier bieden we u uw gefilterde content voor het kind</h2>
</body>
</html>
