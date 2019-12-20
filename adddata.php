<!DOCTYPE html>
<html>
<title>Record Entries</title>
<link rel="stylesheet" type="text/css" href="stylecode.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
</head>
<body>

	<div class="container" style="width: 60%">
		<br><a href="index.html"><button type="button" class="btn btn-primary active">Go back to Home Page</button></a>	<br>
		
		<h2>Form to add data</h2>
		
		<form action="data.php" method="post">
			
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Enter your name" >
			</div>

			
			<div class="form-group">
				<label>Age:</label>
				<input type="text" name="age" class="form-control" placeholder="Enter your age">
			</div>

			<div>
				<div class="form-group" id="leftgndr">
				<label>Gender:</label>
				<select class="form-control" name="gender">
					<option value="">Select Your Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select> 
			</div>

			<div class="form-group" id="rightdept">
				<label>Department:</label>
				<select class="form-control" name="department">
					<option value="">Select Your Department</option>
					<option value="MECH">MECH</option>
					<option value="ETC">ETC</option>
					<option value="COMP">COMP</option>
					<option value="IT">IT</option>
				</select> 
			</div>
			</div>

			<div class="form-group">
				<center><button type="submit" class="btn btn-success">Add Data</button></center>
			</div>
		</form>
	</div>

</body>
</html>