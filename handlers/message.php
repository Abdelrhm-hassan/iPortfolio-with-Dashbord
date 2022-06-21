

<?php

// DB connection
include '../config.php';
if(!isset($_POST['submit'])){
    header("location:../index.php");
}


$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$message=$_POST['message'];
$phone=$_POST['phone'];

$sql="INSERT INTO `message` (`name`, `email`, `sub`, `message`, `phone`) VALUES ('$name', '$email', '$sub', '$message', '$phone')";
$result=mysqli_query($conn, $sql);


if ($result) {

    $to = "masry1263@gmail.com";
$subject = "رسالة جديدة من موقعي ";

$message = "
<html>
<head>
<title>رسالة مهمة من موقعي</title>
</head>
<body>

<h3>
رسالة مهمة من الموقع الخاص بي eng-abdo.ml
</h3>
<h2>
المرسل : 
    ".$name."
    </h2>
<h2>
    عنوان الرسالة : 
    ".$sub."
    </h2>
<h2>
    رقم التليفون : 
    ".$phone."
    </h2>
    
    <h4>
 الرسالة  : 
    ".$message."
    </h4>
    <h3>

يجب الاطلاع عليها فاسرع وقت من هنا :
http://eng-abdo.ml/admin/messages.php 

</h3>
<h2>
<strong>
مع كامل الاحترام والتقدير مني #ابومالك#
</strong>

</h2>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <abd0@eng-abdo.ml>' . "\r\n";
$headers .= 'Cc: abd0@eng-abdo.ml' . "\r\n";

mail($to,$subject,$message,$headers);
 
    header("location:../index.php");

  }

  echo"faild";
 
 
