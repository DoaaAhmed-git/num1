
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
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->


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



  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse" >
    <div class="title-box-d">
    
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form" dir="rtl">
     
        <div class="row">
          <div class="col-md-12 mb-2">
            
              <h3>الرحلات المحجوزة</h3>
            
          </div>
          <div class="col-md-12">
            +100
          </div>
        </div>
     
    </div>
  </div><!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Blue<span class="color-b">Shark</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

         <a href=""><li class="nav-item">
          Home
         </li></a> 

         <a href="Service.php"><li class="nav-item">
           
           Our Services
          </li></a> 

<a href="#about"><li class="nav-item">
            About Us
          </li></a>
          
<a href="#contact"><li class="nav-item">
           Contact Us 
          </li>
</a>

<a href="boook.php"><li class="nav-item">
           Galary 
          </li>
</a>

        </ul>
      </div>

     
    </div>
  </nav><!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/bluee.jpg)">
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
                      <span class="color-b">Diving </span> &
                      <br> Marine Service
                    </h1>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


         <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/bluee2.jpg)">
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


      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide3.jpg)">
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
                    <h1 class="intro-title mb-4" dir="rtl" >
                      <span class="color-b">للغوص السياحي </span> 
                      <br> و الخدمات البحرية
                    </h1>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide4.jpg)">
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

    <!-- ======= Services Section ======= -->
   <!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->

 <?php
$sql = "SELECT * FROM files ";
$result = mysqli_query($conn, $sql);
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
      ?>



 <br><br><br>
 

 
<section class="news-grid grid">
<div class="row">

          <div class="col-md-12">

            <div class="title-wrap d-flex justify-content-between">

          
          </div>
          <br><br><br><br>
          <div class="col-sm-12 position-relative" dir="rtl">
               <div class="sinse-box"  style="border-radius: 30px;">
              <h3 class="sinse-title">
                <br>زمن الرحلة 
              </h3>
              <p>قيام الصباح الساعة السادسة و النصف صباحا حتى المغرب <br>
              محسوب زمن الذهاب و الاياب رحلة شاملة جولة سياحية داخل الجزيرة وجبة<br>
               و مشروبات ساخنة و باردة مصحوبة ببرنامج اسنوركل شامل التصور تحت الماء </p>
            </div>
</div>
            </div>
          </div>
        </div>
<br><br><br>



              <div class="title-box" >

                <h2 class="title-a"  style="text-align: center;" >New Trips</h2>
              </div>

      <div class="container">

        <div class="row" dir="rtl">
<?php foreach ($files as $file): ?>
          <div class="col-md-4">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="assets/img/back.png" alt="" class="img-b img-fluid" height="200px">
              </div>
              <div class="card-overlay" >
              <h1  style="text-align: center;">
                      <?php echo $file['place']; ?>
                      
                    </h1>
                <div class="card-header-b">
                  <div class="card-category-b">
                  
                    <h2>
                      <?php echo $file['price']; ?>
                        <br> 
                    </h2>
                  <h2 >
                      <?php echo $file['date']; ?>
                        <br> 
                    </h2>
      
                  </div>
                
                     <a href="book.php" class="category-b">احجز الان</a>
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

<!-- The Modal -->




<section class="intro-single" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">We Do Great Marine Services As Freelancer, Diving & Camping Trips</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
           
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="assets/img/blue38.jpg" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">Blue Shark
                <br> Sinse 2017
              </h3>
              <p>Diving & Camping</p>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="assets/img/blue38.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                  <span>Blue Shark </span>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">
                    <span class="color-d">Mr.Gido</span> Madani
                  
                  </h3>
                </div>
                <p class="color-text-a" dir="rtl">
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget
                  consectetur sed, convallis
                  at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                  ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                  neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                </p>
                <p class="color-text-a" dir="rtl">
                نضم نضم نضم نضم نضم نضم و كسييييير تلج كسيييير تلج و  نضم نضم نضم نضم نضم نضم و كسييييير تلج كسيييير تلج و هكدا نضم نضم نضم نضم نضم نضم و كسييييير تلج كسيييير تلج و هكدا نضم نضم نضم نضم نضم نضم و كسييييير تلج كسيييير تلج و هكدا نضم نضم نضم نضم نضم نضم و كسييييير تلج كسيييير تلج و هكدانضم نضم نضم نضم نضم نضم و كسييييير تلج كسيييير تلج و هكدا نضم نضم نضم نضم نضم نضم و كسييييير تلج كسيييير تلج و هكدا نضم نضم نضم نضم نضم نضم و كسييييير تلج كسيييير تلج و هكدا
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =======Team Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Meet Our Team</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="assets/img/blue38.jpg" alt="" class="img-d img-fluid" style="height: 400px;">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">Gido Madani
                        <br> Mohamed</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +54 356 945234
                    </p>
                    <p>
                      <strong>Email: </strong> agents@example.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="assets/img/blue35.jpg" alt="" class="img-d img-fluid"  style="height: 400px;">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">Stiven Spilver
                        <br> Darw</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +54 356 945234
                    </p>
                    <p>
                      <strong>Email: </strong> agents@example.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="assets/img/blue4.jpg" alt="" class="img-d img-fluid" style="height: 400px;">
              </div>
              <div class="card-overlay card-overlay-hover" >
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">Emma Toledo
                        <br> Cascada</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +54 356 945234
                    </p>
                    <p>
                      <strong>Email: </strong> agents@example.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Blue Shark</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> <br> +249 129 102 102 <br> +249 129 102 102 <br> +249 311 824 382
                </li>
            
               
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Blue Shark</h3>
            </div>
             <div class="w-footer-a">
              <ul class="list-unstyled">
               
            
                <li class="color-a">
                  <span class="color-text-a"> Email .</span> <a href="madani1321986@gmail.com"> madani1321986@gmail.com</a>
                  
                </li>


                <li class="color-a">
                  <i class="bi bi-facebook" aria-hidden="true"></i> <span class="color-text-a"> Facebook.</span> <a href="madani1321986@gmail.com">blue Shark Diving</a>
                  
                </li>


                <li class="color-a">
                 <i class="bi bi-instagram" aria-hidden="true"></i> <span class="color-text-a"> Instgram.</span> <a href="madani1321986@gmail.com">blue_shark_sd</a>
                  
                </li>

              </ul>
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </section>
  <footer>
    
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">EstateAgency</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>