<?php
require('db.php');
   var_dump($_POST['send']);
 if(isset($_POST['send'])){
    if($_POST['Enter_username']==""||$_POST['Enter_password']==""){
     echo"<div class='p-3 mb-2 bg-danger text-white'>Please enter your username and password correctly</div>";
    }
 }
 if (isset($_POST['send'])) {
      $user_name=$_POST['Enter_username'];
      $pass=$_POST['Enter_password'];
      $sqllog= "SELECT * FROM `clinents` WHERE `cli_name`='$user_name' AND `cli_password`='$pass'";
      $SQL= mysqli_query($connection,$sqllog);
      var_dump($SQL);
      header("location:clinents.php"); 
 }
?>