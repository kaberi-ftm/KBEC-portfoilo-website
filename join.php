<?php

require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request.");
}

$fullname = trim($_POST['fullname'] ?? '');
$email = trim($_POST['email'] ?? '');
$department = trim($_POST['department'] ?? '');
$student_id = trim($_POST['student_id'] ?? '');
$semester = trim($_POST['semester'] ?? '');
$message = trim($_POST['message'] ?? '');

if (empty($fullname) || empty($email)) {
    die("Name and Email are required.");
}

$stmt = $conn->prepare("INSERT INTO applications
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

if ($stmt->execute()) {
    header("Location: index.php?success=1");
exit();
} else {
    echo "Something went wrong.";
}

$stmt->close();
$conn->close();
?>