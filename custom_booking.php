<?php
session_start();

// Initialize variables
$name = $email = $phone = $address = '';
$errors = [];
$package_details = [];
$total_price = 0;

// Check if package details were passed
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['package_details'])) {
    try {
        $package_details = json_decode($_POST['package_details'], true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('Invalid package data');
        }
        $total_price = floatval($_POST['total_price'] ?? 0);
    } catch (Exception $e) {
        $_SESSION['error'] = 'Invalid package selection. Please start over.';
        header('Location: custom_package.php');
        exit();
    }
} else {
    $_SESSION['error'] = 'No packages selected. Please go back and add packages.';
    header('Location: custom_package.php');
    exit();
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])) {
    // Sanitize inputs
    $name = trim(htmlspecialchars($_POST['name'] ?? ''));
    $email = trim(htmlspecialchars($_POST['email'] ?? ''));
    $phone = trim(htmlspecialchars($_POST['phone'] ?? ''));
    $address = trim(htmlspecialchars($_POST['address'] ?? ''));
    
    // Validate inputs
    if (empty($name)) $errors['name'] = 'Name is required';
    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }
    if (empty($phone)) $errors['phone'] = 'Phone is required';
    if (empty($address)) $errors['address'] = 'Address is required';

    // Process booking if no errors
    if (empty($errors)) {
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $dev_mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            // Server settings for both emails
            $mail_config = [
                'isSMTP' => true,
                'Host' => 'smtp.gmail.com',
                'SMTPAuth' => true,
                'Username' => 'yourtrip2k25@gmail.com',
                'Password' => 'unza khis fwpw wcgr',
                'SMTPSecure' => PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS,
                'Port' => 587
            ];
            
            // Configure both mail instances
            foreach ([$mail, $dev_mail] as $mailer) {
                $mailer->isSMTP();
                $mailer->Host = $mail_config['Host'];
                $mailer->SMTPAuth = $mail_config['SMTPAuth'];
                $mailer->Username = $mail_config['Username'];
                $mailer->Password = $mail_config['Password'];
                $mailer->SMTPSecure = $mail_config['SMTPSecure'];
                $mailer->Port = $mail_config['Port'];
            }

            // Recipients for user email
            $mail->setFrom('noreply@yourtrip.com', 'Your Trip');
            $mail->addAddress($email, $name);
            $mail->isHTML(true);
            $mail->Subject = 'Your Trip Booking Confirmation';

            // Recipients for developer email
            $dev_mail->setFrom('noreply@yourtrip.com', 'Your Trip');
            $dev_mail->addAddress('yourtrip2k25@gmail.com', 'Developer');
            $dev_mail->isHTML(true);
            $dev_mail->Subject = 'New Booking Received - ' . $name;

            // Build email body for user
            $user_email_body = "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; }
                    .header { color: #1e3c72; font-size: 24px; margin-bottom: 20px; }
                    .details { margin-bottom: 20px; }
                    .package { background: #f8f9fa; padding: 15px; border-radius: 5px; margin-bottom: 10px; }
                    .total { font-weight: bold; font-size: 18px; margin-top: 20px; }
                    .footer { margin-top: 30px; color: #6c757d; font-size: 14px; }
                </style>
            </head>
            <body>
                <div class='header'>Booking Confirmation</div>
                <div class='details'>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Address:</strong> $address</p>
                </div>
                <h3>Package Details:</h3>";

            foreach ($package_details as $item) {
                $user_email_body .= "
                <div class='package'>
                    <p><strong>Package:</strong> ".htmlspecialchars($item['name'])."</p>
                    <p><strong>Persons:</strong> ".intval($item['numPeople'])."</p>
                    <p><strong>Price:</strong> ₹".number_format(floatval($item['totalPrice']), 2)."</p>
                </div>";
            }

            $user_email_body .= "
                <div class='total'>Total Amount: ₹".number_format($total_price, 2)."</div>
                <div class='footer'>
                    <p>Thank you for booking with Your Trip!</p>
                    <p>We'll contact you shortly with more details about your tour.</p>
                </div>
            </body>
            </html>";

            // Build email body for developer (similar but with different subject and possibly additional info)
            $dev_email_body = "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; }
                    .header { color: #1e3c72; font-size: 24px; margin-bottom: 20px; }
                    .details { margin-bottom: 20px; }
                    .package { background: #f8f9fa; padding: 15px; border-radius: 5px; margin-bottom: 10px; }
                    .total { font-weight: bold; font-size: 18px; margin-top: 20px; }
                    .footer { margin-top: 30px; color: #6c757d; font-size: 14px; }
                    .alert { background-color: #fff3cd; padding: 10px; border-radius: 5px; margin: 10px 0; }
                </style>
            </head>
            <body>
                <div class='header'>New Booking Received</div>
                <div class='alert'>Action Required: Please contact the customer to confirm arrangements.</div>
                <div class='details'>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Address:</strong> $address</p>
                    <p><strong>Booking Time:</strong> ".date('Y-m-d H:i:s')."</p>
                </div>
                <h3>Package Details:</h3>";

            foreach ($package_details as $item) {
                $dev_email_body .= "
                <div class='package'>
                    <p><strong>Package:</strong> ".htmlspecialchars($item['name'])."</p>
                    <p><strong>Persons:</strong> ".intval($item['numPeople'])."</p>
                    <p><strong>Price:</strong> ₹".number_format(floatval($item['totalPrice']), 2)."</p>
                </div>";
            }

            $dev_email_body .= "
                <div class='total'>Total Amount: ₹".number_format($total_price, 2)."</div>
                <div class='footer'>
                    <p>This is an automated notification. Please respond to the customer within 24 hours.</p>
                </div>
            </body>
            </html>";

            // Set email bodies
            $mail->Body = $user_email_body;
            $mail->AltBody = strip_tags($user_email_body);
            
            $dev_mail->Body = $dev_email_body;
            $dev_mail->AltBody = strip_tags($dev_email_body);

            // Send both emails
            $user_email_sent = $mail->send();
            $dev_email_sent = $dev_mail->send();

            if ($user_email_sent && $dev_email_sent) {
                $_SESSION['booking_details'] = [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'address' => $address,
                    'total_price' => $total_price,
                    'package_details' => $package_details
                ];
                header('Location: custom_booking_confirmation.php');
                exit();
            } else {
                $error_msg = '';
                if (!$user_email_sent) $error_msg .= "Failed to send user email. ";
                if (!$dev_email_sent) $error_msg .= "Failed to send developer notification. ";
                throw new Exception(trim($error_msg));
            }
        } catch (Exception $e) {
            $errors['email_send'] = "We encountered an error processing your booking. Please try again later. Error: ".$e->getMessage();
            error_log("Mailer Error: " . $e->getMessage());
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    h1 {
      color: #1e3c72;
      text-align: center;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
    }
    .error {
      color: #dc3545;
      font-size: 14px;
      margin-top: 5px;
    }
    button {
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background: #0056b3;
    }
    .package-summary {
      background: #f8f9fa;
      padding: 15px;
      border-radius: 5px;
      margin-bottom: 20px;
    }
    .package-item {
      margin-bottom: 10px;
      padding-bottom: 10px;
      border-bottom: 1px solid #eee;
    }
    .total-price {
      font-weight: bold;
      font-size: 18px;
      margin-top: 10px;
    }
    .error-message {
      background-color: #ffebee;
      color: #c62828;
      padding: 15px;
      margin: 20px 0;
      border-radius: 5px;
      border-left: 5px solid #c62828;
    }
  </style>
</head>
<body>
  <h1>Complete Your Booking</h1>
  
  <?php if (isset($errors['email_send'])): ?>
    <div class="error-message"><?php echo $errors['email_send']; ?></div>
  <?php endif; ?>
  
  <div class="package-summary">
    <h3>Package Summary</h3>
    <?php foreach ($package_details as $item): ?>
      <div class="package-item">
        <p><strong><?php echo htmlspecialchars($item['name']); ?></strong> - <?php echo intval($item['numPeople']); ?> person(s)</p>
        <p>Price: ₹<?php echo number_format(floatval($item['totalPrice']), 2); ?></p>
      </div>
    <?php endforeach; ?>
    <div class="total-price">Total: ₹<?php echo number_format($total_price, 2); ?></div>
  </div>

  <form method="post" action="">
    <input type="hidden" name="total_price" value="<?php echo htmlspecialchars($total_price); ?>">
    <input type="hidden" name="package_details" value="<?php echo htmlspecialchars(json_encode($package_details)); ?>">
    
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
      <?php if (isset($errors['name'])): ?>
        <span class="error"><?php echo $errors['name']; ?></span>
      <?php endif; ?>
    </div>
    
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
      <?php if (isset($errors['email'])): ?>
        <span class="error"><?php echo $errors['email']; ?></span>
      <?php endif; ?>
    </div>
    
    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
      <?php if (isset($errors['phone'])): ?>
        <span class="error"><?php echo $errors['phone']; ?></span>
      <?php endif; ?>
    </div>
    
    <div class="form-group">
      <label for="address">Address</label>
      <textarea id="address" name="address" rows="4" required><?php echo htmlspecialchars($address); ?></textarea>
      <?php if (isset($errors['address'])): ?>
        <span class="error"><?php echo $errors['address']; ?></span>
      <?php endif; ?>
    </div>
    
    <button type="submit">Confirm Booking</button>
  </form>
</body>
</html>