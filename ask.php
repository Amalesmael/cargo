
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
            <link rel="stylesheet" href="./css/report.css">
            <link rel="stylesheet" href="./css/animate.css">
            <link rel="stylesheet" href="./css/site.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        </head>
<body>
    <!-- start landing  -->
    
    <div class="bg">
        <!-- <div class="overlay"></div> -->
        <div class="landing">
            <div class="contener">
                <div class="logo">
                    <img src="./img/logoooo.png" alt="">
                </div>
                <nav>
                    <i class="fas fa-bars mune"></i>
                    <ul>
                        <li><a href="./main.php" class="activ">Home</a></li>
                        <li><a href="./admin.php">admin</a></li>
                        <li><a href="./orderad.php">Orders shipments</a></li>
                        <li><a href="./trickingad.php">Shipment Tracking</a></li>
                        <li><a href="./main.php">log out</a></li>
                        <li><a href="./about.php">About</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- start table  -->
  
            <div class="table">
                <div class="contener">
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>NAME</td>
                            <td> PHONE</td>
                            <td>EMAIL</td>
                            <td>SAUBJECT</td>
                            <td>MESSAGE</td>
                            <td>answer</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
     $sqlreport="SELECT * FROM `ask`";
     $SQL= mysqli_query($connection, $sqlreport);
                            while ( $report=mysqli_fetch_assoc($SQL)) :
                                $ask_id=$report['ask_id'];
                                $ask_name=$report['ask_name'];
                                $ask_phone=$report['ask_phone'];
                                $ask_email=$report['ask_email'];
                                $ask_subject =$report['ask_subject'];
                                $ask_message=$report['ask_message'];
    ?>
                        <tr>
                         <td><?=$ask_id?></td>
                         <td><?=$ask_name?></td>
                         <td><?=$ask_phone?></td>
                         <td><?=$ask_email?></td>
                         <td><?=$ask_subject?></td>
                         <td><?=$ask_message?></td>
                         <td><button type="button" class="btn btn-secondary"><a  class="text-light"href="https://outlook.live.com/owa/">answer</a></button></td>
                           </tr>
                 <?php
                 endwhile ;
                 ?>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="send">
           </div><!-- end table  -->
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
                                <li><a href="./main.php" class="activ">Home</a></li>
                                <li><a href="./admin.php">admin</a></li>
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
    </body>
    </html>