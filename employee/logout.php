
<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location:login.php');
    }
?>
<?php
session_start();
if(isset($_SESSION['username'])){
    session_destroy();
    echo "<script>window.location.href='login.php'</script>";
    echo $_SESSION['username'];

}
else{
    echo "error";
}
?>