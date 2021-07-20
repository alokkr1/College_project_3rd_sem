<?php 
session_start();
 error_reporting (E_ALL ^ E_NOTICE); 
 

    $servername="localhost:3307";
    $username="root";
    $password="";
    $dbname="project";
    
    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("connection failed ".mysqli_connect_error);
    }

    $username = $_POST['username'];
    $mobile_no = $_POST['mobile_no'];
	$comment = $_POST['comment'];
    
    $sql= "INSERT INTO `project`.`contactus` (`S_No`,  `username`, `mobile_no`, `comment`, `date`) VALUES ('$S_No', '$username', '$mobile_no', '$comment', current_timestamp())";

    if(!$conn->query($sql)==true){
        die("Error:$sql <br> $conn->error");
    }

    include("functions.php");

    $user_data = check_login($conn);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/stylesheet.css">
    <link rel="shortcut icon" type="image/png" href="imgfav/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script defer src="https://kit.fontawesome.com/78a52bcfab.js" crossorigin="anonymous"></script>
    <title>contact us</title>
</head>

<body style="background:rgb(255, 251, 255);">


    <nav class=" navbar navbar-expand-lg  bg-light text-dark navbar-light fixed-top">

        <H5>
            <FONT COLOR="purple">REVIEW</FONT>
        </H5>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navi">
           <span class="navbar-toggler-icon"></span>
           </button>

        <div class="collapse navbar-collapse" id="navi">
            <ul class="navbar-nav  nav-tabs-justified ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="home_page.php"><i class="fa fa-home">&nbsp;</i>HOME</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="tech/techv.php"><i class="fa fa-rocket" aria-hidden="true">&nbsp;</i>TECH</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link " href="movies.php"><i class="fas fa-tv">&nbsp;</i>MOVIES</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="game/games.php"><i class="fas fa-volleyball-ball">&nbsp;</i>GAMES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="our_services.php"><i class="fa fa-fw fa-wrench"></i>OUR SERVICES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="contact.php ">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>

    </nav>

    <div class="content">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image1/q.jpg" alt="contact" style="width: 100%; height: 600px;">
                <div class="carousel-caption">
                    <div class="contacti">
                        <center>
                            <h1>
                                <font color="grey"> CONTACT US</font>
                            </h1><br>
                            <h5>
                                <font color="grey">How can we help You? </font>
                            </h5>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card2">
        <div class="container-fluid" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <h3>WE ARE JUST ONE CLICK AWAY</h3>
                            <a href="#"><img src="image1/call.png" width=60px>
                                <p style="color:rgb(63, 5, 63);"><b>+91&nbsp;9915445565 </b></p>
                            </a><br>
                            <div class="container">
                                <h2>COMMENT YOUR THOUGHTS</h2>
                                <form  method="POST" class="needs-validation" novalidate >
                                    <div class="form-group">
                                        <label for="uname"><h4>Username:</h4></label>
                                        <input type="text" class="form-control" id="uname" placeholder="Enter username/emailID" name="username" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="uname"><h4>MOBILE NUMBER:</h4></label>
                                        <input type="text" class="form-control" id="uname" placeholder="Enter MOBILE NUMBER" name="mobile_no" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <textarea name="comment" placeholder="Comment.." style="height:auto width:auto"></textarea><br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-light text-white">
                        <div class="card-body text-center">
                            <h1>
                                <FONT COLOR="grey">VISIT US</FONT>
                            </h1>
                            <img src="image1/loco.png" width="80px" style="padding-bottom: 20px;">
                            <a href="#" class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15554.470116834118!2d77.57339359773093!3d12.93228610821162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae158b11e34d2f%3A0x5f4adbdbab8bd80f!2sBMS%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1607358601420!5m2!1sen!2sin" width="650" height="850" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" style="height:900px !important;"></iframe></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="footer">
        <div class="row">
            <div class=" fot2 col-sm-12 text-white">
                <div class=" ico_footer">
                    <a href="https://www.facebook.com/"> <i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/accounts/login/"> <i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/login?lang=en"> <i class="fa fa-twitter"></i></a>
                    <a href="https://www.youtube.com/"> <i class="fa fa-youtube"></i></a>
                    <a href="https://www.gmail.com/"> <i class="fa fa-envelope"></i></a>
                </div>

            </div>
        </div>

        <script>
            // Disable form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Get the forms we want to add validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>


</body>

</html>