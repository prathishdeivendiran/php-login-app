<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your Trip Homepage</title>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- swiper css link -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- custom css file link -->
        <link rel="stylesheet" href="style.css">

        <!-- animate.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <body>

        <!-- header section start -->
        <header class="header">
           <img src="images/your_trip.png" alt="" width="50px" height="50px">
            <a href="" class="logo"> Your trip </a>

            <nav class="navbar">
                <div id="nav-close" class="fas fa-times"></div>
                <a href="#home">Home</a>
                <a href="#category">Category</a>
                <a href="#packages">Packages</a>
                <a href="#services">Services</a>     
                <a href="#review">Review</a>
                <a href="#blogs">Blogs</a>
                <a href="#about">About</a>
            </nav>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="user.php" class="fas fa-user"></a>
                <div id="search-btn" class="fas fa-search"></div>
            </div>
        </header>
         <!-- header section ends -->

         <!-- search form -->
         <div class="search-form">
            <form action="">
            <input type="text" id="searchBar" placeholder="Search here...">
            <button type="submit" id="search-btn" style="color: green !important; height:50px; width:50px; border-radius: 5px;"><i class="fas fa-search"></i></button>
            <button type="submit" id="close-search"  style="color: green !important; height:40px; width:40px; border-radius: 5px" ><i class="fa fa-times-circle" aria-hidden="true"></i></button>
            </form>
         </div>
         <!-- search form ends -->

         <!-- home section starts-->
         <section class="home" id="home">
                <div class="swiper home-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box" style="background: url(images/image\ 6.jpg) no-repeat;">
                                <div class="content">
                                    <span>Never Stop</span>
                                    <h3>Exploring the world</h3>
                                    <p>Welcome TO Our Page</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box second" style="background: url(images/image\ 2.jpg) no-repeat;">
                                <div class="content">
                                    <span>Ride In Your Own Way</span>
                                    <h3>Around the world</h3>
                                    <p>Enjoy The Ride</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box" style="background: url(images/image\ 3.jpg) no-repeat;">
                                <div class="content">
                                    <span>Make Every Moment </span>
                                    <h3>Beatuiful</h3>
                                    <p>With Your Special One</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
         </section>
         <!--home section ends-->

         <!--category section starts-->
         <section class="category" id="category">
                <h1 class="heading animate__animated animate__fadeInDown">Travel Categories</h1>
                
                <div class="box-container">
                    <div class="box animate__animated animate__zoomIn">
                        <div class="image">
                            <i class="fas fa-mountain category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>Adventure</h3>
                            <p>Thrilling experiences for adrenaline seekers</p>
                        </div>
                    </div>
                    
                    <div class="box animate__animated animate__zoomIn animate__delay-1s">
                        <div class="image">
                            <i class="fas fa-umbrella-beach category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>Beach</h3>
                            <p>Relaxing getaways by the sea</p>
                        </div>
                    </div>
                    
                    <div class="box animate__animated animate__zoomIn animate__delay-2s">
                        <div class="image">
                            <i class="fas fa-city category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>City Tours</h3>
                            <p>Explore vibrant urban destinations</p>
                        </div>
                    </div>
                    
                    <div class="box animate__animated animate__zoomIn">
                        <div class="image">
                            <i class="fas fa-heart category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>Romantic</h3>
                            <p>Perfect trips for couples</p>
                        </div>
                    </div>
                    
                    <div class="box animate__animated animate__zoomIn animate__delay-1s">
                        <div class="image">
                            <i class="fas fa-hiking category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>Trekking</h3>
                            <p>Explore nature's wonders on foot</p>
                        </div>
                    </div>
                    
                    <div class="box animate__animated animate__zoomIn animate__delay-2s">
                        <div class="image">
                            <i class="fas fa-monument category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>Heritage</h3>
                            <p>Discover historical landmarks</p>
                        </div>
                    </div>
                </div>
         </section>
         <!--category section ends-->

         <!--Packages section starts-->
         <section class="packages" id="packages">

                <h1 class="heading">Our Packages</h1>

                <div class="box-container">

                    <div class="box">
                        <div class="image">
                            <img src="https://img.freepik.com/premium-vector/illustration-person-going-holiday-flat-minimalist-design-concept-travel-lifestyle_1140815-198.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>🌿 Custom Package</h3>
                            <p class="packages-sub-heading">Design Your Own Journey</p>                 
                            <p>Choose your destinations, travel dates, and experiences across Tamil Nadu—</p>
                            <p>crafted entirely around your preferences.</p>
                            <p>Ideal for solo travelers, families, or unique group needs.</p>                
                            <a href="custom_package.php" class="btn">Book Now</a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="https://img.freepik.com/free-vector/flat-design-travel-background_23-2149401275.jpg?semt=ais_incoming&w=740&q=80" alt="">
                        </div>
                        <div class="content">
                            <h3>🌄 Basic Package</h3>
                            <p class="packages-sub-heading">Essential Tamil Nadu Getaway</p>                 
                            <p>A budget-friendly escape covering key highlights like</p>
                            <p> Chennai, Mahabalipuram, and Pondicherry with</p>
                            <p>comfortable stays and guided local tours.</p>                
                            <a href="basic_package.php" class="btn">Book Now</a>
                        </div>
                    </div>


                    <div class="box">
                        <div class="image">
                            <img src="https://img.freepik.com/free-vector/hand-drawn-sustainable-travel-illustration_52683-148456.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>🏞️ Standard Package</h3>
                            <p class="packages-sub-heading">Culture & Nature Combined</p>                 
                            <p>Explore temple towns like Madurai, heritage sites in Thanjavur,</p>
                            <p>and scenic hill stations like Kodaikanal—</p>
                            <p>perfect for a balanced Tamil Nadu experience.</p>                
                            <a href="standard_package.php" class="btn">Book Now</a>
                        </div>
                    </div>

                    
                    <div class="box">
                        <div class="image">
                            <img src="https://img.freepik.com/premium-vector/travel-passport-concept-illustration_114360-26313.jpg?semt=ais_incoming&w=740&q=80" alt="">
                        </div>
                        <div class="content">
                            <h3>🏖️ Premium Package</h3>
                            <p class="packages-sub-heading">Luxury Tamil Nadu Experience</p>                 
                            <p>Travel in style with handpicked resorts, chauffeur-driven vehicles</p>
                            <p> exclusive access to hidden gems, and</p>
                            <p>curated cultural experiences across Tamil Nadu.</p>                
                            <a href="premium_packages.php" class="btn">Book Now</a>
                        </div>
                    </div>
                </div>
         </section>
         <!--Packages section ends-->

         <!--Services section starts-->
         <section class="services" id="services">
                <h1 class="heading"> What We Offering </h1>
                <div class="box-container">
                    <div class="box">
                        <img src="images/image 15.jpg" alt="">
                        <h3>Complete Guide</h3>
                        
                        <div class='box1'>
                        <p>Explore our complete travel guides with detailed itineraries, 
                         must-visit spots, local tips, and travel hacks to make your journey smooth and memorable.</p>
                        </div>

                        </div>

                    <div class="box">
                        <img src="images/image 16.jpg" alt="">
                        <h3>Custom Package</h3>

                        <div class='box1'>
                        <p>Design your dream trip with our flexible custom packages tailored to your preferences, budget, and schedule for a truly personalized experience.</p>
                        </div>
                    </div>

                    <div class="box">
                        <img src="images/image 17.jpg" alt="">
                        <h3>Solo Trip</h3>
                        <div class='box1'>
                        <p>Embark on a solo adventure and discover new destinations at your own pace, making unforgettable memories and finding yourself along the way.</p>
                        </div>
                    </div>

                    <div class="box">
                        <img src="images/image 18.jpg" alt="">
                        <h3>Couple Trip</h3>
                        <div class='box1'>
                        <p>Create romantic getaways with curated experiences perfect for couples, from cozy stays to adventurous activities and scenic spots.</p>
                        <div>
                    </div>

                    
                </div>
         </section>
         <!--Services section ends-->

         <!--Blogs section starts-->
         <section class="blogs" id="blogs">
                <h1 class="heading"> Our Blogs </h1>
                <div class="swiper blogs-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide">
                            <div class="img-container">
                            <img src="https://img.freepik.com/premium-vector/chennai-india-city-skyline-with-color-landmarks-isolated-white_119523-12674.jpg?semt=ais_incoming&w=740&q=80" alt="Image" class='bimg'/>
                            </div>
                            <div class="icons">
                                <a href="#" class="fas fa-calendar"> 21st March, 2025 </a>
                                <a href="#" class="fas fa-user"> By Admin </a>
                            </div>
                            <h3>chennai visit</h3>
                            <p>"Our Chennai visit was highly productive, and we were impressed by the organization and professionalism of the team."</p>
                            <a href="Blog 1.php" class="btn">Read More</a>
                        </div>

                        <div class="swiper-slide slide">
                            <div class="img-container">
                            <img src="https://img.freepik.com/premium-psd/andaman-nicobar-islands-indian-illustration_1279562-9176.jpg" alt="Image" class='bimg'/>
                            </div>
                            <div class="icons">
                                <a href="#" class="fas fa-calendar"> 21st March, 2025 </a>
                                <a href="#" class="fas fa-user"> By Admin </a>
                            </div>
                            <h3>Client Experience: Andaman & Nicobar Getaway</h3>
                            <p>"Our client thoroughly enjoyed the getaway to Andaman & Nicobar and appreciated the seamless arrangements and memorable experiences."</p>
                            <a href="Blog 2.php" class="btn">Read More</a>
                        </div>

                        <div class="swiper-slide slide">
                            <div class="img-container">
                            <img src="https://img.freepik.com/free-photo/tropical-travel-resort-perfect-rest_1232-4574.jpg?semt=ais_incoming&w=740&q=80" alt="Image" class='bimg'/>
                            </div>
                            <div class="icons">
                                <a href="#" class="fas fa-calendar"> 21st March, 2025 </a>
                                <a href="#" class="fas fa-user"> By Admin </a>
                            </div>
                            <h3>Lakshadweep – Secluded Paradise, Coral Wonders & Island Elegance</h3>
                            <p>Our client had an unforgettable experience in Lakshadweep. From the pristine beaches to the vibrant coral reefs, every moment was filled with tranquility and natural beauty. The seamless arrangements, luxurious stays, and personalized services made the getaway truly exceptional.</p>
                            <a href="Blog 3.php" class="btn">Read More</a>
                        </div>
                        
                        <div class="swiper-slide slide">
                           <div class="img-container">
                            <img src="https://img.freepik.com/premium-vector/indian-temple-vector-illustration-watercolor-style_1168005-17049.jpg?semt=ais_hybrid&w=740&q=80" alt="Image" class='bimg'/>
                            </div>
                            <div class="icons">
                                <a href="#" class="fas fa-calendar"> 21st March, 2025 </a>
                                <a href="#" class="fas fa-user"> By Admin </a>
                            </div>
                            <h3>Cultural Escape to Trichy – Temples, Traditions & Tranquility:</h3>
                            <p>Our client thoroughly enjoyed the cultural journey in Trichy. Exploring the majestic temples, experiencing local traditions, and soaking in the serene atmosphere made the visit truly memorable.</p>
                            <a href="Blog 4.php" class="btn">Read More</a>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
         </section>
         <!--Blogs section ends-->

         <!--Review section starts-->
         <section class="review" id="review">
                <h1 class="heading"> Client's Review </h1>
                <div class="swiper review-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 21.jpg" alt="">
                                <div class="info">
                                    <h3>Andrew Garfield</h3>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 22.jpg" alt="">
                                <div class="info">
                                    <h3>Megan Fox</h3>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 23.jpg" alt="">
                                <div class="info">
                                    <h3>Robert Downey Jr.</h3>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>    

                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 24.jpg" alt="">
                                <div class="info">
                                    <h3>Ana de Armas</h3>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 25.jpg" alt="">
                                <div class="info">
                                    <h3>Chris Evans</h3>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 26.jpg" alt="">
                                <div class="info">
                                    <h3>Sadie Sink</h3>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
         </section>
         <!--Review section ends-->

         <!--clients section starts-->
         <section class="clients">
                <h1 class="heading"> Our Clients </h1>
                <div class="swiper clients-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide"><img src="images/image 31.jpg" alt=""></div>
                        <div class="swiper-slide slide"><img src="images/image 32.jpg" alt=""></div>
                        <div class="swiper-slide slide"><img src="images/image 33.jpg" alt=""></div>
                        <div class="swiper-slide slide"><img src="images/image 34.jpg" alt=""></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
         </section>
         <!--clients section ends-->

         <!--about section starts-->
         <section class="about" id="about">
                <div class="image">
                    <img src="images/image 8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
         </section>
         <!-- about section ends -->

         <!--footer section starts-->
         <section class="footer">
                <div class="box-container">
                    <div class="box">
                        <h3>Quick Links</h3>
                       <a href="#home">Home</a>
                       <a href="#category">Category</a>
                       <a href="#packages">Packages</a>
                       <a href="#services">Services</a>
                       <a href="#review">Review</a>
                       <a href="#blogs">Blogs</a>
                       <a href="#about">About</a>
                    </div>

                    <div class="box">
                        <h3>Extra Links</h3>
                        <a href="#">My Account</a>
                        <a href="#">My Favorite</a>
                        <a href="#">My Reviews</a>
                        <a href="#">My Blogs</a>
                        <a href="#">My Packages</a>
                        <a href="#">Terms Of User</a>
                        <a href="#">Privacy Policy</a>
                    </div>

                    <div class="box">
                        <h3>Contact Us</h3>
                        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
                        <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
                        <a href="#"> <i class="fas fa-envelope"></i> tour@gmail.com </a>
                        <a href="#"> <i class="fas fa-map"></i> New York, USA - 123456 </a>
                    </div>

                    <div class="box">
                        <h3>Follow Us</h3>
                        <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
                        <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
                        <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                        <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
                        <a href="#"> <i class="fab fa-github"></i> Github </a>
                    </div>
                </div>

                <div class="credit">Created By<span>Your Trip</span>!All Rights Reserved!</div>
                <div class="credit"> &copy; copyright @ 2025 by <span>Your Trip</span> </div>
                <div class="credit">Design By <span>Your Trip</span></div>
         </section>
         <!--footer section ends-->

         <!-- scroll to top button -->
         <a href="#home" class="scroll-top">
            <i class="fas fa-arrow-up"></i>
         </a>

         <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
         <!-- custom js file link -->
         <script src="script.js"></script>

         <style>
            /* Fixed CSS link syntax */
            /* Improved category section styling */
            .box1{
                width:180px;
            }

           .img-container {
                 width: 100%;       /* full width of parent */
                 height: 400px;     /* desired height */
                 overflow: hidden;  /* hide overflow if image is larger */
                 position: relative;
                        }

            .bimg {
                width: 20px;
                height: 30px;
                    /* cover the container */
               
                }

            .category {
                padding: 5rem 9%;
                background: #f9f9f9;
            }
            
            .category .box-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
                gap: 2rem;
            }
            
            .category .box {
                background: #fff;
                border-radius: 1rem;
                overflow: hidden;
                box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .category .box:hover {
                transform: translateY(-10px);
                box-shadow: 0 1rem 2rem rgba(0,0,0,0.15);
            }
            
            .category .box .image {
                height: 15rem;
                background: #f0f0f0;
                display: flex;
                align-items: center;
                justify-content: center;
                background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            }
            
            .category-icon {
                font-size: 5rem;
                color: #2980b9;
                transition: transform 0.3s ease;
            }
            
            .category .box:hover .category-icon {
                transform: scale(1.1);
            }
            
            .category .box .content {
                padding: 2rem;
                text-align: center;
            }
            
            .category .box .content h3 {
                font-size: 2rem;
                color: #333;
                margin-bottom: 1rem;
            }
            
            .category .box .content p {
                font-size: 1.4rem;
                color: #666;
                padding: 1rem 0;
                line-height: 1.5;
                min-height: 4.5rem;
            }
            
            /* Scroll to top button */
            .scroll-top {
                position: fixed;
                bottom: 3rem;
                right: 3rem;
                width: 5rem;
                height: 5rem;
                background: #2980b9;
                color: #fff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 2rem;
                z-index: 1000;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,.1);
                cursor: pointer;
            }
            
            .scroll-top.show {
                opacity: 1;
                visibility: visible;
            }
            
            .scroll-top:hover {
                background: #3498db;
                transform: translateY(-0.5rem);
            }
            
            /* Animation classes */
            .animate__animated {
                animation-duration: 1s;
                animation-fill-mode: both;
            }
            
            .animate__fadeInDown {
                animation-name: fadeInDown;
            }
            
            .animate__zoomIn {
                animation-name: zoomIn;
            }
            
            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    transform: translate3d(0, -20px, 0);
                }
                to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                }
            }
            
            @keyframes zoomIn {
                from {
                    opacity: 0;
                    transform: scale3d(0.3, 0.3, 0.3);
                }
                50% {
                    opacity: 1;
                }
            }
            
            .animate__delay-1s {
                animation-delay: 1s;
            }
            
            .animate__delay-2s {
                animation-delay: 2s;
            }
         </style>

         <script>
            document.addEventListener('DOMContentLoaded', () => {
                const searchBar = document.getElementById('searchBar');
                const closeSearch = document.getElementById('close-search');
                const searchBtn = document.getElementById('search-btn');
                const searchForm = document.querySelector('.search-form');

                const sections = {
                    'home': document.getElementById('home'),
                    'category': document.getElementById('category'),
                    'packages': document.getElementById('packages'),
                    'services': document.getElementById('services'),
                    'review': document.getElementById('review'),
                    'blogs': document.getElementById('blogs'),
                    'about': document.getElementById('about')
                };

                const keywords = {
                    'home': ['home', 'welcome', 'explore', 'tourism', 'travel'],
                    'category': ['category', 'adventure', 'explore', 'ride', 'ideas'],
                    'packages': ['packages', 'tours', 'trips', 'book', 'booking', 'custom', 'basic', 'standard', 'premium'],
                    'services': ['services', 'guide', 'solo', 'couple', 'family', 'college', 'trip', 'offering'],
                    'review': ['review', 'reviews', 'client', 'clients', 'testimonial', 'feedback'],
                    'blogs': ['blog', 'blogs', 'article', 'articles', 'post', 'posts'],
                    'about': ['about', 'us', 'contact', 'team', 'company']
                };

                function showSection(sectionName) {
                    for (const key in sections) {
                        if (sections[key]) {
                            sections[key].style.display = (key === sectionName) ? 'block' : 'none';
                        }
                    }
                    if (sections[sectionName]) {
                        sections[sectionName].scrollIntoView({ behavior: 'smooth' });
                    }
                }

                if (searchBtn && searchForm && searchBar) {
                    searchBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        searchForm.classList.add('active');
                        searchBar.focus();
                    });
                }

                if (closeSearch && searchForm) {
                    closeSearch.addEventListener('click', () => {
                        searchForm.classList.remove('active');
                    });
                }

                if (searchBar) {
                    searchBar.addEventListener('input', () => {
                        const query = searchBar.value.trim().toLowerCase();

                        if (query === '') {
                            for (const key in sections) {
                                if (sections[key]) sections[key].style.display = 'block';
                            }
                            return;
                        }

                        let matched = false;
                        for (const section in keywords) {
                            if (keywords[section].some(keyword => query.includes(keyword))) {
                                showSection(section);
                                matched = true;
                                break;
                            }
                        }

                        if (!matched) {
                            for (const key in sections) {
                                if (sections[key]) sections[key].style.display = 'block';
                            }
                        }
                    });
                }

                const formElement = document.querySelector('.search-form form');
                if (formElement) {
                    formElement.addEventListener('submit', (e) => {
                        e.preventDefault();
                        searchForm.classList.remove('active');
                    });
                }

                // Initialize all sliders with autoplay and navigation
                const initSlider = (selector, delay = 3000) => {
                    return new Swiper(selector, {
                        loop: true,
                        grabCursor: true,
                        autoplay: {
                            delay: delay,
                            disableOnInteraction: false,
                        },
                        navigation: {
                            nextEl: `${selector} .swiper-button-next`,
                            prevEl: `${selector} .swiper-button-prev`,
                        },
                        pagination: {
                            el: `${selector} .swiper-pagination`,
                            clickable: true,
                        },
                        effect: 'slide',
                        speed: 1000,
                    });
                };

                // Initialize all sliders
                const homeSlider = initSlider('.home-slider', 5000);
                const blogsSlider = initSlider('.blogs-slider');
                const reviewSlider = initSlider('.review-slider');
                const clientsSlider = initSlider('.clients-slider', 2500);

                // Scroll to top button
                const scrollTopBtn = document.querySelector('.scroll-top');
                window.addEventListener('scroll', () => {
                    if (window.pageYOffset > 300) {
                        scrollTopBtn.classList.add('show');
                    } else {
                        scrollTopBtn.classList.remove('show');
                    }
                });

                // Smooth scroll for all links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    });
                });
                
                // Initialize animations when elements come into view
                const animateOnScroll = () => {
                    const elements = document.querySelectorAll('.animate__animated');
                    elements.forEach(element => {
                        const elementPosition = element.getBoundingClientRect().top;
                        const screenPosition = window.innerHeight / 1.3;
                        
                        if (elementPosition < screenPosition) {
                            element.style.opacity = '1';
                        }
                    });
                };
                
                window.addEventListener('scroll', animateOnScroll);
                animateOnScroll(); // Run once on page load
            });
         </script>

    </body>
</html>