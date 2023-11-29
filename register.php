<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

 
    if (empty($name) || empty($username) || empty($password) || empty($confirmPassword)) {
        $error = "Please fill in all fields.";
    } elseif ($password !== $confirmPassword) {
        $error = "Passwords do not match.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, username, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $username, $hashedPassword);

    
        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            $error = "Registration failed. Please try again.";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }

        .background-container {
            height: 100vh;
            background-image: url('https://s3-alpha-sig.figma.com/img/57e1/2c3c/6b00e31a5fb74b26cfaf362c8bb08a7c?Expires=1701043200&Signature=FfPjtT~8rj223SYvVORpwt7ycYzCvu~34JGYacCzC4yTJheKynkG9qUuniGuqartfAbiIUtqzLd-pBjbh8YQfBa~YnnOi9tmo1yImBgaJnH3Qjy-YMLVCLcjFk~-lx5H7yuwFXfR8O1OwyR9h6-RZCMVArjSz4Hl8PHp0OzSxaCleUNszSIVk4OqCjFy41GHPk-dfGMu5Lyr5xYN1NEBDQoDWcL~9ycYWGH0KtFytU6-rVA0ELmYcxXfrj00vTlA45Ep1EtTxHcTV0OHyxpKHZ4GQQT85091HKaCez1mzt134JQ5EYB9TOXEOLHzPSlDeuiYG3gOge0spBgUjgHy9w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
        }

        .Rectangle4 {
            width: 1017px;
            height: 605px;
            background: rgba(255, 255, 255, 0.28);
            border-radius: 15px;
            margin: auto;
            margin-top: 50px;
            position: relative;
        }

        .Rectangle5 {
            width: 391.08px;
            height: 606px;
            border-radius: 15px;
            mix-blend-mode: multiply;
            background: #434f29;
            margin-left: 626px;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 31%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .register-heading {
            color: black;
            font-size: 28px;
            margin-bottom: 50px;
            font-family: 'Montserrat', sans-serif;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 15px;
            font-size: 1.2em;
            color: #555;
        }

        .form-control {
            width: 450px;
            height: 59px;
            margin-bottom: 10px;
            background: white;
            border-radius: 10px;
            border: 1px solid black;
            padding-left: 40px;
        }

        .button-style {
            width: 450px;
            height: 59px;
            color: white;
            opacity: 0.90;
            background: black;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .button-style:hover {
            background-color: white;
            color: black;
        }

        .login-link {
            color: white;
            display: block;
            margin-top: 10px;
            font-size: 20px;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            transition: color 0.3s;
        }

        .login-link:hover {
            color: black;
        }

    </style>
    <title>Register</title>
</head>

<body>
    <div class="background-container">
        <div class="Rectangle4">
            <div class="Rectangle5"></div>
            <div class="form-container">
                <h2 class="register-heading">Register for an Account</h2>
                <?php
                if (isset($error)) {
                    echo '<div class="alert alert-danger">' . $error . '</div>';
                }
                ?>
                <form id="registerForm" method="POST" action="register.php">
                    <div class="form-group">
                        <i class="fas fa-user icon"></i>
                        <input type="text" class="form-control" name="name" placeholder="Fullname" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-user icon"></i>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-dark button-style">Register</button>
                    <a href="login.php" class="login-link">Already have an account? Log In</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function (event) {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                event.preventDefault();
            }
        });
    </script>
</body>

</html>