<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standard Package</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <style>
        /* Increase the font size of the label and center it */
        .carousel-label {
            font-size: 2rem; /* Adjust as needed */
            font-weight: bold;
            text-align: center;
            color: #333;
            white-space: nowrap;
            overflow: hidden;
            display: inline-block;
            max-width: 100%;
        }

        /* Add typing animation */
        .typing {
            width: 0;
            overflow: hidden;
            border-right: 3px solid #000; /* Cursor effect */
            animation: typing 2s steps(30) 1s forwards, blink-caret 0.75s step-end infinite;
        }

        /* Typing animation */
        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        /* Blink the cursor */
        @keyframes blink-caret {
            50% {
                border-color: transparent;
            }
        }

        
.h1{
    text-align: center;
    font-family:"Product Sans";

}



body {
    background-color: black;
    }

.logo{
   
    height:45px;
    aspect-ratio: 16/9;

}

.bg1{
    background-color: black;
}

.bg2{
    background-color:black;
    color:white
}

.cimage{
    height: 300px;
    aspect-ratio: 16/9;
}
    </style>
</head>

<body>
    <div class="bg2">
        <nav class="navbar navbar-expand-lg navbar-dark bg1">
            <div class="container">
                <a class="navbar-brand">
                    <img src="images/your_trip.png" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="homepage.php">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="http://localhost/Project-1%20-%20Copy/homepage/homepage.php#category">Category</a>
                        <a class="nav-link" href="http://localhost/Project-1%20-%20Copy/homepage/homepage.php#blogs">Blogs</a>
                        <a class="nav-link" href="http://localhost/Project-1%20-%20Copy/homepage/homepage.php#about">About Us</a>
                        <span class="nav-link ml-5">|</span>
                        <h3 class="ml-5">🏞️ Standard Package</h3>


                    </div>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6">
                    <h1 style="color:skyblue">Goa</h1> 
                    <p class="mt-5"> Discover the Free-Spirited Charm of Goa <span style='color: #1fedd9'>Beauty of Goa</span>
                    Where golden beaches meet swaying palms, vibrant nightlife blends with soulful heritage, and every sunset is a celebration—Goa is India’s most iconic coastal escape. From the buzzing energy of Baga Beach to the quiet serenity of Palolem, from centuries-old churches in Old Goa to spice plantations and flea markets, this tiny paradise offers the perfect mix of relaxation, culture, and adventure.

Whether you're chasing waves, seeking inner peace, or simply enjoying good vibes with great food, Goa welcomes every traveler with open arms.

</p>
                    <p><span style='color: #1fedd9'> Tailor-Made Goa Tour Packages for Every Kind of Explorer</span> Planning a honeymoon, a group getaway, a solo backpacking trip, or a luxury beach holiday? Our customizable Goa tour packages cater to all moods and occasions.
We handle every detail—boutique stays, airport transfers, curated beach-hopping, water sports, nightlife guides, and local experiences—so you can live the moment, stress-free.

Package Highlights May Include:

Stay at premium beach resorts, heritage homes, or luxury villas

Explore North Goa beaches (Baga, Anjuna, Candolim, Vagator) and South Goa beaches (Palolem, Agonda, Colva)

Visit to Old Goa Churches – Basilica of Bom Jesus & Se Cathedral (UNESCO site)

Sunset cruise on the Mandovi River with music and dance

Thrilling water sports: parasailing, jet-skiing, banana boat rides, scuba diving

Day trips to Dudhsagar Waterfalls, Spice plantations, and Fort Aguada

Experience Goa’s vibrant nightlife: beach clubs, casinos, and silent discos

Relaxing Ayurvedic massages and spa treatments

Optional yoga retreats, island hopping, or heritage walks through Fontainhas

</p>
                    <p><span style='color: #1fedd9'>Why Travel With Us?</span>
                    We don’t just plan holidays—we create epic experiences. With our local connections, curated activities, and personalized service, your Goan escape is as carefree as the sea breeze.

Here’s why travelers love us:

Handpicked stays with the best beach access or nature views

Custom itineraries to match your vibe—party, peace, or pure luxury

Local tour guides and 24/7 on-trip assistance

Transparent pricing with flexible options for every budget

Unique experiences you won’t find in guidebooks

Safe, reliable transport and hygienic stays guaranteed

