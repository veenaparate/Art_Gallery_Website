<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!----font awesome cdn link---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--header section starts-->

<section class="header">
    <a href="home.php" class="logo">craftscorner.</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="products.php">products</a>
        <a href="order.php">order</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!--header section ends-->

<!--home section starts-->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
                <span>Explore The Beauty Of Handmade</span>
                <h3>Arts & Crafts</h3>
                <a href="products.php" class="btn">Start Exploring</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
                <span>New original art every week</span>
                <h3>MAKE,CREATE AND INSPIRE!</h3>
                <a href="products.php" class="btn">View All Products</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
                <span>Find Something You LOVE!</span>
                <h3>Unique Creations</h3>
                <a href="products.php" class="btn">Shop now</a>
            </div>
        </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>

<!--home section ends-->

<!--services section starts-->

<section class="services">
    <h1 class="heading-title"> trending categories </h1>

    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>color splash</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>bouquet</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>sculpture paste</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>wood stain</h3>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>scrapbooks</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>painting</h3>
        </div>

    </div>

</section>

<!--services section ends-->

<!--home about section starts-->

<section class="home-about">
    <div class="image">
        <img src="images/aboutus.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>We represent and distribute over 25 world renowned brands, some of which we have partnered with for over 30 years. We have a long established relationship with Colart - the world's largest manufacturer of fine art, graphics and craft materials.Browse all our products online, view new products, check stock levels, place orders anytime 24/7, track orders and much more.</p>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>

<!--home about section ends-->

<!--home products section starts-->

<section class="home-products">

<h1 class="heading-title">latest products</h1>

<div class="box-container">
    <div class="box">
        <div class="image">
            <img src="images/p1.jpg" alt="">
        </div>
        <div class="content">
            <h3>Birthday Scrapbook</h3>
            <p>Customize it with your pictures together and add messages according to your theme.</p>
            <a href="#order.php" class="btn">order now</a>
        </div>
    </div>


    <div class="box">
        <div class="image">
            <img src="images/p3.jpg" alt="">
        </div>
        <div class="content">
            <h3>Glass Painting</h3>
            <p>Glass painting is one of the most attractive art form with innumerable techniques followed.</p>
            <a href="#order.php" class="btn">order now</a>
        </div>
    </div>


    
    <div class="box">
        <div class="image">
            <img src="images/p2.jpg" alt="">
        </div>
        <div class="content">
            <h3>Explosion Box</h3>
            <p>The gift box will explode once opened, and reveal all the love you put into it.</p>
            <a href="#order.php" class="btn">order now</a>
        </div>
    </div>
</div>

<div class="load-more"> <a href="products.php" class="btn">load more</a> </div>

</section>

<!--home products section ends-->

<!--home offer section starts-->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Grab 50% off on your favrouite products.Shop on the website.Ready To Ship.Easy & Fast Delivery.Free Shipping on orders above 2000.Best Deals.Buy online.</p>
        <a href="order.php" class="btn">order now</a>
    </div>
</section>

<!--home offer section ends-->


<!--footer section starts-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="products.php"> <i class="fas fa-angle-right"></i> products</a>
            <a href="order.php"> <i class="fas fa-angle-right"></i> order</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-789 </a>
            <a href="#"> <i class="fas fa-phone"></i> +122-444-765 </a>
            <a href="#"> <i class="fas fa-envelope"></i> craftscorner@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> nasik, india - 422011 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span>veena parate</span> | all rights reserved! </div>

</section>

<!--footer section ends-->

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="js/script.js"></script>
    
</body>
</html>