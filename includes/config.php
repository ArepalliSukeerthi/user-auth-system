<?php
$host = "localhost";
$user = "root";
$pass = "keerthi";
$db = "user_auth_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
