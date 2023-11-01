<?php
require('db.php');
session_start();


if (isset($_POST['send'])) {
    $shi_weight = $_POST['shi_weight'];
    $the_date = $_POST['the_date'];
    $Charging_Type = $_POST['Charging_Type'];
    $address_client = $_POST['address_client'];
    $names_client = $_POST['names_client'];
    $name_sender = $_POST['name_sender'];
    $address_sender = $_POST['address_sender'];
    $notes = $_POST['subject'];
    $cli_id  = $_SESSION != null ?  $_SESSION['cli_id'] != null ? $_POST['cli_id'] : null : null;
    $bra_id  = $_SESSION != null ?  $_SESSION['bra_id'] != null ? $_POST['bra_id'] : null : null;
    $com_id  = $_SESSION != null ?  $_SESSION['com_id'] != null ? $_POST['com_id'] : null : null;

    if ($cli_id != null) {
        $insertsqlshipment = "INSERT INTO `shipment`(`shi_weight`,`shi_date`,`shi_type`,`shi_consignee_address`,`shi_consignee_name`,`shi_sender_name`,`shi_sender_address`,`shi_Notes`,`cli_id`,`bra_id`,`com_id`) VALUES ('$shi_weight', '$the_date' ,'$Charging_Type','$address_client','$names_client','$name_sender','$address_sender','$notes','$cli_id','$bra_id','$com_id')";
    }else{
        $insertsqlshipment = "INSERT INTO `shipment`(`shi_weight`,`shi_date`,`shi_type`,`shi_consignee_address`,`shi_consignee_name`,`shi_sender_name`,`shi_sender_address`,`shi_Notes`) VALUES ('$shi_weight', '$the_date' ,'$Charging_Type','$address_client','$names_client','$name_sender','$address_sender','$notes')";

    }
    $addclinents = mysqli_query($connection, $insertsqlshipment);
}

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
    <link rel="stylesheet" href="./css/order.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
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
                <li><a href="./main.php" >Home</a></li>
                <li><a href="./clinents.php">client</a></li>
                <li><a href="./order.php" class="activ">Orders shipments</a></li>
                <li><a href="./triking.php" >Shipment Tracking</a></li>
                <li><a href="./logout.php">log out</a></li>
                <li><a href="./about.php">About</a></li>
            </ul>
        </nav>
    </div>
    <!-- start contact us  -->
    <div class="contact">
        <div class="container">
            <!-- <h2>Contact Us</h2> -->
            <form action="order.php"  method="post">
                <div data-aos="fade-right"  class="left">
                    <div class="input">
                        <label for="">shipment weight </label>
                        <input type="text" placeholder="Your shipment weight " name="shi_weight">
                    </div>
                    <div class="input">
                        <label for="">shipment date </label>
                        <input type="date" placeholder="Your shipment date" name="the_date">
                    </div>
                    <div class="input">
                        <label for=""> shipment type</label>
                        <input type="text" placeholder="Your shipment type" name="Charging_Type">
                    </div>
                    <div class="input">
                        <label for="">consignee address	</label>
                        <input type="text" placeholder="consignee address" name="address_client">
                    </div>
                </div>
                <div data-aos="fade-left"  class="right">
                    <div class="input">
                        <label for=""> consignee name</label>
                        <input type="text" placeholder="consignee name" name="names_client">
                    </div>
                    <div class="input">
                        <label for="">sender name</label>
                        <input type="text" placeholder="sender name" name="name_sender">
                    </div>


                    <div class="input">
                        <label for="">sender address</label>
                        <input type="text" placeholder="sender address" name="address_sender">
                    </div>
                    <div class="input">
                        <label for="">	Notes</label>
                        <input type="textarea" placeholder="Notes" name="subject">
                    </div>


                    <?php
                    if($_SESSION != null) {

                        if ($_SESSION['cli_id'] != null) {
                            echo '<input type="hidden" name="cli_id" value="' . $_SESSION['cli_id'] . '">' ;
                            echo '<input type="hidden" name="bra_id" value="' . $_SESSION['bra_id'] . '">' ;
                            echo '<input type="hidden" name="com_id" value="' . $_SESSION['com_id'] . '">' ;
                        }
                    }
                    ?>
                    <input type="submit" value="send" name="send">
                </div>

            </form>


            <?php
            if (isset($addclinents))
            {
                echo "
                     <br>
                     <br>
                     <div class='p-3 mb-2 bg-secondary text-white'>The order has been successfully requested </div>";
            }
            ?>
        </div>
    </div>
    <!-- end contact us  -->
    <!-- start footer  -->
    <div class="footer">
        <div class="container">
            <div class="box">
                <h3>Cargo Tracking</h3>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
                <p class="text">

                </p>
            </div>
            <div class="box">
                <ul class="links">
                    <li><a href="./main.php">home</a></li>
                    <li><a href="./clients.php">client</a></li>
                    <li><a href="order.php">Orders shipments</a></li>
                    <li><a href="triking.php">Shipment Tracking</a></li>
                    <li><a href="./about.php">About</a></li>
                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">egypt, mansora inside street elglaa</div>
                </div>
                <div class="line">
                    <i class="fas fa-clock fa-fw"></i>
                    <div class="info">Business Hours: from 10:00 To 18:00</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw"></i>
                    <div class="info">
                        <span>+201094376719</span>
                        <span>+201005208013</span>
                    </div>
                </div>
            </div>
            <div class="box footer-gallery">
                <img src="./img/bg1.jpg" alt="">
                <img src="./img/bg2.jpg" alt="">
                <img src="./img/bg4.jpg" alt="">
                <img src="./img/04.jpg" alt="">
                <img src="./img/01.jpg" alt="">
                <img src="./img/06.jpg" alt="">
            </div>
        </div>
        <p class="copyright">Made With <span class="text-white-50">Cargo Tracking</span></p>
    </div>
    <!-- end footer  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>