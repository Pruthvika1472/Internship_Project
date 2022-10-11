<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location:login.php');
    }
?>

<?php
$title = "| Home Page";
    require_once('common_files/header.php');
?>
<?php
    require_once('common_files/sidebar.php');
?>
<div class="wallpaper2">
<div class="indexContainer">
<div class="indexWrapper">
<h2 style="font-size:40px;">Qualesce Employee Data Management System</h2>
<img src="assets/img/Logo.svg" alt="Qualesce Logo" style="width:48%;height:30%;">
</div>
</div>
</div>
<?php
    require_once('common_files/footer.php');
?>
