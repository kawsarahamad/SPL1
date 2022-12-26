<?php

include '../phpDependencies/config.php';
session_start();

if(!isset($_SESSION['id']))
  header('location:login.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">

    <div class="content">
      <h3>Hi, <span>user</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['id'] ?></span></h1>
      <p>This is user page.</p>
      <a href="login.php" class="btn">Login</a>
      <a href="register.php" class="btn">Register</a>
      <a href="logout.php" class="btn">Logout</a>
    </div>

  </div>
</body>
</html>
