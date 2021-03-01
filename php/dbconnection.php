<html>
<body>
<?php
$servername="localhost";
$username = "20mca046";
$password = "2703";
$dbname ="20mca046";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if(!$connection)
{
die("connection failed :" mysqli_connect_error());
}
else
{
echo "connection sucessfully";
}
?>
</body>
</html>
