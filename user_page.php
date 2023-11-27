<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hello, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>WELCOME TO TRAVEL GUIDE WEBSITE</p>
      <button ><a href="home.php" class="click">Click ME To Redirect Travel Home Page</a></button>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>