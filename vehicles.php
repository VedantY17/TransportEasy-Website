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
   <title>new vehicles</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/user_style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Buy a new vehicle</h3>
   <p> <a href="home.php">home</a> / New Vehicles </p>
</div>


<section class="cars">

   <h1 id="car" class="title">cars</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cars/1.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Maruti Suzuki Swift Dezire</h3>
         <h2>₹ 8,98,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/2.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Bangalore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Skoda KUSHAQ</h3>
         <h2>₹ 20,00,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/3.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mohali</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>KIA SELTOS</h3>
         <h2>₹ 19,15,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/4.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Jaipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hyundai Grandi10</h3>
         <h2>₹ 5,70,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/5.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Delhi</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Maruti Suzuki WagnoR</h3>
         <h2>₹ 7,41,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/6.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Raipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Maruti Suzuki SWIFT</h3>
         <h2>₹ 8,98,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/7.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Renault Kiger</h3>
         <h2>₹ 11,22,990</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/8.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Toyota URBAN CRUISER</h3>
         <h2>₹ 19,49,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/9.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hyundai Verna</h3>
         <h2>₹ 15,71,600</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/10.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Bangalore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2021</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hyundai i20</h3>
         <h2>₹ 12,27,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/11.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Honda City</h3>
         <h2>₹ 15,62,200</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/12.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Ahemdabad</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Ford Ecosport</h3>
         <h2>₹ 11,69,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/13.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hyundai Aura</h3>
         <h2>₹ 8,87,400</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/14.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Tata Safari</h3>
         <h2>₹ 15,45,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/15.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Bangalore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Renault Kwid</h3>
         <h2>₹ 6,32,500</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

   </div>

</section>


<section class="cars">

   <h1 class="title">electric cars</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cars/16.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>KIA SELTOS</h3>
         <h2>₹ 19,15,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/17.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Tata Nexon</h3>
         <h2>₹ 18,99,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/18.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Mahindra KUV100</h3>
         <h2>₹ 10,00,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/19.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Toyota BZ4X EV</h3>
         <h2>₹ 70,00,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/20.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Hyundai Kona</h3>
         <h2>₹ 25,00,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/21.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Renault Kwid</h3>
         <h2>₹ 9,00,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/22.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Honda Global</h3>
         <h2>₹ 24,00,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/23.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Tata Avinya</h3>
         <h2>₹ 30,00,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/cars/24.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Nissan LEAF</h3>
         <h2>₹ 30,00,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

   </div>

</section>


