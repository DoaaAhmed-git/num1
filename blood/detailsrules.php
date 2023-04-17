<?php
session_start();

if(empty($_SESSION["id"])){
    echo "<script> location = 'index.php';</script>";
}
require 'conn1.php';
?>

<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>تعديل القوانين</title>
           
            <link rel="shortcut icon" href="http://127.0.0.1/migos/image/icon.png">
        <script src="addelement_files/jquery.htm"></script>
        <script src="addelement_files/bootstrap.htm"></script>
            
            <style type="text/css">

            .btn1{
    width: 100px;
    height:30px; 
 
    margin: 10;
    margin-left:400;  
     background-color: red;
    font-family: cursive;
    color: azure;
}

#h{
  height: 50px;
  width: 100px;

}
.btn1:hover{
    width: 100px;
    height:40px; 
    margin: 10;
    margin-left:400; 
    background-color: greenyellow;
    font-family: cursive;
    color: black;
}

.d1{
    width: 500px;
    height: 700px;
    margin: 80;
    margin-left: 300;
    padding-left: 165px; 
      border-radius:90 30px 30px 90px;
}

h1{
    font-family: cursive;
    color: aliceblue;
}
.btn2{
    width: 100px;
    height:40px; 
 
    margin: 10;
    margin-left:400;
     background-color: greenyellow;
    font-family: cursive;
    color: black;
}
.btn2:hover{
    width: 100px;
    height:30px; 
    margin: 10;
    margin-left:400; 
    background-color: red;
    font-family: cursive;
    color: azure;
}
 
                input{
            margin-top: 20px;
margin-bottom: 30px;
background-color:white;
width: 300px;
height: 45px;
 border-radius:90 29px 30px 90px;
border-top: 0px;
border-left: solid 0px #ffffcc;
border-right: solid 0px #ffffcc;
border-bottom: solid 2px #ffffcc;
transition:   width 0.5s ,height 0.7s;

font-size: 24px;
color: black;

        }

body {
  background-image: url('image/backs.jpg');

  background-size: cover;
    background-repeat:no-repeat;
    background-attachment: fixed;
}

.reg{
width: 200px;
height: 60px;
background-color:  forestgreen;
margin-left: 100;
margin-top: 20px;
color: white;
font-family: cursive;
font-size: 20;


}

.del{

width: 200px;
height: 60px;
background-color: red;
margin-left: 100;
margin-top: 20px;
color: white;
font-family: cursive;
font-size: 25px;



}
.textarea{
    margin:30;
    padding: 10;
}
.d1{
  color: white;
    width: 600px;
    height: 700px;
    background:rgba(69,145,78,0.3);
      border-radius:0 50px 0px 50px;
      font-family: cursive;
font-size: 25px;
margin-left: 800px;

}
input{
    padding: 10;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.show1{
width: 250px;
height: 0px ;
float: right;
margin-left: 1000px;
}

            </style>
        </head>
    <body>

         



 

<script type="text/javascript">
    

  var longwords =[""];
var longfound=[""];
var long = 0;


  </script>    
<h1> تعديل و اضافة  و حذف  قانون</h1>
            <hr>
               <center>
             <button class="btn btn-light" id="h" onclick="location='rules.php'"> رجوع</button></center>
        <div class="d1">
        <p id="fk"></p>
        <form action="#" method="post">

        التفاصيل:
        <br><textarea class="textarea"  id="detiles" rows="7" cols="33" name="deti" placeholder="تفاصيل القانون" style="border-radius: 0px 25px 0px 30px"></textarea>
         <button name="submit2" id="new" class="reg" >اضافة </button>
     <button name="submit" id="update" class="reg" >تعديل </button>
     <button name ="submit1" id="delete" class="del">حذف</button>
      
         </div> 

</form>
 
         <?php
         if(empty($_SESSION["drules"]))
{

echo "<script> document.getElementById('update').style.display = 'none';
document.getElementById('delete').style.display = 'none';
 </script>";

}else{

echo "<script> document.getElementById('new').style.display = 'none';

 </script>";  
}

        $des= $_SESSION["drules"];
        $res=mysqli_query($conn,"select * from rule where num='$des'");
        $de=mysqli_fetch_assoc($res);

        
          echo "<script>
    
document.getElementById('detiles').value='".$de['rule_details']."';
</script>";


if (isset($_POST["submit"])){
  $del=mysqli_query($conn,"delete from rule where rule_details ='$des'");

$deti=$_POST["deti"];

$migos = mysqli_query ($conn, "insert into rule(rule_details) values ('$deti')");
 if(!$migos){
        echo mysqli_error($conn);

     }else{
  echo "<script>
 alert('Upload Sucssefully');
   location = 'rules.php';
  </script>";   
   }  
}

if (isset($_POST["submit1"])) {
  $del=mysqli_query($conn,"delete from rule where rule_details ='$des'");
  # code...
  
   echo "<script>
    alert('delete Sucssefully');
  location = 'rules.php';</script>";
}

if(isset($_POST["submit2"])){

$deti=$_POST["deti"];

$migos = mysqli_query ($conn, "insert into rule(rule_details) values ('$deti')");
 if(!$migos){
        echo mysqli_error($conn);

     }else{
  echo "<script>
 alert('Upload Sucssefully');
   location = 'rules.php';
  </script>";   
   }  

}
         ?>
          </body></html> 