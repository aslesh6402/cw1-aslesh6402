<?php

$mysqli = require __DIR__ . "/db.php";

$sql = "INSERT INTO user (username, email, number, password)
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

// Validate and sanitize user inputs
if (!isset($_POST["username"]) || !isset($_POST["email"]) || !isset($_POST["password"])) {
    die("Please fill in all required fields.");
}

// Retrieve and sanitize user inputs
$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$number = filter_var($_POST["number"], FILTER_SANITIZE_STRING);
$password = $_POST["password"];

// Validate if required inputs are not empty
if (empty($username) || empty($email) || empty($password)) {
    die("Please fill in all required fields.");
}

// You may add additional validation for email and number if necessary

// Hash the password
$password = password_hash($password, PASSWORD_DEFAULT);

$stmt->bind_param("ssss", $username, $email, $number, $password);

if ($stmt->execute()) {
    header("Location: login.php");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        die("Email already taken.");
    } else {
        die("Error: " . $mysqli->error);
    }
}
