<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="devops.css">
</head>
<body>
<div id="container" >



<!-- everything to be sytled by BootStrap must be in a div container-->


	<div id="textToDisplay">
	<?php
	$connection = mysqli_connect("devops.clql55s9fxrz.eu-west-1.rds.amazonaws.com","DevOps","groupthree");
  	mysqli_select_db($connection,"DevOps");
  	$result=mysqli_query($connection,"select PassportNumber from PassportDetails ORDER BY PassportID DESC
	  LIMIT 1");
		
	while($row=mysqli_fetch_array($result))
	{
		print("<h2>"."Congratulations your flight is booked."."</h2>");
		print("<h2>"."Your passport number is: ".$row["PassportNumber"]."</h2>");
		
	}
	
	$query = mysqli_query($connection,"SELECT * FROM Flight  ORDER BY FlightID DESC
	LIMIT 1");
	
		while($row = mysqli_fetch_array($query)){
			//$barCodeNo = $row['Destination'];
			//$format = $row['Cost'];
			print("<h2>"."The cost of your flight is: €".$row["Cost"]."</h2>");
			print("<h2>"."Enjoy your stay in ".$row["Destination"]."."."</h2>");
			//echo $barCodeNo . ':' . $format . '<br />';
		}
	// Close connection
	//mysqli_close($con);
	?>
	</div>
</div>
</body>
</html>