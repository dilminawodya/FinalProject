<?php
session_start();
include("connect.php");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <style>
        body {
           background: rgb(21, 21, 44);
           font-family: Arial, Helvetica, sans-serif;
     }
     .main-section {
    margin-left: 300px;
    background: #261e3c;
    height: 100vh;
    overflow-y: auto;
   }
   footer .bx {
    color: #ffffff; /* Ensure white color for visibility */
    font-size: 1.5rem;
    margin-right: 1rem; /* Add spacing between icons */
    transition: color 0.3s ease;
}

footer .bx:hover {
    color: #007bff; /* Change color on hover */
}

/* Navigation Container Styling */
.nav-container {
    background-color: #1c1224; /* Matching the top-nav background */
    padding: 10px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    position: sticky; /* Keeps the nav menu fixed at the top during scrolling */
    top: 0;
    z-index: 999; /* Ensures it stays above other elements */
}

/* Navigation Menu Styling */
.nav-menu {
    list-style-type: none;
    display: flex;
    padding: 0;
    margin: 0;
    overflow-x: auto; /* Enables horizontal scrolling for smaller screens */
}

.nav-menu li {
    margin-right: 20px;
}

.nav-menu li a {
    text-decoration: none;
    color: #ffffff; /* White text for visibility on dark background */
    font-size: 16px;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.nav-menu li a:hover {
    background-color: #3a3053; /* A lighter shade for hover effect */
    color: #ffffff;
}

/* Optional: Active Link Styling */
.nav-menu li a.active {
    background-color: #584466; /* Highlight the active page */
    color: #ffffff;
}






    </style>
    

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



    
    <title>Home</title>
</head>
<body >



    <!-- Sidebar Section -->
    
    <div class="sidebar">
        <div class="sidebar-nav">
            <div class="logo">
                <img src="logoo.png" alt="Logo" width="180" height="175">
            </div>
            <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
           

            <ul>
                <li><a href="home.php">
                    <span><i class="fa-solid fa-house"></i></span>
                    <span>Home</span>
                </a></li>

                <li><a href="search.php">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <span>Search & Discovery</span>
                </a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-book-open"></i></span>
                    <span>Library</span>
                </a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-download"></i></span>
                    <span>Download</span>
                </a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-box"></i></span>
                    <span>Package</span>
                </a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-user"></i></span>
                    <span>User Profile</span>
                </a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-gear"></i></span>
                    <span>Settings</span>
                </a></li>
            </ul>

            <!-- Privacy Section -->
            
            <div class="privacy">
                <ul>
                    <li>
                        <a href="about.php">About Us</a><br>
                        <a href="privacy policy.php">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="top-nav">
            <div class="prev-btn">
                <h3 style="color:white;font-width:500;font-family: Arial, Helvetica, sans-serif;">Funix - Music,Video & Funless Fun</h3>

            </div>

            <div class="login-btn">
                <button class="login"><a href="login.php">login</a>
               
                <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?></button>
          <button class="register"> <a href="logout.php">Logout</a>

            </div>

            </div>

            
        <div class="nav-container">
        <ul class="nav-menu">
            <li><a href="#">All</a></li>
            <li><a href="#">Music</a></li>
            <li><a href="#">Songs</a></li>
            <li><a href="#">Films</a></li>
            <li><a href="#">Tv series</a></li>
            <li><a href="#">Country</a></li>
            <li><a href="#">Mixes</a></li>
            <li><a href="#">Playlists</a></li>
            <li><a href="#">Top hits</a></li>
            <li><a href="#">Popular</a></li>
            <li><a href="#">New release</a></li>
            
        </ul>
    </div><br><br>
            
     

        <div class="container">
        <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">What is the Funix,</h4>
        <div class="row justify-content-center">
        <div class="col-md-8">
            <p style="color:white;text-align:justify;" >
            Welcome to Funix – Music, video & Endless Fun<br>

           At Funix, we believe that music and video are more than just forms of entertainment; they are powerful tools for connection, expression, and inspiration. Whether you're a fan of the latest chart-topping hits, song, classic movies, binge-worthy TV series, or exclusive indie content, Funix is here to bring you a world of streaming possibilities right at your fingertips.
            </p>

        </div>
        <div class="col-md-4">
            <img src="logoo.png" alt="" width="300px" hight="300px">
        </div> 
     </div></div>

    <!-- Advertisement Box -->
     <div></div>
    <div class="advertisement-box" id="ad-box">
        <div class="ad-content">
           <img src="a8.jpg" alt="Special Offer" class="ad-image">
            <h3  style="color:;" > Special Offer on Funix Premium! </h3>
            <p  style="color:; ">Enjoy 30% off on our Premium Subscription. Stream ad-free music and videos now! Limited time offer.</p>
           
            <button onclick="closeAd()" class="btn btn-warning">Close </button>
        </div>
    </div>
        
        <div class="container">
    <div class="popular-this-week">
        <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">Popular This Week</h4>

        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song1.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song2.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song3.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song4.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song5.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <br>
    
<div class="container">
    <div class="new-relase">
        <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">New Release</h4>

        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song1.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song2.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song3.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song4.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song5.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <br>
    
<div class="container">
    <div class="top-hits">
        <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">Top Hits</h4>

        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song1.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song2.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song3.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song4.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-2">
                <div class="card">
                    <div class="item">
                        <img src="a8.jpg" class="card-img-top" alt="...">
                        <div class="play-btn">
                            <a href="song5.html"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <h4>Song Title</h4>
                        <p>Artist Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
   
    <footer class="text-light pt-5" style="background-color: #1c1224;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="logoo.png" alt="Logo" width="150" height="150">
                <h5>Funix</h5>
                <p>At Funix, music and video inspire, connect, and entertain. Enjoy hits, classics, series, and indie exclusives all at your fingertips.</p>
            </div>
            <div class="col-md-3">
                <h5>Using link</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Home</a></li><br>
                    <li><a href="#" class="text-light">Playlists</a></li><br>
                    <li><a href="#" class="text-light">User profile</a></li><br>
                    <li><a href="#" class="text-light">About us</a></li><br>
                    <li><a href="#" class="text-light">Package</a></li><br>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Support</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Settings</a></li><br>
                    <li><a href="#" class="text-light">Edit profile</a></li><br>
                    <li><a href="#" class="text-light">Privacy Policy</a></li><br>
                    <li><a href="#" class="text-light">Terms of Service</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Follow us</h5><br>
                <div>
                    <a href="#" class="text-light me-3"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="text-light me-3"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="text-light"><i class='bx bxl-facebook-circle'></i></a>
                </div>
            </div>
        </div>
        <hr class="my-4 text-light">
        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-0">© 2024 MusicStream. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Include Boxicons Library -->
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">







    
    <!-- JavaScript for Ad Behavior -->
    <script>
        // Function to close the advertisement box
        function closeAd() {
            const adBox = document.getElementById('ad-box');
            adBox.style.display = 'none';
        }

        // Function to show the ad box after a delay (e.g., 5 seconds)
        setTimeout(() => {
            const adBox = document.getElementById('ad-box');
            adBox.style.display = 'flex';
        }, 5000); // Show ad after 5 seconds
    </script>


   
    </div> 
</body>
</html>  