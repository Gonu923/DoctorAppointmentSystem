<?php
include("../Apps/users.php");
$name=$_SESSION['name'];
$profile=new users;
$profile->user_profile($name);
//print_r($profile->user_profile);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="..\vendor\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
  <div class="container-fluid display-table">
    <div class="row display-table-row">
      <div class="col-md-2 valign display-table-cell" id="side-menu" align="center">
        <h1>Dashboard</h1>
<?php 
  foreach($profile->data as $prof)
  {?>
         <img src="../img/<?php echo $prof['img'];  ?>" class="img-circle" alt="Cinque Terre" width="155" height="155" align="center">
         <?php   }?>         <label class="btn-primary col-sm-12">Control Panel</label>
         <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="check_doc.php">Check Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="check_rec.php">Check Receptionists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="check_em.php">Check Employees</a>
            </li>
            <li>
              <a class="nav-link" data-toggle="tab" href="instaff.php">Insert Staff</a>
            </li>
             <li>
              <a class="nav-link" data-toggle="tab" href="../index.php">logout</a>
            </li>
          </ul>
      </div>
      <div class="col-md-10 valign display-table-cell box">
        <div class="row">
          <div class="container panel-info">
            <div class="row jumbotron">
              <div class="col-sm-4" style="border: 1px dashed green;">
                <h2>Add Doctor</h2>
                <?php
                  $name="";
                  $address="";
                  $designation="";
                  $schedule="";
                  $pwd="";
                  $db = mysqli_connect('localhost','root','','cms');
                    if (!$db) {
                      die("Connection failed: " . mysqli_connect_error());
                    }
                    //data validation
                    if(isset($_POST['save'])){ 
                        $name = $_POST['name'];
                        $address= $_POST['address'];
                        $designation= $_POST['designation'];
                        $schedule= $_POST['schedule'];
                        $pwd= $_POST['pwd'];
                        $query = "INSERT INTO doctor_info(name, address, designation, schedule, pwd) VALUES('$name', '$address', '$designation','$schedule','$pwd')";
                        mysqli_query($db,$query); // database methods instance creation and access
                        
                        
                    }
                ?>
                <?php
                  if(isset($error)){
                      echo "<span style='color: red'>".$error."</span>";
                  }  
                ?>
                <form class="form-horizontal" method="post" action="instaff.php">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Phone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="address" placeholder="Enter phone number" name="address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="designation">Designation</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="category" placeholder="Enter designation" name="designation">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="scd">Schudule:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="scd" placeholder="Enter Schudule" name="schedule">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">          
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="save" class="btn btn-primary" name="save">Submit</button>
                    </div>
                  </div>
                </form>
              </div>


              <div class="col-sm-4" style="border: 1px dashed green;">
                <h2>Add Receptionist</h2>
                 <?php
                  $name="";
                  $address="";
                  $designation="";
                  $schedule="";
                  $pwd="";
                  $db = mysqli_connect('localhost','root','','cms');
                    if (!$db) {
                      die("Connection failed: " . mysqli_connect_error());
                    }
                    //data validation
                    if(isset($_POST['save2'])){ 
                        $name = $_POST['name'];
                        $address= $_POST['address'];
                        $designation= $_POST['designation'];
                        $schedule= $_POST['schedule'];
                        $pwd= $_POST['pwd'];
                        $query = "INSERT INTO recep(name, address, designation, schedule, pwd) VALUES('$name', '$address', '$designation','$schedule','$pwd')";
                        mysqli_query($db,$query); // database methods instance creation and access
                        
                        
                    }
                ?>
                <?php
                  if(isset($error)){
                      echo "<span style='color: red'>".$error."</span>";
                  }  
                ?>
                <form class="form-horizontal" method="post" action="instaff.php">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Phone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="address" placeholder="Enter phone number" name="address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="designation">Designation</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="category" placeholder="Enter designation" name="designation">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="scd">Schudule:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="scd" placeholder="Enter Schudule" name="schedule">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">          
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="save" class="btn btn-primary" name="save2">Submit</button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col-sm-4" style="border: 1px dashed green;">
                <h2>Add Worker</h2>
                <?php
                  $name="";
                  $address="";
                  $designation="";
                  $schedule="";
                  $pwd="";
                  $db = mysqli_connect('localhost','root','','cms');
                    if (!$db) {
                      die("Connection failed: " . mysqli_connect_error());
                    }
                    //data validation
                    if(isset($_POST['save3'])){ 
                        $name = $_POST['name'];
                        $address= $_POST['address'];
                        $designation= $_POST['designation'];
                        $schedule= $_POST['schedule'];
                        $pwd= $_POST['pwd'];
                        $query = "INSERT INTO worker(name, address, designation, schedule, pwd) VALUES('$name', '$address', '$designation','$schedule','$pwd')";
                        mysqli_query($db,$query); // database methods instance creation and access
                        
                        
                    }
                ?>
                <?php
                  if(isset($error)){
                      echo "<span style='color: red'>".$error."</span>";
                  }  
                ?>
                <form class="form-horizontal" method="post" action="instaff.php">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Phone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="address" placeholder="Enter phone number" name="address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="designation">Designation</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="category" placeholder="Enter designation" name="designation">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="scd">Schudule:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="scd" placeholder="Enter Schudule" name="schedule">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">          
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="save" class="btn btn-primary" name="save3">Submit</button>
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