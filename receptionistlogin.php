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
				<h1>Receptionist Login</h1>
			</div>
		</div>
	</div>
	<div class="container jumbotron" >
		<div class="row">
			<div class="col">
				<?php 
                  include "config.php";
                  include "database.php";
                  ?>
                  <?php
                      $db = new Database();
                      $query = "SELECT *from recep";
                      $getData = $db->select($query)->fetch_assoc();
                      if (isset($_POST['btnl'])) {
                      	if ($getData['name']==$_POST['name'] && $getData['pwd']==$_POST['pwd']) {
                      		header("Location: recep/index.php?msg=".urlencode('Welcome Mr '.$getData['name']));
            exit();
                      	}
                      	else {
                      		echo "Username or password doesn't exist!!";
                      	}

                      }
                  ?>
                            
                  <?php
                    if(isset($_GET['msg'])){
                      echo "<span style='color: green'>".$_GET['msg']."</span>";
                    }  
                  ?>
				<form action="receptionistlogin.php" method="post">
				<div class="form-group">
				    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Receptionist username">
				  </div>
				  <div class="form-group">
				    <input type="password" name="pwd" class="form-control" id="formGroupExampleInput2" placeholder="Receptionist password">
				</div>
				 <div class="form-group">
				    <input type="submit" name="btnl" class="form-control btn-primary" id="formGroupExampleInput2" value="Login">
				</div>
			</form>
			</div>
		</div>		
	</div>
	<script type="text/javascript" src="vendor\bootstrap\js\bootstrap.min.js"></script>
	<script type="text/javascript" src="vendor\bootstrap\jquery\jquery.min.js"></script>
</body>
</html>