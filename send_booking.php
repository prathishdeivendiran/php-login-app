<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name       = htmlspecialchars($_POST['name']);
    $email      = htmlspecialchars($_POST['email']);
    $phone      = htmlspecialchars($_POST['phone']);
    $package    = htmlspecialchars($_POST['package_type']);
    $place      = htmlspecialchars($_POST['place']);
    $start_date = htmlspecialchars($_POST['date']);
    $end_date   = htmlspecialchars($_POST['date']);
    $people     = htmlspecialchars($_POST['people']);

    $mailBody = "
        New Booking Request:

        Name: $name
        Email: $email
        Phone: $phone
        Package: $package
        Place: $place
        Travel Dates: $start_date to $end_date
        Number of People: $people
    ";

    // Setup PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'yourtrip2k25@gmail.com';
        $mail->Password   = 'unza khis fwpw wcgr';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Send to developer
        $mail->setFrom('yourtrip2k25@gmail.com', 'YOUR TRIP');
        $mail->addAddress('yourtrip2k25@gmail.com', 'Developer');
        $mail->Subject = "New Booking from $name";
        $mail->Body    = $mailBody;
        $mail->send();

        // Send to user
        $mail->clearAddresses();
        $mail->addAddress($email, $name);
        $mail->Subject = "Booking Confirmation";
        $mail->Body    = "Hi $name,\n\n Thank you for choosing 'YOUR TRIP' ! ✈️🌍\n\nWe're thrilled to be part of your journey and promise to make your travel experience smooth and memorable. At 'YOUR TRIP', we’re committed to providing you with the best service, every step of the way.\n\n" . $mailBody;
        $mail->send();

        // Display success page
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Booking Confirmation</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f5f5f5;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    min-height: 100vh;
                }
                .confirmation-container {
                    background-color: white;
                    border-radius: 10px;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                    padding: 40px;
                    max-width: 600px;
                    width: 90%;
                    text-align: center;
                }
                .confirmation-icon {
                    color: #4CAF50;
                    font-size: 60px;
                    margin-bottom: 20px;
                }
                h1 {
                    color: #333;
                    margin-bottom: 20px;
                }
                .booking-details {
                    text-align: left;
                    margin: 30px 0;
                    padding: 20px;
                    background-color: #f9f9f9;
                    border-radius: 5px;
                }
                .detail-row {
                    margin-bottom: 10px;
                    display: flex;
                }
                .detail-label {
                    font-weight: bold;
                    width: 150px;
                }
                .btn {
                    display: inline-block;
                    background-color: #4CAF50;
                    color: white;
                    padding: 12px 25px;
                    text-decoration: none;
                    border-radius: 5px;
                    margin-top: 20px;
                    transition: background-color 0.3s;
                }
                .btn:hover {
                    background-color: #45a049;
                }
            </style>
        </head>
        <body>
            <div class="confirmation-container">
                <div class="confirmation-icon">✓</div>
                <h1>Booking Submitted <span style="color:green;"> Successfully! </span></h1>
                <p>Thank you for your booking, '.$name.'. We have sent a confirmation to your email at '.$email.'.</p>
                
                <div class="booking-details">
                    <h3>Your Booking Details:</h3>
                    <div class="detail-row">
                        <span class="detail-label">Name:</span>
                        <span>'.$name.'</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Email:</span>
                        <span>'.$email.'</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Phone:</span>
                        <span>'.$phone.'</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Package:</span>
                        <span>'.$package.'</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Destination:</span>
                        <span>'.$place.'</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Travel Dates:</span>
                        <span>'.$start_date.' to '.$end_date.'</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Number of People:</span>
                        <span>'.$people.'</span>
                    </div>
                </div>
                
                <p>Our team will contact you shortly to confirm your booking details.</p>
                <a href="homepage.php" class="btn">Return to Home</a>
                <a href="premium_packages.php" class="btn" style="margin-left: 10px;">View Other Packages</a>
            </div>
        </body>
        </html>';

    } catch (Exception $e) {
        echo '<!DOCTYPE html>
        <html>
        <head>
            <title>Booking Error</title>
            <style>
                body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
                .error { color: #d9534f; background-color: #f9f9f9; padding: 20px; border-radius: 5px; }
            </style>
        </head>
        <body>
            <div class="error">
                <h2>Booking Submission Failed</h2>
                <p>We encountered an error while processing your booking.</p>
                <p>Error: '.htmlspecialchars($mail->ErrorInfo).'</p>
                <p>Please try again later or contact support.</p>
                <a href="javascript:history.back()">Go Back</a>
            </div>
        </body>
        </html>';
    }
} else {
    header("Location: index.php");
    exit();
}
?>