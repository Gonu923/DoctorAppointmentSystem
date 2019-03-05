<!DOCTYPE html>
<html>
<head>
  <title>Doctor's Dashboard</title>
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
              <a class="nav-link" href="index.php">Patients List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Logout</a>
            </li>
          </ul>
      </div>
       <div class="col-md-10 valign display-table-cell box">
        <div class="container">
          <div class="row">
            <table class="table">
              <thead class="thead-light">
                <tr align="center" style="font-size: 25px;">
                  <th colspan="6">
                    
                    Patients List
                  </th>

                </tr>
                <?php 
                  include "config.php";
                  include "database.php";
                  ?>
                  <?php
                      $db = new Database();
                      $query = "SELECT *from patient";
                      $read = $db->select($query);
                  ?>
                            
                  <?php
                    if(isset($_GET['msg'])){
                      echo "<span style='color: green'>".$_GET['msg']."</span>";
                    }  
                  ?>
                <tr>
                  <th width="20%">Serial no</th>
                  <th width="20%">Patient's name</th>
                  <th width="20%">Contact number</th>
                  <th width="20%">Problem</th>
                  <th width="20%">Age</th>
                  <th width="20%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if($read){ ?>
                  <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
                <tr>
                  <th scope="row"><?php echo $row['id']; ?></th>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['num']; ?></td>
                  <td><?php echo $row['problem']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td><a href="prescription.php?id=<?php echo $row['id'] ?>"><?php if($row['psc']!=null){
                    echo "Checked";
                  }else{
                    echo "Unchecked";
                  } ?></a></td>
                </tr>
                <?php } ?>
                  <?php } else{?>
                  <p>Data is not available.</p>
                  <?php } ?>
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