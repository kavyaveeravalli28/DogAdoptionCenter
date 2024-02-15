<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogs";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data and sanitize it
    $dog_name = htmlspecialchars($_POST["dog_name"]);
    $owner_name = htmlspecialchars($_POST["owner_name"]);
    $breed = htmlspecialchars($_POST["breed"]);
    $age = intval($_POST["age"]);

    // Perform validation (You can add more validation as needed)
    if (empty($dog_name) || empty($owner_name) || empty($breed) || empty($age)) {
        echo "All fields are required.";
        exit;
    }

    // Prepare and bind the statement
    $stmt = $conn->prepare("INSERT INTO pets (dog_name, owner_name, breed, age) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $dog_name, $owner_name, $breed, $age);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Data has been successfully saved to the database.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>

