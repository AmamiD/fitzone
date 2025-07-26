<?php
require 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $password);

    if ($stmt->execute()) {
        header("Location: login.php?msg=registered");
    } else {
        echo "Error: Email may already exist.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - FitZone</title>
    <link rel="stylesheet" href="css/register.css">
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

    <center><div class="register-container">
        <h2>Register</h2>
        <form method="POST">
            
            <input type="text" name="text" placeholder="Full Name" required>

            
            <input type="email" name="email" placeholder="Email" required>

            
            <input type="text" name="phone" placeholder="Phone Number" required>

           
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Register</button>
        </form>
        <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
    </div></center>

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

