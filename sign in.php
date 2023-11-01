<?php
require('db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cargo Tracking</title>
            <link rel="stylesheet" href="./css/all.min.css">
            <link rel="stylesheet" href="./css/bootstrap.min.css">
            <link rel="stylesheet" href="./css/normalize.css">
            <link rel="stylesheet" href="./css/sing.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    </head>
<body>
<!-- start landing  -->
    <div class="bg">
        <div class="overlay"></div>
        <div class="landing">
        <div class="contener">
            <div class="logo">
            <img src="./img/logoooo.png" alt="">
            </div>
            <nav>
            <i class="fas fa-bars mune"></i>
            <ul>
                <li><a href="./main.php" class="activ">Home</a></li>
                <li><a href="./log-in.php">Login</a></li>
                <li><a href="./about.php">About</a></li>
            </ul>
            </nav>
    </div>
    </div>
    <div class="container">
        <h1>Sign In</h1>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-item-username">
                <input type="text" name="firstName" placeholder="firstName" placeholder="firstName">
                <input type="text" name="lasttName" placeholder="lastName" placeholder="LastName">
            </div>

            <div class="form-iteam">
                <input type="email" name="email" placeholder="email" placeholder="Email">
            </div>
            <div class="form-iteam">
                <!-- add a password format display -->
                <!-- <span class="pwd-format">
                    8-15 AlphaNnmeric characters
                </span> -->
                <input type="password" name="password" placeholder="password" placeholder="Enter Password">
                <input type="password" name="confirmpassword" placeholder="confirmpassword" placeholder="confirmpassword">
                     </div>

            <?php

            $records = "SELECT * FROM `branches`" ;
           $record =  mysqli_query($connection,$records);


            echo ' <div class="from-item-username"> ';
            echo  '<select  name="bra_id"' ;
            while($row = $record->fetch_assoc()) {

                echo '<option value="'.$row['bra_id'].'">'.$row['bra_address'].'</option>';

           }
           echo '   </select>';
            ?>




            </div>
            <div class="">
                <a href="">I accept time & conditions</a>
                <input type="checkbox" name="" id="">
                <input class="form-control" type="submit" value="add" name="sign_in">
                
            </div>
            <div class="form-btns">
                <!--<button class="signin" type="submit" name="sign_in">sign in</button>-->
                <?php
                 if (isset($_POST['sign_in'])) {
                    $user_name=$_POST['firstName'];
                    $pass=$_POST['password'];
                    $sqllog= "SELECT * FROM `clinents` WHERE `cli_name`='$user_name' AND `cli_password`='$pass'";
                    $SQL= mysqli_query($connection,$sqllog);
                    if($SQL->num_rows > 0){
                        echo"<div class='p-3 mb-2 bg-danger text-white'>Please choose anther username</div>";
                    }else{
                        $name=$_POST['firstName'];
                        $email=$_POST['email'];
                        $password=$_POST['password'];

                        $bra_id = $_POST['bra_id'];
                         $insertsqlclinents="INSERT INTO `clinents`(`cli_name`, `cli_email`, `cli_password`,`bra_id`) VALUES ('$name','$email','$password','$bra_id')";
                        $addclinents= mysqli_query($connection,$insertsqlclinents);

                        header("location:log-in.php");
                    }
               }
                 ?>
                <div class="optionss">
                    Already hav an account? <a href="./log-in.php">login here</a>
            </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
























