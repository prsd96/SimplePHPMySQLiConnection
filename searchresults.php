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

			
			<div class="row" style="margin-left: 5%; margin-right: 5%">
				
				<!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<label>Name:</label>
					<input type="text" name="schname" class="form-control" placeholder="Enter a name" >
				</div> -->


				<!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<label>Age:</label>
					<input type="text" name="schage" class="form-control" placeholder="Enter an age">
				</div> -->

				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<h3>Filters to search the data >></h3><br>
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

				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				</div>

			</div>

			<div class="form-group">
				<center><br><button type="submit" id="srchbtn" class="btn btn-success">Search</button></center>
			</div>
		</form>
	</center>


	<h3 align="center">Search Results</h3><br>
	<div class="table-responsive">
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
					error_reporting(0); 

					


					//gender male checkbox
					if (isset($_POST['schmale']))
					{
						$gendermale = $_POST['schmale'];
						$gender = 1;
						$man = 5;
						//echo "  hello ".$gendermale;
					}

					//gender male checkbox
					if (isset($_POST['schfemale']))
					{
						$genderfemale = $_POST['schfemale'];
						//echo "  hello ".$genderfemale;
						$gender = 1;
						$woman = 9;
					}


					//dept mech checkbox
					if (isset($_POST['schmech']))
					{
						$deptmech = $_POST['schmech'];
						//echo "  hello ".$deptmech;
						$dept = 21;
						$mechanical = 43;

						$MechEtc1 = 0102;
						$MechComp1 = 0103;
						$MechIt1 = 0104;

						$MechEtcComp1 = 010203;
						$MechEtcIt1 = 010204;
						$MechCompIt1 = 010304;
					}

					//dept etc checkbox
					if (isset($_POST['schetc']))
					{
						$deptetc = $_POST['schetc'];
						//echo "  hello ".$deptetc;
						$dept = 21;
						$electronic = 44;

						$MechEtc2 = 0102;
						$EtcComp1 = 0203;
						$EtcIt1 = 0204;

						$MechEtcComp2 = 010203;
						$MechEtcIt2 = 010204;
						$EtcCompIt1 = 020304;
					}

					//dept comp checkbox
					if (isset($_POST['schcomp']))
					{
						$deptcomp = $_POST['schcomp'];
						//echo "  hello ".$deptcomp;
						$dept = 21;
						$computer = 45;

						$MechComp2 = 0103;
						$EtcComp2 = 0203;
						$CompIt1 = 0304;

						$MechEtcComp3 = 010203;
						$MechCompIt2 = 010304;
						$EtcCompIt2 = 020304;
					}

					//dept it checkbox
					if (isset($_POST['schit']))
					{
						$deptit = $_POST['schit'];
						//echo "  hello ".$deptit;
						$dept = 21;
						$technology = 46;

						$MechIt2 = 0104;
						$EtcIt2 = 0204;
						$CompIt2 = 0304;

						$MechEtcIt3 = 010204;
						$MechCompIt3 = 010304;
						$EtcCompIt3 = 020304;
					}


					//selection query as per the filters

					$sql = " SELECT * FROM record WHERE ";

					if ($gender==1 && $man==5 && $woman ==9)
					{
						$sql .= " stdgender = '$gendermale' OR stdgender = '$genderfemale' ";
					}
					else
					{
						if($gender==1)
						{
							if ($man==5)
							{
								$sql .= " stdgender = '$gendermale' ";
							}

							if ($woman==9) 
							{
								$sql .= " stdgender = '$genderfemale' ";
							}	
						}
					}


					if ($gender==1 && $dept==21) 
					{
						$sql .= " AND ";
					}

					
					if ($dept==21 && $mechanical==43 && $electronic==44 && $computer==45 && $technology==46) 
					{
						$sql .= " stddept = '$deptmech' OR stddept = '$deptetc' OR stddept = '$deptcomp' OR stddept = '$deptit'";
					}
					else
					{
						if($dept==21)
						{
							//triple dept selection
							if($MechEtcComp1==010203 && $MechEtcComp2==010203 && $MechEtcComp3==010203)
							{
								//$triple = 333;
								$sql .= " stddept = '$deptmech' OR stddept = '$deptetc' OR stddept = '$deptcomp' ";
							}
							else
							{
								if($MechEtcIt1==010204 && $MechEtcIt2==010204 && $MechEtcIt3==010204)
								{
									//$triple = 333;
									$sql .= " stddept = '$deptmech' OR stddept = '$deptetc' OR stddept = '$deptit' ";
								}
								else
								{
									if($MechCompIt1==010304 && $MechCompIt2==010304 && $MechCompIt3==010304)
									{
										//$triple = 333;
										$sql .= " stddept = '$deptmech' OR stddept = '$deptcomp' OR stddept = '$deptit' ";
									}
									else
									{
										if($EtcCompIt1==020304 && $EtcCompIt2==020304 && $EtcCompIt3==020304)
										{
											//$triple = 333;
											$sql .= " stddept = '$deptetc' OR stddept = '$deptcomp' OR stddept = '$deptit' ";
										}
										else
										{
											$double = 888;
										}
									}
								}
							}

							if($double == 888)
							{
								// start of double dept selection
								if($MechEtc1==0102 && $MechEtc2==0102)
								{
									//$double = 222;
									$sql .= " stddept = '$deptmech' OR stddept = '$deptetc' ";
								}
								else
								{
									if($MechComp1==0103 && $MechComp2==0103)
									{
										//$double = 222;
										$sql .= " stddept = '$deptmech' OR stddept = '$deptcomp' ";	
									}
									else
									{
										if($MechIt1==0104 && $MechIt2==0104)
										{
											//$double = 222;
											$sql .= " stddept = '$deptmech' OR stddept = '$deptit' ";
										}
										else
										{
											if($EtcComp1==0203 && $EtcComp2==0203)
											{
												//$double = 222;
												$sql .= " stddept = '$deptetc' OR stddept = '$deptcomp' ";
											}
											else
											{
												if($EtcIt1==0204 && $EtcIt2==0204)
												{
													//$double = 222;
													$sql .= " stddept = '$deptetc'  OR stddept = '$deptit' ";
												}
												else
												{
													if($CompIt1==0304 && $CompIt2==0304)
													{
														//$double = 222;
														$sql .= " stddept = '$deptcomp' OR stddept = '$deptit' ";
													}
													else
													{
														$single = 777;
													}
												}
											}
										}
									}
								}
								// end of double dept selection
							}


							if($single == 777)
							{
								if($mechanical==43)
								{
									$sql .= " stddept = '$deptmech' ";
								}
								if($electronic==44)
								{
									$sql .= " stddept = '$deptetc' ";
								}
								if($computer==45)
								{
									$sql .= " stddept = '$deptcomp' ";
								}
								if($technology==46)
								{
									$sql .= " stddept = '$deptit' ";
								}
								//end of single dept selection
							}

						}
					}


					$result = $conn-> query($sql);

					if ($result-> num_rows > 0)
					{
						$i = 1;
						while ($row = $result->fetch_assoc()) 
						{
							echo "<tr>
							<td>".$i++."</td>
							<td>".$row["stdname"]."</td>
							<td>".$row["stdage"]."</td>
							<td>".$row["stdgender"]."</td>
							<td>".$row["stddept"]."</td></tr>";
						}
						echo "</table>";
					}
					else
					{
						//closing php to show no result error using html

						?>

						<div class="alert alert-danger alert-dismissible" role="alert" style="width: 50%"><strong>No Results</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
							</button>
						</div>


						<?php
						//opening php to continue
					}

					$conn->close();
					?>
				</tbody>
			</table>
		</center>
	</div>
</body>
</html>