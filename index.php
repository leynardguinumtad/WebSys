<?php
// You can include any PHP logic or configurations here
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Plant Disease Detector</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        .container-fluid {
            padding: 0;
        }

        .container {
            width: 1366px;
            height: 720px;
            position: relative;
            background: white;
        }

        .background-layer {
            width: 1366px;
            height: 720px;
            left: 0px;
            top: 0px;
            position: absolute;
            background: #112012;
        }

        .title {
            width: 361px;
            left: 74px;
            top: 171px;
            position: absolute;
            color: #C4ED2F;
            font-size: 40px;
            font-family: Montserrat;
            font-weight: 700;
            word-wrap: break-word;
        }

        .green-bar {
            width: 192px;
            height: 48px;
            left: 74px;
            top: 483px;
            position: absolute;
            background: #C4ED2F;
            border-radius: 58px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .explore-button {
            color: black;
            font-size: 20px;
            font-family: Gothic A1;
            font-weight: 800;
            letter-spacing: 1px;
            word-wrap: break-word;
            margin: 0;
            /* Remove default margin */
        }

        .subtitle {
            width: 469px;
            height: 99px;
            left: 74px;
            top: 296px;
            position: absolute;
            color: white;
            font-size: 20px;
            font-family: Montserrat;
            font-weight: 300;
            word-wrap: break-word;
        }

        .side-panel {
            width: 347px;
            height: 507px;
            left: 858px;
            top: -11px;
            position: absolute;
            background: #1E311F;
        }

        .navbar {
            width: 1237.64px;
            height: 67px;
            left: 56px;
            top: 35px;
            position: absolute;
            background: transparent !important;
        }

        .navbar a,
        .navbar .login-link {
            color: white !important;
            font-size: 24px;
            font-family: Montserrat;
            font-weight: 500;
            word-wrap: break-word;
        }

        .nav-links {
            width: 608.83px;
            height: 29px;
            left: 613.92px;
            top: 19px;
            position: absolute;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 20px;
            /* Adjust the gap as needed */
            display: inline-flex;
        }

        .nav-link {
            color: white !important;
            font-size: 24px;
            font-family: Montserrat;
            font-weight: 500;
            word-wrap: break-word;
            cursor: pointer;
            text-decoration: none !important;
            /* Remove underline */
        }

        .nav-link:hover {
            color: yellow !important;
            /* Change color on hover */
            background-color: transparent !important;
            /* Remove background color on hover */
        }

        .nav-item {
            margin-right: 50px;
        }

        .nav-link.active {
            color: #C4ED2F !important;
            /* Set the text color to the highlighted color */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 background-layer"></div>
            <div class="col-lg-12 title text-center">PLANT DISEASE DETECTOR</div>
            <div class="col-lg-12 green-bar">
                <button class="btn btn-warning explore-button">Explore more</button>
            </div>
            <div class="col-lg-12 subtitle text-center">
                Guardian of Green: Unveiling Tomorrow's Harvest with Precision Plant Disease Detection.
            </div>
            <div class="col-lg-4 side-panel"></div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="assets/Vector.svg" alt="Logo" height="42">
                    EcoScan
                </a>
                <div class="highlight-bar"></div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto nav-links">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link login-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- JavaScript to highlight active link -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var navLinks = document.querySelectorAll(".nav-link");
            var highlightBar = document.querySelector(".highlight-bar");

            navLinks.forEach(function (link) {
                link.addEventListener("click", function () {
                    // Remove active class from all links
                    navLinks.forEach(function (el) {
                        el.classList.remove("active");
                    });

                    // Add active class to the clicked link
                    link.classList.add("active");

                    // Set the highlight-bar position based on the clicked link
                    var linkRect = link.getBoundingClientRect();
                    highlightBar.style.left = linkRect.left + "px";
                    highlightBar.style.width = linkRect.width + "px";
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>