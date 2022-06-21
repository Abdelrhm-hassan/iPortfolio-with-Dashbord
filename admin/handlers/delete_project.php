<?php
session_start();

if(empty($_SESSION['name'])){
    header('location:login.php');
    }
// DB connection
include '../../config.php';

if(!isset($_GET['delete'])){
    header("location:../project.php");

}
$id=$_GET['id'];
$sql= "DELETE FROM `project` WHERE `id`=$id";
$result=mysqli_query($conn, $sql);
if ($result) {
    header("location:../project.php");
    
      }
      echo"faild";
?>