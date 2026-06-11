<?php
// 1. Get form data safely
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$department = $_POST['department'] ?? '';
$student_id = $_POST['student_id'] ?? '';
$semester = $_POST['semester'] ?? '';
$message = $_POST['message'] ?? '';

// 2. Basic validation
if (!$fullname || !$email) {
    die("Name and email are required!");
}

// 3. Connect to database
$conn = new mysqli("localhost", "root", "", "kbec");

// check connection
if ($conn->connect_error) {
    die("DB failed: " . $conn->connect_error);
}

// 4. Insert into database
$stmt = $conn->prepare("
    INSERT INTO applications 
    (fullname, email, department, student_id, semester, message)
    VALUES (?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssssss",
    $fullname,
    $email,
    $department,
    $student_id,
    $semester,
    $message
);

$stmt->execute();

// 5. Done
echo "Application submitted successfully!";
?>