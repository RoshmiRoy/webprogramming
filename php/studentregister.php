
<html>
<head>
</head>
<body>

<?php
$servername = "localhost";
$username = "20mca046";
$password = "2703";
$dbname = "20mca046";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql  = "INSERT INTO studentregiter (name,address,contactno,emailid) VALUES ('$name', '$address','$contactno','$emailid')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>

</html>













