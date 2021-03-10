<html>
<head></head>
<body>
<div align="center">
<h1 style="text-align:center"><u>Insert Data</u></h1>
<form method="post" action="stu.php" >
<input type="text" name="name">
<input type="submit" value="submit" name="submit">

</div>
<div align="center">

</div>
<?php
$con=mysqli_connect("localhost","20mca046","2703","20mca046");
if(isset($_POST["submit"]))
{
if($con)
{
 $name=$_POST["name"];

$qry="INSERT INTO stu(name) VALUES ('$name')";

if(mysqli_query($con, $qry))
{
echo "Data inserted successfully<br>";
}
}


} 

mysqli_close($conn);
?>





</body>
</html>