<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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

<div class="heading" style="background:url(images/header-bg-3.jpeg) no-repeat">
    <h1>order now!</h1>
</div>

<!--ordering section starts-->

<section class="ordering">

<h1 class="heading-title">Shop for unique items!</h1>

<form action="order_form.php" method="post" class="order-form">

<div class="flex">
    <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name">
    </div>

    <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email">
    </div>

    <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your number" name="phone">
    </div>

    <div class="inputBox">
        <span>address :</span>
        <input type="text" placeholder="enter your address" name="address">
    </div>

    <div class="inputBox">
        <span>product :</span>
        <input type="text" placeholder="enter your product name" name="pname">
    </div>

    <div class="inputBox">
        <span>quantity :</span>
        <input type="number" placeholder="enter your quantity " name="quantity">
    </div>

    <div class="inputBox">
        <span>date :</span>
        <input type="date" name="date">
    </div>
</div>

<input type="submit" value="submit" class="btn" name="send">

</form>

</section>

<!--ordering section ends-->


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