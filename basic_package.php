<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Package</title>
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
                        <h3 class="ml-5">🌄 Basic Package</h3>


                    </div>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6">
                    <h1 style="color:skyblue">Thanjavur</h1> 
                    <p class="mt-5">Discover the Timeless Majesty of Thanjavur<span style='color: #1fedd9'>Step into a land where ancient heritage meets living tradition.</span>
                   Thanjavur, often called the Cultural Capital of Tamil Nadu, is a treasure trove of classical art, majestic temples, and age-old craftsmanship. Walk through the historic corridors of the Brihadeeswarar Temple, a UNESCO World Heritage Site, and experience the legacy of the Chola dynasty that continues to echo through stone, bronze, and melody.
Whether you’re an art lover, a history buff, a spiritual seeker, or a curious traveler, Thanjavur offers a deep and soulful journey into South India’s glorious past and vibrant present.</p>
                    <p><span style='color: #1fedd9'>Tailor-Made Thanjavur Tour Packages for Every Traveler</span> Whether you're exploring solo, traveling with family, or diving into a heritage honeymoon, our curated Thanjavur tour packages are designed to match your pace and passion.
We take care of everything—from heritage hotel stays and guided temple tours to classical music experiences, local food trails, and artisan workshops—ensuring your experience is as rich as the land itself.</p>
                    <p><span style='color: #1fedd9'>Why Travel With Us?</span>
                    We go beyond travel—we craft experiences rooted in authenticity and elegance.
Here’s why travelers trust us for their Thanjavur journey:

Heritage-Focused Itineraries crafted by local experts

Comfortable, handpicked stays in heritage hotels and guest houses

Knowledgeable guides who bring history to life

Transparent pricing with no hidden charges

24/7 on-ground support for a worry-free trip

Opportunities for immersive cultural experiences you won't find anywhere else

Whether it’s tracing temple architecture, discovering royal secrets, or sipping filter coffee by a lotus pond, Thanjavur invites you to slow down and soak in its timeless charm.
Book your journey today—and let the past embrace your present.
</p>
                </div>

                <div class="col-xl-4 ml-5">
                    <h1 class="h1">Tourist Places</h1>

                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img src="https://letusdiscoverindia.com/wp-content/uploads/2023/03/pexels-photo-5124396.jpeg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.laurewanders.com/wp-content/uploads/2022/12/Maratha-Palace-Thanjavur-00007.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.trawell.in/admin/images/upload/921956301Thanjavur_Palace_Main.jpg" class="d-block w-100 cimage" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.quirkybyte.com/wp-content/uploads/2019/12/Places-to-Visit-in-Thanjavur.jpg" class="d-block w-100 cimage" alt="...">
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
                        Thanjavur Temple
                    </div>
                </div>
            </div>
            <a class="btn btn-primary ml-3" href="Basic pack 1.php">Visit</a>
        </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6">
                    <h1 style="color:skyblue">Kanyakumari</h1> 
                    <p class="mt-5"><span style='color: #1fedd9'> Discover the Timeless Majesty of Thanjavur</span>
                    Step into a land where ancient heritage meets living tradition. Thanjavur, often called the Cultural Capital of Tamil Nadu, is a treasure trove of classical art, majestic temples, and age-old craftsmanship. Walk through the historic corridors of the Brihadeeswarar Temple, a UNESCO World Heritage Site, and experience the legacy of the Chola dynasty that continues to echo through stone, bronze, and melody.

Whether you’re an art lover, a history buff, a spiritual seeker, or a curious traveler, Thanjavur offers a deep and soulful journey into South India’s glorious past and vibrant present.

</p>
                    <p> <span  style='color: #1fedd9'> Tailor-Made Thanjavur Tour Packages for Every Traveler</span>
                    Whether you're exploring solo, traveling with family, or diving into a heritage honeymoon, our curated Thanjavur tour packages are designed to match your pace and passion.
We take care of everything—from heritage hotel stays and guided temple tours to classical music experiences, local food trails, and artisan workshops—ensuring your experience is as rich as the land itself.

Package Highlights May Include:

Guided tours of UNESCO-listed Brihadeeswarar Temple

Visits to the Royal Palace and Art Gallery

Explore the making of Thanjavur paintings and bronze idols

Attend a live Carnatic music performance or Bharatanatyam recital

Traditional South Indian cooking sessions

Excursions to nearby heritage towns like Kumbakonam or Darasuram.</p>
                    <p><span style='color: #1fedd9'>Why Travel With Us?</span>
We go beyond travel—we craft experiences rooted in authenticity and elegance.
Here’s why travelers trust us for their Thanjavur journey:

Heritage-Focused Itineraries crafted by local experts

Comfortable, handpicked stays in heritage hotels and guest houses

Knowledgeable guides who bring history to life

Transparent pricing with no hidden charges

24/7 on-ground support for a worry-free trip

Opportunities for immersive cultural experiences you won't find anywhere else

Whether it’s tracing temple architecture, discovering royal secrets, or sipping filter coffee by a lotus pond, Thanjavur invites you to slow down and soak in its timeless charm.
Book your journey today—and let the past embrace your present.

