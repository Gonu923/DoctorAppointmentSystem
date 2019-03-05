<!DOCTYPE html>
<html>
<head>
	<title>CMS Admin login</title>
	<link rel="stylesheet" type="text/css" href="vendor\bootstrap\css\bootstrap.min.css">
</head>
<body>
	<div class="container jumbotron">
		<div class="row" align="center">
			<div class="col">
				<h1>Admin Login</h1>
			</div>
		</div>
	</div>
	<div class="container jumbotron" >
		<div class="row">
			<div class="col">
				<div class="panel panel-info">
                      <div class="panel-heading">Signin Form</div>
						<div class="panel-body">
						<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						
						
						?>
							  <form role="form" action="Apps/signin_sub.php" method="post">
								<div class="form-group">
								  <label for="email">Username:</label>
								  <input type="text" class="form-control" name="name" id="email" placeholder="Enter Username">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
					  </div>
			<div class="form-group">
				    <a href="Apps/index.php" class="form-control btn-primary" id="formGroupExampleInput2">Sign up</a>
				</div>
			</div>
		</div>		
	</div>
	<script type="text/javascript" src="vendor\bootstrap\js\bootstrap.min.js"></script>
	<script type="text/javascript" src="vendor\bootstrap\jquery\jquery.min.js"></script>
</body>
</html>