<!DOCTYPE html>
<html>
<head>
	<title>Database Record</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<a href="index.html">Go back to Home Page</a>
	
	<table>
		<center>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Department</th>
			</tr>


			



			<?php 

//database connection
			require('dbcon.php');

//check connection
			if ($conn->connect_error)
			{
				die("Connection failed: ". $conn->connect_error);
			}

			$sql = "SELECT stdname,stdage,stdgender,stddept from record";
			$result = $conn-> query($sql);


			if ($result-> num_rows > 0)
			{
				while ($row = $result->fetch_assoc()) 
				{
					echo "<tr><td>".$row["stdname"]."</td><td>".$row["stdage"]."</td><td>".$row["stdgender"]."</td><td>".$row["stddept"]."</td></tr>";
				}
				echo "</table>";
			}
			else
			{
				echo "No entries yet!!";
			}

			$conn->close();

			?>

		</center>
	</table>

</body>
</html>