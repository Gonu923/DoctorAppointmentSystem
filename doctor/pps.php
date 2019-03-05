<!DOCTYPE html>
<html>
<head>
	<title id="t">Presscription</title>
    <link rel="stylesheet" type="text/css" href="css/default.css">
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
          ?>

        <?php 
        if(isset($error)){
         echo "<span style='color:red'>".$error."</span>";
        }
        ?>
	<div class="container jumbotron">
		<div class="row boxss">
			<h1>Prescription</h1>	
			<h5>Patient's name: <?php echo $getData['name'];?></h5>
			<h5>Patient's age: <?php echo $getData['age']; ?></h5>	
			<h5>Contact no: <?php echo $getData['num']; ?></h5>
			<h5>Problem name: <?php echo $getData['problem']; ?></h5>
			<h5>Test or medicine: <?php echo $getData['psc']; ?></h5>
		</div>
	</div>
	<div id="options">
	<input id="printpagebutton" type="button" value="Print Prescription" onclick="myFunction()"/>
	</div>
	<script type="text/javascript">
	function myFunction(){
		var printButton = document.getElementById("printpagebutton");
		var tt = document.getElementById("t");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        tt.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
	}
</script>

</body>
</html>