<section class="bikes">

   <h1 id="bike" class="title">Bikes</h1>

   <div class="box-container">

   <div class="box">
      <img src="images/bikes/B1.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>HONDA SP  </h3>
         <h2>₹ 76,074</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>
     
      <div class="box">
      <img src="images/bikes/B2.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>HONDA SHINE </h3>
         <h2>₹ 78,007</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B3.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>HONDA HNESS CB350 </h3>
         <h2>₹ 1,89,905</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B4.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>HONDA X BLADE </h3>
         <h2>₹ 1,06,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B5.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>HONDA CBR 650R </h3>
         <h2>₹ 8,67,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B6.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>HONDA AFRICA TWIN </h3>
         <h2>₹ 16,01,500</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B7.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> HONDA CB300R</h3>
         <h2>₹ 2,77,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B8.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>HONDA LIVO </h3>
         <h2>₹ 75,002</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B9.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> HONDA UNICORN</h3>
         <h2>₹ 95,738</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B10.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2023</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>BAJAJ Pulsar P150 </h3>
         <h2>₹ 1,17,179</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B11.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Jaipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>BAJAJ Pulsar N160 </h3>
         <h2>₹ 1,23,006</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B12.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Jaipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>BAJAJ Pulsar 250 Dual Channel ABS </h3>
         <h2>₹ 1,49,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B13.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Jaipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>BAJAJ Pulsar 250 </h3>
         <h2>₹ 1,44,449</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B14.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>BAJAJ Pulsar RS200 </h3>
         <h2>₹ 1,57,184</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B15.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>BAJAJ Pulsar NS200  </h3>
         <h2>₹ 1,35,226</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B16.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> BAJAJ Pulsar NS160 </h3>
         <h2>₹ 1,11,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B17.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Jaipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> BAJAJ Pulsar 150</h3>
         <h2>₹ 95,872</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B18.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>BAJAJ Pulsar NS125  </h3>
         <h2>₹ 1,05,597</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B19.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>YAMAHA R15M  We R Racing Perfection  </h3>
         <h2>₹ 2,31,965</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B20.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>YAMAHA R15M  We R Racing Perfection  </h3>
         <h2>₹ 2,45,057</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B21.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Jaipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>YAMAHA  R15 V4  We R Racing Perfection </h3>
         <h2>₹ 1,93,900</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B22.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>YAMAHA R15S Unibody Seat </h3>
         <h2>₹ 1,63,738</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B23.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>YAMAHAMT-15 Ver 2.0  </h3>
         <h2>₹ 1,68,400</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B24.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Jaipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> YAMAHA FZS 25</h3>
         <h2>₹ 1,54,400</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B25.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>YAMAHA  FZ 25 </h3>
         <h2>₹ 1,25,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B26.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2022</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> </h3>
         <h2>₹ 1,00,000</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B27.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2019</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> YAMAHA FZ-X</h3>
         <h2>₹ 1,35,900</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B28.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2019</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>YAMAHA FZ-S FI  Redefine Performance </h3>
         <h2>₹ 1,21,985</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B29.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2019</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Royal Enfield Classic 350</h3>
         <h2>₹ 1,90,228</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B30.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Jaipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Royal Enfield Hunter 350 </h3>
         <h2>₹ 1,49,900</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B31.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Royal Enfield Continental GT 650  </h3>
         <h2>₹ 3,04,911</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B32.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Royal Enfield Himalayan </h3>
         <h2>₹ 2,23,900</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B33.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Indore</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Royal Enfield Super Meteor 650  </h3>
         <h2>₹ 3,48,900</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B34.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Jaipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>TVS Raider 125  </h3>
         <h2>₹ 91,351</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B35.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2019</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> TVS Apache RTR 160 4V </h3>
         <h2>₹ 1,19,137</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/bikes/B36.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Jaipur</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2020</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> TVS Apache RTR 180</h3>
         <h2>₹ 1,31,937</h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>
      
   </div>

</section>


