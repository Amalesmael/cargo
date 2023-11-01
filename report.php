<?php
require('db.php');
session_start();
$clid = $_SESSION['cli_id'];
$sql = "SELECT * FROM shipment where cli_id='$clid' ";
$result = $connection->query($sql);
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
                        <li><a href="./clinents.php">client</a></li>
                        <li><a href="./order.php">Orders shipments</a></li>
                        <li><a href="./triking.php">Shipment Tracking</a></li>
                        <li><a href="./logout.php">log out</a></li>
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
                            <td> id </td>
                            <td>name</td>
                            <td>product</td>
                            <td>
                                <label for="">date</label>
                                <select name="date" id="">
                                    <option value="Januar">January</option>
                                    <option value="Fevruary">Fevruary</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="Augufc">Augufc</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </td>
                            <td>branches</td>
                            <td>price</td>
                            <td>product condition</td>
                            <td>feedback</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['shi_id']; ?></td>
 <td><?php echo $row['shi_weight']; ?></td>
 <td><?php echo $row['shi_type']; ?></td>
 <td><?php echo $row['shi_consignee_address']; ?></td>
 <td><?php echo $row['shi_consignee_name']; ?></td>
 <td><?php echo $row['shi_sender_name']; ?></td>
 <td><?php echo $row['shi_sender_address']; ?></td>
 <td><?php echo $row['shi_Notes']; ?></td>

 </tr>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
                        </tr>

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
    </body>
    </html>