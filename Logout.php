<?php
// include("connection.php");
// session_start();
if(isset($_POST["logout"])){
    $myusername = "a";
    // exit();
    session_destroy();
    header("Location: Index.php");
}
?>

<html>

  <head>
      <title>Classes</title>
      <link rel="stylesheet" type="text/css" href="Logout.css">
  </head>

<body>
    <?php 
      // include('Nav.php');
    ?>
    <div class="formlogout" style="margin-top:50px;">
      <div class="cont">
        <div class="tt">
          <?php echo "<div class='title'>" . $myusername . "</div>"; ?>
        </div>
        <form class="form" method="post">
            <input type="submit" value="Logout" name="logout" style="cursor:pointer;">
        </form>
      </div>
    </div>
</body>

</html>
