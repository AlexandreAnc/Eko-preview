<?php
$servername = "PRIVATE";
$username = "PRIVATE";
$password = "PRIVATE";
$dbname = "PRIVATE";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    $dbload = false;
    die("Connection failed: " . $conn->connect_error);
}

$dbload = true;

