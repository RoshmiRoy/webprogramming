<html>
<body>
<?php
$servername = "localhost";
$username = "20mca046";
$password = "2703";
$dbname = "20mca046";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$id=$_GET["id"];
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM stu WHERE id=10";


if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>