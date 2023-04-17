<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";

}
 ?>
<?php session_start() ?>


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

                    <li class="nav-item">
                        <a class="nav-link" href="logoff.php" target="_blank"><i><button  name="logout">LOGOUT</button></i>
                        </a>
                    </li>

                </ul>

            </div>
          
        </div>
        <br><br><br>

     <br>


   



<br><br><br><br>
<br>
        <form action="search.php " method="POST">
            <input type="search" name="search">
            <button name="submit" type="submit" >
                
            </button>

        </form><br>



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
    
<?php


$as = "SELECT * FROM  metting ";


            $result = $conn -> query($as);
                    if ($result -> num_rows > 0 ) {
                        while ($row = $result ->  fetch_assoc( )) {



                   $row['monasaba'];
                    $row['date'];
                     $row['hall'];
                      $row['topic'];
                     


                $do = $row['monasaba'];
                  $do3 = $row['date'];
                   $do4 = $row['hall'];
                    $do5 =  $row['topic'];
                  
}
 echo 

 "<section class='mt-5 wow fadeIn'>".
          "<div class='row' width= '50' height= '50' >".
              "<div class='col-lg-4 col-md-12 wow slideInRight'>".

                  "<div class='card'>".

  "<div class='card-body'>".
  "<hr class='my-100'>".
  "<h4 class='card-title text-right'>"."<a>" ."اخر اجتماع". "</a>"."</h4>".
                          
 "<p class='card-text text-right'>".
 "$do"."<br>".
 "<hr class='my-5'>".
 "<br>" ."<b>"."قاعة الاجتماع "."</b>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
 "$do4".
 " <br>"

 ."<b>" ."تارخ الاجتماع" ."</b>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
 "$do3".

 "<br>" ."<b>". "الموضوع" ."</b>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp". 
 "$do5".
 "</p>".
                          
                      "</div>".

                  "</div>".
              
              "</div>".
          "</div>".
      "</section>";
    


}

 ?>

<br><br>

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-11">
        <br><br><br>
        <br><br><br>
        <br><br><br>
            <table class="table table-bordered table-hover" style="margin-top:-200px;">
                <th colspan="10" ></th>
                <th style="direction:rtl;" class="text-right" ><i><b>قائمة المتبرعين</b></i></th>
                <tr>
                    <th style="direction:rtl;" class="text-right"> الكي </th>
                    <th style="direction:rtl;" class="text-right"> مشاكل اخرى</th>
                    <th style="direction:rtl;" class="text-right">الادوية </th>
                    <th style="direction:rtl;" class="text-right"> الضغط</th>
                    <th style="direction:rtl;" class="text-right">القلب</th>
                    <th style="direction:rtl;" class="text-right">السكري</th>
                    <th style="direction:rtl;" class="text-right">الجنس</th>
                    <th style="direction:rtl;" class="text-right">الاسم</th>
                    
                </tr>

        <?php  


 $as = "SELECT * FROM doners ORDER BY `id` DESC ";
            $result = $conn -> query($as);
                    if ($result -> num_rows > 0 ) {
                        while ($row = $result ->  fetch_assoc( )) {

                     $id_user= $row['id'];       
             echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["tatoos"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["health_problems"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["drogs"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["depretion"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["heart"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["sugar"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["gender"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["name"]."</td>".
                  

"<td style='direction:rtl;' class='text-right'>"."<a  href='doctor2.php?add={$id_user}'><button class='btn btn-success'> فحص </button></a></td>".
"<td style='direction:rtl;' class='text-right'>"."<a href='edit.php?edit={$id_user}'><button class='btn btn-success' > تعديل </button></a></td></a>".
"</tr>";

 
                    
        }



       

    }

if (isset($_GET['refuse'])) {

 $id = $_GET['refuse'];

$query = "update doners set accept ='1'  where id = '{$id}' ";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

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
