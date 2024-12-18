<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['type'] != 'user') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funix - User Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="hom.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="homee.php">FUNIX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="search.php">Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="library.php">Library</a></li>
                    <li class="nav-item"><a class="nav-link" href="browse_albums.php">Albums</a></li>
                    <li class="nav-item"><a class="nav-link" href="package.php">Payment</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <div class="container text-center my-5">
        <h2>Welcome, <?= htmlspecialchars($_SESSION['name']) ?>!</h2>
        <p class="lead">Enjoy unlimited access to music and video streaming on our platform.</p>
        <div>
            <a href="about.php" class="btn btn-primary m-2">About us</a>
            <a href="comments_page.php " class="btn btn-success m-2">comment</a>
            <a href="library.php" class="btn btn-warning m-2">Your favorites</a>
        </div>
    </div>

   
 <!-- Advertisement Box -->
 <div></div>
    <div class="advertisement-box" id="ad-box">
        <div class="ad-content">
           <img src="add.jpeg" alt="Special Offer" class="ad-image"  width=400px height=350px >
          
        

            <h3  style="color:;" > Special Offer on Funix Premium! </h3>
            <p  style="color:; ">Enjoy 30% off on our Premium Subscription. Stream ad-free music and videos now! Limited time offer.</p>
           
            <button onclick="closeAd()" class="btn btn-warning">Close </button>
        </div>
    </div>
   
        

    <div class="about-section">
    
    <div class="row align-items-center">
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <p class="text">
               
                FUNIX - Music, Video & Endless Fun!<br><br>
                At Funix, we believe that music and video are more than just forms of entertainment; they are powerful tools for connection, expression, and inspiration. Whether you're a fan of the latest chart-topping hits, songs, classic movies, binge-worthy TV series, or exclusive indie content, Funix is here to bring you a world of streaming possibilities right at your fingertips.
            </p>
        </div>
        <div class="col-md-4 text-center">
            <img src="logoo.png" alt="Funix Logo" class="about-logo" width=300px height=300px>
        </div>
    </div>
</div>



    <!-- Popular This Week -->
    <div class="container my-5">
        <h4 class="text-light">Popular This Week</h4>
        <div class="row">
        
                <div class="col-md-2">
                    <div class="card">
                        <img src="OIP.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ananthen aa tharu kumara </h5>
                            
                            <a href="Ananthayen Aa Tharu Kumara Song.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card"  >
                        <img src="song2.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Becky G-  Bella Ciao</h5>
                            
                            <a href="Becky_G_-_Bella_Ciao_Official_Video.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card">
                        <img src="images.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Abnormal music for you</h5>
                            
                            <a href="abnormal-for-you-255737.mp3" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card">
                        <img src="OIP.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ananthen aa tharu kumara </h5>
                            
                            <a href="Ananthayen Aa Tharu Kumara Song.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card">
                        <img src="song4.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dreamers offical.mp3</h5>
                            
                            <a href="C:\xampp\htdocs\FinalProject\Dreamers.mp3" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>

    <div class="container my-5">
        <h4 class="text-light">New Release</h4>
        <div class="row">
         
                <div class="col-md-2">
                    <div class="card">
                        <img src="song5.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Arash - One day ft Helena </h5>
                        
                            <a href="Arash - One day ft Helena.mp3" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card">
                        <img src="song2.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Becky_G_-_Bella_Ciao_Official_Video </h5>
                            
                            <a href="Becky G-Bella Ciao Official Video[GetVideo.watch].mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card">
                        <img src="song6.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dance Pe Chance Full Song  </h5>
                            
                            <a href="Dance Pe Chance _ Full Song _ Rab Ne Bana Di Jodi _ Shah Rukh Khan_ Anushka _ Sunidhi_ Labh Janjua_640x360.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card">
                        <img src="song7.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Oh Na Na Na english song mp3 </h5>
                            
                            <a href="Oh Na Na Na.mp3" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card">
                        <img src="song8.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Maari 2 - Rowdy Baby  </h5>
                            
                            <a href="Maari 2 - Rowdy Baby (Video Song) Dhanush Sai Pallavi Yuvan Shankar Raja Balaji Mohan.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>

    <div class="container my-5">
        <h4 class="text-light">Top Hits</h4>
        <div class="row">
            
                <div class="col-md-2">
                    <div class="card">
                        <img src="song9.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Justin Bieber - Baby</h5>
                            
                            <a href="Justin Bieber - Baby (Official Music Video) ft. Ludacris_640x360.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card">
                        <img src="song8.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Maari 2 - Rowdy Baby  </h5>
                            <p class="card-text"></p>
                            <a href="Maari 2 - Rowdy Baby (Video Song) Dhanush Sai Pallavi Yuvan Shankar Raja Balaji Mohan.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card">
                        <img src="song10.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">NOZIYA KAROMATULLO  </h5>
                            
                            <a href="NOZIYA KAROMATULLO - MAYDA-MAYDA (CONCERT 'GIRYAI JON').mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                
            

                <div class="col-md-2">
                    <div class="card">
                        <img src="song11.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hindi Cover dance </h5>
                            
                            <a href="cover.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card">
                        <img src="images.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Abnormal music for you </h5>
                            
                            <a href="abnormal-for-you-255737.mp3" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>


    <!-- Footer -->
    <footer class="text-center text-light py-3 bg-dark">
        <p>© 2024 Funix. All Rights Reserved | Follow us on:
            <a href="#"><i class="bx bxl-twitter text-primary"></i></a>
            <a href="#"><i class="bx bxl-facebook text-info"></i></a>
            <a href="#"><i class="bx bxl-instagram text-danger"></i></a>
        </p>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
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
