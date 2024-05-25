<?php

$hostname = $_ENV["HOSTNAME"];
$port = $_ENV["PORT"];
$username = $_ENV["USERNAME"];
$password = $_ENV["PASSWORD"];
$dbname = $_ENV["DATABASE"];

try {
    $conn = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo "Couldn't Establish a Connection: " . $err->getMessage();
}
