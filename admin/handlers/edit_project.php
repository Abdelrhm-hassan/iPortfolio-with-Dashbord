<?php
session_start();

if(empty($_SESSION['name'])){
   header('location:login.php');
   }
// DB connection
include '../../config.php';

if(!isset($_POST['submit'])){
    header("location:../project.php");
}
$id=$_POST['id'];



$name=$_POST['name'];
$client=$_POST['c_name'];
$description=$_POST['descr'];
$data=date('Y-m-d H:i:s');
$img=$_FILES['img'];

$url=$_POST['url'];

// save img
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/iPortfolio/assets/img/portfolio';
     $img_name=$_FILES['img']['name'];
$uploadfile = $uploaddir .'/'.basename($_FILES['img']['name']);
echo $img_name;
 
if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
   $msg = "File is valid, and was successfully uploaded.";
} else {
   $msg = "Error uploading!";
}
 



$sql="UPDATE `project` SET `name` = '$name', `descr` = '$description', `url` = '$url',`c_name` = '$client', `img` = '$img_name' WHERE `project`.`id` = $id 
";
$result=mysqli_query($conn, $sql);

if ($result) {

header("location:../project.php");

  }
  echo"faild";



  ?>