Whether you're sipping cocktails at a beach shack or dancing under the stars, Goa promises moments you’ll never want to end.</p>
                </div>

                <div class="col-xl-4 ml-5">
                    <h1 class="h1">Tourist Places</h1>

                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img src="https://media2.thrillophilia.com/images/photos/000/115/737/original/1516998283_0_139c88_4f6e83d3_orig.jpg?width=975&height=600" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.planetware.com/wpimages/2020/06/india-goa-top-attractions-dudhsagar-falls.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.planetware.com/wpimages/2020/06/india-goa-top-attractions-mahadev-temple.jpg" class="d-block w-100 cimage" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src="https://cdn.educba.com/academy/wp-content/uploads/2023/02/Tourist-Places-in-Goa-4.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                        
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!-- Label below the carousel -->
                    <div id="carouselLabel" class="carousel-label mt-3">
                        Goa Beach
                    </div>
                </div>
            </div>
            <a class="btn btn-primary ml-3" href="Std pack 1.php">Visit</a>
        </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6">
                    <h1 style="color:skyblue">Manali, Himachal Pradesh</h1> 
                    <p class="mt-5"><span style='color: #1fedd9'>Discover the Magical Allure of Manali, Himachal Pradesh</span>
                   Nestled in the heart of the Himalayas, Manali is where snowy peaks kiss the sky, pine forests whisper ancient tales, and gushing rivers promise thrill and tranquility alike. Whether you're walking through quaint villages, paragliding over Solang Valley, or sipping chai by the fire, Manali offers a dreamlike retreat for honeymooners, adventure junkies, nature lovers, and soul seekers.

From the spiritual calm of ancient temples to the adrenaline of mountain sports, Manali is a perfect blend of peace, play, and pure mountain magic.

</p>
                    <p> <span  style='color: #1fedd9'>Tailor-Made Manali Tour Packages for Every Season and Every Soul</span>
                  Whether you're chasing snowfall in winter, blooming meadows in summer, or the crisp autumn charm of apple orchards, our handcrafted Manali tour packages bring you the best of every season.
We handle it all—comfortable hill-side stays, guided local tours, mountain adventures, and seamless transport—so you can enjoy every breathtaking moment.

Package Highlights May Include:

Stay in cosy mountain resorts, riverside cottages, or luxury hotels with Himalayan views

Visit to Solang Valley for paragliding, ziplining, and snow activities

Scenic drive to Rohtang Pass (seasonal) or Atal Tunnel

Explore the charming Old Manali cafés, art spaces, and live music spots

Visit Hidimba Devi Temple, Vashisht Hot Springs, and Manu Temple

River rafting on the Beas River (seasonal)

Stroll through the Mall Road for shopping and local eats

Day trips to Naggar Castle, Kasol, or Kullu.</p>
                    <p><span style='color: #1fedd9'>Why Choose Us for Your Lakshadweep Getaway?</span>
We don't just plan trips—we deliver mountain memories that last forever. Our local expertise, traveler-first mindset, and thoughtful experiences make every journey to Manali effortless, exciting, and unforgettable.

Why choose us:

Handpicked accommodations with stunning views and great hospitality

Adventure, wellness, honeymoon, and family-friendly packages

Local guides who know the terrain and stories of the hills

Transparent pricing with no hidden charges

24/7 on-ground support for any help during your trip

Custom add-ons: candlelight dinners, spa bookings, or photography sessions

Whether you want to ski down slopes, soak in hot springs, or simply watch the snowfall from your window, Manali is waiting to wrap you in its warmth.

</p>
                </div>

                <div class="col-xl-4 ml-5">
                    <h1 class="h1">Tourist Places</h1>

                    <div id="carouselExampleInterval1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img src="https://www.tripsavvy.com/thmb/zyqX35L3rgFRuVrbGioDKoqPezc=/2121x1414/filters:fill(auto,1)/GettyImages-930881934-5ae56fe48023b90036464e72.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://i.pinimg.com/originals/84/ed/16/84ed165239f3e217d6ffb72a266d15a4.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://thumbs.dreamstime.com/b/manali-popular-hill-station-himachal-pradesh-india-189560087.jpg" class="d-block w-100 cimage" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src="https://imgcld.yatra.com/ytimages/image/upload/v1434116720/Hadimba_Devi_Temple.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                        
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!-- Label below the carousel -->
                    <div id="carouselLabel1" class="carousel-label mt-3">
                        A view of Manali 
                    </div>
                </div>
            </div>
            <a class="btn btn-primary ml-3" href="Std pack 2.php">visit</a>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6">
                    <h1 style="color:skyblue">New Delhi – The Capital of India</h1> 
                    <p class="mt-5"><span style='color: #1fedd9'> Discover the Timeless Spirit of New Delhi – The Capital of India</span>
                    A city where history meets modernity, New Delhi is a captivating blend of ancient monuments, grand boulevards, bustling bazaars, and cosmopolitan culture. From the majestic Red Fort to the serene Lotus Temple, from mouth-watering street food to upscale shopping malls, Delhi invites you to witness India’s legacy, diversity, and heartbeat—all in one place.

Whether you’re tracing the footsteps of emperors, exploring vibrant art scenes, or savoring world-class cuisine, Delhi offers a sensory journey like no other.

</p>
                    <p><span style='color: #1fedd9'>Tailor-Made New Delhi Tour Packages for Every Kind of Traveler</span>
                  Whether you're on a cultural deep dive, a foodie trail, a shopping spree, or a luxury getaway, our customized New Delhi tour packages ensure a rich and immersive experience.
From luxurious stays and guided heritage walks to curated street food tours and personalized shopping experiences—we take care of it all for a seamless and memorable capital city adventure.

