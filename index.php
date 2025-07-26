<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness Center</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body>
    <header class="navbar">
    <div class="logo">
        <img src="images/logo.png" alt="FitZone Logo">
        
    </div>
    <nav>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="membership.php">Membership</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="trainers.php">Trainers</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
    <div class="nav-btns">
        <a href="login.php" class="btn-red">Join Now</a>
      <a href="dashboard.php">
  <img src="images/profile-icon.png" alt="Profile" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
</a>


    </div>
</header>


    <section class="hero">
        <h1>Your Fitness <br>Journey <br>Starts Here</h1>
        <div class="hero-buttons">
            <a href="register.php" class="btn-red">Become a Member</a>
            <a href="#contact" class="btn-dark">Contact Us</a>
        </div>
    </section>

    <!-- About Us Section -->
<section id="about" style="background: url('images/about-bg.jpg') no-repeat center center/cover; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; min-height: 100vh; padding: 50px 20px; color: white;">
    
    <div style="flex: 1 1 400px; display: flex; justify-content: center; align-items: center; padding: 20px;">
        <img src="images/about.jpg" alt="FitZone Interior" style="max-width: 100%; height: auto; border-radius: 20px; box-shadow: 0 0 20px rgba(0,0,0,0.5);">
    </div>
    
    <div style="flex: 1 1 500px; padding: 20px; background: rgba(0, 0, 0, 0.6); border-radius: 15px; margin: 20px;">
        <h1 style="font-size: 48px; margin-bottom: 20px;">About Us</h1>
        <p style="font-size: 18px; line-height: 1.8;">
            At FitZone Fitness Center, we believe that health is a lifestyle. Since our launch, we have committed to delivering a premium fitness experience for everyone. With state-of-the-art equipment, certified trainers, and personalized programs, our facility is built to help you transform your goals into reality.
        </p>
        <p style="font-size: 18px; line-height: 1.8;">
            Whether you’re looking to lose weight, build strength, or improve your overall wellness, our friendly team is here to support your journey every step of the way.
        </p>
    </div>

</section>
<!-- Contact Us Section -->
<section id="contact" style="background-color: black; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; min-height: 100vh; padding: 50px 20px; color: white;">
  
  <!-- Contact Form Left -->
  <div style="flex: 1 1 500px; padding: 20px; background: rgba(0, 0, 0, 0.6); border-radius: 15px; margin: 20px;">
    <h1 style="font-size: 48px; margin-bottom: 20px;">Contact Us</h1>
    <p style="font-size: 18px; line-height: 1.8;">
      We'd love to hear from you! Whether you have a question about memberships, services, personal training, or anything else, our team is ready to help.
    </p>
    <form action="send_message.php" method="POST" style="margin-top: 20px;">
      <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 12px; margin-bottom: 15px; border-radius: 5px; border: none;" />
      <input type="email" name="email" placeholder="Your Email" required style="width: 100%; padding: 12px; margin-bottom: 15px; border-radius: 5px; border: none;" />
      <textarea name="message" placeholder="Your Message" rows="5" required style="width: 100%; padding: 12px; margin-bottom: 15px; border-radius: 5px; border: none;"></textarea>
      <button type="submit" class="btn-red" style="padding: 12px 25px; border: none; border-radius: 5px; cursor: pointer;">Send Message</button>
    </form>
  </div>

  <!-- Image Right -->
  <div style="flex: 1 1 400px; display: flex; justify-content: center; align-items: center; padding: 20px;">
    <img src="images/contact.png" alt="Contact Us" style="max-width: 100%; height: auto; border-radius: 20px; box-shadow: 0 0 20px rgba(0,0,0,0.5);">
  </div>

</section>




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
