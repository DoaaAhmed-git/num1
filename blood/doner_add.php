
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
        <div class="sidebar-brand-text mx-3" style="direction: rtl;">النظام التبرع الطوعي للدم<sup></sup></div>
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
         
          <span>الرئيس</span>
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
              
                تسجيل دخول
                <i ></i>   
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  تسجيل دخول 
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                 
                  <div>
      
        <form    action="" method="POST"  >
        
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
             
              <input type="text"  name="username" class="form-control" placeholder="اسم المستخدم " id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
         
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
             
              <input  type="password" name="password" rows="5" class="form-control" placeholder="كلمة المرور" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <center><button type="submit" class="btn btn-primary btn-user btn-block"  id="sendMessageButton" name="submit">دخول</button></center>
        </form>

           

            <!-- Nav Item - User Information -->
            
          </ul>

        </nav>
    <?php 

    //Error_reporting(0);

if (isset($_POST['submit'])) {

 $username =$_POST['username'];
 $password= $_POST['password'];
   $username= mysqli_real_escape_string($conn,$username );
 $password= mysqli_real_escape_string($conn,$password );

 $query = "select * from useres where username= '{$username}' ";
 $dude = mysqli_query($conn, $query);

 if (!$dude ) {
 
 die("no" .mysqli_error($conn));    
 }
 
while ($row = mysqli_fetch_array($dude)) {
   
  $db_id = $row['id'];
  $_SESSION['my_id'] = $db_id ;

 $db_jop = $row['jop_type'];
 $db_pass= $row['password'];

 $db_name= $row['username'];
 $_SESSION['my_name'] = $db_name ;


if ($username == $db_name && $password == $db_pass && $db_jop== '6' ) {

     echo '<script type="text/javascript"> location.replace("profile.php"); </script>';

}
}
}


?>
    <body>
        <!-- End of Topbar -->
<?php 


    
    if(isset($_POST['submit2'])){


$fname = $_POST['fname'];
$age=$_POST["age"];
 $email=$_POST["emaile"];
$natu=$_POST['natu'];
$phone=$_POST['phone'];
$adress=$_POST['adress'];
$gender=$_POST['gender'];
$suger=$_POST['suger'];
$depr=$_POST['depr'];
$heart=$_POST['heart'];
$drog=$_POST['drog'];
$other=$_POST['other'];
$tatoo=$_POST['tatoo'];
$outid = $_SESSION['my_id'];

if ($suger == 'نعم' || $depr == 'نعم' || $heart == 'نعم' || $drog == 'نعم' || $other == 'نعم' || $tatoo == 'نعم' ) {

  
  echo "<h3>ناسف لعدم قدرتك على التبرع لوجود احد الموانع المؤبدة !!</h3>";
}

else{
$query = "INSERT INTO doners (name, age, emaile, nationalty, phone, adress, gender, sugar ,depretion , heart ,drogs, health_problems , tatoos , out_id )VALUES('$fname' ,'$age' , '$email', '$natu', '$phone', '$adress', '$gender', '$suger', '$depr', '$heart', '$drog', '$other', '$tatoo' , '$outid')";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}

  echo '<script type="text/javascript"> location.replace("profile.php"); </script>'; 
}


//--------------------------------


}




     ?>
        <!-- Begin Page Content -->
        <div class="container-fluid" >


<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="#" > </a>
          </div>

      
<div class="card shadow mb-4" style="direction: rtl;">
                <div class="card-header row">
                  <h6 class="m-0 font-weight-bold text-primary" style="direction: rtl;">تنبيه هام !!</h6>
                </div>
                <div class="card-body row" style="direction: rtl; >
                  <p style="direction: rtl;">عزيزي المتبرع .. يرجى تنبيهك الى ان هنالك موانع مؤبدة تمنع من التبرع بالدم و هي الامراض المزمنة التي قد تؤثر في دم المريض او بعض العادات السيئة كالعلاج بالكي او رسم وشم .. فازا تم عدم قبولك للتبرع باحد هزه الموانع تقبل الامر و شارك فكرة التبرع الطوعي للجميع و شكرا على محاولتك في العطاء .</p>
                  <p class="mb-0"></p>
                </div>
              </div>

              

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <br><br>
        


            <form    action="" method="POST"  id="contact_me"  name="sendMessage" >
        

                
               
                <div style="margin-top:40px;">


                

           


         <br><br>
         <center>استمارة التبرع</center>
