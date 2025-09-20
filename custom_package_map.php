<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
   
    $response = ['success' => false, 'message' => ''];
    $errors = [];
   
    try {
        // Validate inputs
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
        $people = filter_input(INPUT_POST, 'people', FILTER_VALIDATE_INT);
        $locations = json_decode($_POST['selected_locations'] ?? '[]', true);
       
        if (!$name) $errors['name'] = 'Name is required';
        if (!$email) {
            $errors['email'] = 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format';
        }
        if (!$phone) $errors['phone'] = 'Phone is required';
        if (!$address) $errors['address'] = 'Address is required';
        if (!$people || $people < 1) $errors['people'] = 'Please enter valid number of people';
        if (empty($locations)) $errors['locations'] = 'Please select at least one destination';
       
        if (!empty($errors)) {
            throw new Exception(implode(' ', $errors));
        }

        // Load PHPMailer
        require_once __DIR__ . '/PHPMailer/src/Exception.php';
        require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
        require_once __DIR__ . '/PHPMailer/src/SMTP.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $dev_mail = new PHPMailer\PHPMailer\PHPMailer(true);

        // Server settings for both emails
        $mail_config = [
            'isSMTP' => true,
            'Host' => 'smtp.gmail.com',
            'SMTPAuth' => true,
            'Username' => 'yourtrip2k25@gmail.com',
            'Password' => 'unza khis fwpw wcgr',
            'SMTPSecure' => PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS,
            'Port' => 587,
            'SMTPDebug' => 0,
            'Debugoutput' => 'error_log'
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
            $mailer->SMTPDebug = $mail_config['SMTPDebug'];
            $mailer->Debugoutput = $mail_config['Debugoutput'];
            $mailer->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ];
        }

        // Recipients for user email
        $mail->setFrom('noreply@yourtrip.com', 'Your Trip');
        $mail->addAddress($email, $name);
        $mail->addReplyTo('info@yourtrip.com', 'Information');
        $mail->isHTML(true);
        $mail->Subject = 'Your Trip Booking Confirmation';

        // Recipients for developer email
        $dev_mail->setFrom('noreply@yourtrip.com', 'Tamil Nadu Tourism');
        $dev_mail->addAddress('yourtrip2k25@gmail.com', 'Developer');
        $dev_mail->addReplyTo('info@yourtrip.com', 'Information');
        $dev_mail->isHTML(true);
        $dev_mail->Subject = 'New Booking Received - ' . $name;

        // Build email content
        $listItems = array_map(function($loc) {
            return '<li>' . htmlspecialchars($loc['name']) . ' - ₹' . number_format($loc['cost'], 2) . '</li>';
        }, $locations);

        $totalCost = array_reduce($locations, function($sum, $loc) {
            return $sum + ($loc['cost'] ?? 0);
        }, 0);

        // User email body
        $user_email_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .header { color: #1e3c72; font-size: 24px; margin-bottom: 20px; }
                .details { margin-bottom: 20px; }
                .footer { margin-top: 30px; color: #6c757d; font-size: 14px; }
            </style>
        </head>
        <body>
            <div class='header'>Your Trip Booking Confirmation</div>
            <div class='details'>
                <p>Dear $name,</p>
                <p>Thank you for booking with Your Trip. Here are your details:</p>
               
                <h3>Personal Information</h3>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Address:</strong> $address</p>
                <p><strong>Number of People:</strong> $people</p>
               
                <h3>Selected Destinations</h3>
                <ul>" . implode('', $listItems) . "</ul>
                <h4>Total Cost: ₹" . number_format($totalCost, 2) . "</h4>
               
                <p>Our team will contact you within 24 hours to confirm your itinerary.</p>
                <p>Experience the rich culture and heritage of the World</p>
            </div>
            <div class='footer'>
                <p>Best regards,<br>Your Trip Team</p>
            </div>
        </body>
        </html>";

        // Developer email body
        $dev_email_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .header { color: #1e3c72; font-size: 24px; margin-bottom: 20px; }
                .details { margin-bottom: 20px; }
                .footer { margin-top: 30px; color: #6c757d; font-size: 14px; }
                .alert { background-color: #fff3cd; padding: 10px; border-radius: 5px; margin: 10px 0; }
            </style>
        </head>
        <body>
            <div class='header'>New Your Trip Booking</div>
            <div class='alert'>Action Required: Please contact the customer to confirm arrangements.</div>
            <div class='details'>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Address:</strong> $address</p>
                <p><strong>Number of People:</strong> $people</p>
                <p><strong>Booking Time:</strong> ".date('Y-m-d H:i:s')."</p>
               
                <h3>Selected Destinations</h3>
                <ul>" . implode('', $listItems) . "</ul>
                <h4>Total Cost: ₹" . number_format($totalCost, 2) . "</h4>
            </div>
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

        // Send emails
        $mail_sent = $mail->send();
        $dev_mail_sent = $dev_mail->send();

        if ($mail_sent && $dev_mail_sent) {
            $response['success'] = true;
            $response['message'] = 'Booking confirmed! A confirmation email has been sent to your email address.';
           
            // Store booking in session
            $_SESSION['booking_details'] = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'people' => $people,
                'locations' => $locations,
                'total_cost' => $totalCost,
                'booking_time' => date('Y-m-d H:i:s')
            ];
        } else {
            $errorInfo = '';
            if (!$mail_sent) $errorInfo .= 'User email failed: ' . $mail->ErrorInfo . ' ';
            if (!$dev_mail_sent) $errorInfo .= 'Dev email failed: ' . $dev_mail->ErrorInfo;
            throw new Exception('Failed to send confirmation emails. ' . $errorInfo);
        }

    } catch (Exception $e) {
        $response['message'] = 'Error: ' . $e->getMessage();
        error_log('Booking Error: ' . $e->getMessage());
    }

    echo json_encode($response);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Custom Map Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    #map { height: 60vh; }
    .location-image { width: 80px; height: 80px; object-fit: cover; border-radius: 5px; margin: 5px; }
    .predefined-btn { margin-right: 5px; margin-bottom: 5px; }
    .cost-display { font-weight: bold; margin-top: 10px; }
    .map-click-instruction { 
      position: absolute; 
      top: 10px; 
      left: 50%; 
      transform: translateX(-50%); 
      background: rgba(255,255,255,0.8); 
      padding: 5px 10px; 
      border-radius: 5px; 
      z-index: 1000;
      font-size: 14px;
    }
    #location-name-input {
      margin-bottom: 10px;
    }
    .header-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
      padding: 15px;
      background-color: #f8f9fa;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .logo-title {
      display: flex;
      align-items: center;
      gap: 15px;
    }
    .logo-img {
      height: 50px;
      width: auto;
    }
    .home-btn {
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      padding: 8px 15px;
      border-radius: 5px;
      display: flex;
      align-items: center;
      gap: 5px;
      color: #212529;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .home-btn:hover {
      background-color: #e9ecef;
      text-decoration: none;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .form-control:focus, .btn:focus {
      box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    #cart-items .list-group-item {
      transition: all 0.3s ease;
      border-radius: 8px !important;
      margin-bottom: 8px;
    }
    #cart-items .list-group-item:hover {
      background-color: #f8f9fa;
      transform: translateX(5px);
    }
    .loading-spinner {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 9999;
      justify-content: center;
      align-items: center;
    }
    .spinner-border {
      width: 3rem;
      height: 3rem;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .btn-primary {
      background-color: #1e3c72;
      border-color: #1e3c72;
    }
    .btn-primary:hover {
      background-color: #152a4d;
      border-color: #152a4d;
    }
    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }
    .btn-success:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }
    .btn-warning {
      background-color: #ffc107;
      border-color: #ffc107;
      color: #212529;
    }
    .btn-warning:hover {
      background-color: #e0a800;
      border-color: #d39e00;
    }
    .location-info-card {
      border-left: 4px solid #1e3c72;
    }
    .total-cost-box {
      background-color: #f8f9fa;
      padding: 15px;
      border-radius: 8px;
      border-left: 4px solid #28a745;
    }
  </style>
