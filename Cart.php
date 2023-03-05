<?php
include("connection.php");
session_start();
if (isset($_POST['cart'])) {
    // $Maths = $_POST["Maths"];
    if(isset($_POST['Maths'])) {
        $Math = 10;
    }else{
        $Math = 0;
    }
    if(isset($_POST['Science'])) {
        $Science =10;
    }else{
        $Science = 0;
    }

    $math = stripcslashes($math);
    $Science = stripcslashes($Science);
    $myusername = stripcslashes($myusername);

    $sql = "UPDATE `student` SET `maths`='$math',`science`='$Science' WHERE `emailid`='$myusername'";
    if ($con->query($sql) === TRUE) {
        $result = mysqli_query($con, $sql);
        if($result){
          header("location:class.php");
        }else{
            echo "<script>alert('error')</script>";
        }
    }
    
    
}
?>


<html>

<head>
    <title>Classes</title>
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php
    include('Nav.php');
    ?>
    <div class="cont">
        <div class="tt">
            <div class="t">Class Form</div>
            <h6 class="t">fill the form </h6>
        </div>
        <form class="classform" method="post">
            <div class="checkboxdiv">
                <label class="titlelabel">subjects : </label>
                <input type="checkbox" id="Maths" name="Maths" value="10">
                <label for="Maths"> Math</label><br>
                <input type="checkbox" id="Science" name="Science" value="10">
                <label for="Science"> Science</label><br>
            </div>
            <div>
                <input type="submit" name="cart" value="fill form" class="fillform">
            </div>
        </form>
    </div>
</body>

</html>