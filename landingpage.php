<?php
require 'connection.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Your Plant Disease Detector</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
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

        .explore-button {
            width: 142px;
            height: 20px;
            left: 98px;
            top: 496px;
            position: absolute;
            color: black;
            font-size: 20px;
            font-family: Gothic A1;
            font-weight: 800;
            letter-spacing: 1px;
            word-wrap: break-word;
        }

        .navbar {
            width: 1237.64px;
            height: 67px;
            left: 56px;
            top: 35px;
            position: absolute;
        }

        .logo {
            width: 178.33px;
            height: 42px;
            left: 52.06px;
            top: 17px;
            position: absolute;
            color: white;
            font-size: 32px;
            font-family: Montserrat;
            font-weight: 600;
            word-wrap: break-word;
        }

        .logo-background {
            width: 100%;
            height: 100%;
            left: 0px;
            top: 26.71px;
            position: absolute;
            object-fit: cover;
        }

        .highlight-bar {
            width: 113.12px;
            height: 67px;
            left: 1099px;
            top: 0px;
            position: absolute;
            background: #C4ED2F;
            border-radius: 58px;
        }

        .nav-links {
            width: 616.24px;
            height: 31.68px;
            left: 621.39px;
            top: 17px;
            position: absolute;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 68px;
            display: inline-flex;
        }

        .nav-link {
            color: white;
            font-size: 24px;
            font-family: Montserrat;
            font-weight: 500;
            word-wrap: break-word;
        }

        .login-link {
            color: black;
            font-size: 24px;
            font-family: Montserrat;
            font-weight: 700;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="background-layer"></div>
        <div class="title">PLANT DISEASE <br/>DETECTOR</div>
        <div class="green-bar"></div>
        <div class="subtitle">Guardian of Green: Unveiling Tomorrow's Harvest with Precision Plant Disease Detection.</div>
        <div class="side-panel"></div>
        <div class="explore-button">Explore more</div>
        <div class="navbar">
            <div class="logo-background">
                <img src="file:///C:/Users/Leynard%20G/Desktop/WEB%20SYS%20ETR/Vector.svg" alt="">
            </div>
            <div class="logo">EcoScan</div>
            
            <div class="highlight-bar"></div>
            <div class="nav-links">
                <div class="nav-link">Home</div>
                <div class="nav-link">Support</div>
                <div class="nav-link">About Us</div>
                <div class="login-link">Login</div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </div>
</body>
</html>