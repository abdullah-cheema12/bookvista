<?php
$host = 'localhost';
$user = 'bookvist_admin';
$pass = '-F9AogmEn!84Y6';
$db = 'bookvist_bookvista';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>