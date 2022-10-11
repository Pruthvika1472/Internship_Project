<?php
require "dbconn.php";

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
require 'vendor/autoload.php';

 use PHPMailer\PHPMailer\PHPMailer;

 use PHPMailer\PHPMailer\SMTP;

 use PHPMailer\PHPMailer\Exception;

if(isset($_POST['action'])){
    if($_POST['action']=="insert"){
        insert();
    }
    else if($_POST['action']=="edit"){
        edit();
    }
    else{
        delete();
    }
}
function insert(){
    global $conn;
    $empid=$_POST['empid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
   // $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $query="INSERT INTO `users_details` (`user_Id`, `empid`, `user_name`, `user_email`, `user_phone`, `user_address`, `time`) VALUES (NULL, '$empid', '$name', '$email', '$phone', '$address', current_timestamp());";
    mysqli_query($conn,$query);
    echo "Inserted Sucessfully";



     $mail = new PHPMailer();
     $mail->isSMTP();
     $mail->isHTML(True);
     $mail->Host = "smtp.gmail.com";
     $mail->SMTPAuth = "true";
     $mail->SMTPSecure = "tls";
     $mail->Port = "587";
     $mail->Username = "pruthvika2001@gmail.com";
     $mail->Password = "otwukdzcjjpdmwrc";
     $mail->Subject = "Qualesce employee confirmation!";
     $mail->setFrom("pruthvika2001@gmail.com", 'Pruthvika S');
     $mail->Body = 'Your Data has been updated Sucessfully!';
     $mail->addAddress($email);
     if($mail->send()) {
        echo 'Message has been sent';
     } else {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }
}
function edit(){
    global $conn;
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $query="UPDATE users_details SET user_name='$name',user_email='$email' ,user_phone='$phone',user_address='$address' WHERE user_Id=$id";
    mysqli_query($conn,$query);
    echo "Updated Sucessfully";
}

function delete(){
    global $conn;
    $id=$_POST["action"];
    $query="DELETE FROM users_details WHERE user_Id=$id";
    mysqli_query($conn,$query);
    echo "Deleted Sucessfully";
}
?>