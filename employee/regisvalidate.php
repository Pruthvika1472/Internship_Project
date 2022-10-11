<?php
$title= "| Registration Validate";
  require_once('common_files/header.php');
?>
<?php

    include('dbconn.php');

    $empid=$_POST['empid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
 
   $sql = "SELECT * FROM regis WHERE email ='$email' AND phone='$phone';";
   $result = mysqli_query($conn,$sql);

    $rowcount = mysqli_num_rows($result);

    if($rowcount == 1) {
        $row = mysqli_fetch_assoc($result);
        echo "Yeah! User exists!!!";
  
    } else {
      
    }

?>


<?php
require('js/callbacks/script.php'); ?>





