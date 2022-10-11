<?php

    session_start();
    include('dbconn.php');

    $email = $_POST['email'];
    $newpass = $_POST['npass'];
    $cnfpass = $_POST['cpass'];

    $sql = "SELECT * FROM regis WHERE email = '$email';";

    $result = mysqli_query($conn, $sql);

    $rowcount = mysqli_num_rows($result);

    if($rowcount == 1) {
        $check = strcmp($newpass,$cnfpass);
        if($check == 0) {
            $sql = "UPDATE regis SET password = '$newpass';";
            mysqli_query($conn,$sql);
            header('location:login.php');
        } else {
            header('location:login.php');
        }
        
    } else {
        header('location:login.php');
    }

?>