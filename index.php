<?php
//phpinfo();
//Create connection
$conn = mysqli_connect("basedatos:3306","root","123","usuarios");
//Check connection
if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
