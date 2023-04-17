
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


<section class="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="phone" class="form-control form-control-lg form-control-a" placeholder="Phone" required>
                      </div>
                    </div>
                     <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="mount" class="form-control form-control-lg form-control-a" placeholder="How many people are you?" required>
                      </div>
                    </div>

             <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="phone2" class="form-control form-control-lg form-control-a" placeholder="Whatsapp number" required>
                      </div>
                    </div>

                    <div class="col-md-12 my-3">
                      <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                    </div>

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-a">Send</button>
                    </div>
                  </div>
                </form>
              </div>
      
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->


<br><br>
<div class="title-box" >

                <h2 class="title-a"  style="text-align: center;" >Create your own trip</h2>
              </div>


        <section class="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
               <h2 class="title-a" >Diving </h2>
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                 
                  
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                       <select  name="dive" class="form-control form-control-lg form-control-a" >
                         
                         <option value="Red blood">Umbria</option>
                                <option value="Plazma">Earaq Alnuhas</option>
                                <option value="Platelets">Sanaqnib<option>
                       </select>
                      </div>
                    </div>

                     <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="mount" class="form-control form-control-lg form-control-a" placeholder="How many people are you?" required>
                      </div>
                    </div>


                    <div class="col-md-12 my-3">
                      <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                    </div>

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-a">Send</button>
                    </div>
                  </div>
                </form>
              </div>
      
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->




  <main id="main">

    <!-- ======= Services Section ======= -->
   <!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->

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