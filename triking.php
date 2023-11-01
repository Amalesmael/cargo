<?php
require('db.php');
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
            <link rel="stylesheet" href="./css/triking.css">
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
                    <li><a href="./clinents.php">clinent</a></li>
                    <li><a href="./order.php">Orders shipments</a></li>
                    <li><a href="./triking.php" class="activ">Shipment Tracking</a></li>
                    <li><a href="./main.php">log out</a></li>
                    <li><a href="./about.php">About</a></li>
                </ul>
            </nav>
        </div>
        <div class="form">
            <div class="introduction">
                <img ata-aos="zoom-in-down" src="./img/bg1.jpg" alt="">
                <h1 data-aos="fade-up-right" class="text-white">Thank you for choosing our company</h1>
                <h1 data-aos="fade-up-left" class="text-white">we hope to meet your expctations </h1>
            </div> 
        </div>
        <div  data-aos="fade-up"
            data-aos-anchor-placement="center-bottom" class="discount bg-secondary">
            <div class="map bg-secondary">
                <div class="contet ">
                    <h2 class="h">The Maps</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54695.26601855479!2d31.417859197498974!3d31.041454962256164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79db7a9053547%3A0xf8dab3bbed766c97!2z2KfZhNmF2YbYtdmI2LHYqdiMINin2YTZhdmG2LXZiNix2KkgKNmC2LPZhSAyKdiMINin2YTZhdmG2LXZiNix2KnYjCDYp9mE2K_ZgtmH2YTZitip!5e0!3m2!1sar!2seg!4v1649180936022!5m2!1sar!2seg" width="700" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000" class="form">
                <div class="content">
                    <h2 class="text-white">Confirm the code of the request</h2>
                    <form method="post" enctype="multipart/form-data" >
                        <label class="text-white" for=""> Code</label>
                        <input class="input" type="text" name="code" placeholder="your code">
                        <input type="submit" value="Send" name="send">
                        <?php
                        if (isset($_POST['send'])) {
                            $code=$_POST['code'];
                            $sqlshipment="SELECT * FROM `shipment` WHERE `shi_id`= '$code'";
                            $SQL= mysqli_query($connection, $sqlshipment);
                            if ($SQL->num_rows == 0) {
                                echo"
                                <br>
                                <div class='p-3 mb-2 bg-danger text-white'>Please check your code of the shipment</div>";
                            } else {
                                while ($row = mysqli_fetch_assoc($SQL)) {
                                    $id = $row['shi_id'];
                                    $shi_weight=$row['shi_weight'];
                                    $shi_date=$row['shi_date'];
                                    $shi_type=$row['shi_type'];
                                    $shi_consignee_address=$row['shi_consignee_address'];
                                    $shi_consignee_name=$row['shi_consignee_name'];
                                    $shi_sender_name=$row['shi_sender_name'];
                                    $shi_sender_address	=$row['shi_sender_address'];
                                    echo "
                                 <br>
                                 <br>
                                  <div class='p-3 mb-2 bg-secondary text-white'>
                                  code of shipment :- $id <br>
                                  weight of shipment:- $shi_weight <br>
                                 date of order:- $shi_date <br>
                                 type of shipment:- $shi_type <br>
                                 clinent address:- $shi_consignee_address <br>
                                 clinent name:- $shi_consignee_name <br>
                                 sender name:- $shi_sender_name <br>
                                 sender address:- $shi_sender_address <br>
                                </div>
                                ";
                                }
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                    <li><a href="./main.php">Home</a></li>
                    <li><a href="./clinents.php">clinent</a></li>
                    <li><a href="./order.php">Orders shipments</a></li>
                    <li><a href="./triking.php">Shipment Tracking</a></li>
                    <li><a href="./main.php">log out</a></li>
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