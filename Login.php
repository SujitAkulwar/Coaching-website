<?php
include("connection.php");
session_start();
if (isset($_POST['login'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $email = stripcslashes($email);
  $pass = stripcslashes($password);

  $_SESSION['admin'] = $email;

  $email = mysqli_real_escape_string($con, $email);
  $pass = mysqli_real_escape_string($con, $password);

  $sql = "SELECT * FROM `login` WHERE `email` = '$email' and `password` = '$password'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
    if ($count == 1 and $email != "") {
      header("location:shop.php");
    } else {
    echo "<script>alert('error')</script>";
  }
  
}
?>


<html>

  <head>
      <title>Classes</title>
      <link rel="stylesheet" type="text/css" href="Login.css">
  </head>

<body>
    <?php 
      include('Nav.php');
    ?>
    <div class="form">
      <div class="wrapper">
        <div class="title-text">
          <div class="title">Login Form</div>
        </div>
        <div class="form-container">
          <form class="signup login" method="post">
            <input type="text" placeholder="Email Address" name="email" class="email" required>
            <input type="text" placeholder="Password" name="password" class="password" required>
            <input type="submit" name="login" value="Login" class="Loginbtn">
            <a href="./Register.php" class="relink">new Register here</a>
          </form>
        </div>
      </div>
    </div>
</body>

</html>
