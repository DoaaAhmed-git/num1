<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'hms' );
if ($conn === false) {
    echo "database not connected";}

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
                        <a class="nav-link" href="doctor1.php" target="_blank"><i> قايمة المتبرعين  </i> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctor3.php" target="_blank"><i> اضافه متبرع  </i>
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

    
    <!-- Navbar -->

    <!--Carousel Wrapper-->

    <!--/.Carousel Wrapper-->



<!--Main layout-->
<main>
    <!-- Default form subscription -->
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 text-right" style="margin-top:-190px;">
            <form class="text-center border border-light p-5" action="#!" method="POST">

                <p class="h4 mb-4 text-right" style="margin-top:-20px;"> <i>الاستقبال
                </i></p>
                <div style="margin-top:40px;">
                    <div class="row" style="margin-top:20px;">

                        <!-- Name -->
                        <div class="col-lg-9">
                            <input type="text" style="direction:rtl" class="form-control mb-4 text-right" name="name">
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>اسم المريض</b></h5>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-4">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="kind">
                                <option> </option>
                                <option value="استشارة">استشارة</option>
                                <option value="دائمة">دائمة</option>
                                
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>نوع المقابلة</b></h5>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">
                            <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="adress">
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>العنوان</b></h5>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">
                            <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="phone">
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>الهاتف</b></h5>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">
                            <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="age">
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>العمر</b></h5>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">
                            <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="name2">
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>اسم القريب</b></h5>
                        </div>
                    </div>


                 <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">
                            <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="phone2">
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>هاتف القريب</b></h5>
                        </div>
                    </div>



                     <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">
                            <input type="date" style="direction:rtl"  class="form-control mb-4 text-right" placeholder="yyyy-mm-dd" name="date">
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>تاريخ الموعد</b></h5>
                        </div>
                    </div>


                    <button class="btn btn-info btn-block" type="submit" style="margin-top:-10px;" name="submit">تسجيل</button>
                </div>

            </form>
            <!-- Default form subscription -->
        </div>
    </div>

    <?php  








 ///----------------------------------------------------

    if(isset($_POST['submit'])){

        $name=$_POST["name"];
        $kind=$_POST["kind"];
        $adress=$_POST["adress"];
        $phone=$_POST["phone"];
        $age = $_POST["age"];
        $phone2=$_POST["phone2"];
        $date=$_POST["date"];
        $name2=$_POST["name2"];
        
        if (!empty($name) && !empty($kind) && !empty( $adress) && !empty($phone) && !empty($age) && !empty($phone2) && !empty($date) && !empty($name2) ) {
        
        
       // $fasela = mysqli_real_escape_string($conn ,$fasela);
       
 $query= "INSERT INTO patian (name, paiment_kind , adress, phone , age , phone2 , name2 , date) VALUES ('$name', ' $kind', ' $adress', '$phone' , '$age' , '$phone2','$name2' , '$date')";


 mysqli_real_escape_string($conn,$query);



     $result = mysqli_query($conn, $query);

if(!$result){
die('query failed' . mysqli_error());

}
 

}
else{
 echo "<script>alert('نسيت حاجة فاضية') </script>";

}
}




 ?>
</main>

<script type="text/javascript">
  
  setTimeout(myTimer , 3000);

//var me = setInterval(myTimer , 10);

function myTimer() {

//alert('hello');
 

   
}


</script>

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
