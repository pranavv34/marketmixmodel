<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MMM - Admin Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" href="img/logoo.png" type="image/png">
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
   
<div class="container">

   <div class="content">
   <h3>Welcome to the  <span> Marketing Mix Modeling Admin!</span></h3>
      <h1>Hello, <span><?php echo $_SESSION['admin_name'] ?></span>!</h1>
      <p>Redirect to our Website...<span id="click"><a href="./mmm1/index.php">Click Here!</a></span></p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>