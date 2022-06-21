<?php include('inc/header.php');
session_start();
if(empty($_SESSION['name'])){
header('location:login.php');
}
?>
<div class="container p-5 m-5 w-100">
<div class="d-flex justify-content-between ">

    <h3 class="tm-site-title" > Project / Create / New Project </h3>
    <a href="project.php" class="btn  btn-info" >Back</a>

</div>
<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Add Project</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
      
          <div class="col-xl-6 col-lg-6 col-md-12">
            <form action="handlers/add_project.php" enctype="multipart/form-data"method="post" class="tm-edit-product-form">
            
              <div class="form-group mb-3">
                <label for="name" > Project Name </label>
                <input id="name" name="name" type="text" class="form-control validate" required />
              </div>
             
              <div class="form-group mb-3">
                <label for="name" > Client Name </label>
                <input id="name" name="c_name" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" > Date  </label>
                <input id="name" name="date" type="date" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" >URL Link</label>
                <input id="name" name="url" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" > Image 2</label>
                <input id="name"  accept="image/*" name="img1" type="file" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" >Image 3</label>
                <input id="name" accept="image/*" name="img2" type="file" class="form-control validate" required />
              </div>
              
              <div class="form-group mb-3">
                <label for="description" >Description</label >
                <textarea class="form-control validate" name="descr" rows="3" required ></textarea>
              </div>
             
           
              
          </div>
          <!-- img 1 -->
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">

                  <p>
                      <input  class="btn btn-primary btn-block mx-auto" type="file"  accept="image/*" name="img" id="file"  onchange="loadFile(event)" style="display: none;">
                 </p>

                    <img id="output" class="tm-product-img-dummy mx-auto"  />


                 <p>
            <label class="btn btn-primary my-5 btn-block mx-auto" for="file" style="cursor: pointer;">Upload Image</label>
                  </p>

          </div>
      
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Add Project Now</button>
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
