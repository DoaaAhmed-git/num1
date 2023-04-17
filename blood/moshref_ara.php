
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
          <span>المشرف</span></a>
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
         <a class="nav-link" href="sys_moshref.php">
         <i class="fas fa-fw fa-chart-area"></i>
          <span>تقارير الفصائل</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>




       <li class="nav-item">
        <a class="nav-link" href="moshref_hospital.php">

           <i class="fas fa-fw fa-chart-area"></i>
          <span>تقارير طلبات المستشفيات</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>




       <li class="nav-item">
       <a class="nav-link" href="moshref_doners.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>تقارير المتبرعين</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>


       <li class="nav-item">
       <a class="nav-link" href="moshref_hamlat.php">
           <i class="fas fa-fw fa-chart-area"></i>
          <span>تقارير الحملات</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          
        </div>
      </li>



<li class="nav-item">
        <a class="nav-link" href="moshref_ara.php">
        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>اراء و مقترحات</span>
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

          <!-- Sidebar Toggle (Topbar) -->
          
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            
              <!-- Dropdown - Messages -->
              
            

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                عقد اجتماع
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  عقد اجتماع
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                 
                
                   <form  action="" method="POST">

                     <input type="text" name="monasaba" class="form-control" placeholder="المناسبة" required="required"><br>
                      <input type="date" name="date" class="form-control" placeholder="اتاريخ الاجتماع" required="required"><br>
                      <input type="text" name="hall" class="form-control" placeholder="قاعة الاجتماع" required="required"><br>

                        
<textarea class="form-control" name="topic" placeholder="الموضوع" required="required"></textarea>

 <hr size="50px">

<button   class="btn btn-primary purple-gradient"  type="submit"  name="go" class="form-control" >تم</button>
</form>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            
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

        <!-- Begin Page Content -->
        <div class="container-fluid">


<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">تعاليق ومقترحات الزوار</h6>
                </div>
                <div class="card-body">
                  <p>يمكنك الاستفادة من تعليقات و اقتراحات زوار الموقع في تحسين خدمات المعمل حول التبرع الطوعي للدم</p>
                  <p class="mb-0"></p>
                </div>
              </div>



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="direction:ltr;" class="text-right"> التعليق </th>
                     <th style="direction:ltr;" class="text-right">اسم المعلق</th>
                    <th style="direction:ltr;" class="text-right"> البريد الالكتروني</th>
        
                    </tr>

                  </thead>
                  
      
       <?php  

            $as = "SELECT * FROM comments ORDER BY `comment_id` DESC ";
            $result = $conn -> query($as);
                    if ($result -> num_rows > 0 ) 
                        while ($row = $result ->  fetch_assoc( )) {

                           $id1 = $row['comment_id'];

            echo   "<tr>".
                    "<td style='direction:ltr;' class='text-right'>".$row["comment"]."</td>".
                    "<td style='direction:ltr;' class='text-right'>".$row["name"]."</td>".
                    "<td style='direction:ltr;' class='text-right'>".$row["emaile"]."</td>".
                    
"<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$id1}'>"."<button class='btn btn-danger'>"."<i  class='fa fa-trash-o'></i>"." حزف</button></td></a></tr>";

 //echo $id1;       

}


if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
 
$query = "delete from comments where comment_id = {$id}";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 


}
        ?>  


</table>


         


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
