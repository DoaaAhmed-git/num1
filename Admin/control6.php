<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'kanddaca' );
if ($conn === false) {
    echo "database not connected";
}
else
 

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kandaka</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon." rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php 
include 'header.html';

 ?>
  </aside><!-- End Sidebar-->

 <main id="main" class="main">

    <div class="pagetitle">
      <h1></h1>
      
    </div><!-- End Page Title -->


 <section class="section">
     

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Menu</h5>

              <!-- General Form Elements -->
              <form method="POST" action="" enctype="multipart/form-data" >

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Dish Part</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="part">
                      
                      <option value="MEATS">MEATS</option>
                      <option value="DESSERTS">DESSERTS</option>
                      <option value="VEGTABLE">VEGTABLE </option>
                      <option value="APPETIZERS">APPETIZERS</option>
                      <option value="BEVERAGES">BEVERAGES</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"  >Dish Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"  >Dish Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="price">
                  </div>
                </div>
                
              
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label"  >Dish Photo</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file"  name="uploadfile" value=""  id="formFile">
                  </div>
                </div>
               

                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label"  >Dish Details</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="message"></textarea>
                  </div>
                </div>
                
                

                <div class="row mb-3">
                  
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="go">Add</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

       

 <?php 



if (isset($_POST['go'])) {

$monasaba = $_POST["name"];
$topic = $_POST["price"];
$part = $_POST["part"];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "C:/xampp/htdocs/Knadaka".$filename;

$hall = $_POST["message"];


if (!empty($monasaba) && !empty($topic) && !empty($filename) && !empty($hall) && !empty($part)) {
 


$query = " INSERT INTO menu (name , price , photo , message , part) values ('$monasaba','$topic','$filename','$hall','$part')";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 

 if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
 

 echo  "<script>alert('Sucssecfully adding dish') </script> ";

}
else{

echo "";

}

   }    ?> 



</main>



  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>D&H</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="doaa.ahmed9977@gmail.com">D&H</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>