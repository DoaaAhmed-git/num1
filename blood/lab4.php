
<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'stack' );
if ($conn === false) {
    echo "database not connected";


}
 ?>


<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css">
        html,
        body,
        header,
        .carousel {
            height: 60vh;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #929FBA !important;
            }
        }
        /*table { border: none; border-collapse: collapse; }*/
        /*table td { border-left: 1px solid #000; }*/
        /*table td:first-child { border-left: none; }*/

    </style>
</head>

<body>

<header>

      <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">

            <!-- Brand -->


            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav nav-flex-icons" >
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>

                <!-- Right -->

                <ul class="navbar-nav ml-auto" style="float:right;">
                    
                    
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!--Carousel Wrapper-->

    <!--/.Carousel Wrapper-->

</header>
<!--Main layout-->
<main>

<form action="" method="POST">
    
    <th colspan="5" class="text-right"  ><button class='btn btn-success'  name="submit2" type="submit">غير موجود</button></th>

<th class="text-right">


 <button  name="submit3" type="submit" class='btn btn-success' >متوفر جزئي</button></th>
 <button  name="submit4" type="submit" class='btn btn-success' >متوفر كامل</button></th>

</form>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

<?php 
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
 echo  $id = $_GET['delete'];
 
$query = " update  blood_buttel  set center = NULL , frezar = NULL , size = NULL , the_kind = NULL , fasela = NULL , statue = NULL  where date = '{$date}' "; 

$result = mysqli_query($conn, $query);
if(!$result){
die('query failed' . mysqli_error($conn));
} 

}

 ?>

<table class="table table-bordered table-hover" style="margin-top:-200px;"  >

 





        <th style="direction:rtl;" class="text-right" ><i><b>عملية التطابق</b></i></th>
        <tr>
            
            <th style="direction:rtl;width:30px; " class="text-right">الحجم</th>
             <th style="direction:rtl;width:30px; " class="text-right">الثلاجة</th>
            <th style="direction:rtl;width:30px; " class="text-right">الفصيلة</th>
            <th style="direction:rtl;width:30px; " class="text-right">التركيز</th>
            <th style="direction:rtl;width:30px; " class="text-right">نوع الدم</th>
            
        </tr>
       


<?php 

//error_reporting(0);

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

"<td style='direction:rtl;' class='text-right'>"."<a href='#?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

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

"<td style='direction:rtl;' class='text-right'>"."<a href='#?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

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

"<td style='direction:rtl;' class='text-right'>"."<a href='#?delete={$kees_id}' >"."<button class='btn btn-success'>حزف</button></a></td>"."</tr>";

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

"<td style='direction:rtl;' class='text-right'>"."<a href='#?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

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

"<td style='direction:rtl;' class='text-right'>"."<a href='#?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

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

"<td style='direction:rtl;' class='text-right'>"."<a href='#?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

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

"<td style='direction:rtl;' class='text-right'>"."<a href='#?delete={$kees_id}'>"."<button class='btn btn-success' > حزف </button></td></a></tr>";

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
    <!--<h2 style="position: fixed; top: 5%" >المعمل 3</h2>-->
    <!--<hr class="my-5">-->
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-11">

    <!-- Editable table -->
    
    <!-- Editable table -->
    </div>
</div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">



    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="#" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>

        <a href="#" target="_blank">
            <i class="fab fa-twitter mr-3"></i>
        </a>

        <a href="#" target="_blank">
            <i class="fab fa-youtube mr-3"></i>
        </a>

        <a href="#" target="_blank">
            <i class="fab fa-google-plus-g mr-3"></i>
        </a>

        <a href="#" target="_blank">
            <i class="fab fa-dribbble mr-3"></i>
        </a>

        <a href="#" target="_blank">
            <i class="fab fa-pinterest mr-3"></i>
        </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <!--<div class="footer-copyright py-3">-->
    <!--© 2019 Copyright:-->
    <!--<a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>-->
    <!--</div>-->
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
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





</script>
</body>

</html>
