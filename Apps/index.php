<!DOCTYPE html>
<html lang="en">
<head>
  <title>singin and signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../vendor\bootstrap\css\bootstrap.min.css">

</head>
<body>
<br>
<br>




	<div class="container">
		<div class="row">
					  
				   <div class="col-sm-6">
								
								<div class="panel-heading">Signup Form</div>
							<div class="panel-body">
							<?php 
							if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo "<mark>Your registration successfully done</mark>";
							} 
							?>
							  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data"  >
							  	<div class="form-group">
								  <label for="name">Full Name:</label>
								  <input type="text" class="form-control" name="fullname" id="name" placeholder="Enter full name">
								</div>
								<div class="form-group">
								  <label for="email">Username:</label>;
								  <input type="text" class="form-control" name="name" id="email" placeholder="Enter username">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
								</div>
								<div class="form-group">
								  <label for="pwd">Email:</label>
								  <input type="email" class="form-control" name="email" id="pwd" placeholder="Enter Email">
								</div>
								<div class="form-group">
								  <label for="pwd">Upload your iamge</label>
								  <input type="file" class="form-control" name="img" >
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
			      </div>
	   </div>
   </div>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
