
<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";
}


 ?>
<?php  session_start() ?>

 
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
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="doctor_search.php" method="POST">
            <div class="input-group">
              <div class="input-group-append" >
              <button class="btn btn-primary" type="submit" name="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
 <input type="text" class="form-control bg-light border-0 small" placeholder="ابحث عن مستشفى.." aria-label="Search" aria-describedby="basic-addon2" name="search" >
                
              </div>
            </div>
          </form>



          <!-- Topbar Navbar -->
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

<br><br><br>

<form action="" method="POST">
    
    <th colspan="5" class="text-right"  ><button class='btn btn-success'  name="submit2" type="submit">غير موجود</button></th>

<th class="text-right">


 <button  name="submit3" type="submit" class='btn btn-success' >متوفر جزئي</button></th>
 <button  name="submit4" type="submit" class='btn btn-success' >متوفر كامل</button></th>

</form>
<br>




        <?php 
        error_reporting(0);
if (isset($_GET['id'])) {
$id1= $_GET['id'];


if (isset($_POST['submit2'])) {

$query = "update blood_request set statue = 'غير موجود اطلاقا'  where id = '{$id1}' ";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}
echo "done";
}

}



if (isset($_POST['submit3'])) {


    $id1 = $_GET['id'];

$query = "update blood_request set statue ='ليست كافية'  where id = '{$id1}' ";

$result = mysqli_query($conn, $query);
if(!$result)
die('query failed' . mysqli_error());



    
}



if(isset($_POST["submit4"] )){

   $id1 = $_GET['id'];

$query = "update blood_request set statue = 'متوفر'  where id = '{$id1}' ";
$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}
}


if (isset($_GET['delete'])) {
  $_GET['delete'];
   $id = $_GET['delete'];
 
$query = "update  blood_buttel  set center = NULL , frezar = NULL , size = NULL , the_kind = NULL , fasela = NULL , statue = NULL  where id = '{$id}'"; 

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 

}

 ?>


    <body>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" >


<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="#" > </a>
          </div>

          <!-- Content Row -->
      
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    
                      
                      <th style="direction:rtl;width:30px; " class="text-right">الحجم</th>
             <th style="direction:rtl; " class="text-right">الثلاجة</th>
            <th style="direction:rtl; " class="text-right">الفصيلة</th>
            <th style="direction:rtl; " class="text-right">التركيز</th>
            <th style="direction:rtl; " class="text-right">نوع الدم</th>
            
                  </thead>
                  
          

       <?php 

error_reporting(0);

 $id1 = $_GET['id'];

//$_SESSION['id'] = $id1;

if(isset($_GET['search'] ))

{

 $ff =  urlencode($_GET['search']);
    
    if ($ff === 'O-') {
$query= "select * from blood_buttel where  fasela = 'O-' ";

mysqli_real_escape_string($conn,$query);
$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());
}
 $count = mysqli_num_rows($result);
 if ($count == 0) {
echo " ";
}

