<?php
session_start();
require 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_role"] = $user["role"];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "User not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitZone - Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="scroll-page">

    <!-- Header -->
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

    <!-- Scrollable Content -->
<main class="scroll-content">
    <section class="login-section">
        <div class="login-container">
            <h2>Login to FitZone</h2>
            <?php if (!empty($error)) echo "<p class='error-msg'>$error</p>"; ?>
            <form method="POST">
                <input type="email" name="email" required placeholder="Email">
                <input type="password" name="password" required placeholder="Password">
                <button type="submit">Login</button>
                <a href="forgot_password.php">Forgot Password?</a>
                <p style="text-align: center; margin-top: -35px;">
               <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
                </p>
            </form>
        </div>
    </section>
</main>



    <!-- Footer -->
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
