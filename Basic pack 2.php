<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kanyakumari Tour Package</title>
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
    <h1>Kanyakumari Tour Package</h1>
    <p>Welcome to the southernmost tip of India, where the Bay of Bengal, Arabian Sea, and Indian Ocean meet. Kanyakumari is known for its magical sunrise and sunset, ancient temples, and serene coastal beauty.

</p>
    
    <p><strong>Package Starts From:</strong> <span class="highlight">₹6500</span><br>
    <strong>Includes:</strong> 5-star accommodation, private sightseeing, heritage guide, bus & railway pickup & more.</p>

    <div class="image-collage">
      <img src="https://www.tusktravel.com/blog/wp-content/uploads/2021/01/Kanyakumari-Temple.jpg" alt="">
      <img src="https://images.ixigo.com/image/upload/t_thumb,f_auto/vivekananda-rock-memorial-images-photos-512b1062e4b0695acbefd9bf.jpg" alt="">
      <img src="https://imgcld.yatra.com/ytimages/image/upload/v1481614632/Kanyakumari_Kanyakumari_Beach.jpg" alt="">
      <img src="https://www.treebo.com/blog/wp-content/uploads/2020/01/Bharat-Mata-Temple.jpg" alt="">
      <img src="https://wallpaperaccess.com/full/2171069.jpg" alt="">
    </div>


    <div class="resort-highlight">
      <h1>Kanyakumari Hotel Options</h1>
      <p><span class="highlight"> Premium / Luxury Hotels (3–4 Star):</span><ul><li>Hotel Sparsa Kanyakumari – Eco-friendly boutique hotel with sea view rooms and pool</li>
<li>The Seashore Hotel – Stunning sea-facing rooms, just a walk away from major attractions</li>
<li>Annai Resorts & Spa – Tranquil setting with wellness services, ideal for couples and families</li></ul></p>

      <p><span class="highlight">Mid-Range:</span><ul><li> Hotel Sea View – Comfortable rooms with balcony views of the Vivekananda Rock</li> <li>Hotel Temple Citi – Centrally located with modern amenities and excellent service</li></ul></p>
    </div>
    
    <h4>Description:</h4>
    <p>The Hotels offers a range of room options with prices starting from <span class="highlight">₹4500</span> and going up to <span class="highlight">₹11,000</span> per night, excluding taxes and fees.</p>
    
    <h3>Key Tourist Attractions & Activities</h3>
    <ul>
    🔸  Day 1: Sightseeing & Cultural Exploration
Vivekananda Rock Memorial – Reach via ferry, meditate in the peaceful dhyana mandapam

Thiruvalluvar Statue – 133-foot stone sculpture symbolizing Tamil literature

Kanyakumari Bhagavathy Amman Temple – Sacred 3000-year-old temple by the sea

Triveni Sangam – Unique confluence of three oceans

Sunset Point / View Tower – Stunning view of the sun dipping into the sea</ul>

<ul> 🔸 Day 2: Nature & Spirituality
Padmanabhapuram Palace (nearby) – Exquisite 16th-century wooden palace with Kerala-style architecture

Suchindram Temple – Famous for its musical pillars and unique deity (Trimurti in one idol)

Vattakottai Fort – Seaside 18th-century fort with panoramic views

Wax Museum & Gandhi Memorial – Light exploration and photo spots</ul>

    <p>Note: The itinerary can be customized based on your interests and time.</p>  

    <div class="button-container">
      <a href="basic_package.php" class="button">Back to Packages</a>
      <a href="Booking_form.php" class="button">Book Now</a>
    </div>
  </div>

  </script>
</body>
</html>