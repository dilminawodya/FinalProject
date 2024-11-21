<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music & Video Streaming Platform</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- Header with Navbar -->
    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">Library</a>
            <a href="#">Contact</a>
        </nav>
        <form action="#" class="search-bar">
            <input type="text" placeholder="Search">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </header>

    <!-- Background Image -->
    <div class="background"></div>

    <!-- Main Container -->
    <div class="container">
        <!-- Left Side: Logo and Welcome Text -->
        <div class="content">
            <img src="logoo.png" alt="Logo" width="350" height="350">
            <div class="text-sci">
                <h2>Welcome!<br><span>To Our Streaming Platform</span></h2>
                <p>Stream your favorite music and videos anytime, anywhere.</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
        </div>

        <!-- Right Side: Login and Register Forms -->
        <div class="logreg-box">
            

            <!-- Register Form -->
            <div class="form-box register">
                <form id="registerForm">
                    <h2>Register</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user-circle'></i></span>
                        <input type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxl-gmail'></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox"> I agree to the terms & conditions</label>
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>
</html>

