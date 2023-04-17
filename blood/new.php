<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>سجل الان</h1>
            <span class="subheading">بعد التسجيل يمكنك القدوم للمركز للتبرع في اقرب فرصة ممكنة</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
    
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form name="sentMessage" id="contactForm" novalidate  action="#!" method="POST">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>اسم المستخدم</label>
              <input type="text" name="username" class="form-control" placeholder="سم المستخدم" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>

            </div>
          </div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني" id="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Phone Number</label>
              <input type="tel" name="phone"  class="form-control" placeholder="الهاتف" id="phone" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
           <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>كلمة المرور</label>
              <input type="text" name="password" class="form-control" placeholder="الاسم رباعي" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>

            </div>
          </div>
 <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>الاسم رباعي</label>
              <input type="text" name="fname" class="form-control" placeholder="كلمة السر" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>

            </div>
          </div>
           <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>الجنسية</label>
              <input type="text" name="natu" class="form-control" placeholder="الجنسية" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>

            </div>
          </div>
           <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>العنوان</label>
              <input type="text" name="adress" class="form-control" placeholder="العنوان" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>

            </div>
          </div>
           <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>العمر</label>
              <input type="text" name="age" class="form-control" placeholder="العمر" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>

            </div>
          </div>
<br>
<hr>

                 <div class="row">

          
                        <div class="col-lg-5"></div>

                        <div class="col-lg-4">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="gender">
                                <option> </option>
                                <option value="ذكر"> ذكر</option>
                                <option value="نثى"> انثى</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="pull-left"><b>الجنس </b></h5>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-2"></div>

                        <div class="col-lg-4">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="suger">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا"> لا </option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل تعاني من مرض السكري </b></h5>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-2"></div>

                        <div class="col-lg-4">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="depr">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا "> لا </option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل لديك ضغط الدم المرتقع </b></h5>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-2"></div>

                        <div class="col-lg-4">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="heart">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا"> لا </option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل لديك مشاكل في القلب </b></h5>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-2"></div>

                        <div class="col-lg-4">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="drog">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا"> لا </option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل تتعاطي الادوية حاليا </b></h5>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-2"></div>

                        <div class="col-lg-4">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="other">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا"> لا </option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل لديك مشاكل  صحية اخرى </b></h5>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Name -->
                        <div class="col-lg-2"></div>

                        <div class="col-lg-4">
                            <select style="direction:rtl"  class="form-control mb-4 text-right" name="tatoo">
                                <option> </option>
                                <option value="نعم"> نعم</option>
                                <option value="لا"> لا </option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="pull-left"><b>هل لديك كي  او حجامة </b></h5>
                        </div>
                    </div>



          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton" name="submit">Send</button>
        </form>
      </div>
    </div>
  </div>

  <hr>

<?php 


    
    if(isset($_POST['submit'])){


        $username  = $_POST['username'];
   $password  = $_POST['password'];

 
 

$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

if (!empty($username) && !empty($password)) {
    



$query = "select * from useres ";
$dude = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($dude)) {


$do = $row["username"];
$do2 = $row["jop_type"];
}



if ($username == $do && $do2 == '6') {
    

    echo "This name was used!! try another one";
}

else{

$query = "INSERT INTO useres (username , password , jop_type) values('$username' , '$password' , '6') ";

echo '<script type="text/javascript"> location.replace("register.php"); </script>';

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}

}
}else
{

    echo "<script>alert('نسيت حاجة فاضية') </script>";
}

$query = "select * from useres where username = '$username' ";
$dude = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($dude)) {

$d_id = $row['id'];
 $_SESSION['my_id'] = $d_id ;
}

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}
  $outid = $_SESSION['my_id'];



///==================================


$fname = $_POST['fname'];
$age=$_POST["age"];
 $email=$_POST["email"];
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



    # code...

$query = "INSERT INTO doners (name, age, emaile, nationalty, phone, adress, gender, sugar ,depretion , heart ,drogs, health_problems , tatoos, out_id )VALUES('$fname' ,'$age' , '$email', '$natu', '$phone', '$adress', '$gender', '$suger', '$depr', '$heart', '$drog', '$other', '$tatoo' , '$outid')";



$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error());

}

}
     ?>



  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
