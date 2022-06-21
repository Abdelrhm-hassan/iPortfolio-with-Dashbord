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



$name=$_POST['name'];
$client=$_POST['c_name'];
$description=$_POST['descr'];
$time=$_POST['date'];

$data=date('Y-m-d H:i:s');
$img=$_FILES['img'];
$img1=$_FILES['img1'];
$img2=$_FILES['img2'];


$url=$_POST['url'];
// save img
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/iPortfolio/assets/img/portfolio';
     $img_name=$_FILES['img']['name'];
$uploadfile = $uploaddir .'/'.basename($_FILES['img']['name']);
 
if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
   $msg = "File is valid, and was successfully uploaded.";
} else {
   $msg = "Error uploading!";
}
// save img1
$uploaddir2 = $_SERVER['DOCUMENT_ROOT'].'/iPortfolio/assets/img/portfolio';
     $img_name1=$_FILES['img1']['name'];
$uploadfile1 = $uploaddir2 .'/'.basename($_FILES['img1']['name']);
 
if (move_uploaded_file($_FILES['img1']['tmp_name'], $uploadfile1)) {
   $msg = "File is valid, and was successfully uploaded.";
} else {
   $msg = "Error uploading!";
}
// save img2
$uploaddir1 = $_SERVER['DOCUMENT_ROOT'].'/iPortfolio/assets/img/portfolio';
     $img_name2=$_FILES['img2']['name'];
$uploadfile2 = $uploaddir1 .'/'.basename($_FILES['img2']['name']);
 
if (move_uploaded_file($_FILES['img2']['tmp_name'], $uploadfile2)) {
   $msg = "File is valid, and was successfully uploaded.";
} else {
   $msg = "Error uploading!";
}
 



$sql="INSERT INTO `project` (`name`, `descr`, `c_name`, `date`, `img`, `url`,`img1`,`img2`)  VALUES ('$name', '$description', '$client', '$time','$img_name','$url','$img_name1','$img_name2') ";
$result=mysqli_query($conn, $sql);

if ($result) {

header("location:../project.php");

  }
  echo"faild";



  ?>