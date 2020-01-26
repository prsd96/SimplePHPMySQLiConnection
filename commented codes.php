<!-- add data form -->

<form action="data.php" method="post">

		Name: <input type="text" name="name"><br><br>
		Age: <input type="text" name="age"><br><br>
		Gender: 
		<select name="gender">
			<option value=" ">Select Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select><br><br>
		Department: 
		<select name="department">
			<option value=" ">Select Department</option>
			<option value="mech">MECH</option>
			<option value="etc">ETC</option>
			<option value="comp">COMP</option>
			<option value="it">IT</option>
		</select><br><br>

		<button type="submit">Add Data</button>
	</form>




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




	<!-- radio buttons -->
	<label>Gender : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender" value="Male"> Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender" value="Female">Female
			<br><br>
			<label>Department : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="dept" value="MECH"> MECH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="dept" value="ETC">ETC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="dept" value="COMP"> COMP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="dept" value="IT">IT
			<br><br>
			<button type="submit" id="btn" name="submit">Search</button><br><br><br>