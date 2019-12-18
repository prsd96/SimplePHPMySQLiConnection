<?php 

//pass form values
$name = $_POST['name'];
$age = $_POST['age'];

//database connection
require('dbcon.php');

//check connection
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
}

//insert query
$sql = "INSERT INTO record(name,age) VALUES('$name','$age')";

//insert query status
if ($conn->query($sql) === TRUE)
{
	echo "ADDED : ".$name.", ".$age." ";
}
else
{
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>

