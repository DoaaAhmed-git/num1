
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
   <div id="wrapper" style="direction: rtl;" >

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="direction: ltr;"  >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-right justify-content-right" href="#"   >
        <div class="sidebar-brand-icon rotate-n-15">
        
        </div>
        <div class="sidebar-brand-text mx-3" style="direction: rtl;">االنظام الاداري للتبرع الطوعي بالدم<sup></sup></div>
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
         <a class="nav-link" href="doctor_add.php">
         
          <span>قائمة المتبرعين</span>
       <i class="fas fa-fw fa-table"></i>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>




       <li class="nav-item">
        <a class="nav-link" href="doctor_add2.php">

           
          <span>اضافة متبرع</span>
          <i class="fas fa-fw fa-chart-area"></i>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>


<hr class="sidebar-divider">

       <li class="nav-item">
       <a class="nav-link" href="logoff.php">
          
          <span>تسجيل خروج</span>
         <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
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
                  <div class="mr-3">
                    
                  </div>
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



if (isset($_GET['add'])) {

 $id = $_GET['add'];


$as = "SELECT * FROM  doners where id = '$id' ";


            $result = $conn -> query($as);
                    if ($result -> num_rows > 0 ) {
                        while ($row = $result ->  fetch_assoc( )) {
                          $id = $row['id'];

 $btt = $row["blood_type"];
 $hemoglobnn = $row["hemogloben"];
 $hbb = $row["heart_beet"];
 $depp = $row["blood_depretion"];


}
}

    if(isset($_POST['submit'])){


$bt = $_POST['bty'];
$hemoglobn=$_POST['hemoglobn'];
$hb=$_POST['hb'];
$dep=$_POST['dep'];

if (!empty($bt)&& !empty($hemoglobn) && !empty($hb) && !empty($dep) ) {
    # code...

$query = "update doners set blood_type = '{$bt}', hemogloben = '{$hemoglobn}' , heart_beet= '{$hb}', blood_depretion='{$dep}'  where id = '{$id}' ";

mysqli_real_escape_string($conn,$query);


echo  "تم فحص متبرع";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}
    
}
else{

    echo "<script>alert('نسيت حاجة فاضية') </script>";
}
}

}
?>


        <!-- Begin Page Content -->
        <br><br>

        <div class="container-fluid">
        
        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h3 mb-0 text-gray-800">فحص متبرع</div>
                     
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user-md"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<center>
<form  action=" " method="POST" class="text-center border border-light p-5" >

                <p class="h4 mb-4 text-right" style="margin-top:-20px;"> <i> 
                </i></p>
                <div style="margin-top:40px;">
                    <div class="row" style="margin-top:20px;">

                        <!-- Name -->
                        <div class="col-lg-4">
                        
                            <b>الفصيلة</b>
                        <br><br>
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="bty" value="<?php echo $btt;  ?>">
                                <option><?php echo $btt;  ?></option>

                               
                                <?php 
   echo "<option value='A-'>A-</option>";
   echo "<option value='A+'>A+</option>";
   echo "<option value='O+'>O+</option>";
   echo "<option value='O-'>O-</option>";
   echo "<option value='B+'>B+</option>";
   echo "<option value='B-'>B-</option>";
   echo "<option value='AB+'>AB+</option>";
   echo "<option value='AB-'>AB-</option>";

                                 ?>
                            </select>
                      </div>


                        
                    </div>
                    <br>

                     
                    <div class="form-group floating-label-form-group controls">
                        <div class="col-lg-4">
                        <p>الهيموقلوبين</p><br>
                

              <select style="direction:rtl"  class="form-control mb-4 text-right" name="hemoglobn" value="<?php echo $hemoglobnn; ?>">
                                <option><?php echo $hemoglobnn ;  ?></option>

                               
                                <?php 

   echo "<option value='17.5gm'>17.5gm</option>";
   echo "<option value='16.2gm'>16.2gm</option>";
   echo "<option value='12.11gm'>12.11gm</option>";
   
                                 ?>
                            </select>
                        </div> 
                    </div>
                    <br>

                    <div class="form-group floating-label-form-group controls">

                        <!-- Name -->
                        <div class="col-lg-4">
                        <p>معدل النبض</p><br>
                

                <select style="direction:rtl"  class="form-control mb-4 text-right" name="hb" value="<?php echo $hbb; ?>">
                                <option><?php echo $hbb ;  ?></option>

                               
                                <?php 

   echo "<option value='60-100'>60-100</option>";
   echo "<option value='اقل من 60'>اقل من 60</option>";
   echo "<option value='اكثر من 100'>اكثر من 100</option>";
   
                                 ?>
                            </select>
                        </div>
          
                    </div>
                    <br>


                    <div class="form-group floating-label-form-group controls">

                        <!-- Name -->
                        
                        <div class="col-lg-4">
                        <p>معدل الضغط الحالي</p><br>
               

                 <select style="direction:rtl"  class="form-control mb-4 text-right" name="dep" value="<?php echo $depp; ?>">
                                <option><?php echo $depp ;  ?></option>

                               
                                <?php 

   echo "<option value='100/81'>100/81</option>";
   echo "<option value='105/73'>105/73</option>";
   echo "<option value='111/78'>111/78</option>";
   echo "<option value='144/90'>144/90</option>";
   
                                 ?>
                            </select>
                        </div>
                        
                    </div >

<br><br>
     <div class="col-sm-1 mb-3 mb-sm-0">
                  <center> <button class="btn btn-info"  type="submit" style="margin-top:-10px;" name="submit">تسجيل</button></center>
                    </div>
                </div>
            </form></center>

<br><br>
<br><br>
<br><br>
<br><br>
          <!-- DataTales Example -->
      
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
