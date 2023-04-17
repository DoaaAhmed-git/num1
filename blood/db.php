
<?php 

$host="localhost";
$username="id16204770_root";
$password="-oriuA3aIS^Ma/BC";
$dbname="id16204770_stack";

$conn=mysql_connect($host, $username, $password , $dbname);

if (mysqli_connect_errno()) 
	# code...
echo "no db".mysqli_connect_errno();

else
	echo "atabase connected";


 ?>