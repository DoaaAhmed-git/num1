<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'loan' );

if ($conn === false) {
    echo "database not connected";
}


 ?>

<?php  session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LoneMe</title>
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

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
 
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Loan<span class="color-b">Me</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#">About</a>
          </li>



          <li class="nav-item">
            <a class="nav-link " href="#">Contact</a>
          </li>

  <li class="nav-item">
             <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                 <span class="price-a">register Now</span>
                 </button>
</li>
        </ul>
      </div>

      

    </div>
  </nav><!-- End Header/Navbar -->

 
<div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d"></h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="" method="POST" enctype="multipart/form-data">
        <div class="row">

        <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Name</label>
              <input type="text" name="name"  class="form-control form-control-lg form-control-a" placeholder="Name">
            </div>
          </div>

          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Photo</label>
              <input type="file" name="photo"  class="form-control form-control-lg form-control-a" placeholder="photo">
            </div>
          </div>

        <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Adress</label>
              <input type="text" name="adress"  class="form-control form-control-lg form-control-a" placeholder="Adress">
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Phone Number</label>
              <input type="text" name="phone"  class="form-control form-control-lg form-control-a" placeholder="phone">
            </div>
          </div>

<div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Birth Date</label>
              <input type="Date" name="birth"  class="form-control form-control-lg form-control-a" placeholder="Birth">
            </div>
          </div>
<div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Email</label>
              <input type="Email" name="email"  class="form-control form-control-lg form-control-a" placeholder="Email">
            </div>
          </div>

          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">UserName</label>
              <input type="text" name="username"  class="form-control form-control-lg form-control-a" placeholder="UserName">
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Password</label>
              <input type="password"  name="password" class="form-control form-control-lg form-control-a" placeholder="Password">
            </div>
          </div>
          

          <div class="col-md-12">
            <button type="submit" name="submit"  class="btn btn-b">Send</button>
          </div>
        </div>
      </form>
    </div>

    <?php 
    
   if(isset($_POST['submit'])){


   $username  = $_POST['username'];
   $password  = $_POST['password'];
   $name  = $_POST['name'];
   $email  = $_POST['email'];
   $adress  = $_POST['adress'];
   $Birth  = $_POST['birth'];

   $filename = $_FILES["photo"]["name"];
   $tempname = $_FILES["Photo"]["tmp_name"];
   $folder = "image/".$filename;

   //$photo  = $_POST['photo'];

   $phone  = $_POST['phone'];

$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

if (!empty($username) && !empty($password)  && !empty($name)  && !empty($email)  && !empty($adress)  && !empty($Birth)  && !empty($filename)  && !empty($phone)) {
    
$query = "select * from users ";
$dude = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($dude)) {

$do = $row["name"];

}

$query = "INSERT INTO users (name , password , name1 , email, adress , birthday , photo , phone) values('$username' , '$password' , '$name' ,'$email' , ' $adress' , '$Birth' , '$filename' ,'$phone' ) ";

echo '<script type="text/javascript"> location.replace("index2.php"); </script>';

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}
else
{

    echo "<script>alert('Than you') </script>";
}

$query = "select * from users where name = '$username' ";
$dude = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($dude)) {

 $d_id = $row['id'];
 $_SESSION['my_id'] = $d_id ;

 $outid = $_SESSION['my_id'];
}

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}

  }
}
     ?>
  </div><!-- End Property Search Section -->>




  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
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
                      <span class="color-b">You</span> Can
                      <br> Loan car
                    </h1>

          
                    <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                 <span class="price-a">Loan Now</span>
                 </button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
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
                      <br> Loan ...
                    </h1>
                    <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                 <span class="price-a">Loan Now</span>
                 </button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
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
                      <br> loan ....
                    </h1>
                     <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                 <span class="price-a">Loan Now</span>
                 </button>

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

    

  

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Loans Type</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

           <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/slide-2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->


            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/slide-3.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                      </p>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->



            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/testimonial-1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab 
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                        lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab lab
                      </p>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
     
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a"></span> All Rights Reserved.
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