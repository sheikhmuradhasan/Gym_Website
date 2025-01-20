<?php
session_start();
if(isset($_SESSION['username'])){
    echo "<script>alert('You are already logged in!')</script>";
    echo "<script>location.href='index.html'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a href="index.html"><img class="nav-img" src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-call-now" href="tel:+8801771729301">Call Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <section class="login-section d-flex flex-row align-items-center justify-content-center">
        <div class="container d-flex flex-row">

            <!-- Left Section -->
            <div class="left-section d-flex flex-column justify-content-center align-items-center p-4 w-50">
                <img src="img/logo.png" alt="" width="200">
                <h2 class="text-center">Welcome to Iron Warriors Family!</h4>
                    <p class="text-center">Join us to achieve your fitness goals and stay motivated every day. Let's
                        build a healthier future together!</p>
            </div>

            <!-- Right Section -->
            <div class="right-section flex-grow-1 p-5 d-flex justify-content-center">
                <!-- Login Form -->
                <form action="UserLoginAction.php" method="post">
                    <div class="mb-3">
                        <h2 class="text-center">Login to your account</h2>
                    </div>
                    <div class="mb-3">
                        <label for="u_useremail" class="form-label">Username or Email Address</label>
                        <input type="text" class="form-control" id="u_useremail" name="u_useremail" required>
                    </div>
                    <div class="mb-3">
                        <label for="u_pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="u_pass" name="u_pass" required>
                    </div>
                    <button type="submit" class="btn btn-submit login-btn w-100" name="userLoginForm">Log In</button>

                    <p class="mt-3 text-center">
                        Don’t have an account?
                        <!-- <button type="button" id="showSignupForm" class="btn popup-login-btn w-100">Sign Up</button> -->
                        <a href="userRegister.php" id="showSignupForm" class="text-primary text-light">Sign Up</a>
                    </p>
                </form>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
    <footer class="bg-black main-footer">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <img class="footer-logo" src="img/logo.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, soluta nam hic sequi obcaecati
                        autem?
                    </p>
                    <div class="d-flex justify-content-start social-links">
                        <!-- Social Links -->
                        <a href="https://facebook.com" target="_blank" class="social-icon mx-2">
                            <img src="img/facebook.png" alt="Facebook" class="img-fluid">
                        </a>
                        <a href="https://instagram.com" target="_blank" class="social-icon mx-2">
                            <img src="img/instagram.png" alt="Instagram" class="img-fluid">
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="social-icon mx-2">
                            <img src="img/linkedin.png" alt="LinkedIn" class="img-fluid">
                        </a>
                        <a href="https://youtube.com" target="_blank" class="social-icon mx-2">
                            <img src="img/youtube.png" alt="Youtube" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 text-left text-md-left">
                    <h3 class="footer-heading mb-4">
                        Quick Links
                    </h3>
                    <p>
                        <i class="fa-solid fa-arrow-right me-2" style="color: #ffffff;"></i>Home
                    </p>
                    <p>
                        <i class="fa-solid fa-arrow-right me-2" style="color: #ffffff;"></i>About
                    </p>
                    <p>
                        <i class="fa-solid fa-arrow-right me-2" style="color: #ffffff;"></i>Services
                    </p>
                    <p>
                        <i class="fa-solid fa-arrow-right me-2" style="color: #ffffff;"></i>Blogs
                    </p>
                    <p>
                        <i class="fa-solid fa-arrow-right me-2" style="color: #ffffff;"></i>Contact Us
                    </p>
                </div>



                <div class="col-lg-3 text-left text-md-left">
                    <h3 class="footer-heading mb-4">
                        Our Timing
                    </h3>
                    <p>
                        <i class="fa-solid fa-business-time me-2" style="color: #ffffff;"></i>Sat to Sun 10:00 am to
                        2:30 pm
                    </p>
                    <p>
                        <i class="fa-solid fa-business-time me-2" style="color: #ffffff;"></i>Mon to Wed 11:00 am to
                        4:30 pm
                    </p>
                    <p>
                        <i class="fa-solid fa-business-time me-2" style="color: #ffffff;"></i>Thursday 10:00 am to 12:30
                        pm
                    </p>
                    <p>
                        <i class="fa-solid fa-calendar-xmark me-2" style="color: #ffffff;"></i>Friday Closed
                    </p>
                </div>


                <div class="col-lg-3 text-left text-md-left">
                    <h3 class="footer-heading mb-4">
                        Contact Us
                    </h3>
                    <p>
                        <i class="fa-solid fa-location-dot me-2" style="color: #ffffff;"></i>Amborkhana, Sylhet
                    </p>
                    <p>
                        <i class="fa-solid fa-envelope me-2" style="color: #ffffff;"></i>ironwarriors@gmail.com
                    </p>
                    <p>
                        <i class="fa-solid fa-phone me-2" style="color: #ffffff;"></i>+880-1712-034-191
                    </p>
                </div>

                <div class="footer-copyright d-flex justify-content-center">
                    <p>All rights reserved to @Iron Warriors Gym</p>
                </div>

            </div>
        </div>
    </footer>


    <script src="https://kit.fontawesome.com/01ed6ce9ad.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>