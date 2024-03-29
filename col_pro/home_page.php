<?php 
session_start();

    $servername="localhost:3307";
    $username="root";
    $password="";
    $dbname="project";
    
    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
      die("connection failed" .mysqli_connect_error);

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
    <title>REVIEWER'S CHECKPOST</title>
</head>

<body>


    <nav class=" navbar navbar-expand-lg  bg-light text-dark navbar-light fixed-top">

        <a class="navbar-brand" href="#"><img src="image1/logo.png" alt="logo" height="60px" width="100px"> </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navi">
           <span class="navbar-toggler-icon"></span>
           </button>

        <div class="collapse navbar-collapse" id="navi">
            <ul class="navbar-nav  nav-tabs-justified ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="home_page.php"><i class="fa fa-home">&nbsp;</i>HOME</a>
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
                    <a class="nav-link" href="contact.php ">CONTACT US</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>

    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"> </li>
            <li data-target="#demo" data-slide-to="1"> </li>
            <li data-target="#demo" data-slide-to="2"> </li>
            <li data-target="#demo" data-slide-to="3"> </li>
            <li data-target="#demo" data-slide-to="4"> </li>
            <li data-target="#demo" data-slide-to="5"> </li>
            <li data-target="#demo" data-slide-to="6"> </li>
            <li data-target="#demo" data-slide-to="7"> </li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item ">
                <a href="#"> <img src="game/image2/accover1.jpg" alt="Assassin's Creed Valhalla" width="100%"></a>
                <div class="carousel-caption">
                    <h3>Assassin's Creed Valhalla</h3>
                    <P>Nothing is true; everything is permitted</P>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="image1/lap.jpg" width="100%">
                <div class="carousel-caption">
                    <h3> ALIENWARE LAPTOPS SERIES</h3>
                    <P>THE LATEST LAPTOP</P>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="tech/image3/logi8.jpg" width="100%">
                <div class="carousel-caption">
                    <h3>Logitech Gamimg Mice</h3>
                    <P>G pro X</P>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="image1/tenet.jpg" width="100%">
                <div class="carousel-caption">
                    <h3>TENET</h3>
                    <P style="font-size: 2vw;">A secret agent embarks on a dangerous, time-bending mission to prevent the start of World War III</P>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="image1/halo.jpg" width="100%">
                <div class="carousel-caption">
                    <h3 style="font-size: 2vw;">HALO INFINITE</h3>
                    <P style="font-size: 2vw;">COMING SOON</P>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="image1/peaky.jpg" width="100%">
                <div class="carousel-caption">
                    <h3 style="font-size: 2vw;">PEAKY BLINDERS</h3>
                    <P style="font-size: 2vw;">Tommy Shelby, a dangerous man, leads the Peaky Blinders, a gang based in Birmingham. Soon, Chester Campbell, an inspector, decides to nab him and put an end to the criminal activities.</P>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="image1/flight.jpg" width="100%">
                <div class="carousel-caption">
                    <h3 style="font-size: 2vw;">Microsoft Flight Simulator</h3>
                    <P style="font-size: 2vw;">Microsoft Flight Simulator is a flight simulator developed by Asobo Studio and published by Xbox Game Studios. It is an entry in the Microsoft Flight Simulator series, which was first released in 1982, and preceded by Microsoft Flight
                        Simulator X. It was released on August 18, 2020 for Microsoft Windows.</P>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="image1/jldark.jpg" width="100%">
                <div class="carousel-caption">
                    <h3 style="font-size: 2vw;">Justice League Dark: Apokolips War</h3>
                    <P style="font-size: 2vw;">Following the decimation of Earth, the Justice League regroups to take on Darkseid and save the remaining survivors.</P>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="card1">
        <div class="container-fluid" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card bg-secondary text-white">
                        <img src="game/image2/o1.jpg" height="370">
                        <div class="card-footer" style="text-align: center;">
                            Ori and the Will of the Wisps
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card bg-dark text-white">
                        <img src="image1/jkr.jpg" height="370">
                        <div class="card-footer" style="text-align: center;">
                            It Chapter Two
                        </div>

                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card bg-secondary text-white">
                        <img src="image1/xbx.jpg" height="370" width="100%">
                        <div class="card-footer" style="text-align: center;">
                            AWAY
                        </div>

                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card bg-dark text-white">
                        <img src="image1/bf5.jpg" height="370" width="100%">
                        <div class="card-footer" style="text-align: center;">
                            BATTLEFIELD 5
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img src="image1/news1.jfif" alt="fb">
                    <p>
                        <font size="15px">1.</font>Facebook Reacts After Report Claims It &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ignores BJP Leaders' Hate Speeches.</p>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
            <div class="col-sm-7">
                <center>
                    <h2>ABOUT</h2>
                </center>
                <p>
                    <font size="20px" color="#F90303">R</font>
                    <font color="#790202">EVIEWER'S CHECKPOST</font>
                    <font color="black" size="4vw">is an Indian review website that provides news, reviews, previews, and other information on video games, movies and tech. The site was launched on December 21, 2020, created by Alok Kumar Rastogi, Rahul Khandelwal, Varsha S. and Vishal.
                        We all like to be a critic, that’s what makes watching independent films so rewarding. When we walk out of the cinema there is nothing more delightful than spewing our own thoughts and feelings of the film we have just seen to
                        our nearest and dearest. However, what about film review websites? If you take it upon yourself to type this into Google, get ready for a bombardment of choices. If you are looking for the daddy of all film review websites, Reviewer's
                        Checkpost has to be it. The recently deceased critic wrote in-depth reviews on nearly every film released and has an extensive back catalogue. This really is the cream of the crop and is the Mecca of all things film.
                    </font>

                </p>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img src="image1/news2.jfif" alt="">
                    <p>
                        <font size="15px">2.</font> Samsung Galaxy S20 FE Receiving Android &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11-Based One UI 3.0 Update
                    </p>
                </div>
            </div>
            <div class="col-sm-7">
                <p>
                    <font color="black" size="4vw">Samsung Galaxy S20 FE Receiving Android 11-Based One UI 3.0 Update As per a report by SamMobile, the Android 11-based One UI 3.0 update for Samsung Galaxy S20 FE carries the firmware version G780FXXU1BTL1. According to the roadmap
                        announced by Samsung earlier this month, the update was supposed to reach the phone only in January or February. Hence, it is possible that it will take some time for the update to reach Galaxy S20 FE handsets in other markets.
                    </font>
                </p>
            </div>
        </div>
    </div>



    <div class="footer">
        <div class="row1">
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

</body>

</html>