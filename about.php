<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/user_style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img2.jpg" alt="">
         <img src="images/about-img3.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p> Life has changed so better that instead of visiting to showrooms to have a look around different  options of cars and bikes, you can easily analyze through digitally. We don't need to waste our  time for visiting different showrooms of different brands. Instead, we can easily visit to this online  site in which we will include maximum brands of cars and bikes. Not only these options but also  the features of each vehicle of your choice. It will show you the vehicle model’s details, its price,  its security, ABS & EBD, parking sensors and so on. All you can physically see in the showroom  will show you the same in this site. This will save more time. You can compare one vehicle with  other with their features, size, comparability, quality, irrespective of different brand. This will  make you to decide and think wisely to choose your vehicle before buying it.</p>
         <p>So, we are designing  in such a way where different kinds of automobiles of various  brands and accessories related to that where all of these can be purchased in one mode of platform.  Basically, this deals with all land modes of vehicles, also electric/non electric whether  gear/non gear. That’s why we came forward with an idea  where  different kinds of vehicles of different brands to buy any vehicle for the customer of their choice.  
 </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/img1.jpg" alt="">
         <p>Nice Servive. Helped me easy to choose my Vehicle. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aaryan Khan</h3>
      </div>

      <div class="box">
         <img src="images/img2.jpg" alt="">
         <p> Overall service was too good. Learning session of car was also nice. Helped me easily to get liscence.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ananya Pandey</h3>
      </div>

      <div class="box">
         <img src="images/img3.jpg" alt="">
         <p> Thanks for so many options in Accessories i could find every essential of my car in this. hahahah</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kartik Aaryan</h3>
      </div>

      <div class="box">
         <img src="images/img4.jpg" alt="">
         <p> Fantastic!!!!!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rajpal Yadav</h3>
      </div>

      <div class="box">
         <img src="images/img5.jpg" alt="">
         <p>I got bicycle for my kid which delivered quickly, overall service provided is quite good at affordable rates </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Disha Patani</h3>
      </div>

      <div class="box">
         <img src="images/img6.jpg" alt="">
         <p>So many collection of bikes. Me and my buddies all of them booked it from here. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aparshakti Khurana</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Our Trainers</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/img7.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rishabh Pant</h3>
         <h2>7 yrs of experience</br>
         2 wheelers/4 wheelers</br>
         Guaranted learning in 21 days</h2>
      </div>
      
      <div class="box">
         <img src="images/img10.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Dinesh Karthik</h3>
         <h2>2 yrs of experience</br>
         2 wheelers/4 wheelers</br>
         Guaranted learning in 21 days</br>
         Speaciality sports cars & bikes</h2>
      </div>
      <div class="box">
         <img src="images/img8.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kuldeep Yadav</br>
         <h2>4 yrs of experience</br>
         2 wheelers only</br>
         Guaranted learning in 7 days</h2>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>