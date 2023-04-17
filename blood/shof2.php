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

  <title></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
     <a class="navbar-brand" >نظام التبرع الطوعي للدم</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('mota2.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>الفصائل</h1>
            <span class="subheading">سارع بالتبرع للفصائل المنخفضة على المخطط</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <br><br><br>
  <hr>
  <hr>

  <!--Main layout-->
  <main>
    
<section>
    <h3 class="h3 text-center mb-5"> توفر الدم حسب الفصائل</h3>

        <canvas id="myChart"  style="max-width: 900px; max-height: 500px; margin: auto; direction: rtl"></canvas>

</section>
       
<br><br><br>
<section>
    
<h3 class="h3 text-center mb-5" ><p face=""></p></h3>

        <canvas id="horizontalBar"  style="max-width: 900px; max-height: 500px; margin: auto; direction: rtl"></canvas>


</section>

     

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
