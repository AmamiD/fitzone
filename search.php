<?php
require 'includes/db.php';

$q = $_GET['q'];

$sql = "SELECT * FROM classes WHERE name LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%$q%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<p>" . $row['name'] . "</p>";
}
?>
