<?php
include("connection.php");
session_start();
if (isset($_POST['register'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $email = stripcslashes($email);
  $password = stripcslashes($password);

  $email = mysqli_real_escape_string($con, $email);
  $password = mysqli_real_escape_string($con, $password);

  $sql = "INSERT INTO `login`(`email`, `password`) VALUES ('$email','$password')";
  $result = mysqli_query($con, $sql);
  if($result){
    $_SESSION['admin'] = $name;
      header("location:shop.php");
  }else{
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
          <div class="title">Signup Form</div>
        </div>
        <div class="form-container">
          <form class="signup login" method="post">
            <input type="text" placeholder="Email Address" name="email" class="email" required>
            <input type="text" placeholder="Password" name="password" class="password" required>
            <input type="submit" name="register" value="signup" class="Loginbtn">
            <a href="./Login.php" class="relink">already registered - login here</a>
          </form>
        </div>
      </div>
    </div>
</body>

</html>
