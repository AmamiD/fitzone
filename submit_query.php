<?php
include 'includes/auth.php';
require 'includes/db.php';
check_login();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO queries (user_id, message) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $message);
    $stmt->execute();

    echo "Query submitted!";
}
?>

<form method="POST">
  <textarea name="message" required></textarea>
  <button type="submit">Send</button>
</form>
