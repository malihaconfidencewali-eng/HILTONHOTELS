<?php
$host = "localhost";
$user = "ueyhm8rqreljw";
$pass = "gutn2hie5vxa";
$dbname = "dbxgedehaoiwgg";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
