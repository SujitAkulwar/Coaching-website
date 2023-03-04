<?php
include('connection.php');
session_start();
$myusername = isset($_SESSION['admin']) ? $_SESSION['admin'] : "";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Classes</title>
    <link rel="stylesheet" type="text/css" href="class.css" />
</head>

<body>
    <?php
    include('Nav.php');
    include("logout.php");
    ?>
    <div class="main">
        <?php
        $sql = "SELECT `maths`, `science` FROM `student` WHERE `emailid`='$myusername';";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $math = $row["maths"];
        if ($math == 10) {
            echo "<div class='class'> Maths class </div>";
        }
        $science = $row["science"];
        if ($science == 10) {
            echo "<div class='class'> Maths class </div>";
        }
        ?>
    </div>
</body>

</html>