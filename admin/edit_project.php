<?php include('inc/header.php');
session_start();

if(empty($_SESSION['name'])){
header('location:login.php');
}

include('../config.php');
$id=$_GET['id'];
$sql="SELECT * FROM `project` WHERE `id`=$id";
$result=mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result);
$date=$row['date'];
$d=date('Y-m-d', strtotime($date)); 
?>
<div class="container p-5 m-5 w-100">
<div class="d-flex justify-content-between ">

    <h3 class="tm-site-title" > Project / Edit / <?php echo $row['name'] ?></h3>
    <a href="project.php" class="btn  btn-info" >Back</a>

</div>
<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Edit Project</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
      
          <div class="col-xl-6 col-lg-6 col-md-12">
            <form action="handlers/edit_project.php" enctype="multipart/form-data"method="post" class="tm-edit-product-form">
            
              <div class="form-group mb-3">
                <label for="name" > Project Name </label>
                <input id="name" name="name" value="<?php echo $row['name'] ?>" type="text" class="form-control validate" required />
                <input id="id" name="id" value="<?php echo $row['id'] ?>" type="text" class="form-control validate" required />
              </div>
             
              <div class="form-group mb-3">
                <label for="name" > Client Name </label>
                <input id="name" name="c_name" value="<?php echo $row['c_name'] ?>" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" >URL Link</label>
                <input id="name" value="<?php echo $row['url'] ?>"  name="url" type="text" class="form-control validate" required />
              </div>
              
              <div class="form-group mb-3">
                <label for="description" >Description</label >
                <textarea class="form-control validate" name="descr" rows="3" required ><?php echo $row['descr'] ?></textarea>
              </div>
             
           
              
          </div>
          <!-- img 1 -->
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">

                  <p>
                      <input  class="btn btn-primary btn-block mx-auto" type="file"  accept="image/*" name="img" id="file"  onchange="loadFile(event)" style="display: none;">
                 </p>

                    <img id="output"  src="../assets\img\portfolio/<?php echo $row['img'] ?>" class="tm-product-img-dummy mx-auto"  />


                 <p>
            <label class="btn btn-primary my-5 btn-block mx-auto" for="file" style="cursor: pointer;">Upload Image</label>
                  </p>

          </div>
      
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Save</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>



<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

</script>
<?php include('inc/footer.php');?>
