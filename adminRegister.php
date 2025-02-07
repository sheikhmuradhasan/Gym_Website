<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
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


    <section class="register-section d-flex flex-row align-items-center justify-content-center">
        <div class="container d-flex flex-row mt-5">

            <!-- Left Section -->
            <div class="left-section d-flex flex-column justify-content-center align-items-center p-4 w-50">
                <img src="img/logo.png" alt="" width="200">
                <h2 class="text-center">Welcome to Iron Warriors Family!</h4>
                    <p class="text-center">Join us to achieve your fitness goals and stay motivated every day. Let's
                        build a healthier future together!</p>
            </div>

            <!-- Right Section -->
            <div class="right-section flex-grow-1 p-5 d-flex justify-content-center">
                <form action="signupAction.php" id="signupForm" method="post">
                    <div class="mb-3 pt-5">
                        <h2 class="text-center">Create A New Account</h2>
                    </div>
                    <div class="mb-3">
                        <label for="a_username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="a_username" name="a_username" required>
                    </div>
                    <div class="mb-3">
                        <label for="a_mobile" class="form-label">Mobile Number</label>
                        <input type="tel" class="form-control" id="a_mobile" name="a_mobile" required>
                    </div>
                    <div class="mb-3">
                        <label for="a_email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="a_email" name="a_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="a_pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="a_pass" name="a_pass" required>
                    </div>
                    <div class="mb-3">
                        <label for="a_con_pass" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="a_con_pass" name="a_con_pass" required>
                    </div>
                    <button type="submit" class="btn btn-submit w-100">Sign Up</button>
                    <p class="mt-3 text-center">
                        Already Have an Account?
                        <a href="adminLogin.php" id="showLoginForm" class="text-primary text-light">Sign In</a>
                    </p>
                </form>

            </div>
        </div>
    </section>


    <!-- Footer Section -->
    <footer class="bg-black main-footer ">
        <div class="container pt-5">
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



    <script>
        document.getElementById("signupForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const username = document.getElementById("a_username").value.trim();
            const mobile = document.getElementById("a_mobile").value.trim();
            const email = document.getElementById("a_email").value.trim();
            const password = document.getElementById("a_pass").value.trim();
            const confirmPassword = document.getElementById("a_con_pass").value.trim();


            const usernameRegex = /^[a-zA-Z0-9_]{3,20}$/;
            const mobileRegex = /(\+88)?-?01[3-9]\d{8}/;
            const emailRegex = /(faculty)_\d{5}@lus\.ac\.bd/;
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.{6,})/;


            let isValid = true;
            let errorMessage = "";


            if (!usernameRegex.test(username)) {
                errorMessage += "Invalid username. Enter a valid username with (3-20 characters)\n";
                isValid = false;
            }


            if (!mobileRegex.test(mobile)) {
                errorMessage += "Invalid mobile number. Format: (+88)-01XXXXXXXXX.\n";
                isValid = false;
            }


            if (!emailRegex.test(email)) {
                errorMessage += "Invalid email. Format: faculty_XXXXX@lus.ac.bd.\n";
                isValid = false;
            }


            if (!passwordRegex.test(password)) {
                errorMessage +=
                    "Password must be at least 6 characters long, contain one uppercase letter, one lowercase letter, and one special character.\n";
                isValid = false;
            }


            if (password !== confirmPassword) {
                errorMessage += "Passwords do not match.\n";
                isValid = false;
            }


            if (isValid) {
                alert("Form submitted successfully!");
                this.submit();
            } else {
                alert(errorMessage);
            }
        });
    </script>

    <script src="https://kit.fontawesome.com/01ed6ce9ad.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>