</p>
                </div>

                <div class="col-xl-4 ml-5">
                    <h1 class="h1">Tourist Places</h1>

                    <div id="carouselExampleInterval1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img src="https://www.tusktravel.com/blog/wp-content/uploads/2021/01/Kanyakumari-Temple.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://images.ixigo.com/image/upload/t_thumb,f_auto/vivekananda-rock-memorial-images-photos-512b1062e4b0695acbefd9bf.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://imgcld.yatra.com/ytimages/image/upload/v1481614632/Kanyakumari_Kanyakumari_Beach.jpg" class="d-block w-100 cimage" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src="https://www.treebo.com/blog/wp-content/uploads/2020/01/Bharat-Mata-Temple.jpg" class="d-block w-100 cimage" alt="...">
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
                        Vivekananda Rock Memorial 
                    </div>
                </div>
            </div>
            <a class="btn btn-primary ml-3" href="Basic pack 2.php">visit</a>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6">
                    <h1 style="color:skyblue">Madurai</h1> 
                    <p class="mt-5"><span style='color: #1fedd9'>Discover the Sacred Soul of Madurai</span>
                   Welcome to Madurai, the Athens of the East, where ancient temples, vibrant traditions, and age-old stories come together in a spectacular display of South Indian heritage. At the heart of this city stands the awe-inspiring Meenakshi Amman Temple, a living monument to devotion and Dravidian architecture that has captivated hearts for centuries.

From spiritual pilgrims to culture enthusiasts and curious wanderers, Madurai offers a captivating blend of history, art, food, and faith—all wrapped in a warm, welcoming spirit.

</p>
                    <p><span style='color: #1fedd9'> Tailor-Made Madurai Tour Packages for Every Kind of Traveler</span>
                    Tailor-Made Madurai Tour Packages for Every Kind of Traveler
Whether you're seeking divine connection, cultural richness, or an authentic taste of Tamil life, our customized Madurai tour packages are designed just for you.
We arrange every detail—from your stay in heritage hotels to private temple tours, guided cultural walks, and delicious South Indian culinary experiences.

Package Highlights May Include:

Guided visit to the magnificent Meenakshi Amman Temple (with special darshan access)

Explore the Thirumalai Nayakkar Palace, an Indo-Saracenic architectural marvel

Visit the Gandhi Memorial Museum for a dose of modern history

Traditional puja experiences or spiritual rituals

Stroll through the buzzing Puthu Mandapam Bazaar and flower markets

Attend a live Bharatanatyam dance or classical music performance

Savor local delicacies like Jigarthanda, Murugan Idli, and banana leaf meals</p>
                    <p><span style='color: #1fedd9'>Why Travel With Us?</span>
We believe in turning travel into soulful storytelling. With our in-depth local knowledge, trusted service, and cultural sensitivity, your journey through Madurai becomes a once-in-a-lifetime experience.

What sets us apart:

Heritage-focused, immersive itineraries

Stays in handpicked hotels with cultural charm

Multilingual expert guides for history and temple tours

Curated food experiences and artisan meet-ups

Transparent pricing and 24/7 customer care

Custom options for pilgrims, photographers, solo travelers, and families

Whether you’re chanting in ancient corridors or sipping filter coffee in a quiet courtyard, Madurai will awaken your senses and spirit.

</p>
                </div>

                <div class="col-xl-4 ml-5">
                    <h1 class="h1">Tourist Places</h1>

                    <div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="3000">
                                <img src="https://blogs.revv.co.in/blogs/wp-content/uploads/2020/05/meenakshi-temple-in-Madurai.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://travelogyindia.b-cdn.net/blog/wp-content/uploads/2017/03/Thirumalai-Nayakkar-Palace.jpg" class="d-block w-100 cimage" alt="...">
                            </div>
                            
                            <div class="carousel-item" data-interval="3000">
                                <img src="https://images.saymedia-content.com/.image/t_share/MTc1MTE2NzcwNDM1OTMzMjc5/top-rated-tourist-attractions-in-madurai.jpg" class="d-block w-100 cimage" alt="...">
                            </div>

                            <div class="carousel-item" data-interval="3000">
                                <img src="https://2.bp.blogspot.com/-lOca_mfoKZw/T3qUTwh6yKI/AAAAAAAAF-U/JGU2SynJH3A/s1600/An_aerial_view_of_Madurai_city_from_atop_of_Meenakshi_Amman_temple.jpgg" class="d-block w-100 cimage" alt="...">
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
                        Madurai Meenakshi Temple
                    </div>
                </div>
            </div>
            <a class="btn btn-primary ml-3" href="Basic pack 3.php">visit</a>
        </div>
        
        
    </div>

    
    
    <script>
        const labels = [
            "Thanjavur Temple",
            "Thanjavur Palace",
            "Thanjavur Art Gallery",
            "Thanjavur Big Temple",
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
        "Vivekananda Rock Memorial",
        "A View of Kanyakumari",
        "Thiruvalluvar Statue",
        "Bharat Mata Temple",
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
        "Madurai Meenakshi Temple",
        "Thirumalai Nayakkar Palace",
        "Vandiyur Mariamman Teppakulam",
        "A view of Madurai",
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