<?php
$host = "localhost";
$user = "root";   // XAMPP default
$pass = "";
$dbname = "book_exchange";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
