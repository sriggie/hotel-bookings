<?php  
// Database credentials
$username = "root";
$hostname = "localhost";
$password = "";
$dbName = "hotel-booking";

// connect to the database
$conn = mysqli_connect($hostname, $username, $password, $dbName );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from table
$sql = "SELECT client_id, client_name, no_of_rooms, email FROM bookings";

// Execute query and get results
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Client ID: " . $row["client_id"]. "<br>";
        echo "Client Name: " . $row["client_name"]. "<br>";
        echo "No. of Rooms: " . $row["no_of_rooms"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "<br>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reagan Hotel Booking Agencies </title>
<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a  class="logo"><span>SR</span>VACATIONS</a>
        <nav class="navbar">
            <a href="#packages"><i class="fas fa-box"></i> packages</a>
            <a href="#gallery"><i class="fas fa-images"></i> galleries</a>
            <a href="#review"><i class="fas fa-star"></i> reviews</a>
            <a href="#contact"><i class="fas fa-phone"></i> contact us</a>
            <a href="#book"><i class="fas fa-book"></i> book with us</a>
        </nav>
        
        <!-- <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div> -->

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>
<!-- <div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <form action="">
         <h3>login</h3>
         <input type="email" class="box" placeholder="enter your email">
         <input type="password" class="box" placeholder="enter your email">
         <input type="submit" value="login now" class="btn">
         <input type="checkbox" id="remember">
         <label for="remember">Remember me</label>
         <p>forgrt password? <a href="#">click here</a></p>
         <p>don't have and account? <a href="#">register now</a></p>
    </form>
</div> -->
<section class="home" id="home">
    <div class="content">
        <h3>we Offer The Best Holiday Picked From Our Beutiful Motehrland</h3>
        <p>Discover Kenya, as we fix you your perfect Holiday spot</p>
        <a href="https://magicalkenya.com/tembeakenya/" class="btn">Discover More from sr vaactions</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="img/vid-1.mp4"></span>
        <span class="vid-btn" data-src="vds/vd2.mp4"></span>
        <span class="vid-btn" data-src="img/vid-3.mp4"></span>
        <span class="vid-btn" data-src="img/vid-4.mp4"></span>
        <span class="vid-btn" data-src="img/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="vds/vd1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>
<section class="packages" id="packages">
    <h1 class="heading">
        <span>Let </span>
        <span>us </span>
        <span>find</span>
        <span>you</span>
        <span>find</span>
        <span>your</span>
        <span>holiday </span>
        <span>destination</span>
        
    </h1>

    <div class="box-container">
        <div class="box">
            <img src="images/diani.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Diani Beach </h3>
                <p>Bask as you relax on our remarkable vast beaches with oceanic view that capture your breath 
                    .</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ksh 80000<span>ksh 90000</span></div>
                <a href="book.html" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/gazzel.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Tsavo National Park </h3>
                <p>Fancy wilflife ? enjoy vast views as you get to follow up on the animal kingdom and see how these exceptional species behave while in  their habitats.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> KSH3000 <span>KSH50000</span></div>
                <a href="book.html" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/giraffe.jpg" alt="SHINGO ">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>giraffe Centre  </h3>
                <p>Get to see how Girrafes dwell in our centres next the Great Niarobi National Park.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> KSH12000<span>KSH20000</span></div>
                <a href="book.html" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/lions.jpg" alt="simbaa">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Niarobi National Park </h3>
                <p>In the heart of the capital city we have the park that prides itself as the country's most wildlife preserve Park .</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> KSH5000 <span>ksh10000</span></div>
                <a href="book.html" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/maasai.jpg" alt="ero">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Maasai Mara reserved </h3>
                <p>Visit the idigenous cultures of our country's tribe that dwells in the wildlife reserves and get to learn of thier deep rich cultures.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price"> KSH 3500 <span>KSH 8000</span></div>
                <a href="book.html" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/mtk2.jpg" alt="form-close">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Abardare Forest </h3>
                <p>If you enjoy natures vibe , then Ab adare Forest with its famous Abadare Ranges its quite the nature vibe.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price"> KSH2000 <span>KSH 5000</span></div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>
    </div>
</section>
<section class="services" id="services">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>We have over the years provided the best way for you to get to explore hotels , ranging from the tropical coastal region , to the warm pastures of our savannah landa to the nature rich highlands</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
                <h3>Exclusive and exotic Dinery</h3>
                <p>We offer the best of our freshest produces either locally or imported , for you to get moouth watering experiences with servicses from our highly trained cefs and waiters to atteendess</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>We always ensure the payments you make are end to end protexted and we neither ask for confidential details , as well as we provide safetty measures to protect each of our cleints form loosing thier goods and a very function refund policy </p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
                <h3>Recognision around the world</h3>
                <p>We are highly recognised even by our international guest who even drop by thrice a year and they have always trustred us to provide the best opyion to give them the best holiday offer there is </p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>We have also flight packages to cater for your travel needs even on a budget we have other pocket-friendly packages for either direct train flights and also road means we also have vans to cater for that</p>
        </div>
        <!-- <div class="box">
            <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div> -->
    </div>
</section>
<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>


<div class="box-container">
    <div class="box">
        <img src="images/mtk1.jpg" alt="mount">
        <div class="content">
            <h3>Mount Kenya</h3>
            <p>MT.Kenya is the peak of Kenya as well as the second largest Mountain in Africa.</p>
            <a href="https://www.kws.go.ke/content/mount-kenya-national-park-reserve" class="btn">See the reserve</a>
        </div>
    </div>
    <div class="box">
        <img src="images/tub.jpg" alt="tub">
        <div class="content">
            <h3>Luxuruios Romms</h3>
            <p>Get to relax in our luxurious rooms.</p>
            <a href="https://www.google.com/search?q=voyager+beach+hotel&tbm=isch&ved=2ahUKEwjDq6qjoKX-AhWMmicCHWNRBlwQ2-cCegQIABAA" class="btn">see more pics</a>
        </div>
    </div>
    <div class="box">
        <img src="images/hotel4.jpg" alt="">
        <div class="content">
            <h3>King Size beds</h3>
            <p>Get cozy in our king size beds that puts you into deep relaxation.</p>
        </div>
    </div>
    <div class="box">
        <img src="images/maasai.jpg" alt="">
        <div class="content">
            <h3>Maasai People</h3>
            <p>Interact with our Maasai people and get to see their cultures.</p>
        </div>
    </div>
    <div class="box">
        <img src="images/diani.jpg" alt="">
        <div class="content">
            <h3>diani Beach</h3>
            <p>Bake in the sun as you feel the swift breeze.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="images/hotel3.jpg" alt="">
        <div class="content">
            <h3>Villa Rosa</h3>
            <p>Visit this for your excecutive needs .</p>
        </div>
    </div>
    <div class="box">
        <img src="images/gazzel.jpg" alt="">
        <div class="content">
            <h3>Surka Gazzels</h3>
            <p>Rare yet Beutiful.</p>
        </div>
    </div>
    <div class="box">
        <img src="images/lions.jpg" alt="">
        <div class="content">
            <h3> Nairbi National Park </h3>
            <p>Put this on your next bucket list as you explore Kenya.</p>
        </div>
    </div>
    <div class="box">
        <img src="images/giraffe.jpg" alt="">
        <div class="content">
            <h3>Long Neck Girrafes</h3>
            <p>Visit them and get to feed them.</p>
        </div>
    </div>
</div>
</section>

<!-- gallery section ends -->

<!-- review section start -->

<section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>
    <div class="swiper mySwiper review-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/rev.jpg" alt="">
                    <h3>Lil Riggie</h3>
                    <p>I had an incredible vacation thanks to this website's outstanding service, expertise, and affordable prices. Their team went above and beyond to help me select the perfect vacation package, and I highly recommend their services!.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/rev.jpg" alt="lil">
                    <h3>Simon Reagan</h3>
                    <p>I had an incredible vacation thanks to this website's outstanding service, expertise, and affordable prices. Their team went above and beyond to help me select the perfect vacation package, and I highly recommend their services!.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/gazzel.jpg" alt="">
                    <h3>Jenna Bey</h3>
                    <p>.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/revv.jpeg" alt="">
                    <h3>Lil Riggie</h3>
                    <p>I worked with this website for my vacation planning and their friendly team provided excellent recommendations within my budget. My vacation was unforgettable and I highly recommend their services. Thanks!.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
                </div>
        </div>
    </div>
</section>



<section class="contact" id="contact">
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>
    <div class="row">
        <div class="img">
            <img src="images/diani.jpg" alt="">
        </div>
        <form action="submit">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>
    </div>
</section>
<!-- <section class="brand-container">
    <div class="swiper mySwiper brand-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide"><img src="images/b1.jpg" alt="">we234</div>
            <div class="swiper-slide"><img src="images/diani.jpg" alt="">2  rd43</div>
            <div class="swiper-slide"><img src="images/gazzel.jpg" alt="">went</div>
            <div class="swiper-slide"><img src="images/lions.jpg" alt="">watering</div>
            <div class="swiper-slide"><img src="images/maasai.jpg" alt="">tgtg</div>
            <div class="swiper-slide"><img src="images/mtk1.jpg" alt="">regwtgw</div>
        </div>
    </div>
</section> -->



<section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">
        <!-- <div class="img">
            <img src="images/lions.jpg" alt="">
        </div> -->

        <form action="">
              <div class="inputBox">
                  <h3>where to</h3>
                  <input type="text" placeholder="place name">
              </div>
              <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now">
        </form>
    </div>
</section>


<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>I created this website as a simplified way for resturaunts to showcase their services and as wellas for vacation seekers to get to their most prefered choice of holiday gateway either single travel, couples, groups , coorprate, or even diplomatic visists.We are resoponsivle for booking and do a follow up to ensure our clients get to enjoy and a motivation to attract more customers.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Nairbi</a>
            <a href="#">Kajiado</a>
            <a href="#">Naivasha</a>
            <a href="#">Nakuru</a>
        </div>
        <!-- <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">package</a>
            <a href="#">service</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="#">book</a>
        </div> -->
        <div class="box">
            <h3>follow us</h3>
            <a class="icon-link facebook" href="www.facbook.com">Facebook</a>
<a class="icon-link instagram" href="www.instagram.com">Instagram</a>
<a class="icon-link twitter" href="www.twitter.com">Twitter</a>
<a class="icon-link linkedin" href="https://www.linkedin.com/in/simon-reagan-9965b221a/">LinkedIn</a>

        </div>
    </div>
    <h1 class="credit"> created by <span>simonreaganDesigns</span> | all rights reserved!! </h1>
</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="index.js"></script>
</body>
</html>