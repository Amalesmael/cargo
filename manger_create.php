<?php
// Include config file
require_once "db.php";

// Define variables and initialize with empty values
$name = $email = $jope = "";
$name_err = $jope_err = $email_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }

    // Validate address
    $input_address = trim($_POST["email"]);
    if(empty($input_address)){
        $address_err = "Please enter an email.";
    } else{
        $address = $input_address;
    }

    // Validate salary


    $bra_id = $_POST['bra_id'];


    // Check input errors before inserting in database
    if(empty($name_err) && empty($jope_err) && empty($email_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO manager (man_name, man_email,man_passowrd,bra_id) VALUES (?, ?, ?,?)";

        if($stmt = $connection->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $_POST["name"], $_POST["email"],$_POST['password'],$bra_id);

            // Set parameters
            $param_name = $name;
            $param_address = $address;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: manger.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create </title>
    <link rel="stylesheet" href="css/clints.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-secondary">
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
<div class="wrapper bg-secondary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Create </h2>
                <p></p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                        <span class="invalid-feedback"><?php echo $name_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <textarea name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>"><?php echo $email; ?></textarea>
                        <span class="invalid-feedback"><?php echo $email_err;?></span>
                    </div>

                    <?php

                    $records = "SELECT * FROM `branches`" ;
                    $record =  mysqli_query($connection,$records);


                    echo ' <div class="from-group"> ';
                    echo '<label>branches</label>';
                    echo  '<select  name="bra_id" class="form-control" ' ;
                    while($row = $record->fetch_assoc()) {

                        echo '<option value="'.$row['bra_id'].'">'.$row['bra_address'].'</option>';

                    }
                    echo '   </select>';
                    echo '   </div>';
                    ?>

                    <br>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="invalid-feedback"><?php echo $jope_err;?></span>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Add">
                    <a href="manger.php" class="btn btn-danger ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
<br>
<br>
<br>
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
</body>
</html>