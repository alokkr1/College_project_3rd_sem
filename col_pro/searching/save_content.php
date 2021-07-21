<?php
	require 'conn.php';
	
	if(ISSET($_POST['save'])){
		$title = addslashes($_POST['title']);
		$content = addslashes($_POST['content']);
        $query="INSERT INTO `project`.`blog`(`blog_id`, `title`, `content`) VALUES('', '$title', '$content')";
		
		mysqli_query($conn,$query ) or die(mysqli_error($conn));
		
		header('location: search_index.php');
		
	}
?>