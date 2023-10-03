<?php
$host = '127.0.0.1';
$db   = 'login_Info';
$user = 'osamaelanzi';
$pass = 'root123';
$port = "8888";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;";
$pdo = new \PDO($dsn, $user, $pass, $options);

try {
	$pdo = new PDO($dsn, $user, $pass);

	if ($pdo) {
		// echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>

