<?php
require_once "../database/connection.php";

if (
    isset($_POST['name'], $_POST['price_per_day'], $_POST['type'],
          $_POST['fuel_capacity_liters'], $_POST['steering_type'], $_POST['capacity']) &&
    !empty($_POST['name']) && !empty($_POST['price_per_day']) &&
    !empty($_POST['type']) && !empty($_POST['fuel_capacity_liters']) &&
    !empty($_POST['steering_type']) && !empty($_POST['capacity'])
) {
    $description = isset($_POST['description']) ? $_POST['description'] : null;

    $insert = $conn->prepare("INSERT INTO cars 
        (name, description, price_per_day, type, fuel_capacity_liters, steering_type, capacity)
        VALUES 
        (:name, :description, :price_per_day, :type, :fuel_capacity_liters, :steering_type, :capacity)");

    $insert->bindParam(":name", $_POST['name']);
    $insert->bindParam(":description", $description);
    $insert->bindParam(":price_per_day", $_POST['price_per_day']);
    $insert->bindParam(":type", $_POST['type']);
    $insert->bindParam(":fuel_capacity_liters", $_POST['fuel_capacity_liters']);
    $insert->bindParam(":steering_type", $_POST['steering_type']);
    $insert->bindParam(":capacity", $_POST['capacity']);

    $insert->execute();
    header("Location: ../pages/add-car-form.php");
    exit;
}

