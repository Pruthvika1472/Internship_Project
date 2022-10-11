<?php
$title= "| Login Validate";
  require_once('common_files/header.php');
?>
<?php

    include('dbconn.php');
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username']= $_POST['username'];

    // echo $password."<br>";
    // echo $username."<br>";

   $sql = "SELECT * FROM regis WHERE email ='$username' AND BINARY password='$password';";
   $result = mysqli_query($conn,$sql);

   $rowcount = mysqli_num_rows($result);


    //echo $rowcount;

    if($rowcount == 1) {
      
        $row = mysqli_fetch_assoc($result);
        
        //echo "Yeah! User exists!!!";
        header('location:index.php');
    } else {
       // echo "User does not exists!!!";
       echo "Invalid credentials";
    }

    //print_r($result); 

    // from mysqli query
    echo "<br>";
    //print_r($row); from mysqli num rows

    // echo $result; from mysqli query ::
    
?>