
<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";
}
session_start()
 ?>
 

 <?php 

error_reporting(0);

  $outid = $_SESSION['my_id'];
   

if ($outid) {
 
$as = "SELECT * FROM  doners where out_id = '$outid' ";


            $result = $conn -> query($as);
                    if ($result -> num_rows > 0 ) {

                        while ($row = $result ->  fetch_assoc( )) {
                           $id = $row['id'];

$name = $row["name"];
$nato = $row["nationalty"];
$emaile = $row["emaile"];
$adress = $row["adress"];
$phone = $row["phone"];

}

$query = "SELECT * FROM  blood_buttel  where doner_id ='$id' ";
$result = mysqli_query($conn,$query);

 $post_number = mysqli_num_rows($result);



//-----------------------

 $n = time();
  $me = date('Y-m-d' , $n);


     while ($row = mysqli_fetch_array($result)) {

          $did = $row['doner_id'];
           $date = $row['date'];

            $next = date('d-m-yy' , strtotime("+3 months" , strtotime($date)));

}

}}
   ?>









<!DOCTYPE html>
<html lang="en">

<head >

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">



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


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top" >

  <!-- Page Wrapper -->
  <div id="wrapper" style="direction: rtl;" >

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="direction: ltr;"  >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-right justify-content-right" href="#"   >
        <div class="sidebar-brand-icon rotate-n-15">
        
        </div>
        <div class="sidebar-brand-text mx-3" style="direction: rtl;">النظام التبرع الطوعي للدم <sup></sup></div>
      </a>
<br><br>
<br><br>
<br><br>
<br><br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading"  style="direction: rtl;" >
        الاقسام
      </div>


     
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
          </div>
        </div>
      </li>


      <li class="nav-item" >
         <a class="nav-link" href="doner.php">
         
          <span>الرئيسية</span>
          <i class="fa fa-h-square"></i>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>




       <li class="nav-item">
        <a class="nav-link" href="doner_fasila.php">

           
          <span>اخبار الفصائل </span>
          <i class="fa fa-heartbeat"></i>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>




       <li class="nav-item">
       <a class="nav-link" href="doner_hamlat.php">
          
          <span>اخبار الحملات</span>
         <i class="fa fa-ambulance"></i>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>


     
<hr class="sidebar-divider">

       <li class="nav-item">
       <a class="nav-link" href="doner.php">
          
          <span>تسجيل خروج</span>
         <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>








      <!-- Divider -->
     


 <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

    
    <body >
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" >


<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="#" > </a>
          </div>

          <!-- Content Row -->
          

           <header class="masthead" style="background-image: url('b2.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="row-lg-4 row-md-4 mx-auto">

          <div class="page-heading">
            <font face="MS Sans Serif"><h1 style="color: #ffffff;"> مرحبا بك 
            <?php echo  $name ?></h1></font>
              
        </div>
      </div>
    </div>
  </header>

<?php


if (isset($_POST['submit2'])) {

$comment  = $_POST['comment'];

$query = "INSERT INTO comments (name, emaile, comment) values('$name' , '$emaile' , '$comment') ";

echo "تم ارسال الاقتراح";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 

}



  ?>
      <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">
          <div class="row">
              <!--Grid column-->
              <div class="col-lg-4 col-md-12 wow slideInLeft">

                  <!-- Card -->
                  <div class="card" style="height: 750px"  style="width: 150px">

                  <h1 class="text-center">مرحبا</h1>

<h4 class="card-title text-center"><?php echo $name ?></h4>

                      <!-- Card image -->
                      <form  action="" method="POST">
                        
<input type="text" name="name" value="<?php echo $name;  ?>" class="form-control"><br>

<input type="text" name="nationalty" value="<?php echo $nato; ?>" class="form-control"><br>

<input type="text" name="phone" value="<?php echo  $phone;  ?>" class="form-control"><br>

<input type="text" name="adress" value="<?php echo   $adress; ?>" class="form-control"><br>

<input type="text" name="emaile" value="<?php echo $emaile  ?>" class="form-control"><br>

<button   class="btn btn-primary purple-gradient"  type="submit"  name="submit" class="form-control" >تحديث</button>



                      </form>
                    <!-- Card content -->
                    <hr size="50px">
                   

                    <h5  class="text-right">تاريخ التبرع القادم  <h1><?php echo $next ?></h1></h5><br>

                    
                      <div class="card-body">
 <form  action="" method="POST">
                        

 <hr size="50px">
<p>اضغط هنا ازا اصبت باحد الموانع المؤبدة حفظك الله</p>
<button   class="btn btn-primary purple-gradient"  type="submit4"  name="submit3" class="form-control" >هنا</button>
</form>
                     
                      </div>

                  </div>
                  <!-- Card -->
              </div>
            
          
            
              




      <!--Section: Main info-->
      
         
              <!--Grid column-->
              <div class="col-lg-4 col-md-12 wow slideInRight" style="position: right" >

                  <!-- Card -->
                  <div class="card" style="height: 250px"  style="width: 50px">

                  

<h4 class="card-title text-center"><?php echo $name ?></h4>

<h4 class="text-right">  ضع اقتراحك</h4>
<br><br><br>
                      <!-- Card image -->
                      <form  action="" method="POST">
                        
<textarea class="form-control" name="comment"></textarea>

 <hr size="50px">

<button   class="btn btn-primary purple-gradient"  type="submit"  name="submit2" class="form-control" >تم</button>
</form>
                     
                      <div class="card-body">

                  <!-- Title -->
                      </div>

                  </div>

                  <br><br>
                  <br><br>
                  <div class="card shadow mb-4" style="direction: rtl;">
                <div class="card-header row">
                  <h6 class="m-0 font-weight-bold text-primary" style="direction: rtl;">تنبيه هام !!</h6>
                </div>
                <div class="card-body row" style="direction: rtl; >
                  <p style="direction: rtl;"> عزيزي المتبرع ..عليك اخز العلم بان هناك موانع مؤبدة تمنع من التبرع و هي (السكري و مرض الضغط و الكي او الوشم و تعاطي المخدرات و و مرض القلب)</p>
                  <p class="mb-0"></p>
                </div>
              </div>

                  <!-- Card -->
              </div>
            



            <div class="col-lg-4 col-md-12 wow slideInRight" style="position: right" >

                  <!-- Card -->

                  <!-- Card -->
              </div>
            
            
</div>
      </section>      
              </div>
             
            
              

  <!--Main layout-->
  <main>


  <?php 
if(isset($_POST['submit'])){
 


$name = $_POST['name'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$adress=$_POST['adress'];
$emaile=$_POST['emaile'];


$query = "update doners set name ='{$name}' , nationalty = '{$nato}', phone= '{$phone}' , adress='{$adress}' , emaile = '{$emaile}' where out_id = '{$outid}' ";


$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));


}
}



if (isset($_POST['submit3'])) {

$query = "delete from doners where out_id = '{$outid}' "; 
 $result2 = mysqli_query($conn, $query);
if(!$result2){
die('query failed' . mysqli_error());

        
}



}
?>


     


              


    </div>


        

          <!-- Content Row -->
          
  </body>



    
    

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>






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
