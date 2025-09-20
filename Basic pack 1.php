<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thanjavur Tour Package</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
      color: #333;
    }
    .container {
      background-color: #fff;
      max-width: 900px;
      margin: 40px auto;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 20px;
      font-size: 2.2em;
    }
    h3 {
      color: #2c3e50;
      border-bottom: 2px solid #e91e63;
      padding-bottom: 8px;
      margin-top: 30px;
    }
    p {
      font-size: 16px;
      color: #444;
      line-height: 1.7;
    }
    .highlight {
      color: #e91e63;
      font-weight: bold;
    }
    .image-collage {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      justify-content: center;
      margin: 25px 0;
    }
    .image-collage img {
      width: 250px;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      transition: transform 0.3s;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    }
    .image-collage img:hover {
      transform: scale(1.03);
    }
    #map {
      height: 500px;
      width: 100%;
      margin: 25px 0;
      border-radius: 8px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      border: 1px solid #ddd;
    }
    .map-container {
      padding: 15px;
      background-color: white;
      border-radius: 8px;
      margin: 30px 0;
    }
    .button {
      background-color: #e91e63;
      color: white;
      text-decoration: none;
      padding: 12px 30px;
      font-size: 16px;
      border-radius: 5px;
      display: inline-block;
      margin: 10px;
      transition: background-color 0.3s;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }
    .button:hover {
      background-color: #c2185b;
    }
    .button-container {
      text-align: center;
      margin-top: 35px;
    }
    .distance-label {
      background: white;
      padding: 5px 10px;
      border-radius: 15px;
      font-weight: bold;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      border: 1px solid #ddd;
      font-size: 14px;
      color: #2c3e50;
    }
    ul {
      padding-left: 20px;
      line-height: 1.6;
    }
    li {
      margin-bottom: 8px;
    }
    .map-instructions {
      text-align: center;
      font-style: italic;
      color: #666;
      margin-top: 10px;
    }
    .resort-highlight {
      background-color: #f8f9fa;
      padding: 15px;
      border-radius: 8px;
      margin: 20px 0;
      border-left: 4px solid #e91e63;
    }
    /* Custom marker styles */
    .custom-marker-blue {
      background-color: #3498db;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border: 2px solid white;
      box-shadow: 0 0 5px rgba(0,0,0,0.3);
    }
    .custom-marker-red {
      background-color: #e74c3c;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      border: 2px solid white;
      box-shadow: 0 0 5px rgba(0,0,0,0.3);
    }
    .custom-marker-green {
      background-color: #2ecc71;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      border: 2px solid white;
      box-shadow: 0 0 5px rgba(0,0,0,0.3);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Thanjavur Tour Package</h1>
    <p>Explore the majestic legacy of the Cholas in the cultural capital of Tamil Nadu. Thanjavur is a living museum of art, architecture, music, and ancient Tamil traditions.

</p>
    
    <p><strong>Package Starts From:</strong> <span class="highlight">₹6500</span><br>
    <strong>Includes:</strong> 5-star accommodation, private sightseeing, heritage guide, bus & railway pickup & more.</p>

    <div class="image-collage">
      <img src="https://letusdiscoverindia.com/wp-content/uploads/2023/03/pexels-photo-5124396.jpeg" alt="Thanjavur Temple">
      <img src="https://www.laurewanders.com/wp-content/uploads/2022/12/Maratha-Palace-Thanjavur-00007.jpg" alt="">
      <img src="https://www.trawell.in/admin/images/upload/921956301Thanjavur_Palace_Main.jpg" alt="">
      <img src="https://www.quirkybyte.com/wp-content/uploads/2019/12/Places-to-Visit-in-Thanjavur.jpg" alt="">
      <img src="https://www.trawell.in/admin/images/thumbs/70543256Kamakshi_Temple_Main_thumb.jpg" alt="">
    </div>


    <div class="resort-highlight">
      <h1>Thanjavur Hotel Options</h1>
      <p><span class="highlight"> Luxury (4–5 Star):</span><ul><li>Svatma Heritage Hotel – Boutique cultural hotel with classical interiors, spa, and live music sessions</li>

<li>Ideal River View Resort – Serene resort by the Cauvery River with Ayurvedic wellness and pool</li></ul></p>

      <p><span class="highlight">Deluxe (3 Star):</span><ul><li> Hotel Gnanam – Centrally located with spacious rooms and multi-cuisine dining</li> <li>Lakshmi Hotel – Modern amenities, family-friendly, near city center</li></ul></p>
    </div>
    
    <h4>Description:</h4>
    <p>The Hotels offers a range of room options with prices starting from <span class="highlight">₹4500</span> and going up to <span class="highlight">₹11,000</span> per night, excluding taxes and fees.</p>
    
    <h3>Key Tourist Attractions & Activities</h3>
    <ul>
    🔸 Day 1: Heritage & Temples
Brihadeeswara Temple (Big Temple) – UNESCO World Heritage, 1000+ years old, masterpiece of Chola architecture

Thanjavur Royal Palace – Historic palace with Sangeetha Mahal, Bell Tower, and Saraswathi Mahal Library

Rajaraja Chola Museum – Rare bronze sculptures and inscriptions</ul>

<ul>🔸 Day 2: Cultural Immersion
Visit Art Galleries featuring Chola bronzes

Watch or take part in a Tanjore Painting Workshop (optional hands-on experience)

Visit local weavers and artisans (Thanjavur Dolls, Silk, Veena making)

Evening classical music or Bharatanatyam performance (subject to schedule) </ul>

<ul>🔸 Day 3: Nearby Attractions (Optional)
Gangaikonda Cholapuram – Grand temple built by Rajendra Chola (1.5 hours away)

Darasuram (Airavatesvara Temple) – Another UNESCO heritage site

Kumbakonam Temples – Famous for Adi Kumbeswarar, Sarangapani, and Navagraha temples
    </ul>
    <p>Note: The itinerary can be customized based on your interests and time.</p>  

    <div class="button-container">
      <a href="basic_package.php" class="button">Back to Packages</a>
      <a href="Booking_form.php" class="button">Book Now</a>
    </div>
  </div>

  </script>
</body>
</html>