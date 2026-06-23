<?php
// DB CONNECTION
$conn = new mysqli("127.0.0.1:3307
", "root", "", "xb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GET FORM DATA
$name = $_POST['firstName'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$service = $_POST['service'] ?? '';
$country = 'SG'; 


// VALIDATION (basic)
if (empty($name) || empty($email) || empty($phone)) {
    echo json_encode(["status" => "error", "message" => "Required fields missing"]);
    exit;
}

// PREPARED STATEMENT (secure)
$stmt = $conn->prepare("INSERT INTO quote_requests (name, email, phone, service,country) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $service,$country);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Data saved successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "DB insert failed"]);
}

$stmt->close();
$conn->close();
?>