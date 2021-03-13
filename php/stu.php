<html>
<head>
<title>Student Form</title>
</head>
<body>
<form method =  "POST" action="">

Name :
<input type = "text" name = "name" />
<br><br>
Branch :
<input type = "text" name = "branch">
<br><br>

<input type = "submit" name = "insert" value = "Save">
<input type = "Reset" value = "Cancel">

</form>

<?php
if(isset($_POST['insert']))
{
 $conn =mysqli_connect("localhost","20mca046","2703","20mca046");
if($conn)
 {
echo "Mysql connection ok<br>";

$name =$_POST['name'];
$branch = $_POST['branch'];


$sql="INSERT INTO stu(name,branch) VALUES ('$name','$branch')";

if(mysqli_query($conn, $sql))
{
echo "Data inserted successfully<br>";
}


mysqli_close($conn);
}
}
?>

</body>

</html>