else{
     
 while ($row = $result ->  fetch_assoc( )) {

     $kees_id =  $row["id"];

     $dude= $row["size"];
     $dude2= $row["frezar"];
     $dude3= $row["center"];
     $dude4= $row["the_kind"];
mysqli_real_escape_string($conn, $query);

 echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["size"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["frezar"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["fasela"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["center"]."</td>".
                     "<td style='direction:rtl;' class='text-right'>".$row["the_kind"]."</td>".

"<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

}
}
}


/////////////////////////
    if ($ff === 'AB-') {
$query= "select * from blood_buttel where  fasela IN ('A-','O-','AB-','B-') ";

mysqli_real_escape_string($conn,$query);
$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());
}
 $count = mysqli_num_rows($result);
 if ($count == 0) {
echo " ";
}

else{
     
 while ($row = $result ->  fetch_assoc( )) {

     $kees_id =  $row["id"];

     $dude= $row["size"];
     $dude2= $row["frezar"];
     $dude3= $row["center"];
     $dude4= $row["the_kind"];
mysqli_real_escape_string($conn, $query);

 echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["size"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["frezar"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["fasela"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["center"]."</td>".
                     "<td style='direction:rtl;' class='text-right'>".$row["the_kind"]."</td>".

"<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

}
}
}
///////////////////////////////

    if ($ff === 'AB+') {
$query= "select * from blood_buttel where  fasela IN ('O+','O-','A-','AB-','B-' , 'A+' ,'B+') ";

mysqli_real_escape_string($conn,$query);
$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());
}
 $count = mysqli_num_rows($result);
 if ($count == 0) {
echo " ";
}

else{
     
 while ($row = $result ->  fetch_assoc( )) {

     $kees_id =  $row["id"];

     $dude= $row["size"];
     $dude2= $row["frezar"];
     $dude3= $row["center"];
     $dude4= $row["the_kind"];
mysqli_real_escape_string($conn, $query);

 echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["size"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["frezar"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["fasela"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["center"]."</td>".
                     "<td style='direction:rtl;' class='text-right'>".$row["the_kind"]."</td>".

"<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$kees_id}' >"."<button class='btn btn-success'>حزف</button></a></td>"."</tr>";

//echo  $id = $_GET['delete'];




}
}
}



///////////////////////////////////////////


    if ($ff === 'O+') {
$query= "select * from blood_buttel where  fasela IN ('O+','O-') ";

mysqli_real_escape_string($conn,$query);
$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());
}
 $count = mysqli_num_rows($result);
 if ($count == 0) {
echo " ";
}

else{
     
 while ($row = $result ->  fetch_assoc( )) {

     $kees_id =  $row["id"];

     $dude= $row["size"];
     $dude2= $row["frezar"];
     $dude3= $row["center"];
     $dude4= $row["the_kind"];
mysqli_real_escape_string($conn, $query);

 echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["size"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["frezar"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["fasela"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["center"]."</td>".
                     "<td style='direction:rtl;' class='text-right'>".$row["the_kind"]."</td>".

"<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

}
}




}


////////////////////////////////////////




 if ($ff === 'B+') {
$query= "select * from blood_buttel where  fasela IN ('O+','O-' , 'B+','B-') ";

mysqli_real_escape_string($conn,$query);
$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());
}
 $count = mysqli_num_rows($result);
 if ($count == 0) {
echo " ";
}

else{
     
 while ($row = $result ->  fetch_assoc( )) {

     $kees_id =  $row["id"];

     $dude= $row["size"];
     $dude2= $row["frezar"];
     $dude3= $row["center"];
     $dude4= $row["the_kind"];
mysqli_real_escape_string($conn, $query);

 echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["size"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["frezar"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["fasela"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["center"]."</td>".
                     "<td style='direction:rtl;' class='text-right'>".$row["the_kind"]."</td>".

"<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

}
}
}



 if ($ff === 'B-') {
$query= "select * from blood_buttel where  fasela IN ('B-','O-') ";

mysqli_real_escape_string($conn,$query);
$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());
}
 $count = mysqli_num_rows($result);
 if ($count == 0) {
echo " ";
}

else{
     
 while ($row = $result ->  fetch_assoc( )) {

     $kees_id =  $row["id"];

     $dude= $row["size"];
     $dude2= $row["frezar"];
     $dude3= $row["center"];
     $dude4= $row["the_kind"];
mysqli_real_escape_string($conn, $query);

 echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["size"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["frezar"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["fasela"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["center"]."</td>".
                     "<td style='direction:rtl;' class='text-right'>".$row["the_kind"]."</td>".

"<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

}
}
}

///////////////////////////////



 if ($ff === 'A+') {
$query= "select * from blood_buttel where  fasela IN ('O+','O-','A+', 'A-') ";

mysqli_real_escape_string($conn,$query);
$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());
}
 $count = mysqli_num_rows($result);
 if ($count == 0) {
echo " ";
}

else{
     
 while ($row = $result ->  fetch_assoc( )) {

     $kees_id =  $row["id"];

     $dude= $row["size"];
     $dude2= $row["frezar"];
     $dude3= $row["center"];
     $dude4= $row["the_kind"];
mysqli_real_escape_string($conn, $query);

 echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["size"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["frezar"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["fasela"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["center"]."</td>".
                     "<td style='direction:rtl;' class='text-right'>".$row["the_kind"]."</td>".

"<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

}
}
}



 if ($ff === 'A-') {
$query= "select * from blood_buttel where  fasela IN ('A-','O-') ";

mysqli_real_escape_string($conn,$query);
$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());
}
 $count = mysqli_num_rows($result);
 if ($count == 0) {
echo " ";
}

else{
     
 while ($row = $result ->  fetch_assoc( )) {

     $kees_id =  $row["id"];

     $dude= $row["size"];
     $dude2= $row["frezar"];
     $dude3= $row["center"];
     $dude4= $row["the_kind"];
mysqli_real_escape_string($conn, $query);

 echo   "<tr>".
                    "<td style='direction:rtl;' class='text-right'>".$row["size"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["frezar"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["fasela"]."</td>".
                    "<td style='direction:rtl;' class='text-right'>".$row["center"]."</td>".
                     "<td style='direction:rtl;' class='text-right'>".$row["the_kind"]."</td>".

"<td style='direction:rtl;' class='text-right'>"."<a href='?deletee={$kees_id}' ><button class='btn btn-success'>حزف</button></a></td>"."</tr>";



}
}

}

 
//--------------------------------------------





}
//-----------------------------------------

 ?>
        </table>      
      
        



        

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
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">


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



  <!-- Bootstrap core JavaScript-->
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
    

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Plazma", "Red blood", "Platelets"],
            datasets: [{
                label: '# of Votes',
                data: [val, val2, val3],
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
