<!DOCTYPE html>
<html>
<head>
	<title>Searched Results</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylecode.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<br>
	<a href="index.html"><button type="button" class="btn btn-primary active">Go back to Home Page</button></a>
	<a href="adddata.php"><button type="button" class="btn btn-primary active">Add More Data</button></a><br><br>

	<center>
		<form action="searchresults.php" method="post">
			<!-- xs (phones), sm (tablets), md (desktops), and lg (larger desktops) -->

			<h3>Filters to search the data</h3><br>
			<div class="row" style="margin-left: 5%; margin-right: 5%">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<label>Name:</label>
					<input type="text" name="schname" class="form-control" placeholder="Enter a name" >
				</div>


				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<label>Age:</label>
					<input type="text" name="schage" class="form-control" placeholder="Enter an age">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					
					<div><label>Gender:</label></div>
					
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<input type="checkbox" class="form-control" name="schmale" value="male">Male
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<input type="checkbox" class="form-control" name="schfemale" value="female">Female
					</div>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div><label>Department:</label></div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<input type="checkbox" class="form-control" name="schmech" value="mech">MECH
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<input type="checkbox" class="form-control" name="schetc" value="etc">ETC
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<input type="checkbox" class="form-control" name="schcomp" value="comp">COMP
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<input type="checkbox" class="form-control" name="schit" value="it">IT
					</div>
				</div>
			</div>

			<div class="form-group">
				<center><br><button type="submit" id="srchbtn" class="btn btn-success">Search</button></center>
			</div>
		</form>
	</center>


	<div class="table-responsive">
		<h3 align="center">Search Results</h3><br>
		<center>
			<table style="width: 80%" class="table table-bordered table-hover text-center">
				<thead>
					<tr class="success text-center">
						<th><center>Sr. No.</center></th>
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

					
					//input text name
					if(isset($_POST['schname']))
					{
						$inputname =  $_POST['schname'];
						//echo "  hello ".$inputname;
					}
					else
					{
						$inputname = '';
					}
					

					//input text age
					if(isset($_POST['schage']))
					{
						$inputage =  $_POST['schage'];
						//echo "  hello ".$inputage;
					}
					else
					{
						$inputage = '';
					}


					//gender male checkbox
					if (isset($_POST['schmale']))
					{
						$gendermale = $_POST['schmale'];
						//echo "  hello ".$gendermale;
					}
					else
					{
						$gendermale = "";
					}


					//gender male checkbox
					if (isset($_POST['schfemale']))
					{
						$genderfemale = $_POST['schfemale'];
						//echo "  hello ".$genderfemale;
					}
					else
					{
						$genderfemale = "";
					}


					//dept mech checkbox
					if (isset($_POST['schmech']))
					{
						$deptetc1 = $_POST['schmech'];
						//echo "  hello ".$deptetc1;
					}
					else
					{
						$deptetc1 = "";
					}

					
					//dept etc checkbox
					if (isset($_POST['schetc']))
					{
						$deptetc = $_POST['schetc'];
						//echo "  hello ".$deptetc;
					}
					else
					{
						$deptetc = "";
					}


					//dept comp checkbox
					if (isset($_POST['schcomp']))
					{
						$deptit1 = $_POST['schcomp'];
						//echo "  hello ".$deptit1;
					}
					else
					{
						$deptit1 = "";
					}


					//dept it checkbox
					if (isset($_POST['schit']))
					{
						$deptit = $_POST['schit'];
						//echo "  hello ".$deptit;
					}
					else
					{
						$deptit = "";
					}


					//selection query as per the filters
					$sql = " SELECT * FROM record WHERE 
					stdname = '$inputname' OR 
					stdage = '$inputage' OR 
					stdgender = '$gendermale' OR 
					stdgender = '$genderfemale' OR 
					stddept = '$deptetc1' OR 
					stddept = '$deptetc' OR 
					stddept = '$deptit1' OR 
					stddept = '$deptit' 
					";

					$result = $conn-> query($sql);

					if ($result-> num_rows > 0)
					{
						$i=1;
						while ($row = $result->fetch_assoc()) 
						{
							echo "<tr><td>".$i++."</td><td>".$row["stdname"]."</td><td>".$row["stdage"]."</td><td>".$row["stdgender"]."</td><td>".$row["stddept"]."</td></tr>";
						}
						echo "</table>";
					}
					else
					{
						// echo '
						// <script type="text/javascript">
						// window.open("showdata.php","_self");
						// alert("Error!! PLease try again!!");
						// </script>';
					}

					$conn->close();
					?>
				</tbody>
			</table>
		</center>
	</div>
</body>
</html>


<?php 
// session_start();
// require 'dbcon.php';

// $autodetails = $_SESSION['loginemail'];

// if (!isset($autodetails)) 
// {
// 	header('Location: loginform.php');
// }

// $autodetailssql = "SELECT * FROM numbers WHERE email = '$autodetails' ";
// $autodetailssqldata = $conn-> query($autodetailssql);
// $autodetailssqldataresults = $autodetailssqldata->fetch_assoc();

// echo $autodetailssqldataresults["username"];

?>