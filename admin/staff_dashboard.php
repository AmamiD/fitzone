<?php
include '../includes/auth.php';
require '../includes/db.php';
check_login();

if ($_SESSION['user_role'] !== 'staff') {
    echo "Access Denied.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff Dashboard</title>
    <link rel="stylesheet" href="../css/staff-dashboard.css">
</head>
<body>
    <h2>Staff Dashboard</h2>

    <!-- View Appointments -->
    <h3>Customer Appointments</h3>
    <?php
    $apps = $conn->query("
        SELECT a.id, u.name AS customer_name, a.class_name, a.date_time
        FROM appointments a
        JOIN users u ON a.user_id = u.id
        ORDER BY a.date_time DESC
    ");

    if ($apps->num_rows > 0) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Appointment ID</th><th>Customer</th><th>Class</th><th>Date & Time</th></tr>";
        while ($row = $apps->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['customer_name']}</td>
                <td>{$row['class_name']}</td>
                <td>{$row['date_time']}</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No appointments found.</p>";
    }
    ?>

    <hr>

    <!-- View Queries -->
    <h3>Customer Queries & Respond</h3>
    <?php
    // Handle response submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['response'], $_POST['query_id'])) {
        $response = $_POST['response'];
        $query_id = $_POST['query_id'];

        $stmt = $conn->prepare("UPDATE queries SET response = ? WHERE id = ?");
        $stmt->bind_param("si", $response, $query_id);
        $stmt->execute();

        echo "<p class='success'>Response submitted!</p>";
    }

    // Fetch and display queries
    $queries = $conn->query("
        SELECT q.id, u.name AS customer_name, q.message, q.response 
        FROM queries q 
        JOIN users u ON q.user_id = u.id
        ORDER BY q.submitted_at DESC
    ");

    while ($q = $queries->fetch_assoc()) {
        echo "<div class='query-box'>";
        echo "<p><strong>{$q['customer_name']}:</strong> {$q['message']}</p>";

        if ($q['response']) {
            echo "<p><strong>Your Response:</strong> {$q['response']}</p>";
        } else {
            echo "
            <form method='POST'>
                <input type='hidden' name='query_id' value='{$q['id']}'>
                <textarea name='response' required placeholder='Write response...' rows='3'></textarea><br>
                <button type='submit'>Submit Response</button>
            </form>
            ";
        }

        echo "</div>";
    }
    ?>

   <a href="../logout.php" class="logout-btn">Logout</a>

</body>
</html>
