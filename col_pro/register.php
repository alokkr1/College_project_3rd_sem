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

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
	//something was posted
	$username = $_POST['username'];
    $email = $_POST['email'];
	$password = $_POST['password'];
       

	if(!empty($username) && !empty($password) && !is_numeric($username))
	{

		//save to database
		$user_id = random_num(7);
		$query = "INSERT INTO `signup` (`S_No`, `user_id`, `username`, `email`, `password`, `date`) VALUES ('$S_No', '$user_id', '$username', '$email', '$password', current_timestamp())";

        if($conn->query($query)==true){
              echo"sucessfully inserted";
              $insert=true;
        } 
        else
         {
              echo"Error:$query<br>$conn->error";
         }

		//mysqli_query($conn, $query);

		header("Location: signup.php");
		die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/stylesheet6.css">
    <link rel="shortcut icon" type="image/png" href="imgfav/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <script src="js1/main.js" defer></script>
    <title>Register form</title>
</head>

<body>
    <div class="myClass">
        <div class="col-md-5 mb-2">
            <div class="card  form-dark">
                <div class="card-body ">
                    <form class=" needs-validation" novalidate  onsubmit="return needs-validation" method="POST">
                        <h1 class="text-center font-up font-bold py-4 black-text">Register New User</h1>
                        <center> <img src="image1/avtar.png" alt="avtar" style="height: 150px;"></center>
                        <div class="md-form form-outline">
                            <i class="fa fa-user prefix green-text"></i>
                            <input type="text" id="orangeForm-name2" class="form-control" name="username" required>
                            <label for="orangeForm-name2" style="color: rgb(180, 15, 15);">Your Full Name</label>
                            <div class="invalid-feedback">Please provide your name.</div>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-envelope prefix green-text"></i>
                            <input type="email" id="orangeForm-email2" class="form-control" name="email" required>
                            <label for="orangeForm-email2" style="color: rgb(180, 15, 15);">Your email</label>
                            <div class="invalid-feedback">Please provide valid email.</div>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix green-text"></i>
                            <input type="password" id="orangeForm-pass2" class="form-control" name="password" required>
                            <label for="orangeForm-pass2" style="color: rgb(180, 15, 15);">Your New Password</label>
                            <div class="invalid-feedback">Please enter your valid new password.</div>
                        </div>
                        <div class="text-center">
                            <button class="btn  waves-effect waves-light">Submit</button>
                        </div>
                        Already a Member <a href ="signup.php">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>

</html>