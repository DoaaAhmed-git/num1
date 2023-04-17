
<?php
$conn = mysqli_connect('localhost' , 'root' , '' , 'file-management' );
if ($conn === false) {
    echo "database not connected";
}

?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ace</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.7.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<div>
  <!-- ======= Property Search Section ======= -->
 <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Gido<span class="color-b">Madani</span></a>
  <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

         <a href=""><li class="nav-item">
          Home
         </li></a> 

         <a href=""><li class="nav-item">
          Books
          </li></a> 

 

<a href=""><li class="nav-item">
          Marine Services
          </li></a>
        </ul>
      </div>
    </div>
  </nav>
</div>
  <p></p>
 <br><br><br><br><br><br>
  <div>
      <form  action="admin.php" method="post" enctype="multipart/form-data" class="form-a" >
        <div class="row" dir="rtl">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              
              <input type="date" name="date" class="form-control form-control-lg form-control-a" placeholder="التاريخ..">
              <input type="text" name="place" class="form-control form-control-lg form-control-a" placeholder="مكان الرحلة ..">
              <input type="text" name="price" class="form-control form-control-lg form-control-a"  placeholder="السعر..">
             

            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" name="submit" class="btn btn-b">Done</button>
          </div>
        </div>


         <?php 



    if(isset($_POST['submit'])){

$fname = $_POST['date'];
$age=$_POST["place"];
$natu=$_POST['price'];


if (!empty($fname) && !empty($age) && !empty($natu) ) {
    # code...


$query = "INSERT INTO files (date, place, price) VALUES('$fname' ,'$age' , '$natu' )";



$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}

}
else
{
    echo "<script>alert('نسيت حاجة فاضية يا جدو') </script>";
}
  }  
     ?>


      </form>
  
</div>

  <!-- ======= Intro Section ======= -->
  
  


 <?php
$sql = "SELECT * FROM files ";



$result = mysqli_query($conn, $sql);
$files  = mysqli_fetch_all($result , MYSQLI_ASSOC);


if (isset($_GET['file_id'])) {

  $id = $_GET['file_id'];
  $id1 = $row['id'];
  $sql = "SELECT * FROM files WHERE id = $id";
  $result = mysqli_query($conn , $sql);
  $file = mysqli_fetch_assoc($result);


  $filepath= 'uploads/'.$file['name'];
  if (file_exists($filepath)) {
    readfile('uploads/'. $file['name']); 
    $newCount = $file['downloads'] + 1;
    $updatequery = "UPDATE files SET downloads = $newCount WHERE id = $id";
    mysqli_query($conn, $updatequery);
    exit;
  
}
}

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
 
$query = "delete from files where id = {$id1}";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 


}
      ?>



 <br><br><br>
 

 
<section class="news-grid grid" dir="rtl">
<div class="row">

          <div class="col-md-12" style="text-align: center;">

            <div class="title-wrap d-flex justify-content-between">

              <div class="title-box" style="text-align: center;">

                <h2 class="title-a" >الرحلات امسح القدام يا بووس:-</h2>
              </div>
              
            </div>
          </div>
        </div>
      <div class="container">

        <div class="row" dir="rtl">
<?php foreach ($files as $file): ?>
          <div class="col-md-4">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="assets/img/property-8.jpg" alt="" class="img-b img-fluid" height="200px">
              </div>
              <div class="card-overlay">
              
                <div class="card-header-b">
                  <div class="card-category-b">
                  <h2 class="title-2">
                      <?php echo $file['place']; ?>
                        <br> 
                    </h2>
                    <h2 class="title-2">
                      <?php echo $file['price']; ?>
                        <br> 
                    </h2>
                  <h2 class="title-2">
                      <?php echo $file['date']; ?>
                        <br> 
                    </h2>
      
                  </div>
                  <div class="card-title-b">
                  
                  </div>
             <?php     
                    echo "<a  href='?delete={$id1}' class='category-b' >".
                       "<span class='bi bi-chevron-right'>امسح اكسح قشششش</span>".
                      "</a>"
?>
                  <div class="card-date">
                    <span class="date-b"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;?>
          </div>
          
          </div>
          </section>



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>