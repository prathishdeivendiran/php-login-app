<?php
session_start();
if (!isset($_SESSION['booking_details'])) {
    header('Location: index.php');
    exit();
}
$booking = $_SESSION['booking_details'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { padding: 20px; }
        .confirmation-card {
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 10px;
            padding: 30px;
        }
        .header {
            color: #1e3c72;
            border-bottom: 2px solid #1e3c72;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="confirmation-card">
        <h1 class="header text-center">Booking Confirmation</h1>
        
        <div class="alert alert-success">
            <h4><i class="bi bi-check-circle"></i> Thank you for your booking!</h4>
            <p>A confirmation has been sent to your email address.</p>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <h3>Personal Information</h3>
                <p><strong>Name:</strong> <?= htmlspecialchars($booking['name']) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($booking['email']) ?></p>
                <p><strong>Phone:</strong> <?= htmlspecialchars($booking['phone']) ?></p>
                <p><strong>Address:</strong> <?= htmlspecialchars($booking['address']) ?></p>
                <p><strong>Number of People:</strong> <?= htmlspecialchars($booking['people']) ?></p>
            </div>
            
            <div class="col-md-6">
                <h3>Booking Details</h3>
                <p><strong>Booking Time:</strong> <?= htmlspecialchars($booking['booking_time']) ?></p>
                <p><strong>Total Cost:</strong> ₹<?= number_format($booking['total_cost'], 2) ?></p>
            </div>
        </div>
        
        <div class="mt-4">
            <h3>Selected Destinations</h3>
            <ul class="list-group">
                <?php foreach ($booking['locations'] as $location): ?>
                <li class="list-group-item">
                    <strong><?= htmlspecialchars($location['name']) ?></strong>
                    <div class="text-muted"><?= htmlspecialchars($location['address']) ?></div>
                    <div class="text-end">₹<?= number_format($location['cost'], 2) ?></div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="mt-4 text-end">
            <a href="index.php" class="btn btn-primary">
                <i class="bi bi-house-door"></i> Return Home
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
// Clear the booking details from session after displaying
unset($_SESSION['booking_details']);
?>
<script>
    .then(data => {
    if (data.success) {
        Swal.fire({
            icon: 'success',
            title: 'Booking Confirmed!',
            html: data.message,
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'btn btn-success'
            }
        }).then(() => {
            // Only redirect if the redirect URL exists in the response
            if (data.redirect) {
                window.location.href = data.redirect;
            } else {
                // Optionally refresh the page or clear the form
                bookingForm.reset();
                cart.length = 0;
                updateCartUI();
            }
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Booking Failed',
            text: data.message,
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'btn btn-danger'
            }
        });
    }
})
</script>