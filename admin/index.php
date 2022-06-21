<!-- include header -->
<?php include('inc/header.php');
session_start();

if(empty($_SESSION['name'])){
    header('location:login.php');
    }
?>

<!-- include foooter -->
<?php include('inc/footer.php');?>
