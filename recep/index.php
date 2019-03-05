<!DOCTYPE html>
<html>
<head>
  <title>Receptionist Dashboard</title>
  <link rel="stylesheet" type="text/css" href="..\vendor\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
  <div class="container-fluid display-table">
    <div class="row display-table-row">
      <div class="col-md-2 valign display-table-cell" id="side-menu" align="center">
        <h1>Dashboard</h1>
         <img src="../img/pro.png" class="img-circle" alt="Cinque Terre" width="155" height="155" align="center">
         <label class="btn-primary col-sm-12">Control Panel</label>
         <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="show_doctors.php">Available Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="patient_list.php">Patients List</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="index.php">Add Patient</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../index.php">Logout</a>
            </li>
          </ul>
      </div>
      <div class="col-md-10 valign display-table-cell box">
        <div class="row">
          <div class="container panel-info">
            <div class="row jumbotron">
              <div class="col-sm-4" style="border: 1px dashed green;">
                <h2>Add Patient</h2>
                <?php
                  $name="";
                  $num="";
                  $problem="";
                  $age="";
                  $db = mysqli_connect('localhost','root','','cms');
                    if (!$db) {
                      die("Connection failed: " . mysqli_connect_error());
                    }
                    //data validation
                    if(isset($_POST['save'])){ 
                        $name = $_POST['name'];
                        $num= $_POST['num'];
                        $problem= $_POST['problem'];
                        $age= $_POST['age'];
                        $query = "INSERT INTO patient(name, num, problem, age) VALUES('$name', '$num', '$problem','$age')";
                        mysqli_query($db,$query); // database methods instance creation and access
                    }
                ?>
                <?php
                  if(isset($error)){
                      echo "<span style='color: red'>".$error."</span>";
                  }  
                ?>
                <form class="form-horizontal" method="post" action="index.php">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Patient name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="num">Contact number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="address" placeholder="Enter phone number" name="num">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="problem">Problem</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="category" placeholder="Enter problem name" name="problem">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="age">Age:</label>
                    <div class="col-sm-10">          
                      <input type="number" class="form-control" id="pwd" placeholder="Enter patient's age" name="age">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="save" class="btn btn-primary" name="save">Add patient</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>

  <script type="text/javascript" src="../vendor\bootstrap\js\bootstrap.min.js"></script>
  <script type="text/javascript" src="../vendor\bootstrap\jquery\jquery.min.js"></script>
</body>
</html>