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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/clints.css">
</head>
<body >
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
                    <li><a href="./order.php" class="activ">clinent</a></li>
                    <li><a href="./order.php">Orders shipments</a></li>
                    <li><a href="./triking.php">Shipment Tracking</a></li>
                    <li><a href="./logout.php">log out</a></li>
                    <li><a href="./about.php">About</a></li>
                </ul>
            </nav>
        </div>
        <!-- start landing  -->
        <div class="bgimg">
        <div class="text">
            <p> We ship everything you wish for </p>
            <br>
            <p> We made it easy for you </p>
         
        </div> <!-- text-->
    </div> <!-- bgimg-->
    <div class=" one text-center"> <!-- button-->
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btnradio1"><a href="./triking.php">TRACK THE SHIPMENT </a></label>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btnradio2"><a href="./order.php"> ORDER THE SHIPMENT </a></label>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btnradio2"><a href="report.php"> REPORTS </a></label>
            </div>
    </div> <!-- button-->
    <br>
    <br>
    <div class="dd container">
    <h2 class="text-center">GET TO KNOW US</h2>
    <br>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/aml.jpg" height="500px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SHIPPING MANAGER:-</h5>
        <p class="card-text">-Manage all important documents <br>
       - Implementing legal regulations and corporate policies<br>
       - Supervising the loading and unloading of goods<br>
       - Supervising the shipping department and making suggestions to improve team performance <br>
    </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/heii.webp" height="500px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SHIPPING OFFICER:-</h5>
        <p class="card-text">-Calculation of shipping costs and quantities, customs taxes and insurances<br>
        -Regulating Shipping Means<br>
        -Planning and coordinating shipping lines and routes and their dates, under the supervision of the shipping manager<br>
        -Contact customers<br>

        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/dri.jpg" height="500px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">CARGO DRIVER:-</h5>
        <p class="card-text">-Delivery of the company's goods from one location to another.<br> 
    -Perform regular maintenance.<br>
    
    </p>
      </div>
    </div>
  </div>
  <div class="col">
</div>
    </div>
</div>
</div>
        <!-- start feadback -->
        <div class="feadback  ">
            <div class="fead container">
                <div class="info">
                    <h2>Plese Support us with your feedback</h2>
                    <p>We are pleased to inform us about your feedback.
    
                    </p>
                </div>
                <div class="star">
                    <div class="post">
                        <div class="text">Thanks for ratting us!</div>
                        <div class="edit">EDIT</div>
                    </div>
                <div class="star-widget">
                    <input type="radio"  name="rate" id="rate-5">
                    <label for="rate-5" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-4">
                    <label for="rate-4" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-3">
                    <label for="rate-3" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-2">
                    <label for="rate-2" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-1">
                    <label for="rate-1" class="fas fa-star"></label>
                    <form action="#">
                        <header></header>
                        <div class="textareaa">
                            <textarea cols="30" placeholder="Describe your experience..."></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit" class="bb">post</button>
                        </div>
                    </form>
                </div>
                </div> 
            </div>
        </div>
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
    <script src="./js/clints.js"></script>
    <script src="js/js/all.min.js"></script>
    <script src="js/js/bootstrap.bundle.min.js"></script>
</body>
</html>



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