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
   <title>second-hand vehicles</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/user_style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Buy second-hand vehicles</h3>
   <p> <a href="home.php">home</a> / second-hand vehicles </p>
</div>

<section class="old-cars">

   <h1 class="title">used cars</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/second hand cars/sc1.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Maruti Suzuki Wagon R LXI CNG </h3>
         <h2>₹3,75,000 </h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc2.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Mahindra XUV500  </h3>
         <h2>₹5,10,000 </h2>
         <a href="nvehicle_book.php" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc3.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hyundai Elite i20 </h3>
         <h2>₹6,15,000  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc4.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hyundai Creta 1.6 SX Plus AT Petrol </h3>
         <h2>₹12,51,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc5.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Toyota Innova GX 2.4 </h3>
         <h2>₹25,50,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc6.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Renault Triber RXZ </h3>
         <h2>₹7,50,000  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc7.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Skoda Rapid </h3>
         <h2>₹8,51,000   </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc8.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Honda City VX</h3>
         <h2>₹7,11,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc9.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Renault Kwid CLIMBER </h3>
         <h2>₹ 5,25,000 </h2>
        
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc10.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Volkswagen Vento Highline Diesel </h3>
         <h2>₹6,45,000  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc11.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Maruti Suzuki Swift  </h3>
         <h2>₹ 5,50,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc12.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Tata Harrier XZA </h3>
         <h2>₹21,75,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc13.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Maruti Suzuki Ciaz Delta</h3>
         <h2>₹ 5,95,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc14.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Mercedes-Benz E-Class E 250 CDI </h3>
         <h2>₹30,00,000  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand cars/sc15.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Kia Seltos GTX Plus </h3>
         <h2>₹19,95,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

</section>
</div>


<section class="old-cars">

   <h1 class="title">used bikes</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/second hand bikes/sb1.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Royal Enfield Classic 500 </h3>
         <h2>₹1.85 Lakh </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb2.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Royal Enfield Thunderbird 350 </h3>
         <h2>₹85,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb3.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Honda CBR 150 R </h3>
         <h2>₹51,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb4.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Bajaj Pulsar 220 F </h3>
         <h2>Rs.90,000  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb5.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Bajaj Pulsar NS200 </h3>
         <h2> Rs.80,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb6.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Honda CB Twister</h3>
         <h2>Rs.20,000  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb7.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>BAJAJ PULSER 180 </h3>
         <h2>₹ 47,999  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb8.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hero Passion Pro i3s BS6 </h3>
         <h2> ₹ 77,000 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb9.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>HONDA CB UNICORN 150CC </h3>
         <h2>₹ 85,000  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb10.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Bajaj Avenger 180 </h3>
         <h2>₹ 65,000  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb11.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3> Honda CB Hornet 160R </h3>
         <h2>₹51,220  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb12.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hero Passion Pro 100cc </h3>
         <h2> ₹62,400</h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb13.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Yamaha FZs 150cc </h3>
         <h2>₹63,980 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb14.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Bajaj Pulsar 220 </h3>
         <h2>₹62,400  </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

      <div class="box">
         <img src="images/second hand bikes/sb15.jpg" alt="">
         <div class="share">
            <a href="#" class="fas fa-road"></a>
            <h1>200km</h1>
            <a href="#" class="fas fa-location-dot"></a>
            <h1>Mumbai</h1>
            <a href="#" class="fas fa-calendar-days"></a>
            <h1>2018</h1>
            <a href="#" class="fas fa-gas-pump"></a>
            <h1>Petrol</h1>
         </div>
         <h3>Hero Splendor Plus IBS i3S 100cc BS6 </h3>
         <h2> ₹60,228 </h2>
         <a href="" class="btn">Book a test drive</a>
      </div>

 </section>


 <section class="old-cars">

<h1 class="title">used scooters</h1>

<div class="box-container">

   <div class="box">
      <img src="images/second hand scooters/ss1.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>TVS Jupiter 110cc 2017 </h3>
      <h2>₹ 45,760</h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss2.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3> Honda Aviator 110cc 2017</h3>
      <h2>₹47,840 </h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss3.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>Honda Activa 5G 110cc STD 2020 </h3>
      <h2>₹58,240 </h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss4.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>TVS Jupiter 110cc 2018 </h3>
      <h2>₹ 50,400</h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss5.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>Suzuki Access Fi 125cc Disc CBS BS6 2021 </h3>
      <h2>₹79,904 </h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss6.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>TVS Jupiter 110cc 2018 </h3>
      <h2>₹53,580 </h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss7.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>Honda Activa 110cc 2013 </h3>
      <h2>₹ 39,020</h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss8.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>Honda Activa 5G 110cc STD 2019 </h3>
      <h2>₹64,480 </h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss9.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>Suzuki Access 125cc 2018 </h3>
      <h2>₹56,563 </h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss10.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>TVS Wego 110cc 2013 </h3>
      <h2>₹25,500 </h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss11.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>Hero Maestro Edge 110cc 2019 </h3>
      <h2>₹53,950 </h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

   <div class="box">
      <img src="images/second hand scooters/ss12.jpg" alt="">
      <div class="share">
         <a href="#" class="fas fa-road"></a>
         <h1>200km</h1>
         <a href="#" class="fas fa-location-dot"></a>
         <h1>Mumbai</h1>
         <a href="#" class="fas fa-calendar-days"></a>
         <h1>2018</h1>
         <a href="#" class="fas fa-gas-pump"></a>
         <h1>Petrol</h1>
      </div>
      <h3>Suzuki Access 125cc 2016 </h3>
      <h2>₹38,350 </h2>
      <a href="" class="btn">Book a test drive</a>
   </div>

</section>


 <!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>