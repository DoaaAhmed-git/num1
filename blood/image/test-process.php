<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$checkbox1 = $_POST['opt'];
$chk=""; 
foreach($checkbox1 as $chk1) 
{ 
$chk.= $chk1.","; 
} 
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
$image = $_FILES['image']['tmp_name'];
$img = file_get_contents($image);
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="upload/";
// new file size in KB
$new_size = $file_size/1024;
// new file size in KB
// make file name in lower case
$new_file_name = strtolower($file);
// make file name in lower case
$final_file=str_replace(' ','-',$new_file_name);
if(move_uploaded_file($file_loc,$folder.$final_file))
{
$con = mysqli_connect('127.0.0.1:3306','root','','info') or die('Unable To connect');
$sql = "insert into single (image,firstname,lastname,opt,file,type,size) values (?,'$firstname','$lastname','$chk','$final_file','$file_type','$new_size')";
$stmt = mysqli_prepare($con,$sql);
mysqli_stmt_bind_param($stmt, "s",$img);
mysqli_stmt_execute($stmt);
$check = mysqli_stmt_affected_rows($stmt);
}
if($check==1){
header('Location: success.php');
}else{
echo 'Error uploading Data';
}
mysqli_close($con);
}
?>