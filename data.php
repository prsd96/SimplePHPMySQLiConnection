<?php 

//database connection
require('dbcon.php');

//pass form values
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$department = $_POST['department'];

//check connection
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
}

//insert query
$sql = "INSERT INTO record(stdname,stdage,stdgender,stddept) VALUES('$name','$age','$gender','$department')";

//insert query status
if ($conn->query($sql) === TRUE)
{
	echo '
	<script type="text/javascript">
	window.open("index.html","_self");
	alert("data added successfully");
	</script>';
}
else
{
	echo "Error: ".$sql."<br>".$conn->error;
}


$conn->close();

?>

