<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $type = mysqli_real_escape_string($conn, $_POST['type']);
   $model = mysqli_real_escape_string($conn, $_POST['model']);
   $state = mysqli_real_escape_string($conn, $_POST['state']);
   $city = mysqli_real_escape_string($conn, $_POST['city']);
   $pincode = $_POST['pincode'];

   $select_message = mysqli_query($conn, "SELECT * FROM `nvehicle_booking` WHERE name = '$name' AND email = '$email' AND number = '$number' AND type = '$type' AND model = '$model' AND state = '$state' AND city = '$city' AND pincode = '$pincode'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `nvehicle_booking`(user_id, name, email, number, type, model, state, city, pincode) VALUES('$user_id', '$name', '$email', '$number', '$type', '$model', '$state', '$city', '$pincode')") or die('query failed');
      $message[] = 'Your details have been recorded. We will contact you soon for further process.';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/user_style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Book your vehicle</h3>
   <p> <a href="home.php">home</a> / contact </p>
</div>

<section class="nvehicle_book">

   <form action="" method="post">
      <h3>Fill your details here!</h3>

      <input type="text" name="name" required placeholder="enter your name" class="box">
      <input type="email" name="email" required placeholder="enter your email" class="box">
      <input type="text" name="number" required placeholder="enter your contact number" class="box">
      <span>Enter selected vehicle type</span>
      <select name="type" class="box" placeholder="type">
      <option value="car">car</option>
      <option value="bike">bike</option>
      <option value="scooter">scooter</option>
      <option value="bicycle">bicycle</option>
      </select>
      <input type="text" name="model" required placeholder="enter model name" class="box">
      <input type="text" name="state" required placeholder="enter your state" class="box">
      <input type="text" name="city" required placeholder="enter your city" class="box">
      <input type="number" name="pincode" required placeholder="enter your pincode" class="box">
      <input type="submit" value="book a test drive" name="send" class="btn">
   </form>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>