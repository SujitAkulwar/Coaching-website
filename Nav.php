<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
        .topnav {
            overflow: hidden;
        }

        .atag {
            float: right;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .atag:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
        </style>

    </head>


    <body>
        <div class="topnav">
            <a class="active atag" href="Index.php">Home</a>
            <?php
            $myusername = isset($_SESSION['admin'])?$_SESSION['admin']:"" ;
                if($myusername!=""){
                    echo "<a href='Logout.php' class='atag'>" . $myusername . "<a>";
                }else{
                    echo "<a href='Login.php' class='atag'> Login <a>";
                }
            ?>
            <a href="Contact.php" class='atag'>Contact us</a>
        </div>
    </body>

</html>