<hr>
                
                <spam class="h4 mb-4 text-right" style="margin-top:-20px;"> 

                    <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              
              <input type="text" name="fname" class="form-control" placeholder="الاسم رباعي" id="name" required data-validation-required-message="Please enter your name." onkeypress="return validate2(event)">
              <p class="help-block text-danger"></p>
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
                    <div class="form-group floating-label-form-group controls">

                        <!-- Name -->
                    
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>العمر </b></h5>
                        </div>
                        <div class="form-group floating-label-form-group controls">
                            <select  class="form-control mb-4 text-right" name="age" required="required">
                                <option> </option>
                                <option value="18 - 30">18 - 30</option>
                                <option value="30 - 40">30 - 40</option>
                                <option value="40 - 60">40 - 60</option>
          
                            </select>
                        </div>
                        
                    </div>


                    <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>لبريد الاكتروني </label>
              <input type="email" name="emaile" class="form-control" placeholder="البريد الاكتروني" id="البريد الاكتروني" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>

                    </div>
                   
                    <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>الجنسية</label>
              <input type="text" name="natu" class="form-control" placeholder="الجنسية" id="name" required data-validation-required-message="Please enter your name."  onkeypress="return validate3(event)">
              <p class="help-block text-danger"></p>
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

                    <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>الهاتف</label>
              <input type="text" name="phone" class="form-control" placeholder="الهاتف" id="name" required data-validation-required-message="Please enter your name." onkeypress="return validate4(event)">
              <p class="help-block text-danger"></p>
            </div>

            <script type="text/javascript">
                          
                          function validate4(event) {
                            
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

                  <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>العنوان</label>
              <input type="text" name="adress" class="form-control" placeholder="العنوان" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>

                    <div class="form-group floating-label-form-group controls">

                      <div class="col-lg-3">
                            <h5 class="pull-left"><b>الجنس </b></h5>
                        </div>

                        <div class="form-group floating-label-form-group controls">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="gender" required="required">
                                <option> </option>
                                <option value="ذكر"> ذكر</option>
                                <option value="انثى"> انثى</option>
                            </select>
                        </div>
                        
                    </div>

                    <div class="form-group floating-label-form-group controls">

                        <!-- Name -->
                        <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل تعاني من مرض السكري </b></h5>
                        </div>

                        <div class="form-group floating-label-form-group controls">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="suger" required="required">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا"> لا </option>
                            </select>
                        </div>
                        
                    </div>

                    <div class="form-group floating-label-form-group controls">

                        <!-- Name -->
                       <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل لديك ضغط الدم المرتقع </b></h5>
                        </div>

                        <div class="form-group floating-label-form-group controls">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="depr" required="required">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا "> لا </option>
                            </select>
                        </div>
                        
                    </div>

                    <div class="form-group floating-label-form-group controls">

                        <!-- Name -->
                      <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل لديك مشاكل في القلب </b></h5>
                        </div>

                        <div class="form-group floating-label-form-group controls">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="heart" required="required">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا"> لا </option>
                            </select>
                        </div>
                        
                    </div>

                    <div class="form-group floating-label-form-group controls">

                        <!-- Name --> 
                        <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل تتعاطي الادوية حاليا </b></h5>
                        </div>

                        <div class="form-group floating-label-form-group controls">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="drog" required="required">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا"> لا </option>
                            </select>
                        </div>
                       
                    </div>
                    <div class="form-group floating-label-form-group controls">

                        <!-- Name -->
                        <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل لديك مشاكل  صحية اخرى </b></h5>
                        </div>

                        <div class="form-group floating-label-form-group controls">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="other" required="required">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا"> لا </option>
                            </select>
                        </div>
                       
                    </div>

                    <div class="form-group floating-label-form-group controls">

                        <!-- Name -->
                       
                        <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل لديك كي  او حجامة </b></h5>
                        </div>
                        <div class="form-group floating-label-form-group controls">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="tatoo" required="required">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا"> لا </option>
                            </select>
                        </div>
                       
                    </div>





                    <button type="submit" class="btn btn-primary" id="sendMessageButton" name="submit2" >ارسال</button>
        
                </div>





            </form>
            <!-- Default form subscription -->
        </div>
    </div>

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



<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
 




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
