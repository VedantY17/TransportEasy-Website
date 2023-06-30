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
   $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
   $type = mysqli_real_escape_string($conn, $_POST['type']);
   $location = mysqli_real_escape_string($conn, $_POST['location']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND pincode = '$pincode' AND type = '$type' AND location = '$location'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, pincode, type, location) VALUES('$user_id', '$name', '$email', '$number', '$pincode', '$type', '$location')") or die('query failed');
      $message[] = 'You are registerd for the training succesfully! Our trainers will contact you soon.';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>license</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/user_style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Details for license</h3>
   <p> <a href="home.php">home</a> / license </p>
</div>

<section class="contact">

   <form action="" method="post">
      <h3>Fill this form for training</h3>
      <input type="text" name="name" required placeholder="enter your name" class="box">
      <input type="email" name="email" required placeholder="enter your email" class="box">
      <input type="number" name="number" required placeholder="enter your number" class="box">
      <input type="text" name="pincode" required placeholder="enter your pincode" class="box">
      <span>Enter the vehicle type you want to learn</span>
      <select name="type" class="box" placeholder="type">
      <option value="car">car</option>
      <option value="bike">bike</option>
      <option value="scooter">scooter</option>
      </select>
      <input type="text" name="location" required placeholder="enter your preferable training location" class="box">
      <input type="submit" value="Send details to our trainers" name="send" class="btn">
   </form>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>