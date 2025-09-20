<?php
session_start();

// Enhanced session validation
if (!isset($_SESSION['booking_details'])) {
    $_SESSION['error'] = 'Your booking session has expired or is invalid.';
    header('Location: custom_package.php');
    exit();
}

$required_fields = ['name', 'email', 'phone', 'address', 'total_price', 'package_details'];
foreach ($required_fields as $field) {
    if (!isset($_SESSION['booking_details'][$field])) {
        $_SESSION['error'] = 'Incomplete booking information.';
        header('Location: custom_package.php');
        exit();
    }
}

$booking = $_SESSION['booking_details'];
unset($_SESSION['booking_details']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Confirmation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }
    .confirmation-box {
      background: #f8f9fa;
      padding: 30px;
      border-radius: 10px;
      margin: 30px 0;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    h1 {
      color: #28a745;
    }
    .details {
      text-align: left;
      margin: 20px 0;
    }
    .package-item {
      background: white;
      padding: 15px;
      margin: 10px 0;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0,0,0,0.05);
    }
    .total {
      font-weight: bold;
      font-size: 20px;
      margin: 20px 0;
    }
    .btn {
      display: inline-block;
      background: #007bff;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
    }
    .btn:hover {
      background: #0056b3;
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
  <?php if (isset($_SESSION['error'])): ?>
    <div class="error-message"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
  <?php endif; ?>

  <div class="confirmation-box">
    <h1>Booking Confirmed!</h1>
    <p>Thank you for your booking, <?php echo htmlspecialchars($booking['name']); ?>!</p>
    <p>A confirmation email has been sent to <?php echo htmlspecialchars($booking['email']); ?>.</p>
    
    <div class="details">
      <h3>Booking Details:</h3>
      <p><strong>Name:</strong> <?php echo htmlspecialchars($booking['name']); ?></p>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($booking['email']); ?></p>
      <p><strong>Phone:</strong> <?php echo htmlspecialchars($booking['phone']); ?></p>
      <p><strong>Address:</strong> <?php echo htmlspecialchars($booking['address']); ?></p>
      
      <h4>Packages Booked:</h4>
      <?php foreach ($booking['package_details'] as $item): ?>
        <div class="package-item">
          <p><strong><?php echo htmlspecialchars($item['name']); ?></strong></p>
          <p>Persons: <?php echo intval($item['numPeople']); ?></p>
          <p>Price: ₹<?php echo number_format(floatval($item['totalPrice']), 2); ?></p>
        </div>
      <?php endforeach; ?>
      
      <div class="total">Total Amount: ₹<?php echo number_format($booking['total_price'], 2); ?></div>
    </div>
    
    <p>We'll contact you shortly with more details about your tour.</p>
    <a href="custom_package.php" class="btn">Back to Packages</a>
  </div>
</body>
</html>