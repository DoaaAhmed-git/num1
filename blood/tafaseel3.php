<?php 

$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";
  }

 ?>

 <?php

$query = "SELECT * FROM blood_buttel  where fasela = 'A-'";
$result = mysqli_query($conn,$query);

 $post_number = mysqli_num_rows($result);



$query = "SELECT * FROM blood_buttel  where fasela = 'A+'";
$result = mysqli_query($conn,$query);

 $post_number2 = mysqli_num_rows($result);




 $query = "SELECT * FROM blood_buttel  where fasela = 'B+'";
$result = mysqli_query($conn,$query);

 $post_number3 = mysqli_num_rows($result);



$query = "SELECT * FROM blood_buttel  where fasela = 'B-'";
$result = mysqli_query($conn,$query);

 $post_number4 = mysqli_num_rows($result);


 $query = "SELECT * FROM blood_buttel  where fasela = 'O+'";
$result = mysqli_query($conn,$query);

 $post_number5 = mysqli_num_rows($result);



 $query = "SELECT * FROM blood_buttel  where fasela = 'O-'";
$result = mysqli_query($conn,$query);

 $post_number6 = mysqli_num_rows($result);



 $query = "SELECT * FROM blood_buttel  where fasela = 'AB+'";
$result = mysqli_query($conn,$query);

 $post_number7 = mysqli_num_rows($result);




$query = "SELECT * FROM blood_buttel  where fasela = 'AB-'";
$result = mysqli_query($conn,$query);

 $post_number8 = mysqli_num_rows($result);



//-------------------------------------------------




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
            <h1>مرحبا بك في تقرير الفصائل</h1>
            
          </div>
        </div>
      </div>
    </div>
  </header>

  <!--Main layout-->
  <main>
    
<section>
    <h3 class="h3 text-center mb-5"> توفر الدم حسب الفصائل</h3>

        <canvas id="myChart"  style="max-width: 900px; max-height: 500px; margin: auto; direction: rtl"></canvas>

</section>
        <br><br><br>
<br><br><br>
<br><br><br>

<hr size="500px">
<br><br><br>
<section>
    
<h3 class="h3 text-center mb-5" ><p face=""></p></h3>

        <canvas id="horizontalBar"  style="max-width: 900px; max-height: 500px; margin: auto; direction: rtl"></canvas>


