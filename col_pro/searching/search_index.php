<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="shortcut icon" type="image/png" href="../imgfav/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script defer src="https://kit.fontawesome.com/78a52bcfab.js" crossorigin="anonymous"></script>
    <title>Searching</title>

	<style>
		body{
			background-image: url("css/v.jpg");
			background-size:cover;
		}
	</style>
</head>
<body>
  
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="../home_page.php"><h1>Home Page</h1></a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary"><h1> Search Movies ,Tech, Games</h1> </h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><h2>Add Content</h2></button>
			<br />
			<br />
			<form class="form-inline" method="POST" action="search_index.php"  >
				<div class="input-group col-md-12 " >
					<input type="text" class="form-control" placeholder="Search here..." name="keyword"  style="height:45px;" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
					<span class="input-group-btn" >
						<button class="btn btn-primary" name="search" style="height:45px; width:70px;"><div style="font-size:15px;">Search</div><span class="glyphicon glyphicon-search" ></span></button>
					</span>
				</div>
			</form>
			<br />
			<?php include 'search.php'?>
		</div>
	</div>
	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<form action="save_content.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="title" required="required"/>
							</div>
							<div class="form-group">
								<label>Content</label>
								<textarea class="form-control" style="resize:none; height:250px;" name="content" required="required"></textarea>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
   <script src="js/jquery-3.2.1.min.js"></script>
   <script src="js/bootstrap.js"></script>
  
</body>
</html>