<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";
}
session_start()
 ?>
 
<!DOCTYPE html>
<html lang="ar">



<?php 

error_reporting(0);

  echo $outid = $_SESSION['my_id'];
  $login_id = $_SESSION['my_id'];

if ($outid) {
 

$as = "SELECT * FROM  doners where out_id = '$outid' ";


            $result = $conn -> query($as);
                    if ($result -> num_rows > 0 ) {

                        while ($row = $result ->  fetch_assoc( )) {
                          $id = $row['id'];

 $name = $row["name"];
 $age = $row["age"];
$emaile = $row["emaile"];
$adress = $row["adress"];
$phone = $row["phone"];

}




$query = "SELECT * FROM  blood_buttel  where doner_id ='$id' ";
$result = mysqli_query($conn,$query);

 $post_number = mysqli_num_rows($result);



//-----------------------

 $n = time();
  $me = date('Y-m-d' , $n);


     while ($row = mysqli_fetch_array($result)) {

          $did = $row['doner_id'];
           $date = $row['date'];

            $next = date('d-m-yy' , strtotime("+3 months" , strtotime($date)));
        


}

}}
   ?>




<?php


if (isset($_POST['submit2'])) {

$comment  = $_POST['comment'];

$query = "INSERT INTO comments (name, emaile, comment) values('$name' , '$emaile' , '$comment') ";

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 

}



  ?>




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



  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  
</head>



<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" >نظام التبرع الطوعي للدم</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
           
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('b2.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <div class="page-heading">
            <h1>مرحبا بك <?php echo $name ?></h1>
                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            
          </div>
        </div>
      </div>
    </div>
  </header>



<body  style=" background-image: url(logo.jpg); background-repeat: no-repeat; background-position: right; background-position: top;  "   >



  
 




<div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">
          <div class="row">
              <!--Grid column-->
              <div class="col-lg-4 col-md-12 wow slideInLeft">

                  <!-- Card -->
                  <div class="card" style="height: 650px"  style="width: 150px">

                  <h1 class="text-center">مرحبا</h1>

<h4 class="card-title text-center"><?php echo $name ?></h4>

                      <!-- Card image -->
                      <form  action="" method="POST">
                        
<input type="text" name="name" value="<?php echo $name;  ?>" class="form-control"><br>

<input type="text" name="age" value="<?php echo $age; ?>" class="form-control"><br>

<input type="text" name="phone" value="<?php echo  $phone;  ?>" class="form-control"><br>

<input type="text" name="adress" value="<?php echo   $adress; ?>" class="form-control"><br>

<input type="text" name="emaile" value="<?php echo $emaile  ?>" class="form-control"><br>

<button   class="btn btn-primary purple-gradient"  type="submit"  name="submit" class="form-control" >تحديث</button>



                      </form>
                    <!-- Card content -->
                    <hr size="50px">
                   

                    <h5  class="text-right">تاريخ التبرع القادم  <h1><?php echo $next ?></h1></h5><br>

                    
                      <div class="card-body">

                  <!-- Title -->
                     
                      </div>

                  </div>
                  <!-- Card -->
              </div>
            
          
            
              




      <!--Section: Main info-->
      
         
              <!--Grid column-->
              <div class="col-lg-4 col-md-12 wow slideInRight" style="position: right" >

                  <!-- Card -->
                  <div class="card" style="height: 250px"  style="width: 50px">

                  

<h4 class="card-title text-center"><?php echo $name ?></h4>

<h4 class="text-right"> : ضع اقتراحك</h4>
<br><br><br>
                      <!-- Card image -->
                      <form  action="" method="POST">
                        
<textarea class="form-control" name="comment"></textarea>

 <hr size="50px">

<button   class="btn btn-primary purple-gradient"  type="submit"  name="submit2" class="form-control" >تم</button>
</form>
                     
                      <div class="card-body">

                  <!-- Title -->
                      </div>

                  </div>
                  <!-- Card -->
              </div>
            



            <div class="col-lg-4 col-md-12 wow slideInRight" style="position: right" >

                  <!-- Card -->
                  <div class="card" style="height: 250px"  style="width: 50px">

                  

<h4 class="card-title text-center"><?php echo $name ?></h4>
<br><br>

<h4 class="text-right"> : ازا اصبت بالسكري او الضغط او اي مرض مزمن او تعرضت للكي او الحجامة ..  اضغط على الزر ادناه</h4>
<br><br><br>
                      <!-- Card image -->
                      <form  action="" method="POST">
                        

 <hr size="50px">

<button   class="btn btn-primary purple-gradient"  type="submit"  name="submit3" class="form-control" >هنا</button>
</form>
                     
                      <div class="card-body">

                  <!-- Title -->
                      </div>

                  </div>
                  <!-- Card -->
              </div>
            

</div>
      </section>      
              </div>
             
            
              

  <!--Main layout-->
  <main>


  <?php 
if(isset($_POST['submit'])){
 


$name = $_POST['name'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$adress=$_POST['adress'];
$emaile=$_POST['emaile'];


$query = "update doners set name ='{$name}' , age = '{$age}', phone= '{$phone}' , adress='{$adress}' , emaile = '{$emaile}' where out_id = '{$outid}' ";


$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));


}
}



if (isset($_POST['submit3'])) {

$query = "delete from doners where out_id = '{$outid}' "; 
 $result2 = mysqli_query($conn, $query);
if(!$result2){
die('query failed' . mysqli_error());

        
}



}
?>


     

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  
</body>

</html>
