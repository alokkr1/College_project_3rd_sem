<?php

function check_login($conn)
{

	if(isset($_SESSION['user_id']))
	{

		$S_No = $_SESSION['user_id'];
		$query = "SELECT* from 'signup' where user_id = '$S_No' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
    else{
        echo"not connected";
        //redirect to login

      header("Location: ../signup.php");
	  die;
    }

	

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,7);
	}

	return $text;
}