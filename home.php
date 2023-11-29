<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your EcoScan Application</title>
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

        .background-image {
            width: 1577px;
            height: 1468px;
            left: -47px;
            top: -35px;
            position: absolute;
        }

        .overlay {
            width: 1327px;
            height: 563px;
            left: 16px;
            top: 117px;
            position: absolute;
            background: rgba(217, 217, 217, 0.10);
            box-shadow: -30.799999237060547px 30.799999237060547px 30.799999237060547px rgba(255, 255, 255, 0.10) inset;
            border-radius: 30px;
            backdrop-filter: blur(61.60px);
        }

        .login-text {
            left: 1530px;
            top: 51px;
            position: absolute;
            color: white;
            font-size: 32px;
            font-family: Montserrat;
            font-weight: 500;
            word-wrap: break-word;
        }

        .upload-button {
            width: 224px;
            height: 66px;
            left: 95px;
            top: 516px;
            position: absolute;
            background: #C4ED2F;
            border-radius: 58px;
        }

        .file-input {
            display: none; /* Hide the file input */
        }

        .file-label {
            width: 237px;
            height: 66px;
            left: 117px;
            top: 537px;
            position: absolute;
            color: black;
            font-size: 24px;
            font-family: Montserrat;
            font-weight: 700;
            word-wrap: break-word;
            line-height: 66px;
            text-align: center;
            cursor: pointer;
            background: #C4ED2F;
            border-radius: 58px;
            transition: background 0.3s; /* Add transition for smooth background change */
        }

        .file-label:hover {
            background: #a1d52a; /* Change background on hover */
        }

        .app-logo {
            width: 1222.74px;
            height: 67px;
            left: 58.26px;
            top: 35px;
            position: absolute;
        }

        .logo-text {
            width: 176.19px;
            height: 42px;
            left: 51.43px;
            top: 19px;
            position: absolute;
            color: white;
            font-size: 32px;
            font-family: Montserrat;
            font-weight: 600;
            word-wrap: break-word;
        }

        .logo-background {
            width: 39.21px;
            height: 28.14px;
            left: 0px;
            top: 30.53px;
            position: absolute;
            
        }

        .highlight-bar {
            width: 111.76px;
            height: 67px;
            left: 595.74px;
            top: 0px;
            position: absolute;
            background: #C4ED2F;
            border-radius: 58px;
        }

        .nav-links {
            width: 608.83px;
            height: 29px;
            left: 613.92px;
            top: 19px;
            position: absolute;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 68px;
            display: inline-flex;
        }

        .nav-link,
        .logout-link {
            color: white !important;
            font-size: 24px;
            font-family: Montserrat;
            font-weight: 500;
            word-wrap: break-word;
            cursor: pointer;
            text-decoration: none !important; /* Remove underline */
            background-color: transparent !important; /* Remove background color */
            transition: color 0.3s; /* Add transition for smooth color change */
        }

        .nav-link:hover,
        .logout-link:hover {
            color: yellow !important; /* Change color on hover */
            background-color: transparent !important; /* Remove background color on hover */
        }

        .upload-title {
            width: 243.07px;
            height: 42px;
            left: 77.34px;
            top: 149px;
            position: absolute;
            color: white;
            font-size: 36px;
            font-family: Montserrat;
            font-weight: 600;
            word-wrap: break-word;
        }

        .upload-description {
            width: 550px;
            height: 68px;
            left: 77px;
            top: 205px;
            position: absolute;
            color: white;
            font-size: 27px;
            font-family: Montserrat;
            font-weight: 300;
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    <div class="container">
        <img class="background-image" src="pictures/bgpic.png" alt="Background Image" />
        <div class="overlay"></div>
        <div class="login-text">
            <!-- Change "Login" to "Logout" and add the link to index.php -->
            <a href="index.php" class="logout-link">Logout</a>
        </div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file" class="file-input">
            <label for="file" class="file-label">CHOOSE FILE</label>
        </form>
        <div class="app-logo">
            <div class="logo-text">EcoScan</div>
            <div class="logo-background">
                <img src="assets/Vector.svg" alt="">
            </div>
            <div class="highlight-bar"></div>
            <div class="nav-links">
                <a class="nav-link" href="home.php">Home</a>
                <a class="nav-link" href="#">Support</a>
                <a class="nav-link" href="#">About Us</a>
                <!-- Update the class to "logout-link" and add the link to index.php -->
                <a href="index.php" class="logout-link">Logout</a>
            </div>
        </div>
        <div class="upload-title">Upload File</div>
        <div class="upload-description">Upload picture to scan your Plant.</
