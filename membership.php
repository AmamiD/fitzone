<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FitZone Membership Plans</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      background-color: #111;
      color: white;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .membership-section {
      padding: 120px 30px 60px;
      min-height: 100vh;
    }

    .membership-section h2 {
      font-size: 36px;
      text-align: center;
      margin-bottom: 50px;
      color: red;
    }

    .membership-row {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
      margin-bottom: 60px;
    }

    .card {
      background-color: #222;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(255, 0, 0, 0.3);
      overflow: hidden;
      transition: transform 0.3s ease;
      width: 320px;
      text-align: center;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .card img {
      display: block;
      margin: 0 auto;
      max-width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 12px 12px 0 0;
    }

    .card-content {
      padding: 20px;
    }

    .card-content h3 {
      font-size: 22px;
      color: red;
      margin-bottom: 10px;
    }

    .card-content p {
      font-size: 15px;
      line-height: 1.4;
    }

    .card-content .price {
      font-weight: bold;
      font-size: 18px;
      color: #fff;
      margin-top: 10px;
    }

    @media (max-width: 768px) {
      .membership-row {
        flex-direction: column;
        align-items: center;
      }

      .card {
        width: 90%;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">
      <img src="images/logo.png" alt="FitZone Logo" />
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="membership.php" class="active">Membership</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="trainers.php">Trainers</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>
    <div class="nav-btns">
      <a href="login.php" class="btn-red">Join Now</a>
    </div>
  </header>

  <!-- Membership Plans -->
  <section class="membership-section">
    <h2>Choose Your Membership Plan</h2>

    <!-- First Row -->
    <div class="membership-row">
      <div class="card">
        <img src="images/basic-plan.jpg" alt="Basic Plan">
        <div class="card-content">
          <h3>Basic Plan</h3>
          <p>Access to gym equipment and locker rooms during staffed hours.</p>
          <p class="price">LKR 3,000 / month</p>
        </div>
      </div>

      <div class="card">
        <img src="images/standard-plan.jpg" alt="Standard Plan">
        <div class="card-content">
          <h3>Standard Plan</h3>
          <p>Includes Basic Plan + group fitness classes and extended hours.</p>
          <p class="price">LKR 5,000 / month</p>
        </div>
      </div>
    </div>

    <!-- Second Row -->
    <div class="membership-row">
      <div class="card">
        <img src="images/premium-plan.jpg" alt="Premium Plan">
        <div class="card-content">
          <h3>Premium Plan</h3>
          <p>All Standard benefits + personal training and yoga sessions.</p>
          <p class="price">LKR 9,000 / month</p>
        </div>
      </div>

      <div class="card">
        <img src="images/vip-plan.jpg" alt="VIP Plan">
        <div class="card-content">
          <h3>VIP Plan</h3>
          <p>Unlimited access, nutrition coaching, and exclusive events.</p>
          <p class="price">LKR 15,000 / month</p>
        </div>
      </div>
    </div>
  </section>

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
          <li><a href="membership.php" class="active">Membership</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="trainers.php">Trainers</a></li>
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
