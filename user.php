<?php
session_start();
include("connect.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Feedback form handling
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_feedback'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    if (!empty($name) && !empty($email) && !empty($message)) {
        $mail = new PHPMailer(true);
        
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username  = 'yourtrip2k25@gmail.com';
            $mail->Password   = 'unza khis fwpw wcgr';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            
            // Enable verbose debug output (optional)
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            
            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('yourtrip2k25@gmail.com', 'Your Trip');
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Feedback from Your Trip Website';
            
            $email_body = "
            <html>
            <head><title>Feedback Submission</title></head>
            <body>
                <h2>Feedback from Your Trip Website</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong></p>
                <p>$message</p>
            </body>
            </html>
            ";
            
            $mail->Body = $email_body;
            $mail->AltBody = strip_tags($email_body);
            
            $mail->send();
            $_SESSION['feedback_success'] = "🎉 Thank you for your valuable feedback!";
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } catch (Exception $e) {
            $_SESSION['feedback_error'] = "There was a problem sending your feedback. Error: " . $mail->ErrorInfo;
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    } else {
        $_SESSION['feedback_error'] = "Please fill in all fields.";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
   <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <title>User Profile</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      height: 100vh;
      background: linear-gradient(-45deg, #74ebd5, #ACB6E5, #f3ec78, #af4261);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes floatPlane {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    .container {
      text-align: center;
      padding: 8% 5%;
      animation: fadeIn 2s ease-out;
    }

    .plane {
      font-size: 60px;
      margin-bottom: 20px;
      animation: floatPlane 3s ease-in-out infinite;
    }

    .typing-text {
      font-size: 60px;
      font-weight: bold;
      color: #1e3c72;
      min-height: 80px;
    }

    .user-greet {
      font-size: 36px;
      color: #2c3e50;
    }

    .description {
      font-size: 22px;
      color: #34495e;
      max-width: 700px;
      margin: 25px auto;
    }

    .logout-btn {
      display: inline-block;
      padding: 14px 30px;
      background-color: #e74c3c;
      color: white;
      text-decoration: none;
      border-radius: 10px;
      font-size: 20px;
      margin-top: 35px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s ease;
    }

    .footer {
      margin-top: 60px;
      font-size: 16px;
      color: #555;
    }
      
    .button_login {
        display: inline-block; 
        height:53px; width:60px; 
        margin-right:5px; 
        background-color:skyblue; 
        font-family:roboto; 
        font-size:20px; 
        border-radius:10px; 
        font-weight:bold; 
        text-align:center; 
        line-height:53px; 
        text-decoration:none; 
        color:black; 
        border-color:black;
        border-width: 2px;
        border-style: solid;
    }

    .feedback-btn {
      display: inline-block;
      padding: 14px 30px;
      background-color: #3498db;
      color: white;
      text-decoration: none;
      border-radius: 10px;
      font-size: 20px;
      margin: 20px 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      cursor: pointer;
      border: none;
    }

    .feedback-btn:hover {
      background-color: #2980b9;
    }

    .feedback-form {
      display: none;
      max-width: 500px;
      margin: 30px auto;
      padding: 25px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      animation: fadeIn 0.5s ease-out;
    }

    .feedback-form.show {
      display: block;
    }

    .feedback-form h2 {
      margin-top: 0;
      color: #2c3e50;
    }

    .feedback-form input,
    .feedback-form textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 16px;
      box-sizing: border-box;
    }

    .feedback-form textarea {
      height: 150px;
      resize: vertical;
    }

    .feedback-form button {
      background-color: #2ecc71;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .feedback-form button:hover {
      background-color: #27ae60;
    }

    .feedback-message {
      margin: 15px auto;
      max-width: 500px;
      padding: 15px 20px;
      border-radius: 8px;
      font-weight: bold;
      position: relative;
      animation: fadeIn 0.5s ease-out;
    }

    .success {
      background-color: #d4edda;
      color: #155724;
    }

    .error {
      background-color: #f8d7da;
      color: #721c24;
    }

    .feedback-message .close-btn {
      position: absolute;
      right: 15px;
      top: 10px;
      background: none;
      border: none;
      font-size: 20px;
      font-weight: bold;
      color: inherit;
      cursor: pointer;
    }

    .ai-agent {
      width: 100px;
      height: 50px;
      margin: 10px;
      background: linear-gradient(-45deg, #9f0e76ff, #a0f6b5ff, #7958f2ff, #5c5c5cff);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      border-top-right-radius: 15px;
      border-bottom-left-radius: 15px;
      border-top-left-radius: 3px;
      border-bottom-right-radius: 3px;

    }
  </style>
</head>
<body>
  <div class="container">
    <div class="plane">✈️</div>

    <h1 class="typing-text" id="typedText"></h1>

    <p class="user-greet">
      Hello 
      <?php 
      if(isset($_SESSION['email'])){
          $email = $_SESSION['email'];
          $query = mysqli_query($conn, "SELECT firstname, lastname FROM users WHERE email='$email'");
          if ($row = mysqli_fetch_array($query)) {
              echo $row['firstname'].' '.$row['lastname'];
          }
      }
      ?> 😊
    </p>

    <p class="description">
      🌍 Ready for your next adventure?<br>
      Discover breathtaking destinations, curated travel experiences, and exclusive tour packages designed just for you.
    </p>

    <a class="button_login" href="homepage.php">Back</a>
    <a href="logout.php" class="logout-btn">Logout</a>
    
    <button class="feedback-btn" id="feedbackBtn">Give Feedback</button>

    <div>
  <button class="ai-agent" onclick="window.open('https://tourism-guide-agent.onrender.com/', '_blank')">
    <i class="fas fa-robot"></i> WanderMate
  </button>
</div>

    <?php if (isset($_SESSION['feedback_success'])): ?>
      <div class="feedback-message success" id="successMessage">
        <?php echo $_SESSION['feedback_success']; ?>
        <button class="close-btn" onclick="document.getElementById('successMessage').style.display='none'">&times;</button>
      </div>
      <?php unset($_SESSION['feedback_success']); ?>
    <?php endif; ?>
    
    <?php if (isset($_SESSION['feedback_error'])): ?>
      <div class="feedback-message error" id="errorMessage">
        <?php echo $_SESSION['feedback_error']; ?>
        <button class="close-btn" onclick="document.getElementById('errorMessage').style.display='none'">&times;</button>
      </div>
      <?php unset($_SESSION['feedback_error']); ?>
    <?php endif; ?>

    <div class="feedback-form" id="feedbackForm">
      <h2>We'd Love Your Feedback</h2>
      <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name" required 
               value="<?php echo isset($_SESSION['email']) ? $row['firstname'].' '.$row['lastname'] : ''; ?>">
        <input type="email" name="email" placeholder="Your Email" required 
               value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
        <textarea name="message" placeholder="Your feedback or suggestions..." required></textarea>
        <button type="submit" name="submit_feedback">Submit Feedback</button>
      </form>
    </div>

    <p class="footer">© <?php echo date("Y"); ?> Your Trip. All rights reserved.</p>
  </div>

  <script>
    const text = "Welcome to YOUR TRIP!";
    let index = 0;
    const speed = 100;

    function typeWriter() {
      if (index < text.length) {
        document.getElementById("typedText").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeWriter, speed);
      }
    }

    document.addEventListener("DOMContentLoaded", function () {
      // Initialize the feedback button functionality
      const feedbackBtn = document.getElementById('feedbackBtn');
      const feedbackForm = document.getElementById('feedbackForm');
      
      feedbackBtn.addEventListener('click', function() {
        feedbackForm.classList.toggle('show');
        
        if (feedbackForm.classList.contains('show')) {
          feedbackForm.scrollIntoView({ behavior: 'smooth' });
        }
      });

      // Auto-hide the success message after 5 seconds
      const successMessage = document.getElementById('successMessage');
      if (successMessage) {
        setTimeout(() => {
          successMessage.style.display = 'none';
        }, 5000);
      }
      
      // Auto-hide the error message after 5 seconds
      const errorMessage = document.getElementById('errorMessage');
      if (errorMessage) {
        setTimeout(() => {
          errorMessage.style.display = 'none';
        }, 5000);
      }
    });

    window.onload = typeWriter;
  </script>
</body>
</html>