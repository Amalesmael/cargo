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
            <link rel="stylesheet" href="./css/style.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
      </head>
   <body class="bg-secondary">
   <!-- start landing  -->
      <div class="landing">
         <div class="overlay"></div>
      <div class="contener">
            <div class="logo">
               <img src="./img/logoooo.png" alt="">
            </div>
            <nav>
               <i class="fas fa-bars mune"></i>
               <ul>
               <li><a href="./main.php">Home</a></li>
                    <li><a href="./log-in.php"  class="activ">Login</a></li>
                    <li><a href="./about.php">About</a></li>
               </ul>
            </nav>
      </div>
      </div>
         <div class="login">
         <h1>login</h1>
      <form method="post">
         <div class="form">
         <div class="input">
         <label>user name </label> 
         <input type="name" name="Enter_username" />
      </div> 
      <div class="input">
         <label>password </label>
         <input type="password" name="Enter_password" />
         </div> 
         </div>
         <div class="button">
         <input type="submit" value="log in" name="send">
         <button>
             <a href="./sign in.php"> create a new account </a></button>
         <span class="psw">did you forget<a href="your url page here"> password</a></span>
      </form>
         </div>
</body>
</html>
<?php
if(isset($_POST['send']))
{
   if($_POST['Enter_username']=="" || $_POST['Enter_password']==""){
    echo"<div class='p-3 mb-2 bg-danger text-white'>Please enter your username and password </div>";
   }
}
if (isset($_POST['send']))
{
     $user_name=$_POST['Enter_username'];
     $pass=$_POST['Enter_password'];
     $sqllog= "SELECT * FROM `clinents` WHERE `cli_name`='$user_name' AND `cli_password`='$pass'";
     $SQL= mysqli_query($connection,$sqllog);
     $admin_sqllog="SELECT * FROM `manager` WHERE `man_name`='$user_name' AND `man_passowrd`='$pass'";
     $admin_SQL= mysqli_query($connection,$admin_sqllog);
     if($SQL->num_rows > 0){

         $dr = $SQL->fetch_assoc() ;
      $_SESSION['cli_id']=$dr['cli_id'];
      $_SESSION['bra_id']=$dr['bra_id'];

      $getCom = "SELECT `com_id` FROM `branches` WHERE `bra_id`='".$dr['bra_id']."' ";
         $toStore= mysqli_query($connection,$getCom);
           $co_id =  $toStore->fetch_assoc()['com_id'];
           $_SESSION['com_id'] = $co_id ;
      header("location:clinents.php");
     }else if($admin_SQL->num_rows>0){

//            var_dump($admin_SQL->fetch_assoc());
      $data =    $admin_SQL->fetch_assoc() ;

         $_SESSION['man_id'] = $data['man_id'] ;
         $_SESSION['bra_id'] = $data['bra_id'] ;


         $getCom = "SELECT `com_id` FROM `branches` WHERE `bra_id`='".$data['bra_id']."' ";
         $toStore= mysqli_query($connection,$getCom);
         $co_id =  $toStore->fetch_assoc()['com_id'];
         $_SESSION['com_id'] = $co_id ;

      header("location:admin.php");
     }else{
      echo"<div class='p-3 mb-2 bg-danger text-white'>Please enter your username and password correctly</div>";
     }
}
?>