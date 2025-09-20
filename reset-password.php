<?php
session_start();
include 'connect.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    if (isset($_POST['submit'])) {
        $newPass = md5($_POST['password']);
        $update = "UPDATE users SET password='$newPass', reset_token=NULL WHERE reset_token='$token'";
        if ($conn->query($update)) {
            $_SESSION['success'] = "Password changed successfully!";
            header("Location: index.php");
            exit();
        } else {
            $error = "Failed to reset password.";
        }
    }
} else {
    echo "Invalid or expired token!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
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

        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .message {
            margin-top: 15px;
            font-size: 14px;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="reset-container">
        <h2>Reset Your Password</h2>
        <form method="post">
            <input type="password" name="password" placeholder="New Password" required>
            <input type="submit" name="submit" value="Reset Password">
        </form>
        <div class="message">
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        </div>
    </div>
</body>
</html>
