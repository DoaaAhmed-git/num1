<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";
}


 ?>
<!DOCTYPE html>
<html lang="ar">

<head>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">



  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  
</head>



<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" >نظام الاشراف</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="moshref.php">الاحصائات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="moshref2.php">ادارة الموقع</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('nn.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <div class="page-heading">
            <h1>مرحبا بك في نظام ادارة بنك الدم</h1>
                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            
          </div>
        </div>
      </div>
    </div>
  </header>

    <!--Carousel Wrapper-->


      <!--Indicators-->
      
      <!--/.Indicators-->

      <!--Slides-->
    





<body>

 <?php 

$query = "SELECT * FROM doners ";
$result = mysqli_query($conn,$query);

 $post_number = mysqli_num_rows($result);


$query = "SELECT * FROM blood_buttel ";
$result = mysqli_query($conn,$query);

 $post_number2 = mysqli_num_rows($result);


 $query = "SELECT * FROM blood_request";
$result = mysqli_query($conn,$query);

 $post_number3 = mysqli_num_rows($result);


$query = "SELECT * FROM combaigin";
$result = mysqli_query($conn,$query);

 $post_number4 = mysqli_num_rows($result);

 ?>

  <!--Main layout-->
  <main>
<center>
   <?php 

if (isset($_POST['go'])) {

$monasaba = $_POST['monasaba'];
$topic = $_POST['topic'];
$date = $_POST['date'];
$hall = $_POST['hall'];


if (!empty($monasaba) && !empty($topic) && !empty($date) && !empty($hall)) {
  # code...


$query = "INSERT INTO metting ( monasaba , topic , date , hall ) values ('$monasaba' , '$topic' , '$date' , '$hall') ";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 
 

 echo  "تم انشاء الاجتماع ";

}
else{

echo "<script>alert('نسيت حاجة فاضية') </script>";

}

   }    ?> 
</center>
<div class="container">

      <!--Section: Main info-->
  

  <div class="col-lg-4 col-md-12 wow slideInRight" style="position: right" >


                  <!-- Card -->
                  <div class="card">

<h4 class="card-title text-center">  : عقد اجتماع </h4>


<br><br>
                      <!-- Card image -->
                      <form  action="" method="POST">

                     <input type="text" name="monasaba" class="form-control" placeholder="المناسبة"><br>
                      <input type="text" name="date" class="form-control" placeholder="اتاريخ الاجتماع"><br>
                      <input type="text" name="hall" class="form-control" placeholder="قاعة الاجتماع"><br>

                        
<textarea class="form-control" name="topic" placeholder="الموضوع"></textarea>

 <hr size="50px">

<button   class="btn btn-primary purple-gradient"  type="submit"  name="go" class="form-control" >تم</button>
</form>
                     
                     

                  </div>
                  <!-- Card -->
              </div>
            
</div>
          
            


<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>


<div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">



    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">


          <div class="row ">



              <!--Grid column-->
              <div class="col-lg-4 col-md-12 wow slideInLeft">

                  <!-- Card -->
                  <div class="card">

                      <!-- Card image -->
                      <img class="card-img-top" src="fasa.jpg" style="height:250px" alt="Card image cap">

                      <!-- Card content -->
                      <div class="card-body">


                          <!-- Title -->
                          <h4 class="card-title text-right"><a href="tafaseel3.php" >فصايل الدم</a></h4>

                          <!-- Text -->
                          <p class="card-text text-right"><h1><?php echo $post_number2; ?></h1> </p>
                          <!-- Button -->
                          <a href="tafaseel3.php" style="float:right" class="btn btn-primary purple-gradient ">التفاصيل</a>

                      </div>


                  </div>
                  <!-- Card -->
              </div>


              <!--/Grid column-->




              <!--Grid column-->
              <div class="col-lg-4 col-md-12 wow bounceInUp">
                  <!-- Card -->

                  <div class="card">

                      <!-- Card image -->
                      <img class="card-img-top" src="mota2.jpg" style="height:250px" alt="Card image cap">

                      <!-- Card content -->
                      <div class="card-body">


                          <!-- Title -->
                          <h4 class="card-title text-right"><a href="tafaseel1.php">المتبرعين</a></h4>

                          <!-- Text -->
                          <p class="card-text text-right"><h1><?php echo $post_number; ?></h1></p>
                          <!-- Button -->
                          <a href="tafaseel1.php" style="float:right" class="btn btn-primary near-moon-gradient ">التفاصيل</a>

                      </div>

                  </div>
                  <!-- Card -->
              </div>
              <!--/Grid column-->
</div>
              </section>
              </div>
              


<br> <br>
<br> <br>

<center>
<div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">


          <div class="row ">

              <!--Grid column-->
              <div class="col-lg-4 col-md-12 wow slideInRight">
                  <!-- Card -->
                  <div class="card">

                      <!-- Card image -->
                      <img class="card-img-top" src="hamlat2.jpg" style="height:250px;" alt="Card image cap">

                      <!-- Card content -->
                      <div class="card-body">

                          <!-- Title -->
                          <h4 class="card-title text-right"><a href="tafaseel4.php">طلبات المستشفيات</a></h4>
                          <!-- Text -->
                          <p class="card-text text-right"><h1><?php echo $post_number3; ?></h1> </p>
                          <!-- Button -->
                          <a href="tafaseel4.php" style="float:right" class="btn btn-primary blue-gradient ">التفاصيل</a>

                      </div>

                  </div>
                  <!-- Card -->
              </div>
              <!--/Grid column-->


<br> <br>
<div class="col-lg-4 col-md-12 wow slideInRight">
                  <!-- Card -->
                  <div class="card">

                      <!-- Card image -->
                      <img class="card-img-top" src="hamlat.jpg" style="height:250px;" alt="Card image cap">

                      <!-- Card content -->
                      <div class="card-body">

                          <!-- Title -->
                          <h4 class="card-title text-right"><a href="tafaseel2.php">حملات التبرع</a></h4>
                          <!-- Text -->
                          <p class="card-text text-right"><h1><?php echo $post_number4; ?></h1> </p>
                          <!-- Button -->
                          <a href="tafaseel2.php" style="float:right" class="btn btn-primary blue-gradient ">التفاصيل</a>

                      </div>

                  </div>
                  <!-- Card -->
              </div>


</div>


      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      
    </div>
</center>
</section>
</div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
</body>

</html>
