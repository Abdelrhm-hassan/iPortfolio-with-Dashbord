<?php include('inc/header.php');

include 'config.php';

$id=$_GET['id'];
$sql="SELECT * FROM `project` WHERE `id`=$id ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$date=$row['date'];
$d=date('Y-m-d', strtotime($date)); 

?> 


  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Portfoio Details</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Portfoio Details</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="assets/img/portfolio/<?php echo $row['img'];?>" alt="<?php echo $row['name'];?>">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/portfolio/<?php echo $row['img1'];?>" alt="<?php echo $row['name'];?>">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/portfolio/<?php echo $row['img2'];?>" alt="<?php echo $row['name'];?> Images">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>:<?php echo $row['name'];?></li>
            <li><strong>Client</strong>: <?php echo $row['c_name'];?></li>
            <li><strong>Project date</strong>: <?php echo $d;?></li>
            <li><strong>Project URL</strong>: <a href="<?php echo $row['url'];?>"><?php echo $row['url'];?></a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Project Details</h2>
          <p>
          <?php echo $row['descr'];?>       
           </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<?php include('inc/footer.php');?>