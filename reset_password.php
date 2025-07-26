<?php
session_start();
require 'includes/db.php';

if (!isset($_SESSION['reset_email'])) {
    header("Location: login.php");
    exit();
}

$msg = "";
$email = $_SESSION['reset_email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newpass = $_POST['password'];
    $hash = password_hash($newpass, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
    $stmt->bind_param("ss", $hash, $email);

    if ($stmt->execute()) {
        unset($_SESSION['reset_email']);
        header("Location: login.php?msg=PasswordReset");
        exit();
    } else {
        $msg = "Failed to reset password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password - FitZone</title>
    <link rel="stylesheet" href="css/reset_password.css">
</head>
<body class="scroll-page">

<header class="navbar">
    <div class="logo">
        <img src="images/logo.png" alt="FitZone Logo">
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Membership</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Trainers</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li class="nav-btns"><a href="login.php" class="btn-red">Join Now</a></li>
        </ul>
    </nav>
</header>

<main class="scroll-content">
    <section class="reset-section">
        <div class="reset-container">
            <h2>Reset Password</h2>
            <?php if ($msg): ?>
                <p class="error-msg"><?= $msg ?></p>
            <?php endif; ?>
            <form method="POST">
                <label>New Password:</label>
                <input type="password" name="password" required placeholder="Enter new password">
                <button type="submit">Reset Password</button>
            </form>
            <a href="login.php" class="back-link">← Back to Login</a>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-left">
            <h3>FitZone Fitness Center</h3>
            <p>123 Wellness Road,<br>Kurunegala, Sri Lanka<br>Phone: +94 77 123 4567</p>
        </div>
        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#membership">Membership</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#trainers">Trainers</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 FitZone Fitness Center. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
