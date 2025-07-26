<?php
session_start();
require 'includes/db.php';
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $_SESSION['reset_email'] = $email;
        header("Location: reset_password.php");
        exit();
    } else {
        $msg = "Email not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password - FitZone</title>
    <link rel="stylesheet" href="css/forgot_password.css">
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
</header>

    <main class="scroll-content">
        <section class="forgot-section">
            <div class="forgot-container">
                <h2>Forgot Password</h2>
                <?php if ($msg): ?>
                    <p class="error-msg"><?= $msg ?></p>
                <?php endif; ?>
                <form method="POST">
                    <label>Enter your registered email:</label>
                    <input type="email" name="email" required placeholder="Email">
                    <button type="submit">Continue</button>
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
