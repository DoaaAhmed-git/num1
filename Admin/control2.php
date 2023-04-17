<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'kanddaca' );
if ($conn === false) {
    echo "database not connected";
}


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
      <h1>Orders</h1>
      
    </div><!-- End Page Title -->


 <section class="section dashboard">
      <div class="row">

<!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales">

                <div class="card-body">
                  <h5 class="card-title">Orders <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">The Order</th>
                        <th scope="col">Mount</th>
                        <th scope="col">Adress</th>
                        
                      </tr>
                   
                    </tbody>

 <?php  


            $as = "SELECT * FROM  book ";
            $result = $conn -> query($as);
                    if ($result -> num_rows > 0 ) {
                        while ($row = $result ->  fetch_assoc( )) {

                            

                $id1 = $row['id'];

             echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["name"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["phon"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["email"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["date"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["time"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$id1}' ><button class='btn btn-danger'>Delete</button></a></td>"."</tr>";
    
                    

        }

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
 
$query = "delete from book where id = {$id}";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 


}
        } ?>  

                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->


</div>
</section>

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