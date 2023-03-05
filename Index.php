<?php 
  include('connection.php');
session_start();
    $myusername = isset($_SESSION['admin'])?$_SESSION['admin']:"a" ;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Classes</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <?php 
        include('Nav.php');
    ?>
    <div class="main">
        <div class="welcome-text">
            <h1><i> Welcome to Chanakya Net Study Institute</i></h1>
        </div>
    </div>
</body>

</html>