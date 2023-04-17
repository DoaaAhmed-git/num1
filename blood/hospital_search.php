<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";


}
 ?>


  <?php 

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
        /*table { border: none; border-collapse: collapse; }*/
        /*table td { border-left: 1px solid #000; }*/
        /*table td:first-child { border-left: none; }*/

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


        
    <br>

      

    </nav>
    <!-- Navbar -->

    <!--Carousel Wrapper-->

    <!--/.Carousel Wrapper-->

</header>


<!--Main layout-->
<main>
    <!--<h2 style="position: fixed; top: 5%" >المعمل 3</h2>-->
    <!--<hr class="my-5">-->

    <!-- Editable table -->
    


    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-11">
        
            <table class="table table-bordered table-hover" style="margin-top:-200px;">
                <th colspan="10" ></th>
                <th style="direction:rtl;" class="text-right" ><i><b>قائمة المتبرعين</b></i></th>
                <tr>
                    <th style="direction:rtl;" class="text-center" width="30%"> المريض</th>
                    <th style="direction:rtl;" class="text-center">المرض </th>
                    <th style="direction:rtl;" class="text-center"> تاريخ الطلب</th>
                    <th style="direction:rtl;" class="text-center">الحالة</th>


                    
                </tr>

       




              <?php 

if(isset($_POST['submit'])){


  $search = $_POST['search'];

   $hospital = $_SESSION['my_name'];

 $as = "SELECT * FROM  blood_request  where pation like '%$search%' && hospital = '$hospital' ";
  $result = mysqli_query($conn, $as);
if(!$result){
die('query failed' . mysqli_error());

}
 $count = mysqli_num_rows($result);
 if ($count == 0) {

    
echo " ";
 }


else{

  
  while ($row = $result ->  fetch_assoc( )) {

    $id1 = $row['id'];
    echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["pation"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["disease"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["request_date"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["statue"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$id1}' ><button class='btn btn-success'>حزف</button></a></td>"."</tr>";
    

 
        }}}

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
 
$query = "delete from blood_request where id = {$id}";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 




}

 ?>

         
                     </table>
                        <!-- Editable table -->
        </div>
    </div>
</main>
<!--Main layout-->

<!--Footer-->

<br><br><br>
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
