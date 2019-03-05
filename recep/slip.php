<html>
<head>
    <title>Patient's Slip</title>
    <link rel="stylesheet" type="text/css" href="..\vendor\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../doctor/css/default.css">
</head>
<body>
    
        <div class="slipinfo">
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
        <h2>Serial number: <?php echo $getData['id'];?></h2>
        <br>
        <h2> Patient name: <?php echo $getData['name'];?></h2>
        <br>
       <h2> Contact number: <?php echo $getData['num']; ?></h2>
        <br>
       <h2> patient's age: <?php echo $getData['age']; ?></h2>
        <br>
        <h2>Patient's problem: <?php echo $getData['problem']; ?></h2>
        <br>


        <?php 
        if(isset($error)){
         echo "<span style='color:red'>".$error."</span>";
        }
        ?>
        </div>
       <div id="options">
    <input id="printpagebutton" type="button" value="Print Slip" onclick="myFunction()"/>
    </div>
    <script type="text/javascript">
    function myFunction(){
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
    }
</script>
</body>
<script type="text/javascript" src="../vendor\bootstrap\js\bootstrap.min.js"></script>
  <script type="text/javascript" src="../vendor\bootstrap\jquery\jquery.min.js"></script>
</html>