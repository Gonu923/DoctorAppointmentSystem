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
        <div class="container">
          <div class="row">
             <?php 
              include "config.php";
              include "database.php";
              ?>
              <?php
                  $db = new Database();
                  $query = "SELECT *from recep";
                  $read = $db->select($query);
              ?>
                        
              <?php
                if(isset($_GET['msg'])){
                  echo "<span style='color: green'>".$_GET['msg']."</span>";
                }  
              ?>
            <table class="table">
              <thead class="thead-light">
                <tr align="center" style="font-size: 30px">
                  <th colspan="5">Available Receptionist</th>
                </tr>
                <tr>
                  <th width="20%">#</th>
                  <th width="20%">Doctor's name</th>
                  <th width="20%">Designation</th>
                  <th width="20%">Schedule</th>
                  <th width="20%">Contact no</th>
                </tr>
              </thead>
              <tbody>
                <?php if($read){ ?>
                  <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
                <tr>
                  <td scope="row"><?php echo $row['id']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['designation']; ?></td>
                  <td><?php echo $row['schedule']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                </tr>
                <?php } ?>
                  <?php } else{?>
                  <p>Data is not available.</p>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
          </div>          
        </div>
      </div>
    </div>    
  </div>

  <script type="text/javascript" src="../vendor\bootstrap\js\bootstrap.min.js"></script>
  <script type="text/javascript" src="../vendor\bootstrap\jquery\jquery.min.js"></script>
</body>
</html>