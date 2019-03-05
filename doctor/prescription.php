<!DOCTYPE html>
<html>
<head>
	<title>Prescription</title>
	<link rel="stylesheet" type="text/css" href="..\vendor\bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">

</head>
<body>
	<?php 
        include "config.php";
        include "database.php";
        ?>

        <?php 
         $id = $_GET['id'];
         $db = new database();
         $query = "SELECT *FROM patient WHERE id=$id";
         $getData = $db->select($query)->fetch_assoc();
         if(isset($_POST['save'])){
		 $problem = mysqli_real_escape_string($db->link, $_POST['problem']);
		 $psc = mysqli_real_escape_string($db->link, $_POST['psc']);
		 if($problem == '' || $psc == ''){
		  $error = "Field must not be Empty !!";
		 } else {
		  $query = "UPDATE patient SET problem  = '$problem', psc = '$psc' WHERE id = $id";
		  $update = $db->update($query);
		  
		 }
      

        }
        ?>

        <?php 
        if(isset($error)){
         echo "<span style='color:red'>".$error."</span>";
        }
        ?>
        <section class="pimfo">
        	
       
	<div class="container ">
		<div class="row boxs">
			<h1>Prescription</h1>	
			<h5>Patient's name: <?php echo $getData['name'];?></h5><br>
			<h5>Patient's age: <?php echo $getData['age']; ?></h5><br>
			<h5>Contact no: <?php echo $getData['num']; ?></h5><br>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<form class="formp" action="prescription.php?id=<?php echo $id;?>" method="post" >
			<div class="form-group">
			    <label for="formGroupExampleInput2">Problem name</label>
			    <input type="text" class="form-control" rows="10" placeholder="problem name"  name="problem" value="<?php echo $getData['problem']; ?>"></input>
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Test or medicine</label>
			    <input type="text" class="form-control" rows="10" name="psc" value="<?php echo $getData['psc']; ?>"></input>
			  </div>
			  <div class="form-group">
			    <input class="gonesh" type="submit" name="save" value="Add">
			  </div>
			  <button class="button">
			  	<a href="pps.php?id=<?php echo $id ?>">Print Prescription</a>		  	
			  </button>
			   <button class="button">
			  	<a href="index.php">Back</a>
			  	</button>		  	
			 
			</form>
		</div>
	</div>
</section>
  <script src="js/jquery.min.js"></script> 
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap.min.js"></script> 
	<script src="js/scrollIt.min.js"></script> 
	<script src="js/animated.headline.js"></script> 
	<script src="js/jquery.appear.js"></script> 
	<script src="js/jquery.count.min.js"></script> 
	<script src="js/owl.carousel.min.js"></script> 
	<script src="js/jquery.magnific-popup.min.js"></script> 
	<script src="js/jquery.stellar.min.js"></script> 
	<script src="js/isotope.pkgd.min.js"></script> 
	<script src="js/countdown.js"></script> 
	<script src="js/scripts.js"></script> 
</body>
</html>