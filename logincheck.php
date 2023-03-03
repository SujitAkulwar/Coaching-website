
<?php
    include("connection.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $email = stripcslashes($email);  
    $pass = stripcslashes($password); 
    
    $email = mysqli_real_escape_string($con, $email);  
    $pass = mysqli_real_escape_string($con, $password);  

    $sql = "SELECT * FROM `login` WHERE `email` = '$email' and `password` = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    if($count == 1 and $email!=""){
        include("info.php");
        $logincheck = 1;
        $username = $email;
        echo "<script>window.location.href='Index.php';</script>";
    }
    else{
        header("Location: Login.php");
    }
?>