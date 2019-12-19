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
	<br>
	<a href="index.html"><button type="button" class="btn btn-primary active">Go back to Home Page</button></a>
	<a href="adddata.php"><button type="button" class="btn btn-primary active">Add More Data</button></a><br><br>

	<div class="table-responsive">

		<center><table style="width: 80%" class="table table-bordered table-hover text-center">
			<thead>
				<tr class="success text-center">
					<th><center>Name</center></th>
					<th><center>Age</center></th>
					<th><center>Gender</center></th>
					<th><center>Department</center></th>
				</tr>
			</thead>
				

			<tbody>

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

			</tbody>
		</table></center>
	</div>

</body>
</html>