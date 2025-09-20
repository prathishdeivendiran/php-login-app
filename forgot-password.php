<?php
session_start();
include 'connect.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $token = md5(rand());
        $update = "UPDATE users SET reset_token = '$token' WHERE email = '$email'";
        $conn->query($update);

        $_SESSION['reset_message'] = "Reset link: <a href='reset-password.php?token=$token'>Click here</a>";
    } else {
        $_SESSION['reset_error'] = "Email not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <style>
        body {
            background: #f7f7f7;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .reset-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            width: 400px;
            text-align: center;
        }

        .reset-container h2 {
            margin-bottom: 25px;
            color: #333;
        }

        input[type="email"],
        input[type="submit"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 15px;
            font-size: 14px;
        }

        .message a {
            color: green;
            text-decoration: underline;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>
    <div class="reset-container">
        <h2>Forgot Password</h2>
        <form method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="submit" name="submit" value="Send Reset Link">
        </form>

        <div class="message">
            <?php
            if (isset($_SESSION['reset_message'])) {
                echo "<p class='success'>" . $_SESSION['reset_message'] . "</p>";
                unset($_SESSION['reset_message']);
            }
            if (isset($_SESSION['reset_error'])) {
                echo "<p class='error'>" . $_SESSION['reset_error'] . "</p>";
                unset($_SESSION['reset_error']);
            }
            ?>
        </div>
    </div>
</body>
</html>
