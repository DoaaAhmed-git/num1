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
            <h1>مرحبا بك في تقرير حملات التبرع</h1>
            
          </div>
        </div>
      </div>
    </div>
  </header>


    <!--Carousel Wrapper-->

    <!--/.Carousel Wrapper-->
<br><br><br><br>


</header>


<main>
    <!--<h2 style="position: fixed; top: 5%" >المعمل 3</h2>-->
    <!--<hr class="my-5">-->

    <!-- Editable table -->
    


<div class="container">

      <!--Section: Main info-->
      



<br><br><br>

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-11">
        <br><br><br>

            <table class="table table-bordered table-hover" style="margin-top:-200px;">
                <th colspan="10" ></th>
                <th style="direction:rtl;" class="text-right" ><i><b> قائمة الحملات</b></i></th>
                <tr>
                    
                    <th style="direction:rtl;" class="text-right">ممرض الحملة</th>
                    <th style="direction:rtl;" class="text-right">طبيب الحملة</th>
                    <th style="direction:rtl;" class="text-right"> التاريخ</th>
                    <th style="direction:rtl;" class="text-right"> العربية</th>
                    <th style="direction:rtl;" class="text-right">امكان الحملة</th>
        
                    
                    
                </tr>

        <?php  




            $as = "SELECT * FROM  combaigin";
            $result = $conn -> query($as);
                    if ($result -> num_rows > 0 ) {
                        while ($row = $result ->  fetch_assoc( )) {
             echo   "<tr>".
             
                   
                    "<td style='direction:rtl;' class='text-right'>".$row["the_nurse"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["the_doctor"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["the_date"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["the_car"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["the_place"]."</td>"."</tr>";
                    
        }}
        ?>    


            </table>
            <!-- Editable table -->
        </div>
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





</script>
</body>

</html>
