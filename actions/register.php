<?php
session_start();
require "database/connection.php";
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$password = $_POST["password"];
$confirm_password = $_POST["confirm-password"];
$imagePath = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $uploadDir = __DIR__ . "/../assets/images/profile/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    $imgName = uniqid() . '-' . basename($_FILES['image']['name']);
    $targetPath = $uploadDir . $imgName;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
        $imagePath = "assets/images/profile/" . $imgName;
    } else {
        error_log("Upload failed with error code: " . $_FILES['image']['error']);
    }
}
if ($password === $confirm_password) {
    $check_account = $conn->prepare("SELECT * FROM account WHERE email = :email");
    $check_account->bindParam(":email", $email);
    $check_account->execute();
    if ($check_account->rowCount() === 0) {
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

        $create_account = $conn->prepare("INSERT INTO account (email, password, image_path) VALUES (:email, :password, :image)");
        $create_account->bindParam(":email", $email);
        $create_account->bindParam(":password", $encrypted_password);
        $create_account->bindParam(":image", $imagePath);
        $create_account->execute();

        $_SESSION["success"] = "Registratie is gelukt, log nu in:";
        header("Location: /login-form");
        exit();
    } else {
        $_SESSION["message"] = "Dit e-mailadres is al in gebruik.";
        $_SESSION["email"] = htmlspecialchars($email);
        header("Location: /register-form");
        exit();
    }
} else {
    $_SESSION["message"] = "Wachtwoorden komen niet overeen.";
    $_SESSION["email"] = htmlspecialchars($email);
    header("Location: /register-form");
    exit();
}