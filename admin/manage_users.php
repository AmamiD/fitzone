<?php
include '../includes/auth.php';
require '../includes/db.php';
check_login();

if ($_SESSION['user_role'] !== 'admin') {
    echo "Access Denied.";
    exit();
}

// Handle role update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_id'], $_POST['new_role'])) {
    $user_id = $_POST['user_id'];
    $new_role = $_POST['new_role'];

    if (in_array($new_role, ['customer', 'staff', 'admin'])) {
        $stmt = $conn->prepare("UPDATE users SET role = ? WHERE id = ?");
        $stmt->bind_param("si", $new_role, $user_id);
        $stmt->execute();
        echo "<p class='success-msg'>Role updated successfully!</p>";
    } else {
        echo "<p class='error-msg'>Invalid role selected!</p>";
    }
}

// Fetch users
$result = $conn->query("SELECT id, name, email, role FROM users");
?>
<link rel="stylesheet" href="../css/style.css">

<div class="admin-users-page">
    <h2>Manage Users</h2>
    <table class="admin-table">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Change Role</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['role'] ?></td>
            <td>
                <form method="POST" class="role-form">
                    <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
                    <select name="new_role">
                        <option value="customer" <?= $row['role'] === 'customer' ? 'selected' : '' ?>>Customer</option>
                        <option value="staff" <?= $row['role'] === 'staff' ? 'selected' : '' ?>>Staff</option>
                        <option value="admin" <?= $row['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                    </select>
                    <button type="submit">Update</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <a href="../logout.php" class="logout-btn">Logout</a>
</div>
