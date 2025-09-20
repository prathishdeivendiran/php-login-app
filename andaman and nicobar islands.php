<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Andaman And Nicobar Islands Premium Tour Package </title>
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
    <h1>Luxury Andaman And Nicobar Islands Tour Package</h1>
    <p>Immerse yourself in the rich heritage of Andaman And Nicobar Islands with our exclusive 5 to 7-day luxury tour. Best Time to Visit: October to May offers pleasant weather suitable for beach activities and water sports.</p>
    
    <p><strong>Package Starts From:</strong> <span class="highlight">₹31,300 per person</span><br>
    <strong>Includes:</strong> 5-star accommodation, private sightseeing, Luxurious accommodations at Sea Shell, heritage guide, airport pickup & more.</p>

    <div class="image-collage">
      <img src="https://wallpapercave.com/wp/wp5296535.jpg" alt="">
      <img src="https://www.indiatravelblog.net/wp-content/uploads/2019/09/ishan-das-RdPEdHdL_BU-unsplash.jpg" alt="">
      <img src="https://static.toiimg.com/photo/37251529/Andaman-and-Nicobar-Islands-Travel-Guide.jpg?width=748&resize=4G" alt="">
      <img src="https://www.transindiatravels.com/wp-content/uploads/radhanagar-beach-3.jpg" alt="">
      <img src="https://media-cdn.tripadvisor.com/media/photo-s/1b/15/f9/8c/caption.jpg" alt="">
    </div>

    
    <div class="resort-highlight">
      <h1>Premium Hotels & Resorts</h1>
      <p><span class="highlight">Sea Shell (Port Blair & Neil Island)</span> Offers luxurious accommodations with modern amenities and beach access. Marine Hill Portblair, Port Blair, Andaman and Nicobar Islands, India, 744104
</p>
    </div>
    
    <h4>Description:</h4>
    <p>Sea Shell (Port Blair & Neil Island) offers a range of room options with prices starting from <span class="highlight">₹7,885</span> and going up to <span class="highlight">₹13,872</span> per night, excluding taxes and fees.</p>
    
    <h3>Resort Amenities:</h3>
    <ul>
      <li>Private beach access with stunning ocean views</li>
      <li>Luxurious sea-facing rooms and villas</li>
      <li>Multiple swimming pools including an infinity pool</li>
      <li>World-class spa and wellness center</li>
      <li>Multiple dining options featuring local and international cuisine</li>
      <li>Water sports and recreational activities</li>
    </ul>

    <div class="image-collage">
      <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/20622545.jpg?k=f18fe2775ec9a484352524866792fea90d830a24f6e2bcb3e17c375d52f8d002&o=&hp=1" alt="Resort Exterior">
      <img src="https://b.zmtcdn.com/data/pictures/chains/6/65696/2f1f6ffe1b1dd3728841600a3e799455.jpg" alt="Resort Pool Area">
      <img src="https://juggler.makemytrip.com/juggler/stream/key/8a8d8474-0cef-459f-b330-a25647412852/thumbnails/1080_1920.jpg" alt="Resort Beach View">
      <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/143640716.jpg?k=4ad7787224a4354df2662cd17abb8afbd41e725ea2d72c2f29c54093852e0281&o=&hp=1" alt="Luxury Room">
      <img src="https://cdn0.weddingwire.in/vendor/6967/3_2/960/jpg/a-wonderful-place.jpeg" alt="Resort Wedding Venue">
    </div>

    <div class="button-container">
      <a href="premium_packages.php" class="button">Back to Packages</a>
      <a href="Booking_form.php" class="button">Book Now</a>
    </div>
  </div>

  </script>
</body>
</html>