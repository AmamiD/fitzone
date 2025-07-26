<?php
include 'includes/auth.php';
require 'includes/db.php';
check_login();

$user_id = $_SESSION['user_id'];
$msg = "";

// Fetch current user data
$stmt = $conn->prepare("SELECT name, email, phone FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, phone = ? WHERE id = ?");
    $stmt->bind_param("sssi", $name, $email, $phone, $user_id);

    if ($stmt->execute()) {
        $msg = "Profile updated successfully!";
    } else {
        $msg = "Error updating profile.";
    }

    // Refresh user data in case it's displayed again
    $user['name']  = $name;
    $user['email'] = $email;
    $user['phone'] = $phone;
}
?>

<h2>Update Profile</h2>
<?php if ($msg): ?>
    <p style="color: green;"><?= $msg ?></p>
<?php endif; ?>

<form method="POST">
  <label>Name:</label><br>
  <input type="text" name="name" value="<?= $user['name'] ?>" required><br><br>

  <label>Email:</label><br>
  <input type="email" name="email" value="<?= $user['email'] ?>" required><br><br>

  <label>Phone Number:</label><br>
  <input type="text" name="phone" value="<?= $user['phone'] ?>" required><br><br>

  <button type="submit">Update Profile</button>
</form>

<br>
<a href="dashboard.php">← Back to Dashboard</a>
