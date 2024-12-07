
<?php
include 'db_connect.php';
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
    <link rel="stylesheet" href="playlist.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FUNIX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="search.php">search</a></li>
                    <li class="nav-item"><a class="nav-link" href="library.php">Library</a></li>
                   
                    <li class="nav-item"><a class="nav-link" href="browse_albums.php">Albums</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href=".php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav></div>

    <div class="menu-container">
    <ul class="nav-menu">
        <li><a href="library.php" class="btn-menu">Catalogue</a></li>
        <li><a href="browse_playlists.php" class="btn-menu">Playlist</a></li>
        <li><a href="browse_artists.php" class="btn-menu">Artists</a></li>
    </ul>
</div>



    <!-- Page Header -->
    <header class="text-center py-4">
        <h1>Catalogue</h1>
        <p>Explore a variety of Catalogue curated by our users and admins</p>
    </header>
<br>

    <div class="container">
  <h4 style=color:gray>music</h4>
  
    <div class="row g-2">
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Popular Music</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Classical</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Traditional</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Film and Media Music</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Instrument</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Mental Health</button></div>
    </div>
  </div>
  <br>
  
  <div class="container">
  <h4 style=color:gray>Video</h4>
  
    <div class="row g-2">
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Entertainment</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Education</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Personal & Lifestyle</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Information video</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Kid's video</button></div>
    </div>
  </div>
  <br>
  
  <div class="container">
  <h4 style=color:gray>Films</h4>
  
    <div class="row g-2">
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">All</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Horror</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Fantasy</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Thriller</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Action</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Romance</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Sinhala</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Bollywood</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Tamil</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Animation</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Comedy</button></div>
    </div>
  </div>
  <br>
  
  
  <div class="container">
  <h4 style=color:gray>Songs</h4>
  
    <div class="row g-2">
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">All</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Romance</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Rap</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Sinhala</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">English</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Tamil</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Hindi</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Classical</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Country</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Children</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Pop</button></div>
    </div>
  </div>
  <br>
  
  <div class="container">
  <h4 style=color:gray>TV Show</h4>
  
    <div class="row g-2">
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">All</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Drama</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Comedy</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Romance</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">English</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Horror</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Country</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Reality show</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Family</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Children</button></div>
      
    </div>
  </div>
  <br>
  
  <div class="container">
  <h4 style=color:gray>Country</h4>
  
    <div class="row g-2">
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">All</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">English</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Bollywood</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Hollywood</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Sinhala</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Korean</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Chines</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Others</button></div>
      
    </div>
  </div>
  <br>
  
  
  <div class="container">
  <h4 style=color:gray>Vlogs</h4>
  
    <div class="row g-2">
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">All</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">English</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Sinhala</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Family</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Travel</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Lifestyle</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Food</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Fashion & Beauty</button></div>
      <div class="col-6 col-sm-4 col-md-3"><button class="btn btn-light w-100">Health</button></div>
      
    </div>
  </div>
  <br>
  
  



      <!-- Footer -->
      <footer class="text-center text-light py-3 bg-dark">
        <p>© 2024 Funix. All Rights Reserved | Follow us on:
            <a href="#"><i class="bx bxl-twitter text-primary"></i></a>
            <a href="#"><i class="bx bxl-facebook text-info"></i></a>
            <a href="#"><i class="bx bxl-instagram text-danger"></i></a>
        </p>
    </footer>
