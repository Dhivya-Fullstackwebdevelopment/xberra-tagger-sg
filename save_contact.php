<?php
header('Content-Type: application/json');

// DB CONNECTION
$conn = new mysqli("127.0.0.1:3307", "root", "", "xb");

if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database connection failed"]);
    exit;
}

// GET FORM DATA
$firstName = $_POST['firstName'] ?? '';
$lastName  = $_POST['lastName'] ?? '';
$email     = $_POST['email'] ?? '';
$phone     = $_POST['phone'] ?? '';
$message   = $_POST['message'] ?? '';
$country = 'SG'; 

// BASIC VALIDATION
if (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($message)) {
    echo json_encode(["status" => "error", "message" => "All fields are required"]);
    exit;
}

// INSERT USING PREPARED STATEMENT
$stmt = $conn->prepare("INSERT INTO contact_form (first_name, last_name, email, phone, message,country) VALUES (?, ?, ?, ?, ?,?)");
$stmt->bind_param("ssssss", $firstName, $lastName, $email, $phone, $message,$country);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Saved successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Insert failed"]);
}

$stmt->close();
$conn->close();
?>