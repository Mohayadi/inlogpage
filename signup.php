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
        <form action="" method="POST">
            <input type="text" name="email" placeholder="Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit" value="submit">Sign up</button>
        </form>
    </section>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    header('Location: testPage.php');
}
?>
