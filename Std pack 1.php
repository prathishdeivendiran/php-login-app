<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Goa Tour Package </title>
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
    <h1>Goa Tour Package</h1>
    <p>Famous for its golden beaches, Portuguese heritage, vibrant nightlife, and laid-back tropical vibe, Goa is India’s ultimate beach escape. This 7-day premium tour offers a complete experience—from luxury and relaxation to adventure and culture.

</p>
    
    <p><strong>Package Starts From:</strong> <span class="highlight"><ul><li>Luxury (5★): ₹65,000 – ₹95,000</li><li>Premium (4★): ₹48,000 – ₹65,000</li></ul> </span><p>Rates vary depending on travel season, hotel choice, and add-ons.
      
    <p><strong>Duration:</strong> 7 Days, 6 Nights</p>
</p><br>
    <strong>Includes:</strong> 5-star accommodation, private sightseeing, Luxurious accommodations, heritage guide, airport pickup & more.</p>

    <div class="image-collage">
      <img src="https://media2.thrillophilia.com/images/photos/000/115/737/original/1516998283_0_139c88_4f6e83d3_orig.jpg?width=975&height=600" alt="">
      <img src="https://www.planetware.com/wpimages/2020/06/india-goa-top-attractions-dudhsagar-falls.jpg" alt="">
      <img src="https://www.planetware.com/wpimages/2020/06/india-goa-top-attractions-mahadev-temple.jpg" alt="">
      <img src="https://cdn.educba.com/academy/wp-content/uploads/2023/02/Tourist-Places-in-Goa-4.jpg" alt="">
      <img src="https://www.trawell.in/admin/images/upload/121905685Mangueshi_Temple_Main.jpg" alt="">
    </div>

     <h3>7-Day Suggested Itinerary</h3>
    <ul>🔸 Day 1: Arrival & Relaxation in North Goa
Check-in at your resort

Evening beach walk at Candolim or Calangute

Sunset at Fort Aguada

Dinner at a beachfront shack or luxury hotel restaurant</ul>
<ul>🔸 Day 2: North Goa Sightseeing
Explore Chapora Fort, Vagator Beach, and Anjuna Beach

Visit Arpora Saturday Night Market (if it’s a weekend)

Water sports at Baga Beach (parasailing, jet ski, banana boat)

Enjoy live music or DJ night at Thalassa, Tito’s, or SinQ</ul>
<ul>🔸 Day 3: Culture & Heritage
Visit Old Goa Churches (Basilica of Bom Jesus, Sé Cathedral – UNESCO sites)

Fontainhas Latin Quarter walking tour

Spice plantation visit with lunch

River cruise on Mandovi River (sunset/dinner cruise optional)</ul>
<ul>🔸 Day 4: Transfer to South Goa & Leisure
Scenic drive to South Goa

Check-in to luxury resort

Relax at Colva or Benaulim Beach

Optional spa or Ayurvedic massage at the resort</ul>
<ul>🔸 Day 5: South Goa Exploration
Visit Palolem Beach, Butterfly Beach, and Agonda Beach

Cabo de Rama Fort (hidden gem with sea cliffs)

Sunset at Betalbatim Beach

Fine dining at a romantic sea-facing restaurant</ul>
<ul>🔸 Day 6: Island Hopping or Adventure Day
Choose from:

Dudhsagar Waterfalls trip & jeep safari

Grand Island snorkeling tour & dolphin spotting

South Goa temple trail (Mangueshi, Shanta Durga)

Evening cultural show or private beach dinner on request</ul>
<ul>🔸 Day 7: Leisure & Departure
Morning yoga or beach walk

Breakfast and check-out

Airport transfer with fond memories 
    </ul>

    
    <div class="resort-highlight">
      <h1>Premium Hotels & Resorts</h1>
      <p><span class="highlight">North Goa (3 Nights) – For Beaches & Nightlife</span> <ul><li>Taj Holiday Village Resort & Spa, Candolim – Beachfront cottages, lush gardens, and world-class service</li>
      <li>W Goa, Vagator – Trendy, luxurious, perfect for nightlife and young travelers</li>
      <li>Acron Waterfront Resort, Baga – Stylish and close to clubs, Baga beach & restaurants</li>
      </ul>
      <span class="highlight">South Goa (3 Nights) – For Relaxation & Scenic Beauty</span> <ul><li>The Leela Goa, Mobor – Private beach access, golf course, spa, and lagoon-style rooms</li>
      <li>Taj Exotica Resort & Spa, Benaulim – Colonial-style villa resort with tranquil sea views</li>
      <li>Alila Diwa Goa, Majorda – Upscale, quiet, and surrounded by rice paddies</li>
      </ul>
</p>
    </div>
    
    <h4>Description:</h4>
    <p>Premium Hotels & Resorts offers a range of room options with prices starting from <span class="highlight">₹9000</span> and going up to <span class="highlight">₹13,872</span> per night, excluding taxes and fees.</p>
    
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
      <a href="standard_package.php" class="button">Back to Packages</a>
      <a href="Booking_form.php" class="button">Book Now</a>
    </div>
  </div>

  </script>
</body>
</html>