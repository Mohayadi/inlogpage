<?php
include 'DBconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="" method="GET">
            <input type="text" name="email" value="Email">
            <input type="password" name="pwd" value="pwd">
            <button type="submit" name="login" value="login">Sign up</button>
        </form>
    </section>
</body>
</html>
<?php
if (isset($_GET['login'])) {
    header('Location: testPage.php');
}
?>
