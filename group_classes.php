<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Classes | FitZone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="program-page group-classes-page container">
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">
            <img src="images/logo.png" alt="FitZone Logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="membership.php">Membership</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="trainers.php">Trainers</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="index.php#contact">Contact Us</a></li>
            </ul>
        </nav>
        <div class="nav-right">
            <a href="login.php" class="btn-red">Join Now</a>
            <a href="dashboard.php">
                <img src="images/profile-icon.png" alt="Profile" class="profile-img">
            </a>
        </div>
    </header>
    <main>
        <section class="program-section group-classes-section">
            <h2 class="group-classes-title">Our Group Classes</h2>
            
            <!-- First Row - 3 Classes -->
            <div class="program-row group-classes-row">
                <!-- Yoga -->
                <div class="program-card group-classes-card">
                    <h3>Yoga</h3>
                    <p>Improve flexibility, posture, and mental clarity through a mix of Hatha, Vinyasa, and Restorative yoga styles. Ideal for all levels and perfect for stress relief and recovery.</p>
                    <div class="schedule-title">Schedule:</div>
                    <ul>
                        <li><b>Monday:</b> Gentle Flow Yoga – 6:30 AM</li>
                        <li><b>Wednesday:</b> Power Yoga – 6:00 PM</li>
                        <li><b>Friday:</b> Restorative Yoga – 7:00 PM</li>
                        <li><b>Sunday:</b> Morning Vinyasa – 7:30 AM</li>
                    </ul>
                </div>
                <!-- Cardio Blast -->
                <div class="program-card group-classes-card">
                    <h3>Cardio Blast</h3>
                    <p>A high-energy class combining aerobics, dance, and interval training. Designed to torch calories, improve stamina, and keep your heart rate elevated.</p>
                    <div class="schedule-title">Schedule:</div>
                    <ul>
                        <li><b>Monday:</b> Morning Blast – 7:00 AM</li>
                        <li><b>Tuesday:</b> Lunchtime Burn – 12:30 PM</li>
                        <li><b>Thursday:</b> Evening Cardio Jam – 6:00 PM</li>
                        <li><b>Saturday:</b> Weekend Sweat – 9:00 AM</li>
                    </ul>
                </div>
                <!-- Strength Training Group -->
                <div class="program-card group-classes-card">
                    <h3>Strength Training Group</h3>
                    <p>Focus on building lean muscle through guided group lifting sessions using dumbbells, barbells, and bodyweight. Great for toning, shaping, and boosting strength.</p>
                    <div class="schedule-title">Schedule:</div>
                    <ul>
                        <li><b>Monday:</b> Upper Body Focus – 5:00 PM</li>
                        <li><b>Wednesday:</b> Lower Body Strength – 7:00 AM</li>
                        <li><b>Friday:</b> Full-Body Power – 6:00 PM</li>
                        <li><b>Sunday:</b> Core & Conditioning – 8:00 AM</li>
                    </ul>
                </div>
            </div>
            
            <!-- Second Row - 2 Classes -->
            <div class="program-row group-classes-row">
                <!-- HIIT -->
                <div class="program-card group-classes-card">
                    <h3>HIIT (High-Intensity Interval Training)</h3>
                    <p>Intense, short bursts of exercise followed by brief recovery periods. Ideal for fat burning, metabolic boost, and quick fitness gains in less time.</p>
                    <div class="schedule-title">Schedule:</div>
                    <ul>
                        <li><b>Tuesday:</b> 20-Min Express HIIT – 7:30 AM</li>
                        <li><b>Thursday:</b> HIIT + Abs – 6:30 PM</li>
                        <li><b>Saturday:</b> Tabata Style HIIT – 8:30 AM</li>
                        <li><b>Sunday:</b> HIIT Challenge – 5:00 PM</li>
                    </ul>
                </div>
                <!-- Zumba -->
                <div class="program-card group-classes-card">
                    <h3>Zumba</h3>
                    <p>A fun, dance-based cardio workout combining Latin rhythms and energetic choreography. Burn calories, improve coordination, and enjoy every beat!</p>
                    <div class="schedule-title">Schedule:</div>
                    <ul>
                        <li><b>Monday:</b> Zumba Fit – 6:00 PM</li>
                        <li><b>Wednesday:</b> Dance & Burn – 7:00 PM</li>
                        <li><b>Friday:</b> Party Friday Zumba – 5:30 PM</li>
                        <li><b>Saturday:</b> Morning Dance Vibes – 10:00 AM</li>
                    </ul>
                </div>
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
                    <li><a href="membership.php">Membership</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="trainers.php">Trainers</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                        <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.326 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0"/></svg>
                    </a>
                    <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                        <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.241 1.308 3.608.058 1.266.069 1.646.069 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.241 1.246-3.608 1.308-1.266.058-1.646.069-4.85.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.241-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.515 2.497 5.782 2.225 7.148 2.163 8.414 2.105 8.794 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.771.131 4.659.425 3.678 1.406 2.697 2.387 2.403 3.499 2.344 4.78 2.285 6.06 2.272 6.469 2.272 12c0 5.531.013 5.94.072 7.22.059 1.281.353 2.393 1.334 3.374.981.981 2.093 1.275 3.374 1.334 1.28.059 1.689.072 7.22.072s5.94-.013 7.22-.072c1.281-.059 2.393-.353 3.374-1.334.981-.981 1.275-2.093 1.334-3.374.059-1.28.072-1.689.072-7.22s-.013-5.94-.072-7.22c-.059-1.281-.353-2.393-1.334-3.374C21.393.425 20.281.131 19 .072 17.72.013 17.311 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                        <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557a9.83 9.83 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724c-.951.564-2.005.974-3.127 1.195a4.916 4.916 0 0 0-8.38 4.482C7.691 8.095 4.066 6.13 1.64 3.161c-.542.929-.856 2.01-.857 3.17 0 2.188 1.115 4.117 2.823 5.254a4.904 4.904 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 0 1-2.224.084c.627 1.956 2.444 3.377 4.6 3.417A9.867 9.867 0 0 1 0 21.543a13.94 13.94 0 0 0 7.548 2.209c9.058 0 14.009-7.496 14.009-13.986 0-.21 0-.423-.016-.634A9.936 9.936 0 0 0 24 4.557z"/></svg>
                    </a>
                    <a href="https://youtube.com" target="_blank" aria-label="YouTube">
                        <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a2.994 2.994 0 0 0-2.112-2.112C19.454 3.5 12 3.5 12 3.5s-7.454 0-9.386.574A2.994 2.994 0 0 0 .502 6.186C0 8.12 0 12 0 12s0 3.88.502 5.814a2.994 2.994 0 0 0 2.112 2.112C4.546 20.5 12 20.5 12 20.5s7.454 0 9.386-.574a2.994 2.994 0 0 0 2.112-2.112C24 15.88 24 12 24 12s0-3.88-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 FitZone Fitness Center. All rights reserved.</p>
        </div>
    </footer>
</body>
</html> 