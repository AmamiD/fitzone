<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FitZone Trainers</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      background-color: #111;
      color: white;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .trainer-section {
      padding: 120px 30px 60px;
      min-height: 100vh;
    }

    .trainer-section h2 {
      font-size: 36px;
      text-align: center;
      margin-bottom: 50px;
      color: red;
    }

    .trainer-row {
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

    .card-content .specialty {
      font-style: italic;
      margin-top: 8px;
      color: #ddd;
    }

    .card-content .price {
      font-weight: bold;
      font-size: 18px;
      color: #fff;
      margin-top: 10px;
    }

    @media (max-width: 768px) {
      .trainer-row {
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
        <li><a href="membership.php">Membership</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="trainers.php" class="active">Trainers</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>
    <div class="nav-btns">
      <a href="login.php" class="btn-red">Join Now</a>
    </div>
  </header>

  <!-- Trainers Section -->
  <section class="trainer-section">
    <h2>Meet Our Expert Trainers</h2>

    <div class="trainer-row">
      <div class="card">
        <img src="images/trainer1.jpg" alt="Trainer Ashan">
        <div class="card-content">
          <h3>Ashan Perera</h3>
          <p>ISSA Certified Personal Trainer, passionate and disciplined trainer who specializes in building muscle and improving full-body functionality. With over 6 years of experience, he tailors programs that improve strength, mobility, and endurance. Ideal for those aiming to build a stronger, leaner body.</p>
          <p class="specialty">Strength & Functional Trainer</p>
          <p class="price">LKR 2,500 / session</p>
        </div>
      </div>

      <div class="card">
        <img src="images/trainer2.jpg" alt="Trainer Nadeesha">
        <div class="card-content">
          <h3>Nadeesha Fernando</h3>
          <p>RYT 500 Yoga Alliance Certified, With 8 years of experience in yoga and holistic wellness, brings a calming and therapeutic approach to fitness. This sessions focus on flexibility, posture correction, stress relief, and mind-body balance.</p>
          <p class="specialty">Yoga & Mindfulness Coach</p>
          <p class="price">LKR 3,000 / session</p>
        </div>
      </div>

        <div class="card">
        <img src="images/trainer3.jpg" alt="Trainer Kasun">
        <div class="card-content">
          <h3>Kasun Jayawardena</h3>
          <p>ACE Certified Fitness Instructor, Known for his high-energy sessions, creates dynamic and powerful workout routines for fat burning, stamina boosting, and total-body conditioning. Perfect for anyone who loves intensity and fast results.</p>
          <p class="specialty">Cardio & HIIT Specialist</p>
          <p class="price">LKR 4,000 / session</p>
        </div>
      </div>

      <div class="card">
        <img src="images/trainer4.jpg" alt="Trainer Dilani">
        <div class="card-content">
          <h3>Dilani Weerasinghe</h3>
          <p>Certified Sports Nutritionist & Personal Trainer, blends expert nutritional advice with personal training, helping members achieve healthy, sustainable weight management. Friendly approach and custom diet plans make her a go-to coach for transformation journeys.</p>
          <p class="specialty">Nutritionist & Personal Trainer</p>
          <p class="price">LKR 3,500 / session</p>
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
          <li><a href="membership.php">Membership</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="trainers.php" class="active">Trainers</a></li>
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
