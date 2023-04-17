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

                

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!--Carousel Wrapper-->

    <!--/.Carousel Wrapper-->

</header>
<br><br
<br>

<?php 

if (isset($_POST['submit'])) {

 $username  = $_POST['username'];
 $password  = $_POST['password'];

 
 

$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);


$query = "select * from useres ";
$dude = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($dude)) {


$do = $row["username"];
$do2 = $row["jop_type"];
}

if ($username == $do && $do2 == '6') {
    

    echo "This name was used!! try another one";
}

else{

$query = "INSERT INTO useres (username , password , jop_type) values('$username' , '$password' , '6') ";

echo '<script type="text/javascript"> location.replace("register.php"); </script>';

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}

}

$query = "select * from useres where username = '$username' ";
$dude = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($dude)) {

$d_id = $row['id'];
 $_SESSION['my_id'] = $d_id ;
}

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}


}



 ?>
<!--Main layout-->
<main style="margin-top:-300px;">
    <!-- Default form subscription -->
    <center>
        <div class="row container">

            <div class="col-lg-12 text-right" style="margin-top:10%;">
                <form class="text-center border border-light p-5" action=""  method="POST" >



                    <div style="margin-top:40px;">

                        <div class="row">

                            <!-- Name -->
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="username" placeholder="الاسم الزي تريد استخدامه">
                            </div>
                            <div class="col-lg-2">
                                <h5 class="pull-left"><b>المستخدم</b></h5>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                        <div class="row">

                            <!-- Name -->
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-6">
                                <input type="password" style="direction:rtl"  class="form-control mb-4 text-right" name="password" placeholder="كلمة السر التي تريد استخدامها">
                            </div>
                            <div class="col-lg-2">
                                <h5 class="pull-left"><b>كلمة المرور</b></h5>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>

                        <a href="register.php"><button class="btn btn-info " type="submit" style="margin-top:2%; width:30%" name="submit">اشتراك</button></a>
                    </div>

                </form>
                <!-- Default form subscription -->
            </div>
        </div>
    </center>
<br>

<br>


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
