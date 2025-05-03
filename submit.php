<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$address = $_POST['address'];
$payment_method = $_POST['payment_method'];
$payment_id = $_POST['payment_id']; // From Razorpay

$sql = "INSERT INTO registrations (name, email, phone, course, address, payment_method, payment_id)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $name, $email, $phone, $course, $address, $payment_method, $payment_id);

if ($stmt->execute()) {
  echo "success";
} else {
  echo "error";
}

$stmt->close();
$conn->close();
?>
