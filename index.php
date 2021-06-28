<?php
require_once('db.php');
require 'dbconfig/config.php';
?>
<html>
<head>
<title> City Guide System</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

</head>
<body>
<section class="header">

<div class="container">
	<img src="images/logo1.jpg">
    
    <button type="button" class="sign-btn "> <a href="login.php">Login</a></button>
</div>
<h1> Travel Around The City</h1>
<div class="input-group">
    <input type="text" class="form-control" placeholder="Search City" />
    <div class="input-group-append">
    <button type="submit" class="input-group-text btn"> Search</button>
	</div>
</div>
</section>
<section class="features">
<h1> Featured Destination</h1>
<div class="container">
<div class="row">

<div class="col-md-4">
<div class="feature-box">
    <div class="feature-img">
    <img src="images/pashupati.jpg" style="width:100%"/>
    <div class="rating">
    	<i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
    </div>
    </div>
    <div class="feature-details">
    <h4> kathmandu</h4>
    <p> The Pashupatinath Temple is a famous and sacred Hindu temple complex that is located on the banks of the Bagmati River, approximately 5 km north-east of Kathmandu in the eastern part of Kathmandu Valley, the capital of Nepal.</p>
    <div>
    <span><i class="fa fa-map-marker"></i>Pashupatinath Temple</span>
     <span><i class="fa fa-sun-o"></i>1 Day</span>
      <span><i class="fa fa-moon-o"></i>0 Day</span>
    </div>
    </div>
</div>
</div>

<div class="col-md-4">
<div class="feature-box">
    <div class="feature-img">
    <img src="images/swyambhu.jpg" style="width:100%" />
    <div class="rating">
    	<i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
    </div>
    </div>
    <div class="feature-details">
    <h4> Kathmandu</h4>
    <p> The Pashupatinath Temple is a famous and sacred Hindu temple complex that is located on the banks of the Bagmati River, approximately 5 km north-east of Kathmandu in the eastern part of Kathmandu Valley, the capital of Nepal.</p>
    <div>
    <span><i class="fa fa-map-marker"></i>Pashupatinath Temple</span>
     <span><i class="fa fa-sun-o"></i>1 Day</span>
      <span><i class="fa fa-moon-o"></i>0 Day</span>
    </div>
    </div>
</div>
</div>


<div class="col-md-4">
<div class="feature-box">
    <div class="feature-img">
    <img src="images/boudhanath.jpg" style="width:100%" />
    <div class="rating">
    	<i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
    </div>
    </div>
    <div class="feature-details">
    <h4> Kathmandu</h4>
    <p> The Pashupatinath Temple is a famous and sacred Hindu temple complex that is located on the banks of the Bagmati River, approximately 5 km north-east of Kathmandu in the eastern part of Kathmandu Valley, the capital of Nepal.</p>
    <div>
    <span><i class="fa fa-map-marker"></i>Pashupatinath Temple</span>
     <span><i class="fa fa-sun-o"></i>1 Day</span>
      <span><i class="fa fa-moon-o"></i>0 Day</span>
    </div>
    </div>
</div>
</div>


</div>
</div>
</section>
<section class ="gallery">
<h1><center> Travelling Gallery</center></h1>
<div class="container">
<div class="row">
<div class="col-md-3">
	<div class="gallery-box">
        <img src="images/a.jpg">
        <h4> Kathmandu</h4>
    </div>
</div>
<div class="col-md-3">
	<div class="gallery-box">
        <img src="images/d.jpg">
        <h4> Kathmandu</h4>
    </div>
</div>
<div class="col-md-3">
	<div class="gallery-box">
        <img src="images/c.jpg">
        <h4> Kathmandu</h4>
    </div>
</div>
<div class="col-md-3">
	<div class="gallery-box">
        <img src="images/e.jpg">
        <h4> Kathmandu</h4>
    </div>
</div>
</div>
</div>
</section>
<section class="users-feedback">
<h1><center> Users Review</center></h1>
<div class="container">
<div class="row">
<div class="col-md-4">
	<div class="user-review">
    <p> The Pashupatinath Temple is a famous and sacred Hindu temple complex that is located on the banks of the Bagmati River, approximately 5 km 					     north-east of Kathmandu.</p>
    <h5>Neela Rai</h5>
    <small> Kathmandu</small>
    </div>
    <img src="images/user1.jpeg">
</div>
<div class="col-md-4">
<div class="user-review">
    <p> The Pashupatinath Temple is a famous and sacred Hindu temple complex that is located on the banks of the Bagmati River, approximately 5 km 					     north-east of Kathmandu.</p>
    <h5>Krishna Raj Giri</h5>
    <small> Kathmandu</small>
    </div>
    <img src="images/user2.jpeg">
</div>
<div class="col-md-4">
<div class="user-review">
    <p> The Pashupatinath Temple is a famous and sacred Hindu temple complex that is located on the banks of the Bagmati River, approximately 5 km 					     north-east of Kathmandu.</p>
    <h5>Sabin Giri</h5>
    <small> Kathmandu</small>
    </div>
    <img src="images/user3.jpeg">
</div>
</div>
</div>
</section>
<section class="footer">
<div class="container">
<div class="row">
	<div class="col-md-3">
	<img src="images/logo1.jpg" class="footer-logo">
     <p> The Pashupatinath Temple is a famous and sacred Hindu temple complex that is located on the banks of the Bagmati River, approximately 5 km 	 north-east of Kathmandu.</p>
    </div>
    <div class="col-md-3">
    <h4> Features</h4>
    <p>Deals and Offers</p>
    <p><a href="review.php">Customer Reviews</a></p>
    <p>Cancelation Policy</p>
    </div>
    <div class="col-md-3">
    <h4> Quick Contact</h4>
    <p><i class="fa fa-phone-square"></i> +977 9861010575 </p>
    <p><i class="fa fa-envelope"></i> cityguide@gmail.com</p>
    <p><i class="fa fa-home"></i> Sitapaila, Kathmandu</p>
    </div>
    <div class="col-md-3">
    <h4> Follow Us On</h4>
    <p><i class="fa fa-facebook-official"></i>Facebook</p>
    <p><i class="fa fa-twitter"></i> Twitter</p>
    <p><i class="fa fa-instagram"></i> Instagram</p>
    </div>
</div><hr>
	<p class="copyright"> Made with <i class="fa fa-heart"></i> by Eighth Semester</p>
</div>
</section>
</body>
</html>