<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Database connection configuration
    $host = "hostname";
    $dbname = "portfolio";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert form data into the database
        $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $message]);

        echo '<script>alert("Thank you for contacting us! We will get back to you soon.");</script>';
    } catch (PDOException $e) {
        echo $e;
        // You can also output the error message for debugging purposes:
        // echo "Error: " . $e->getMessage();
    }

    $conn = null; // Close the database connection
} else {
    echo "Invalid request.";
}
?>
