
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


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class=" "></i>
        </div>
        <div class="sidebar-brand-text mx-3">النظام الاداري للتبرع الطوعي بالدم <sup></sup></div>
      </a>
<br><br>
<br><br>
<br><br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" >
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>الحملات</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        الاقسام
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
     
      <!-- Nav Item - Utilities Collapse Menu -->
     
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
          </div>
        </div>
      </li>


      <li class="nav-item">
         <a class="nav-link" href="hamlat.php">
        <i class="fa fa-ambulance"></i>
          <span>اضافة حملة جديدة</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>




       







      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      
       <li class="nav-item">
        <a class="nav-link" href="logoff.php">

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
}
 ?>  
    

   <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  اخر اجتماع
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                
                  <div>
                    <div class="small text-gray-500">مناسبة الاجتماع</div>
                    <span class="font-weight-bold">  <?php echo  $do; ?> </span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    
                  </div>
                  <div>
                    <div class="small text-gray-500">تاريخ الجتماع</div>
                   <span class="font-weight-bold"> <?php echo  $do3; ?></span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                   
                  </div>
                  <div>
                    <div class="small text-gray-500">صالة الاجتماع</div>
                  <span class="font-weight-bold"><?php echo  $do4; ?></span>
                  </div>
                </a>

                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                   
                  </div>
                  <div>
                    <div class="small text-gray-500">الموضوع</div>
                <span class="font-weight-bold">  <?php echo  $do5; ?></span>
                  </div>
                </a>

               
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

          </ul>

        </nav>
    
    <?php 



if (isset($_POST['go'])) {

$monasaba = $_POST['monasaba'];
$topic = $_POST['topic'];
$date = $_POST['date'];
$hall = $_POST['hall'];


if (!empty($monasaba) && !empty($topic) && !empty($date) && !empty($hall)) {
  # code...


$query = "INSERT INTO metting ( monasaba , topic , date , hall ) values ('$monasaba' , '$topic' , '$date' , '$hall') ";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 
 

 echo  "تم انشاء الاجتماع ";

}
else{

echo "<script>alert('نسيت حاجة فاضية') </script>";

}

   }    ?> 

    <body>
        <!-- End of Topbar -->
   <?php  
   error_reporting(0);
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";
}

if(isset($_POST['create'])){

        $place=$_POST["place"];
        $car=$_POST["car"];
        $datee=$_POST["date"];
        $doctor=$_POST["doctor"];
        $nurse=$_POST["nurse"];
        $khabr = $_POST["khabr"];

        if (!empty($place) && !empty($car) && !empty($datee) && !empty($doctor) && !empty($nurse) && !empty($khabr) ) {
            # code...
        

$dude= "INSERT INTO combaigin (THE_place , the_car , the_date , the_doctor , the_nurse , khabr) VALUES (' $place', '$car', ' $datee', '$doctor', '$nurse' , '$khabr')";
    
     if ($conn -> query($dude) === true) {
        header("location:hamlat2.php?1 row insert ");

        echo "تم انشاء حملة";
    }
    else {
         header("location:hamlat2.php?0 row insert ");
    }

    }

    else {
        echo "<script>alert('نسيت حاجة فاضية') </script>";
    }

}
?>

        <!-- Begin Page Content -->
   
        <div class="container-fluid">
        
        

<center>

<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">اضافة حملة</h1>
              </div>
        <center>
            <form class="user" action=" " method="post">

                
                <div style="margin-top:40px;">
                    <div class="row" style="margin-top:20px;">

                        <!-- Name -->
                        <div class="col-lg-9">
                            <input type="text" style="direction:rtl" class="form-control " name="place" required="required">
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>المكان</b></h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">
                            <input type="text" style="direction:rtl" class="form-control " name="car" required="required">
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b> العربية</b></h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">
                            <input type="date" style="direction:rtl"  class="form-control " name="date" required="required" >
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>التاريخ</b></h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-8">
                <input type="text" style="direction:rtl"  class="form-control " name="doctor" required="required" onkeypress="return validate2(event)">
                        </div>
                        <div class="col-lg-4">
                            <h5 class="pull-left"><b>طبيب الحملة</b></h5>
                        </div>
                        <script type="text/javascript">
                          
                          function validate2(event) {
                            
var char = (event.which)?event.which :event.keyCode;
if (char > 31 && (char < 48 || char > 57) ) {

return true;
  
                          }
                          else {
return false;
    
                          }
                        }
                        </script>
                    </div>
                    <br>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-8">
                    <input type="text" style="direction:rtl"  class="form-control " name="nurse" required="required" onkeypress="return validate3(event)">
                        </div>
                        <div class="col-lg-4">
                            <h5 class="pull-left"><b>ممرض الحملة</b></h5>
                        </div>
                        <script type="text/javascript">
                          
                          function validate3(event) {
                            
var char = (event.which)?event.which :event.keyCode;
if (char > 31 && (char < 48 || char > 57) ) {

return true;
  
                          }
                          else {
return false;
    
                          }
                        }
                        </script>
                    </div>

<br><br>
                   <div class="row">
                    <div class="col-lg-8">
                            <textarea style="direction:rtl"  class="form-control mb-4 text-right" name="khabr" required="required"></textarea>
                        </div>
                        <div class="col-lg-4">
                            <h5 class="pull-left">الاعلان للحملة</h5>
                        </div>
                    </div>
<br><br>

                    <button class="btn btn-primary btn-user btn-block" type="submit" style="margin-top:-10px;" name="create">تسجيل</button>
                </div>
                </samp>
                </form>
                </div></div></div></div></div>
                </center>
            </form>
            </center>
            <!-- Default form subscription -->
        </div>
    </div>
</center>
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
