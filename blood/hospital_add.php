
<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";
}


 ?>

 <?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">


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
        <div class="sidebar-brand-text mx-3" style="direction: rtl;">االنظام التبرع الطوعي للدم<sup></sup></div>
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
         <a class="nav-link" href="hospital_add.php">
         
          <span>اضافة طلب</span>
          <i class="fa fa-heartbeat"></i>
          
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>




       <li class="nav-item">
        <a class="nav-link" href="hospital.php">

           
          <span>قائمة الطلبات </span>
          <i class="fa fa-h-square"></i>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>




<hr class="sidebar-divider">

      <!-- Heading -->
      
       <li class="nav-item">
        <a class="nav-link" href="hospital_login.php">

        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>تسجيل خروج</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>

     




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
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
 
         
          <ul class="navbar-nav ml-auto">

   
            <div class="topbar-divider d-none d-sm-block"></div>

          </ul>

        </nav>
    
    
<br><br>

   <center><?php echo "مرحبا مستشفى " ; echo $_SESSION['my_name'];
 ?></center>
<br><br>

<br><br>
        
   
<body>
        <!-- End of Topbar -->

 <br><br>
        <!-- Begin Page Content -->
        <div class="container-fluid" >


<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="#" > </a>
          </div>

          <!-- Content Row -->
      
  
      
        



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
        header("location:hospital_add.php?1 row insert ");
        
        echo  "تم انشاء طلب جديد ";

    } }

    else {
        echo "<script>alert('نسيت حاجة فاضية')</script>";
    }
   }    
}


?>
<!--Main layout-->
<main>
    <!-- Default form subscription -->
  <center>
    <div class="row container">
        
        <div class="col-lg-12 text-left" style="margin-top:-20%;">
            <form class="text-center border border-light p-5" action=" " method="post">

                <samp class="h4 mb-4 text-right" style="margin-top:-20px;"> <i>
                </i></samp>
                <div style="margin-top:40px;">
                    <div class="col" style="margin-top:20px;">

                        <!-- Name -->
                        <div class="col-lg-2">
                            <h5 class="pull-right"><b>نوع الدم</b></h5>
                        </div>
                        <div class="col-lg-9">
                            <select  class="form-control mb-4 text-right" name="type" required="required">
                                <option> </option>
                                <option value="Red blood">Red blood</option>
                                <option value="Plazma">Plazma</option>
                                <option value="Platelets">Platelets</option> 
                            </select>
                        </div>

                        <script type="text/javascript">
                          
                          function validate(event) {
                            
var char = (event.which)?event.which :event.keyCode;
if (char > 31 && (char < 48 || char > 57) ) {

return true;
  
                          }
                          else {
return false;
                            
                          }
                        }
                        </script>

            <div class="col-lg-9">
             <div class="col-lg-2">
                            <h5 class="pull-right"><b> المريض</b></h5>
                        </div>
                            <input type="text" style="direction:rtl" class="form-control mb-4 text-right"  name="pation" required="required" id="num"  onkeypress="return validate(event)" title="فقط حروف">
                        </div>
                       
                    </div>
                    
                    <div class="col">

                        <div class="col-lg-9">
                        <div class="col-lg-2">
                            <h5 class="pull-left"><b>الكمية </b></h5>
                        </div>
 <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="mount" required="required" onkeypress="return validate2(event)" title="فقط اعداد">
                        </div>
                        <script type="text/javascript">
                          
                          function validate2(event) {
                            
var char = (event.which)?event.which :event.keyCode;
if (char > 31 && (char < 48 || char > 57) ) {

return false;
  
                          }
                          else {
return true;
                            
                          }
                        }
                        </script>
                    </div>

           <div class="col">

                        <!-- Name -->
                        <div class="col-lg-5"></div>

                        <div class="col-lg-9">
                         <div class="col-lg-2">
                            <h5 class="pull-left"><b>الفصيلة </b></h5>
                        </div>
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="bty" required="required">
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
                       
                    </div>


                    <div class="col">

                        <!-- Name -->
                        <div class="col-lg-9">
                        <div class="col-lg-2">
                            <h5 class="pull-left"><b>التركيز</b></h5>
                        </div>
                            

                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="tarkeez"  required="required">
                                  

   <option value='17.5gm'>17.5gm</option>
  <option value='16.2gm'>16.2gm</option>
  <option value='12.11gm'>12.11gm</option>
   
                                 
                            </select>

                        </div>
                        
                    </div>




          <div class="col">

                        <!-- Name -->
                        <div class="col-lg-9">
                         <div class="col-lg-2">
                            <h5 class="pull-left"><b>المرض</b></h5>
                        </div>
                            <input type="text" style="direction:rtl"  class="form-control mb-4 text-right" name="disease" required="required">
                        </div>
                       
                    </div>
          <div class="col">

                        <!-- Name -->
                        <div class="col-lg-9">
                        <div class="col-lg-2">
                            <h5 class="pull-left"><b>تاريخ الطلب</b></h5>
                        </div>
                            <input type="date" style="direction:rtl"  class="form-control mb-4 text-right" name="daate" required="required">
                        </div>
                        
                    </div>


                    <button class="btn btn-info " type="submit" name="create">طلب</button>
                </div>

            </form>
            <!-- Default form subscription -->
        </div>
    </div>
</main>






        

          <!-- Content Row -->
       </div>   
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


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
 
</body>

</html>