<section class="scooters">

   <h1 id="scooter" class="title">SCOOTERS (Petrol)</h1>

   <div class="box-container">

   <div class="box">
      <img src="images/scooters/s1.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> TVS Jupiter</h3>
            <h2>₹ 1,06,147 </h2>
            <h4>109.7 cc, 50 kmpl, 7.77 bhp, 107 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s2.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> TVS Scooty Pep Plus</h3>
            <h2>₹64,582 </h2>
            <h4>87.8 cc, 50 kmpl, 5.36 bhp, 93 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s3.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> TVS Scooty Pep Plus</h3>
            <h2>₹64,582 </h2>
            <h4>87.8 cc, 50 kmpl, 5.36 bhp, 93 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s4.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>TVS Scooty Zest 110 </h3>
            <h2>₹ 75,473 </h2>
            <h4>109.7 cc, 45 kmpl, 7.71 bhp, 103 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s5.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hero Xoom
            </h3>
            <h2>₹ 80,779 </h2>
            <h4>110.9 cc, 8.05 bhp, 109 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s6.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hero Pleasure + </h3>
            <h2>₹68,965 </h2>
            <h4>110.9 cc, 50 kmpl, 8 bhp, 104 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s7.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hero Pleasure + Xtec
            </h3>
            <h2>₹ 77,318</h2>
            <h4>110.9 cc, 50 kmpl, 8 bhp, 104 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s8.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hero Maestro Edge 125 </h3>
            <h2>₹ 82,804 </h2>
            <h4>124.6 cc, 45 kmpl, 9 bhp, 112 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s9.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Hero Destini 125 Xtec</h3>
            <h2>₹  73,688 </h2>
            <h4>125 cc, 45 kmpl, 9 bhp, 114 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s10.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Hero Maestro Edge 110</h3>
            <h2>₹70,898 </h2>
            <h4>110.9 cc, 40 kmpl, 8.04 bhp, 112 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s11.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Honda Dio </h3>
            <h2>₹ 71,502 </h2>
            <h4>109.51 cc, 48 kmpl, 7.65 bhp, 105 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s12.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Honda Activa 125
            </h3>
            <h2>₹ 78,398  </h2>
            <h4>124 cc, 47 kmpl, 8.18 bhp, 109 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s13.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Honda Grazia</h3>
            <h2>₹ 82,398 </h2>
            <h4>124 cc, 45 kmpl, 8.14 bhp, 106 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s14.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Honda Activa 6G </h3>
            <h2>₹74,178 </h2>
            <h4> 109.51 cc, 47 kmpl, 7.68 bhp, 106 kg</h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s15.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Bajaj Chetak </h3>
            <h2>₹ 1,46,175</h2>
            <h4>70 Kmph, 85-95 Km, 5 Hrs, 4,080 W </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s16.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Suzuki Access 125</h3>
            <h2>₹77,382 </h2>
            <h4>124 cc, 48 kmpl, 8.6 bhp, 104 kg </h4>  
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s17.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Suzuki Burgman Street 125 </h3>
            <h2>₹89,440  </h2>
            <h4>124 cc, 49 kmpl, 8.58 bhp, 110 kg </h4> 
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s18.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Suzuki Avenis 125
                 </h3>
            <h2>₹  91,516</h2>
            <h4>124.3 cc, 54.5 kmpl, 8.58 bhp, 106 kg </h4> 
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s19.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Yamaha Ray ZR 125
            </h3>
            <h2>₹83,273 </h2>
            <h4>125 cc, 52 kmpl, 8.04 bhp, 98 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s20.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Yamaha Fascino 125 </h3>
            <h2>₹79,456  </h2>
            <h4>125 cc, 50 kmpl, 8.04 bhp, 99 kg </h4> 
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s21.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>BMW C 400 GT </h3>
            <h2>₹10,74,904  </h2>
            <h4>350 cc, 33.5 bhp, 214 kg </h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

   </div>
</section>


<section class="scooters">

<h1 class="title">SCOOTERS (Electric)</h1>

   <div class="box-container">

      <div class="box">
      <img src="images/scooters/s22.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3> Hero Electric Optima</h3>
            <h2>₹67,190 - 85,190 </h2>
            <h4>1200 W4-5 Hours</h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s23.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Hero Electric NYX </h3>
            <h2>₹73,590 - 86,540 </h2>
            <h4>600 - 1300 W4-5 hours</h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s24.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3> Hero Electric Photon</h3>
            <h2>₹86,391 </h2>
            <h4>1000-1400 W8-10 hours</h4>  
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s25.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3> Hero Electric Eddy</h3>
            <h2>₹72,000 </h2>
            <h4>250 W4 - 5 hour</h4> 
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s26.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Hero Electric Atria </h3>
            <h2>₹ 77,690</h2>
            <h4>250 W4-5 hours</h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s27.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Okinawa iPraise+ </h3>
            <h2>₹99,708 </h2>
            <h4>2500 W4-5 Hours</h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s28.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Okinawa R30 </h3>
            <h2>₹61,998 </h2>
            <h4>250 W4-5 hours</h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s29.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3> Okinawa Okhi90</h3>
            <h2>₹ 1,04,000</h2>
            <h4>3800 W3-4 Hours</h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
      <img src="images/scooters/s30.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Kolkata</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Electric</h1>
         </div>
         <h3>Okinawa Dual 100 </h3>
            <h2>₹79,813 </h2>
            <h4>250 W4 - 5 Hours</h4>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

   </div>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>