</section>

      <!--Section: Main features & Quick Start-->
      
      <!--Section: Main features & Quick Start-->

     

      <!--Section: Not enough-->
      

      <!--Section: More-->
      <!--<section>-->

        <!--<h2 class="my-5 h3 text-center">...and even more</h2>-->

        <!--&lt;!&ndash;First row&ndash;&gt;-->
        <!--<div class="row features-small mt-5 wow fadeIn">-->

          <!--&lt;!&ndash;Grid column&ndash;&gt;-->
          <!--<div class="col-xl-3 col-lg-6">-->
            <!--&lt;!&ndash;Grid row&ndash;&gt;-->
            <!--<div class="row">-->
              <!--<div class="col-2">-->
                <!--<i class="fab fa-firefox fa-2x mb-1 indigo-text" aria-hidden="true"></i>-->
              <!--</div>-->
              <!--<div class="col-10 mb-2 pl-3">-->
                <!--<h5 class="feature-title font-bold mb-1">Cross-browser compatibility</h5>-->
                <!--<p class="grey-text mt-2">Chrome, Firefox, IE, Safari, Opera, Microsoft Edge - MDB loves all browsers;-->
                  <!--all browsers love MDB.-->
                <!--</p>-->
              <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/Grid row&ndash;&gt;-->
          <!--</div>-->
          <!--&lt;!&ndash;/Grid column&ndash;&gt;-->

          <!--&lt;!&ndash;Grid column&ndash;&gt;-->
          <!--<div class="col-xl-3 col-lg-6">-->
            <!--&lt;!&ndash;Grid row&ndash;&gt;-->
            <!--<div class="row">-->
              <!--<div class="col-2">-->
                <!--<i class="fas fa-level-up-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>-->
              <!--</div>-->
              <!--<div class="col-10 mb-2">-->
                <!--<h5 class="feature-title font-bold mb-1">Frequent updates</h5>-->
                <!--<p class="grey-text mt-2">MDB becomes better every month. We love the project and enhance as much as-->
                  <!--possible.-->
                <!--</p>-->
              <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/Grid row&ndash;&gt;-->
          <!--</div>-->
          <!--&lt;!&ndash;/Grid column&ndash;&gt;-->

          <!--&lt;!&ndash;Grid column&ndash;&gt;-->
          <!--<div class="col-xl-3 col-lg-6">-->
            <!--&lt;!&ndash;Grid row&ndash;&gt;-->
            <!--<div class="row">-->
              <!--<div class="col-2">-->
                <!--<i class="fas fa-comments fa-2x mb-1 indigo-text" aria-hidden="true"></i>-->
              <!--</div>-->
              <!--<div class="col-10 mb-2">-->
                <!--<h5 class="feature-title font-bold mb-1">Active community</h5>-->
                <!--<p class="grey-text mt-2">Our society grows day by day. Visit our forum and check how it is to be a-->
                  <!--part of our family.-->
                <!--</p>-->
              <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/Grid row&ndash;&gt;-->
          <!--</div>-->
          <!--&lt;!&ndash;/Grid column&ndash;&gt;-->

          <!--&lt;!&ndash;Grid column&ndash;&gt;-->
          <!--<div class="col-xl-3 col-lg-6">-->
            <!--&lt;!&ndash;Grid row&ndash;&gt;-->
            <!--<div class="row">-->
              <!--<div class="col-2">-->
                <!--<i class="fas fa-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>-->
              <!--</div>-->
              <!--<div class="col-10 mb-2">-->
                <!--<h5 class="feature-title font-bold mb-1">jQuery 3.x</h5>-->
                <!--<p class="grey-text mt-2">MDB is integrated with newest jQuery. Therefore you can use all the latest-->
                  <!--features which come along with-->
                  <!--it.-->
                <!--</p>-->
              <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/Grid row&ndash;&gt;-->
          <!--</div>-->
          <!--&lt;!&ndash;/Grid column&ndash;&gt;-->

        <!--</div>-->
        <!--&lt;!&ndash;/First row&ndash;&gt;-->

        <!--&lt;!&ndash;Second row&ndash;&gt;-->
        <!--<div class="row features-small mt-4 wow fadeIn">-->

          <!--&lt;!&ndash;Grid column&ndash;&gt;-->
          <!--<div class="col-xl-3 col-lg-6">-->
            <!--&lt;!&ndash;Grid row&ndash;&gt;-->
            <!--<div class="row">-->
              <!--<div class="col-2">-->
                <!--<i class="fas fa-cubes fa-2x mb-1 indigo-text" aria-hidden="true"></i>-->
              <!--</div>-->
              <!--<div class="col-10 mb-2">-->
                <!--<h5 class="feature-title font-bold mb-1">Modularity</h5>-->
                <!--<p class="grey-text mt-2">Material Design for Bootstrap comes with both, compiled, ready to use-->
                  <!--libraries including all features as-->
                  <!--well as modules for CSS (SASS files) and JS.</p>-->
              <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/Grid row&ndash;&gt;-->
          <!--</div>-->
          <!--&lt;!&ndash;/Grid column&ndash;&gt;-->

          <!--&lt;!&ndash;Grid column&ndash;&gt;-->
          <!--<div class="col-xl-3 col-lg-6">-->
            <!--&lt;!&ndash;Grid row&ndash;&gt;-->
            <!--<div class="row">-->
              <!--<div class="col-2">-->
                <!--<i class="fas fa-question fa-2x mb-1 indigo-text" aria-hidden="true"></i>-->
              <!--</div>-->
              <!--<div class="col-10 mb-2">-->
                <!--<h5 class="feature-title font-bold mb-1">Technical support</h5>-->
                <!--<p class="grey-text mt-2">We care about reliability. If you have any questions - do not hesitate to-->
                  <!--contact us.-->
                <!--</p>-->
              <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/Grid row&ndash;&gt;-->
          <!--</div>-->
          <!--&lt;!&ndash;/Grid column&ndash;&gt;-->

          <!--&lt;!&ndash;Grid column&ndash;&gt;-->
          <!--<div class="col-xl-3 col-lg-6">-->
            <!--&lt;!&ndash;Grid row&ndash;&gt;-->
            <!--<div class="row">-->
              <!--<div class="col-2">-->
                <!--<i class="fas fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>-->
              <!--</div>-->
              <!--<div class="col-10 mb-2">-->
                <!--<h5 class="feature-title font-bold mb-1">Flexbox</h5>-->
                <!--<p class="grey-text mt-2">MDB fully supports Flex Box. You can forget about alignment issues.</p>-->
              <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/Grid row&ndash;&gt;-->
          <!--</div>-->
          <!--&lt;!&ndash;/Grid column&ndash;&gt;-->

          <!--&lt;!&ndash;Grid column&ndash;&gt;-->
          <!--<div class="col-xl-3 col-lg-6">-->
            <!--&lt;!&ndash;Grid row&ndash;&gt;-->
            <!--<div class="row">-->
              <!--<div class="col-2">-->
                <!--<i class="far fa-file-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>-->
              <!--</div>-->
              <!--<div class="col-10 mb-2">-->
                <!--<h5 class="feature-title font-bold mb-1">SASS files</h5>-->
                <!--<p class="grey-text mt-2">Arranged and well documented .scss files can't wait until you compile them.</p>-->
              <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/Grid row&ndash;&gt;-->
          <!--</div>-->
          <!--&lt;!&ndash;/Grid column&ndash;&gt;-->

        <!--</div>-->
        <!--&lt;!&ndash;/Second row&ndash;&gt;-->

      <!--</section>-->
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <!--<div class="pt-4">-->
      <!--<a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"-->
        <!--role="button">Download MDB-->
        <!--<i class="fas fa-download ml-2"></i>-->
      <!--</a>-->
      <!--<a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start-->
        <!--free tutorial-->
        <!--<i class="fas fa-graduation-cap ml-2"></i>-->
      <!--</a>-->
    <!--</div>-->
    <!--/.Call to action-->

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
    <!-- Social icons -->

    <!--Copyright-->
    <!--<div class="footer-copyright py-3">-->
      <!--© 2019 Copyright:-->
      <!--<a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>-->
    <!--</div>-->
    <!--/.Copyright-->

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

    var val = "<?php echo  $post_number ?>";
    var val2 = "<?php echo  $post_number2 ?>";
    var val3 = "<?php echo  $post_number3 ?>";
    var val4 = "<?php echo  $post_number4 ?>";
    var val5 = "<?php echo  $post_number5 ?>";
    var val6 = "<?php echo  $post_number6 ?>";
    var val7 = "<?php echo  $post_number7 ?>";
    var val8 = "<?php echo  $post_number8 ?>";

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["A+", "A-", "B+", "B-", "O+", "O-" , "AB+" , "AB-"],
            datasets: [{
                label: '# of Votes',
                data: [val2, val, val3, val4, val5, val6, val7, val8],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 3
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
    var ctx = document.getElementById("horizontalBar").getContext('2d');

    var val = "<?php echo $post_number9 ?>";
    var val2 = "<?php echo  $post_number10 ?>";
    var val3 = "<?php echo  $post_number11 ?>";
    

    var horizontalBar = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: ["Plazma", "Red blood", "Platelets"],
            datasets: [{
                label: '# of Votes',
                data: [val, val2, val3],
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
