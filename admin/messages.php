<!-- header -->
<?php
session_start();

if(empty($_SESSION['name'])){
  header('location:login.php');
  }
 include('inc/header.php');

 include('../config.php');
 $sql="SELECT * FROM `message` ORDER BY `id` DESC";
 $result=mysqli_query($conn,$sql);
 $row =mysqli_fetch_assoc($result);
 $date=$row['date'];
$d=date('Y-m-d', strtotime($date)); 


 ?>


<div class="container p-5 m-5">
<div class="d-flex justify-content-between ">

    <h3  class="tm-site-title" > Messsages  </h3>
    
    

</div>

<table class="table m-2 ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">Email</th>
        <th scope="col">Sub</th>
        <th scope="col">Date</th>
        <th scope="col">Message</th>
        <th scope="col- ">Phone</th>
        <th scope="col- "></th>
        <th scope="col ">Action</th>
        
      </tr>
    </thead>
    <tbody>
    <?php 
         
          $i=0;
          while($row =mysqli_fetch_assoc($result)){?>
        <tr>
        <th scope="row"><?php echo $i++?></th>
        <td ><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['sub']?></td>
        <td><?php echo $d?></td>
        <td><?php echo $row['message']?></td>
        <td><?php echo $row['phone']?></td>
        <td></td>

        <!-- <td> <a href="handlers/edit_project.php?id=<?php echo $row['id']?>" name="edit" class="btn btn-info"> Edit</a></td> -->
        <td> <a href="handlers/delete_message.php?id=<?php echo $row['id']?>"name ="delete" class="btn btn-danger">Delete</a></td>
      </tr>
 
    <?php  }?>
     
    </tbody>
    
</table>

<!-- footer -->
<?php include('inc/footer.php');?>
