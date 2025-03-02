<?php
$host = "localhost";
$username = "PriyaNahal";
$password = "Sukhraj$2";
$database = "data";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully!"; // Uncomment for debugging
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

//$sql = mysqli_connect($host, $username, $password, $database) or die("Could not connect");
?>

