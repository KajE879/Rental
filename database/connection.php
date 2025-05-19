<?php
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=localhost;dbname=rydr", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->query("SELECT * FROM cars ORDER BY id ASC LIMIT 12");
    $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}



