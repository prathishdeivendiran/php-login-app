<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Custom Package</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .content-wrapper {
      display: flex;
      margin-top: 60px; /* Added to account for fixed navbar */
    }
    .packages {
      flex: 3;
      display: flex;
      flex-wrap: wrap;
      padding: 20px;
    }
    .package {
      width: 45%;
      margin: 2%;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background: white;
    }
    .cart {
      flex: 1;
      padding: 20px;
      background: #f8f8f8;
      border-left: 2px solid #ddd;
    }
    .cart h3 {
      margin-top: 0;
    }
    .cart-item {
      margin-bottom: 10px;
      padding: 8px;
      background: white;
      border-radius: 5px;
    }
    button {
      background: #007bff;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background: #0056b3;
    }
    input[type="number"] {
      width: 50px;
      margin-right: 10px;
      padding: 5px;
    }
    .error-message {
      color: #dc3545;
      margin: 10px 0;
      padding: 10px;
      background: #f8d7da;
      border-radius: 5px;
    }
    .navbar {
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }
    .navbar-brand img.logo {
      height: 40px;
    }
    .premium-text {
      margin-left: 20px;
      color: gold;
      font-weight: bold;
    }
  </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="images/your_trip.png" class="logo" alt="Your Trip Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Project-1%20-%20Copy/homepage/homepage.php#category">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Project-1%20-%20Copy/homepage/homepage.php#blogs">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Project-1%20-%20Copy/homepage/homepage.php#about">About Us</a>
        </li>
      </ul>
      <span class="navbar-text premium-text">🧺 Custom Packages</span>
    </div>
  </div>
</nav>

<div class="content-wrapper">
  <div class="packages">
    <!-- Package 1 -->
    <div class="package">
      <h2>Coorg Adventure</h2>
      <img src="https://static.wixstatic.com/media/a56ba3_77f4c5ca239e42bb91ce4617e90c8980~mv2.jpg/v1/fill/w_568,h_568,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/a56ba3_77f4c5ca239e42bb91ce4617e90c8980~mv2.jpg" alt="Coorg Adventure" style="width:100%; border-radius: 10px;">
      <p>Coffee estates, waterfalls and scenic beauty.</p>
      <p>Price per person: ₹7,500</p>
      <input type="number" id="people-coorg" value="1" min="1">
      <button onclick="addToCart('Coorg Adventure', 7500, 'people-coorg')">Add</button>
      <a href="#" ><button class="btn btn-primary" style="margin-left: 10px;">View Details</button></a>
    </div>

    <!-- Package 2 -->
    <div class="package">
      <h2>Kerala Backwaters</h2>
      <img src="https://i.ytimg.com/vi/k0zSkjAqet4/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCamC1lG4zL6yKTBPWnbovioxgOiA" alt="Coorg Adventure" style="width:100%; border-radius: 10px;">
      <p>Houseboat experience in Alleppey and Kumarakom.</p>
      <p>Price per person: ₹10,000</p>
      <input type="number" id="people-kerala" value="1" min="1">
      <button onclick="addToCart('Kerala Backwaters', 10000, 'people-kerala')">Add</button>
      <a href="#" ><button class="btn btn-primary" style="margin-left: 10px;">View Details</button></a>
    </div>

    <!-- Package 3 -->
    <div class="package">
      <h2>Goa Beach Fun</h2>
      <img src="https://images.travelxp.com/images/india/goa/Less_Crowded_and_Hidden_Beaches_in_Goa.png" alt="Coorg Adventure" style="width:100%; border-radius: 10px;">
      <p>Sun, sand and nightlife of Goa.</p>
      <p>Price per person: ₹11,000</p>
      <input type="number" id="people-goa" value="1" min="1">
      <button onclick="addToCart('Goa Beach Fun', 11000, 'people-goa')">Add</button>
      <a href="#" ><button class="btn btn-primary" style="margin-left: 10px;">View Details</button></a>
    </div>

  <!-- Package 4 -->
  <div class="package">
      <h2>Custom Map Booking</h2>
      <img src="https://www.ezilon.com/maps/images/world-political-map.gif" alt="Custom Map Booking" style="width:100%; border-radius: 10px;">
      <p>Pick And search your desired locations</p>
      <p>Choose your own Package</p>
      <button type="submit" style="background-color: #4CAF50; color: white; padding: 12px 25px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">
            <a href="custom_package_map.php" style="color: white; text-decoration: none;">Maps</a>
          </button>
    </div>
  
</div>

  <div class="cart">
    <h3>Custom Package</h3>
    <?php if (isset($_SESSION['error'])): ?>
      <div class="error-message"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
    <?php endif; ?>
    <div id="cart-items"></div>
    <h4>Total: ₹<span id="grand-total">0</span></h4>
    <button onclick="bookNow()">Book Now</button>
  </div>
</div>

<script>
  let cartItems = [];
  let total = 0;

  function addToCart(name, pricePerPerson, inputId) {
    const numPeople = parseInt(document.getElementById(inputId).value);
    if (isNaN(numPeople) || numPeople < 1) {
      alert("Please enter a valid number of people.");
      return;
    }

    const totalPrice = pricePerPerson * numPeople;
    cartItems.push({ name, numPeople, totalPrice });
    total += totalPrice;
    updateCartDisplay();
  }

  function updateCartDisplay() {
    const cartDiv = document.getElementById("cart-items");
    cartDiv.innerHTML = "";

    cartItems.forEach(item => {
      const div = document.createElement("div");
      div.classList.add("cart-item");
      div.textContent = `${item.name} - ${item.numPeople} person(s) - ₹${item.totalPrice}`;
      cartDiv.appendChild(div);
    });

    document.getElementById("grand-total").textContent = total;
  }

  function bookNow() {
    if (cartItems.length === 0) {
      alert("Please add at least one package before booking.");
      return;
    }

    try {
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = 'custom_booking.php';

      const totalInput = document.createElement('input');
      totalInput.type = 'hidden';
      totalInput.name = 'total_price';
      totalInput.value = total;
      form.appendChild(totalInput);

      const detailsInput = document.createElement('input');
      detailsInput.type = 'hidden';
      detailsInput.name = 'package_details';
      detailsInput.value = JSON.stringify(cartItems);
      form.appendChild(detailsInput);

      document.body.appendChild(form);
      form.submit();
    } catch (error) {
      console.error("Booking error:", error);
      alert("An error occurred. Please try again.");
    }
  }
</script>
</body>
</html>