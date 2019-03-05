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
         <?php   }?>
         <label class="btn-primary col-sm-12">Control Panel</label>
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
    
    <div id="menu1" class="tab-pane">
      <h3>Showing profile</h3>
    
    <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Full name</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
  
  <?php 
  foreach($profile->data as $prof)
  {?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['fullname']; ?></td>
        <td><?php echo $prof['name']; ?></td>
        <td><?php echo $prof['email'];?></td>
        <td><img src="../img/<?php echo $prof['img'];  ?>" alt="" width="35px" height="30px" /></td>
      </tr>
    </tbody>
  <?php   }?>
  </table>
    
    
    
    
    
    
    
    
    
    
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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