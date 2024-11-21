<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>

* {   
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Setting the body background color to blue */
body {
    background-color: blue;
    font-family: Arial, Helvetica, sans-serif;
}

/* Sidebar styling */
.sidebar {
    width: 300px;
    background: #302936;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    padding: 10px;
}

/* Sidebar navigation styling */
.sidebar-nav {
    background: rgb(42, 41, 60);
    border-radius: 10px;
    padding: 20px 10px;
    margin-bottom: 10px;
}

.sidebar-nav ul {
    list-style: none;
}

.sidebar-nav ul li {
    padding: 10px 20px;
}

/* Link styles */
.sidebar-nav ul li a {
    text-decoration: none;
    color: antiquewhite;
    font-size: 16px;
    font-weight: 600;
    display: flex;
    align-items: center;
}

.sidebar-nav ul li a:hover {
    color: beige;
}

.sidebar-nav ul li a i {
    font-size: 20px;
    margin-right: 10px;
}

/* Privacy section styles */
.privacy ul li a {
    text-decoration: none;
    color: rgb(242, 236, 236);
    font-size: 12px;
    font-weight: 200;
    margin: 0 6px;
}

.privacy ul {
    padding-bottom: 5px;
    margin-top: 10px;
}

/* Logo styling */
.logo {
    text-align: center;
    margin-bottom: 20px;
}
.main-section{
    margin-left: 300px;
    background: #261e3c;
    height: 100vh;
}
.main-section .top-nav{
    padding: 20px 30px;
    background: #1c1224;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.main-section .top-nav  button {
  
    border: 0;
    outline: 0;
}
.main-section .top-nav .prev-btn button i{
   color: rgb(131, 114, 92);
   font-size: 22px;
   margin-right: 10px;
   
}
.top-nav .login-btn .login{
    color: rgb(47, 52, 50);
    font-size: 16px;
    font-weight: 600;
    margin-right: 25px;
}
.top-nav .login-btn .login:hover{
    color: azure;
     
}
.top-nav .login-btn .login{
    color: rgb(47, 52, 50);
    font-size: 16px;
    font-weight: 600;
    background: #e0dee6;
    padding: 6px 10px;
    border-radius: 20px;
}
.top-nav .login-btn .login{
    background: #c3acd9;
}
.top-nav .login-btn .register{
    color: rgb(47, 52, 50);
    font-size: 16px;
    font-weight: 600;
    background: #e0dee6;
    padding: 6px 10px;
    border-radius: 20px;
}
.top-nav .login-btn .register{
    background: #c3acd9;}
    
.top-nav .login-btn .register:hover{
        color: azure;
         
    }



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
    
    
    <title>about us</title>
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
                        <a href="#">Privacy Policy</a>
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
    <div class="row">
      <div class="col">
        <h1 style="color:white;text-align: center;font-family: 'Times New Roman', Times, serif; ">Privacy Policy</h1>
      </div>
    </div><br><br>


        <div class="container">
        
        <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">Welcome to Funix!</h4><br>
        <p style="color:white;text-align:justify;" >
        We value your privacy and are committed to protecting your personal information. This Privacy Policy outlines how we collect, use, store, and share your data when you use our Funix Music & Video Streaming Platform. By accessing or using Funix, you agree to this Privacy Policy. Please take a moment to read and understand our practices.
        </p> ("<br>")
         
        <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">1. Information We Collect</h4><br>
       
        <p style="color:white;text-align:justify;"><b>1.1 Personal Information</b></p>
        <p style="color:white;text-align:justify;">When you register on Funix, we may  address, and password.</p>
        <p style="color:white;text-align:justify;">-Payment Details : Billing address and payment infcollect the following personal information:</p>
        <p style="color:white;text-align:justify;">-Account Information : Username, emailormation (e.g., credit card details) for subscription packages.</p>
        <p style="color:white;text-align:justify;">-Profile Data: Information you choose to provide, such as your favorite genres, playlists, and content preferences.</p><br>
        
        <p style="color:white;text-align:justify;"><b>1.2 Usage Data</b></p>
        <p style="color:white;text-align:justify;">We collect information about how you use Funix, including:</p>
        <p style="color:white;text-align:justify;">-Streaming history and search queries.</p>
        <p style="color:white;text-align:justify;">-Download activity.</p>
        <p style="color:white;text-align:justify;">-Interaction with playlists, recommendations, and downloaded content.</p>
        <p style="color:white;text-align:justify;">-Device information (e.g., browser type, operating system).</p><br>

        <p style="color:white;text-align:justify;"><b>1.3 Cookies and Tracking Technologies</b></p>
        <p style="color:white;text-align:justify;">We use cookies, web beacons, and similar technologies to track your activity on our platform, enhance your experience, and offer personalized content. You can manage cookie settings through your browser.</p><br>

        <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">2. How We Use Your Information</h4><br>

        <p style="color:white;text-align:justify;">We use your information for the following purposes: </p>

        <p style="color:white;text-align:justify;">Account Management : To create and maintain your account, verify your identity, and process payments.</p>
        <p style="color:white;text-align:justify;">Personalization : To provide tailored music and video recommendations based on your preferences and activity.</p>
        <p style="color:white;text-align:justify;"> Service Improvement: To analyze usage patterns and enhance the performance, features, and security of our platform.</p>
        <p style="color:white;text-align:justify;">Communication : To send you updates, notifications, and promotional messages. You can opt-out of promotional communications at any time.</p>
        <p style="color:white;text-align:justify;">Legal Compliance : To comply with legal obligations and resolve disputes.</p><br>

        <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">3. How We Share Your Information</h4><br>

        <p style="color:white;text-align:justify;">We do not sell your personal information. However, we may share your data in the following cases:</p>

        <p style="color:white;text-align:justify;">Service Providers : With third-party vendors who assist us with payment processing, data analysis, and customer support.</p>
        <p style="color:white;text-align:justify;">Legal Requirements : If required by law or to protect our rights, user safety, and the security of our platform.</p>
        <p style="color:white;text-align:justify;"> Business Transfers : In the event of a merger, acquisition, or sale of assets, your information may be transferred as part of the business transaction.</p><br>

        <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">4. Your Privacy Rights</h4><br>

        <p style="color:white;text-align:justify;">You have certain rights regarding your personal information, including:</p>

            <p style="color:white;text-align:justify;">Access and Correction : You can access and update your profile information at any time.</p>
            <p style="color:white;text-align:justify;">Data Deletion : You may request the deletion of your account and personal data. Please contact us at [support email] for assistance.</p>
            <p style="color:white;text-align:justify;">Opt-Out : You can opt-out of receiving marketing emails by following the unsubscribe link in our communications.</p>
            <p style="color:white;text-align:justify;">Cookie Management : You can manage cookies and tracking technologies through your browser settings.</p><br>

            <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">5. Data Security</h4><br>

            <p style="color:white;text-align:justify;">We implement industry-standard security measures to protect your data from unauthorized access, loss, or misuse. However, no method of transmission or storage is completely secure, and we cannot guarantee absolute security.</p><br>
            <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">6. Children’s Privacy</h4><br>

            <p style="color:white;text-align:justify;">Funix is not intended for children under the age of 13. We do not knowingly collect personal information from children under 13 without parental consent. If you believe we have inadvertently collected such information, please contact us immediately at [support email].</p><br>
            <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">7. Changes to This Privacy Policy</h4><br>

            <p style="color:white;text-align:justify;">We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on our platform and updating the "Last Updated" date at the top of this document. Please review this policy periodically for any updates.</p><br>
            <h4 style="color:white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:22px">8. Contact Us</h4><br>

            <p style="color:white;text-align:justify;">If you have any questions or concerns about this Privacy Policy or our data practices, please contact us at:</p>

            <p style="color:white;text-align:justify;">Email: [support@funix.com]</p><br>
            <p style="color:white;text-align:justify;">Address: [Your Company Address]</p><br>

            <p style="color:white;text-align:justify;">Thank you for choosing Funix!</p><br>
            <p style="color:white;text-align:justify;">We are committed to protecting your privacy and providing a safe and enjoyable streaming experience.</p>

        ("<br>")
        
    
    </div></div>

        

     </div>

    
</body>
</html>  