Package Highlights May Include:

Visit to UNESCO World Heritage Sites: Red Fort, Humayun’s Tomb, Qutub Minar

Explore India Gate, Rashtrapati Bhavan, and Parliament House

Spiritual experiences at the Lotus Temple, Akshardham, and Jama Masjid

Heritage walks in Old Delhi – Chandni Chowk, Spice Market, and Haveli tours

Indulge in a curated Delhi street food tour – chaat, kebabs, parathas, and more

Shopping at Connaught Place, Sarojini Nagar, Dilli Haat, and designer boutiques

Museum visits: National Museum, Rail Museum, and Gandhi Smriti

Attend cultural performances, light shows, or food festivals (seasonal)

Day trips to Agra (Taj Mahal) or Jaipur for a Golden Triangle experience</p>
                    <p><span style='color: #1fedd9'> Why Travel With Us?</span>
We don’t just help you explore Delhi—we help you feel its pulse. With our insider access, curated experiences, and personalized attention, your time in the capital will be filled with inspiration, wonder, and comfort.

Why travelers choose us:

Premium hotel options and heritage stays

Expert local guides and multilingual support

Personalized itineraries for history buffs, photographers, and families

Safe and reliable transportation with airport/train station pickups

Transparent pricing with no hidden costs

24/7 assistance for total peace of mind

Whether you’re standing beneath ancient domes or sipping masala chai at a modern rooftop café, New Delhi will leave you inspired at every turn.

</p>
                </div>

                <div class="col-xl-4 ml-5">
                    <h1 class="h1">Tourist Places</h1>

                    <div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img src="https://www.tripsavvy.com/thmb/pAlZ4kx0tM9HFLmgkYbqMlfxaok=/2116x1417/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-846359134-5b515328c9e77c003738e40c.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://cdn.getyourguide.com/img/location/533591d4b943b.jpeg/88.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.mistay.in/travel-blog/content/images/2020/07/travel-4813658_1920.jpg" class="d-block w-100 cimage" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src="https://data.agatetravel.com/images/photogallery/2019/delhi-qutub-minar-india.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                        
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!-- Label below the carousel -->
                    <div id="carouselLabel2" class="carousel-label mt-3">
                        Red Fort 
                    </div>
                </div>
            </div>
            <a class="btn btn-primary ml-3" href="Std pack 3.php">visit</a>
        </div>
        
        
    </div>

    
    
    <script>
        const labels = [
            "Goa Beach",
            "Mahadev Temple",
            "Dudhsagar Waterfalls",
            "Tourist Places",
        ];

        const carousel = document.getElementById('carouselExampleInterval');
        const labelElement = document.getElementById('carouselLabel');

        function typeLabel(text, element) {
            let i = 0;
            element.innerHTML = ''; // Clear any previous label
            const intervalId = setInterval(() => {
                element.innerHTML += text.charAt(i);
                i++;
                if (i === text.length) {
                    clearInterval(intervalId); // Stop the typing effect
                }
            }, 100); // Adjust typing speed by changing the interval time
        }

        $(carousel).on('slide.bs.carousel', function (e) {
            const nextIndex = $(e.relatedTarget).index();
            const labelText = labels[nextIndex];
            typeLabel(labelText, labelElement);
        });

        // Initial typing effect for the first label
        typeLabel(labels[0], labelElement);
    </script>

<script>
    const labels1 = [
        "A view of Manali",
        "old Manali bridge",
        "Hadimba Temple",
        "Solang Valley",
    ];

    const carousel1 = document.getElementById('carouselExampleInterval1');
    const labelElement1 = document.getElementById('carouselLabel1');

    function typeLabel1(text, element) {
        let i = 0;
        element.innerHTML = '';
        const intervalId = setInterval(() => {
            element.innerHTML += text.charAt(i);
            i++;
            if (i === text.length) {
                clearInterval(intervalId);
            }
        }, 100);
    }

    $(carousel1).on('slide.bs.carousel', function (e) {
        const nextIndex = $(e.relatedTarget).index();
        const labelText = labels1[nextIndex];
        typeLabel1(labelText, labelElement1);
    });

    typeLabel1(labels1[0], labelElement1);
</script>

<script>
    const labels2 = [
        "Red Fort",
        "Taj Mahal",
        "India Gate",
        "Qutub Minar",
    ];

    const carousel2 = document.getElementById('carouselExampleInterval2');
    const labelElement2 = document.getElementById('carouselLabel2');

    function typeLabel2(text, element) {
        let i = 0;
        element.innerHTML = '';
        const intervalId = setInterval(() => {
            element.innerHTML += text.charAt(i);
            i++;
            if (i === text.length) {
                clearInterval(intervalId);
            }
        }, 100);
    }

    $(carousel2).on('slide.bs.carousel', function (e) {
        const nextIndex = $(e.relatedTarget).index();
        const labelText = labels2[nextIndex];
        typeLabel2(labelText, labelElement2);
    });

    typeLabel2(labels2[0], labelElement2);
</script>

</body>
</html