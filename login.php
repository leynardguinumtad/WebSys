<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT user_id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($userId, $dbUsername, $dbPassword);
        $stmt->fetch();

        if (password_verify($password, $dbPassword)) {
            session_start();
            $_SESSION["user_id"] = $userId;
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "User not found";
    }

    $stmt->close();
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
            background: rgba(255, 255, 255, 0.27);
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

        .image {
            width: 375px;
            height: 520px;
            margin-left: 18px;
            margin-top: 50px;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 31%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .login-heading {
            color: black;
            font-size: 28px;
            margin-bottom: 50px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }

        .username-field-style,
        .password-field-style {
            width: 450px;
            height: 59px;
            margin-bottom: 10px;
            background: white;
            border-radius: 10px;
            border: 1px solid black;
            padding-left: 40px;
        }

        .icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 15px;
            font-size: 1.2em;
            color: #555;
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

        .signup-link {
            color: white;
            display: block;
            margin-top: 10px;
            font-size: 20px;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            transition: color 0.3s;
        }

        .signup-link:hover {
            color: black;
        }

        
    </style>
    <title>Login</title>
</head>

<body>
    <div class="background-container">
        <div class="Rectangle4">
            <div class="Rectangle5">
                <img class="image" src="https://s3-alpha-sig.figma.com/img/04be/6f1d/cca13e04c9d0e554a6541f9fa7020ea2?Expires=1701043200&Signature=YsbPKwipw71VtMvVp-~HKdZrlYdCuiy3SMyH5iQPX5191l7K3Ge6VCHeSj7Ae4IKp3C8jBldH3HMnJkm~rj~XKWQnGiau~kG2UjHaYLUhK4l3gKVbsrWXr~8pOBRNP6QaUMUMBP86fe8nepIGJvtvNOkSRV8ucIetd9qEi95L8mw8FgZg4LhBgwi2k2sW5y0GkS9CidIXjvnegHuurFVjeAkn6DlLH1IprjY9rQ17ZXvpamF7eFh9zVUA99u1jw503psKMstwyWrh7KOtkOHbA78BiZw~mrmbIA5tK0H82v-AGdnMqGeWZA5om7nVsWHwCL41bg97KIAzwaU~13wzA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" />
            </div>

            <div class="form-container">
                <h2 class="login-heading">Log In to your Account</h2>
                <?php
                if (isset($error)) {
                    echo '<div class="alert alert-danger">' . $error . '</div>';
                }
                ?>
                <form id="loginForm" method="POST" action="login.php">
                    <div class="form-group">
                        <i class="fas fa-user icon"></i>
                        <input type="text" class="form-control username-field-style" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" class="form-control password-field-style" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-dark button-style">Login</button>
                    <a href="register.php" class="signup-link">Don't have an account? Sign Up </a>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("loginForm").addEventListener("submit", function (event) {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (!username || !password) {
                alert("Please fill in all fields.");
                event.preventDefault();
            }
        });
    </script>
</body>

</html>