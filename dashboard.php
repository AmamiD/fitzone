<?php
include 'includes/auth.php';
require 'includes/db.php';
check_login();

$role = $_SESSION['user_role'];

if ($role === 'admin') {
    header("Location: admin/manage_users.php");
    exit();
}
if ($role === 'staff') {
    header("Location: admin/staff_dashboard.php");
    exit();
}

$user_id = $_SESSION['user_id'];
?>

<h2>Customer Dashboard</h2>
<a href="book_appointment.php">Book Appointment</a><br>
<a href="submit_query.php">Submit Query</a><br>
<a href="logout.php">Logout</a><br>
<a href="update_profile.php">Update Profile</a><br>


<hr>

<h3>Your Queries and Staff Responses</h3>
<?php
$result = $conn->prepare("SELECT message, response, submitted_at FROM queries WHERE user_id = ? ORDER BY submitted_at DESC");
$result->bind_param("i", $user_id);
$result->execute();
$res = $result->get_result();

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo "<div style='border:1px solid #ccc; padding:10px; margin:10px 0'>";
        echo "<p><strong>Your Message:</strong> {$row['message']}</p>";

        if ($row['response']) {
            echo "<p><strong>Staff Response:</strong> {$row['response']}</p>";
        } else {
            echo "<p style='color:gray;'><em>Awaiting staff response...</em></p>";
        }

        echo "</div>";
    }
} else {
    echo "<p>You have not submitted any queries yet.</p>";
}
?>
