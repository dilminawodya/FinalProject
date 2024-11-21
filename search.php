<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
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
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
    <title>search</title>
</head>
<body>
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
                <button class="login"><a href="login.php">login</a></button>
                <button class="register"><a href="register.php">Register</a></button>

            </div>
            
        </div><br><br>

       <!-- Search Bar -->
        <div class="container">
        <form class="d-flex me-3" role="search" method="POST" action="search.php">
        <input class="form-control me-2" type="search" name="query" placeholder="Search for music, videos, or artists" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
        </form>

      </div>
     <br><br>

     <div class="container">
  <div class="recommended-for-you">
      <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">Recommended For You</h4>
  </div>
</div>
  
<div class="container">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 col-lg-3">
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

        <!-- Card 2 -->
        <div class="col-md-4 col-lg-3">
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

        <!-- Card 3 -->
        <div class="col-md-4 col-lg-3">
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
        <div class="col-md-4 col-lg-3">
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
    </div>("<br>")

    <!-- Row 2 -->
    <div class="row">
        <!-- Card 5 -->
        <div class="col-md-4 col-lg-3">
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

        <!-- Card 6 -->
        <div class="col-md-4 col-lg-3">
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

        <!-- Card 7 -->
        <div class="col-md-4 col-lg-3">
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

        <!-- Card 8 -->
        <div class="col-md-4 col-lg-3">
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
    </div>("<br>")

    <!-- Row 3 -->
    <div class="row">
        <!-- Card 9 -->
        <div class="col-md-4 col-lg-3">
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

        <!-- Card 10 -->
        <div class="col-md-4 col-lg-3">
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

        <!-- Card 11 -->
        <div class="col-md-4 col-lg-3">
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

        <!-- Card 12 -->
        <div class="col-md-4 col-lg-3">
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
    </div>
</div> ("<br>")

<div class="container">
    <div class="row">
        <!-- Your existing cards go here -->
    </div>

    <!-- Adding a video section -->
    <div class="row">
        <div class="col-12">
            <h3 style="color:white; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 22px;">Featured Video</h3>
            <div class="video-container" style="text-align:center; margin-top:20px;">
                <!-- Video Embed -->
                <video width="100%" controls>
                    <source src="/mnt/data/Ananthayen%20Aa%20Tharu%20Kumara%20Song.mp4" type="video/mp4">
                    <!-- Add other video formats if needed -->
                    <source src="/mnt/data/Ananthayen%20Aa%20Tharu%20Kumara%20Song.ogg" type="video/ogg">
                    <source src="/mnt/data/Ananthayen%20Aa%20Tharu%20Kumara%20Song.webm" type="video/webm">
                 
                </video>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4 col-lg-3">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="item">
            <!-- Card image with rounded corners and hover effect -->
            <img src="a8.jpg" class="card-img-top rounded-3" alt="Song Image">
            
            <!-- Play button with a subtle hover effect -->
            <div class="play-btn position-absolute top-50 start-50 translate-middle">
                <a href="song3.html" class="btn btn-light rounded-circle p-3">
                    <i class="fa-solid fa-play text-primary" style="font-size: 2rem;"></i>
                </a>
            </div>
        </div>
        
        <!-- Card content -->
        <div class="card-body text-center p-4">
            <h4 class="card-title text-black mb-2" style="font-family: 'Arial', sans-serif;">Song Title</h4>
            <p class="card-text text-dask" style="font-size: 0.9rem;">Artist Name</p>
        </div>
    </div>
</div>




      
</body>
</html>