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
            <link rel="stylesheet" href="./css/main.css">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
                    <li><a href="./main.php" class="activ">Home</a></li>
                    <li><a href="./log-in.php">Login</a></li>
                    <li><a href="./about.php">About</a></li>
                </ul>
            </nav>
        </div>
        <div class="introduction">
            <h1>Welcome TO <span> Cargo Tracking</span></h1>
            <p class="fs-6">Dear customer, we know you have many options and you have chosen us from among them, so thank you very much.</p>
        </div>
    </div>
    <!-- end landing -->
    <!-- Start shipping -->
    <div class="shipping">
        <h2 class="main-title">Shipping Methods</h2>
        <div class="contener">
            <div class="box">
            <img src="img/ship.jpg" alt="" />
            <div class="content p-3">
                <h3>Ship</h3>
                <p class="mt-3">Our services cover major shipping lines and trade routes around the world and are supported by our extensive global network, highly qualified experts, and advanced technical systems. We are also committed to managing the shipments of your goods at all stages of the shipping process, starting from receipt, through the stage of customs clearance, to the final delivery stage.</p>
            </div>
            </div>
            <div class="box">
            <img src="img/plane.jpg" alt="" />
            <div class="content p-3">
                <h3>Plane</h3>
                <p class="mt-3">Cargo's worldwide air transport network provides a wide range of fast and economical transportation solutions that optimally meet the various needs of your business. We also guarantee complete door-to-door transportation and seamless customs clearance services. Thanks to our advanced technological solutions and our extensive network of offices around the world, you can track the progress of your shipments from the moment the shipment request is submitted until it reaches its final destination.</p>
            </div>
            </div>
            <div class="box">
            <img src="img/turck.jpg" alt="" />
            <div class="content p-3">
                <h3>Truck</h3>
                <p class="mt-3">Cargo operates one of the largest and most modern road freight networks in the Middle East, United and Ireland, using Global Positioning System (GPS). Full Truck Freight (LTL), part truckload (LTL) freight across strategically-located freight forwarding provides accurate and reliable freight storage, securely and on time.</p>
            </div>
            </div>
        </div>
        </div>
        <!-- End shipping -->
        <!-- start Customer Reviews -->
    <div class="reviews">
        <h2 class="main-title">Customer Reviews</h2>
        <div class="contener">
            <div class="test">
                <div class="contat">
                    <img src="./img/reviwe.jpeg" alt="">
                    <div class="text">
                        Evaluate Our Customers and their Trust in us 
                        <p class="text-center">Customers</p>
                    </div>
                </div>
            </div>
            <div class="ss">
                    <div class="prog-hol">
                        <h4 class="mb-3 text-uppercase">Percent</h4>
                        <div class="prog">
                            <span style="width:90%" data-progress="90%"></span>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- end Customer Reviews -->
    <!-- start stats -->
    <!-- start stats -->
    <div class="stats">
        <h2 class="wow animate__backOutLeft">Our Stats</h2>
        <div class="container">
            <div class="box">
                <i class="far fa-user fa-2x fa-fw"></i>
                <span class="number" data-goal="200">0</span>
                <span class="text">Clients</span>
            </div>
            <div class="box">
                <i class="fas fa-code fa-2x fa-fw"></i>
                <span class="number mb-3 mt-3" data-goal="500">0</span>
                <span class="text">Projects</span>
            </div>
            <div class="box">
                <i class="fas fa-globe fa-2x fa-fw"></i>
                <span class="number mb-3 mt-3" data-goal="700">0</span>
                <span class="text">Countries</span>
            </div>
            <div class="box">
                <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
                <span class="number mb-3 mt-3" data-goal="800">0</span>
                <span class="text">Money</span>
            </div>
        </div>
    </div>
    <!-- end stats -->
    <!-- end stats -->
    <!-- start ask us  -->
    <div class="ask">
        <div class="contener">
            <h2 class="main-title">
                If you have any comments, I can hear you well
            </h2>
            <form method="post" enctype="multipart/form-data">
                <div class="left">
                <input type="text" placeholder="Yor Name" name="username">
                <input type="text" placeholder="Yor Phone" name="phone">
                <input type="email" placeholder="Yor Email" name="email">
                <input type="text" placeholder="Subject" name="subject">
                </div>
                <div class="right">
                    <textarea name="message" placeholder="Your Message" ></textarea>
                    <input type="submit" value="Send" name="send">
                </div>
            </form>
        </div>
        <?php
        if(isset($_POST['send'])){
            $name=$_POST['username'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            $insertsql="INSERT INTO `ask`(`ask_name`, `ask_phone`, `ask_email`, `ask_subject`, `ask_message`) VALUES ('[$name]','[$phone]','[$email]','[$subject]','[$message]')";
            $addmessage=mysqli_query($connection,$insertsql);
            echo"
            <br>
            <br>
            <div class='p-3 mb-2 w-50 contener bg-secondary text-white'> we will answer soon plase check your email </div>";
        }
        ?>
    </div>
    <!-- end ask us  -->     
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
                     
                </div>
                <div class="box">
                    <ul class="links">
                        <li><a href="./log-in.php">Login</a></li>
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
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                    AOS.init();
                </script>
</body>
</html>