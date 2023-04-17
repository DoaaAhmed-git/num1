<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";

}
 ?>
<?php  session_start() ?>

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
      <a class="navbar-brand" >نظام التبرع الطوعي للدم</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="register.php">تبرع الان</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('b2.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <div class="page-heading">
            <h1>مرحبا بك في نظام التبرع الطوعي للدم</h1>
                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            
          </div>
        </div>
      </div>
    </div>
  </header>

  <!--Main layout-->
  <main>


   <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      
        
   
        <form    action="" method="POST"  id="contact_me" name="sendMessage">
        
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>العنوان</label>
              <input type="text"  name="username" class="form-control" placeholder="username " id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
         
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>الخبر</label>
              <input  type="password" name="password" rows="5" class="form-control" placeholder="password" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton" name="submit">login</button>
        </form>
      </div>
    </div>
  </div>

                 <?php 

    //Error_reporting(0);

if (isset($_POST['submit'])) {

 $username =$_POST['username'];
 $password= $_POST['password'];
   $username= mysqli_real_escape_string($conn,$username );
 $password= mysqli_real_escape_string($conn,$password );

 $query = "select * from useres where username= '{$username}' ";
 $dude = mysqli_query($conn, $query);

 if (!$dude ) {
 
 die("no" .mysqli_error($conn));    
 }
 
while ($row = mysqli_fetch_array($dude)) {
   
  $db_id = $row['id'];
  $_SESSION['my_id'] = $db_id ;

 $db_jop = $row['jop_type'];
 $db_pass= $row['password'];

 $db_name= $row['username'];
 $_SESSION['my_name'] = $db_name ;


if ($username == $db_name && $password == $db_pass && $db_jop== '6' ) {

     echo '<script type="text/javascript"> location.replace("index2.php"); </script>';

}
}
}


?>

    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">


          <div class="row ">



              <!--Grid column-->
              <div class="col-lg-4 col-md-12 wow slideInLeft">

                  <!-- Card -->
                  <div class="card">

                      <!-- Card image -->
                      <img class="card-img-top" src="me3.png" style="height:250px" alt="Card image cap">

                      <!-- Card content -->
                      <div class="card-body">


                          <!-- Title -->
                          <h4 class="card-title text-right"><a href="shof1.php" >حملات التبرع</a></h4>

                          <!-- Text -->
                          <p class="card-text text-right">اعرف كل ما هو جديد عن حملات التبرع و اماكنها </p>
                          <!-- Button -->
                          <a href="shof1.php" style="float:right" class="btn btn-primary purple-gradient ">..المزيد</a>

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
                      <img class="card-img-top" src="me.jpg" style="height:250px" alt="Card image cap">

                      <!-- Card content -->
                      <div class="card-body">


                          <!-- Title -->
                          <h4 class="card-title text-right"><a href="shof2.php">فصائل الدم</a></h4>

                          <!-- Text -->
                          <p class="card-text text-right">اعرف مدى توفر الفصائل في المعمل و ساهم </p>
                          <!-- Button -->
                          <a href="shof2.php" style="float:right" class="btn btn-primary near-moon-gradient ">..المزيد</a>

                      </div>

                  </div>
                  <!-- Card -->
              </div>
              <!--/Grid column-->






              <!--Grid column-->
              <div class="col-lg-4 col-md-12 wow slideInRight">
                  <!-- Card -->
                  <div class="card">

                      <!-- Card image -->
                      <img class="card-img-top" src="blood.jpg" style="height:250px;" alt="Card image cap">

                      <!-- Card content -->
                      <div class="card-body">

                          <!-- Title -->
                          <h4 class="card-title text-right"><a href="shof3.php"> اخر الاخبار</a></h4>
                          <!-- Text -->
                          <p class="card-text text-right">بعض المعلومات عن اهمية التبرع بالدم و عن المعمل و نشاطاته </p>
                          <!-- Button -->
                          <a href="shof3.php" style="float:right" class="btn btn-primary blue-gradient ">..المزيد</a>

                      </div>

                  </div>
                  <!-- Card -->
              </div>
              <!--/Grid column-->






          </div>

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">

      <!--Section: Not enough-->
      

      </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">


    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="#" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

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
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

  </script>
</body>

</html>
