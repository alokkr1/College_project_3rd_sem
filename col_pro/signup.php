<?php
  session_start();
     $servername="localhost:3307";
     $username="root";
     $password="";
     $dbname="project";
     
     $conn=mysqli_connect($servername,$username,$password,$dbname);

     if(!$conn){
       die("connection failed" .mysqli_connect_error);  
     }

     if($_SERVER['REQUEST_METHOD'] == "POST")
       {
         //something was posted
         $username = $_POST['username'];
         $email=$_POST['email'];
         $password = $_POST['password'];
     
         if(!empty($username) && !empty($password) && !is_numeric($username))
         {
     
           //read from database
           $query = "SELECT * FROM signup where username = '$username' limit 1";
           $result = mysqli_query($conn, $query);
     
           if($result)
           {
             if($result && mysqli_num_rows($result) > 0)
             {
     
               $user_data = mysqli_fetch_assoc($result);
               
               if($user_data['password'] === $password)
               {
     
                 $_SESSION['user_id'] = $user_data['user_id'];
                 header("Location:home_page.php");
                 die;
               }
             } 
           }
           
           echo '<script>alert("wrong username or password!")</script>';
         }else
         {
           echo '<script>alert("wrong username or password!")</script>';
         }
       }
    
        
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/stylesheet2a.css">
    <link rel="shortcut icon" type="image/png" href="imgfav/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <script src="js1/main.js" defer></script>
    <title>login form</title>
</head>

<body>
    <div class="myClass">
        <div class="col-md-5 mb-2">
            <div class="card  form-dark">
                <div class="card-body ">
                    <form class=" needs-validation" novalidate action="signup.php" onsubmit="return needs-validation" method="POST">
                        <h1 class="text-center font-up font-bold py-4 black-text">LogIn</h1>
                        <center> <img src="image1/avatar.svg" alt="avtar" style="height: 150px;"></center>
                        <div class="md-form form-outline">
                            <i class="fa fa-user prefix green-text"></i>
                            <input type="text" id="orangeForm-name2" class="form-control" name="username" required>
                            <label for="orangeForm-name2" style="color: rgb(180, 15, 15);">Your name</label>
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
                            <label for="orangeForm-pass2" style="color: rgb(180, 15, 15);">Your password</label>
                            <div class="invalid-feedback">Please provide your password.</div>
                        </div>
                        <div class="text-center">
                            <button class="btn  waves-effect waves-light" value="Login">Submit</button>
                        </div>
                     <a href="register.php">Create New Account<a/>

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