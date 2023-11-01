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
            <link rel="stylesheet" href="./css/about.css">
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
                    <li><a href="./main.php">Home</a></li>
                    <li><a href="./about.php" class="activ">About</a></li>
                </ul>
            </nav>
        </div>
        <div class = "about-wrapper">
            <div class = "about-left">
            <div class = "about-left-content">
                <div>
                <div class = "shadow">
                    <div class = "about-img">
                    <img src = "./img/logoooopp.png" alt = "about image">
                    </div>
                </div>
                <h2>Cargo<br>Tracking</h2>
                <h3>Shipping company</h3>
                </div>
                <ul class = "icons">
                <li><i class = "fab fa-facebook-f"></i></li>
                <li><i class = "fab fa-twitter"></i></li>
                <li><i class = "fab fa-linkedin"></i></li>
                <li><i class = "fab fa-instagram"></i></li>
                </ul>
            </div>
            </div>
            <div class = "about-right">
            <h1>hi<span>!</span></h1>
            <h2>Here is more about our company</h2>
            <div class = "about-btns">
                <button type = "button" class = "btn btn-light"><a href="./sign in.php" class="activ">sign in </a></button>
            </div>
            <div class = "about-para">
                <p>Meiji Services <br>
                    cargo tracking offers a variety of innovative technologies in services, services and integrated services that meet the requirements and needs of your business. Our Services and Arrangement In getting good services in our services and arranging them successfully. In addition to these services through the economy facilities.</p>
                <p>Storage <br>
                cargo tracking recognizes the important role of warehousing within the broader cycle of the supply chain. Accordingly, cargo tracking handles storage and management services for your inventory in its advanced logistics centers, where it offers guaranteed or chargeable storage options to meet the needs of customers in various business sectors. Thanks to its advanced technologies, cargo tracking ensures that its customers meet the requirements of storage and inventory management with high efficiency, while at the same time allowing them to be informed of the status and levels of inventory, thus managing their purchases properly and improving the time of the cycle of their orders.</p>
                <!--<p> 
                If you have your own warehouse or storage facility and feel that it is not being managed efficiently, here comes the role of cargo tracking through warehouse management services. cargo tracking supply chain management team can handle the tasks of managing your facility efficiently, reducing waste, optimizing available space, selecting the right equipment, reducing operating expenses, and enhancing standards and quality of services. cargo tracking will manage the day-to-day operations using its own warehouse management system and all its resources.
               <br>
                value added services
                cargo tracking can prepare your goods and take steps to bring them as close as possible to the “point of sale”, ensuring that your orders are fulfilled more quickly and with minimal costs. cargo tracking's value-added services include labeling, assembly and co-packing, and field services. cargo tracking value-added services include, but are not limited to:
                <br>
                 common packaging<br>
                  FMCG co-packing involves assembling two or more products into one salable package, and this can include pressed plastic packaging of items, hermetically sealed, re-labelled, and repackaged. Basically, co-packing can be used for discounted items, gifts and promotional products.
                  <br>
                  Compilation of offers packages<br>
                  cargo tracking provides component assembly services for Mobile Card Offer packages, ranging from SIM insertion and instruction manuals to serial number labeling. The packages of this service can be designed and modified according to the requirements of different customers in the telecom sector.
                  <br>
                  Fashion Sector Services<br>
                  We provide you with everything needed to get your products ready to be shown in our showroom. All retail needs can be accomplished before the product in question leaves the warehouse, including price tag, product tag stapling, steam ironing, electronic sensor addition, product folding and packaging.
                    <br>
                  field services<br>
                  cargo tracking provides logistics solutions at the customer's warehouse location, such as arranging and complete inventory of warehouse and showroom assets.
                 <br>
                   Standalone app development<br>
                   cargo tracking allows its customers and business partners to develop customized applications for specific services such as integrating the ID card printer software with the SIM card aggregation mechanism in order to print the SIM card serial number with its associated phone number.
                </p>
-->
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
                        <li><a href="./main.php" >Home</a></li>
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