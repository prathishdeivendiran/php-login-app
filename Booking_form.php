<!-- Booking Form -->
<div id="booking" style="margin-top: 40px;">
      <h2 style="text-align: center; color: #333;">Booking Form</h2>
      <form action="send_booking.php" method="post" style="max-width: 600px; margin: 0 auto;">
        <label style="display: block; margin-bottom: 8px; font-weight: bold;">Full Name:</label>
        <input type="text" name="name" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">




        <label style="display: block; margin-bottom: 8px; font-weight: bold;">Email:</label>
        <input type="email" name="email" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">

        <label style="display: block; margin-bottom: 8px; font-weight: bold;">Phone Number:</label>
        <input type="tel" name="phone" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">

        <!-- Package Selection -->
        <label style="display: block; margin-bottom: 8px; font-weight: bold;">Select Package:</label>
            <select name="package_type" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">
            <option value="">-- Select a Package --</option>
            <option value="Basic">Basic</option>
            <option value="Standared">Standared</option>
            <option value="Premium packages">Premium</option>
            </select>

        
        <!-- Package Selection -->
            <label style="display: block; margin-bottom: 8px; font-weight: bold;">Select Place:</label>
            <select name="place" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">
            <option value="">-- Select a place --</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Chennai">Chennai</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Goa">Goa</option>
            <option value="Manali, Himachal Pradesh">Manali, Himachal Pradesh</option>
            <option value="New Delhi">New Delhi</option>
            <option value="Thanjavur">Thanjavur</option>
            <option value="Kanyakumari">Kanyakumari</option>
            <option value="Madurai">Madurai</option>
            </select>

        <label style="display: block; margin-bottom: 8px; font-weight: bold;">Travel starting Date:</label>
        <input type="date" name="date" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">

        <label style="display: block; margin-bottom: 8px; font-weight: bold;">Travel ending Date:</label>
        <input type="date" name="date" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">
        
        <label style="display: block; margin-bottom: 8px; font-weight: bold;">Number of People:</label>
        <input type="number" name="people" min="1" required style="width: 100%; padding: 10px; margin-bottom: 20px; border-radius: 5px; border: 1px solid #ccc;">

        <div style="text-align: center;">
          <button type="submit" style="background-color: #4CAF50; color: white; padding: 12px 25px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">
            Submit Booking
          </button>

          <button type="submit" style="background-color: #4CAF50; color: white; padding: 12px 25px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">
            <a href="homepage.php" style="color: white; text-decoration: none;">Home</a>
          </button>
        
        </div>
      </form>
    </div>