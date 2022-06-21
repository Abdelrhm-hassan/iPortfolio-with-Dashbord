<?php
include('../../config.php');
$sql="SELECT * FROM `admin`";

$result=mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result);
$username=$_POST['username'];
$password=$_POST['password'];
// echo $username,$password;

if(!isset($_POST['submit']))
{
    header('location:../login.php');

}
if($row['username']==$username&&$row['password']==$password){
    
    session_start();
  
    $_SESSION['name']= $row['username'];
    $_SESSION['password']= $row['password'];
    header('location:../index.php');
}else{

    session_start();
    $_SESSION['error']="Please Enter Avild User Name and Password ";
    header('location:../login.php');

}





?>