<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../css/plugins.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div style="text-align: center;
    height: 158px;
    background: gray;
    margin-bottom: 30px;
    padding: 27px;">
        <h1>Insert Into Home Section</h1>


    </div>
    <?php
        $id=0;
    	$phone="";
        $number1="";
        $address="";
        $addressdetails="";
        $email="";
    	$emailaddress="";
        $db = mysqli_connect('localhost','root','','cc');
        if (!$db) {
        die("Connection failed: ". mysqli_connect_error());
    }
        //data validation
        if(isset($_POST['save'])){ // if submit is found
    		//$name = $_POST['name'];
            $phone = $_POST['phone'];
            $number1 = $_POST['number1'];
            $address= $_POST['address'];
             $addressdetails = $_POST['addressdetails'];
            $email = $_POST['email'];
            $emailaddress= $_POST['emailaddress'];
            $query = "INSERT INTO addresses(phone,number1,address,addressdetails,email,emailaddress) VALUES('$phone','$number1','$address','$addressdetails','$email','$emailaddress')";
            mysqli_query($db,$query); // database methods instance creation and access
            
            
        }
    ?>
    <?php
      if(isset($error)){
          echo "<span style='color: red'>".$error."</span>";
      }  
    ?>
    <div class="col-lg-12">
        <div class="no-margin-lr" id="success-contact-form">
        </div>
            <form id="contactForm" method="post" class="contact-form" action="contactcreate.php" align="center">
                <div class="row">
                    <div class="col-md-6"> 
                            <input class="medium-input" placeholder="Example: Phone*" required="required" id="phone" name="phone" type="text">
                    </div>
                    <div class="col-md-6"> 
                            <input class="medium-input" placeholder="Example: 8801753882282 *" required="required" id="number" name="number1" type="tel">
                    </div>
                    <div class="col-md-6"> 
                            <input class="medium-input" placeholder="Example: Address*" required="required" id="address" name="address" type="text">
                    </div>
                    <div class="col-md-6"> 
                            <input class="medium-input" placeholder="Example: 13/1, Ponitulla *" required="required" id="addressdetails" name="addressdetails" type="text">
                    </div>
                    <div class="col-md-6"> 
                            <input class="medium-input" placeholder="Example: Email*" required="required" id="email" name="email" type="text">
                    </div>
                    <div class="col-md-6"> 
                            <input class="medium-input" placeholder="Example: example@gmail.com *" required="required" id="emailaddress" name="emailaddress" type="email">
                    </div>
                    <div class="col-md-12 text-center"> 
                        <button class="btn white" name="save" type="submit">Add Address</button>
                    </div>
                                        
                </div>
            </form>
        
    </div>
     <a href="index.php"><button class="btn white">Go Home</button></a>

     <div style="
        text-align: center;
    background: gray;
    height: 100px;
    margin-top: 88px;
    padding-top: 122px;">
         &copy;Gonesh
     </div>

 </body>
</html>