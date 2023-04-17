
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

error_reporting(0);

    if(isset($_POST['submit'])){

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

if (!empty($fname) && !empty($age) && !empty($email) && !empty($natu) && !empty($phone) && !empty($adress) && !empty($gender) && !empty($suger) && !empty($depr) && !empty($heart) && !empty($drog) && !empty($other) && !empty($tatoo)) {
    # code...


$query = "INSERT INTO doners (name, age, emaile, nationalty, phone, adress, gender, sugar ,depretion , heart ,drogs, health_problems , tatoos ) VALUES('$fname' ,'$age' , '$emaile', '$natu', '$phone', '$adress', '$gender', '$suger', '$depr', '$heart', '$drog', '$other', '$tatoo')";


echo  "تم اضافة متبرع جديد ";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());



}

}
else
{
    
}
  }  
     ?>

        <!-- Begin Page Content -->
        <br><br>
<br><br>

<br><br>
<br><br>
        <div class="container-fluid">
        
        



<div class="row">
        <div class="col-lg-3"></div>
        <!--<div class="col-lg-3"></div>-->
        <div class="col-lg-6 text-right" style="margin-top:-190px;">
            <form class="text-center border border-light p-5" action="" method="POST">

                <spam class="h4 mb-4 text-right" style="margin-top:-20px;"> <i> اضافة متبرع
                </i></spam>
                <div style="margin-top:40px;">

                    <br><br>
                    <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              
              <input type="text" name="fname" class="form-control" placeholder="الاسم رباعي" id="name" required data-validation-required-message="Please enter your name." onkeypress="return validate4(event)">
              <p class="help-block text-danger"></p>
            </div>

            <script type="text/javascript">
                          
                          function validate4(event) {
                            
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
             
              <input type="email" name="emaile" class="form-control" placeholder="البريد الاكتروني" id="البريد الاكتروني" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>

                    </div>
                   
                           <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>الجنسية</label>
              <input type="text" name="natu" class="form-control" placeholder="الجنسية" id="name" required data-validation-required-message="Please enter your name." onkeypress="return validate3(event)">
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
              <input type="text" name="phone" class="form-control" placeholder="الهاتف" id="name" required data-validation-required-message="Please enter your name." onkeypress="return validate2(event)">
              <p class="help-block text-danger"></p>
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




                   <button type="submit" class="btn btn-info" id="sendMessageButton" name="submit" >تسجيل</button>
                </div>

            </form>
            <!-- Default form subscription -->
        </div>
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
 




 function Validation(){
    this.errorColor = "#f7473f";
    this.submitColor = "gray";
    this.conf = function(info){
        
        var limiter = false;
        var t = document.getElementsByClassName(info["className"]);
        for(var i=0; i < t.length ;i++){
            limiter = this.check(t[i]);
            if(!limiter){
                break;
            }
        }
        return limiter;
    };
    
    this.check = function(data){
        /* step 1 : clean the space form text begin */
        for(var i =0; i < data.value.length;i++){
            if( data.value.charCodeAt(i) != 32 ){
                break;
            }
        }
        data.value = data.value.slice(i,data.value.length);
        
        /* step 2 : check text length */
        if(data.value.length > 0){
            return true;
        }else{
            return false;
        }
    };
    
    this.fullName = function(Element){
        var nameMatrix = Element.value.split(' ');
        if(nameMatrix.length > 2){
           this.setColor(Element,true);
        }else{
            this.setColor(Element,false);
        }
        
    };
    
    this.Text = function(Element){
        var pointer = true;
        if(this.check(Element)){
            var len = Element.value.length;
            var marks = "+*/`~@#$%^&()=<>?\\|.";
            for(var i =0; i < len ; i++){
                if(marks.indexOf(Element.value[i]) > 0){
                    pointer = false;
                    break;
                }
            }
        }else{
            pointer = false;
        }
        this.setColor(Element,pointer);  
    };
    
    this.setColor = function(Element,pointer){
        if(pointer){
            Element.style.borderColor = this.submitColor;
        }else{
            Element.style.borderColor = this.errorColor;
        }
    };
    
    this.startProcess = function(data){
        var req = data; // data is contain the command , table , type and other important keys
        $.post("control/control.php",req,function(res){
            if(data['command'] === 'logout'){
                if(res === '1'){
                    location.replace('index.php');
                }
            }else{
                if(data['type'] === 'delete'){
                    $("."+data['table']+data['id']).remove();
                }else if(data['type'] === "acceptSuit"){
                    userApi.acceptLawsuit(data);
                }else if(data['type'] === "openSession"){
                    userApi.openSession(data);
                }
            }
            
        });
    };
}
validate = new Validation();




</body>

</html>
