<?php
include 'config.php';

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=registrations.csv');

$output = fopen("php://output", "w");
fputcsv($output, ['ID', 'Name', 'Email', 'Phone', 'Course', 'Address', 'Payment Method', 'Payment ID', 'Created At']);

$sql = "SELECT * FROM registrations";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
}

fclose($output);
?>
