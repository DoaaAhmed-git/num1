
<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";
}


 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
 <div id="wrapper" style="direction: rtl;" >

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="direction: ltr;"  >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-right justify-content-right" href="#"   >
        <div class="sidebar-brand-icon rotate-n-15">
        
        </div>
        <div class="sidebar-brand-text mx-3" style="direction: rtl;">االنظام الاداري لكتب العقارات<sup></sup></div>
      </a>
<br><br>
<br><br>
<br><br>
<br><br>
      <!-- Divider -->
  

      <!-- Nav Item - Dashboard -->
    <br><br>
<br><br>
<br><br>
  <hr class="sidebar-divider">
    <hr class="sidebar-divider">

<li class="nav-item active">
        <a class="nav-link" href="sys.php">
         <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>المشرف</span></a>
      </li>

      <!-- Divider -->
    

      <!-- Heading -->
      <div class="sidebar-heading"  style="direction: rtl;" >
        الاقسام
      </div>


     
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
          </div>
        </div>
      </li>


     <li class="nav-item">
        <a class="nav-link" href="sys.php">
          <i class="fa fa-user-md"></i>
          <span>الطبيب</span>
        </a>
        
      </li>



       <li class="nav-item">
        <a class="nav-link" href="sys.php">
          <i class="fa fa-heartbeat"></i>
          <span>المعمل</span>
        </a>
       
      </li>




      <li class="nav-item">
        <a class="nav-link" href="sys.php">
          <i class="fa fa-ambulance"></i>
          <span>الحملات</span>
        </a>
       
      </li>


 

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

    
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <div class="row">

   

 <body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="col justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
         

            <!-- Nested Row within Card Body -->
            
            <div class="row">
             
              
                <div class="p-5">
                 

                  <?php 

    //Error_reporting(0);

if (isset($_POST['submit'])) {

 $username =$_POST['username'];
 $password= $_POST['password'];

   $username= mysqli_real_escape_string($conn,$username );
   $password= mysqli_real_escape_string($conn,$password );


 $query = "select * from useres where username = '{$username}' ";
 $dude = mysqli_query($conn, $query);

 if (!$dude ) {
 
 die("no" .mysqli_error($conn));    
 }
 
while ($row = mysqli_fetch_array($dude)) {
   
  $db_id = $row['id'];
  $_SESSION['my_id'] = $db_id;

 $db_jop = $row['jop_type'];
 $_SESSION['my_jop'] =  $db_jop;


 $db_pass= $row['password'];

 $db_name= $row['username'];
 $_SESSION['my_name'] = $db_name ;



if ($username == $db_name && $password == $db_pass && $db_jop== '1') {

//$_SESSION['username'] = $db_name;
//$_SESSION['jop_type'] = $db_jop;


     echo '<script type="text/javascript"> location.replace("doctor_add.php"); </script>';


}

elseif ($username == $db_name && $password == $db_pass && $db_jop== '3') {


echo '<script type="text/javascript"> location.replace("hospital2.php"); </script>';
    
 } 


 elseif ($username == $db_name && $password == $db_pass && $db_jop== '4') {


echo '<script type="text/javascript"> location.replace("lab.php"); </script>';
    
 } 


elseif ($username == $db_name && $password == $db_pass && $db_jop== '5') {


echo '<script type="text/javascript"> location.replace("hamlat.php"); </script>';
    
 } 


 elseif ($username == $db_name && $password == $db_pass && $db_jop== '2') {


echo '<script type="text/javascript"> location.replace("sys_moshref.php"); </script>';
    
 } 




elseif ($username == $db_name && $password == $db_pass && $db_jop== '6') {


echo '<script type="text/javascript"> location.replace("index.php"); </script>';
    
 } 

echo "كلمة السر غير مطابقة لاسم المستخدم";

}

}?>
                   <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="me3.png" alt="">
                  <form class="user" action="" method="POST">
                    <div class="form-group">
                     <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="username" required="required">
                    </div>
                    <div class="form-group">
                      <input type="password" style="direction:rtl"  class="form-control mb-4 text-right" name="password" required="required">
                    </div>
                    <div class="form-group">
                     
                 <button class="btn btn-info " type="submit" style="margin-top:2%; width:30%" name="submit">تسجيل الدخول</button><br><br>
                   
                    
                  </form>

                  
                 
                </div>
              </div>
            </div>


          </div>
        </div>

      </div>

    </div>

  </div>
  </body>



      </div>
    

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

  <!-- Bootstrap core JavaScript-->
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





</body>

</html>
