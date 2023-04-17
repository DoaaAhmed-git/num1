
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
         <a class="nav-link" href="doner.php">
         
          <span>الرئيسية</span>
          <i class="fa fa-home"></i>
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


     









      <!-- Divider -->
     


 <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="direction: ltr;">

      <!-- Main Content -->
      <div id="content">
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto" style="direction: ltr;">

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
              <label>العنوان</label>
              <input type="text"  name="username" class="form-control" placeholder="اسم المستخدم " id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
         
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>الخبر</label>
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

        <!-- Begin Page Content -->
        <div class="container-fluid" >


<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="#" > </a>
          </div>

          <!-- Content Row -->
          <div class="row">

           <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4" style="direction: rtl;">
                <div class="card-header py-3" style="direction: rtl;">
                  <h6 class="m-0 font-weight-bold text-primary" >اهمية التبرع بالدم</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="b2.png" alt="">
                  </div>
                  <p> قطرة من دمك تعني الكثير و قد تنقز حياة فرد .. 
سارع بالتسجيل للتبرع الطوعي للدم من خلال تسجيلك يمكنك ملىء استمارة التبرع من
  هنا دون اللجوء للمعمل و بعدها يمكنك القدوم في اي زمن للتبرع بالدم كما يمكنك المشاركة بتعليقاتك و اقتراحاتك لتحسين خدمات المعمل فيما يخص التبرع الطوعي للدم </p>
                  
          <center><a href="acount.php"><button type="submit" class="btn btn-primary btn-user btn-block"  id="sendMessageButton" name="submit">تبرع الان</button></a></center>
                </div>
              </div>

        </div>


<div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">فديو عن التبرع بالدم</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <center><video   width="500" height="500" controls="controls" ><source src="d.mp4" type="video/mp4"></video></center>
              </div>
            </div>
</div>



<div class="row-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4" style="direction: rtl;">
                <div class="card-header py-3" style="direction: rtl;">
                  <h6 class="m-0 font-weight-bold text-primary" >حول معمل استاك</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" style="width: 500px;"  src="ma.png" alt="">
                  </div>
                  <p> يختص معمل الصحة العامة بتقديم الخدمات المعملية (تشخيصية - رقابية) وفي جانب الطب الوقائي لتقصي الأوبئة، ويعتبر المعمل المرجعي الأوحد في السودان. حيث يقوم بالآتي:
وضع السياسات والمعايير والبرتوكولات والموجهات، وكتابة الإجراءات العملية القياسية للتشخيص المعملي لكل المعامل فى السودان والحرص علي متابعة والالتزام بتطبيق المواصفات والطرق القياسية العملية، والترويج لخدمات المعامل الحكومية والخاصة.المشاركة في وضع وتنفيذ الخطط الاستراتيجية والسنوية الخاصة بمعامل الصحة الولائية ومعامل الوحدات الصحية.إجراء الفحوصات النادرة والتحاليل المتخصصة للإصابة المرضية في مجالات التشخيص المعملى والوبائى أو المساعدة علي اجرائها (بالتعاون مع المراكز الأخرى- منظمة الصحة العالمية).إجراء الاختبارات المعملية لتأكيد تشخيص الأمراض، ويشمل  ذلك التنبيه لوجود  الأمراض الوبائية، الاستجابة، ومراقبة سلامة المياه والأغذية.تعزيز القدرة علي الاستجابة والتصدي للأمراض الوبائية من خلال الفحص السريع للعينات وتحديد العوامل المسببة للأمراض، وضمان توفر السعة القدرة علي التشخيص المعملي لعدد كبير من العينات إذا ما دعت الحاجة ( في حالة الطوارئ).يساعد المعمل في التشخيص (في حالات تفشي الوباء) لمعرفة مصدر العدوى: تحديد حامل المرض السليم، تحديد العوائل الخازنة، رصد النمط  الوبائي، القيام بتحليل المعلومات المعملية ومشاركتها.إرسال العينات المعملية المعزولات (الشحن الآمن) للمعامل المرجعية العالمية.المشاركة في عمل نظام التقصي للأوبئة والرصد المرضي بالتنسيق مع إدارة الوبائيات.المشاركة في فرق التدخل السريع في حالات الأوبئه والطوارئ الطبيه.متابعة وتحديد مقاومة الميكروبات للأدوية المعالجة.تقديم الدعم التقني لمعامل الصحة الاقليمية والولائية.الإشراف المنتظم والداعم (عن طريق الزيارات) لمتابعة الأداء بالمعامل الولائية.التدريب والتعليم المستمر للكوادر المعملية علي تقنيات التشخيص المعملي المختلفة، استخدام الاجهزة، جمع - تخزين ونقل العينات المعملية بالطرق السليمة وبصورة آمنة. والتدريب على إجراءات السلامة المعملية.التنسيق وتشجيع تطبيق برامج ضبط الجودة للمعامل الطبية ومعامل البيئة، بما في ذلك التدريب علي الجودة، تقديم الاستشارة، وإجراء اختبارات الكفاءة.

 </p>
                  
                </div>
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
