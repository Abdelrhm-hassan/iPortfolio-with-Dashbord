<!-- header -->
<?php
session_start();

if(empty($_SESSION['name'])){
  header('location:login.php');
  }
 include('inc/header.php');

 include('../config.php');
 $sql="SELECT * FROM `project` ORDER BY `id` DESC";
 $result=mysqli_query($conn,$sql);
 $row =mysqli_fetch_assoc($result);
 $date=$row['date'];
 $d=date('Y-m-d', strtotime($date)); 
 


 ?>


<div class="container p-5 m-5">
<div class="d-flex justify-content-between ">

    <h3  class="tm-site-title" > Project  </h3>
    
    <a href="add_project.php" class="btn  btn-info" >Add Project</a>

</div>

<table class="table m-2 ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">img</th>
        <th scope="col">name</th>
        <th scope="col">Client</th>
        <th scope="col">Url</th>
        <th scope="col">Date</th>
        <th scope="col">Desc</th>
        <th scope="col- "></th>
        <th scope="col ">Action</th>
        
      </tr>
    </thead>
    <tbody>
    <?php 
         
          $i=1;
          while($row =mysqli_fetch_assoc($result)){?>
        <tr>
        <th scope="row"><?php echo $i++?></th>
        <td><img class="rounded-circle" src="../assets\img\portfolio/<?php echo $row['img']?>" height="60px" alt=""></td>
        <td ><?php echo $row['name']?></td>
        <td><?php echo $row['c_name']?></td>
        <td><?php echo $row['url']?></td>
        <td><?php echo $d?></td>
        <td><?php echo $row['descr']?></td>
        <td> <a href="edit_project.php?id=<?php echo $row['id']?>" name="edit" class="btn btn-info"> Edit</a></td>
        <td> <a href="handlers/delete_project.php?id=<?php echo $row['id']?>"name ="delete" class="btn btn-danger">Delete</a></td>
      </tr>
 
    <?php  }?>
     
    </tbody>
    
</table>

<!-- footer -->
<?php include('inc/footer.php');?>
