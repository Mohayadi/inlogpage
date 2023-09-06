<?php
include 'DBconnection.php';
?>


    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Name...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit" value="">Sign up</button>
        </form>
    </section>
<?php

$pdo = 'SELECT pw, email FROM loginpage';

$submit = $_POST['submit'];
if (isset($submit)) {
    $Name = $_POST['name'];
    $Password = $_POST['pwd'];
    echo 'succesfully';
}
?>
