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


    </style>
    

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
    <title>Home</title>
</head>
<body >
    <!-- Sidebar Section -->
    
    <div class="sidebar">
        <div class="sidebar-nav">
            <div class="logo">
                <img src="logoo.png" alt="Logo" width="200" height="200">
            </div>
            <ul>
                <li><a href="home.php">
                    <span><i class="fa-solid fa-house"></i></span>
                    <span>Home</span>
                </a></li>

                <li><a href="#">
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
                <button class="login"><a href="login.php">login</a></button>
                <button class="register"><a href="register.php">Register</a></button>

            </div>
            
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
    </div>
</div> <br>


    </div>
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
    
</body>
</html>  