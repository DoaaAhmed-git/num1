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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">



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
      <a class="navbar-brand" >نظام الاشراف</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="moshref.php">الاحصائات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="moshref2.php">ادارة الموقع</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('nn.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <div class="page-heading">
            <h1>مرحبا بك في نظام ادارة بنك الدم</h1>
            
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <p>اخر الاخبار عن المعمل</p>
        
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form    action="" method="POST"  id="contact_me" name="sendMessage">
        
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>العنوان</label>
              <input type="text"  name="name" class="form-control" placeholder="عنوان " id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
         
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>الخبر</label>
              <textarea name="news" rows="5" class="form-control" placeholder="الخبر" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton" name="submit">ارسال</button>
        </form>
      </div>
    </div>
  </div>

  <hr>
  <!--Main layout-->
  <main>
    
<?php 
if (isset($_POST['submit'])) {

$name = $_POST['name'];
$news = $_POST['news'];

$query = "insert into news ( news , image) value ('$name' , '$news') ";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 





}

 ?>

              
              <br><br><br> 
             <center><p>تعليقات زوار الموقع</p></center>            
<table class="table table-bordered table-hover">
                <th colspan="10" ></th>
                <th style="direction:ltr;" class="text-right" ><i><b></b></i></th>
                <tr>
                    <th style="direction:ltr;" class="text-right"> التعليق </th>s
                     <th style="direction:ltr;" class="text-right">اسم المعلق</th>
                    <th style="direction:ltr;" class="text-right"> البريد الالكتروني</th>
                  
                </tr>

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
                    
"<td style='direction:rtl;' class='text-right'>"."<a href='?delete={$id1}'>"."<button class='btn btn-success' > delete </button></td></a></tr>";

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

  </main>
  </body>
  <!--Main layout-->

  <!--Footer-->
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