</head>
<body>
<div class="loading-spinner" id="loadingSpinner">
  <div class="spinner-border text-primary" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>

<div class="container py-3">
  <div class="header-container">
    <div class="logo-title">
      <img src="images\your_trip.png" alt="Travel Logo" class="logo-img">
      <h2 class="text-center mb-0">Your Trip</h2>
    </div>
    <a href="homepage.php" class="home-btn">
      <i class="bi bi-house-door"></i>
      Home
    </a>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="input-group mb-2">
        <input type="text" id="search-input" class="form-control" placeholder="Search location...">
        <button id="search-button" class="btn btn-primary">Search</button>
      </div>
      <div class="mb-2">
        <button class="btn btn-sm btn-outline-primary predefined-btn" data-location="kanyakumari">Kanyakumari</button>
        <button class="btn btn-sm btn-outline-primary predefined-btn" data-location="goa">Goa</button>
        <button class="btn btn-sm btn-outline-primary predefined-btn" data-location="manali">Manali</button>
        <button class="btn btn-sm btn-outline-primary predefined-btn" data-location="chennai">Chennai</button>
        <button class="btn btn-sm btn-outline-primary predefined-btn" data-location="madurai">Madurai</button>
      </div>
      <div id="map-container" style="position: relative;">
        <div class="map-click-instruction">Click anywhere on the map to add a location</div>
        <div id="map"></div>
      </div>
    </div>
    <div class="col-md-4">
      <div id="location-info" class="card location-info-card d-none mb-3">
        <div class="card-body">
          <input type="text" id="location-name-input" class="form-control" placeholder="Custom location name">
          <h5 id="location-name" class="card-title"></h5>
          <p id="location-address" class="text-muted"></p>
          <p id="location-description" class="card-text"></p>
          <div id="location-images" class="d-flex flex-wrap"></div>
          <div class="input-group mt-2">
            <span class="input-group-text">₹</span>
            <input type="number" id="location-cost" class="form-control" placeholder="Package cost" value="5000" min="1000" step="500">
          </div>
          <button class="btn btn-success mt-2 w-100" id="add-to-cart">
            <i class="bi bi-cart-plus"></i> Add to Cart
          </button>
        </div>
      </div>
      <h5>Selected Locations</h5>
      <ul id="cart-items" class="list-group mb-3"></ul>
      <div id="total-cost" class="total-cost-box text-end mb-3 d-none">
        <h5>Total: ₹<span>0</span></h5>
      </div>

      <form id="booking-form" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Your Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Your Email</label>
          <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Your Phone</label>
          <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" required>
        </div>
        <div class="mb-3">
          <label for="people" class="form-label">Number of People</label>
          <input type="number" name="people" class="form-control" placeholder="Enter number of people" required min="1">
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Your Address</label>
          <textarea name="address" class="form-control" placeholder="Enter your full address" required rows="3"></textarea>
        </div>
        <input type="hidden" name="selected_locations" id="selected_locations">
        <button type="submit" class="btn btn-warning w-100">
          <i class="bi bi-send-check"></i> Book Now
        </button>
      </form>
      <div id="response" class="mt-3"></div>
    </div>
  </div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  // Initialize map
  const map = L.map('map').setView([11.1271, 78.6569], 7); // Center on Tamil Nadu
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // Enhanced predefined locations data with more Tamil Nadu destinations
  const predefinedLocations = {
    'kanyakumari': {
      name: 'Kanyakumari',
      address: 'Kanyakumari, Tamil Nadu, India',
      description: 'The southernmost tip of India where three oceans meet, famous for its sunrise and sunset views over the ocean. The Thiruvalluvar Statue and Vivekananda Rock Memorial are iconic landmarks.',
      images: [
        'https://www.india.com/wp-content/uploads/2024/12/1st-image-2024-12-10T151732.522.jpg',
        'https://www.tamilnadutourism.tn.gov.in/img/pages/large-desktop/kanyakumari-1656091428_cf69d9a9dbec82018046.jpg',
        'https://www.trawell.in/admin/images/upload/258873765Kanyakumari_Main.jpg',
        'https://static.toiimg.com/photo/msid-103208199,imgsize-17194,width-400,resizemode-4/103208199.jpg'
      ],
      coords: [8.0777, 77.5539],
      cost: 7500
    },
    'goa': {
      name: 'Goa',
      address: 'Goa, India',
      description: 'Famous for its beaches, nightlife, and Portuguese heritage. A perfect blend of Indian and Western cultures.',
      images: [
        'https://www.holidify.com/images/bgImages/GOA.jpg',
        'https://www.tourism-of-india.com/blog/wp-content/uploads/2020/04/Goa-Tourism.jpg',
        'https://www.tourmyindia.com/states/goa/image/goa-top-attractions1.jpg',
        'https://www.tourmyindia.com/states/goa/image/goa-top-attractions2.jpg'
      ],
      coords: [15.2993, 74.1240],
      cost: 10000
    },
    'manali': {
      name: 'Manali',
      address: 'Manali, Himachal Pradesh',
      description: 'Nestled in the mountains of Himachal Pradesh, Manali is a popular destination for honeymooners and adventure seekers.',
      images: [
        'https://www.holidify.com/images/bgImages/MANALI.jpg',
        'https://www.tourmyindia.com/states/himachal/image/manali-top-attractions1.jpg',
        'https://www.tourmyindia.com/states/himachal/image/manali-top-attractions2.jpg',
        'https://www.tourmyindia.com/states/himachal/image/manali-top-attractions3.jpg'
      ],
      coords: [32.2432, 77.1892],
      cost: 8500
    },
    'chennai': {
      name: 'Chennai',
      address: 'Chennai, Tamil Nadu, India',
      description: 'The capital city of Tamil Nadu known for its beaches, temples, and vibrant culture. Home to Marina Beach, the second longest urban beach in the world.',
      images: [
        'https://www.tamilnadutourism.tn.gov.in/img/pages/large-desktop/chennai-1655451349_b7a5c8a8c1d1a4e5f8d3.jpg',
        'https://www.tourmyindia.com/states/tamilnadu/image/chennai-top-attractions1.jpg',
        'https://www.tourmyindia.com/states/tamilnadu/image/chennai-top-attractions2.jpg',
        'https://www.tourmyindia.com/states/tamilnadu/image/chennai-top-attractions3.jpg'
      ],
      coords: [13.0827, 80.2707],
      cost: 6500
    },
    'madurai': {
      name: 'Madurai',
      address: 'Madurai, Tamil Nadu, India',
      description: 'One of the oldest continuously inhabited cities in the world, famous for the Meenakshi Amman Temple with its stunning architecture and intricate carvings.',
      images: [
        'https://www.tamilnadutourism.tn.gov.in/img/pages/large-desktop/madurai-1655451368_5a2c4b5a1a1b7b9a8f5d.jpg',
        'https://www.tourmyindia.com/states/tamilnadu/image/madurai-top-attractions1.jpg',
        'https://www.tourmyindia.com/states/tamilnadu/image/madurai-top-attractions2.jpg',
        'https://www.tourmyindia.com/states/tamilnadu/image/madurai-top-attractions3.jpg'
      ],
      coords: [9.9252, 78.1198],
      cost: 6000
    }
  };

  // Enhanced descriptions for different location types
  const locationDescriptions = {
    'city': [
      "A bustling urban center with modern amenities and vibrant city life.",
      "This city offers a perfect mix of historical landmarks and contemporary attractions.",
      "Known for its skyscrapers, shopping districts, and cultural diversity."
    ],
    'beach': [
      "Pristine sandy beaches with crystal clear waters perfect for relaxation.",
      "A tropical paradise with palm-fringed shores and water sports activities.",
      "Famous for its sunset views and beachside resorts."
    ],
    'mountain': [
      "Majestic peaks offering breathtaking views and trekking opportunities.",
      "A haven for nature lovers with cool climate and scenic landscapes.",
      "Popular for adventure sports like skiing and mountain climbing."
    ],
    'historical': [
      "Rich in history with ancient monuments and archaeological significance.",
      "A UNESCO World Heritage Site with well-preserved historical structures.",
      "Offers a glimpse into the past with its museums and heritage buildings."
    ],
    'nature': [
      "Lush green landscapes with diverse flora and fauna.",
      "A nature reserve with hiking trails and wildlife spotting opportunities.",
      "Known for its waterfalls, lakes, and pristine natural beauty."
    ],
    'temple': [
      "A sacred place of worship with stunning architecture and spiritual significance.",
      "This temple is renowned for its intricate carvings and religious festivals.",
      "An important pilgrimage site with a rich cultural heritage."
    ]
  };

  // DOM elements
  const locationInfo = document.getElementById('location-info');
  const locationNameInput = document.getElementById('location-name-input');
  const locationName = document.getElementById('location-name');
  const locationAddress = document.getElementById('location-address');
  const locationDescription = document.getElementById('location-description');
  const locationImages = document.getElementById('location-images');
  const locationCost = document.getElementById('location-cost');
  const addToCartBtn = document.getElementById('add-to-cart');
  const cartList = document.getElementById('cart-items');
  const bookingForm = document.getElementById('booking-form');
  const responseBox = document.getElementById('response');
  const selectedLocationsInput = document.getElementById('selected_locations');
  const totalCostDisplay = document.getElementById('total-cost');
  const loadingSpinner = document.getElementById('loadingSpinner');

  let selectedLocation = null;
  const cart = [];
  let markers = [];

  // Handle map click to add custom location with enhanced details
  map.on('click', function(e) {
    const { lat, lng } = e.latlng;
    
    // Clear existing markers
    clearMarkers();
    
    // Add marker for clicked location
    const marker = L.marker([lat, lng]).addTo(map);
    markers.push(marker);
    
    // Show loading state while fetching location data
    showLoading(true);
    
    // Get detailed address using reverse geocoding
    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&addressdetails=1&namedetails=1`)
      .then(res => res.json())
      .then(data => {
        // Extract detailed address components
        const address = data.address || {};
        const name = data.namedetails?.name || 
                    address.tourism || 
                    address.attraction || 
                    address.historic || 
                    address.landmark || 
                    `${address.city || address.town || address.village || address.county || 'Location'} (${lat.toFixed(4)}, ${lng.toFixed(4)})`;
        
        // Build full address string
        let fullAddress = '';
        if (address.road) fullAddress += address.road + ', ';
        if (address.neighbourhood) fullAddress += address.neighbourhood + ', ';
        if (address.suburb) fullAddress += address.suburb + ', ';
        if (address.city) fullAddress += address.city + ', ';
        if (address.county) fullAddress += address.county + ', ';
        if (address.state) fullAddress += address.state + ', ';
        if (address.country) fullAddress += address.country;
        
        // Determine location type for description
        let locationType = 'nature';
        if (address.tourism) {
          if (address.tourism === 'hotel') locationType = 'city';
          else if (address.tourism === 'attraction') locationType = 'historical';
        } else if (address.leisure) {
          locationType = 'nature';
        } else if (address.historic) {
          locationType = 'historical';
        } else if (address.place_of_worship) {
          locationType = 'temple';
        } else if (address.city || address.town) {
          locationType = 'city';
        } else if (address.village) {
          locationType = 'historical';
        }
        
        selectedLocation = {
          id: Date.now(),
          name: name,
          address: fullAddress || data.display_name || `Near coordinates (${lat.toFixed(4)}, ${lng.toFixed(4)})`,
          description: getLocationDescription(locationType),
          images: getImages(locationType, name),
          cost: calculateLocationCost(locationType),
          coords: [lat, lng],
          isCustom: true,
          exactName: name,
          exactAddress: fullAddress
        };
        
        // Update marker popup with exact details
        marker.bindPopup(`
          <b>${selectedLocation.exactName}</b><br>
          ${selectedLocation.exactAddress}<br>
          <small>${selectedLocation.description.substring(0, 100)}...</small>
        `).openPopup();
        
        locationCost.value = selectedLocation.cost;
        showLocationInfo(selectedLocation);
      })
      .catch(err => {
        console.error('Reverse geocoding error:', err);
        // Fallback if reverse geocoding fails
        selectedLocation = {
          id: Date.now(),
          name: `Location (${lat.toFixed(2)}, ${lng.toFixed(2)})`,
          address: `Near coordinates ${lat.toFixed(4)}, ${lng.toFixed(4)})`,
          description: getLocationDescription('nature'),
          images: getImages('nature'),
          cost: calculateLocationCost('nature'),
          coords: [lat, lng],
          isCustom: true,
          exactName: `Location at ${lat.toFixed(4)}, ${lng.toFixed(4)}`,
          exactAddress: `Coordinates: ${lat.toFixed(4)}, ${lng.toFixed(4)}`
        };
        
        marker.bindPopup(`Custom Location<br>${selectedLocation.exactName}`).openPopup();
        
        locationCost.value = selectedLocation.cost;
        showLocationInfo(selectedLocation);
      })
      .finally(() => {
        showLoading(false);
      });
  });

  function clearMarkers() {
    markers.forEach(marker => map.removeLayer(marker));
    markers = [];
  }

  function calculateLocationCost(type) {
    const baseCosts = {
      'city': 5000,
      'beach': 7000,
      'mountain': 8000,
      'historical': 6000,
      'nature': 5500,
      'temple': 4500
    };
    const base = baseCosts[type] || 5000;
    return base + Math.floor(Math.random() * 2000); // Add some variation
  }

  // Handle predefined location buttons
  document.querySelectorAll('.predefined-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      const locationKey = this.dataset.location;
      if (predefinedLocations[locationKey]) {
        const loc = predefinedLocations[locationKey];
        
        // Clear existing markers
        clearMarkers();
        
        // Add marker for predefined location
        const marker = L.marker(loc.coords).addTo(map)
          .bindPopup(`<b>${loc.name}</b><br>${loc.address}<br><small>${loc.description.substring(0, 100)}...</small>`)
          .openPopup();
        markers.push(marker);
        
        map.setView(loc.coords, 12);
        selectedLocation = {
          id: Date.now(),
          name: loc.name,
          address: loc.address,
          description: loc.description,
          images: loc.images,
          cost: loc.cost,
          coords: loc.coords,
          isCustom: false,
          exactName: loc.name,
          exactAddress: loc.address
        };
        locationCost.value = loc.cost;
        showLocationInfo(selectedLocation);
      }
    });
  });

  document.getElementById('search-button').addEventListener('click', searchLocation);

  function searchLocation() {
    const query = document.getElementById('search-input').value.trim();
    if (!query) return;
    
    clearMarkers();
    showLoading(true);
    
    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}&addressdetails=1&namedetails=1`)
      .then(res => res.json())
      .then(data => {
        if (!data.length) {
          showAlert('Location not found', 'warning');
          return;
        }
        const loc = data[0];
        
        const marker = L.marker([loc.lat, loc.lon]).addTo(map)
          .bindPopup(`<b>${loc.display_name}</b>`)
          .openPopup();
        markers.push(marker);
        
        map.setView([loc.lat, loc.lon], 14);
        
        // Determine location type for description
        let locationType = 'nature';
        if (loc.type === 'city' || loc.type === 'town') locationType = 'city';
        else if (loc.type === 'beach') locationType = 'beach';
        else if (loc.type === 'mountain') locationType = 'mountain';
        else if (loc.class === 'historic') locationType = 'historical';
        else if (loc.class === 'tourism') locationType = 'temple';
        
        selectedLocation = {
          id: Date.now(),
          name: loc.display_name,
          address: loc.display_name,
          description: getLocationDescription(locationType),
          images: getImages(locationType, loc.display_name),
          cost: calculateLocationCost(locationType),
          coords: [parseFloat(loc.lat), parseFloat(loc.lon)],
          isCustom: false,
          exactName: loc.display_name,
          exactAddress: loc.display_name
        };
        locationCost.value = selectedLocation.cost;
        showLocationInfo(selectedLocation);
      })
      .catch(err => {
        console.error('Search error:', err);
        showAlert('Error searching for location', 'danger');
      })
      .finally(() => {
        showLoading(false);
      });
  }

  function getLocationDescription(type) {
    const descriptions = locationDescriptions[type] || locationDescriptions['nature'];
    return descriptions[Math.floor(Math.random() * descriptions.length)];
  }

  function showLocationInfo(loc) {
    locationInfo.classList.remove('d-none');
    
    // Show/hide custom name input based on whether it's a custom location
    if (loc.isCustom) {
      locationNameInput.style.display = 'block';
      locationNameInput.value = loc.exactName;
      locationName.style.display = 'none';
    } else {
      locationNameInput.style.display = 'none';
      locationName.style.display = 'block';
      locationName.textContent = loc.exactName;
    }
    
    locationAddress.textContent = loc.exactAddress;
    locationDescription.textContent = loc.description;
    locationImages.innerHTML = '';
    
    // Display up to 4 images for the location
    loc.images.slice(0, 4).forEach(url => {
      const img = document.createElement('img');
      img.src = url;
      img.className = 'location-image';
      img.alt = loc.name;
      img.onerror = function() {
        // Fallback image if the URL fails
        this.src = `https://source.unsplash.com/80x80/?${loc.name.split(' ')[0]},travel`;
      };
      locationImages.appendChild(img);
    });
  }

  function getImages(type, query) {
    const base = 'https://source.unsplash.com/80x80/?';
    const tags = {
      'city': ['cityscape', 'urban', 'skyscraper', 'downtown'],
      'beach': ['beach', 'ocean', 'sand', 'palm'],
      'mountain': ['mountain', 'peak', 'hiking', 'alps'],
      'historical': ['monument', 'temple', 'ancient', 'ruins'],
      'nature': ['landscape', 'forest', 'river', 'valley'],
      'temple': ['temple', 'architecture', 'religious', 'hindu']
    };
    
    const typeTags = tags[type] || tags['nature'];
    return typeTags.map(tag => base + tag + '&' + Math.random().toString(36).substr(2, 5));
  }

  addToCartBtn.addEventListener('click', () => {
    if (!selectedLocation) return;
    
    const cost = parseFloat(locationCost.value) || 0;
    if (cost < 1000) {
      showAlert('Please enter a valid cost (minimum ₹1000)', 'warning');
      return;
    }
    
    // Use exact name and address for custom locations
    const locationToAdd = {
      ...selectedLocation,
      name: selectedLocation.isCustom ? 
        (locationNameInput.value || selectedLocation.exactName) : 
        selectedLocation.exactName,
      address: selectedLocation.exactAddress,
      cost: cost
    };
    
    if (cart.find(c => c.name === locationToAdd.name)) {
      showAlert('This location is already in your cart', 'warning');
      return;
    }
    
    cart.push(locationToAdd);
    updateCartUI();
    showAlert(`${locationToAdd.name} added to cart!`, 'success');
  });

  function updateCartUI() {
    cartList.innerHTML = '';
    let total = 0;
    
    cart.forEach((loc, index) => {
      total += loc.cost;
      
      const li = document.createElement('li');
      li.className = 'list-group-item d-flex justify-content-between align-items-center';
      
      const content = document.createElement('div');
      content.innerHTML = `
        <strong>${loc.name}</strong>
        <small class="d-block text-muted">${loc.address}</small>
        <span class="text-primary">₹${loc.cost.toFixed(2)}</span>
      `;
      
      const btn = document.createElement('button');
      btn.className = 'btn btn-sm btn-danger';
      btn.innerHTML = '<i class="bi bi-trash"></i>';
      btn.onclick = () => {
        cart.splice(index, 1);
        updateCartUI();
        showAlert('Location removed from cart', 'info');
      };
      
      li.appendChild(content);
      li.appendChild(btn);
      cartList.appendChild(li);
    });
    
    selectedLocationsInput.value = JSON.stringify(cart);
    
    if (cart.length > 0) {
      totalCostDisplay.classList.remove('d-none');
      totalCostDisplay.querySelector('span').textContent = total.toFixed(2);
    } else {
      totalCostDisplay.classList.add('d-none');
    }
  }

bookingForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate form
    if (cart.length === 0) {
        showAlert('Please add at least one destination', 'warning');
        return;
    }
    
    const name = bookingForm.querySelector('input[name="name"]').value.trim();
    const email = bookingForm.querySelector('input[name="email"]').value.trim();
    const phone = bookingForm.querySelector('input[name="phone"]').value.trim();
    const address = bookingForm.querySelector('textarea[name="address"]').value.trim();
    const people = bookingForm.querySelector('input[name="people"]').value.trim();
    
    if (!name || !email || !phone || !address || !people) {
        showAlert('Please fill all required fields', 'warning');
        return;
    }
    
    // Validate email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        showAlert('Please enter a valid email address', 'warning');
        return;
    }
    
    // Validate phone number (basic validation)
    const phoneRegex = /^[0-9]{10,15}$/;
    if (!phoneRegex.test(phone)) {
        showAlert('Please enter a valid phone number (10-15 digits)', 'warning');
        return;
    }
    
    // Validate people count
    if (isNaN(people) || people < 1) {
        showAlert('Please enter a valid number of people', 'warning');
        return;
    }
    
    selectedLocationsInput.value = JSON.stringify(cart);

    // Show loading state
    const submitBtn = bookingForm.querySelector('button[type="submit"]');
    const originalBtnText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
    submitBtn.disabled = true;
    showLoading(true);

    fetch('', {
        method: 'POST',
        body: new FormData(bookingForm),
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(res => {
        if (!res.ok) {
            throw new Error('Network response was not ok');
        }
        return res.json();
    })
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
                // Reset the form and clear cart after successful booking
                bookingForm.reset();
                cart.length = 0;
                updateCartUI();
                // Clear any existing alerts
                responseBox.innerHTML = '';
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
    .catch(err => {
        console.error('Error:', err);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'An error occurred while processing your booking. Please try again later.',
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'btn btn-danger'
            }
        });
    })
    .finally(() => {
        submitBtn.innerHTML = originalBtnText;
        submitBtn.disabled = false;
        showLoading(false);
    });
});
  // Helper function to show alerts
  function showAlert(message, type) {
    const alert = document.createElement('div');
    alert.className = `alert alert-${type} alert-dismissible fade show`;
    alert.role = 'alert';
    alert.innerHTML = `
      ${message}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    // Remove any existing alerts first
    const existingAlert = responseBox.querySelector('.alert');
    if (existingAlert) {
      existingAlert.remove();
    }
    
    responseBox.appendChild(alert);
    
    // Auto-dismiss after 5 seconds
    setTimeout(() => {
      const bsAlert = new bootstrap.Alert(alert);
      bsAlert.close();
    }, 5000);
  }

  // Loading spinner control
  function showLoading(show) {
    loadingSpinner.style.display = show ? 'flex' : 'none';
  }

  // Initialize with empty cart
  updateCartUI();
</script>
</body>
</html>