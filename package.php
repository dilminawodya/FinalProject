<?php
// Include database connection file
include 'db_connect.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNIX Packages</title>
    <link rel="stylesheet" href="packages.css"> <!-- Updated Link to the CSS file -->
</head>
<body>


    

    <!-- Header Section -->
    <header class="packages-header">
        <h1>Choose Your Plan</h1>
        <p>Find the package that fits your needs and enjoy premium content.</p>
    </header>

    
  
        <div class="ad-content"  >
           <img src="addd.jpg" alt="Special Offer" class="ad-image"  width=1300px height=550px >
          
        

            <h2  style="color:text-align: center;" > Special Offer on Funix Premium! </h2>
            <p  style="color:text-align: center; ">Enjoy 30% off on our Premium Subscription. Stream ad-free music and videos now! Limited time offer.</p>
           
        
    </div><br>

   
    <!-- Packages Section -->
    <main class="packages">
        <div class="package-card">
            <h2>Individual</h2>
            <p>Perfect for single users.</p>
            <p><strong>$9.99/month</strong></p>
            <button onclick="window.location.href='bowser_payment.php'">Pay Now</button>
        </div>
        <div class="package-card">
            <h2>Student</h2>
            <p>Exclusive discounts for students.</p>
            <p><strong>$4.99/month</strong></p>
            <button onclick="window.location.href='bowser_payment.php'">Pay Now</button>
        </div>
        <div class="package-card">
            <h2>Family</h2>
            <p>Share with up to 5 family members.</p>
            <p><strong>$14.99/month</strong></p>
            <button onclick="window.location.href='bowser_payment.php'">Pay Now</button>
        </div>
    </main>

   
   


    <!-- Footer -->
    <footer class="site-footer">
        <p>&copy; 2024 FUNIX Music & Video Streaming Platform. All rights reserved.</p>
    </footer>
</body>
</html>
