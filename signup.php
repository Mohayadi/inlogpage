<?php
include 'DBconnection.php';
?>


    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="" method="POST">
            <input type="text" name="email" placeholder="Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit" value="submit">Sign up</button>
        </form>
    </section>
<?php
if (isset($_POST['submit'])) {
    header('location: testPage.php');
}
?>
