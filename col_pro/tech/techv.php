<?php 
session_start();

    $servername="localhost:3307";
    $username="root";
    $password="";
    $dbname="project";
    
    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
      die("connection failed" .mysqli_connect_error);

  

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css3/stylesheet3v.css">
    <link rel="shortcut icon" type="image/png" href="../imgfav/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />">
    <script defer src="https://kit.fontawesome.com/78a52bcfab.js" crossorigin="anonymous"></script>
    <title>Tech</title>
</head>

<body>

    <div class="topnav">
        <nav class=" navbar navbar-expand-lg  bg-light text-white navbar-light fixed-top">
            <a class="navbar-brand" href="#"><img src="../image1/logo.png" alt="logo" height="60px" width="100px"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navii">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navii">
                <ul class="navbar-nav  nav-tabs-justified ml-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="../home_page.php"><i class="fa fa-home">&nbsp;</i>HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../movies.php"><i class="fas fa-tv">&nbsp;</i>MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../tech/techv.php"><i class="fa fa-rocket" aria-hidden="true"></i>
                            TECH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../game/games.php"><i class="fas fa-volleyball-ball">&nbsp;</i>GAMES</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    <div class="m20" id="m2020">

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <a href="Logi.html"> <img src="image3/logi.jpg" alt="Logitech G Pro X Superlight" height="250" width="100%"></a>
                            <div class="card-footer">
                                <h4>G Pro X Superlight</h4>
                                <p style="float: right;">

                                    Logitech is no stranger to creating excellent gaming accessories. It has recently launched its PRO X SUPERLIGHT gaming mouse. The mouse is designed with eSports players in mind. It is the lightest wireless eSports gaming mouse, which utilizes Logitech’s
                                    HERO 25K sensor. The is expected to be available on December 3rd on Logitech.com and will have a $149.99.

                                    <br>
                                </p>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <a href="ios14.html"><img src="image3/iphone.jpg" alt="Iphone 12" height="250" width="100%"></a>
                            <div class="card-footer">
                                <h4>iOS 14.3 </h4>
                                <p style="float: right;">

                                    iOS 14.3 turns the iPhone 12 Pro and Pro Max into even better cameras<br>The update includes the new ProRAW feature that Apple first announced back at its October event.
                                    <br> I’ve been trying out ProRAW on my iPhone 12 Pro Max over the last few days, and I’m already appreciating the difference it can make. <br>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <a href="ps5.html"><img src="image3/PS5.jpg" alt="Ps5" height="250px" width="100%"></a>
                            <div class="card-footer">
                                <h4>Playstation 5</h4>
                                <p style="float: right;">

                                    The PS5 is massive. In fact, it’s the biggest home console ever made.<br><br>I played Astro’s Playroom first to get a feel for the controller. I would highly recommend you do the same if you buy a PS5.<br>Cost: $499<br><br>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <a href="halflife.html"> <img src="image3/halflife.jpg" alt="Halflife" height="250px" width="100%"></a>
                            <div class="card-footer">
                                <h4>Why Half-Life: Alyx is my game of the year</h4>
                                <p style="float: right;">

                                    Half-Life 2 is one of the last things that makes me feel like a fan, and that’s why I was afraid of Half-Life: Alyx.<br><br>Alyx concludes with its own cliffhanger involving the G-Man, a powerful and enigmatic agent
                                    of some unknown power.<br><br>

                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <a href="cyber.html"><img src="image3/cyber.jpg" alt="Cyberpunk 2077" height="250"></a>
                        <div class="card-footer">
                            <h4>It’s not as easy to get a Cyberpunk 2077 refund as CD Projekt Red suggested</h4>
                            <p style="float: right;">

                                Cyberpunk 2077 developer CD Projekt Red has confirmed it has no special refund agreement with Microsoft or Sony, despite saying dissatisfied players should return their copies of the game in a statement.<br> Country : Australia,
                                United States <br> Box office: $140.6 million
                                <br>

                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <a href="amazon.html"><img src="image3/bo.jpg" alt="B&O" height="250"></a>
                        <div class="card-footer">
                            <h4>Stylish buds that deliver bright sound to get sweaty with</h4>
                            <p style="float: right;">


                                Bang and Olufsen is a brand with a reputation for making great sounding audio hardware that looks the part too. It launched the Beoplay E8 2.0 truly wireless earphones at the beginning of the year and then followed it up months later with the E8 Sport.
                                <br>

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <a href="uber.html"><img src="image3/uber.jpg" alt="uber" height="250px"></a>
                        <div class="card-footer">
                            <h4>Uber fined $59 million for dodging questions about sexual assaults</h4>
                            <p style="float: right;">
                                It has 30 days to pay — and answer — or risk suspension in California.<br> Uber has 30 days to pay a $59 million fine to California’s Public Utilities Commission (CPUC) for failing to answer the regulator’s questions about
                                a damning safety report released by the company in December 2019. <br>

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <a href="oracle.html"><img src="image3/oracle.jpg" alt="oracle" height="250px"></a>
                        <div class="card-footer">
                            <h4>Oracle moves its HQ from California to Texas</h4>
                            <p style="float: right;">

                                Software giant Oracle moved the company headquarters from Redwood City, California to Austin, Texas,the latest tech firm to depart Silicon Valley for the Lone Star State.<br>The $39 billion-a-year tech giant announced the
                                headquarters move in a regulatory filing after Friday’s trading markets closed.<br><br>

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <a href="pokemon.html"><img src="image3/pokejpg.jpg" alt="Pokemon Go" height="250px"></a>
                        <div class="card-footer">
                            <h4>POKÉMON GO CREATORS SAY COVID IS ‘EXISTENTIAL TO OUR GAME’</h4>
                            <p style="float: right;">

                                A pandemic makes pushing your players outside impossible

                            </p>
                            <p>Pokémon Go was ready to kick off a new major event in March. Battle League — which asks players to walk in order to gain entry — was similar in spirit to many of Niantic’s initiatives within its game, one that encourages players
                                to leave home and socialize.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <a href="trump.html"><img src="image3/trump.jpg" alt="Trump" height="250px"></a>
                        <div class="card-footer">
                            <h4>Dutch prosecutors say Donald Trump’s Twitter account was really hacked</h4>
                            <p style="float: right;">

                                Dutch prosecutors believe a security researcher hacked President Donald Trump’s Twitter account in October, despite earlier denials from the White House and Twitter.<br><br>The hack would have required Trump to break Twitter’s
                                best practices and disable two-factor authentication, a basic security precaution.
                                <br><br>

                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <a href="netflix.html"><img src="image3/netflix.jpg" alt="Netflix" height="250px"></a>
                        <div class="card-footer">
                            <h4>Netflix adds an audio-only mode to its Android app
                            </h4>
                            <p style="float: right;">

                                Netflix is giving viewers the chance to ignore the visuals of shows and movies entirely and go full audio. In an update first spotted by XDA-Developers and then Android Police, Netflix has started rolling out an audio-only mode for its Android app users.

                            </p>
                            <p>When watching a video, subscribers will see a “video off” button at the top of the full-screen video player.</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <a href="discord.html"><img src="image3/discord.jpg" alt="Dolittle" height="250px"></a>
                        <div class="card-footer">
                            <h4>Discord adds mobile screensharing, and it’s perfect for casual hangouts with your friends 3
                            </h4>
                            <p style="float: right;">
                                <p>20 percent of users will see the feature today, and it’ll be released to all mobile users by Thursday.</p>


                                Features like this one can return a little bit of that back to social interaction, I think, because it allows users to drop in and out whenever.

                            </p>
                            <br>


                        </div>
                    </div>
                </div>
            </div>
            <a class="button" href="../commenting tech/comment_index.php" style="background-color: #7e7607;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;">Comment Here</a>
        </div>

    </div>
    </div>






    <div class="foot ">
        <div class="footer ">
            <div class=" fot2 text-white ">
                <div class=" ico_footer ">
                    <a href="https://www.facebook.com/ "> <i class="fa fa-facebook "></i></a>
                    <a href="https://www.instagram.com/accounts/login/ "> <i class="fa fa-instagram "></i></a>
                    <a href="https://twitter.com/login?lang=en "> <i class="fa fa-twitter "></i></a>
                    <a href="https://www.youtube.com/ "> <i class="fa fa-youtube "></i></a>
                    <a href="https://www.gmail.com/ "> <i class="fa fa-envelope "></i></a>
                </div>
            </div>
        </div>
    </div>









    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav ");
            if (x.className === "topnav ") {
                x.className += " responsive ";
            } else {
                x.className = "topnav ";
            }
        }
    </script>
</body>

</html>