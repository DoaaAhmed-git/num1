<?php  
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";
   
}
session_start();

?>


<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css">
        html,
        body,
        header,
        .carousel {
            height: 60vh;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #929FBA !important;
            }
        }
        p:after
        {
            content:' ';
            display:block;
            border:1px solid gray;
        }

    </style>
</head>

<body>

<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">

            <!-- Brand -->


            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav nav-flex-icons" >
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>

                <!-- Right -->

                <ul class="navbar-nav ml-auto" style="float:right;">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="hospital2.php" target="_blank"><i> طلب دم </i> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hospital3.php" target="_blank"><i>قائمة طلبات الدم</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank"><i>الرئيسية</i>
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!--Carousel Wrapper-->

    <!--/.Carousel Wrapper-->

</header>
<?php echo  $_SESSION['my_name'];
 ?>
<!--Main layout-->
<main>
    <!-- Default form subscription -->
	<center>
    <div class="row container">
        
        <div class="col-lg-12 text-right" style="margin-top:-20%;">
            <form class="text-center border border-light p-5" action="hospital2.php" method="post">

                <samp class="h4 mb-4 text-right" style="margin-top:-20px;"> <i> طلب دم
                </i></samp>
                <div style="margin-top:40px;">
                    <div class="row" style="margin-top:20px;">

                        <!-- Name -->
                        <div class="col-lg-4">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="mount">
                                <option> </option>
                                <option value="Red blood">Red blood</option>
                                <option value="Plazma">Plazma</option>
                                <option value="Platelets">Platelets</option> 
                            </select>
                        </div>

                        <div class="col-lg-2">
                            <h5 class="pull-left"><b>نوع الدم</b></h5>
                        </div>

						<div class="col-lg-4">
                            <input type="text" style="direction:rtl" class="form-control mb-4 text-right"  name="pation">
                        </div>
                        <div class="col-lg-2">
                            <h5 class="pull-left"><b> المريض</b></h5>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-10">
                            <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="mount">
                        </div>
                        <div class="col-lg-2">
                            <h5 class="pull-left"><b>الكمية </b></h5>
                        </div>
                    </div>

					 <div class="row">

                        <!-- Name -->
                        <div class="col-lg-5"></div>

                        <div class="col-lg-4">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="bty">
                                <option> </option>
                                <option value="A-"> A-</option>
                                <option value="A+"> A+</option>
                                <option value="B-"> B-</option>
                                <option value="B+"> B+</option>
                                <option value="O-"> O-</option>
                                <option value="O+"> O+</option>
                                <option value="AB-"> AB-</option>
                                <option value="AB+"> AB+</option>

                            </select>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>الفصيلة </b></h5>
                        </div>
                    </div>


                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-10">
                            <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="tarkeez">
                        </div>
                        <div class="col-lg-2">
                            <h5 class="pull-left"><b>التركيز</b></h5>
                        </div>
                    </div>




					<div class="row">

                        <!-- Name -->
                        <div class="col-lg-10">
                            <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="disease">
                        </div>
                        <div class="col-lg-2">
                            <h5 class="pull-left"><b>المرض</b></h5>
                        </div>
                    </div>
					<div class="row">

                        <!-- Name -->
                        <div class="col-lg-10">
                            <input type="date" style="direction:rtl"  class="form-control mb-4 text-right" name="daate">
                        </div>
                        <div class="col-lg-2">
                            <h5 class="pull-left"><b>تاريخ الطلب</b></h5>
                        </div>
                    </div>


                    <button class="btn btn-info " type="submit" style="margin-top:2%; width:60%" name="create">طلب</button>
                </div>

            </form>
            <!-- Default form subscription -->
        </div>
    </div>
</main>


<?php  

error_reporting(0);

 $_SESSION['my_jop'];

  $jop = $_SESSION['my_jop'];

if ($jop == '3') {

if(isset($_POST['create'])){

        $pation=$_POST["pation"];
        $bty=$_POST["bty"];
        $daate=$_POST["daate"];
        $mount=$_POST["mount"];
        $disease=$_POST["disease"];
        $type=$_POST["type"];
        $tarkeez=$_POST["tarkeez"];

     $hospital = $_SESSION['my_name'];

     if (!empty($pation) && !empty($bty) && !empty($daate) && !empty($mount) && !empty($disease) && !empty($type) && !empty ($tarkeez))  {
         # code...
     

        
 $dude = "INSERT INTO blood_request(pation , blood_type  , mount , blood_ty , disease, request_date , tarkeez , hospital) VALUES ('$pation', '$type', '$mount', '$bty' , '$disease', '$daate' , '$tarkeez' , '$hospital')";
    
     if ($conn -> query($dude) === true) {
        header("location:hospital2.php?1 row insert ");

    } }

    else {
        echo "<script>alert('نسيت حاجة فاضية')</script>";
    }
   }    
}


?>

</center>
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

        <a href="#" target="_blank">
            <i class="fab fa-github mr-3"></i>
        </a>

        <a href="#" target="_blank">
            <i class="fab fa-codepen mr-3"></i>
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
