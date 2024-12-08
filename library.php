
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
                    <li class="nav-item"><a class="nav-link" href="search.php">Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="library.php">Library</a></li>
                    <li class="nav-item"><a class="nav-link" href="browse_albums.php">Albums</a></li>
                    <li class="nav-item"><a class="nav-link" href="package.php">Payment</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

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
  <h4 style="color: gray;">Music</h4>
  
  <div class="row g-2">
    <div class="col-6 col-sm-4 col-md-3">
      <a href="music.php" class="btn btn-light w-100">Popular Music</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="music.php" class="btn btn-light w-100">Classical</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="music.php" class="btn btn-light w-100">Traditional</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="music.php" class="btn btn-light w-100">Film and Media Music</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="music.php" class="btn btn-light w-100">Instrument</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="music.php" class="btn btn-light w-100">Mental Health</a>
    </div>
  </div>
</div>

  <br>
  <div class="container">
  <h4 style="color: gray;">Video</h4>
  
  <div class="row g-2">
    <div class="col-6 col-sm-4 col-md-3">
      <a href="video.php" class="btn btn-light w-100">Entertainment</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="education.html" class="btn btn-light w-100">Education</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="personal-lifestyle.html" class="btn btn-light w-100">Personal & Lifestyle</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="information-video.html" class="btn btn-light w-100">Information Video</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="kids-video.html" class="btn btn-light w-100">Kid's Video</a>
    </div>
  </div>
</div>
<br>

  
<div class="container">
  <h4 style="color: gray;">Films</h4>
  
  <div class="row g-2">
    <div class="col-6 col-sm-4 col-md-3">
      <a href="all-films.html" class="btn btn-light w-100">All</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="horror.html" class="btn btn-light w-100">Horror</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="fantasy.html" class="btn btn-light w-100">Fantasy</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="thriller.html" class="btn btn-light w-100">Thriller</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="action.html" class="btn btn-light w-100">Action</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="romance.html" class="btn btn-light w-100">Romance</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="sinhala.html" class="btn btn-light w-100">Sinhala</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="bollywood.html" class="btn btn-light w-100">Bollywood</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="tamil.html" class="btn btn-light w-100">Tamil</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="animation.html" class="btn btn-light w-100">Animation</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="comedy.html" class="btn btn-light w-100">Comedy</a>
    </div>
  </div>
</div>

  <br>
  
  <div class="container">
  <h4 style="color: gray;">Songs</h4>
  
  <div class="row g-2">
    <div class="col-6 col-sm-4 col-md-3">
      <a href="all-songs.html" class="btn btn-light w-100">All</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="romance-songs.html" class="btn btn-light w-100">Romance</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="rap-songs.html" class="btn btn-light w-100">Rap</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="sinhala-songs.html" class="btn btn-light w-100">Sinhala</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="english-songs.html" class="btn btn-light w-100">English</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="tamil-songs.html" class="btn btn-light w-100">Tamil</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="hindi-songs.html" class="btn btn-light w-100">Hindi</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="classical-songs.html" class="btn btn-light w-100">Classical</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="country-songs.html" class="btn btn-light w-100">Country</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="children-songs.html" class="btn btn-light w-100">Children</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="pop-songs.html" class="btn btn-light w-100">Pop</a>
    </div>
  </div>
</div>
<br>

  
  
<div class="container">
  <h4 style="color: gray;">Country</h4>
  
  <div class="row g-2">
    <div class="col-6 col-sm-4 col-md-3">
      <a href="music.php" class="btn btn-light w-100">All</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="english.html" class="btn btn-light w-100">English</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="bollywood.html" class="btn btn-light w-100">Bollywood</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="hollywood.html" class="btn btn-light w-100">Hollywood</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="sinhala.html" class="btn btn-light w-100">Sinhala</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="korean.html" class="btn btn-light w-100">Korean</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="chinese.html" class="btn btn-light w-100">Chinese</a>
    </div>
    <div class="col-6 col-sm-4 col-md-3">
      <a href="others.html" class="btn btn-light w-100">Others</a>
    </div>
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
