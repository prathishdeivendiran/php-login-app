<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Package</title>
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
                        <h3 class="ml-5">👑 Premimum Packages</h3>


                    </div>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6">
                    <h1 style="color:skyblue">Andaman and Nicobar Islands</h1> 
                    <p class="mt-5">Discover the Enchanting <span style='color: #1fedd9'>Beauty of Andaman and Nicobar Islands</span>
                    Escape to a tropical paradise where crystal-clear waters meet pristine white sands and lush green landscapes. The Andaman and Nicobar Islands offer an unforgettable experience for nature lovers, adventure seekers, and those simply looking to unwind. From the serene Radhanagar Beach to the vibrant coral reefs of Havelock Island, this destination promises relaxation, exploration, and awe-inspiring beauty.</p>
                    <p><span style='color: #1fedd9'>Tailor-Made Tour Packages for Every Traveler</span> Whether you're planning a romantic honeymoon, a family vacation, or a solo adventure, our customized Andaman and Nicobar tour packages cater to all your needs. We take care of everything—from luxurious accommodations and island hopping to scuba diving, snorkeling, and guided nature trails—so you can enjoy a hassle-free holiday.</p>
                    <p><span style='color: #1fedd9'>Why Travel With Us?</span>
                    We’re not just about travel; we’re about creating moments that last a lifetime. Our trusted service, transparent pricing, and 24/7 customer support make us your perfect travel partner. With our local expertise and curated itineraries, we bring you the best of Andaman and Nicobar—hidden gems, cultural insights, and unforgettable adventures. Book with us and turn your dream island escape into reality!</p>
                </div>

                <div class="col-xl-4 ml-5">
                    <h1 class="h1">Tourist Places</h1>

                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/3c/97/3e/view-from-the-sea.jpg?w=900&h=-1&s=1" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.venturatravels.in/wp-content/uploads/2021/03/port-blair-700x430.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://destinationtoplan.com/contents/uploads/2021/02/Havelock-Island.jpeg" class="d-block w-100 cimage" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.andamanisland.in/uploads/andamanislands/attachchments/main/602e33fee563b117_neil-island-3.png" class="d-block w-100 cimage" alt="...">
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
                        Rose Island
                    </div>
                </div>
            </div>
            <a class="btn btn-primary ml-3" href="andaman and nicobar islands.php">Visit</a>
        </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6">
                    <h1 style="color:skyblue">Lakshadweep</h1> 
                    <p class="mt-5"><span style='color: #1fedd9'>Uncover the Untouched Paradise of Lakshadweep </span>
                    Step into a world of serenity and untouched beauty with the exotic islands of Lakshadweep. Surrounded by turquoise lagoons, coral atolls, and powdery white beaches, Lakshadweep offers a peaceful escape from the hustle and bustle of daily life. Whether you’re relaxing on the beach, watching the sunset, or exploring the underwater wonders, every moment in Lakshadweep is pure magic..</p>
                    <p> <span  style='color: #1fedd9'>Premium Lakshadweep Tour Packages Starting from ₹85,000</span>
                    Experience luxury like never before with our hand-curated Lakshadweep tour packages starting at just ₹85,000 per person. Enjoy 5-star beachfront stays, private island transfers, gourmet dining, and thrilling water activities such as scuba diving, glass-bottom boating, kayaking, and guided lagoon tours. Our 5 to 7-day itineraries are designed to provide you with the perfect balance of adventure, comfort, and relaxation, ideal for couples, honeymooners, and discerning travelers.</p>
                    <p><span style='color: #1fedd9'>Why Choose Us for Your Lakshadweep Getaway?</span>
We offer more than just travel—we deliver unforgettable experiences. With personalized planning, round-the-clock customer support, and expert local guides, we ensure every detail of your Lakshadweep trip is flawless. Our premium service guarantees comfort, convenience, and complete peace of mind, making your island vacation as smooth as the ocean breeze. Book your luxurious escape now and let us turn your dream holiday into reality.

</p>
                </div>

                <div class="col-xl-4 ml-5">
                    <h1 class="h1">Tourist Places</h1>

                    <div id="carouselExampleInterval1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img src="https://www.luxurytrailsofindia.com/wp-content/uploads/2016/10/Agatti-Island-Lakshadeep-Kerala-India.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.sreestours.com/wp-content/uploads/2016/06/lakshadweep-tour.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.connectingtraveller.com/images/localtip/1653554355images%20(27).jpeg" class="d-block w-100 cimage" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.luxurytrailsofindia.com/wp-content/uploads/2016/10/Minicoy-Island.jpg" class="d-block w-100 cimage" alt="...">
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
                        Agatti Island 
                    </div>
                </div>
            </div>
            <a class="btn btn-primary ml-3" href="lakshadweep.php">visit</a>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6">
                    <h1 style="color:skyblue">Chennai</h1> 
                    <p class="mt-5"><span style='color: #1fedd9'>Experience the Heritage and Charm of Chennai</span>
                    Immerse yourself in the vibrant culture, rich history, and coastal beauty of Chennai, the gateway to South India. From majestic temples like Kapaleeshwarar and architectural wonders of Mahabalipuram to the serene shores of Marina Beach and the bustling local markets, Chennai offers a blend of tradition and modernity that captivates every traveler. Discover centuries-old stories, classical music, and South Indian flavors in one unforgettable journey.</p>
                    <p><span style='color: #1fedd9'>Luxury Chennai Tour Packages Starting from ₹82,000</span>
                    Indulge in a premium travel experience with our Chennai tour packages, starting at ₹82,000 per person. Enjoy a 5 to 7-day curated itinerary featuring stays at luxury hotels, chauffeur-driven sightseeing, private guided heritage walks, and culinary experiences at award-winning restaurants. Explore historic temples, colonial landmarks, art galleries, and shopping districts, all while relaxing in comfort and style.</p>
                    <p><span style='color: #1fedd9'>Why Travel Chennai With Us?</span>
Our Chennai experiences are designed for travelers who seek depth, comfort, and cultural immersion. With personalized service, curated stays, and exclusive access to hidden gems, we ensure every moment of your trip is well spent. From airport pickup to farewell dinner, we take care of everything—so you can explore the best of Chennai without a worry. Book now and discover a side of Chennai you never imagined.

</p>
                </div>

                <div class="col-xl-4 ml-5">
                    <h1 class="h1">Tourist Places</h1>

                    <div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img src="https://img.staticmb.com/mbcontent/images/uploads/2022/9/Marina-Beach-Aerial-view.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://hblimg.mmtcdn.com/content/hubble/img/chennai/mmt/activities/m_Mylapore_2_l_360_640.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.tamilagam.in/img/fort-st-george-museum.jpg" class="d-block w-100 cimage" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src="https://4.bp.blogspot.com/-AtLJQsxESt4/Wb--h8YnTZI/AAAAAAAABdE/wgBb5Z6-cxgiv_WsNO_mK6y9WGS4Yy08QCLcBGAs/s1600/20170917_161759.jpg" class="d-block w-100 cimage" alt="...">
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
                        Marina Beach 
                    </div>
                </div>
            </div>
            <a class="btn btn-primary ml-3" href="chennai.php">visit</a>
        </div>
        
        
    </div>

    
    
    <script>
        const labels = [
            "Rose Island",
            "Port Blair",
            "Havelock-Island",
            "Neil Island",
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
        "Agatti Island",
        "Kavaratti Island",
        "Kalpeni Island",
        "Minicoy Island",
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
        "Marina Beach",
        "Mylapore",
        "Fort St. George Museum",
        "Arignar Anna Zoological Park (Vandalur Zoo)",
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