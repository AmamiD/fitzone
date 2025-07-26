<?php
include 'includes/auth.php';
require 'includes/db.php';
check_login();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $class = $_POST['class'];
    $date = $_POST['date_time'];

    $stmt = $conn->prepare("INSERT INTO appointments (user_id, class_name, date_time) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $user_id, $class, $date);
    $stmt->execute();

    echo "Appointment Booked!";
}
?>

<form method="POST">
  <input name="class" placeholder="Class Name" required>
  <input type="datetime-local" name="date_time" required>
  <button type="submit">Book</button>
</form>
