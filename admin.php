<?php
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargo Tracking</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/clints.css">
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
                    <li><a href="./admin.php" class="activ">admin</a></li>
                    <li><a href="./orderad.php">Orders shipments</a></li>
                    <li><a href="./trickingad.php">Shipment Tracking</a></li>
                    <li><a href="./main.php">log out</a></li>
                    <li><a href="./about.php">About</a></li>
                </ul>
            </nav>
        </div>
        <!-- start landing  -->
        <div class="bgimg">
    </div> <!-- bgimg-->
    <br>
    <br>
    <div class="dd container">
    <h2 class="text-center">HELLO MANAGER</h2>
    <br>
    <br>
</div>
    <div class=" one text-center"> <!-- button-->
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" >
            <label class="btn btn-outline-secondary" for="btnradio1"><a href="./trickingad.php">TRACK THE SHIPMENT </a></label>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btnradio2"><a href="./orderad.php"> ORDER THE SHIPMENT </a></label>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btnradio2"><a href="./reportadmin.php"> REPORTS </a></label>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btnradio2"><a href="./ask.php"> ASKS </a></label>
            <label class="btn btn-outline-secondary" for="btnradio2"><a href="./branch.php"> BRANCH </a></label>
            <label class="btn btn-outline-secondary" for="btnradio2"><a href="./employees.php"> EMPLOYEES </a></label>
            <label class="btn btn-outline-secondary" for="btnradio2"><a href="./manger.php"> MANGER</a></label>


            </div>
            <br>
            <br>
            <br>
    </div> <!-- button-->
   
</div>
        <!-- start feadback -->
        
        <!-- end feadback -->
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
                    <li><a href="./orderad.php">Orders shipments</a></li>
                    <li><a href="./trickingad.php">Shipment Tracking</a></li>
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
    <script src="./js/clints.js"></script>
    <script src="js/js/all.min.js"></script>
    <script src="js/js/bootstrap.bundle.min.js"></script>
</body>
</html>