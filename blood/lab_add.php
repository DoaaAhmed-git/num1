
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
         <a class="nav-link" href="lab.php">
         
          <span>اضافة كيس</span>
          <i class="fa fa-heartbeat"></i>
          
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>




       <li class="nav-item">
        <a class="nav-link" href="lab_hospital.php">

           
          <span>طلبات المستشفى </span>
          <i class="fa fa-h-square"></i>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>




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

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
 
         
          <ul class="navbar-nav ml-auto">

   
            <div class="topbar-divider d-none d-sm-block"></div>

          </ul>

        </nav>
    
    

<br><br><br>
<?php  

$_GET['do'];
$_GET['do2'];

 $fasela =  urlencode($_GET['do2']);
 
//echo $_SESSION['fasela'] = $fasela;

 $id = $_GET['do'];

  $n = time();
  $me = date('Y-m-d' , $n);


// echo "          \n \n \n        ";
//echo $ndate = date($me , strtotime($me.'+2 day'));
//echo $n->modify('1');
// $fasela = mysqli_real_escape_string($conn , $_GET['do2']);


$query= " select  date from  blood_buttel ";
 mysqli_real_escape_string($conn,$query);

     $result = mysqli_query($conn, $query);

     while ($row = mysqli_fetch_array($result)) {

          $date = $row['date'];
           
          

        $diff = abs( strtotime($me) - strtotime($date ) );

        $y = floor($diff / (365*60*60*24) );
       
          $m = floor( ($diff - $y  * (365*60*60*24 ) ) / (30*60*60*24) * 30 );

          //echo $d = floor( ($diff - $y  * ( 365*60*60*24)  - $m * (30*60*60*24) ) / (60*60*24) );




if(!$result){
die('query failed' . mysqli_error());

}




 $query = "update blood_buttel set statue = '$m' where date = '{$date}' "; 
 $result2 = mysqli_query($conn, $query);
if(!$result2){
die('query failed' . mysqli_error());

        
}


if ($m >= '42') {
   
   
$query = " update  blood_buttel  set center = NULL , frezar = NULL , size = NULL , the_kind = NULL , fasela = NULL , statue = NULL  where date = '{$date}' "; 
 $result2 = mysqli_query($conn, $query);
if(!$result2){
die('query failed' . mysqli_error());

}

}

}

 ///----------------------------------------------------

    if(isset($_POST['submit'])){

        $fr=$_POST["fr"];
        $typ=$_POST["typ"];
        $size=$_POST["size"];
        $tar=$_POST["tar"];
        $date = $_POST["date"];
        
        if (!empty($fr) && !empty($typ) && !empty($size) && !empty($tar) && !empty($date) ) {
            # code...
        
       // $fasela = mysqli_real_escape_string($conn ,$fasela);
       
$query= "INSERT INTO blood_buttel(frezar, the_kind, size, center , doner_id , fasela , date) VALUES ('$fr', ' $typ', ' $size', '$tar' , '$id' , '$fasela', '$date')";


 mysqli_real_escape_string($conn,$query);

echo  "تم تسجيل كيس دم جديد ";

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
    <br><br><br>
    <br><br><br>    
      
<body>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" >


<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="#" > </a>
          </div>

          <!-- Content Row -->
      
  
      
        


    <!-- Default form subscription -->
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 text-right" style="margin-top:-190px;">
            <form class="text-center border border-light p-5" action="#!" method="POST">

                <p class="h4 mb-4 text-right" style="margin-top:-20px;"> <i> تسجيل كيس دم
                </i></p>
                <div style="margin-top:40px;">
                    <div class="row" style="margin-top:20px;">

                        <!-- Name -->
                        <div class="col-lg-9">
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>الثلاجة</b></h5>
                        </div>
          <input type="text" style="direction:rtl" class="form-control mb-4 text-right" name="fr" required="required" onkeypress="return validate2(event)">
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
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">

                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>نوع الدم</b></h5>
                        </div>
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="typ" required="required">
                               
                                <option value="Red blood">Red blood</option>
                                <option value="Plazma">Plazma</option>
                                <option value="Platelets">Platelets<option> 
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">

                            <div class="col-lg-3">
                            <h5 class="pull-left"><b>الحجم</b></h5>
                        </div>

                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="size" required="required">
                        
   <option value='400'>400</option>
   <option value='450'>450</option>
   
  
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">
                            
                       <div class="col-lg-3">
                            <h5 class="pull-left"><b>التركيز</b></h5>
                        </div>
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="tar" required="required">
                        
   <option value='17.5gm'>17.5gm</option>
   <option value='16.2gm'>16.2gm</option>
   <option value='12.11gm'>12.11gm</option>
  
                            </select>
                        </div>
                        
                    </div>

                     <div class="row">

                        <!-- Name -->
                        <div class="col-lg-9">
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>التاريخ</b></h5>
                        </div>
                            <input type="date" style="direction:rtl"  class="form-control mb-4 text-right" placeholder="yyyy-mm-dd" name="date" required="required">
                        </div>
                        
                    </div>


                    <button class="btn btn-info btn-block" type="submit" style="margin-top:-10px;" name="submit">تسجيل</button>
                </div>

            </form>
            <!-- Default form subscription -->
        </div>
    </div>

</div>



        

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
