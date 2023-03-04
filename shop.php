<?php
include("connection.php");
session_start();
if (isset($_POST['fillform'])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $schoolname = $_POST["schoolname"];
    $mobilenos = $_POST["mobilenos"];
    $emailid = $_POST["emailid"];
    $std = $_POST["std"];
    $medium = $_POST["medium"];
    // $Maths = $_POST["Maths"];
    if(isset($_POST['Maths'])) {
        $Math = $_POST["Maths"];
    }else{
        $Math = 0;
    }
    if(isset($_POST['Science'])) {
        $Science = $_POST["Science"];
    }else{
        $Science = 0;
    }

    $name = stripcslashes($name);
    $age = stripcslashes($age);
    $address = stripcslashes($address);
    $schoolname = stripcslashes($schoolname);
    $mobilenos = stripcslashes($mobilenos);
    $emailid = stripcslashes($emailid);
    $std = stripcslashes($std);
    $medium = stripcslashes($medium);
    $Math = stripcslashes($Math);
    $Science = stripcslashes($Science);

    // $email = mysqli_real_escape_string($con, $email);
    // $pass = mysqli_real_escape_string($con, $password);

    $sql = "INSERT INTO `student`(`name`, `age`, `address`, `schoolname`, `mobilenos`, `emailid`, `std`, `medium`, `maths`, `science`) VALUES ('$name','$age','$address','$schoolname','$mobilenos','$emailid','$std','$medium','$Math','$Science')";
    $result = mysqli_query($con, $sql);
    if($result){
        $_SESSION['admin'] = $email;
          header("location:Index.php");
      }else{
        echo "<script>alert('error')</script>";
      }
}
?>


<html>

<head>
    <title>Classes</title>
    <link rel="stylesheet" href="shop.css?v=<?php echo time(); ?>">
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
            <div>
                <!-- <label>Full Name : </label> -->
                <input type="text" placeholder="Full Name" name="name" class="name" required>
            </div>
            <div>
                <input type="text" placeholder="age" name="age" class="age" required>
            </div>
            <div>
                <input type="text" placeholder="address" name="address" class="address" required>
            </div>
            <div>
                <input type="text" placeholder="school name" name="schoolname" class="schoolname" required>
            </div>
            <div>
                <input type="text" placeholder="Mobile no" name="mobilenos" class="mobilenos" required>
            </div>
            <div>
                <input type="text" placeholder="emailid" name="emailid" class="emailid" required>
            </div>
            <div>
                <input type="text" placeholder="std" name="std" class="std" required>
            </div>
            <div>
                <input type="text" placeholder="medium" name="medium" class="medium" required>
            </div>
            <div class="checkboxdiv">
                <label class="titlelabel">subjects : </label>
                <input type="checkbox" id="Maths" name="Maths" value="10">
                <label for="Maths"> Math</label><br>
                <input type="checkbox" id="Science" name="Science" value="10">
                <label for="Science"> Science</label><br>
            </div>
            <div>
                <input type="submit" name="fillform" value="fill form" class="fillform">
            </div>
        </form>
    </div>
</body>

</html>