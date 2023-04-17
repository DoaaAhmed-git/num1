

<?php




$conn = mysqli_connect('localhost' , 'root' , '' , 'file-management' );
if ($conn === false) {
    echo "database not connected";

}

?> 

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



<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Ace<span class="color-b">Frameworks</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            

          <li class="nav-item">
           
          </li>

          <li class="nav-item">
            
          </li>

          <li class="nav-item">
            
          </li>

          <li class="nav-item dropdown">
            
          </li>
          <li class="nav-item">
            
          </li>
        </ul>
      </div>

     

    </div>
  </nav><!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/banner.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br> 
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">You </span> Can 
                      <br> Find books here
                    </h1>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


         <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/bg-masthead.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br> 
                    </p>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/plan2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br> 
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">You </span> Can
                      <br> Find apps here
                    </h1>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-about-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br> 
                    </p>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    

    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">





<br><br><br>
 

 
<section class="news-grid grid">
<div class="row">

          <div class="col-md-12">

            <div class="title-wrap d-flex justify-content-between">

              <div class="title-box">

                <h2 class="title-a">Books & Apps</h2>
              </div>
              
            </div>
          </div>
        </div>
      <div class="container">


<?php  
 
 error_reporting(0);

if(isset($_POST['submit'])){


  $search = $_POST['search'];

  $query= "select * from files where name like '%$search%' ";
  $result = mysqli_query($conn, $query);
  
if(!$result){
die('query failed' . mysqli_error());

}
 $count = mysqli_num_rows($result);

 if ($count == 0) {

    
echo "      ";
 }


else{

//echo $search;


$files  = mysqli_fetch_all($result , MYSQLI_ASSOC);


if (isset($_GET['file_id'])) {

  $id = $_GET['file_id'];
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

}
}

  ?>



        <div class="row">
<?php foreach ($files as $file): ?>
          <div class="col-md-4">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="assets/img/property-8.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                  <a href="index.php?file_id=<?php echo $file['id'] ?>"  class="category-b" download= 'download'><?php echo $file['downloads']; ?>
                        <span class="bi bi-chevron-right">Download</span>
                      </a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="blog-single.html"><?php echo $file['name']; ?>
                        <br> </a>
                    </h2>
                  </div>
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








  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
     
        </div>
        
        
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
        
          </nav>
          <div class="socials-a">
         
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Doaa Ahmed</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

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
