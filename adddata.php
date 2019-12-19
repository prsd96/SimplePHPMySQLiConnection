<!DOCTYPE html>
<html>
<title>Record Entries</title>
<head>
</head>
<body>

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

</body>
</html>